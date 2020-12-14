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
				<div><a href="<?php echo ($_SESSION["id"]); ?>">消息</a></div>
				<div><a href="/index.php/Detail/personalCenter/uid/<?php echo ($_SESSION["id"]); ?>">活动包</a></div>
				<img src="/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
				<div id="login1">
					<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?></a></div>
					<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>">个人主页</a></div>
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
          <a data-index="微专业" class="nitem" href="/index.php/major/major_small" hidefocus="true">微专业</a>
		  <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/index.php/User/download" target="_blank" class="store apple"><img src="/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/index.php/User/download" target="_blank" class="store android"><img src="/Public/Home/imgs/upload(2).png"></a> </div>
            </div>
          </div>
          <a data-index="学习中心" class="nitem" href="/index.php" hidefocus="true">学习中心</a>
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



				<?php if($_SESSION["id"] != null): ?><!-- <input type="button" value="立即参加" class="learnbtn f-db f-cb j-joinBtn" id="auto-id-1449466945261"/>-->
			   <input type="button" value="立即参加" class="learnbtn f-db f-cb j-joinBtn" id="auto-id-1449466945261"/>
			  <?php else: ?>
			  <div style="width:150px;height:40px;line-height:40px;text-align:center;background:#FF9600;"><b><a href="/index.php/Login/index" style="color:white">立即参加</a></b></div><?php endif; ?>

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

  <div class="b-15"></div>
  <div class="m-forumIndex f-cb">
    <div class="g-cimn2">
      <div class="g-cimn2c f-bg f-cb" id="forum-box">
        <div class="fhead " id="j-forumhead">
          <h1 class="f-cb"> <span class="ftit f-thide f-fl"> 讨论区 </span> <a href="http://study.163.com/about/aboutus.htm#/about?aboutType=4&subType=1" target="_blank" class="f-fr rule" id="j-rulelink">讨论区使用规则</a> </h1>
          <p class=""> 欢迎进入课程讨论区，你可以与本课程的老师和同学在这里交流. </p>
        </div>
        <div id="j-forummode" class="sxww" style="display: none;">
          <div class="sxw f-pr">
            <div class="f-pa line"></div>
            <div class="con f-fr f-pr">
              <div class="f-fr" id="j-forumsort">
                <div class="f-fr" id="j-forumsortw"></div>
                <span class="f-fr lab">排序:</span> </div>
              <div class="f-fr" id="j-forumks">
                <div class="f-fr" id="j-forumksw"></div>
                <span class="f-fr lab">课时:</span> </div>
            </div>
          </div>
        </div>
        <div class="postwrap f-cb">
          <ul class="m-posts" id="j-forumposts">
            <li class="u-forumli j-forumli" data-link="/forum/detail/918127.htm" data-forumid="4000" id="auto-id-1449573144501">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1448374214090" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="山水之间5566"> </a> <span class="j-userName" data-id="11814368" id="auto-id-1449573144503"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1448374214090" target="_blank">山水之间5566</a> </span> <span class="time s-fc5 j-postTime" data-time="1449472252875" id="auto-id-1449573144500">12月7日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/918127.htm" target="_blank"> 语速过快,慢点就好了 </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/920092.htm" data-forumid="4000" id="auto-id-1449573144505">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1445949799312" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="丶半夜"> </a> <span class="j-userName" data-id="11199229" id="auto-id-1449573144507"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1445949799312" target="_blank">丶半夜</a> </span> <span class="time s-fc5 j-postTime" data-time="1449417616140" id="auto-id-1449573144504">12月7日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/920092.htm" target="_blank"> char array是什么意思i？ </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/918070.htm" data-forumid="4000" id="auto-id-1449573144509">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1449046513818" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="用户3907887917"> </a> <span class="j-userName" data-id="12008636" id="auto-id-1449573144511"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1449046513818" target="_blank">用户3907887917</a> </span> <span class="time s-fc5 j-postTime" data-time="1449381236772" id="auto-id-1449573144508">12月6日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/918070.htm" target="_blank"> 第三课时中printf("%d",c)是什么意思 </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/921068.htm" data-forumid="4000" id="auto-id-1449573144513">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1449370384320" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="zmh194250"> </a> <span class="j-userName" data-id="12102712" id="auto-id-1449573144515"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1449370384320" target="_blank">zmh194250</a> </span> <span class="time s-fc5 j-postTime" data-time="1449372439920" id="auto-id-1449573144512">12月6日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/921068.htm" target="_blank"> 视频里用的是什么编译器啊 </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/921033.htm" data-forumid="4000" id="auto-id-1449573144517">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/1909329556" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(2).png" width="30" height="30" alt="清河伯子"> </a> <span class="j-userName" data-id="8010130" id="auto-id-1449573144519"> <a class="u-forumname j-userLink" href="http://study.163.com/u/1909329556" target="_blank">清河伯子</a> </span> <span class="time s-fc5 j-postTime" data-time="1449310501770" id="auto-id-1449573144516">12月5日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/921033.htm" target="_blank"> 第四课时里1分13秒处的“print”是什么意思，是否应该用“printf” </a> </div>
               <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/910059.htm" data-forumid="4000" id="auto-id-1449573144521">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/5301880687" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="包包不是包"> </a> <span class="j-userName" data-id="2747854" id="auto-id-1449573144523"> <a class="u-forumname j-userLink" href="http://study.163.com/u/5301880687" target="_blank">包包不是包</a> </span> <span class="time s-fc5 j-postTime" data-time="1449228610793" id="auto-id-1449573144520">12月4日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/910059.htm" target="_blank"> 适合初中生入门看。 </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/911026.htm" data-forumid="4000" id="auto-id-1449573144525">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1448453584822" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="2473310079"> </a> <span class="j-userName" data-id="11828790" id="auto-id-1449573144527"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1448453584822" target="_blank">2473310079</a> </span> <span class="time s-fc5 j-postTime" data-time="1449189214691" id="auto-id-1449573144524">12月4日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/911026.htm" target="_blank"> "%d"表示啥 </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/905004.htm" data-forumid="4000" id="auto-id-1449573144529">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1432168300136" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="小田一号"> </a> <span class="j-userName" data-id="6386247" id="auto-id-1449573144531"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1432168300136" target="_blank">小田一号</a> </span> <span class="time s-fc5 j-postTime" data-time="1449032750987" id="auto-id-1449573144528">12月2日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/905004.htm" target="_blank"> 章节10课时53的0分43时左上角的橙色单词“song1”写成了“snog1” </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/877122.htm" data-forumid="4000" id="auto-id-1449573144533">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/ykt1447120657747" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="秋夜细雨"> </a> <span class="j-userName" data-id="11485387" id="auto-id-1449573144535"> <a class="u-forumname j-userLink" href="http://study.163.com/u/ykt1447120657747" target="_blank">秋夜细雨</a> </span> <span class="time s-fc5 j-postTime" data-time="1448815778060" id="auto-id-1449573144532">11月30日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/877122.htm" target="_blank"> 感觉课程简单易懂。。。在讲的稍微详细一点慢一点就更好了。。。 </a> </div>
               <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
            </li>
            <li class="u-forumli j-forumli" data-link="/forum/detail/878109.htm" data-forumid="4000" id="auto-id-1449573144537">
              <div class="forumi">
                <div class="f-cb">
                  <div class="head"> <a class="j-userLink" href="http://study.163.com/u/408887247" target="_blank"> <img class="img j-avatar" id="" src="/Public/Home/imgs/saved_resource(3).png" width="30" height="30" alt="茜锁"> </a> <span class="j-userName" data-id="4484610" id="auto-id-1449573144539"> <a class="u-forumname j-userLink" href="http://study.163.com/u/408887247" target="_blank">茜锁</a> </span> <span class="time s-fc5 j-postTime" data-time="1448796917621" id="auto-id-1449573144536">11月29日</span> <span class="panel f-fr s-fc5">【综合讨论区】</span> </div>
                </div>
                <div class="f-cb cnt f-db f-thide"> <span class="j-manInfo u-manInfo"> <span class="u-forumtag u-forumtag1 j-tagTopNode" style="display:none;">置顶</span> <span class="u-forumtag u-forumtag2 j-tagAgreeNode" style="display:none;">精华</span> <span class="u-forumtag j-tagLectorNode" style="display:none;">老师参与</span> </span> <a class="s-fc5 post" href="http://study.163.com/forum/detail/878109.htm" target="_blank"> 很好很好 </a> </div>
                <div class="f-cb">
                  <div class="f-cb f-fr"> <span class="s-fc2 num"><a href="/index.php/Talk/course_reply.html">点赞（0）</a></span> <span class="s-fc2 num num1"><a href="/index.php/Talk/course_reply.html">回复（0）</a></span> <span class="s-fc2 num num2"><a href="/index.php/Talk/course_reply.html">观看（0）</a></span> </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="ui-pager auto-1449573144300-parent" id="j-pager">
            <div class="auto-1449573144300"><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zbtn zprv js-disabled" id="auto-id-1449573144474">上一页</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg1 js-selected" id="auto-id-1449573144480">1</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg2" id="auto-id-1449573144482">2</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg3" id="auto-id-1449573144484">3</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg4" id="auto-id-1449573144486">4</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg5" id="auto-id-1449573144488">5</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg6" id="auto-id-1449573144490">6</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg7" id="auto-id-1449573144492">7</a><span class="zdot">...</span><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zpgi zpg8" id="auto-id-1449573144494">44</a><a href="http://study.163.com/forum/index.htm?cid=334013&p=1#" class="zbtn znxt" id="auto-id-1449573144476">下一页</a></div>
          </div>
