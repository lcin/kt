<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($configs["title"]); ?></title>
<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" async src="/study11/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/study11/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/study11/Public/Home/js/course_list.js"></script>

<link href="/study11/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/study11/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">

<!--微专业major css/js-->
<script src="/study11/Public/Home/js/SpryAssets/SpryDOMUtils.js" type="text/javascript"></script>
<script src="/study11/Public/Home/js/major_small.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/major_small.css" type="text/css" rel="stylesheet">

<!--计算机专业 css/js-->
<script src="/study11/Public/Home/js/major_inter.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/major_inter.css" type="text/css" rel="stylesheet">

<!--互联网职业技能 css/js-->
<script src="/study11/Public/Home/js/major_skill.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/major_skill.css" type="text/css" rel="stylesheet">

<!--金融专业 css/js-->
<script src="/study11/Public/Home/js/major_money.js" type="text/javascript"></script>
<script src="/study11/Public/Home/js/specialWebCommon.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/major_money.css" type="text/css" rel="stylesheet">

<!--联系我们 css-->
<link href="/study11/Public/Home/css/advice/advice.css" type="text/css" rel="stylesheet">
<link href="/study11/Public/Home/css/advice/core.css" type="text/css" rel="stylesheet">

<!--退出登录 css/js-->
<script src="/study11/Public/Home/js/loginout.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/loginout.css" type="text/css" rel="stylesheet"></head>

<!--个人中心personal css/js-->
<script src="/study11/Public/Home/js/personalcenter.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/personalcenter.css" type="text/css" rel="stylesheet">

<!--下载页download css/js-->
<link href="/study11/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/study11/Public/Home/css/download/download.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="/study11/Public/Home/css/download/b5m-plugin.css" type="text/css">
<link rel="stylesheet" href="/study11/Public/Home/css/download/b5m.botOrTopBanner.css" type="text/css">

<!--广告information css/js-->
<script src="/study11/Public/Home/js/information.js" type="text/javascript"></script>
<link href="/study11/Public/Home/css/information.css" type="text/css" rel="stylesheet">

</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/study11/index.php" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/study11/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
		  <?php if($_SESSION["id"] == null): ?><div class="unlogin f-fr">
				<a href="/study11/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
			</div><?php endif; ?>
          </div>

          <div class="nav-search u-navsearchUI j-searchP">
            <div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" style="right:200px;" >
              <div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
              <input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
            </div>
            <div class="j-suggest u-navsearchsug"></div>
          </div>
		  
		 <?php if($_SESSION["id"] != null): ?><div id="login">
			<div><a href="<?php echo ($_SESSION["id"]); ?>">消息</a></div>
			<div><a href="<?php echo ($_SESSION["id"]); ?>">课程包</a></div>
			<img src="/study11/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
			<div id="login1">
				<div><a href="/study11/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?></a></div>
				<div><a href="/study11/index.php/Detail/personalCenter/id/<?php echo ($_SESSION["id"]); ?>">个人主页</a></div>
				<div><a href="/study11/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a></div>
				<div><a href="/study11/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
				<div><a href="/study11/index.php/Index/logout/id/<?php echo ($_SESSION["id"]); ?>">退出</a></div>
			</div>
		 </div><?php endif; ?>

        </div>
        <div class="m-nav f-cb j-navFind"> <a data-index="首页" class="nitem" href="/study11/index.php"" hidefocus="true">首页</a>
			<div class="f-pr f-cb nitem x-hoverItem">
				<span>课程体系</span>
				<div class="f-pa u-navdropmenu x-child">
					<span class="arrr f-pa"></span>
					<a data-index="大学计算机专业" class="dropitem f-f0" href="/study11/index.php/major/major_inter" hidefocus="true">
						<span>大学计算机专业</span>
					</a>
					<a data-index="互联网职业技能" class="dropitem f-f0" href="/study11/index.php/major/major_skill" hidefocus="true">
						<span>互联网职业技能</span></a>
					<a data-index="金融专业" class="dropitem f-f0 last" href="/study11/index.php/major/major_money" hidefocus="true">
						<span>金融专业</span>
					</a>
				</div>
			</div>
          <a data-index="微专业" class="nitem" href="/study11/index.php/major/major_small" hidefocus="true">微专业</a>
		  <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/study11/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/study11/index.php/User/download" class="store apple"><img src="/study11/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/study11/index.php/User/download" class="store android"><img src="/study11/Public/Home/imgs/upload(2).png"></a> </div>
            </div>
          </div>
          <a data-index="学习中心" class="nitem" href="" hidefocus="true">学习中心</a>
          <div class="xxzxtip f-pa f-dn" id="j-xxzxtip-black-nav">
            <div class="arrr f-pa"></div>
            <div class="text f-fl">
              <p>“我的云课堂”改名为“学习中心”啦！</p>
              <p>你可以在学习中心查看所有学习记录和进度。</p>
            </div>
            <div class="xxzxtip-close f-pa" id="j-xxzxtip-close-black-nav">X</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="m-maintainInfo" style="display:none">
  <div id="maintain_info_box" class="g-flow"></div>
