<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>全部课程 - 网易云课堂</title>
<script type="text/javascript" async src="/study08/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/study08/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/study08/Public/Home/js/course_list.js"></script>

<link href="/study08/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/study08/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">

<!--微专业major css/js-->
<script src="/study08/Public/Home/js/SpryAssets/SpryDOMUtils.js" type="text/javascript"></script>
<script src="/study08/Public/Home/js/major_small.js" type="text/javascript"></script>
<link href="/study08/Public/Home/css/major_small.css" type="text/css" rel="stylesheet">

<!--计算机专业 css/js-->
<script src="/study08/Public/Home/js/major_inter.js" type="text/javascript"></script>
<link href="/study08/Public/Home/css/major_inter.css" type="text/css" rel="stylesheet">

<!--互联网职业技能 css/js-->
<script src="/study08/Public/Home/js/major_skill.js" type="text/javascript"></script>
<link href="/study08/Public/Home/css/major_skill.css" type="text/css" rel="stylesheet">

<!--金融专业 css/js-->
<script src="/study08/Public/Home/js/major_money.js" type="text/javascript"></script>
<script src="/study08/Public/Home/js/specialWebCommon.js" type="text/javascript"></script>
<link href="/study08/Public/Home/css/major_money.css" type="text/css" rel="stylesheet">

<!--联系我们 css-->
<link href="/study08/Public/Home/css/advice/advice.css" type="text/css" rel="stylesheet">
<link href="/study08/Public/Home/css/advice/core.css" type="text/css" rel="stylesheet">

<!--退出登录 css/js-->
<script src="/study08/Public/Home/js/loginout.js" type="text/javascript"></script>
<link href="/study08/Public/Home/css/loginout.css" type="text/css" rel="stylesheet"></head>

<!--个人中心personal css/js-->
<script src="/study08/Public/Home/js/personal.js" type="text/javascript"></script>
<link href="/study08/Public/Home/css/personal.css" type="text/css" rel="stylesheet">

</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/study08/index.php" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/study08/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
		  <?php if($_SESSION["id"] == null): ?><div class="unlogin f-fr">
				<a href="/study08/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
			</div><?php endif; ?>
          </div>

          <div class="nav-search u-navsearchUI j-searchP">
            <div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" style="right:300px;" >
              <div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
              <input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
            </div>
            <div class="j-suggest u-navsearchsug"></div>
          </div>
		  
		 <?php if($_SESSION["id"] != null): ?><div id="login">
			<div><a href="<?php echo ($_SESSION["id"]); ?>">消息</a></div>
			<div><a href="<?php echo ($_SESSION["id"]); ?>">课程包</a></div>
			<img src="/study08/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
			<div id="login1">
				<div><a href="/study08/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?></a></div>
				<div><a href="<?php echo ($_SESSION["id"]); ?>">个人主页</a></div>
				<div><a href="/study08/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a></div>
				<div><a href="/study08/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
				<div><a href="/study08/index.php/Index/logout/id/<?php echo ($_SESSION["id"]); ?>">退出</a></div>
			</div>
		 </div><?php endif; ?>

        </div>
        <div class="m-nav f-cb j-navFind"> <a data-index="首页" class="nitem" href="/study08/index.php"" hidefocus="true">首页</a>
			<div class="f-pr f-cb nitem x-hoverItem">
				<span>课程体系</span>
				<div class="f-pa u-navdropmenu x-child">
					<span class="arrr f-pa"></span>
					<a data-index="大学计算机专业" class="dropitem f-f0" href="/study08/index.php/major/major_inter" hidefocus="true">
						<span>大学计算机专业</span>
					</a>
					<a data-index="互联网职业技能" class="dropitem f-f0" href="/study08/index.php/major/major_skill" hidefocus="true">
						<span>互联网职业技能</span></a>
					<a data-index="金融专业" class="dropitem f-f0 last" href="/study08/index.php/major/major_money" hidefocus="true">
						<span>金融专业</span>
					</a>
				</div>
			</div>
          <a data-index="微专业" class="nitem" href="/study08/index.php/major/major_small" hidefocus="true">微专业</a>
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

