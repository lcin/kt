<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($configs["title"]); ?></title>
<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" async src="/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/course_list.js"></script>

<link href="/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/my.css" type="text/css" rel="stylesheet">



<!--计算机专业 css/js-->
<script src="/Public/Home/js/major_inter.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_inter.css" type="text/css" rel="stylesheet">

<!--互联网职业技能 css/js-->
<script src="/Public/Home/js/major_skill.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_skill.css" type="text/css" rel="stylesheet">

<!--金融专业 css/js-->
<script src="/Public/Home/js/major_money.js" type="text/javascript"></script>
<script src="/Public/Home/js/specialWebCommon.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_money.css" type="text/css" rel="stylesheet">

<!--联系我们 css-->
<link href="/Public/Home/css/advice/advice.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/advice/core.css" type="text/css" rel="stylesheet">

<!--退出登录 css/js-->
<script src="/Public/Home/js/loginout.js" type="text/javascript"></script>
<link href="/Public/Home/css/loginout.css" type="text/css" rel="stylesheet"></head>

<!--个人中心personal css/js-->
<script src="/Public/Home/js/personalcenter.js" type="text/javascript"></script>
<link href="/Public/Home/css/personalcenter.css" type="text/css" rel="stylesheet">

<!--下载页download css/js-->
<link href="/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/download/download.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/download/b5m-plugin.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/download/b5m.botOrTopBanner.css" type="text/css">

