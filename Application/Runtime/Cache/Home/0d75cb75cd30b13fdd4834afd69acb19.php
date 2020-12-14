<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($configs["title"]); ?></title>
<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" src="/Public/Home/js/center/jquery.js"></script>
<link href="/Public/Home/css/center/center_core.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/center/center_user.css" type="text/css" rel="stylesheet">
</head>
<body class="auto-1449497480730-parent" style="padding-top: 60px;">


<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#000;">
    <div class="g-flow" >
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/index.php/Index" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="u-navcatedialog f-pa" id="j-nav-catedialog">
          <div class="arrr f-pa"></div>
          <a class="close f-pa j-close" id="auto-id-1449497480743"></a>
        </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
            <div class="login f-cb">

			<div id="login">
				<div>
					<a href="<?php echo ($_SESSION["id"]); ?>">
						消息
					</a>
					<a href="/index.php/Detail/personalCenter/id/<?php echo ($_SESSION["id"]); ?>">
						活动包
					</a>
					<div>
						<img src="/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
						<div>
							<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?></a><br/></div>
							<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>">个人主页</a><br/></div>
							<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a><br/></div>
							<div><a href="/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
							<div><a href="/index.php/Index/logout">退出</a></div>
						</div>
					</div>
				</div>
			</div>  
		  </div>
        </div>
          <div class="nav-search u-navsearchUI j-searchP">
            <div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'">
              <div class="submit j-submit f-hide f-fl" id="auto-id-1449497480756">搜索课程、计划或用户</div>
              <input type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449497480762">
            </div>
            <div class="j-suggest u-navsearchsug"></div>
          </div>
        </div>
		
        <div class="m-nav f-cb j-navFind"> 
		<a data-index="首页" class="nitem" href="/index.php" hidefocus="true">首页</a>
          <div class="f-pr f-cb nitem x-hoverItem"> 
		  <span>课程体系</span>
            <div class="f-pa u-navdropmenu x-child"> 
				<span class="arrr f-pa"></span> 
				<a data-index="大学计算机专业" class="dropitem f-f0" href="/index.php/major/major_inter" hidefocus="true"> 
				<span>大学计算机专业</span> </a> 
				<a data-index="互联网职业技能" class="dropitem f-f0" href="/index.php/major/major_skill" hidefocus="true"> 
				<span>互联网职业技能</span></a>
				<a data-index="金融专业" class="dropitem f-f0 last" href="/index.php/major/major_money" hidefocus="true">
				<span>金融专业</span> </a>
			</div>
          </div>
          <a data-index="软件需求" class="nitem" href="/index.php/major/major_small" hidefocus="true">软件需求</a>
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
<div class="settings f-cb g-flow st">
  <div class="">
    <div class="b-20"></div>
    <div id="settings-box" class="f-bg">
      <div class="m-setBox">
        <div class="boxTab j-tabBox f-cb"> <a class="j-tabItem current" id="auto-id-1449497480778">资料设置</a> </div>
		<form method="post"action="/index.php/Detail/mol" enctype="multipart/form-data">
        <div id="j-setBox" class="setBox">
          <div class="m-infoEdit">
            <div class="f-cb header">
              <div class="f-fl fk">完善个人资料是让别人认识你的第一步</div>
              <div class="j-auth f-fr f-hide authIcon" style="display:block;">讲师认证</div>
            </div>
            <div class="j-personEditbox editBox">
              <table>
                <tbody>
                  <tr class="j-nickNameEditArea">
                    <td class="title"><em class="f-sign" style="float:left;margin-left:4px;margin-top:-1px;">必*填</em>昵称</td>
                    <td><div class="j-nickName eBcon auto-1449497480701-parent">
                        <div class="m-nicknameui u-insug f-cb auto-1449497480701">
                          <div class="area j-inputArea f-fl" style="width: 175px; height: 25px;">
                            <input type="text" name="username" "class="j-input" id="auto-id-1449497480845" value="<?php echo ($data["username"]); ?>" style="width: 175px; height: 25px;"><span id="sp1" style="width:120px;float:left;margin-left:200px;margin-top:-20px;color:red;"></span>
                          </div>
                          <div class="infobox j-infobox auto-1449497480626-parent">
                            <div class="m-feedbackinfo auto-1449497480626" style="display: none;">
                              <div class="warningbox j-warningbox f-cb"><span class="right j-warningicon"></span><span class="warning j-warning"></span></div>
                              <div class="loadingbox j-loadingbox f-cb"><span class="icon"></span><span class="loading j-loading"></span></div>
                            </div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="title">修改头像</td>
                    <td>
						<div class="j-pic eBcon auto-1449497480797-parent">
							<div class="f-cb auto-1449497480797">
								<div style="float:left;margin-top:4px;">
									<input type="file"name="pic" />
								</div>
							</div>
						</div>
					</td>
                  </tr>
                  <tr>
                    <td class="title">性别</td>
                    <td><div class="sex eBcon">
                        <input id="male" value="1"type="radio" name="sex" class="j-sex">
                        <label for="male">男</label>
                        <input id="female" value="0"type="radio" name="sex" class="j-sex">
                        <label for="female">女</label>
                        <input id="privacy" value="2"type="radio" name="sex" class="j-sex">
                        <label for="privacy">保密</label>
                      </div></td>
                  </tr>
                  <!-- <tr> <td class="title">签名</td> <td> <div class="j-signature eBcon"></div> </td> </tr>-->
                  <tr>
                    <td class="title">个人介绍</td>
                    <td><div class="j-description eBcon auto-1449497480703-parent">
                        <div class="m-inputcheckui f-cb auto-1449497480703">
                          <div class="inputbox">
                            <div class="input j-input auto-1449497480618-parent">
                              <div class="m-baseinputui auto-1449497480618" style="width: 395px; height: 74px;">
                                <textarea name="description" class="j-textarea inputtxt" id="auto-id-1449497480889" style="width: 395px; height: 74px;"><?php echo ($data["description"]); ?>
								</textarea>
  
                              </div>
                            </div>
                            <div class="tips j-tipsNode">用一段话介绍你自己，会在你的个人页面显示，最多输入80字</div>
                          </div>
                          <div class="infobox j-infobox auto-1449497480626-parent">
                            <div class="m-feedbackinfo auto-1449497480626" style="display: none;">
                              <div class="warningbox j-warningbox f-cb"><span class="right j-warningicon"></span><span class="warning j-warning"></span></div>
                              <div class="loadingbox j-loadingbox f-cb"><span class="icon"></span><span class="loading j-loading"></span></div>
                            </div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="title">真实姓名</td>
                    <td><div class="f-fl rnIpt f-cb">
                        <div class="j-rnIpt auto-1449497480618-parent">
                          <div class="m-baseinputui auto-1449497480618" style="width: 285px; height: 23px;">
                            <input type="text" name="realname" value="<?php echo ($data["realname"]); ?>" style="height:25px;"/>
                            <label class="j-hint inputhint" for="inputtxt" id="auto-id-1449497480808"></label>
                          </div>
                        </div>
                        <div class="tip f-fs0 s-fc6">用于高等教育课程证书登记与发放，不会以任何形式向第三方透露</div>
                      </div>
                      <div class="f-fl feed j-rnFb"></div></td>
                  </tr>
                  <tr>
                    <td class="title">手机号码</td>
                    <td><div class="f-fl phoneIpt f-cb">
                        <div class="j-phoneIpt auto-1449497480618-parent">
                          <div class="m-baseinputui auto-1449497480618" style="width: 285px; height: 23px;">
                            <input type="text" name="phone" value="<?php echo ($data["phone"]); ?>" style="height:25px;"/>
                            <label class="j-hint inputhint" for="inputtxt" id="auto-id-1449497480854"></label>
                          </div>
                        </div>
                        <div class="tip f-fs0 s-fc6">用于优质课程的学习提醒等服务</div>
                      </div>
                      <div class="f-fl feed j-rnFb"></div></td>
                  </tr>
                  <tr>
                    <td class="title">QQ号码</td>
                    <td><div class="f-fl qqIpt f-cb">
                        <div class="j-qqIpt auto-1449497480618-parent">
                          <div class="m-baseinputui auto-1449497480618" style="width: 285px; height: 23px;">
                            <input type="text" name="qq" value="<?php echo ($data["qq"]); ?>" style="height:25px;"/>
                            <label class="j-hint inputhint" for="inputtxt" id="auto-id-1449497480864"></label>
                          </div>
                        </div>
                        <div class="tip f-fs0 s-fc6">用于课程的高效交流、方便机构及老师答疑解惑</div>
                      </div>
                      <div class="f-fl feed j-rnFb"></div></td>
                  </tr>
                  <tr>
                    <td class="title">身份证号码</td>
                    <td><div class="f-cb">
                        <div class="f-fl sfzIpt">
                          <div class="j-idNumIpt auto-1449497480618-parent">
                            <div class="m-baseinputui auto-1449497480618" style="width: 285px; height: 23px;">
                              <input type="text" name="cardid" value="<?php echo ($data["cardid"]); ?>" style="height:25px;"/>
                              <label class="j-hint inputhint" for="inputtxt" id="auto-id-1449497480830"></label>
                            </div>
                          </div>
                        </div>
                        <div class="f-fl feed j-idNumFb sfzFeed auto-1449497480626-parent">
                          <div class="m-feedbackinfo auto-1449497480626" style="display: none;">
                            <div class="warningbox j-warningbox f-cb"><span class="right j-warningicon"></span><span class="warning j-warning"></span></div>
                            <div class="loadingbox j-loadingbox f-cb"><span class="icon"></span><span class="loading j-loading"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="tip f-fs0 s-fc6">用于高等教育课程证书登记与发放，不会以任何形式向第三方透露</div></td>
                  </tr>
				  <tr class="zoom1">
                    <td class="title">教育经历</td>
                    <td><div class="j-education eBcon education">
                        <div class="u-sugInput">
                          <div class="f-cb" style="margin-top:5px;">
							<select name = "edu">
								<option value = "小学">小学</option>
								<option value = "初学">初学</option>
								<option value = "高中学" selected = "selected">高中</option>
								<option value = "大学">大学</option>
								<option value = "其他">其他</option>
							</select>
						  </div>
                          <div class="tags j-tags">
                            <div class="w-tags"></div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
				  <tr class="zoom3">
                    <td class="title">擅长技能</td>
                    <td><div class="j-skills eBcon skills">
                        <div class="u-sugInput">
                          <div class="iptArea f-cb">
                            <div class="ipt">
                              <div class="u-insug">
                                <div class="area">
								  <input type="hidden" name="id" value="<?php echo ($_SESSION["id"]); ?>"/>
                                  <input type="text" name="special" value="<?php echo ($data["special"]); ?>" style="height:25px;"/>
                                </div>
                              </div>
                            </div>
							</div>
                          <p>例如：iOS开发、广告传媒、信息技术</p>
                          <div class="tags">
                            <div class="w-tags"></div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="j-orgEditbox editBox f-dn">
              <table>
                <tbody>
                  <tr>
                    <td class="title"><em class="f-sign">*</em>常用邮箱</td>
                    <td><div class="j-orgMail eBcon"></div></td>
                  </tr>
                  <tr>
                    <td class="title"><em class="f-sign">*</em>机构头像</td>
                    <td><div class="j-orgPic eBcon"></div></td>
                  </tr>
                  <tr>
                    <td class="title"><em class="f-sign">*</em>机构介绍</td>
                    <td><div class="j-orgDescription eBcon"></div></td>
                  </tr>
                  <tr>
                    <td class="title">真实姓名</td>
                    <td><div class="f-fl rnIpt f-cb">
                        <div class="j-rnIpt"></div>
                        <div class="tip f-fs0 s-fc6">用于高等教育课程证书登记与发放，不会以任何形式向第三方透露</div>
                      </div>
                      <div class="f-fl feed j-rnFb"></div></td>
                  </tr>
                  <tr>
                    <td class="title">证件号码</td>
                    <td><div class="f-cb">
                        <div class="j-idTypeSel sfzSel f-fl"></div>
                        <div class="f-fl sfzIpt">
                          <div class="j-idNumIpt"></div>
                        </div>
                        <div class="f-fl feed j-idNumFb"></div>
                      </div>
                      <div class="tip f-fs0 s-fc6">用于高等教育课程证书登记与发放，不会以任何形式向第三方透露</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="footer"> 
				<input type="submit" value="保存"style="width:70px;height:40px;background:#10AD5A;color:#fff;"/>
			</div>
          </div>
        </div>
		</form>
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
          <a href="" class="weibo" target="_blank" data-index="关注我们_微博"><img src="/Public/Home/imgs/1.png"></a> <a href="" class="renren" target="_blank" data-index="关注我们_人人"><img src="/Public/Home/imgs/2.png"></a> <a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信"><img src="/Public/Home/imgs/3.png">
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
		<a href="" target="_blank" data-index="关于我们">关于我们</a> 
		<a href="" target="_blank" data-index="联系我们">联系我们</a> 
		<a href="" target="_blank" data-index="帮助中心">帮助中心</a> 
		<a href="" target="_blank" data-index="内容招募">内容招募</a> 
		<a href="" target="_blank" data-index="意见反馈">意见反馈</a> 
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
<script src="./imgs/reuglar.0.3.1.js"></script> 
<div class="m-side-operation auto-1449497480730" id="j-side-operation" style="display: none; opacity: 0;">
  <div class="side-service-item"> <a class="item-link-block" data-name="留言" href="" target="_blank"> <i class="side-service-icon feedback-icon"></i> <span class="item-hover-text feedback-text">反馈意见</span> </a> </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item "> <a class="item-link-block app-download" data-name="手机课堂" href="javascript:void(0)"> <i class="side-service-icon phone-icon"></i> <span class="item-hover-text">手机课堂</span>
    <div class="qrcode-bubble">
      <div class="qrcode">
        <div class="download"><img src="./imgs/sideBar90.png">
          <p>下载App</p>
        </div>
        <div class="follow-weixin"><img src="./imgs/weixin.png">
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
</div>
<div>
  <div id="loadingMask" class="loading-mask" style="z-index: 10001; display: none;"></div>
  <div id="loadingPb" class="ui-loading f-cb" style="z-index: 10002; display: none;"></div>
</div>
<script type="text/javascript" charset="utf-8">
	$("#login > div > div > img").hover(function(){
		$("#login > div > div > div").fadeIn(1000,function(){
			$("#login > div > div > div").css("display","block");
		});
	},function(){
		$("#login > div > div > div").hover(function(){
			var time=setInterval(function(){
				$("#login > div > div > div").css("display","none");
			},3000);
		},function(){
			$("#login > div > div > div").fadeOut(1000,function(){
				$("#login > div > div > div").css("display","none");
			});
		});
	});
</script>


</body>
<script type="text/javascript" charset="utf-8">
	var p;
	$("input[name = 'username']").blur(function()
	{
		var val = this.value;
		//alert(val);
		if(!val){
			$("#sp1").html("你好像忘了点什么");
			p = false;
		}else{
			p = true;
		}
	});

	$("form").submit(function(){
		$("input[name = 'username']").blur();
		if(p){
			return true;
		}
		return false;
	});
</script>
</html>