</div>
      </div>
    </div>
    <div class="g-cisd2"> <a class="u-postbtn" id="j-postbtn"></a>
      <div class="b-15"></div>
      <div class="f-bg panelw">
        <div class="searchw" id="j-searchArea">
          <div class="u-forumSearchUI f-pr">
            <div class="box j-search f-cb">
              <div class="select j-select f-fl">
                <div class="u-select">
                  <div class="up j-up f-thide" id="auto-id-1449573144459">全部讨论区</div>
                  <div class="down f-bg j-list" style="display: none;">
                    <div class="f-thide list" title="老师答疑区" id="auto-id-1449573144453">老师答疑区</div>
                    <div class="f-thide list" title="综合讨论区" id="auto-id-1449573144455">综合讨论区</div>
                    <div class="f-thide list" title="全部讨论区" id="auto-id-1449573144457">全部讨论区</div>
                  </div>
                </div>
              </div>
              <div class="midBox f-fl j-search">
                <input type="text" class="j-input f-fl" id="auto-id-1449573144466">
                <label class="j-label" id="auto-id-1449573144464"></label>
                <div class="j-enter enter f-fr" style="display: none;"></div>
              </div>
            </div>
            <div class="j-suggest sug f-bg"></div>
          </div>
        </div>
        <div class="ps" id="j-forumslist"> <a href="http://study.163.com/forum/index.htm?cid=334013&fid=3999&p=1" class="panelitem">
          <div class="ic ic10 forumsprite f-fl"></div>
          <div class="in f-fl">
            <h3 class="f-thide">老师答疑区</h3>
            <p class="f-thide" title="你可以将学习过程中关于课程内容、学习方法、应用效果等问题发布在本区，课程讲师和同学将会为你答疑解惑。">你可以将学习过程中关于课程内容、学习方法、应用效果等问题发布在本区，课程讲师和同学将会为你答疑解惑。</p>
          </div>
          </a> <a href="http://study.163.com/forum/index.htm?cid=334013&fid=4000&p=1" class="panelitem">
          <div class="ic ic20 forumsprite f-fl"></div>
          <div class="in f-fl">
            <h3 class="f-thide">综合讨论区</h3>
            <p class="f-thide" title="欢迎分享，鼓励原创，无论是你的学习体验、想法、工作生活经验，还是好书、好文章、好资源，都可发在这里。">欢迎分享，鼓励原创，无论是你的学习体验、想法、工作生活经验，还是好书、好文章、好资源，都可发在这里。</p>
          </div>
          </a> </div>
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
	
	
		
	 //点击参加隐藏
	$("#auto-id-1449466945261").click(function(){
		 //alert(1);
		$(this).css("display","none");
		var id = $("#vid").attr("value");
		var number = $("#num").html();
         var num =  ++number;
		//alert(id);
		//alert(num);
        
	    $("#num").html(num);
		
		$.post("/index.php/Course/num",{"id":id,"number":num},function(data){
		    
		});		
	});
	
	/* $("#talk").click(function(){
		$("#auto-id-1449466945261").css("display","none");
		alert(1);
	})*/

</script>


</html>