<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>全部课程 - 网易云课堂</title>
<script type="text/javascript" async src="/study-2/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/study-2/Public/Home/js/course_list.js"></script>
<link href="/study-2/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/study-2/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">
</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/study-2/index.php" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/study-2/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="http://study.163.com/find.htm" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
            <div class="unlogin f-fr"> <a href="/study-2/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a> </div>
          </div>
          <div class="nav-search u-navsearchUI j-searchP">
            <div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" >
              <div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
              <input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
            </div>
            <div class="j-suggest u-navsearchsug"></div>
          </div>
        </div>
        <div class="m-nav f-cb j-navFind"> <a data-index="首页" class="nitem" href="/study-2/index.php"" hidefocus="true">首页</a>
          <div class="f-pr f-cb nitem x-hoverItem"> <span>课程体系</span>
            <div class="f-pa u-navdropmenu x-child"> <span class="arrr f-pa"></span> <a data-index="大学计算机专业" class="dropitem f-f0" href="http://study.163.com/curricula/cs.htm" hidefocus="true"> <span>大学计算机专业</span> </a> <a data-index="互联网职业技能" class="dropitem f-f0" href="http://study.163.com/curricula/internet.htm" hidefocus="true"> <span>互联网职业技能</span></a> <a data-index="金融专业" class="dropitem f-f0 last" href="http://study.163.com/topics/financialMajorCourseSystem0901/" hidefocus="true"> <span>金融专业</span> </a> </div>
          </div>
          <a data-index="微专业" class="nitem" href="http://study.163.com/smartSpec/intro.htm" hidefocus="true">微专业</a>
          <a data-index="学习中心" class="nitem" href="http://study.163.com/cloud/myCloudClass.htm" hidefocus="true">学习中心</a>
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