<div id="person-outer-box">
  <div class="m-personcenter">
    <div class="m-orgcentertop f-pr">
      <div class="j-headInfo headInfo">
        <div class="m-uinfo j-uinfo infobg">
          <div class="g-flow f-cb f-pr"> <a id="auto-id-1450352531655" title="刺客ykt1450352485246" class="f-fl face j-userurl"> <img src="%E5%88%BA%E5%AE%A2ykt1450352485246%E4%B8%AA%E4%BA%BA%E4%B8%BB%E9%A1%B5%20-%20%E7%BD%91%E6%98%93%E4%BA%91%E8%AF%BE%E5%A0%82_files/a.jpeg" class="j-userface" width="60px" height="60px"> </a>
            <div class="f-fl f-pr introarea">
              <div class="baseInfo f-pr">
                <div class="f-cb"> <a id="auto-id-1450352531656" class="f-fl j-nickinfo nickinfo"> <span class="username f-fl j-nickname">刺客ykt1450352485246</span> <span style="display: none;" class="usersex j-usersex f-fl"></span> </a> </div>
                <p class="infoline j-userinfo"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="j-content-box">
      <div id="person-inner-box" class="f-cb j-modle-box">
        <div class="m-personCourse g-flow f-pr f-cb">
          <div id="person-course-box" class="personCourse">
            <div class="g-mn2">
              <div class="g-mn2c f-bg j-coursewrapper">
                <div class="j-tabs courseTabs"> <a id="auto-id-1450352531621" class="f-ib f-pa tab1 cur">参加的</div>
                <!--<div class="j-pubDir pubDir f-dn"> <a class="plan">计划</a>-<a class="course">课程</a> </div>-->
                <div style="display: none;" class="j-all-box m-person-course auto-1450352531460-parent">
                  <div class="m-basepool f-cb auto-1450352531460">
                    <div class="m-data-lists f-cb f-pr j-data-list"></div>
                    <div style="display: none;" class="ui-pager f-pr j-data-pager auto-1450352531459-parent">
                      <div class="auto-1450352531459"><a id="auto-id-1450352531629" class="zbtn zprv js-disabled" href="#">上一页</a><a id="auto-id-1450352531635" class="zpgi zpg1 js-selected" href="#">1</a><a style="display: none;" id="auto-id-1450352531637" class="zpgi zpg2" href="#"></a><a style="display: none;" id="auto-id-1450352531639" class="zpgi zpg3" href="#"></a><a style="display: none;" id="auto-id-1450352531641" class="zpgi zpg4" href="#"></a><a style="display: none;" id="auto-id-1450352531643" class="zpgi zpg5" href="#"></a><a style="display: none;" id="auto-id-1450352531645" class="zpgi zpg6" href="#"></a><a style="display: none;" id="auto-id-1450352531647" class="zpgi zpg7" href="#"></a><a style="display: none;" id="auto-id-1450352531649" class="zpgi zpg8" href="#"></a><a id="auto-id-1450352531631" class="zbtn znxt js-disabled" href="#">下一页</a></div>
                    </div>
                  </div>
                </div>
                <div style="" class="j-none u-emptybig">
                  <div class="emptytext">
                    <p class="j-eTxt">暂时还没有参加的课程或计划哦~</p>
                    <a id="auto-id-1450352531623" class="j-find">发现课程和计划</a> </div>
                </div>
                <div class="u-noauth f-bg j-noauth" style="display:none">对不起，该用户设置了隐私，你没有权限查看该项内容！:-(</div>
              </div>
            </div>
            <div class="g-sd2 f-bg">
              <div class="m-center-side">
                <div class="top">
                  <div class="f-fl">个人介绍</div>
                  <a class="f-fr" href="#/center/infoRead">更多</a> </div>
                <div class="bottom">
                  <div style="display: none;" class="cnt j-cnt"></div>
                  <div class="j-nocnt" style="">
                    <div class="u-empty">
                      <p class="j-eTxt">暂时没有介绍哦</p>
                    </div>
                  </div>
                  <div class="j-so">
                    <div style="display: none;" class="j-social social f-cb">
                      <div class="f-fl stit j-tit">社交帐号:</div>
                      <div class="snslogin f-fl"> <a title="官方主页" class="j-sns f-dn outLink" target="_blank"></a> <a style="display: none;" class="sina j-sns f-ib" title="新浪微博" target="_blank"></a> <a style="display: none;" class="qq j-sns f-ib" title="QQ" target="_blank"></a> <a style="display: none;" class="renren j-sns f-ib" title="人人网" target="_blank"></a> </div>
                    </div>
                  </div>
                </div>
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
          <a href="" class="weibo" target="_blank" data-index="关注我们_微博">
			<img src="/study08/Public/Home/imgs/1.png">
		  </a>
		  <a href="" class="renren" target="_blank" data-index="关注我们_人人">
			<img src="/study08/Public/Home/imgs/2.png">
		  </a>
		  <a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信">
			<img src="/study08/Public/Home/imgs/3.png">
			<div class="tipQrcode f-pa">
				<div class="qrImag">
					<img src="/study08/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友">
				</div>
				<p class="qrTitle">易信号：study163</p>
				<div class="tip f-pa"></div>
			</div>
          </a> 
		  <a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信"><img src="/study08/Public/Home/imgs/4.png">
			  <div class="tipQrcode f-pa">
				<div class="qrImag">
					<img src="/study08/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友">
				</div>
				<p class="qrTitle">微信号：study163</p>
				<div class="tip f-pa"></div>
			  </div>
          </a>
		</div>
        <div class="copy">©<span>1997-2015</span> 网易公司 版权所有</div>
      </div>
      <div class="ftrt f-fr">
		<a href="/study08/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a>
		<a href="/study08/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
		<a href="/study08/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a>
		<a href="/study08/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a>
		<a href="/study08/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
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
<script src="/study08/Public/Home/css/reuglar.0.3.1.js"></script>
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
			<div class="download"><img src="/study08/Public/Home/imgs/sideBar90.png">
			  <p>下载App</p>
			</div>
			<div class="follow-weixin"><img src="/study08/Public/Home/imgs/weixin.png">
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