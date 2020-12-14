<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($configs["title"]); ?></title>
<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
<meta name="description" content="<?php echo ($configs["description"]); ?>">

<script type="text/javascript" async src="/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/Public/Home/js/course_list.js"></script>
<link href="/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/course_noteIndex.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/course_note.css" type="text/css" rel="stylesheet">
<script src="/Public/Home/js/course_note.js" type="text/javascript"></script>

<script src="/Public/Home/js/ajax.js" type="text/javascript"></script>
<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>

<script src="/Public/Home/js/course_talk.js" type="text/javascript"></script>
<link href="/Public/Home/css/course_talk.css" type="text/css" rel="stylesheet">

<script src="/Public/Home/js/course_reply.js" type="text/javascript"></script>
<link href="/Public/Home/css/course_reply.css" type="text/css" rel="stylesheet">

</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/index.php" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="#" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
		
		
		<div class="m-navrgt f-fr f-cb f-pr j-navright">
		<?php if($_SESSION["id"] == null): ?><div class="userinfo f-fr f-cb f-pr">
				<div class="unlogin f-fr">
					<a href="/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
				</div>
			</div>

			<div class="nav-search u-navsearchUI j-searchP">
				<div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" >
					<div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
					<input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
				</div>
				<div class="j-suggest u-navsearchsug"></div>
			</div>
		<?php else: ?>
			<div class="nav-search u-navsearchUI j-searchP">
				<div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" style="right:300px;" >
					<div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
					<input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
				</div>
				<div class="j-suggest u-navsearchsug"></div>
			</div>
			<div id="login">
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
		  <span>课程体系</span>
            <div class="f-pa u-navdropmenu x-child"> 
			<span class="arrr f-pa"></span>
			<a data-index="大学计算机专业" class="dropitem f-f0" href="/index.php/major/major_inter" hidefocus="true"> <span>大学计算机专业</span> </a> 
			<a data-index="互联网职业技能" class="dropitem f-f0" href="/index.php/major/major_skill" hidefocus="true"> <span>互联网职业技能</span></a>
			<a data-index="金融专业" class="dropitem f-f0 last" href="/index.php/major/major_money" hidefocus="true"> <span>金融专业</span> </a> 
			</div>
          </div>
          <a data-index="软件需求" class="nitem" href="/index.php/major/major_small" hidefocus="true">软件需求</a>
		  <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/index.php/User/download" target="_blank" class="store apple"><img src="/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/index.php/User/download" target="_blank" class="store android"><img src="/Public/Home/imgs/upload(2).png"></a> </div>
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
<div class="g-flow f-cb">
  <div class="b-20"></div>
<div class="m-maintainInfo" style="display:none">
  <div id="maintain_info_box" class="g-flow"></div>