</div>
<div id="advertisement_box" class="advertisement_box f-pf" style="display:none;"></div>

<div class="g-flow">
  <div class="b-20"></div>
  <div class="g-bd">
    <div class="" id="m-msgbox">
      <div class="m-msglist f-bg">
        <div class="tabarea"> <a id="big-type-all" class="f-fl f-pr tab">全部通知</a> <a id="big-type-note" class="f-fl f-pr tab tab-w">笔记通知 </a> <a id="big-type-ask" class="f-fl f-pr tab tab-hack tab-w">问答通知 </a> <a id="big-type-forum" class="f-fl f-pr tab tab-hack tab-w" style="z-index:9;">讨论区通知 </a> <a id="big-type-sns" class="f-fl f-pr tab tab-hack tab-w" style="z-index:8;">好友通知 </a> <a id="big-type-sys" class="f-fl f-pr tab tab-w tab-pos">系统通知
          <div class="f-pa msglistsprite msgcou msgcou1" title="有未读通知">1</div>
          </a>
          <div class="f-fr f-pr msglistsprite settingbtn j-menubtn" title="通知设置" id="auto-id-1450516114812">
            <div class="f-pa smenu j-menu"> <a href="http://study.163.com/user/setting.htm#/settings/settingsMessage" class="sitem">通知设置</a> <a href="javascript:;" class="sitem j-del-allmsgs" id="auto-id-1450516114814" style="display: block;">清空</a> </div>
          </div>
        </div>
        <div class="tabcon">
          <div class="dobar f-cb"> <a class="btn j-clear-unread" id="auto-id-1450516114810" style="display: block;"><span>全部标记为已读</span></a> </div>
          <div class="msgpool auto-1450516114652-parent">
            <div class="m-basepool f-cb auto-1450516114652">
              <div class="m-data-lists f-cb f-pr j-data-list" style="">
                <div class="u-msgItem f-fs0 first">
                  <div class="j-msg-item msg-cnt msg-unread" id="auto-id-1450516114910">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">恭喜你获得手机流量包一个，详情请在【活动页面】-【我的奖品】中查看-&gt;http://study.163.com/topics/signInActivity/</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114911" style="display: none;"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114909" style="display: none;"></div>
                    </div>
                    <div class="msg-time">12月18日</div>
                  </div>
                </div>
                <div class="u-msgItem f-fs0">
                  <div class="j-msg-item msg-cnt msg-hover" id="auto-id-1450516114901">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">恭喜你获得签到章一枚，你将有机会抽取学神/学霸奖，请关注每日中奖名单</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114902"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114900" style="display: none;"></div>
                    </div>
                    <div class="msg-time">12月17日</div>
                  </div>
                </div>
                <div class="u-msgItem f-fs0">
                  <div class="j-msg-item msg-cnt" id="auto-id-1450516114894">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">恭喜你获得签到章一枚，你将有机会抽取学神/学霸奖，请关注每日中奖名单</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114895" style="display: none;"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114893" style="display: none;"></div>
                    </div>
                    <div class="msg-time">12月16日</div>
                  </div>
                </div>
                <div class="u-msgItem f-fs0">
                  <div class="j-msg-item msg-cnt" id="auto-id-1450516114887">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">恭喜你获得云课堂5元优惠券一张，详情请在【活动页面】-【我的奖品】中查看-&gt;http://study.163.com/topics/signInActivity/</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114888" style="display: none;"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114886" style="display: none;"></div>
                    </div>
                    <div class="msg-time">12月11日</div>
                  </div>
                </div>
                <div class="u-msgItem f-fs0">
                  <div class="j-msg-item msg-cnt" id="auto-id-1450516114880">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">恭喜你获得签到章一枚，你将有机会抽取学神/学霸奖，请关注每日中奖名单</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114881" style="display: none;"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114879" style="display: none;"></div>
                    </div>
                    <div class="msg-time">12月5日</div>
                  </div>
                </div>
                <div class="u-msgItem f-fs0">
                  <div class="j-msg-item msg-cnt" id="auto-id-1450516114866">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">课程" <a class="j-title" href="http://study.163.com/course/courseMain.htm?courseId=995042" id="auto-id-1450516115025">
                        <h5 class="j-titTxt msg-title">PPT2013企业级版式设计应该这样玩(level2)</h5>
                        </a>"有新公告</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114867" style="display: none;"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114865" style="display: none;"></div>
                    </div>
                    <div class="msg-time">11月30日</div>
                  </div>
                </div>
                <div class="u-msgItem f-fs0 last">
                  <div class="j-msg-item msg-cnt" id="auto-id-1450516114873">
                    <div class="f-cb msg-con" style="height:10px">
                      <div class="msg-txt f-fl s-fc1">课程" <a class="j-title" href="http://study.163.com/course/courseMain.htm?courseId=521006" id="auto-id-1450516115027">
                        <h5 class="j-titTxt msg-title">PPT2013&nbsp;应该这样玩</h5>
                        </a>"有新公告</div>
                      <div class="msg-close f-pa" title="删除" id="auto-id-1450516114874" style="display: none;"></div>
                      <div class="msg-mark msg-mark-hover f-pa" title="标记为已读" id="auto-id-1450516114872" style="display: none;"></div>
                    </div>
                    <div class="msg-time">9月9日</div>
                  </div>
                </div>
              </div>
              <div class="ui-pager f-pr j-data-pager auto-1450516114651-parent" style="display: none;">
                <div class="auto-1450516114651"><a href="http://study.163.com/message/msgList.htm#" class="zbtn zprv js-disabled" id="auto-id-1450516114839">上一页</a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg1 js-selected" id="auto-id-1450516114845">1</a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg2" id="auto-id-1450516114847" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg3" id="auto-id-1450516114849" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg4" id="auto-id-1450516114851" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg5" id="auto-id-1450516114853" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg6" id="auto-id-1450516114855" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg7" id="auto-id-1450516114857" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zpgi zpg8" id="auto-id-1450516114859" style="display: none;"></a><a href="http://study.163.com/message/msgList.htm#" class="zbtn znxt js-disabled" id="auto-id-1450516114841">下一页</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="g-ft">
  <div class="m-yktFoot" id="j-yktfoot">
    <div class="g-flow ftwrapper f-cb">
      <div class="f-fl ftlf">
        <div class="logo"></div>
        <p class="txt f-fs0"> 网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验，帮助您获得全新的个人发展和能力提升。</p>
        <div class="share f-cb">
			<p class="tit">关注我们：</p>
			<a href="#" class="weibo" target="_blank" data-index="关注我们_微博">
				<img src="/study11/Public/Home/imgs/1.png">
			</a> 
			<a href="#" class="renren" target="_blank" data-index="关注我们_人人">
				<img src="/study11/Public/Home/imgs/2.png">
			</a>
			<a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信">
				<img src="/study11/Public/Home/imgs/3.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag"> <img src="/study11/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友"> </div>
					<p class="qrTitle">易信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
			<a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信">
				<img src="/study11/Public/Home/imgs/4.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag">
						<img src="/study11/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友">
					</div>
					<p class="qrTitle">微信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
		</div>
        <div class="copy">©<span>1997-2015</span> <?php echo ($configs["copyright"]); ?></div>
      </div>
      <div class="ftrt f-fr">
		<a href="/study11/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a>
		<a href="/study11/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
		<a href="/study11/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a>
		<a href="/study11/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a>
		<a href="/study11/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
		<a href="" target="_blank" data-index="中国大学MOOC">中国大学MOOC</a>
        <div class="f-cb mobile f-fr">
          <div class="tit f-fl">移动App:</div>
          <a target="_blank" class="mlogo1" href=""></a>
		  <a target="_blank" class="mlogo2" href=""></a>
		</div>
      </div>
    </div>
  </div>