<div class="g-flow f-cb">
  <div id="j-catbox" class="m-catebox f-pr f-cb">
    <ul class="level-1">
      <li class="level-1-item f-pr" id="catId-all"> <a href="http://study.163.com/find.htm#">全部</a> <span class="arrow"> <span class="arrow_wrap arrow-wrap-trsp"> <i class="arrow-border"></i> <em class="arrow-cnt"></em> </span> </span> </li>
      <li class="level-1-item f-pr selected" id="catId-3"> <a href="http://study.163.com/find.htm#/courselist?ct=3"> IT互联网</a> <span class="arrow"> <span class="arrow_wrap arrow-wrap-trsp"> <i class="arrow-border"></i> <em class="arrow-cnt"></em> </span> </span> </li>
      <li class="level-1-item f-pr" id="catId-18"> <a href="http://study.163.com/find.htm#/courselist?ct=18"> 职场技能</a> <span class="arrow"> <span class="arrow_wrap arrow-wrap-trsp"> <i class="arrow-border"></i> <em class="arrow-cnt"></em> </span> </span> </li>
      <li class="level-1-item f-pr" id="catId-28"> <a href="http://study.163.com/find.htm#/courselist?ct=28"> 语言学习</a> <span class="arrow"> <span class="arrow_wrap arrow-wrap-trsp"> <i class="arrow-border"></i> <em class="arrow-cnt"></em> </span> </span> </li>
      <li class="level-1-item f-pr" id="catId-10001"> <a href="http://study.163.com/find.htm#/courselist?ct=10001"> 兴趣爱好</a> <span class="arrow"> <span class="arrow_wrap arrow-wrap-trsp"> <i class="arrow-border"></i> <em class="arrow-cnt"></em> </span> </span> </li>
      <li class="level-1-item f-pr" id="catId-29"> <a href="http://study.163.com/find.htm#/courselist?ct=29"> 更多分类</a> <span class="arrow"> <span class="arrow_wrap arrow-wrap-trsp"> <i class="arrow-border"></i> <em class="arrow-cnt"></em> </span> </span> </li>
    </ul>
    <ul class="level-2 f-dn">
      <li class="level-2-item" id="auto-id-1449466894342"><span>请选择相关分类...</span></li>
    </ul>
    <ul class="level-2">
      <li class="level-2-item" id="auto-id-1449466894343"> <a href="http://study.163.com/find.htm#/courselist?ct=3">全部</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item selected" id="catId-7"> <a href="/study-2/Public/Home/imgs/目录栏.html">编程语言</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-9"> <a href="http://study.163.com/find.htm#/courselist?ct=9">移动开发</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-3001"> <a href="http://study.163.com/find.htm#/courselist?ct=3001">产品设计</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-8"> <a href="http://study.163.com/find.htm#/courselist?ct=8">Web开发</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-13"> <a href="http://study.163.com/find.htm#/courselist?ct=13">操作系统</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-14"> <a href="http://study.163.com/find.htm#/courselist?ct=14">数据库</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-4001"> <a href="http://study.163.com/find.htm#/courselist?ct=4001">产品运营</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-10"> <a href="http://study.163.com/find.htm#/courselist?ct=10">硬件开发</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-15"> <a href="http://study.163.com/find.htm#/courselist?ct=15">网络技术</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-16"> <a href="http://study.163.com/find.htm#/courselist?ct=16">软件测试</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-5001"> <a href="http://study.163.com/find.htm#/courselist?ct=5001">其它</a> </li>
    </ul>
    <ul class="level-2 f-dn">
      <li class="level-2-item" id="auto-id-1449466894344"> <a href="http://study.163.com/find.htm#/courselist?ct=18">全部</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-19"> <a href="http://study.163.com/find.htm#/courselist?ct=19">办公技能</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-30"> <a href="http://study.163.com/find.htm#/courselist?ct=30">求职应聘</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-31"> <a href="http://study.163.com/find.htm#/courselist?ct=31">商务礼仪</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-32"> <a href="http://study.163.com/find.htm#/courselist?ct=32">谈判沟通</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-33"> <a href="http://study.163.com/find.htm#/courselist?ct=33">职业规划</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-34"> <a href="http://study.163.com/find.htm#/courselist?ct=34">管理能力</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-35"> <a href="http://study.163.com/find.htm#/courselist?ct=35">职业考试</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-37"> <a href="http://study.163.com/find.htm#/courselist?ct=37">营销推广</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-38"> <a href="http://study.163.com/find.htm#/courselist?ct=38">人力资源</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-39"> <a href="http://study.163.com/find.htm#/courselist?ct=39">财税投资</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-40"> <a href="http://study.163.com/find.htm#/courselist?ct=40">其它</a> </li>
    </ul>
    <ul class="level-2 f-dn">
      <li class="level-2-item" id="auto-id-1449466894345"> <a href="http://study.163.com/find.htm#/courselist?ct=28">全部</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-41"> <a href="http://study.163.com/find.htm#/courselist?ct=41">日常实用英语</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-47"> <a href="http://study.163.com/find.htm#/courselist?ct=47">出国考试英语</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-48"> <a href="http://study.163.com/find.htm#/courselist?ct=48">国内应试英语</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-49"> <a href="http://study.163.com/find.htm#/courselist?ct=49">日语</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-50"> <a href="http://study.163.com/find.htm#/courselist?ct=50">韩语</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-51"> <a href="http://study.163.com/find.htm#/courselist?ct=51">其它</a> </li>
    </ul>
    <ul class="level-2 f-dn">
      <li class="level-2-item" id="auto-id-1449466894346"> <a href="http://study.163.com/find.htm#/courselist?ct=10001">全部</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-11001"> <a href="http://study.163.com/find.htm#/courselist?ct=11001">体育健身</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-13002"> <a href="http://study.163.com/find.htm#/courselist?ct=13002">摄影摄像</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-10002"> <a href="http://study.163.com/find.htm#/courselist?ct=10002">声乐器乐</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-14001"> <a href="http://study.163.com/find.htm#/courselist?ct=14001">美食烹饪</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-12001"> <a href="http://study.163.com/find.htm#/courselist?ct=12001">舞蹈瑜伽</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-12002"> <a href="http://study.163.com/find.htm#/courselist?ct=12002">时尚美妆</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-13004"> <a href="http://study.163.com/find.htm#/courselist?ct=13004">健康养生</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-10003"> <a href="http://study.163.com/find.htm#/courselist?ct=10003">DIY手工</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-10004"> <a href="http://study.163.com/find.htm#/courselist?ct=10004">书法绘画</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-13003"> <a href="http://study.163.com/find.htm#/courselist?ct=13003">生活心理</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-13005"> <a href="http://study.163.com/find.htm#/courselist?ct=13005">其它</a> </li>
    </ul>
    <ul class="level-2 f-dn">
      <li class="level-2-item" id="auto-id-1449466894347"> <a href="http://study.163.com/find.htm#/courselist?ct=29">全部</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-11003"> <a href="http://study.163.com/find.htm#/courselist?ct=11003">家居装饰</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-11002"> <a href="http://study.163.com/find.htm#/courselist?ct=11002">生活百科</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-54"> <a href="http://study.163.com/find.htm#/courselist?ct=54">亲子育儿</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-61"> <a href="http://study.163.com/find.htm#/courselist?ct=61">中小学</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-55"> <a href="http://study.163.com/find.htm#/courselist?ct=55">文学艺术</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-56"> <a href="http://study.163.com/find.htm#/courselist?ct=56">工程技术</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-57"> <a href="http://study.163.com/find.htm#/courselist?ct=57">基础科学</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-58"> <a href="http://study.163.com/find.htm#/courselist?ct=58">哲学历史</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-59"> <a href="http://study.163.com/find.htm#/courselist?ct=59">经管法学</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-60"> <a href="http://study.163.com/find.htm#/courselist?ct=60">农林医药</a> </li>
      <li class="level-2-slash">/</li>
      <li class="level-2-item" id="catId-62"> <a href="http://study.163.com/find.htm#/courselist?ct=62">其它</a> </li>
    </ul>
  </div>
  <div class="b-20"></div>

  <div class="g-mn2">
    <div class="g-mn2c">
      <div id="j-breadTit" class="u-topTit" style="padding-top: 0px;"></div>
      <div class="m-slide f-pr" id="j-slideBox"> <a class="slide j-slide" target="_blank" id="auto-id-1449466894351" href="http://study.163.com/series/49001.htm" data-index="2"><img id="auto-id-1449466894546" src="/study-2/Public/Home/imgs/6630608169839812534.jpg" style="opacity: 1; transition-property: opacity; transition-duration: 1s; transition-timing-function: ease-in-out;"></a>
        <!-- <div class="u-slidepg">
          <ul class="f-cb f-ib j-pager">
            <li id="auto-id-1449466894395" class="">1</li>
            <li id="auto-id-1449466894397" class="js-selected">2</li>
          </ul>
        </div -->
      </div>
      <div class="m-coursebox">
        <div id="j-topBar" class="top f-cb auto-1449466894243-parent auto-1449466894224-parent">
          <div class="m-cSelUI f-cb auto-1449466894243 f-fl"><a class="f-fl f-fc3 j-type selected" id="auto-id-1449466894369">全部</a><a class="f-fl f-fc3 j-type" id="auto-id-1449466894370">随到随学</a><a class="f-fl f-fc3 j-type" id="auto-id-1449466894371">正在开课</a><a class="f-fl f-fc3 j-type" id="auto-id-1449466894372">即将开始</a><a class="f-fl f-fc3 j-type" id="auto-id-1449466894373">已结束</a></div>
          <div class="f-cb auto-1449466894224 f-fr"><a class="j-sort sort f-fl f-fc3 selected" id="auto-id-1449466894375">热门</a>
            <div class="f-fl sep">-</div>
            <a class="j-sort sort f-fl f-fc3" id="auto-id-1449466894376">最新</a>
            <div class="j-sort sort f-fl f-cb">
              <div class="f-fl sep">-</div>
              <div class="u-select f-fl" id="auto-id-1449466894383">
                <div class="up j-up f-thide">价格</div>
                <div class="down f-bg j-list" style="display: none;">
                  <div class="f-thide list" title="价格由高到低" id="auto-id-1449466894379">价格由高到低</div>
                  <div class="f-thide list" title="价格由低到高" id="auto-id-1449466894381">价格由低到高</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="j-courseNode" class="lists auto-1449466894196-parent">
          <div class="m-basepool f-cb auto-1449466894196">
            <div class="m-data-lists f-cb f-pr j-data-list">
              <div class="u-cover u-find-cover first" id="auto-id-1449466894429">
                <div class="wrap f-cb"> <a href="/study-2/index.php/Course/course.html" target="_blank" class="j-href wrap" data-href="/course/introduction/1367011.htm" data-index="1" data-name="C/C++黑客编程项目实战课程  【择善教育】">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource.jpeg" alt="C/C++黑客编程项目实战课程  【择善教育】"> </div>
                    <div class="tit">
                      <h3 class="f-thide">C/C++黑客编程项目实战课程&nbsp;&nbsp;【择善教育】</h3>
                      <div class="continued sign ">老师参与</div>
                      <div class="continued sign foxconn2 f-dn foxconn"></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">择善教育</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">22312</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1367011" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894434">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1455026.htm" data-index="2" data-name="Java8编程开发入门">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(1).jpeg" alt="Java8编程开发入门"> </div>
                    <div class="tit">
                      <h3 class="f-thide">Java8编程开发入门</h3>
                      <div class="continued sign ">老师参与</div>
                      <div class="continued sign foxconn2 f-dn foxconn"></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">李兴华</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">6481</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1455026" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894439">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1437017.htm" data-index="3" data-name="c语言也能开发网站">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(2).jpeg" alt="c语言也能开发网站"> </div>
                    <div class="tit">
                      <h3 class="f-thide">c语言也能开发网站</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">如鹏网</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">7821</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1437017" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894444">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1000035.htm" data-index="4" data-name="用Python做些事">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(3).jpeg" alt="用Python做些事"> </div>
                    <div class="tit">
                      <h3 class="f-thide">用Python做些事</h3>
                      <div class="continued sign ">老师参与</div>
                      <div class="continued sign foxconn2 f-dn foxconn"></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">黑板客</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">1115</span> </div>
                      <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 18.00</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1000035" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894449">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1016007.htm" data-index="5" data-name="ECharts基础教程">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(4).jpeg" alt="ECharts基础教程"> </div>
                    <div class="tit">
                      <h3 class="f-thide">ECharts基础教程</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">Kener林峰</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">786</span> </div>
                      <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 99.00</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1016007" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894454">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/334013.htm" data-index="6" data-name="玩转 C语言 基础课堂">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(5).jpeg" alt="玩转 C语言 基础课堂"> </div>
                    <div class="tit">
                      <h3 class="f-thide">玩转&nbsp;C语言&nbsp;基础课堂</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">Fenby</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">80706</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="334013" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894459">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/468002.htm" data-index="7" data-name="数据结构和算法">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(6).jpeg" alt="数据结构和算法"> </div>
                    <div class="tit">
                      <h3 class="f-thide">数据结构和算法</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">鱼C工作室</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">48821</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="468002" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894464">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/712019.htm" data-index="8" data-name="吕鑫：C语言|C++|MFC|Linux（含数据结构）">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(7).jpeg" alt="吕鑫：C语言|C++|MFC|Linux（含数据结构）"> </div>
                    <div class="tit">
                      <h3 class="f-thide">吕鑫：C语言|C++|MFC|Linux（含数据结构）</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">鑫路历程</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">23285</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="712019" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894469">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1098065.htm" data-index="9" data-name="《C语言/C++学习指南》语法篇(入门到精通)">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(8).jpeg" alt="《C语言/C++学习指南》语法篇(入门到精通)"> </div>
                    <div class="tit">
                      <h3 class="f-thide">《C语言/C++学习指南》语法篇(入门到精通)</h3>
                      <div class="continued sign ">老师参与</div>
                      <div class="continued sign foxconn2 f-dn foxconn"></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">阿发你好</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">10514</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1098065" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894474">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/302001.htm" data-index="10" data-name="疯狂的Python：快速入门精讲">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(9).jpeg" alt="疯狂的Python：快速入门精讲"> </div>
                    <div class="tit">
                      <h3 class="f-thide">疯狂的Python：快速入门精讲</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">pythonercn</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">58190</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="302001" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894479">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/343001.htm" data-index="11" data-name="尚学堂_高淇java零基础最全300集视频教程">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(10).jpeg" alt="尚学堂_高淇java零基础最全300集视频教程"> </div>
                    <div class="tit">
                      <h3 class="f-thide">尚学堂_高淇java零基础最全300集视频教程</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">北京尚学堂</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">28684</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="343001" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894484">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/271005.htm" data-index="12" data-name="面向对象程序设计-C++">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(11).jpeg" alt="面向对象程序设计-C++"> </div>
                    <div class="tit">
                      <h3 class="f-thide">面向对象程序设计-C++</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">翁恺</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">56083</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="u-cst-10"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="271005" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894489">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1556005.htm" data-index="13" data-name="如何成为一个优秀的Java开发工程师">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(12).jpeg" alt="如何成为一个优秀的Java开发工程师"> </div>
                    <div class="tit">
                      <h3 class="f-thide">如何成为一个优秀的Java开发工程师</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">翁恺</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">2283</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="u-cst-10"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1556005" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894494">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/533006.htm" data-index="14" data-name="用Java学编程">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(13).jpeg" alt="用Java学编程"> </div>
                    <div class="tit">
                      <h3 class="f-thide">用Java学编程</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">翁恺</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">29950</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="533006" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="g-cell1 u-card" id="auto-id-1449466894499">
                <div class="j-href f-pr" data-href="http://www.icourse163.org/course/xjtu-46006" data-index="15" data-name="计算机程序设计（C++）">
                  <div class="card f-pr ">
                    <div class="u-img f-pr"> <span class="mocIc f-pa"></span> <img class="img" src="/study-2/Public/Home/imgs/saved_resource(14).jpeg" alt="计算机程序设计（C++）"> </div>
                    <div class="progress">
                      <div style="width:78%;"></div>
                    </div>
                    <div class="progTxt f-f0"> 课程进度：   进行到第14/18 周 </div>
                    <p class="f-f0 t1 f-thide">计算机程序设计（C++）</p>
                    <p class="t2 f-fs0 f-fc6 f-thide">西安交通大学</p>
                    <div class="termTime f-cb"> <span class="txt during"> 进行到第14/18 周 </span> </div>
                    <div class="cardFt f-cb"> </div>
                  </div>
                  <div class="j-mask mask" style="display:none"><a class="j-del delbtn f-db" data-for="46006"></a></div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894503">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/342010.htm" data-index="16" data-name="尚学堂_马士兵零基础java视频教程">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(15).jpeg" alt="尚学堂_马士兵零基础java视频教程"> </div>
                    <div class="tit">
                      <h3 class="f-thide">尚学堂_马士兵零基础java视频教程</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">北京尚学堂</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">27485</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="342010" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894508">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1003005.htm" data-index="17" data-name="HTML5第一季视频教程">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(16).jpeg" alt="HTML5第一季视频教程"> </div>
                    <div class="tit">
                      <h3 class="f-thide">HTML5第一季视频教程</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">李炎恢</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">11596</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1003005" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894513">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/1459046.htm" data-index="18" data-name="javascript入门教程">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(17).jpeg" alt="javascript入门教程"> </div>
                    <div class="tit">
                      <h3 class="f-thide">javascript入门教程</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">后盾教育</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">2366</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="1459046" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="g-cell1 u-card" id="auto-id-1449466894518">
                <div class="j-href f-pr" data-href="http://www.icourse163.org/course/bit-46004" data-index="19" data-name="C语言程序设计（下）">
                  <div class="card f-pr ">
                    <div class="u-img f-pr"> <span class="mocIc f-pa"></span> <img class="img" src="/study-2/Public/Home/imgs/saved_resource(18).jpeg" alt="C语言程序设计（下）"> </div>
                    <div class="progress">
                      <div style="width:43%;"></div>
                    </div>
                    <div class="progTxt f-f0"> 课程进度：   进行到第6/14 周 </div>
                    <p class="f-f0 t1 f-thide">C语言程序设计（下）</p>
                    <p class="t2 f-fs0 f-fc6 f-thide">北京理工大学</p>
                    <div class="termTime f-cb"> <span class="txt during"> 进行到第6/14 周 </span> </div>
                    <div class="cardFt f-cb"> </div>
                  </div>
                  <div class="j-mask mask" style="display:none"><a class="j-del delbtn f-db" data-for="46004"></a></div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894522">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/378003.htm" data-index="20" data-name="零基础入门学习Python">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(19).jpeg" alt="零基础入门学习Python"> </div>
                    <div class="tit">
                      <h3 class="f-thide">零基础入门学习Python</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">鱼C工作室</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">23616</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="378003" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894527">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/334004.htm" data-index="21" data-name="玩转 Java 基础课堂">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/1369657236774064351.gif" alt="玩转 Java 基础课堂"> </div>
                    <div class="tit">
                      <h3 class="f-thide">玩转&nbsp;Java&nbsp;基础课堂</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">Fenby</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">22342</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="334004" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894532">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/252008.htm" data-index="22" data-name="李炎恢JavaScript教程 第一季">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(20).jpeg" alt="李炎恢JavaScript教程 第一季"> </div>
                    <div class="tit">
                      <h3 class="f-thide">李炎恢JavaScript教程&nbsp;第一季</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">北风网</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">19455</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="252008" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover" id="auto-id-1449466894537">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/195001.htm" data-index="23" data-name="JavaScript">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(21).jpeg" alt="JavaScript"> </div>
                    <div class="tit">
                      <h3 class="f-thide">JavaScript</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">翁恺</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">42732</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="u-cst-10"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="195001" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
              <div class="u-cover u-find-cover last" id="auto-id-1449466894542">
                <div class="wrap f-cb"> <a target="_blank" href="/study-2/index.php/Course/course.html" class="j-href wrap" data-href="/course/introduction/247003.htm" data-index="24" data-name="MySQL数据库">
                  <div class="img">
                    <div class="pic f-pr"> <img class="imgPic" src="/study-2/Public/Home/imgs/saved_resource(22).jpeg" alt="MySQL数据库"> </div>
                    <div class="tit">
                      <h3 class="f-thide">MySQL数据库</h3>
                      <div class="continued sign f-dn">老师参与</div>
                      <div class="continued sign foxconn2 f-dn "></div>
                    </div>
                    <div class="orgName f-fs0 f-thide">LAMP兄弟连</div>
                    <div class="thumb">
                      <div class="desc f-cb"> <span class="hot f-fs0">32712</span> </div>
                      <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                    </div>
                    <div class="f-dn"></div>
                  </div>
                  </a>
                  <div class="j-mask mask" data-id="247003" style="display:none">
                    <div class="j-del delbtn"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ui-pager f-pr j-data-pager auto-1449466894195-parent">
              <div class="auto-1449466894195"><a href="http://study.163.com/find.htm#" class="zbtn zprv js-disabled" id="auto-id-1449466894404">上一页</a><a href="http://study.163.com/find.htm#" class="zpgi zpg1 js-selected" id="auto-id-1449466894410">1</a><a href="http://study.163.com/find.htm#" class="zpgi zpg2" id="auto-id-1449466894412" style="">2</a><a href="http://study.163.com/find.htm#" class="zpgi zpg3" id="auto-id-1449466894414" style="">3</a><a href="http://study.163.com/find.htm#" class="zpgi zpg4" id="auto-id-1449466894416" style="">4</a><a href="http://study.163.com/find.htm#" class="zpgi zpg5" id="auto-id-1449466894418" style="">5</a><a href="http://study.163.com/find.htm#" class="zpgi zpg6" id="auto-id-1449466894420" style="">6</a><a href="http://study.163.com/find.htm#" class="zpgi zpg7" id="auto-id-1449466894422" style="">7</a><span class="zdot">...</span><a href="http://study.163.com/find.htm#" class="zpgi zpg8" id="auto-id-1449466894424" style="">21</a><a href="http://study.163.com/find.htm#" class="zbtn znxt" id="auto-id-1449466894406">下一页</a></div>
            </div>
          </div>
        </div>
        <div id="j-empty" class="u-emptybig" style="display: none;">
          <p class="emptytext">暂无课程</p>
        </div>
      </div>
    </div>
  </div>
  <div class="g-sd2">
    <div class="m-livebox">
      <div class="u-topTit">讲师直播<span class="livingicn f-ib"></span></div>
      <div id="j-liveBox" class="u-sideGray list"> <a class="c f-fc3 f-thide" data-index="1" data-name="2016考研西理工《材料科学基础》冲刺高分策略" href="http://study.163.com/course/introduction/1579002.htm" target="_blank" title="2016考研西理工《材料科学基础》冲刺高分策略"> [12月07日 18:00] 2016考研西理工《材料科学基础》冲刺高分策略 </a> <a class="c f-fc3 f-thide" data-index="2" data-name="背包游遍西班牙" href="http://study.163.com/course/introduction/1471002.htm" target="_blank" title="背包游遍西班牙"> [12月07日 19:00] 背包游遍西班牙 </a> <a class="u-more f-cb" data-index="更多" data-name="更多" href="http://study.163.com/find.htm#/courselist?ct=0"><span>更多</span><span class="icn"></span></a> </div>
    </div>
    <div class="b-20"></div>
    <div class="m-livebox">
      <div class="u-topTit">系列课程</div>
      <div class="u-sideGray list">
        <div id="j-alltpic">
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/86001.htm" data-index="1" data-name="美得不像话的Office系列">美得不像话的Office系列</a></li>
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/81001.htm" data-index="2" data-name="卖家打造爆款就靠这几招">卖家打造爆款就靠这几招</a></li>
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/61002.htm" data-index="3" data-name="手把手教你做优秀外企财务">手把手教你做优秀外企财务</a></li>
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/80001.htm" data-index="4" data-name="平面设计师必学4大技能">平面设计师必学4大技能</a></li>
        </div>
        <a class="u-more f-cb" data-index="更多" data-name="更多" href="http://study.163.com/series/all.htm"><span>更多</span><span class="icn"></span></a> </div>
    </div>
    <div class="b-20"></div>
    <div id="j-rankbox">
      <div class="u-topTit"> <a class="f-fc3 j-rankType selected" id="auto-id-1449466894340">付费排行</a><span style="margin:0 5px;color:#ddd;">|</span><a class="f-fc3 j-rankType" id="auto-id-1449466894341">免费排行</a> </div>
      <div class="u-sideGray j-ranklist" id="auto-id-1449466894352">
        <div class="u-rankItm f-cb">
          <div class="f-fl num num1">01</div>
          <a class="f-fl f-fc3 f-thide name" data-index="1" data-name="和秋叶一起学PPT" data-gatitle="付费排行" href="http://study.163.com/course/introduction/381006.htm" target="_blank" title="和秋叶一起学PPT">和秋叶一起学PPT</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num2">02</div>
          <a class="f-fl f-fc3 f-thide name" data-index="2" data-name="和秋叶一起学职场技能" data-gatitle="付费排行" href="http://study.163.com/course/introduction/967019.htm" target="_blank" title="和秋叶一起学职场技能">和秋叶一起学职场技能</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num3">03</div>
          <a class="f-fl f-fc3 f-thide name" data-index="3" data-name="英语口语革命" data-gatitle="付费排行" href="http://study.163.com/course/introduction/940019.htm" target="_blank" title="英语口语革命">英语口语革命</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num4">04</div>
          <a class="f-fl f-fc3 f-thide name" data-index="4" data-name="和阿文一起学信息图表" data-gatitle="付费排行" href="http://study.163.com/course/introduction/.htm#/courseDetail" target="_blank" title="和阿文一起学信息图表">和阿文一起学信息图表</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num5">05</div>
          <a class="f-fl f-fc3 f-thide name" data-index="5" data-name="手机摄影达人速成" data-gatitle="付费排行" href="http://study.163.com/course/introduction/1128006.htm" target="_blank" title="手机摄影达人速成">手机摄影达人速成</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num6">06</div>
          <a class="f-fl f-fc3 f-thide name" data-index="6" data-name="无痛英语第一季" data-gatitle="付费排行" href="http://study.163.com/course/introduction/995029.htm" target="_blank" title="无痛英语第一季">无痛英语第一季</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num7">07</div>
          <a class="f-fl f-fc3 f-thide name" data-index="7" data-name="和秋叶一起学Word" data-gatitle="付费排行" href="http://study.163.com/course/introduction/747046.htm#/courseDetail" target="_blank" title="和秋叶一起学Word">和秋叶一起学Word</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num8">08</div>
          <a class="f-fl f-fc3 f-thide name" data-index="8" data-name="表格之道(专业版)" data-gatitle="付费排行" href="http://study.163.com/course/introduction/720001.htm" target="_blank" title="表格之道(专业版)">表格之道(专业版)</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num9">09</div>
          <a class="f-fl f-fc3 f-thide name" data-index="9" data-name="向《经济学人》学图表" data-gatitle="付费排行" href="http://study.163.com/course/introduction/1337018.htm" target="_blank" title="向《经济学人》学图表">向《经济学人》学图表</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num10">10</div>
          <a class="f-fl f-fc3 f-thide name" data-index="10" data-name="Meta分析简明教程" data-gatitle="付费排行" href="http://study.163.com/course/introduction/1169005.htm" target="_blank" title="Meta分析简明教程">Meta分析简明教程</a> </div>
      </div>
    </div>
    <div class="b-20"></div>
    <div>
      <div class="u-topTit">推荐的讲师和机构</div>
      <div id="j-recLecOrgs" class="u-sideGray">
        <div class="u-lecorgItm f-cb"> <a href="http://study.163.com/u/tudashi" data-index="1" data-name="图大狮" target="_blank" class="f-fl"><img title="杭州思客企业管理有限公司" src="/study-2/Public/Home/imgs/6630585080094918482.jpg" alt="杭州思客企业管理有限公司" width="40" height="40"></a>
          <div class="cnt">
            <div class="top f-cb"> <a href="http://study.163.com/u/tudashi" data-index="1" data-name="图大狮" target="_blank" class="name f-fl f-thide" title="杭州思客企业管理有限公司">图大狮</a>
              <div class="f-fl u-orgVipIcon1" title="认证机构"></div>
            </div>
            <div class="fs">粉丝：189</div>
          </div>
        </div>
        <div class="u-lecorgItm f-cb"> <a href="http://study.163.com/u/pmptown" data-index="2" data-name="李先知" target="_blank" class="f-fl"><img title="PMP培训师 项目管理培训师 项目经理培训师" src="/study-2/Public/Home/imgs/6608233108213636588.jpg" alt="PMP培训师 项目管理培训师 项目经理培训师" width="40" height="40"></a>
          <div class="cnt">
            <div class="top f-cb"> <a href="http://study.163.com/u/pmptown" data-index="2" data-name="李先知" target="_blank" class="name f-fl f-thide" title="PMP培训师 项目管理培训师 项目经理培训师">李先知</a>
              <div class="f-fl u-lectorVipIcon1" title="认证讲师"></div>
            </div>
            <div class="fs">粉丝：2.4k</div>
          </div>
        </div>
        <div class="u-lecorgItm f-cb"> <a href="http://study.163.com/u/tangjingping" data-index="3" data-name="汤婧平" target="_blank" class="f-fl"><img title="注册会计师《总经理财务课堂》系列图书作者" src="/study-2/Public/Home/imgs/79B6B06ACAEC0DEC8C2F4136465351A8.jpg" alt="注册会计师《总经理财务课堂》系列图书作者" width="40" height="40"></a>
          <div class="cnt">
            <div class="top f-cb"> <a href="http://study.163.com/u/tangjingping" data-index="3" data-name="汤婧平" target="_blank" class="name f-fl f-thide" title="注册会计师《总经理财务课堂》系列图书作者">汤婧平</a>
              <div class="f-fl u-lectorVipIcon1" title="认证讲师"></div>
            </div>
            <div class="fs">粉丝：120</div>
          </div>
        </div>
        <div class="u-lecorgItm f-cb"> <a href="http://study.163.com/u/4865735749" data-index="4" data-name="刘万祥ExcelPro" target="_blank" class="f-fl"><img title="《Excel图表之道》、《用地图说话》作者" src="/study-2/Public/Home/imgs/6630867654583287624.jpg" alt="《Excel图表之道》、《用地图说话》作者" width="40" height="40"></a>
          <div class="cnt">
            <div class="top f-cb"> <a href="http://study.163.com/u/4865735749" data-index="4" data-name="刘万祥ExcelPro" target="_blank" class="name f-fl f-thide" title="《Excel图表之道》、《用地图说话》作者">刘万祥ExcelPro</a>
              <div class="f-fl u-lectorVipIcon1" title="认证讲师"></div>
            </div>
            <div class="fs">粉丝：291</div>
          </div>
        </div>
        <div class="u-lecorgItm f-cb"> <a href="http://study.163.com/u/chanpin100" data-index="5" data-name="产品100" target="_blank" class="f-fl"><img title="产品100" src="/study-2/Public/Home/imgs/6630346486070987248.jpg" alt="产品100" width="40" height="40"></a>
          <div class="cnt">
            <div class="top f-cb"> <a href="http://study.163.com/u/chanpin100" data-index="5" data-name="产品100" target="_blank" class="name f-fl f-thide" title="产品100">产品100</a>
              <div class="f-fl u-orgVipIcon1" title="认证机构"></div>
            </div>
            <div class="fs">粉丝：319</div>
          </div>
        </div>
      </div>
    </div>
    <div class="b-40"></div>
    <a id="j-rightAd" href="http://study.163.com/client/download.htm" target="_blank"><img src="/study-2/Public/Home/imgs/6630310202187485145.jpg"></a> </div>