</div>
<div id="advertisement_box" class="advertisement_box f-pf" style="display:none;"></div>
<div class="g-flow f-cb">
  <div class="b-20"></div>
  <div class="f-bg courseheadbox" id="j-coursehead">
    <div class="u-courseHead">
      <div class="ov f-pr j-ch">
        <div class="courseMark djMark f-pa j-djMark"></div>
        <div class="courseMark sfMark f-pa j-sfMark"></div>
        <div class="g-sd1 left j-chimg"><img width="450" height="250" src="/Public/Upload/<?php echo ($video["video"]); ?>"><a class="cliBtn" id="auto-id-1449466945226"></a></div>

		
        <div class="g-mn1">
          <div class="g-mn1c right j-right f-pr">
            <div class="ctarea f-fl j-cht">
              <div class="u-coursetitle f-fl">
                <h2 class="f-thide">
					<span title="玩转 C语言 基础课堂"><?php echo ($video["title"]); ?></span>
				</h2>
				 <div class="f-cb margin-top-15"value="<?php echo ($video["id"]); ?>" id="vid">
					<span class="hot f-fs0"  id="num"><?php echo ($video["number"]); ?></span>
					<span class="j-starNode starall">
					  <div class="u-rating" name="">
						<div class="star on"></div>
						<div class="star on"></div>
						<div class="star on"></div>
						<div class="star on"></div>
						<div class="star half"></div>
						<span class="j-tip"></span>
					  </div>
					 </span>
					 <span class="cmt">(<?php echo ($teacher["organ"]); ?>)</span>
					 </div>
              </div>
            </div>
            <div>
              <div class="discountArea f-pa j-discountArea f-cb f-f0">
                <div class="f-cb margin-b-15"> <span class="price">¥&nbsp;<?php echo ($video["price"]); ?></span> </div>
              </div>
               <div id="cc" class="btnarea f-pa j-chbtnarea">
                <div class="f-cb limit"> </div>
				<!--
				<input type="hidden"  id ="vid" value="<?php echo ($video["id"]); ?>"/>
				<input type="hidden" id="num" value="<?php echo ($video["number"]); ?>"/>
				-->


            </div>
          </div>   
        </div>

      </div>
      <form action="http://study.163.com/order/confirm.htm" method="post" class="j-payForm" target="_blank">
        <input type="hidden" name="productId" class="j-courseId">
        <input type="hidden" name="productType" value="0">
      </form>
      <ul class="f-cb tabarea">
        <li class="f-fl"><a class="j-chtab selected" hidefocus="true" href="/index.php/Course/index/id/<?php echo ($video['id']); ?>" style="color:#000">主页</a></li>
        <li class="f-fl"><a class="j-chtab" hidefocus="true" href="/index.php/Note/index/id/<?php echo ($video['id']); ?>">笔记</a></li>
        <li class="f-fl"><a id="talk" class="j-chtab" hidefocus="true" href="/index.php/Talk/index/id/<?php echo ($video['id']); ?>">讨论区</a></li>
        <li class="f-fr"><a class="j-chtab s-fc5" hidefocus="true" href="#">问答</a></li>
      </ul>
    </div>
  </div>


    <?php if($_SESSION["id"] != null): ?><!-- <input type="button" value="立即参加" class="learnbtn f-db f-cb j-joinBtn" id="auto-id-1449466945261"/>-->
      <a type="button" style="font-size: 15px;color: red;font-weight: bold" href="/index.php/Course/joincourse/videoid/<?php echo ($video["id"]); ?>">立即参加</a>
      <?php else: ?>
      <div style="width:150px;height:40px;line-height:40px;text-align:center;background:#FF9600;"><b><a href="/index.php/Login/index" style="color:white">立即参加</a></b></div><?php endif; ?>

  <div class="b-15"></div>
  <div class="g-cimn2 f-cb">
    <div class="g-cimn2c f-cb">
		<div id="j-livecourse-remind"> </div>
			<div class="f-bg" id="j-course-briefintro">
				<div class="u-gtit f-pa u-gtit1"></div>
				<div class="m-cbi">
					<h2 class="u-ctit ctit1">简介</h2>
					<div class="cintrocon j-courseintro"><?php echo ($video["des"]); ?></div>
				</div>
			</div>
			<div class="b-15"></div>


	</div>
      <div id="j-recommend" style="display:none;">
        <div class="b-15"></div>
        <div class="f-cb f-bg f-pr recommedCourse" id="j-recommendCourse">
          <h2 class="u-ctit f-thide recommend">学习过该课程的人还学习过：</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="g-cisd2 f-fr">
    <div class=" f-bg" id="j-course-lectors">
      <div class="m-ti">
        <div class="lectors j-lectors">
          <div class="jts j-jts" style="display: none;">
            <div class="f-fr tiicon jtsbtn jtsright j-nextlector"></div>
            <div class="f-fr tiicon jtsbtn-mr jtsbtn jtsleft j-prelector"></div>
          </div>
          <div class="j-lLink limg f-cb f-pr" id="auto-id-1449466944967" data-cid="cid0"><img height="75" width="75" class="j-limg" src="/Public/Upload/<?php echo ($teacher["photo"]); ?>" id="auto-id-1449466944961"><span class="j-vipIcon u-orgVipIcon2 f-pa" title="认证机构" style="top: 64px; left: 64px;"></span></div>
          <img height="75" class="j-lLink" src="" style="display: none;">
          <p class="lname f-thide j-lname"><?php echo ($teacher["tname"]); ?></p>
        </div>
        <div class="ltxt j-ltxt f-richEditorText edueditor_styleclass_0 edueditor_styleclass_1"><?php echo ($teacher["description"]); ?></div>
      </div>
    </div>
    <div id="j-repo-box" class="f-dn f-bg repoBox f-cb">
      <h2 class="u-ctit">相关题库</h2>
      <div id="j-repoList" class="repoList f-bdr"> </div>
    </div>
    <div id="j-contactWrap" class="f-dn">
      <div class="b-15"></div>
      <div class="f-cb f-bg">
        <h2 class="u-ctit">服务咨询</h2>
        <div id="j-contact-box" class="f-bdr"></div>
      </div>
    </div>
    <div id="j-coureseclassWrap" class="f-dn">
      <div class="b-15"></div>
      <div class="f-cb f-bg">
        <h2 class="u-ctit">所属系列课程</h2>
        <div id="j-courseclass-box" class="f-bdr"></div>
      </div>
    </div>
    <div class="b-15"></div>
    <div class="f-cb f-bg">
      <h2 class="u-ctit">评价</h2>
      <div id="j-cmt-box" class="f-bdr">
        <div class="">
          <div class="m-cmtop f-cb f-dn">
            <p class="txt f-fs0 s-fc5">给该课程打分：</p>
            <div class="rate j-solo"></div>
            <a class="edit f-dn j-solo" id="auto-id-1449466945301">编辑</a> </div>
          <div class="m-cmtinp f-dn">
            <div class="j-input f-pr"></div>
            <div class="b-10"></div>
            <div class="u-cmtsb f-cb j-btn">
              <div class="tips j-tips"></div>
            <a class="submit j-op" id="auto-id-1449466945299"><span>发表</span></a><a class="j-op f-fs0 cancel" id="auto-id-1449466945300">取消</a></div>
          </div>
          <div class="m-cmttxt"></div>
          <div class="u-asknull j-al-null" style="display:none">暂无评价</div>
          <div class="m-cmtcnt j-5cnt">
            <div class="u-cmt">
              <div class="wrp f-cb f-pr"> <img class="/Public/Home/imgs/j-info f-cb" alt="" id="auto-id-1449466945307" src="/Public/Home/imgs/185133E65A46A141721ED3C6DE720A81.jpg" data-cid="cid19">
                <div class="info">
                  <p class="presoninfo j-personinfo name" id="auto-id-1449466945312" data-cid="cid20"> <span class="name s-fc3 f-fs0 f-thide j-info" id="auto-id-1449466945308">罗二花</span> </p>
                  <span class="time s-fc2 f-fs0 j-info">8:32</span>
                  <div class="rate j-rate">
                    <div class="u-rating">
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                    <span class="j-tip"></span></div>
                  </div>
                </div>
                <a class="f-pa reply s-fc3 j-replyBtn" id="auto-id-1449466945329" style="display: none;">回复</a> </div>
              <div class="cnt s-fc5 f-fs0 j-info">真棒</div>
              <div class="j-reply"></div>
            </div>
            <div class="u-cmt">
              <div class="wrp f-cb f-pr"> <img class="/Public/Home/imgs/j-info f-cb" alt="" id="auto-id-1449466945332" src="/Public/Home/imgs/6597173120751663718.jpg" data-cid="cid21">
                <div class="info">
                  <p class="presoninfo j-personinfo name" id="auto-id-1449466945337" data-cid="cid22"> <span class="name s-fc3 f-fs0 f-thide j-info" id="auto-id-1449466945333">断弦</span> </p>
                  <span class="time s-fc2 f-fs0 j-info">12月6日</span>
                  <div class="rate j-rate">
                    <div class="u-rating">
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                    <span class="j-tip"></span></div>
                  </div>
                </div>
                <a class="f-pa reply s-fc3 j-replyBtn" id="auto-id-1449466945354" style="display: none;">回复</a> </div>
              <div class="cnt s-fc5 f-fs0 j-info">为什么没有链表？</div>
              <div class="j-reply"></div>
            </div>
            <div class="u-cmt">
              <div class="wrp f-cb f-pr"> <img class="/Public/Home/imgs/j-info f-cb" alt="" id="auto-id-1449466945357" src="/Public/Home/imgs/small.jpg" data-cid="cid23">
                <div class="info">
                  <p class="presoninfo j-personinfo name" id="auto-id-1449466945362" data-cid="cid24"> <span class="name s-fc3 f-fs0 f-thide j-info" id="auto-id-1449466945358">czl908</span> </p>
                  <span class="time s-fc2 f-fs0 j-info">12月6日</span>
                  <div class="rate j-rate">
                    <div class="u-rating">
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star"></div>
                    <span class="j-tip"></span></div>
                  </div>
                </div>
                <a class="f-pa reply s-fc3 j-replyBtn" id="auto-id-1449466945379" style="display: none;">回复</a> </div>
              <div class="cnt s-fc5 f-fs0 j-info"></div>
              <div class="j-reply"></div>
            </div>
            <div class="u-cmt">
              <div class="wrp f-cb f-pr"> <img class="/Public/Home/imgs/j-info f-cb" alt="" id="auto-id-1449466945382" src="/Public/Home/imgs/small.jpg" data-cid="cid25">
                <div class="info">
                  <p class="presoninfo j-personinfo name" id="auto-id-1449466945387" data-cid="cid26"> <span class="name s-fc3 f-fs0 f-thide j-info" id="auto-id-1449466945383">小田一号</span> </p>
                  <span class="time s-fc2 f-fs0 j-info">12月2日</span>
                  <div class="rate j-rate">
                    <div class="u-rating">
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star"></div>
                      <div class="star"></div>
                    <span class="j-tip"></span></div>
                  </div>
                </div>
                <a class="f-pa reply s-fc3 j-replyBtn" id="auto-id-1449466945404" style="display: none;">回复</a> </div>
              <div class="cnt s-fc5 f-fs0 j-info">不错不错</div>
              <div class="j-reply"></div>
            </div>
            <div class="u-cmt">
              <div class="wrp f-cb f-pr"> <img class="/Public/Home/imgs/j-info f-cb" alt="" id="auto-id-1449466945407" src="/Public/Home/imgs/small.jpg" data-cid="cid27">
                <div class="info">
                  <p class="presoninfo j-personinfo name" id="auto-id-1449466945412" data-cid="cid28"> <span class="name s-fc3 f-fs0 f-thide j-info" id="auto-id-1449466945408">m18353298863</span> </p>
                  <span class="time s-fc2 f-fs0 j-info">12月1日</span>
                  <div class="rate j-rate">
                    <div class="u-rating">
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on"></div>
                    <span class="j-tip"></span></div>
                  </div>
                </div>
                <a class="f-pa reply s-fc3 j-replyBtn" id="auto-id-1449466945429" style="display: none;">回复</a> </div>
              <div class="cnt s-fc5 f-fs0 j-info"></div>
              <div class="j-reply"></div>
            </div>
          </div>
          <a class="m-ckgd j-op f-db" id="auto-id-1449466945302">查看更多</a> </div>
      </div>
    </div>
    <div class="b-15"></div>
    <div id="j-courseusers">
      <div>
        <div class="u-Pusers j-Pusers f-bg f-cb f-pr">
          <h3 class="f-cb"><em class="num j-num f-fl">80706</em><span class="nTask nCourse j-taskOrCourse f-fl"></span></h3>
          <div class="j-pics pics"><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1445145524999" id="auto-id-1449466945266">
            <div class="j-icon" id="auto-id-1449466945267" data-cid="cid1"><img class="j-img" src="/Public/Home/imgs/saved_resource(2).png"><em class="f-thide">水天一线ykt1445145524997</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1444141959677" id="auto-id-1449466945268">
            <div class="j-icon" id="auto-id-1449466945269" data-cid="cid2"><img class="j-img" src="/Public/Home/imgs/saved_resource(3).png"><em class="f-thide">LanceCHZ</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/liudaoran" id="auto-id-1449466945270">
            <div class="j-icon" id="auto-id-1449466945271" data-cid="cid3"><img class="j-img" src="/Public/Home/imgs/saved_resource(4).png"><em class="f-thide">liu2011jianzhong</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1446899851070" id="auto-id-1449466945272">
            <div class="j-icon" id="auto-id-1449466945273" data-cid="cid4"><img class="j-img" src="/Public/Home/imgs/saved_resource(5).png"><em class="f-thide">与我常在ykt1446899851067</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1441737505068" id="auto-id-1449466945274">
            <div class="j-icon" id="auto-id-1449466945275" data-cid="cid5"><img class="j-img" src="/Public/Home/imgs/saved_resource(3).png"><em class="f-thide">a77494185</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1446729919164" id="auto-id-1449466945276">
            <div class="j-icon" id="auto-id-1449466945277" data-cid="cid6"><img class="j-img" src="/Public/Home/imgs/saved_resource(6).png"><em class="f-thide">Mature&nbsp;men</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/1852565460" id="auto-id-1449466945278">
            <div class="j-icon" id="auto-id-1449466945279" data-cid="cid7"><img class="j-img" src="/Public/Home/imgs/saved_resource(7).png"><em class="f-thide">默mooc26</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1441755659687" id="auto-id-1449466945280">
            <div class="j-icon" id="auto-id-1449466945281" data-cid="cid8"><img class="j-img" src="/Public/Home/imgs/saved_resource(3).png"><em class="f-thide">admacc</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1449455148727" id="auto-id-1449466945282">
            <div class="j-icon" id="auto-id-1449466945283" data-cid="cid9"><img class="j-img" src="/Public/Home/imgs/saved_resource(3).png"><em class="f-thide">菊花的胜利</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1449459799031" id="auto-id-1449466945284">
            <div class="j-icon" id="auto-id-1449466945285" data-cid="cid10"><img class="j-img" src="/Public/Home/imgs/saved_resource(3).png"><em class="f-thide">MSNykt1449459799029</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/ykt1448435528332" id="auto-id-1449466945286">
            <div class="j-icon" id="auto-id-1449466945287" data-cid="cid11"><img class="j-img" src="/Public/Home/imgs/saved_resource(3).png"><em class="f-thide">心雨难晴</em></div>
            </a><a class="uItem j-uItem f-fl f-pr" target="_blank" href="http://study.163.com/u/6564058523" id="auto-id-1449466945288">
            <div class="j-icon" id="auto-id-1449466945289" data-cid="cid12"><img class="j-img" src="/Public/Home/imgs/saved_resource(8).png"><em class="f-thide">海寧hexLens</em></div>
          </a></div>
        </div>
        <div class="j-default userDefault f-bg" style="display: none;">
          <h4>没有人使用同样的计划</h4>
        </div>
      </div>
    </div>
    <div id="j-handpickasks">
      <div>
        <div class="b-15"></div>
        <div class="m-handPickAsks f-cb f-bg">
          <h2 class="u-ctit">精选问答</h2>
          <div class="j-itemarea f-cb con">
            <div class="item f-cb ">
              <p><a class="link j-notelink" href="http://study.163.com/ask/askDetail/737073.htm" target="_blank">请问该课程使用的C语言编辑器是什么？Turbo? blond? or visual? C#</a></p>
              <p class="more f-cb"> <span class="f-fl f-thide dc"><span>答案(139)</span>|<span>投票(10)</span></span> <span class="f-fr f-thide from">来自:<a href="http://study.163.com/u/6541147438" class="j-user" id="auto-id-1449466945290" data-cid="cid13">gaopengedu1989</a></span> </p>
            </div>
            <div class="item f-cb ">
              <p><a class="link j-notelink" href="http://study.163.com/ask/askDetail/1084019.htm" target="_blank">练习去哪里下载？</a></p>
              <p class="more f-cb"> <span class="f-fl f-thide dc"><span>答案(2)</span>|<span>投票(8)</span></span> <span class="f-fr f-thide from">来自:<a href="http://study.163.com/u/4414725516" class="j-user" id="auto-id-1449466945291" data-cid="cid14">王小菲</a></span> </p>
            </div>
            <div class="item f-cb last">
              <p><a class="link j-notelink" href="http://study.163.com/ask/askDetail/869052.htm" target="_blank">晕，打那么快鬼看得清楚啊，点暂停都来不及！</a></p>
              <p class="more f-cb"> <span class="f-fl f-thide dc"><span>答案(2)</span>|<span>投票(7)</span></span> <span class="f-fr f-thide from">来自:<a href="http://study.163.com/u/2088105155" class="j-user" id="auto-id-1449466945292" data-cid="cid15">ufo88889</a></span> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="j-handpicknotes">
      <div>
        <div class="b-15"></div>
        <div class="m-handPickNotes f-cb f-bg">
          <h2 class="u-ctit">精选笔记</h2>
          <div class="j-itemarea f-cb con">
            <div class="item f-cb ">
              <p><a class="link j-notelink" href="http://study.163.com/note/noteDetail/1041029.htm" target="_blank">完整的C语言程序如下：
                1  #include
                <stdio.h> 2  
                  3  int main(){
                  4       printf("C语言我来了");
                  5       return  0;
                  6   }</stdio.h>
              </a></p>
              <p class="more f-cb"> <span class="f-fl f-thide dc"><span>顶(13)</span>|<span>评论(0)</span></span> <span class="f-fr f-thide from">来自:<a href="http://study.163.com/u/1621618276" class="j-user" id="auto-id-1449466945293" data-cid="cid16">z805302194</a></span> </p>
            </div>
            <div class="item f-cb ">
              <p><a class="link j-notelink" href="http://study.163.com/note/noteDetail/877091.htm" target="_blank">int 数字
                char 字符
                float 小数
                
                int applenember=10;
                //一个叫做applenember的变量，初始化数据为10
                
                char cha='a';
                //字符使用的时候必须用单引号引起来
                
                float money=123.23
                //小数
                
                double r=1234.123456
                //精度比较高的小数
                
                printf("%d",applanumber); ...</a></p>
              <p class="more f-cb"> <span class="f-fl f-thide dc"><span>顶(13)</span>|<span>评论(0)</span></span> <span class="f-fr f-thide from">来自:<a href="http://study.163.com/u/wxzshelly" class="j-user" id="auto-id-1449466945294" data-cid="cid17">小暴</a></span> </p>
            </div>
            <div class="item f-cb last">
              <p><a class="link j-notelink" href="http://study.163.com/note/noteDetail/606432.htm" target="_blank">玩转C语言基础课堂
                
                课时14  打赌输赢机
                
                *生活中我们经常会打赌，赌你赢了怎么样我赢了怎么样。C语言中有一个跟这个非常类似的语句，叫做条件运算符，具体是这么写的：
                
                (表达式?值1:值2)
                
                其中的表达式就是赌注的内容，值1和值2就是赌赢的奖励。
                
                Y=(x==2?1...</a></p>
              <p class="more f-cb"> <span class="f-fl f-thide dc"><span>顶(7)</span>|<span>评论(0)</span></span> <span class="f-fr f-thide from">来自:<a href="" class="j-user" id="auto-id-1449466945295" data-cid="cid18">羽毛2013</a></span> </p>
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
<script> 
	window.course = {             	 
		id:"334013", 
		name:"玩转 C语言 基础课堂",
		discountPrice:"" 
		};
	window.needPkg = "false";
	/* 秒杀 */ 
</script>
 <script>
	if (!this.I$){this.I$=function(){var a={},b=[],c=function(){return!1},d={},e=function(b,c){return a.toString.call(b)==="[object "+c+"]"};return function(f,g){var h=d[f],i=e(g,"Function");if(null==g||i||(h=g),i){for(var j=[],k=2,l=arguments.length;l>k;k++)j.push(I$(arguments[k]));var m={};j.push.call(j,m,a,c,b);var n=g.apply(null,j)||m;if(h&&e(n,"Object"))if(Object.keys)for(var p,o=Object.keys(n),k=0,l=o.length;l>k;k++)p=o[k],h[p]=n[p];else for(var p in n)h[p]=n[p];else h=n}return h||(h={}),d[f]=h,h}}();}
</script>
<script src="/Public/Home/css/core.js" type="text/javascript"></script>
<script type="text/javascript">
	I$(1009,function(){
		var e=window,i=(NEJ.P("nej.e"),NEJ.P("nej.v"),NEJ.P("nej.ut")),t=NEJ.P("edu.u");
		if(t.Yd()){e.dispatcher=i.ra.zs();
		e.dispatcher.ma("config",location.config);
		e.dispatcher.ga(t.umi("commonutil"),"commonutil.html");
		e.dispatcher.ga(t.umi("courseDetail"),"course/courseDetail.html");
		e.dispatcher.ga(t.umi("courseComment"),"course/courseComment.html");
		e.dispatcher.Ba();e.dispatcher.Ia(t.umi("courseDetail"),!0)}},82,4,110,32
	);
</script>
<div class="m-side-operation auto-1449466944905" id="j-side-operation">
  <div class="side-service-item"> <a class="item-link-block" data-name="留言" href="http://study.163.com/about/aboutus.htm#/about?aboutType=8" target="_blank"> <i class="side-service-icon feedback-icon"></i> <span class="item-hover-text feedback-text">反馈意见</span> </a> </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item "> <a class="item-link-block app-download" data-name="手机课堂" href="javascript:void(0)"> <i class="side-service-icon phone-icon"></i> <span class="item-hover-text">手机课堂</span>
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
<script type="text/javascript" charset="utf-8">
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