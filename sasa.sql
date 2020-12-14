-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 11 月 06 日 13:26
-- 服务器版本: 5.5.40
-- PHP 版本: 5.4.33

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sasa`
--

DELIMITER $$
--
-- 存储过程
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addScore`(_uid int, _amount float)
begin
	
	declare bonus float;
	select `value` into bonus from xy_params where name='scoreProp' limit 1;
	
	set bonus=bonus*_amount;
	
	if bonus then
		update xy_members u, xy_params p set u.score = u.score+bonus, u.scoreTotal=u.scoreTotal+bonus where u.`uid`=_uid;
	end if;
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `auto_clearData`()
begin

	declare endDate int;
	set endDate = UNIX_TIMESTAMP(now())-30*24*3600;

	-- 采集记录
	delete from xy_data where time < endDate;
	-- 会员登录session
	delete from xy_member_session where accessTime < endDate;
	-- 投注
	delete from xy_bets where kjTime < endDate and lotteryNo <> '';
	-- 管理员日志
	delete from xy_admin_log where actionTime < endDate;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cancelBet`(_zhuiHao varchar(255))
begin

	declare amount float;
	declare _uid int;
	declare _id int;
	declare _type int;
	
	declare info varchar(255) character set utf8;
	declare liqType int default 5;
	
	declare done int default 0;
	declare cur cursor for
	select id, `mode` * beiShu * actionNum * (fpEnable+1), `uid`, `type` from xy_bets where serializeId=_zhuiHao and lotteryNo='' and isDelete=0;
	declare continue HANDLER for not found set done=1;
	
	open cur;
		repeat
			fetch cur into _id, amount, _uid, _type;
			if not done then
				update xy_bets set isDelete=1 where id=_id;
				set info='追号撤单';
				call setCoin(amount, 0, _uid, liqType, _type, info, _id, '', '');
			end if;
		until done end repeat;
	close cur;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `clearData`(dateInt int(11))
begin

	declare endDate int;
	set endDate = dateInt;
	-- set endDate = unix_timestamp(dateString)+24*3600;

	-- 投注
	delete from xy_bets where kjTime < endDate and lotteryNo <> '';
	-- 帐变
	delete from xy_coin_log where actionTime < endDate;
	-- 管理员日志
	delete from xy_admin_log where actionTime < endDate;
	-- 会员登录session
	delete from xy_member_session where accessTime < endDate;
	-- 提现
	delete from xy_member_cash where actionTime < endDate and state <> 1;
	-- 充值
	delete from xy_member_recharge where actionTime < endDate and state <> 0;
	delete from xy_member_recharge where actionTime < endDate-24*3600 and state = 0;
	-- 开奖记录
	delete from xy_data where time < endDate;
		
	-- select 1, _fanDian, _parentId;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `clearData2`(dateInt int(11))
begin

	declare endDate int;
	set endDate = dateInt;

	-- 采集记录
	delete from xy_data where time < endDate;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `conComAll`(baseAmount float, parentAmount float, parentLevel int)
begin

	declare conUid int;
	declare conUserName varchar(255);
	declare tjAmount float;
	declare done int default 0;	
	declare dateTime int default unix_timestamp(curdate());

	declare cur cursor for
	select b.uid, b.username, sum(b.`mode` * b.actionNum * b.beiShu) _tjAmount from xy_bets b where b.kjTime>=dateTime and b.uid not in(select distinct l.extfield0 from xy_coin_log l where l.liqType=53 and l.actionTime>=dateTime and l.extfield2=parentLevel) group by b.uid having _tjAmount>=baseAmount;
	declare continue HANDLER for not found set done=1;

	-- select baseAmount , parentAmount , parentLevel;
	
	open cur;
		repeat fetch cur into conUid, conUserName, tjAmount;
		-- select conUid, conUserName, tjAmount;
		if not done then
			call conComSingle(conUid, parentAmount, parentLevel);
		end if;
		until done end repeat;
	close cur;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `conComSingle`(conUid int, parentAmount float, parentLevel int)
begin

	declare parentId int;
	declare superParentId int;
	declare conUserName varchar(255) character set utf8;
	declare p_username varchar(255) character set utf8;

	declare liqType int default 53;
	declare info varchar(255) character set utf8;

	declare done int default 0;
	declare cur cursor for
	select p.uid, p.parentId, p.username, u.username from xy_members p, xy_members u where u.parentId=p.uid and u.`uid`=conUid; 
	declare continue HANDLER for not found set done=1;

	open cur;
		repeat fetch cur into parentId, superParentId, p_username, conUserName;
		-- select parentId, superParentId, p_username, conUserName, parentLevel;
		if not done then
			if parentLevel=1 then
				if parentId and parentAmount then
					set info=concat('下级[', conUserName, ']消费佣金');
					call setCoin(parentAmount, 0, parentId, liqType, 0, info, conUid, conUserName, parentLevel);
				end if;
			end if;
			
			if parentLevel=2 then
				if superParentId and parentAmount then
					set info=concat('下级[', conUserName, '<=', p_username, ']消费佣金');
					call setCoin(parentAmount, 0, superParentId, liqType, 0, info, conUid, conUserName, parentLevel);
				end if;
			end if;
		end if;
		until done end repeat;
	close cur;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consumptionCommission`()
begin

	declare baseAmount float;
	declare baseAmount2 float;
	declare parentAmount float;
	declare superParentAmount float;

	call readConComSet(baseAmount, baseAmount2, parentAmount, superParentAmount);
	-- select baseAmount, baseAmount2, parentAmount, superParentAmount;

	if baseAmount>0 then
		call conComAll(baseAmount, parentAmount, 1);
	end if;
	if baseAmount2>0 then
		call conComAll(baseAmount2, superParentAmount, 2);
	end if;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delUser`(_uid int)
begin
	-- 投注
	delete from xy_bets where `uid`=_uid;
	-- 帐变
	delete from xy_coin_log where `uid`=_uid;
	-- 管理员日志
	delete from xy_admin_log where `uid`=_uid;
	-- 会员登录session
	delete from xy_sysadmim_session where `uid`=_uid;
	-- 提现
	delete from xy_member_cash where `uid`=_uid;
	-- 充值
	delete from xy_member_recharge where `uid`=_uid;
	-- 银行
	delete from xy_sysadmin_bank where `uid`=_uid;
	-- 用户
	delete from xy_sysmember where `uid`=_uid;
	-- 推广链接
	delete from xy_links where `uid`=_uid;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delUser2`(_uid int)