<!--广告information css/js-->
<script src="/Public/Home/js/information.js" type="text/javascript"></script>
<link href="/Public/Home/css/information.css" type="text/css" rel="stylesheet">
<style>
    input{

        display: flex;
        justify-content: center;
        width: 300px;height: 40px;
        margin: 20px 50px;
    }
    input:hover{background-color: #e3e3e3}
    textarea{border: 1px solid black;margin: 15px 30px;font-size: 25px;color: #111111}
    button{width: 300px;height: 35px;text-align: center;
        margin-left: 50px;box-shadow: 1px 1px 2px #111111;}
</style>

</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/index.php" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
		  <?php if($_SESSION["id"] == null): ?><div class="unlogin f-fr">
				<a href="/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
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
            <div><a href="/index.php/Info/index/id/<?php echo ($lo["id"]); ?>">消息</a></div>
			<div><a href="/index.php/Detail/personalCenter/id/<?php echo ($_SESSION["id"]); ?>">活动包</a></div>
			<img src="/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>

			<div id="login1">
				<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?>个人主页</a></div>
                <div><a href="/index.php/Course/kechengbao/id/<?php echo ($_SESSION["id"]); ?>">课程包</a></div>
				<div><a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a></div>
				<div><a href="/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
				<div><a href="/index.php/Index/logout/id/<?php echo ($_SESSION["id"]); ?>">退出</a></div>
			</div>
		 </div><?php endif; ?>

        </div>
        <div class="m-nav f-cb j-navFind"> <a data-index="首页" class="nitem" href="/index.php" hidefocus="true">首页</a>
			<div class="f-pr f-cb nitem x-hoverItem">
				<span>项目推荐</span>
				<div class="f-pa u-navdropmenu x-child">
					<span class="arrr f-pa"></span>
					<a data-index="大学计算机专业" class="dropitem f-f0" href="/index.php/major/major_inter" hidefocus="true">
						<span>热点项目</span>
					</a>
					<a data-index="互联网职业技能" class="dropitem f-f0" href="/index.php/major/major_skill" hidefocus="true">
						<span>投资金额</span></a>
					<a data-index="金融专业" class="dropitem f-f0 last" href="/index.php/major/major_money" hidefocus="true">
						<span>更多...</span>
					</a>
				</div>
			</div>
            <?php if($_SESSION["id"] != null): ?><a data-index="软件需求" class="nitem f-f0" href="/index.php/Demand/demand" hidefocus="true">软件需求</a>
                <?php else: ?>
                <a data-index="软件需求" class="nitem f-f0" href="/index.php/Login/index" hidefocus="true">软件需求</a><?php endif; ?>
            <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/index.php/User/download" class="store apple"><img src="/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/index.php/User/download" class="store android"><img src="/Public/Home/imgs/upload(2).png"></a> </div>
            </div>
          </div>
          <div class="xxzxtip f-pa f-dn" id="j-xxzxtip-black-nav">
            <div class="arrr f-pa"></div>
            <div class="text f-fl">
              <p>“我的云课堂”改名为“学习中心”啦！</p>
              <p>你可以在学习中心查看所有学习记录和进度。</p>
            </div>
            <div class="xxzxtip-close f-pa" id="j-xxzxtip-close-black-nav">X</div>
          </div>
            <a class="nitem f-f0" data-index="活动列表" href="/index.php/Activity/index" hidefocus="true">活动列表</a>


        </div>
      </div>
    </div>
  </div>
</div>
<div class="m-maintainInfo" style="display:none">
  <div id="maintain_info_box" class="g-flow"></div>
</div>
<div id="advertisement_box" class="advertisement_box f-pf" style="display:none;"></div>

<div id="g-wrapper">
  <div class="g-head">
    <div class="m-title">
      <h2>“互联网 + ”时代的新机遇</h2>
      <h1>热门互联网职业技能培训课程体系</h1>
      <p>网易云课堂联合行业内各领域知名专家和机构精心打造，内容全面、专业。是互联网人最佳的学习提升方案！</p>
    </div>
   </div>
  <div class="g-teachers-intro">
    <h2>部分专家讲师介绍</h2>
    <div id="j-userSayNode" class="usersay">
      <div class="m-userSayList f-pr">
        <div class="j-leftItm changeItm left f-cb disabled" id="auto-id-1450263211610"></div>
        <div class="j-content content f-cb">
          <div class="container-intro"><a href="#" target="_blank"><img src="/Public/Home/imgs/6630865455560746015.jpg" alt="">
            <div class="name">王程远</div>
            </a>
            <div class="title">阿里巴巴资深产品经理</div>
            <div class="text-intro">
              <p>阿里巴巴资深产品经理，现任淘宝-闲鱼产品经理，是淘宝鱼雨产品的核心设计者之一，探索C2C市场交易效率和交易社区。曾任淘宝规则产品经理，负责设计和优化规则相关产品；淘宝共享业务平台产品经理，尝试基于商品和交易平台的产品创新；手机淘宝产品经理：参与营销活动产品和新产品设计。</p>
              <p></p>
            </div>
          </div>
          <div class="container-intro"><a href="#" target="_blank"><img src="/Public/Home/imgs/978407019064492553.jpg" alt="">
            <div class="name">李建忠</div>
            </a>
            <div class="title">Boolan创始人，知名技术专家</div>
            <div class="text-intro">
              <p><span style="font-size: 14px;">国内知名技术专家，技术未来主义者。 对面向对象语言与机制有深入研究，精于设计模式、产品创新。连续创业者，曾创办祝成科技，SlideIdea。曾主讲网络课程《设计模式纵横谈》影响广泛。</span></p>
            </div>
          </div>
          <div class="container-intro"><a href="#" target="_blank"><img src="/Public/Home/imgs/6630215644188125840.jpg" alt="">
            <div class="name">郝培强</div>
            </a>
            <div class="title">知名iOS技术专家</div>
            <div class="text-intro">
              <p><span style="font-size: 14px;">郝培强，泰尼网络科技CEO，网名Tinyfool，资深果粉，知名iOS技术专家， OurCoders.com站长。曾作为主程发布多款知名iOS应用，如：有道词典iPhone版、盛大云中书城iPhone/iPad版等。对技术研习有独到见解，曾发表演讲《学习曲线与Hacking大脑》影响广泛。</span></p>
            </div>
          </div>
        </div>
        <div class="j-rightItm changeItm right f-cb" id="auto-id-1450263211611"></div>
        <div></div>
      </div>
    </div>
  </div>
</div>
<div class="g-grid">
  <div class="g-grid1" id="g-grid1">
    <div class="g-center">
      <h3>产品规划与管理</h3>
      <div>产品经理是这项工作的主要角色，负责调查并根据用户的需求，确定开发何种产品，选择何种技术、商业模式等。以及根据产品的生命周期，协调研发、营销、运营等，确定和组织实施相应的产品策略等一系列相关的产品管理活动。</div>
      <div class="logo"></div>
      <div id="wrap1">
        <div id="productManager" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(1).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">产品经理</a></h2>
            <h1>¥1950.00<span>¥2600.00</span></h1>
            <div class="description">结合前两届学员的综合反馈，课程再次升级！联合多位产品大牛打磨研究，涵盖产品经理核心技能矩阵：产品管理、商业模式、用户体验到敏捷方法、创新策略，全面掌握一个优秀产品经理所需技能。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-grid2" id="g-grid2">
    <div class="g-center">
      <h3>Web前端开发、移动端开发</h3>
      <div>Web前端开发是一项很特殊的工作，涵盖的知识面非常广，既有具体的技术，又有抽象的理念。简单地说，主要职能就是把网站的界面更好地呈现给用户。而移动端开发则包含针对于iOS、Android等移动操作系统的应用程序和游戏界面开发。</div>
      <div class="logo"></div>
      <div id="wrap2">
        <div id="frontEnd" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(2).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">前端开发工程师</a></h2>
            <h1>¥1899.00<span>¥2200.00</span></h1>
            <div class="description">网易一线资深前端开发工程师倾情打造！助你完成普通程序员到优秀工程师的华丽升级！更有最高¥1999奖学金！考核未通过免费重修一次。付费后视频随时观看，永久有效。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
        <div id="mobile" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(3).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">移动开发工程师</a></h2>
            <h1>¥2092.00</h1>
            <div class="description">本微专业由HTML5与跨平台开发、Android开发、iOS开发三个模块（含实验）组成；适合初学者全面体验，快速入门。微专业学习者将能够熟练使用当前流行的工具，开发出以用户为中心的移动应用。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
        <div id="iOS" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(4).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">Android开发工程师</a></h2>
            <h1>¥1950.00<span>¥2600.00</span></h1>
            <div class="description">结合前两届学员的综合反馈，课程再次升级！联合多位Android技术大牛打造，深入学习Android应用开发、性能优化、以及高级进阶所需要的核心技术，掌握一个Android应用从无到有的构建过程。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
        <div id="Android" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(5).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">iOS开发工程师</a></h2>
            <h1>¥1950.00<span>¥2600.00</span></h1>
            <div class="description">结合前两届学员的综合反馈，课程再次升级！联合多位iOS技术大牛打磨研究，通过作业练习和项目实战，助力学员全面掌握一个iOS应用从无到有的构建过程、编码技巧和重点难点的攻克。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-grid3" id="g-grid3">
    <div class="g-center">
      <h3>后端开发</h3>
      <div>职能上，后端主要负责界面背后的功能。后端开发技术包括各种后台编程语言、相关技术与框架、数据库开发、Web安全等。后端开发更多的是与数据库进行交互，以处理相应的业务逻辑。需要考虑功能的实现、数据的存取、平台的稳定性与性能等。</div>
      <div class="logo"></div>
      <div id="wrap3">
        <div id="bigData" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(6).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">大数据工程师</a></h2>
            <h1>¥1399.00<span>¥1599.00</span></h1>
            <div class="description">本微专业由世界顶级行业专家主持，国际学术出版商Wiley开发，面向全球化需求。通过学习，您将帮助掌握大数据技术必备技能和核心技术，包括工具选择，存储、编程、处理和管理数据架构等。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
        <div id="CorCpp" class="g-class"> <a href="#" target="_blank"><span class="classImg"><img src="/Public/Home/imgs/skill(7).png"></span></a>
          <div class="classDesc">
            <h2><a href="#" target="_blank">C++系统工程师</a></h2>
            <h1>¥1950.00<span>¥2600.00</span></h1>
            <div class="description">结合前两届学员的综合反馈，课程再次升级！联合多位C++技术大牛研究，精选五大系统级C++课程，通过实践训练，学员不仅掌握C++开发的关键技能，同时培养系统级工程师的思维方法和设计素养。</div>
            <div class="detail"><a href="#" target="_blank">查看详情</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-step">
    <h2 class="m-tit">互联网产品研发与运作流程</h2>
    <div class="s-bg"><img src="/Public/Home/imgs/skill(8).png"></div>
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
				<img src="/Public/Home/imgs/1.png">
			</a> 
			<a href="#" class="renren" target="_blank" data-index="关注我们_人人">
				<img src="/Public/Home/imgs/2.png">
			</a>
			<a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信">
				<img src="/Public/Home/imgs/3.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag"> <img src="/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友"> </div>
					<p class="qrTitle">易信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
			<a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信">
				<img src="/Public/Home/imgs/4.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag">
						<img src="/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友">
					</div>
					<p class="qrTitle">微信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
		</div>
        <div class="copy">©<span>1997-2015</span> <?php echo ($configs["copyright"]); ?></div>
      </div>
      <div class="ftrt f-fr">
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
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
<script src="/Public/Home/css/reuglar.0.3.1.js"></script>
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
			<div class="download"><img src="/Public/Home/imgs/sideBar90.png">
			  <p>下载App</p>
			</div>
			<div class="follow-weixin"><img src="/Public/Home/imgs/weixin.png">
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