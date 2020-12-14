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

  <div class="f-cb">
    <div class="b-15"></div>
    <div id="j-newguidetips"></div>
    <div class="g-cimn2">
      <div class="g-cimn2c f-bg" id="j-outerbox">
        <div class="f-pr">
          <h2 class="u-ctit">笔记</h2>
          <div class="u-sortbtn"> <a class="j-sort s-fc3" id="auto-id-1449573051016">最优笔记</a> <span>-</span> <a class="j-sort" id="auto-id-1449573051017">最新笔记</a> </div>
			<div class="m-notes j-alcl">
				欢迎大家在此做学习笔记~
			</div>
          <div class="m-notespool j-pool auto-1449573050867-parent">
            <div class="m-basepool f-cb auto-1449573050867">
              <div class="m-data-lists f-cb f-pr j-data-list">
                <div class="m-noteitem f-pr first" id="auto-id-1449573051074">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/1621618276" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(3).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051090" data-cid="cid1"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/1621618276" class="j-user f-fl" target="_blank" id="auto-id-1449573051089" data-cid="cid0"><span class="j-usrs usr">z805302194</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="449238" data-type="2" data-name="走近点儿认识你" data-time="19" id="auto-id-1449573051094"><span class="f-ib">00:19</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051159">课时1</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">完整的C语言程序如下：<br>
                        1  #include&lt;stdio.h&gt;<br>
                        2 <br>
                        3  int main(){<br>
                        4       printf("C语言我来了");<br>
                        5       return  0;<br>
                        6   }</span><a class="j-zhankai togBtn" id="auto-id-1449573051155" style="display: none;">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd"></span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051157">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051083"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-6-12</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/1041029.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=1041029&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051075">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051092">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051097" title="顶">顶（13）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051103">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051098" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051099">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051141">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051143">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051145">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051147">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051149">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051151">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051153" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051109">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051115">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051117" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051119" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051121" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051123" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051125" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051127" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051129" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051111">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051134"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051133">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051135"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051136" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051162">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/wxzshelly" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(2).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051173" data-cid="cid3"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/wxzshelly" class="j-user f-fl" target="_blank" id="auto-id-1449573051172" data-cid="cid2"><span class="j-usrs usr">小暴</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="456376" data-type="2" data-name="了解一下存数据的箱子吧" data-time="0" id="auto-id-1449573051177"><span class="f-ib">00:00</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051242">课时4</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">int 数字char 字符float 小数int applenember=10;//一个叫做applenember的变量，初始化数据为10char cha='a';//字符使用的时候必须用单引号引起来float money=123.23//小数double r=1234.123456//精度比较高的小数printf("%d",applanumber); //%dprintf("%c",</span><a class="j-zhankai togBtn" id="auto-id-1449573051238">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd">int 数字<br>
                        char 字符<br>
                        float 小数<br>
                        <br>
                        int applenember=10;<br>
                        //一个叫做applenember的变量，初始化数据为10<br>
                        <br>
                        char cha='a';<br>
                        //字符使用的时候必须用单引号引起来<br>
                        <br>
                        float money=123.23<br>
                        //小数<br>
                        <br>
                        double r=1234.123456<br>
                        //精度比较高的小数<br>
                        <br>
                        printf("%d",applanumber); //%d<br>
                        printf("%c",cha); //%c<br>
                        printf("%f",money); //%f<br>
                        printf("%f",r); //%f</span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051240">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051171"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-4-9</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/877091.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=877091&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051163">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051175">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051180" title="顶">顶（13）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051186">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051181" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051182">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051224">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051226">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051228">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051230">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051232">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051234">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051236" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051192">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051198">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051200" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051202" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051204" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051206" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051208" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051210" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051212" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051194">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051217"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051216">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051218"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051219" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051245">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/8036470123" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(3).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051256" data-cid="cid5"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/8036470123" class="j-user f-fl" target="_blank" id="auto-id-1449573051255" data-cid="cid4"><span class="j-usrs usr">羽毛2013</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051323">课时14</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">玩转C语言基础课堂课时14  打赌输赢机*生活中我们经常会打赌，赌你赢了怎么样我赢了怎么样。C语言中有一个跟这个非常类似的语句，叫做条件运算符，具体是这么写的：(表达式?值1:值2)其中的表达式就是赌注的内容，值1和值2就是赌赢的奖励。Y=(x==2?100:50);上</span><a class="j-zhankai togBtn" id="auto-id-1449573051319">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd">玩转C语言基础课堂<br>
                        <br>
                        课时14  打赌输赢机<br>
                        <br>
                        *生活中我们经常会打赌，赌你赢了怎么样我赢了怎么样。C语言中有一个跟这个非常类似的语句，叫做条件运算符，具体是这么写的：<br>
                        <br>
                        (表达式?值1:值2)<br>
                        <br>
                        其中的表达式就是赌注的内容，值1和值2就是赌赢的奖励。<br>
                        <br>
                        Y=(x==2?100:50);<br>
                        <br>
                        上面这段代码中，如果x等于2，那么y就等于100如果x不等2，那么y就等于50。<br>
                        现在由你自己来做一个真正的打赌输赢机吧。变量x赋值为20，如果数字是正数，那么y这个变量就等于A；如果数字是负数，那么y这个变量就等于B，最后把这个y的变量打印出来就可以了。<br>
                        <br>
                        1#include &lt;stdio.h&gt;<br>
                        2<br>
                        3int main()<br>
                        4{<br>
                        5   int x=20;<br>
                        6   char y;<br>
                        7   y=(x&gt;0?’A’:’B’);<br>
                        8   printf(“%c”,y);<br>
                        9   return 0;<br>
                        10}<br>
                        11<br>
                        <br>
                        点击运行<br>
                        <br>
                        连接至服务器，请稍候...<br>
                        --------------------------------<br>
                        A<br>
                        --------------------------------<br>
                        程序运行结束<br>
                      </span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051321">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051254"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2013-10-21</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/606432.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=606432&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051246">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051258">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051261" title="顶">顶（7）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051267">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051262" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051263">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051305">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051307">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051309">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051311">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051313">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051315">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051317" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051273">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051279">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051281" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051283" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051285" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051287" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051289" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051291" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051293" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051275">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051298"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051297">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051299"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051300" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051326">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/ykt1421751548234" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(4).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051337" data-cid="cid7"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/ykt1421751548234" class="j-user f-fl" target="_blank" id="auto-id-1449573051336" data-cid="cid6"><span class="j-usrs usr">Scientistykt1421751548233</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="455040" data-type="2" data-name="了解这个框架" data-time="87" id="auto-id-1449573051341"><span class="f-ib">01:27</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051406">课时2</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">标准格式：<br>
                        #include &lt;studio.h&gt;<br>
                        <br>
                        int main()<br>
                        {<br>
                        Printf();<br>
                        Return 0;<br>
                        }</span><a class="j-zhankai togBtn" id="auto-id-1449573051402" style="display: none;">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd"></span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051404">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051335"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">1月20日</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/1475559.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=1475559&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051327">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051339">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051344" title="顶">顶（6）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051350">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051345" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051346">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051388">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051390">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051392">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051394">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051396">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051398">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051400" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051356">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051362">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051364" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051366" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051368" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051370" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051372" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051374" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051376" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051358">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051381"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051380">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051382"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051383" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051409">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/3308573120" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(5).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051420" data-cid="cid9"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/3308573120" class="j-user f-fl" target="_blank" id="auto-id-1449573051419" data-cid="cid8"><span class="j-usrs usr">薛定谔的猫k</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="489210" data-type="2" data-name="分数等级查询小系统" data-time="112" id="auto-id-1449573051424"><span class="f-ib">01:52</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051489">课时12</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">if语句后不加分号</span><a class="j-zhankai togBtn" id="auto-id-1449573051485" style="display: none;">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd"></span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051487">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051418"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-2-25</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/813047.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=813047&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051410">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051422">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051427" title="顶">顶（6）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051433">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051428" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051429">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051471">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051473">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051475">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051477">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051479">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051481">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051483" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051439">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051445">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051447" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051449" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051451" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051453" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051455" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051457" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051459" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051441">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051464"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051463">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051465"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051466" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051492">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/8036470123" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(3).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051503" data-cid="cid11"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/8036470123" class="j-user f-fl" target="_blank" id="auto-id-1449573051502" data-cid="cid10"><span class="j-usrs usr">羽毛2013</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051570">课时13</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">玩转C语言基础课堂课时13  星期查询小系统*我们已经学习了if和else的嵌套使用，当多层的嵌套使用时出错的可能性就增加了。C语言中还有一种新的语句能解决这个问题，我们一直叫它开关语句switch。下面我们来讲一下怎么使用switch语句吧。先看一段代码：Switch(</span><a class="j-zhankai togBtn" id="auto-id-1449573051566">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd">玩转C语言基础课堂<br>
                        <br>
                        课时13  星期查询小系统<br>
                        <br>
                        *我们已经学习了if和else的嵌套使用，当多层的嵌套使用时出错的可能性就增加了。C语言中还有一种新的语句能解决这个问题，我们一直叫它开关语句switch。下面我们来讲一下怎么使用switch语句吧。先看一段代码：<br>
                        <br>
                        Switch(weekday)<br>
                        {<br>
                        Case1:<br>
                        Printf(“today is Mondayn”);<br>
                        Break;<br>
                        <br>
                        Case2:<br>
                        Printf(“today is Tuesdayn”);<br>
                        Break;<br>
                        <br>
                        … ….<br>
                        <br>
                        Case7:<br>
                        Printf(“today is Sundayn”);<br>
                        Break;<br>
                        <br>
                        Default:<br>
                        Printf(“you write number is wrong!”);<br>
                        Break;<br>
                        }<br>
                        <br>
                        上面的代码就是switch的使用方法，switch后面的括号里是一个变量，上面的例子中weekday就是一个变量，用来填数字，我们希望这个数字是1到7之间的整数。<br>
                        <br>
                        Case后面跟着的数字就是来跟weekday进行匹配的，若是weekday中数字为1，就进入case1中进行相应的处理，否则就不会进去。Case后面不仅能写数字，也可以是一个字母，或者是一个句子，但是不能是变量，每个case后面跟着的不能重复。<br>
                        <br>
                        Default是用来处理异常的，比如weekday中填的不是1到7的数字，而是别的，这时就会进入到default这个语句中进行相应的处理。<br>
                        <br>
                        每个case后面必须有一个break，是终止循环跳出的意思。<br>
                        现在来将这个星期查询小系统补全吧！Weekday是3，判断数字3是星期几呢？<br>
                        <br>
                        1#include &lt;stdio.h&gt;<br>
                        2<br>
                        3Int main()<br>
                        4{<br>
                        5   int weekday=3;<br>
                        6   switch(weekday)<br>
                        7{<br>
                        8   case1:<br>
                        9   printf(“today is Mondayn”);<br>
                        10   break;<br>
                        11<br>
                        12   case2:<br>
                        13   printf(“today is Tuesdayn);<br>
                        14   break;<br>
                        15<br>
                        16   case3:<br>
                        17   printf(“today is Wednesdayn”);<br>
                        18   break;<br>
                        19<br>
                        20   caes4:<br>
                        21   printf(“today is Thursdayn”);<br>
                        22   break;<br>
                        23 <br>
                        24   case5:<br>
                        25   printf(“today is Fridayn”);<br>
                        26   break;<br>
                        27<br>
                        28   case6:<br>
                        29   printf(“today is Saturdayn”);<br>
                        30   break;<br>
                        31<br>
                        32   case7:<br>
                        33   printf(“today is Sundayn”);<br>
                        34   break;<br>
                        35<br>
                        36   default:<br>
                        37   printf(“you write number is wrong!”);<br>
                        38   break;<br>
                        39}<br>
                        40   return 0;<br>
                        41}<br>
                        42<br>
                        <br>
                        点击运行<br>
                        <br>
                        连接至服务器，请稍候...<br>
                        --------------------------------<br>
                        Today is wednesday<br>
                        --------------------------------<br>
                        程序运行结束<br>
                      </span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051568">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051501"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2013-10-21</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/605422.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=605422&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051493">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051505">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051508" title="顶">顶（6）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051514">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051509" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051510">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051552">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051554">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051556">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051558">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051560">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051562">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051564" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051520">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051526">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051528" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051530" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051532" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051534" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051536" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051538" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051540" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051522">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051545"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051544">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051546"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051547" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051573">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/5488343282" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(3).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051584" data-cid="cid13"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/5488343282" class="j-user f-fl" target="_blank" id="auto-id-1449573051583" data-cid="cid12"><span class="j-usrs usr">xiongzi0426</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="489210" data-type="2" data-name="分数等级查询小系统" data-time="125" id="auto-id-1449573051588"><span class="f-ib">02:05</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051653">课时12</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">条件语句的嵌套：#include &lt;stdio.h&gt;int main(){     int score=67;     if(score&lt;=100 &amp;&amp; score&gt;=80)          {             printf("你的成绩是优秀！\n");         }else                 {    if(score&lt;=80 &amp;&amp; score&gt;=60)                         { </span><a class="j-zhankai togBtn" id="auto-id-1449573051649">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd">条件语句的嵌套：<br>
                        #include &lt;stdio.h&gt;<br>
                        int main()<br>
                        {<br>
                        int score=67;<br>
                        if(score&lt;=100 &amp;&amp; score&gt;=80) <br>
                        {<br>
                        printf("你的成绩是优秀！n");<br>
                        }else<br>
                        {    if(score&lt;=80 &amp;&amp; score&gt;=60)<br>
                        {<br>
                        printf("你的成绩是良好！n");<br>
                        }else<br>
                        {<br>
                        printf("你的成绩是不及格！n");<br>
                        }<br>
                        }<br>
                        return 0;<br>
                        }</span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051651">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051582"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-9-24</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/1235366.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=1235366&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051574">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051586">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051591" title="顶">顶（4）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051597">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051592" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051593">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051635">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051637">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051639">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051641">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051643">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051645">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051647" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051603">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051609">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051611" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051613" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051615" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051617" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051619" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051621" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051623" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051605">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051628"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051627">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051629"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051630" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051656">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/congxing" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(6).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051667" data-cid="cid15"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/congxing" class="j-user f-fl" target="_blank" id="auto-id-1449573051666" data-cid="cid14"><span class="j-usrs usr">星葱</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="456376" data-type="2" data-name="了解一下存数据的箱子吧" data-time="46" id="auto-id-1449573051671"><span class="f-ib">00:46</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051736">课时4</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">整数 int<br>
                        字符 char<br>
                        小数 float</span><a class="j-zhankai togBtn" id="auto-id-1449573051732" style="display: none;">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd"></span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051734">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051665"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-7-24</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/1122463.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=1122463&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051657">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051669">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051674" title="顶">顶（4）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051680">评论（1）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051675" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051676">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051718">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051720">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051722">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051724">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051726">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051728">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051730" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051686">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051692">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051694" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051696" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051698" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051700" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051702" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051704" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051706" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051688">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051711"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051710">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051712"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051713" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr" id="auto-id-1449573051739">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/3013795455" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(7).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051750" data-cid="cid17"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/3013795455" class="j-user f-fl" target="_blank" id="auto-id-1449573051749" data-cid="cid16"><span class="j-usrs usr">许晓江</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="449238" data-type="2" data-name="走近点儿认识你" data-time="0" id="auto-id-1449573051754"><span class="f-ib">00:00</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051819">课时1</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">走近点儿认识你</span><a class="j-zhankai togBtn" id="auto-id-1449573051815" style="display: none;">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd"></span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051817">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051748"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-4-15</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/905449.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=905449&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051740">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051752">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051757" title="顶">顶（4）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051763">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051758" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051759">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051801">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051803">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051805">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051807">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051809">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051811">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051813" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051769">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051775">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051777" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051779" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051781" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051783" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051785" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051787" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051789" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051771">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051794"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051793">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051795"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051796" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-noteitem f-pr last" id="auto-id-1449573051822">
                  <div class="j-noedit-box noedit">
                    <div class="img"> <a href="http://study.163.com/u/5802182691" class="j-user" target="_blank"><img src="/Public/Home/imgs/saved_resource(3).png" class="j-usrs" width="49px" height="49px" alt="" id="auto-id-1449573051833" data-cid="cid19"> </a> </div>
                    <div class="mnc">
                      <div>
                        <div class="notehead f-cb"> <a href="http://study.163.com/u/5802182691" class="j-user f-fl" target="_blank" id="auto-id-1449573051832" data-cid="cid18"><span class="j-usrs usr">437307537</span></a>
                          <div class="noeditanchor j-noeditanchor f-fr"><a class="f-anchorLink f-ib j-anchorLink" data-courseid="334013" data-lessonid="489248" data-type="2" data-name="星期查询小系统" data-time="19" id="auto-id-1449573051837"><span class="f-ib">00:19</span></a></div>
                          <div class="notelesson j-noteLesson f-fr" id="auto-id-1449573051902">课时13</div>
                        </div>
                      </div>
                      <div class="j-notecnt notecnt"> <span class="notect j-content">switch开关语句 switch（变量）  case（数字、句子、字母  不能是变量）default（异常）  break 终止循环 跳出</span><a class="j-zhankai togBtn" id="auto-id-1449573051898" style="display: none;">展开</a> </div>
                      <div class="j-notecntd notecnt" style="display: none;"> <span class="notect j-contentd"></span><a class="j-shouqi togBtn togBtn1" id="auto-id-1449573051900">收起</a> <a href="" class="noteimg j-img" target="_blank" style="display: none;"><img class="notephoto" src="" alt="" data-size="0" id="auto-id-1449573051831"></a> </div>
                      <div class="noteinfo f-cb">
                        <div class="notedate j-date">2014-8-18</div>
                        <a class="notelink j-link" style="display:none" target="_blank" href="http://study.163.com/note/noteDetail/1170022.htm?id=334013&type=0">进入详情页</a>
                        <div class="notepriv j-priv" style="display: none;"></div>
                        <div class="noteopt j-opt f-cb" style="display: none;"> <a hidefocus="true" class="noteedit j-edit" target="_blank" href="http://study.163.com/note/editNote.htm?noteId=1170022&id=334013&type=0">编辑</a> <a hidefocus="true" class="notedel j-del" id="auto-id-1449573051823">删除</a> </div>
                        <a hidefocus="true" class="noterep j-rep" id="auto-id-1449573051835">举报</a>
                        <div class="j-oper-box oper f-fr">
                          <div class="noteact f-cb"><a hidefocus="true" class="notedig j-dig" id="auto-id-1449573051840" title="顶">顶（3）</a><span class="j-cmt notecmt"><span class="m-comment-wrapper"><a hidefocus="true" class="u-comment j-comment-btn" id="auto-id-1449573051846">评论（0）</a></span></span><a hidefocus="true" class="notecol j-col disabled" id="auto-id-1449573051841" title="参加该课程后才能收藏">收藏</a><a hidefocus="true" class="notesh j-share" id="auto-id-1449573051842">分享
                            <div class="sharebox x-hide j-shareBox auto-1449573050870-parent">
                              <div class="u-share f-cb auto-1449573050870" id="j-shareUI"><a class="netease solo" href="javascript:;" title="分享到网易微博" rel="netease" style="display:none;" id="auto-id-1449573051884">网易微博</a><a class="sina solo" href="javascript:;" title="分享到新浪微博" rel="sina" id="auto-id-1449573051886">新浪微博</a><a class="douban solo" href="javascript:;" title="分享到豆瓣" rel="douban" id="auto-id-1449573051888">豆瓣</a><a class="qzone solo" title="分享到QQ空间" rel="qzone" id="auto-id-1449573051890">QQ空间</a><a class="renren solo" href="javascript:;" title="分享到人人" rel="renren" id="auto-id-1449573051892">人人网</a><a class="kaixin solo" href="javascript:;" title="分享到开心网" rel="kaixin" style="display:none;" id="auto-id-1449573051894">开心网</a><a class="weixin solo" href="javascript:;" title="分享到微信" rel="weixin" id="auto-id-1449573051896" style="display: none;">微信</a></div>
                            </div>
                          </a></div>
                        </div>
                      </div>
                      <div class="j-cmt-box">
                        <div class="j-toggle toggle f-pr" style="display: none;">
                          <div class="m-comment-pool j-commentpool auto-1449573050867-parent">
                            <div class="m-basepool f-cb auto-1449573050867">
                              <div class="m-data-lists f-cb f-pr j-data-list"></div>
                              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent" style="display: none;">
                                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051852">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051858">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051860" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051862" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051864" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051866" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051868" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051870" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051872" style="display: none;"></a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt js-disabled" id="auto-id-1449573051854">下一页</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="m-add-comment j-addcomment">
                            <div class="m-edititem">
                              <div class="editwrap">
                                <textarea name="edittxt" class="j-edittxt edittxt" id="auto-id-1449573051877"></textarea>
                                <label class="j-hint hint" for="edittxt" id="auto-id-1449573051876">请添加你的评论...</label>
                              </div>
                              <div class="editopt f-cb j-editOpt"><a hidefocus="true" class="j-edit-btn editbtn" id="auto-id-1449573051878"><span class="j-btn-text">评论</span></a><a hidefocus="true" class="j-close-btn cancelbtn" id="auto-id-1449573051879" style="display: none;">取消</a></div>
                            </div>
                          </div>
                        <span class="j-triangle triangle" style="display: none;"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ui-pager f-pr j-data-pager auto-1449573050866-parent">
                <div class="auto-1449573050866"><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn zprv js-disabled" id="auto-id-1449573051028">上一页</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg1 js-selected" id="auto-id-1449573051034">1</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg2" id="auto-id-1449573051036" style="">2</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg3" id="auto-id-1449573051038" style="">3</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg4" id="auto-id-1449573051040" style="">4</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg5" id="auto-id-1449573051042" style="">5</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg6" id="auto-id-1449573051044" style="">6</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg7" id="auto-id-1449573051046" style="">7</a><span class="zdot">...</span><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zpgi zpg8" id="auto-id-1449573051048" style="">237</a><a href="http://study.163.com/note/noteIndex.htm?id=334013&type=0#" class="zbtn znxt" id="auto-id-1449573051030">下一页</a></div>
              </div>
            </div>
          </div>
          <div class="m-notespool2 j-pool2" style="display: none;">
            <div><span class="j-nonenote">该课程还没有公开的笔记,现在就去</span><br>
            <a class="j-addNote" target="_blank" href="http://study.163.com/note/addNote.htm?id=334013&type=0">记笔记</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="g-cisd2"> </div>
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