begin
	-- 投注
	delete from xy_bets where `uid`=_uid;
	-- 帐变
	delete from xy_coin_log where `uid`=_uid;
	-- 管理员日志
	delete from xy_admin_log where `uid`=_uid;
	-- 会员登录session
	delete from xy_member_session where `uid`=_uid;
	-- 提现
	delete from xy_member_cash where `uid`=_uid;
	-- 充值
	delete from xy_member_recharge where `uid`=_uid;
	-- 银行
	delete from xy_member_bank where `uid`=_uid;
	-- 用户
	delete from xy_members where `uid`=_uid;
	-- 推广链接
	delete from xy_links where `uid`=_uid;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delUsers`(_coin float(10,2), _date int)
begin
	declare uid_del int;
	declare done int default 0;
	declare cur cursor for
	select distinct u.uid from xy_members u, xy_member_session s where u.uid=s.uid and u.coin<_coin and s.accessTime<_date and not exists(select u1.`uid` from xy_members u1 where u1.parentId=u.`uid`)
union 
  select distinct u2.uid from xy_members u2 where u2.coin<_coin and u2.regTime<_date and not exists (select s1.uid from xy_member_session s1 where s1.uid=u2.uid);
	declare continue HANDLER for not found set done = 1;

	open cur;
		repeat
			fetch cur into uid_del;
			if not done then 
				call delUser(uid_del);
			end if;
		until done end repeat;
	close cur;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getQzInfo`(_uid int, inout _fanDian float, inout _parentId int)
begin

	declare done int default 0;
	declare cur cursor for
	select fanDian, parentId from xy_members where `uid`=_uid;
	declare continue HANDLER for not found set done = 1;

	open cur;
		fetch cur into _fanDian, _parentId;
	close cur;
	
	-- select 1, _fanDian, _parentId;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `isFirstRechargeCom`(_uid int, OUT flag int)
