<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo ($configs["title"]); ?></title>
	<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
	<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" async src="/Public/Home/js/ga.js"></script>
<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
<script src="/Public/Home/js/ajax.js" type="text/javascript"></script>
<link href="/Public/Home/css/public.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/index.css" type="text/css" rel="stylesheet">

</head>
<body class="m-index auto-1449466856996-parent" style="padding-top: 0px;">
<script></script>
<script type="text/javascript">window.navNotFixed=!1;window.isNavIndex=!0;</script>
<div id="login1">
    <div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?>个人主页</a></div>
    <div><a href="/index.php/Course/kechengbao/id/<?php echo ($_SESSION["id"]); ?>">课程包</a></div>
    <div><a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a></div>
    <div>
            <?php if($_SESSION["realname"] != null): ?><a href="">你已经是讲师<?php echo ($_SESSION["realname"]); ?></a>
                <?php else: ?>
                <a href="/index.php/Teacher/becometeacher/id/<?php echo ($_SESSION["id"]); ?>">入驻平台</a><?php endif; ?>

    </div>
    <div><a href="/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
    <div><a href="/index.php/Index/logout/id/<?php echo ($_SESSION["id"]); ?>">退出</a></div>
</div>
<div>
	<div class="m-indextopnav" id="j-indextopnav">
    <div class="g-flow">
		<!-- 登录界面 -->
      <div class="topheader f-pr f-cb">
        <div class="logo f-fl f-cb">
		  <img class="f-fl img" usemap="#Map" src="/Public/Upload/<?php echo ($configs["logo"]); ?>" alt="网易云课堂" width="500" height="100">
          <map name="Map">
            <area hidefocus="true" data-index="网易云课堂logo" title="网易云课堂" target="_self" href="" coords="56,40,250,75" shape="RECT">
          </map>
        </div>
        <script>window.huanbao = '';</script>
		
		<?php if($lo["id"] == null): ?><!-- 未登录显示的页面 -->
			<div class="userinfo f-fr f-cb f-pr">
				<div class="unlogin f-fr f-cb">
				<a  href="/index.php/Login/index.html" class="f-fr j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
				<p class="f-fc3 f-f0 f-fr" style="color:#333;">支持网易邮箱、QQ、微博号</p>
				</div>
			</div>
		<?php else: ?>
			<!-- 登录显示的页面 -->
			
			<div id="login" class="name j-userinfo">
				<div class="f-pr">
					<a href="/index.php/Info/index/id/<?php echo ($lo["id"]); ?>">
						消息
					</a>
					<a href="/index.php/Detail/personalCenter/id/<?php echo ($lo["id"]); ?>">
						活动包
					</a>

					<a href="/index.php" style="" class="face">
						<img class="headImg" src="/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
					</a>
				</div>
			</div><?php endif; ?>
      </div>
      <div class="topnav f-pr f-cb" id="j-navshowoffset">
        <div class="u-indexnavcatebtn" id="j-nav-indexcatebtn">
			<a href="/index.php/type/index" target="_blank" class="cbtn f-cb" data-index="全部课程">
				<div class="ic f-fl"></div>
				<span class="qb f-fl f-f0">全部课程</span>
			</a>
		</div>
        <div class="u-indexnavcatedialog f-pa" id="j-nav-indexcatedialog">
          <div class="f-fl cateleft f-pa j-cateleft" id="auto-id-1449466857071">
            <div class="catebg f-pa"></div>
            <div class="items f-pa">
			  <!-- IT互联网 -->
			  <?php $num = '66'; ?>
			  <?php if(is_array($types)): foreach($types as $key=>$types): ?><div class="item j-item " id="auto-id-14494668570<?php echo ($num); ?>">
                <div class="curbg"></div>
                <div class="inn">
					<a data-index="<?php echo ($types["name"]); ?>" id="<?php echo ($types["id"]); ?>" target="_blank" href="/index.php/type/index/id/<?php echo ($types["id"]); ?>" data-name="" class="f-f0 first"><?php echo ($types["name"]); ?></a>
                </div>
              </div>
			  <b style="display:none;"><?php echo ($num++); ?></b><?php endforeach; endif; ?>
			</div>
          </div>
          <div class="branch" id="auto-id-1449466857072" style="display:none;">
		    <a class="close f-pa j-close" id="auto-id-1449466857065"></a>
			
			<!-- IT互联网 -->
            <div class="IT" style="display:none;">
			  <a href = "">
				<h4 class = "tit">分类目录</h4>
              </a>
              <p class = "links">

			  </p>
              <a href = "#">系列课程</a>
              <p class = "links">
				<a href = "#">互联网+时代如何创业？</a><br>
                <a href = "#">平面设计师必学4大技能</a><br>
                <a href = "#">淘宝美工 玩转店铺装修</a><br>
                <a href = "#">零基础学会网页设计</a><br>
                <a href = "#">思维导图从入门到精通</a><br>
                <a href = "#">开发语言核心技术</a><br>
                <a href = "#">更多</a><br>
              </p>
              <a href = "">
				<img src = "/Public/Home/imgs/74826827C7C42F618FBD57644BB018FB.png" class="f-pa pic" alt = "图片">
			  </a>
  		    </div>
			
			<!-- 职场技能 -->
            <div class="work" style="display:none;">
			  <a href = "">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">
				
			  </p>
              <a href="">系列课程</a>
              <p class="links">
                <a href="">跟着大牛学Office办公技能</a><br>
                <a href="">市场从业者必学技能系列</a><br>
                <a href="">赢在职场，学习人际关系处理</a><br>
                <a href="">跟我考初级会计师</a><br>
                <a href="">和小蚊子学数据分析</a><br>
                <a href="">更多</a><br>
               </p>
               <a href="">
				<img src="/Public/Home/imgs/8F59299CC0954CA71D2D265B94DD8367.png" class="f-pa pic" alt="图片">
			   </a>
		    </div>
			
			<!-- 语言学习 -->
            <div class="study" style="display:none;">
			  <a href="">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">
					
  			  </p>
              <a href="">系列课程</a>
              <p class="links">
				<a href="">英语达人训练营</a><br>
                <a href="">更多</a><br>
              </p>
              <a href=""">
				<img src="/Public/Home/imgs/EE5D341A47C8811DE7A64190F9956E63.png" class="f-pa pic" alt="图片">
  			  </a>
			</div>
			
			<!-- 兴趣爱好 -->
            <div class="fave" style="display:none;">
			  <a href="">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">

  		     </p>
			  <a href="">系列课程</a>
              <p class="links">
			  <a href="">秋天不容错过的六大美食</a><br>
              <a href="">从零开始学摄影</a><br>
              <a href="">跟明星学唱歌，称霸KTV</a><br>
              <a href="">更多</a><br>
             </p>
              <a href="">
				<img src="/Public/Home/imgs/79D70AD3168F98C5C287DB84190B66C5.png" class="f-pa pic" alt="图片">
			 </a>
			</div>
			
			<!--  更多分类 -->
            <div class="more" style="display:none;">
			  <a href="">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">
					
			  </p>
              <a href="">系列课程</a>
              <p class="links">
				<a href="">大学一定要做的7件事</a><br>
                <a href="">学中医养生，炼成魅力女神</a><br>
                <a href="">宅家手册 天天不重样</a><br>
                <a href="">互联网时代的时间管理法则</a><br>
                <a href="">更多</a><br>
              </p>
              <a href="">
				<img src="/Public/Home/imgs/E00E907512ECBAE31B8BB180FBCE6312.png" class="f-pa pic" alt="图片">
 			  </a>
		    </div>
          
		  </div>
        </div>

          <div class="mainnav f-cb j-navFind">
              <a data-index="首页" class="nitem f-f0" href="/index.php/Index/index.html" hidefocus="true">首页</a>
              <div class="f-cb nitem f-f0 x-hoverItem"> <span>项目推荐</span>
                  <div class="f-pa u-navdropmenu x-child">
                      <span class="arrr f-pa"></span>
                      <a data-index="大学计算机专业" class="f-f0 dropitem" href="/index.php/major/major_inter" hidefocus="true"> <span>热点项目</span>
                      </a>
                      <a data-index="互联网职业技能" class="f-f0 dropitem" href="/index.php/major/major_skill" hidefocus="true">
                          <span>投资金额</span>
                      </a>
                      <a data-index="金融专业" class="f-f0 dropitem last" href="/index.php/major/major_money" hidefocus="true">
                          <span>更多...</span>
                      </a>
                  </div>
              </div>

              <?php if($_SESSION["id"] != null): ?><a data-index="软件需求" class="nitem f-f0" href="/index.php/Demand/demand" hidefocus="true">软件需求</a>
                  <?php else: ?>
                  <a data-index="软件需求" class="nitem f-f0" href="/index.php/Login/index" hidefocus="true">软件需求</a><?php endif; ?>

          <div class="xxzxtip f-pa f-dn" id="j-xxzxtip">
            <div class="arrr f-pa"></div>
            <div class="text f-fl">
              <p>“我的云课堂”改名为“学习中心”啦！</p>
              <p>你可以在学习中心查看所有学习记录和进度。</p>
            </div>
            <div class="xxzxtip-close f-pa" id="j-xxzxtip-close">X</div>
          </div>
            <a class="nitem f-f0" data-index="活动列表" href="/index.php/Activity/index" hidefocus="true">活动列表</a>
        </div>
        <div class="search j-searchP">
          <div class="box j-search f-cb">
            <div class="submit j-submit f-hide f-fl" id="auto-id-1449466857049">搜索课程、计划或用户</div>
            <input type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466857055">
          </div>
          <div class="j-suggest u-navsearchsug"></div>
         </div>
       </div>
    </div>
  </div>
	<!-- 滚屏部分 -->
	<div id="pic">
		<div>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/jp.jpg" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/girl.jpg" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/go.png" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/she.jpg" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/new.png" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/qz.png" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/four.png"/></a>
			<div id="a">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	
<div class="u-gray" style="margin-top:16px;">
  <div class="m-micro">
    <div class="g-flow f-pr">
      <div class="f-cb m-micro-wrap">
        <div class="f-fl item0"> <a href="/index.php/course/course_list.html" target="_blank"> <img src="/Public/Home/imgs/microicon.png" alt="微专业介绍图">
          <p class="intro f-f0">一种专业有效的职业培训方案</p>
          </a> </div>
        <div class="cntwrap" id="j-cntwrap">
          <div class="cntlist" id="j-cntlist">
            <div class="item f-fl"> <a href="/index.php/course/course_list.html" data-index="1" data-name="iOS开发工程师_三个月学会iOS构建" target="_blank">
              <div class="tit f-f0 f-thide">5-iOS开发工程师</div>
              <div class="tip f-f0 f-thide">三个月学会iOS构建</div>
              </a> </div>
            <div class="item f-fl"> <a href="" data-index="2" data-name="产品经理_网易5个亿级产品总监亲授" target="_blank">
              <div class="tit f-f0 f-thide">产品经理</div>
              <div class="tip f-f0 f-thide">网易5个亿级产品总监亲授</div>
              </a> </div>
            <div class="item f-fl"> <a href="" data-index="3" data-name="Java 开发工程师_浙大Java男神翁恺执教" target="_blank">
              <div class="tit f-f0 f-thide">Java 开发工程师</div>
              <div class="tip f-f0 f-thide">浙大Java男神翁恺执教</div>
              </a> </div>
            <div class="item f-fl"> <a href="" data-index="4" data-name="税务会计主管_精通税务，办税不慌" target="_blank">
              <div class="tit f-f0 f-thide">税务会计主管</div>
              <div class="tip f-f0 f-thide">精通税务，办税不慌</div>
              </a> </div>
            
            <div class="larr f-pa" id="j-larr"></div>
            <div class="rarr f-pa" id="j-rarr"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="m-seckill f-dn" id="j-seckill">
    <div class="g-flow">
      <div class="m-seckill-wrap f-cb">
        <div class="time f-fl">
          <p class="tit" id="j-seckill-tit">限量秒杀</p>
          <div class="icon"><img src="" alt="" id="j-seckill-icon"></div>
          <p style="display:none" class="cnt" id="j-seckill-cnt">本场开始倒计时</p>
          <p style="display:none" class="overcnt" id="j-seckill-overcnt"></p>
          <p style="display:none" class="count" id="j-seckill-count">--:--:--</p>
        </div>
        <div id="xlms_course" class="f-fl m-seckill-container"></div>
      </div>
    </div>
  </div>
  <div class="g-flow  m-block-it" id="j-mftj">
    <div class="g-container f-cb"> <a href="/index.php/course/course_list.html" target="_blank"> <img src="/Public/Home/imgs/mfhk.png" class="g-cell" alt="免费好课推荐"> </a>
      <div class="f-fl" id="mfhk">
	    
        <div class="u-index-list f-cb">
		<?php if(is_array($videos)): foreach($videos as $key=>$video): ?><div class="u-cover u-find-cover first" id="auto-id-1449504749256">
            <div class="wrap f-cb"> <a href="/index.php/Course/index/id/<?php echo ($video["id"]); ?>" target="_blank" class="j-href wrap" data-href="/course/introduction/1522003.htm" data-index="1" data-name="女神美腿操">
		  
			 <div class="img">
			 
                <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Upload/<?php echo ($video["video"]); ?>" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/35A9269EE09341F003BE51B48A82515D.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="女神美腿操" id="auto-id-1449504749273"> </div>
                <div class="tit">
                  <h3 class="f-thide"><?php echo ($video["title"]); ?></h3>
                  <h3 class="f-thide"><?php echo ($video["tname"]); ?></h3>
                  <div class="continued sign f-dn">老师参与</div>
                  <div class="continued sign foxconn2 f-dn "></div>
                </div>
               
                <div class="thumb">
                  <div class="desc f-cb"> <span class="hot f-fs0">781</span> </div>
                  <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                </div>
                <div class="f-dn"></div>
              </div>
			  
              </a>
              <div class="j-mask mask" data-id="1522003" style="display:none">
                <div class="j-del delbtn"></div>
              </div>
           
		   </div>
			 
			</div><?php endforeach; endif; ?>
		  </div>
        
		 </div>
		 
    </div>
  </div>
  <div class="g-flow m-block-it m-hot" id="j-hot">
    <div class="u-bar f-cb">
      <h2 class="f-fl">畅销好课</h2>
      <a class="u-more f-fr j-more" data-index="更多" data-name="更多" target="_blank" href="http://study.163.com/find.htm"><span>更多</span><span class="icn"></span></a> 
	</div>
    <div class="f-cb">
      <div class="g-mn2">
        <div class="g-mn2c">
          <div class="g-container">
            <div class="g-cell"> <a href="http://study.163.com/course/introduction/940019.htm#/courseDetail" data-index="左边" data-name="英语口语革命" target="_blank">
              <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504748143" src="/Public/Home/imgs/index.png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/842CF923C1BB105949C5DDC8575047A9.png?imageView&amp;thumbnail=225y466&amp;quality=100_225x466x1x95.png" width="225" height="466" alt="英语口语革命"> </div>
              </a> </div>
            <div id="cxkctj">
			
              <div class="u-index-list f-cb">
			  <?php if(is_array($goods)): foreach($goods as $key=>$good): ?><div class="u-cover u-find-cover first" id="auto-id-1449504749390">
                  <div class="wrap f-cb"> <a  href="/index.php/Course/index/id/<?php echo ($good["id"]); ?>"target="_blank" class="j-href wrap" data-href="/course/introduction/1337018.htm" data-index="1" data-name="向《经济学人》学图表">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Upload/<?php echo ($good["video"]); ?>" id="auto-id-1449504749421"> </div>
                      <div class="tit">
                        <h3 class="f-thide"><?php echo ($good["title"]); ?></h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide"><?php echo ($good["tname"]); ?></div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">535</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥<?php echo ($good["price"]); ?></span> <span class="discount"></span> </div>
                      </div>
                      <div class="u-cst-10"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1337018" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div><?php endforeach; endif; ?>
               </div>
           
			</div>
          </div>
        </div>
      </div>
	 
	 <!-- 新闻遍历-->
	  
      <div class="g-sd2">
        <div class="g-cell1 listrec">
          <ul>
		  <?php if(is_array($news)): foreach($news as $key=>$new): ?><li class="f-fcf">
				<a class="listlink f-thide" data-index="文字链" data-name="手把手教你读财报" href="" target="_blank"><?php echo ($new["title"]); ?>
				</a>
			</li><?php endforeach; endif; ?>
          </ul>
        </div>
        <div class="g-cell1"> <a href="http://study.163.com/course/introduction/608026.htm#/courseDetail" data-index="小图" data-name="小图" target="_blank">
          <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504748145" src="/Public/Home/imgs/index(1).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/012D303308DF28AE2365CF57647CF72D.png?imageView&amp;thumbnail=225y324&amp;quality=100_225x324x1x95.png" width="225" height="324" alt="雷子思维导图"> </div>
          </a> </div>
      </div>
	  
    </div>
  </div>
  <div class="g-flow" id="j-teacher">
    <div class="u-bar f-cb">
      <h2 class="f-fl">名师大咖秀</h2>
      <a class="u-more f-fr j-more" data-index="申请加入" data-name="申请加入" target="_blank" href="#><span>申请加入</span><span class="icn"></span></a>
	</div>
    <ul id="j-recteachers" class="m-lectors f-cb">
		
	<?php if(is_array($teachers)): foreach($teachers as $key=>$teacher): ?><li class="lector f-fl f-pr"> 
			<a href="/index.php/Teacher/index/id/<?php echo ($teacher["id"]); ?>" target="_blank" class="head" data-index="1" data-name="翁恺" title="翁恺"> 
			<img class="" id="" src="/Public/Upload/<?php echo ($teacher["photo"]); ?>" width="240" height="240" alt="teacher.name">
			<h3 class="f-pa f-fcf info f-thide"> 
			<span class="name"><?php echo ($teacher["tname"]); ?></span>
			
			</h3>
			</a> 
		</li><?php endforeach; endif; ?>
		<li class="lector f-fl f-pr">
		<ul class="m-orgs f-cb">
	<?php if(is_array($teachers)): foreach($teachers as $key=>$teacher): ?><li class="olist f-fcf f-cb"> 
		  <a class="oname f-thide f-fl" href="http://study.163.com/u/3575790365" data-index="文字链" data-name="HRBar专业人资培训" target="_blank" title="HRBar专业人资培训"><?php echo ($teacher["organ"]); ?> </a> <span class="f-fr">[机构]</span> 
		  </li><?php endforeach; endif; ?>
		</ul>
      </li>
    </ul>
  </div>
  <div class="b-70"></div>
</div>


  <script>            
	  window.recCourseId = window.recCourseId || [];
	  window.recCourseId.push(10001);
  </script>
  <div class="b-10"></div>
  <div class="b-30"></div>
  
  <div class="m-ad g-container" id="j-ad" style="margin-left:100px;">
	<?php if(is_array($advs)): foreach($advs as $key=>$advs): switch($advs["place"]): case "2": ?><iframe scrolling="no" seamless src="/Public/Upload/<?php echo ($advs["pic"]); ?>" frameborder="0" class="g-cell4" marginwidth="0" marginheight="0"></iframe><?php break;?>
	
	<?php case "3": ?><iframe scrolling="no" seamless src="/Public/Upload/<?php echo ($advs["pic"]); ?>" class="g-cell g-inlinehide" frameborder="0" marginwidth="0" marginheight="0"></iframe><?php break; endswitch; endforeach; endif; ?>
    <div class="b-20"></div>
  </div>

<div class="u-gray">
  <div class="g-flow m-corps">
    <div class="u-bar u-bar2 f-cb">
      <h2 class="f-fl">合作机构</h2>
      <a class="u-more f-fr j-more" id="j-more-corp" data-index="申请加入" data-cat="首页_合作机构" target="_blank" href="#"><span>申请加入</span><span class="icn"></span></a></div>
    <div id="j-corp" class="corpbox">
      <div class="u-corparea">
        <ul class="j-list f-cb" id="auto-id-1449466857189" style="margin-top: 0px;">
          <?php if(is_array($organs)): foreach($organs as $key=>$organ): ?><li class="item">
			<a target="_blank" hidefocus="false" class="f-fc9 j-link link" href="" id="auto-id-1449466857191" data-index="机构" data-name="麦子学院"><?php echo ($organ["name"]); ?>
			</a>
		  </li><?php endforeach; endif; ?>
		</ul>
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
          <a href="http://weibo.com/study163" class="weibo" target="_blank" data-index="关注我们_微博"><img src="/Public/Home/imgs/1.png"></a> <a href="http://page.renren.com/601660242" class="renren" target="_blank" data-index="关注我们_人人"><img src="/Public/Home/imgs/2.png"></a> <a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信"><img src="/Public/Home/imgs/3.png">
          <div class="tipQrcode f-pa">
            <div class="qrImag"> <img src="/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友"> </div>
            <p class="qrTitle">易信号：study163</p>
            <div class="tip f-pa"></div>
          </div>
          </a> <a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信"><img src="/Public/Home/imgs/4.png">
          <div class="tipQrcode f-pa">
            <div class="qrImag"> <img src="/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友"> </div>
            <p class="qrTitle">微信号：study163</p>
            <div class="tip f-pa"></div>
          </div>
          </a> </div>
        <div class="copy">©<span>1997-2015</span> <?php echo ($configs["copyright"]); ?></div>
      </div>
      <div class="ftrt f-fr">
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a> 
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a> 
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a> 
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
	  <a href="http://www.icourse163.org/" target="_blank" data-index="中国大学MOOC">中国大学MOOC</a>
        <div class="f-cb mobile f-fr">
          <div class="tit f-fl">移动App:</div>
          <a target="_blank" class="mlogo1" href="https://itunes.apple.com/cn/app/wang-yi-yun-ke-tang-for-iphone/id880452926?mt=8"></a> <a target="_blank" class="mlogo2" href="http://study.163.com/pub/study-android-official.apk"></a> </div>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" charset="utf-8">

	// 头像的控制
	$(".headImg").hover(function(){
			$("#login1").css("display","block");
	},function(){
		$("#login1").hover(function(){
				
		},function(){
			$("#login1").css("display","none");
		});
	});
	
	
	
	<!-- 全部课程 -->
		<!-- 互联网 -->
	$("#auto-id-1449466857066").hover(function(){
		
		var id=$("#auto-id-1449466857066 a").attr("id");
		var html="";
		$(".IT p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".IT p:first-of-type").append(html);
		},'json');
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:block");
		$(".work").attr("style","display:none");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".study").attr("style","display:none");
		
	},function(){
		$(this).css("border","");
		
		$("#auto-id-1449466857072").hover(function(){

			
			$(this).css("border","");
			},function(){
			$(".IT p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".IT p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".IT").attr("style","display:none");
			$(this).css("border","");
			});
	});

	
	
	<!-- 职场技能 -->
	$("#auto-id-1449466857067").hover(function(){
		
		var id=$("#auto-id-1449466857067 a").attr("id");
		var html="";
		$(".work p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".work p:first-of-type").append(html);
		},'json');
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".work").attr("style","display:block");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".study").attr("style","display:none");
	},function(){
		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){

			$(this).css("border","");
			},function(){
			$(".work p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".work p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".work").attr("style","display:none");
			$(this).css("border","");
			});
	});
	
	<!-- 语言学习 -->
	$("#auto-id-1449466857068").hover(function(){
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".work").attr("style","display:none");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".study").attr("style","display:block");
		var id=$("#auto-id-1449466857068 a").attr("id");
		var html="";
		$(".study p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".study p:first-of-type").append(html);
		},'json');
	},function(){

		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){
			
			$(this).css("border","");
		},function(){
			$(".study p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".study p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".study").attr("style","display:none");
			$(this).css("border","");
		});
	});
	
		<!-- 兴趣爱好 -->
	$("#auto-id-1449466857069").hover(function(){
		
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".study").attr("style","display:none");
		$(".work").attr("style","display:none");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:block");
		
		
		var id=$("#auto-id-1449466857069 a").attr("id");
		var html="";
		$(".fave p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".fave p:first-of-type").append(html);
			},'json');
		},function(){
		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){

			$(this).css("border","");
			},function(){
			$(".fave p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".fave p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".fave").attr("style","display:none");
			
			});
	});
	
		<!-- 更多兴趣 -->
	$("#auto-id-1449466857070").hover(function(){
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".study").attr("style","display:none");
		$(".work").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".more").attr("style","display:block");
		var id=$("#auto-id-1449466857070 a").attr("id");
		var html="";
		$(".more p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".more p:first-of-type").append(html);
			},'json');
	},function(){
		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){

			$(this).css("border","");
			},function(){
			$(".more p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".more p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".more").attr("style","display:none");
			});
	});
	
	
	
	

	<!-- 滚动的广告 -->
	var n=0;
	var time=setInterval(function(){
		if(n<7){
			$("#pic img").css("display","none");
			$("#pic img").eq(n).css("display","block");
			$("#a div").css("height","10px");
			n++;
		}else{
			n=0;
		}	
	},3000);
	$("#a div").click(function(){
		var index=$(this).index();
		$("#pic img").css("display","none");
		$("#pic img").eq(index).css("display","clock");
		$("#pic img").eq(index).fadeIn(3000);
		$("#a div").eq(index).fadeIn(3000,function(){
			$(this).css("height","20px");
		});
	});
</script>
</html>