</div>
<script src="/study11/Public/Home/css/reuglar.0.3.1.js"></script>
<div class="f-dn">玩转 C语言 基础课堂,Fenby,IT与互联网 编程语言,玩转 C语言 基础课堂，用最基础易懂的形象比喻方式来学习和理解C语言的基础知识点，去掉冗繁的基础概念知识，最大化的在线练习编写代码中找到知识重点，以练为主，以学为辅，两者在快乐和最快时间里都可兼得，省去学习C语言看书和找习题的麻烦。  适用人群：喜欢编程，担心编程很难的零基础人群，想快速学好C语言基础，想用新鲜学习方式和不喜欢看书的C语言初学者。</div>
<div class="m-side-operation auto-1449466944905" id="j-side-operation">
  <div class="side-service-item">
	<a class="item-link-block" data-name="留言" href="" target="_blank">
		<i class="side-service-icon feedback-icon"></i>
		<span class="item-hover-text feedback-text">反馈意见</span>
	</a>
  </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item ">
	<a class="item-link-block app-download" data-name="手机课堂" href="javascript:void(0)">
		<i class="side-service-icon phone-icon"></i>
		<span class="item-hover-text">手机课堂</span>
		<div class="qrcode-bubble">
        <div class="qrcode">
			<div class="download"><img src="/study11/Public/Home/imgs/sideBar90.png">
			  <p>下载App</p>
			</div>
			<div class="follow-weixin"><img src="/study11/Public/Home/imgs/weixin.png">
			  <p>关注微信</p>
			</div>
		</div>
      <div class="arrow">
        <div class="arrow-border"></div>
        <div class="arrow-cnt"></div>
      </div>
    </div>
    </a> </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item "> <a class="item-link-block side-service-top" data-name="回到顶部" href="javascript:void(0)" id="auto-id-1449466944916"> <i class="side-service-icon top-icon"></i> <span class="item-hover-text scrtop-text">返回顶部</span> </a> </div>