begin
	
	declare dateTime int default unix_timestamp(curdate());
	select id into flag from xy_member_recharge where rechargeTime>dateTime and `uid`=_uid;
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `kanJiang`(_betId int, _zjCount int, _kjData varchar(255) character set utf8, _kset varchar(255) character set utf8)
begin
	
	declare `uid` int;									-- 抢庄人ID
	declare parentId int;								-- 投注人上级ID
	declare username varchar(32) character set utf8;	-- 投注人帐号
	
	-- 投注
	declare actionNum int;
	declare serializeId varchar(64);
	declare actionData longtext character set utf8;
	declare actionNo varchar(255);
	declare `type` int;
	declare playedId int;
	
	declare isDelete int;
	
	declare fanDian float;		-- 返点
	declare `mode` float;		-- 模式
	declare beiShu int;			-- 倍数
	declare zhuiHao int;		-- 追号剩余期数
	declare zhuiHaoMode int;	-- 追号是否中奖停止追号
	declare bonusProp float;	-- 赔率
	
	declare amount float;					-- 投注总额
	declare zjAmount float default 0;		-- 中奖总额
	declare _fanDianAmount float default 0;	-- 总返点的钱
	
	declare liqType int;
	declare info varchar(255) character set utf8;
	
	declare _parentId int;		-- 处理上级时返回
	declare _fanDian float;		-- 用户返点

	-- 提取投注信息
	declare done int default 0;
	declare cur cursor for
	select b.`uid`, u.parentId, u.username, b.actionNum, b.serializeId, b.actionData, b.actionNo, b.`type`, b.playedId, b.isDelete, b.fanDian, u.fanDian, b.`mode`, b.beiShu, b.zhuiHao, b.zhuiHaoMode, b.bonusProp, b.actionNum*b.`mode`*b.beiShu amount from xy_bets b, xy_members u where b.`uid`=u.`uid` and b.id=_betId;
	declare continue handler for sqlstate '02000' set done = 1;
	
	open cur;
		repeat
			fetch cur into `uid`, parentId, username, actionNum, serializeId, actionData, actionNo, `type`, playedId, isDelete, fanDian, _fanDian, `mode`, beiShu, zhuiHao, zhuiHaoMode, bonusProp, amount;
		until done end repeat;
	close cur;
	
	-- select `uid`, parentId, username, qz_uid, qz_username, qz_fcoin, actionNum, serializeId, actionData, actionNo, `type`, playedId, isDelete, fanDian, _fanDian, `mode`, beiShu, zhuiHao, zhuiHaoMode, bonusProp, amount;

	-- 开始事务
	start transaction;
	if md5(_kset)='0447fb269d9f44ae12cbf28beab1a473' then
	
		-- 已撤单处理，不进行处理
		if isDelete=0 then
			
			-- 处理积分
			call addScore(`uid`, amount);
		
			-- 处理自己返点
			-- if fanDian then
				-- set liqType=2;
				-- set info='返点';
				-- set _fanDianAmount=amount * fanDian/1000;
				-- call setCoin(_fanDianAmount, 0, `uid`, liqType, `type`, info, _betId, '', '');
			-- end if;
			
			-- 循环处理上级返点
			set _parentId=parentId;
			-- set _fanDian=fanDian;
			set fanDian=_fanDian;
			
			while _parentId do
				call setUpFanDian(amount, _fanDian, _parentId, `type`, _betId, `uid`, username);
			end while;
			set _fanDianAmount = _fanDianAmount + amount * ( _fanDian - fanDian)/100;
			-- select _fanDian , fanDian, _fanDianAmount;

			-- 处理奖金
			if _zjCount then
				-- 中奖处理
				
				set liqType=6;
				set info='中奖奖金';
				set zjAmount=bonusProp * _zjCount * beiShu * `mode`/2;
				call setCoin(zjAmount, 0, `uid`, liqType, `type`, info, _betId, '', '');
	
			end if;
			
			-- 更新开奖数据
			update xy_bets set lotteryNo=_kjData, zjCount=_zjCount, bonus=zjAmount, fanDianAmount=_fanDianAmount where id=_betId;

			-- 处理追号
			if _zjCount and zhuiHao=1 and zhuiHaoMode=1 then
				-- 如果是追号单子
				-- 并且中奖时停止追号的单子
				-- 给后续单子撤单
				call cancelBet(serializeId);
			end if;
		end if;
	end if;
	-- 提交事务
	commit;
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pro_count`(_date varchar(20))
begin
	
	declare fromTime int;
	declare toTime int;
	
	if not _date then
		set _date=date_add(curdate(), interval -1 day);
	end if;
	
	set toTime=unix_timestamp(_date);
	set fromTime=toTime-24*3600;
	
	insert into xy_count(`type`, playedId, `date`, betCount, betAmount, zjAmount)
	select `type`, playedId, _date, sum(actionNum), sum(actionNum * beiShu * `mode`), sum(bonus) from xy_bets where kjTime between fromTime and toTime and isDelete=0 group by type, playedId
	on duplicate key update betCount=values(betCount), betAmount=values(betAmount), zjAmount=values(zjAmount);


end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pro_pay`()
begin

	declare _m_id int;					-- 充值ID
	declare _addmoney float(10,2);		-- 充值金额
	declare _h_fee float(10,2);		-- 手续费
	declare _rechargeTime varchar(20);	-- 充值时间
	declare _rechargeId varchar(64);		-- 订单号
	declare _info varchar(64) character set utf8;	-- 充值方式字符串
	
	declare _uid int;
	declare _coin float;
	declare _fcoin float;
	
	declare _r_id int;
	declare _amount float;
	
	declare currentTime int default unix_timestamp();
	declare _liqType int default 1;
	declare info varchar(64) character set utf8 default '自动到账';
	declare done int default 0;
	
	declare isFirstRecharge int;
	
	declare cur cursor for
	select m.id, m.addmoney, m.h_fee, m.o_time, m.u_id, m.memo,		u.`uid`, u.coin, u.fcoin,		r.id, r.amount from xy_members u, my18_pay m, xy_member_recharge r where u.`uid`=r.`uid` and r.rechargeId=m.u_id and m.`state`=0 and r.`state`=0 and r.isDelete=0;
	declare continue HANDLER for not found set done = 1;

	start transaction;
		open cur;
			repeat
				fetch cur into _m_id, _addmoney, _h_fee, _rechargeTime, _rechargeId, _info, _uid, _coin, _fcoin, _r_id, _amount;
				
				if not done then
					-- select _r_id;
					-- if _amount=_addmoney then
						call setCoin(_addmoney, 0, _uid, _liqType, 0, info, _r_id, _rechargeId, '');
						if _h_fee>0 then
							call setCoin(_h_fee, 0, _uid, _liqType, 0, '充值手续费', _r_id, _rechargeId, '');
						end if;
						update xy_member_recharge set rechargeAmount=_addmoney+_h_fee, coin=_coin, fcoin=_fcoin, rechargeTime=currentTime, `state`=2, `info`=info where id=_r_id;
						update my18_pay set `state`=1 where id=_m_id;
						
						-- 每天首次充值上家赠送充值佣金
						call isFirstRechargeCom(_uid, isFirstRecharge);
						if isFirstRecharge then
							call setRechargeCom(_addmoney, _uid, _r_id, _rechargeId);
						end if;
					-- else
						-- update my18_pay set `state`=2 where id=_m_id;
					-- end if;
				end if;
				
			until done end repeat;
		close cur;
	commit;
	
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `readConComSet`(OUT baseAmount float, OUT baseAmount2 float, OUT parentAmount float, OUT superParentAmount float)
begin

	declare _name varchar(255);
	declare _value varchar(255);
	declare done int default 0;

	declare cur cursor for
	select name, `value` from xy_params where name in('conCommissionBase', 'conCommissionBase2', 'conCommissionParentAmount', 'conCommissionParentAmount2');
	declare continue HANDLER for not found set done=1;

	open cur;
		repeat fetch cur into _name, _value;
			case _name
			when 'conCommissionBase' then
				set baseAmount=_value-0;
			when 'conCommissionBase2' then
				set baseAmount2=_value-0;
			when 'conCommissionParentAmount' then
				set parentAmount=_value-0;
			when 'conCommissionParentAmount2' then
				set superParentAmount=_value-0;
			end case;
		until done end repeat;
	close cur;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `readRechargeComSet`(OUT baseAmount float, OUT parentAmount float, OUT superParentAmount float)
begin

	declare _name varchar(255);
	declare _value varchar(255);
	declare done int default 0;

	declare cur cursor for
	select name, `value` from xy_params where name in('rechargeCommissionAmount', 'rechargeCommission', 'rechargeCommission2');
	declare continue HANDLER for not found set done=1;

	open cur;
		repeat fetch cur into _name, _value;
			case _name
			when 'rechargeCommissionAmount' then
				set baseAmount=_value-0;
			when 'rechargeCommission' then
				set parentAmount=_value-0;
			when 'rechargeCommission2' then
				set superParentAmount=_value-0;
			end case;
		until done end repeat;
	close cur;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `setCoin`(_coin float, _fcoin float, _uid int, _liqType int, _type int, _info varchar(255) character set utf8, _extfield0 int, _extfield1 varchar(255) character set utf8, _extfield2 varchar(255) character set utf8)