</div>

<div class="g-ft">
  <div class="m-yktFoot" id="j-yktfoot">
    <div class="g-flow ftwrapper f-cb">
      <div class="f-fl ftlf">
        <div class="logo"></div>
        <p class="txt f-fs0"> 网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验，帮助您获得全新的个人发展和能力提升。</p>
        <div class="share f-cb">
          <p class="tit">关注我们：</p>
          <a href="http://weibo.com/study163" class="weibo" target="_blank" data-index="关注我们_微博"><img src="/study-2/Public/Home/imgs/1.png"></a> <a href="http://page.renren.com/601660242" class="renren" target="_blank" data-index="关注我们_人人"><img src="/study-2/Public/Home/imgs/2.png"></a> <a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信"><img src="/study-2/Public/Home/imgs/3.png">
          <div class="tipQrcode f-pa">
            <div class="qrImag"> <img src="/study-2/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友"> </div>
            <p class="qrTitle">易信号：study163</p>
            <div class="tip f-pa"></div>
          </div>
          </a> <a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信"><img src="/study-2/Public/Home/imgs/4.png">
          <div class="tipQrcode f-pa">
            <div class="qrImag"> <img src="/study-2/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友"> </div>
            <p class="qrTitle">微信号：study163</p>
            <div class="tip f-pa"></div>
          </div>
          </a> </div>
        <div class="copy">©<span>1997-2015</span> 网易公司 版权所有</div>
      </div>
      <div class="ftrt f-fr"> <a href="http://study.163.com/about/aboutus.htm#/about?aboutType=1" target="_blank" data-index="关于我们">关于我们</a> <a href="http://study.163.com/about/aboutus.htm#/about?aboutType=2" target="_blank" data-index="联系我们">联系我们</a> <a href="http://study.163.com/about/aboutus.htm#/about?aboutType=4" target="_blank" data-index="帮助中心">帮助中心</a> <a href="http://study.163.com/about/aboutus.htm#/about?aboutType=7" target="_blank" data-index="内容招募">内容招募</a> <a href="http://study.163.com/about/aboutus.htm#/about?aboutType=8" target="_blank" data-index="意见反馈">意见反馈</a> <a href="http://www.icourse163.org/" target="_blank" data-index="中国大学MOOC">中国大学MOOC</a>
        <div class="f-cb mobile f-fr">
          <div class="tit f-fl">移动App:</div>
          <a target="_blank" class="mlogo1" href="https://itunes.apple.com/cn/app/wang-yi-yun-ke-tang-for-iphone/id880452926?mt=8"></a><a target="_blank" class="mlogo2" href="http://study.163.com/pub/study-android-official.apk"></a> </div>
      </div>
    </div>
  </div>