</div>
<div>
  <div id="loadingMask" class="loading-mask" style="z-index: 10001; display: none;"></div>
  <div id="loadingPb" class="ui-loading f-cb" style="z-index: 10002; display: none;"></div>
</div>
<div class="u-userCard" id="auto-id-1449466944964">
  <div class="j-cardMain main">
    <div class="base f-cb">
      <div class="face f-fl"><a class="j-imglink"><img class="j-img" width="80" height="80" src=""></a></div>
      <div class="info f-fl">
        <p class="nameloginfo"><a target="_blank" class="f-thide f-ib j-name name" title="进入个人主页"></a></p>
        <p class="j-gztxt gztxt"></p>
      </div>
    </div>
    <p class="j-des des"></p>
    <div class="j-gzbtn gz"></div>
  </div>
  <div class="j-loading loading"></div>
</div>
</body>
<script type="text/javascript"charset="utf-8">
	$("#login > img").hover(function(){
		$("#login1").fadeIn(1000,function(){
			$("#login1").css("display","block");
		});
	},function(){
		$("#login1").hover(function(){
			var time=setInterval(function(){
				$("#login1").css("display","none");
			},3000);
		},function(){
			$("#login1").fadeOut(1000,function(){
				$("#login1").css("display","none");
			});
		});
	});
	
</script>
</html>