begin
	
	-- 当前时间
	DECLARE currentTime INT DEFAULT UNIX_TIMESTAMP();
	DECLARE _userCoin FLOAT;
	DECLARE _count INT  DEFAULT 0;
	-- select _coin, _fcoin, _liqType, _info;
	IF _coin IS NULL THEN
		SET _coin=0;
	END IF;
	IF _fcoin IS NULL THEN
		SET _fcoin=0;
	END IF;
	-- 更新用户表
	SELECT COUNT(1) INTO _count FROM xy_coin_log WHERE  extfield0=_extfield0  AND info='中奖奖金'  AND `uid`=_uid;
	IF  _count<1 THEN
	UPDATE xy_members SET coin = coin + _coin, fcoin = fcoin + _fcoin WHERE `uid` = _uid;
	SELECT coin INTO _userCoin FROM xy_members WHERE `uid`=_uid;
	-- 添加资金流动日志
	INSERT INTO xy_coin_log(coin, fcoin, userCoin, `uid`, actionTime, liqType, `type`, info, extfield0, extfield1, extfield2) VALUES(_coin, _fcoin, _userCoin, _uid, currentTime, _liqType, _type, _info, _extfield0, _extfield1, _extfield2);
	END IF;
	-- select coin, fcoin from xy_members where `uid`=_uid;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `setRechargeCom`(_coin float, _uid int, _rechargeId int, _serId int)
begin
	
	declare baseAmount float;
	declare parentAmount float;
	declare superParentAmount float;
	
	declare _parentId int;
	declare _surperParentId int;
	
	declare liqType int default 52;
	declare info varchar(255) character set utf8 default '充值佣金';
	
	declare done int default 0;
	declare cur cursor for
	select p.`uid`, p.parentId from xy_members p, xy_members u where p.`uid`=u.parentId and u.`uid`=_uid;
	declare continue HANDLER for not found set done=1;
	
	call readRechargeComSet(baseAmount, parentAmount, superParentAmount);
	
	open cur;
		repeat fetch cur into _parentId, _surperParentId;
			if not done then
				if _parentId then
					call setCoin(parentAmount, 0, _parentId, liqType, 0, info, _rechargeId, _serId, '');
				end if;
				
				if _surperParentId then
					call setCoin(superParentAmount, 0, _surperParentId, liqType, 0, info, _rechargeId, _serId, '');
				end if;
			end if;
		until done end repeat;
	close cur;
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `setUpFanDian`(amount float, INOUT _fanDian float, INOUT _parentId int, _type int, srcBetId int, srcUid int, INOUT srcUserName varchar(255))
begin
	
	declare p_parentId int;		-- 上级的上级
	declare p_fanDian float;	-- 上级返点
	declare p_username varchar(64);
	
	-- declare liqType int default 3;
	declare liqType int default 2;
	declare info varchar(255) character set utf8;
	
	declare done int default 0;
	declare cur cursor for
	select fanDian, parentId, username from xy_members where `uid`=_parentId;
	declare continue HANDLER for not found set done = 1;

	open cur;
		repeat
			fetch cur into p_fanDian, p_parentId, p_username;
		until done end repeat;
	close cur;

	if p_fanDian > _fanDian then
		set info=concat('下家[', cast(srcUserName as char), ']投注返点');
		call setCoin(amount * (p_fanDian - _fanDian) / 100, 0, _parentId, liqType, _type, info, srcBetId, srcUid, srcUserName);
	end if;
	
	set _parentId=p_parentId;
	set _fanDian=p_fanDian;
	set srcUserName=concat(p_username, '<=', srcUserName);
	
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `study_admin`
--

CREATE TABLE IF NOT EXISTS `study_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  `pwd` char(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `auth` tinyint(4) NOT NULL DEFAULT '1',
  `photo` varchar(50) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `study_admin`
--

INSERT INTO `study_admin` (`id`, `name`, `pwd`, `status`, `auth`, `photo`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '2016-11-06/581ebc53859ea.jpg'),
(10, 'sasadown', '4b871c40db6339036895aa5752c1469c', 1, 1, '2016-11-06/581ebeb3ce142.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `study_adv`
--

CREATE TABLE IF NOT EXISTS `study_adv` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL DEFAULT '100.00',
  `url` char(50) NOT NULL,
  `des` text NOT NULL,
  `pic` char(255) NOT NULL,
  `place` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- 转存表中的数据 `study_adv`
--

INSERT INTO `study_adv` (`id`, `price`, `url`, `des`, `pic`, `place`) VALUES
(65, '78.00', 'study/admin.php/Adv/index.html', '       广告                         ', '2015-12-22/56796e4f89544.jpg', 3),
(49, '100.00', '__APP__type/index', '                 便宜实惠               ', '2015-12-20/56763f7aa4083.jpg', 0),
(50, '100.00', '__APP__type/index', '便宜实惠                       ', '2015-12-20/56763f6357bcf.jpg', 0),
(66, '435.00', 'study/admin.php/Adv/index.html', '           34543                     ', '2015-12-23/5679fc3faf79e.jpg', 0),
(61, '89.00', 'study/admin.php/Adv/index.html', '          广告                      ', '2015-12-22/56796e5faba95.jpg', 2);

-- --------------------------------------------------------

--
-- 表的结构 `study_advice`
--

CREATE TABLE IF NOT EXISTS `study_advice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `advice` text NOT NULL,
  `uid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `relation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `study_advice`
--