</div>
<script src="/study-2/Public/Home/css/reuglar.0.3.1.js"></script>
<div class="f-dn">玩转 C语言 基础课堂,Fenby,IT与互联网 编程语言,玩转 C语言 基础课堂，用最基础易懂的形象比喻方式来学习和理解C语言的基础知识点，去掉冗繁的基础概念知识，最大化的在线练习编写代码中找到知识重点，以练为主，以学为辅，两者在快乐和最快时间里都可兼得，省去学习C语言看书和找习题的麻烦。  适用人群：喜欢编程，担心编程很难的零基础人群，想快速学好C语言基础，想用新鲜学习方式和不喜欢看书的C语言初学者。</div>
<script>             window.course = {             	 id:"334013",             	 name:"玩转 C语言 基础课堂",             	 discountPrice:""             };                                         window.needPkg = "false";                                       /* 秒杀 */                      </script> <script>if (!this.I$){this.I$=function(){var a={},b=[],c=function(){return!1},d={},e=function(b,c){return a.toString.call(b)==="[object "+c+"]"};return function(f,g){var h=d[f],i=e(g,"Function");if(null==g||i||(h=g),i){for(var j=[],k=2,l=arguments.length;l>k;k++)j.push(I$(arguments[k]));var m={};j.push.call(j,m,a,c,b);var n=g.apply(null,j)||m;if(h&&e(n,"Object"))if(Object.keys)for(var p,o=Object.keys(n),k=0,l=o.length;l>k;k++)p=o[k],h[p]=n[p];else for(var p in n)h[p]=n[p];else h=n}return h||(h={}),d[f]=h,h}}();}</script><script src="/study-2/Public/Home/css/core.js" type="text/javascript"></script><script type="text/javascript">I$(1009,function(){var e=window,i=(NEJ.P("nej.e"),NEJ.P("nej.v"),NEJ.P("nej.ut")),t=NEJ.P("edu.u");if(t.Yd()){e.dispatcher=i.ra.zs();e.dispatcher.ma("config",location.config);e.dispatcher.ga(t.umi("commonutil"),"commonutil.html");e.dispatcher.ga(t.umi("courseDetail"),"course/courseDetail.html");e.dispatcher.ga(t.umi("courseComment"),"course/courseComment.html");e.dispatcher.Ba();e.dispatcher.Ia(t.umi("courseDetail"),!0)}},82,4,110,32);</script>
<div class="m-side-operation auto-1449466944905" id="j-side-operation">
  <div class="side-service-item"> <a class="item-link-block" data-name="留言" href="http://study.163.com/about/aboutus.htm#/about?aboutType=8" target="_blank"> <i class="side-service-icon feedback-icon"></i> <span class="item-hover-text feedback-text">反馈意见</span> </a> </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item "> <a class="item-link-block app-download" data-name="手机课堂" href="javascript:void(0)"> <i class="side-service-icon phone-icon"></i> <span class="item-hover-text">手机课堂</span>
    <div class="qrcode-bubble">
      <div class="qrcode">
        <div class="download"><img src="/study-2/Public/Home/imgs/sideBar90.png">
          <p>下载App</p>
        </div>
        <div class="follow-weixin"><img src="/study-2/Public/Home/imgs/weixin.png">
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
</html>