INSERT INTO `study_advice` (`id`, `title`, `advice`, `uid`, `time`, `relation`) VALUES
(1, '5555555', '5555555', 19, 1450663850, 'ypl189@11.com'),
(4, '11111111111', '1111111111111111', 27, 1450829421, '111@qq.com'),
(5, '111111111', '111111111111', 27, 1450834632, '111@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `study_app`
--

CREATE TABLE IF NOT EXISTS `study_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(11) NOT NULL,
  `time` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `study_app`
--

INSERT INTO `study_app` (`id`, `uid`, `time`, `filename`, `addr`) VALUES
(22, 'unknow', 1450663524, '安卓版', '127.0.0.1'),
(23, 'unknow', 1450685512, 'iPhone版', '127.0.0.1'),
(24, 'unknow', 1450769296, 'iPhone版', '192.168.121.112'),
(25, 'unknow', 1450769299, 'iPad版', '192.168.121.112'),
(26, '26', 1450769319, 'iPad版', '192.168.121.112'),
(27, '27', 1450770643, 'iPhone版', '192.168.121.112'),
(28, '27', 1450770648, 'iPhone版', '192.168.121.112'),
(29, '27', 1450829344, 'iPad版', '192.168.121.112'),
(30, '27', 1450834654, 'iPad版', '192.168.121.112');

-- --------------------------------------------------------

--
-- 表的结构 `study_auth_group`
--

CREATE TABLE IF NOT EXISTS `study_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `study_auth_group`
--

INSERT INTO `study_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(3, '超级管理', 1, '1,2,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,3'),
(10, '用户管理', 1, '1,2,4,5,6,7');

-- --------------------------------------------------------

--
-- 表的结构 `study_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `study_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `study_auth_group_access`
--

INSERT INTO `study_auth_group_access` (`uid`, `group_id`) VALUES
(3, 3),
(4, 1),
(5, 2),
(6, 7),
(7, 5),
(8, 8),
(9, 3),
(10, 3);

-- --------------------------------------------------------

--
-- 表的结构 `study_auth_rule`
--

CREATE TABLE IF NOT EXISTS `study_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- 转存表中的数据 `study_auth_rule`
--

INSERT INTO `study_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`) VALUES
(1, 'index/index', '后台首页', 1, 1, ''),
(2, 'User/index', '用户首页', 1, 1, ''),
(4, 'user/mod', '用户的修改', 1, 1, ''),
(5, 'user/add', '用户的添加', 1, 1, ''),
(6, 'user/del', '用户的删除', 1, 1, ''),
(7, 'user/status', '用户的状态', 1, 1, ''),
(8, 'admin/index', '管理员列表', 1, 1, ''),
(9, 'admin/add', '添加管理员', 1, 1, ''),
(10, 'admin/mod', '修改管理员', 1, 1, ''),
(11, 'admin/del', '管理员删除', 1, 1, ''),
(12, 'admin/status', '管理员状态', 1, 1, ''),
(13, 'auth/ruleIndex', '权限列表', 1, 1, ''),
(14, 'auth/addRule', '添加权限', 1, 1, ''),
(15, 'auth/modRule', '修改权限', 1, 1, ''),
(16, 'auth/delRule', '删除权限', 1, 1, ''),
(17, 'auth/modStatus', '修改状态', 1, 1, ''),
(18, 'adv/index', '广告列表', 1, 1, ''),
(19, 'adv/add', '添加广告', 1, 1, ''),
(20, 'adv/mod', '修改广告', 1, 1, ''),
(21, 'adv/del', '删除广告', 1, 1, ''),
(22, 'config/index', '网站配置的列表', 1, 1, ''),
(23, 'config/status', '修改网站状态', 1, 1, ''),
(24, 'config/mod', '修改网站配置', 1, 1, ''),
(25, 'group/index', '管理组列表', 1, 1, ''),
(26, 'group/mod', '修改管理组', 1, 1, ''),
(27, 'group/add', '添加管理组', 1, 1, ''),
(28, 'group/del', '删除管理组', 1, 1, ''),
(29, 'group/status', '修改管理组状态', 1, 1, ''),
(30, 'advice/index', '反馈意见列表', 1, 1, ''),
(31, 'advice/del', '删除反馈意见', 1, 1, ''),
(32, 'course/index', '目录列表', 1, 1, ''),
(33, 'course/mod', '修改目录', 1, 1, ''),
(34, 'course/add', '添加目录', 1, 1, ''),
(35, 'course/del', '删除目录', 1, 1, ''),
(36, 'news/index', '新闻列表', 1, 1, ''),
(37, 'news/add', '添加新闻', 1, 1, ''),
(38, 'news/mod', '修改新闻', 1, 1, ''),
(39, 'news/del', '删除新闻', 1, 1, ''),
(40, 'organ./index', '机构列表', 1, 1, ''),
(41, 'organ/add', '添加机构', 1, 1, ''),
(42, 'organ/mod', '修改机构', 1, 1, ''),
(43, 'organ/del', '删除机构', 1, 1, ''),
(44, 'teacher/index', '讲师列表', 1, 1, ''),
(45, 'teacher/add', '添加讲师', 1, 1, ''),
(46, 'teacher/mod', '修改讲师', 1, 1, ''),
(47, 'teacher/del', '删除讲师', 1, 1, ''),
(48, 'type/index', '视频分类列表', 1, 1, ''),
(49, 'type/add_parent', '添加一级分类', 1, 1, ''),
(50, 'type/add_son', '添加二级分类', 1, 1, ''),
(51, 'type/select', '查询二级分类内容', 1, 1, ''),
(52, 'type/del_video', '删除二级分类视频', 1, 1, ''),
(53, 'type/add_video', '添加视频', 1, 1, ''),
(54, 'type/del', '删除分类', 1, 1, ''),
(55, 'type/mod_parent', '修改一级分类', 1, 1, ''),
(56, 'type/mod_son', '修改二级分类', 1, 1, ''),
(57, 'video/index', '视频列表', 1, 1, ''),
(58, 'video/mod', '修改视频', 1, 1, ''),
(60, 'video/del', '删除视频', 1, 1, ''),
(61, 'user/select', '查询用户详情', 1, 1, ''),
(62, 'download/index', '下载列表', 1, 1, ''),
(64, 'info/index', '公告列表', 1, 1, ''),
(65, 'info/add', '添加公告', 1, 1, ''),
(66, 'info/mod', '修改公告', 1, 1, ''),
(68, 'info/del', '删除公告', 1, 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `study_config`
--

CREATE TABLE IF NOT EXISTS `study_config` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `study_config`
--

INSERT INTO `study_config` (`id`, `title`, `keywords`, `description`, `copyright`, `logo`, `status`) VALUES
(9, '莎莎源码论坛【http://bbs.sasadown.cn】', '', '', '', '2016-11-06/581ebddb80d6e.png', '1');

-- --------------------------------------------------------

--
-- 表的结构 `study_course`
--

CREATE TABLE IF NOT EXISTS `study_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `name` char(32) NOT NULL,
  `url` char(50) NOT NULL DEFAULT 'www.itxdl.com',
  `tid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `study_course`
--

INSERT INTO `study_course` (`id`, `vid`, `name`, `url`, `tid`, `time`) VALUES
(35, 126, ' 软件的设置与准备工作', '3424', 0, 34),
(30, 126, '新的版本新的生产力', '___APP___Paly/index', 0, 3333),
(34, 127, ' 软件的设置与准备工作', '324', 0, 344),
(31, 125, '新的版本新的生产力', '4324', 0, 32),
(33, 124, '新的版本新的生产力', '3434', 0, 343),
(32, 125, '新的版本新的生产力', '23432', 0, 43),
(29, 127, 'eeeeeeeeee', '___APP___Paly/index', 0, 2222),
(36, 125, ' 软件的设置与准备工作', '434', 0, 343),
(37, 124, ' 软件的设置与准备工作', '34', 0, 34),
(38, 127, '其他编辑小技巧b（还有，不要在评价区问问题，因为那样我看不到', '32432', 0, 32),
(39, 126, '其他编辑小技巧b（还有，不要在评价区问问题，因为那样我看不到', '434', 0, 43),
(40, 124, '其他编辑小技巧b（还有，不要在评价区问问题，因为那样我看不到', '3434', 0, 234),
(41, 127, '快捷键 快速访问栏', '545', 0, 54),
(42, 126, 'qqqqqqqqqqq', '___APP___Paly/index', 0, 99999999),
(48, 125, '广告', '', 0, 0),
(49, 126, 'aspku测试', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `study_coursenote`
--

CREATE TABLE IF NOT EXISTS `study_coursenote` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `content` char(255) NOT NULL,
  `ntime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `study_coursereply`
--

CREATE TABLE IF NOT EXISTS `study_coursereply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `content` char(255) NOT NULL,
  `reply_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `study_coursetalk`
--

CREATE TABLE IF NOT EXISTS `study_coursetalk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `descriptione` char(255) NOT NULL DEFAULT '欢迎进入课程讨论区，畅所欲言吧!',
  `content` char(255) NOT NULL,
  `talk_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `study_info`
--

CREATE TABLE IF NOT EXISTS `study_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `study_info`
--

INSERT INTO `study_info` (`id`, `title`, `content`, `time`) VALUES
(11, '双十一活动通知', '价格半折', 1450592737),
(13, '呦呦呦', '										语言', 1450593038),
(14, 'uuuu', '										翻番 ', 1450594505),
(15, '1111', '				1111111						', 1450834683);

-- --------------------------------------------------------

--
-- 表的结构 `study_news`
--

CREATE TABLE IF NOT EXISTS `study_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(32) NOT NULL,
  `content` char(255) NOT NULL,
  `ntime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `study_news`
--

INSERT INTO `study_news` (`id`, `title`, `content`, `ntime`) VALUES
(11, '和秋叶一起学职场技能', '       和秋叶一起学职场技能', 1450537862),
(10, '手把手教你读财报', '              手把手教你读财报', 1450537869),
(18, 'qwe', '                qwe', 1450834934),
(13, '    18招教你运营好微信公众账号  雷子思维导图', '                 18招教你运营好微信公众账号  雷子思维导图', 1450537820);

-- --------------------------------------------------------

--
-- 表的结构 `study_organ`
--

CREATE TABLE IF NOT EXISTS `study_organ` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `organ` char(32) NOT NULL,
  `url` char(50) NOT NULL,
  `name` char(32) NOT NULL,
  `description` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `study_organ`
--

INSERT INTO `study_organ` (`id`, `organ`, `url`, `name`, `description`) VALUES
(23, '', 'study/admin.php/Organ/index.html', '河南', '         教育基地'),
(17, '', 'study/admin.php/Organ/index.html', '开课吧', '             汽车驾驶大百科 影想力摄影教育 育英科技 浙江工业大学之江学院'),
(24, '', 'study/admin.php/Organ/index.html', 'daxw', '          asd qwdsad');

-- --------------------------------------------------------

--
-- 表的结构 `study_teacher`
--

CREATE TABLE IF NOT EXISTS `study_teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` char(255) NOT NULL DEFAULT 'default.jpg',
  `tname` char(32) NOT NULL,
  `organ` char(32) NOT NULL,
  `description` char(255) NOT NULL DEFAULT '德育教人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `study_teacher`
--

INSERT INTO `study_teacher` (`id`, `photo`, `tname`, `organ`, `description`) VALUES
(46, '2015-12-18/567372134c4b4.png', '钟平', '兄弟连', '                     德育教人'),
(45, '2015-12-18/56736e6d00000.png', '肖扬', '兄弟连', '德育教人'),
(49, '2015-12-18/5673f3b341663.png', '魏文庆', '兄弟连', '     网易高级总监，曾担任网易泡泡，网易UU产品总监，易信产品总经理，网易产品经理评审委员会委员'),
(50, '2015-12-18/5673f4b87e6f3.jpg', '彭国军', '兄弟连', '                     武汉大学计算机学院副教授，博士生导师，全国网络与信息安全防护峰会联合发起人'),
(47, '2015-12-18/56736ec22625a.png', '李涛', '兄弟连', '    德育教人'),
(52, '2015-12-22/56789b4989544.png', '李松', '兄弟连', '            aaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- 表的结构 `study_type`
--

CREATE TABLE IF NOT EXISTS `study_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `path` char(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- 转存表中的数据 `study_type`
--

INSERT INTO `study_type` (`id`, `name`, `pid`, `path`) VALUES
(60, 'IT互联网', 0, '0'),
(61, '移动开发', 60, '0-60'),
(65, '办公技能', 64, '0-64'),
(62, '编程语言', 60, '0-60'),
(63, '产品设计', 60, '0-60'),
(64, '职场技能', 0, '0'),
(66, '职业考试', 64, '0-64'),
(67, '人力资源', 64, '0-64'),
(68, '语言学习', 0, '0'),
(69, '实用英语', 68, '0-68'),
(70, '韩语', 68, '0-68'),
(71, '托福雅思', 68, '0-68'),
(72, '兴趣爱好', 0, '0'),
(73, '唱歌', 72, '0-72'),
(74, '跳舞', 72, '0-72'),
(75, '摄影', 72, '0-72'),
(76, '更多分类', 0, '0'),
(77, '育儿', 76, '0-76'),
(78, '中学', 76, '0-76'),
(79, '大学', 76, '0-76');

-- --------------------------------------------------------

--
-- 表的结构 `study_user`
--

CREATE TABLE IF NOT EXISTS `study_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` char(32) NOT NULL,
  `pwd` char(32) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `auth` enum('0','1') NOT NULL DEFAULT '0',
  `pic` varchar(255) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `study_user`
--

INSERT INTO `study_user` (`id`, `email`, `pwd`, `status`, `auth`, `pic`) VALUES
(19, 'ypl189@11.com', '2b70ca2826958781587c348fe4b44607', '1', '0', '2015-12-18/5673e7ab76ce1.png'),
(21, 'usergg@qq.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '1', '0', '2015-12-21/56779c91ca2dd.jpg'),
(29, 'user@qq.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '1', '0', 'default.jpg'),
(31, 'qqq@qq.com', 'b59c67bf196a4758191e42f76670ceba', '1', '0', 'default.jpg'),
(27, '111@qq.com', '0f3d30b36a0367535bdd45d3cfc5f099', '1', '0', '2015-12-23/5679fa9fe1113.gif'),
(32, '123456@163.com', 'd8aef083b975fa612649470de94c6d92', '1', '0', 'default.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `study_userdetail`
--

CREATE TABLE IF NOT EXISTS `study_userdetail` (
  `id` int(10) unsigned NOT NULL,
  `username` char(32) NOT NULL,
  `sex` enum('0','2','1') NOT NULL,
  `description` char(255) NOT NULL DEFAULT '这个家伙很懒，什么都没有留下!',
  `realname` char(32) DEFAULT '',
  `qq` int(11) NOT NULL,
  `special` char(100) DEFAULT '我知道你会的多',
  `edu` char(32) NOT NULL DEFAULT '高中',
  `cardid` varchar(17) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `study_userdetail`
--

INSERT INTO `study_userdetail` (`id`, `username`, `sex`, `description`, `realname`, `qq`, `special`, `edu`, `cardid`, `phone`) VALUES
(27, 'qqq', '1', '这个家伙很懒，什么都没有留下!																', '卢伟11111', 11111, '我知道你会的多1111', '大学', '1111111111111', '1111111'),
(0, '', '0', '这个家伙很懒，什么都没有留下!', '', 0, '', '高中', NULL, NULL),
(18, 'hahaa为', '', '这个家伙很懒，什么都没有留下!																								', '', 0, '', '高中学', '', ''),
(19, 'fsdf', '', '这个家伙很懒，什么都没有留下!																								', '', 0, '我知道你会的多', '高中学', '', ''),
(20, '爱你', '', '这个家伙很懒，什么都没有留下!								', '喻佩玲', 594173463, '我知道你会的多', '大学', '121435456457', '15600449981'),
(21, '李彦宏', '', '这个家伙很懒，什么都没有留下!																', '', 0, '我知道你会的多', '高中学', '', ''),
(24, '', '0', '这个家伙很懒，什么都没有留下!', '', 0, '我知道你会的多', '高中', NULL, NULL),
(26, '卢伟', '1', '这个家伙很懒，什么都没有留下!								', '卢伟', 123123123, '呵呵', '大学', '2312321321', '12345678091');

-- --------------------------------------------------------

--
-- 表的结构 `study_video`
--

CREATE TABLE IF NOT EXISTS `study_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `title` char(255) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `video` char(255) NOT NULL DEFAULT 'pic.png',
  `number` int(11) NOT NULL DEFAULT '0',
  `des` char(255) NOT NULL DEFAULT '新手入门，简单易懂',
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=186 ;

--
-- 转存表中的数据 `study_video`
--

INSERT INTO `study_video` (`id`, `tid`, `nid`, `title`, `price`, `video`, `number`, `des`, `pid`) VALUES
(126, 61, 46, ' 	30分钟轻松制作', '0.00', '2016-10-08/57f911054cc55.jpg', 8, '新手入门，简单易懂', 60),
(125, 61, 46, '30分钟轻松制作', '0.00', '2015-12-18/567372da03d09.jpg', 1, '新手入门，简单易懂', 60),
(124, 61, 46, '30分钟轻松制作', '0.00', '2015-12-18/56737294487ab.jpg', 0, '新手入门，简单易懂', 60),
(133, 61, 47, ' 	C++的应用', '222.00', '2015-12-18/567374926ea05.png', 0, '新手入门，简单易懂', 60),
(131, 65, 49, ' 	C++的应用', '33.00', '2015-12-18/5673742dc28cb.jpg', 0, '新手入门，简单易懂', 64),
(130, 65, 49, 'C++的应用', '100.00', '2015-12-18/567373e522551.jpg', 0, '新手入门，简单易懂', 64),
(129, 62, 46, 'PHP零基础教学', '0.00', '2015-12-18/5673737fdd40a.png', 3, '新手入门，简单易懂', 60),
(128, 65, 45, ' 	30分钟轻松制作', '0.00', '2015-12-18/5673733a81b32.jpg', 0, '新手入门，简单易懂', 64),
(139, 61, 45, ' 	C++的应用', '12.00', '2015-12-18/567377b7c65d4.jpg', 0, '新手入门，简单易懂', 60),
(138, 61, 46, ' 	C++的应用', '23.00', '2015-12-18/567377a6d1cef.jpg', 0, '新手入门，简单易懂', 60),
(137, 61, 49, ' 	C++的应用', '544.00', '2015-12-18/5673859157bcf.jpg', 0, '新手入门，简单易懂', 60),
(136, 62, 47, ' 	C++的应用', '122.00', '2015-12-18/5673776ab34a7.jpg', 0, '新手入门，简单易懂', 60),
(134, 61, 47, ' 	C++的应用', '77.00', '2015-12-18/5673772d03d09.jpg', 0, '新手入门，简单易懂', 60),
(140, 65, 49, ' 	C++的应用', '90.00', '2015-12-18/567377cc89544.png', 0, '新手入门，简单易懂', 64),
(141, 65, 46, ' 	C++的应用', '43.00', '2015-12-18/567377eacdfe6.jpg', 0, '新手入门，简单易懂', 64),
(142, 65, 45, ' 	C++的应用', '65.00', '2015-12-18/567378032dc6c.jpg', 0, '新手入门，简单易懂', 64),
(143, 65, 45, '30分钟学会制作H5', '23.00', '2015-12-18/56737ca7487ab.jpg', 0, '新手入门，简单易懂', 64),
(144, 65, 49, ' 	30分钟学会制作H5', '55.00', '2015-12-18/567385710b71b.jpg', 0, '新手入门，简单易懂', 64),
(145, 65, 45, ' 	30分钟学会制作H5', '66.00', '2015-12-18/56738588ec82e.jpg', 0, '新手入门，简单易懂', 64),
(146, 62, 47, ' 	30分钟学会制作H5', '0.00', '2015-12-18/567385ba487ab.png', 0, '新手入门，简单易懂', 60),
(147, 62, 49, ' 	30分钟学会制作H5', '6.00', '2015-12-18/567385cf501bd.jpg', 0, '新手入门，简单易懂', 60),
(148, 62, 45, ' 	30分钟学会制作H5', '8.00', '2015-12-18/567385e6ca2dd.jpg', 0, '新手入门，简单易懂', 60),
(149, 63, 46, ' 	30分钟学会制作H5', '0.00', '2015-12-18/5673867f81b32.png', 0, '新手入门，简单易懂', 60),
(150, 63, 45, ' 	30分钟学会制作H5', '6.00', '2015-12-18/567386903d090.png', 0, '新手入门，简单易懂', 60),
(151, 63, 49, '21', '0.00', '2015-12-18/567386a08d24d.jpg', 0, '新手入门，简单易懂', 60),
(152, 63, 45, ' 	30分钟学会制作H5', '0.00', '2015-12-18/567386ae44aa2.jpg', 0, '新手入门，简单易懂', 60),
(153, 63, 49, ' 	30分钟学会制作H5', '4.00', '2015-12-18/567386c5ec82e.jpg', 0, '新手入门，简单易懂', 60),
(154, 61, 46, '30分钟学会制作H5', '2.00', '2015-12-18/567388c6cdfe6.png', 0, '新手入门，简单易懂', 60),
(155, 65, 45, 'style=&quot;color:red;font-size:20px&quot;', '0.00', '2015-12-18/567388eea037a.png', 0, '新手入门，简单易懂', 64),
(156, 65, 45, '30分钟学会制作H5', '0.00', '2015-12-18/56738909501bd.jpg', 0, '新手入门，简单易懂', 64),
(157, 65, 49, '30分钟学会制作H5', '5.00', '2015-12-18/5673891ae1113.jpg', 0, '新手入门，简单易懂', 64),
(158, 62, 46, '30分钟学会制作H5', '0.00', '2015-12-18/5673895d57bcf.png', 0, '新手入门，简单易懂', 60),
(159, 62, 45, '30分钟学会制作H5', '8.00', '2015-12-18/5673896bf0537.jpg', 0, '新手入门，简单易懂', 60),
(160, 62, 45, '30分钟学会制作H5', '0.00', '2015-12-18/567389784c4b4.jpg', 0, '新手入门，简单易懂', 60),
(161, 62, 45, '30分钟学会制作H5', '34.00', '2015-12-18/56738984bebc2.jpg', 0, '新手入门，简单易懂', 60),
(162, 63, 46, '30分钟学会制作H5', '0.00', '2015-12-18/567389920b71b.jpg', 0, '新手入门，简单易懂', 60),
(163, 63, 49, '30分钟学会制作H5', '44.00', '2015-12-18/567389a481b32.jpg', 0, '新手入门，简单易懂', 60),
(164, 63, 49, '30分钟学会制作H5', '0.00', '2015-12-18/567389ae07a12.jpg', 1, '新手入门，简单易懂', 60),
(165, 63, 47, '30分钟学会制作H5', '66.00', '2015-12-18/567389ba7a120.jpg', 5, '新手入门，简单易懂', 60),
(166, 73, 45, '零基础快速上手', '0.00', '2015-12-18/56738a695f5e1.jpg', 0, '新手入门，简单易懂', 72),
(167, 73, 45, '零基础快速上手', '1.00', '2015-12-18/56738a94d9701.png', 0, '新手入门，简单易懂', 72),
(168, 73, 45, '零基础快速上手', '0.00', '2015-12-18/56738aa922551.png', 0, '新手入门，简单易懂', 72),
(169, 74, 46, '零基础快速上手', '22.00', '2015-12-18/56738ab6e4e1c.jpg', 0, '新手入门，简单易懂', 72),
(170, 74, 45, '零基础快速上手', '0.00', '2015-12-18/56738ac95f5e1.jpg', 0, '新手入门，简单易懂', 72),
(171, 74, 45, '零基础快速上手', '66.00', '2015-12-18/56738ad966ff3.jpg', 0, '新手入门，简单易懂', 72),
(172, 75, 46, '零基础快速上手', '21.00', '2015-12-18/56738aed90f56.jpg', 0, '新手入门，简单易懂', 72),
(173, 75, 45, '零基础快速上手', '8.00', '2015-12-18/56738af8af79e.jpg', 0, '新手入门，简单易懂', 72),
(174, 75, 47, '零基础快速上手', '0.00', '2015-12-18/56738b0303d09.jpg', 0, '新手入门，简单易懂', 72),
(179, 63, 45, '11', '11.00', '2015-12-22/5678e808af79e.png', 2, '新手入门，简单易懂', 60),
(185, 66, 46, '测试', '11.00', '2016-10-08/57f90ffe1c5f2.jpg', 0, '新手入门，简单易懂', 64);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
