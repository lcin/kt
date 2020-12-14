<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台-云课堂后台管理系统</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/Admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

	
		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/Admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/Admin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/Admin/assets/js/html5shiv.js"></script>
		<script src="/Public/Admin/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							云课堂-后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/Public/Admin/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/Admin/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/Admin/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/Upload/<?php echo ($_SESSION['admin']['photo']); ?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($_SESSION['admin']['name']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="/admin.php/Login/loginOut">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
							
						<li>
							<a href="/admin.php" class="dropdown-toggle">
								<i class="icon-home"></i>
								<span class="menu-text"> 后台首页 </span>
							</a>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-lock"></i>
								<span class="menu-text"> 权限管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Admin/index.html">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Admin/add.html">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>
								</li>
								<li>
									<a href="/admin.php/Group/index.html">
										<i class="icon-double-angle-right"></i>
										管理组列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Group/add.html">
										<i class="icon-double-angle-right"></i>
										添加管理组
									</a>
								</li>
								<li>
									<a href="/admin.php/Auth/ruleIndex.html">
										<i class="icon-double-angle-right"></i>
										权限列表
									</a>
								</li>

								<li>
									<a href="/admin.php/Auth/addRule.html">
										<i class="icon-double-angle-right"></i>
										添加权限
									</a>
								</li>
								
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/User/index.html">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>

								<li>
									<a href="/admin.php/User/add.html">
										<i class="icon-double-angle-right"></i>
										添加用户
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 类型管理</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Type/index.html">
										<i class="icon-double-angle-right"></i>
										类型列表
									</a>
								</li>
										
								<li>
									<a href="/admin.php/Type/add_parent">
										<i class="icon-double-angle-right"></i>
										添加分区
									</a>
								</li>
										
								</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-music"></i>
								<span class="menu-text"> 课程管理</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Video/index.html">
										<i class="icon-double-angle-right"></i>
										课程列表
									</a>
								</li>
										
								<li>
									<a href="/admin.php/Type/add_video.html">
										<i class="icon-double-angle-right"></i>
										添加课程
									</a>
								</li>
								<li>
									<a href="/admin.php/Video/videojoin.html">
										<i class="icon-double-angle-right"></i>
										课程参与列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 合作机构管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Organ/index.html">
										<i class="icon-double-angle-right"></i>
										机构列表
									</a>
								</li>

								<li>
									<a href="/admin.php/Organ/add.html">
										<i class="icon-double-angle-right"></i>
										添加机构
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 讲师管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Teacher/index.html">
										<i class="icon-double-angle-right"></i>
										讲师列表
									</a>
								</li>

								<li>
									<a href="/admin.php/Teacher/add.html">
										<i class="icon-double-angle-right"></i>
										添加讲师
									</a>
								</li>
							</ul>
						</li>
							
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 目录管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Course/index.html">
										<i class="icon-double-angle-right"></i>
										目录列表
									</a>
								</li>

								<li>
									<a href="/admin.php/Course/add.html">
										<i class="icon-double-angle-right"></i>
										添加目录
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file"></i>
								<span class="menu-text"> 新闻管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/News/index.html">
										<i class="icon-double-angle-right"></i>
										新闻列表
									</a>
								</li>

								<li>
									<a href="/admin.php/News/add.html">
										<i class="icon-double-angle-right"></i>
										添加新闻
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-bullhorn"></i>
								<span class="menu-text"> 广告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Adv/index.html">
										<i class="icon-double-angle-right"></i>
										广告列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Adv/add.html">
										<i class="icon-double-angle-right"></i>
										添加广告
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-cogs"></i>
								<span class="menu-text"> 网站配置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Config/index.html">
										<i class="icon-double-angle-right"></i>
										配置信息
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-folder-open-alt"></i>
								<span class="menu-text"> 用户反馈 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Advice/index.html">
										<i class="icon-double-angle-right"></i>
										反馈列表
									</a>
								</li>
							</ul>
						</li>
	
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-download-alt"></i>
								<span class="menu-text"> 下载管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Download/index">
										<i class="icon-double-angle-right"></i>
										下载列表
									</a>
								</li>
							</ul>
						</li>
						
						
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-credit-card"></i>
								<span class="menu-text"> 公告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Info/index.html">
										<i class="icon-double-angle-right"></i>
										公告列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Info/add.html">
										<i class="icon-double-angle-right"></i>
										添加公告
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-credit-card"></i>
								<span class="menu-text"> 活动管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Activity/index.html">
										<i class="icon-double-angle-right"></i>
										活动列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Activity/join.html">
										<i class="icon-double-angle-right"></i>
										活动参与列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Activity/add.html">
										<i class="icon-double-angle-right"></i>
										添加活动
									</a>
								</li>
							</ul>
						</li>



			
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>
            <script src="/Public/admin/assets/js/jquery-2.0.3.min.js"></script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="/admin.php">后台主页</a>
                </li>

                <li>
                    <a href="#">课程管理</a>
                </li>
                <li class="active">修改课程</li>
            </ul><!-- .breadcrumb -->

        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    课程管理
                    <small>
                        <i class="icon-double-angle-right"></i>
                        修改课程
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <form action="/admin.php/Video/mod" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-9" style="width: 100%">
                            <div class="tabbable">
                               
                                <div class="tab-content">
                                    <div id="home4" class="tab-pane in active">
										
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 课程标题 </label>
													
                                            <div class="col-sm-9">
												 <input type="hidden"  name="id" value="<?php echo ($_GET['id']); ?>"  value="修改" class="btn btn-info">
                                                <input type="text" name="title" value="<?php echo ($video["title"]); ?>" id="form-field-1" placeholder="输入视频标题" class="col-xs-10 col-sm-5" />
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 课程价格 </label>

                                            <div class="col-sm-9">
                                                <input type="text" name="price" value="<?php echo ($video["price"]); ?>" id="form-field-1" placeholder="输入视频价格" class="col-xs-10 col-sm-5" />
                                            </div>
                                        </div>
										
                                        
                                        <div class="space-4"></div>

                                         <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-11"> 课程图片 </label>

                                            <div class="col-sm-9">
                                                <input type="file" name="video">
                                            </div>
                                        </div>
                                      
                                        <div class="space-4"></div>
                                    </div>

                                    <div id="profile4" class="tab-pane">
                                        <div>
                                            <script id="ueditor" type="text/plain" name="detail" style="width:100%;height:500px;"></script>
                                            <script type="text/javascript">
                                                var ue = UE.getEditor('ueditor');
                                            </script>
                                        </div>
                                    </div>

                                    <div id="dropdown14" class="tab-pane">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <input type="submit"  name="sub"  value="修改" class="btn btn-info">
                               
                            </div>
                        </div>
                        <div class="hr hr-24"></div>             
                    </form>
                   <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/Public/admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>
        <script type="text/javascript">
			$("[name='tid']").change(function(){
				var val=this.value;
				if(val == 0){
					
				}else{
					var url="/admin.php/Video/search/id/"+val;
					$.get(url,function(d){
						//alert(d);
						html = "";
						var data = eval("("+d+")");
						for(var i=0; i<data.length;i++){
							html += "<option value="+data[i]['id']+">"+data[i]['name']+"</option>";
						}
						$("[name='tid1']").append(html);
					});
				}
			});
		
		
		
		
		
            $('#form-field-select-3').change(function() {
                var attrId = $('#form-field-select-3').children(':selected').val();
                var attrArr = <?php echo json_encode($attr_data);?>;
                $('#form-field-select-3-1').empty();
                for (var i = 0; i < attrArr.length; i++) {
                    if (attrArr[i]['attr_id'] == attrId) {
                        var values = attrArr[i]['attr_values'];
                        for (idx in values) {
                            $('#form-field-select-3-1').append('<option value=' + values["category_id"] +'>' + values[idx] + '</option>');
                        }
                    }
                }
            });

            $('.form-field-checkbox-3').change(function() {
                var attrId = $('.form-field-select-3').children(':selected').val();
                var attrArr = <?php echo json_encode($attr_data);?>;
                $('.form-checkbox-attr').empty();
                for (var i = 0; i < attrArr.length; i++) {
                    if (attrArr[i]['attr_id'] == attrId) {
                        var values = attrArr[i]['attr_values'];
                        var attrName = attrArr[i]['attr_name']
                        for (idx in values) {
                            $('.form-checkbox-attr').append('<label><input name="attrValue[]" value=' + attrName[idx] + 'class="ace ace-checkbox-2" type="checkbox"><span class="lbl">' + values[idx] + '</span>&nbsp;&nbsp;</label>');
                        }
                        
                    }
                }
             });
            
            $('#form-field-select-2').change(function() {
                var mainCateId = $('#form-field-select-2').children(':selected').val();
                $("#form-field-select-2-1").children(':not(:first-child)').remove();
                $("#form-field-select-2-2").children(':not(:first-child)').remove();
                $.ajax({
                    url: "/admin.php/Video/getChildCate/",
                    data: {"cateId": mainCateId},
                    type: "get",
                    success: function(data) {
                        //alert(data);
                        data = eval(data);
                        for (var i = 0; i < data.length; i++) {
                            $("#form-field-select-2-1").append("<option value=" + data[i]['category_id'] + ">" + data[i]['name'] + "</option>");
                        }
                    }
                })
            });

            $('#form-field-select-2-1').change(function() {
                var mainCateId = $('#form-field-select-2-1').children(':selected').val();
                $("#form-field-select-2-2").children(':not(:first-child)').remove();
                $.ajax({
                    url: "/admin.php/Video/getChildCate/",
                    data: {"cateId": mainCateId},
                    type: "get",
                    success: function(data) {
                        //alert(data);
                        data = eval(data);
                        for (var i = 0; i < data.length; i++) {
                            $("#form-field-select-2-2").append("<option value=" + data[i]['category_id'] + ">" + data[i]['name'] + "</option>");
                        }
                    }
                })
            });

            function addAttr() {
                var attrNum = $("#input-attr-num").val();
                $("#addAttr").children(":not(.clone-add-attr)").remove();
                for (var i = 1; i < attrNum; i++) {
                   $('.clone-add-attr').clone().removeClass('clone-add-attr').appendTo('#addAttr');
                }
                
            }

            jQuery(function($) {
                $('#id-disable-check').on('click', function() {
                    var inp = $('#form-input-readonly').get(0);
                    if(inp.hasAttribute('disabled')) {
                        inp.setAttribute('readonly' , 'true');
                        inp.removeAttribute('disabled');
                        inp.value="This text field is readonly!";
                    }
                    else {
                        inp.setAttribute('disabled' , 'disabled');
                        inp.removeAttribute('readonly');
                        inp.value="This text field is disabled!";
                    }
                });
            
            
                $(".chosen-select").chosen(); 
                $('#chosen-multiple-style').on('click', function(e){
                    var target = $(e.target).find('input[type=radio]');
                    var which = parseInt(target.val());
                    if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                     else $('#form-field-select-4').removeClass('tag-input-style');
                });
            
            
                $('[data-rel=tooltip]').tooltip({container:'body'});
                $('[data-rel=popover]').popover({container:'body'});
                
                $('textarea[class*=autosize]').autosize({append: "n"});
                $('textarea.limited').inputlimiter({
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
                });
            
                $.mask.definitions['~']='[+-]';
                $('.input-mask-date').mask('99/99/9999');
                $('.input-mask-phone').mask('(999) 999-9999');
                $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
            
            
            
                $( "#input-size-slider" ).css('width','200px').slider({
                    value:1,
                    range: "min",
                    min: 1,
                    max: 8,
                    step: 1,
                    slide: function( event, ui ) {
                        var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                        var val = parseInt(ui.value);
                        $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
                    }
                });
            
                $( "#input-span-slider" ).slider({
                    value:1,
                    range: "min",
                    min: 1,
                    max: 12,
                    step: 1,
                    slide: function( event, ui ) {
                        var val = parseInt(ui.value);
                        $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
                    }
                });
                
                
                $( "#slider-range" ).css('height','200px').slider({
                    orientation: "vertical",
                    range: true,
                    min: 0,
                    max: 100,
                    values: [ 17, 67 ],
                    slide: function( event, ui ) {
                        var val = ui.values[$(ui.handle).index()-1]+"";
            
                        if(! ui.handle.firstChild ) {
                            $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                        }
                        $(ui.handle.firstChild).show().children().eq(1).text(val);
                    }
                }).find('a').on('blur', function(){
                    $(this.firstChild).hide();
                });
                
                $( "#slider-range-max" ).slider({
                    range: "max",
                    min: 1,
                    max: 10,
                    value: 2
                });
                
                $( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
                    // read initial values from markup and remove that
                    var value = parseInt( $( this ).text(), 10 );
                    $( this ).empty().slider({
                        value: value,
                        range: "min",
                        animate: true
                        
                    });
                });
            
                
                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file:'No File ...',
                    btn_choose:'Choose',
                    btn_change:'Change',
                    droppable:false,
                    onchange:null,
                    thumbnail:false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
                });
                
                $('#id-input-file-3').ace_file_input({
                    style:'well',
                    btn_choose:'Drop files here or click to choose',
                    btn_change:null,
                    no_icon:'icon-cloud-upload',
                    droppable:true,
                    thumbnail:'small'//large | fit
                    //,icon_remove:null//set null, to hide remove/reset button
                    /**,before_change:function(files, dropped) {
                        //Check an example below
                        //or examples/file-upload.html
                        return true;
                    }*/
                    /**,before_remove : function() {
                        return true;
                    }*/
                    ,
                    preview_error : function(filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }
            
                }).on('change', function(){
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });
                
            
                //dynamically change allowed formats by changing before_change callback function
                $('#id-file-format').removeAttr('checked').on('change', function() {
                    var before_change
                    var btn_choose
                    var no_icon
                    if(this.checked) {
                        btn_choose = "Drop images here or click to choose";
                        no_icon = "icon-picture";
                        before_change = function(files, dropped) {
                            var allowed_files = [];
                            for(var i = 0 ; i < files.length; i++) {
                                var file = files[i];
                                if(typeof file === "string") {
                                    //IE8 and browsers that don't support File Object
                                    if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
                                }
                                else {
                                    var type = $.trim(file.type);
                                    if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                            || ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                                        ) continue;//not an image so don't keep this file
                                }
                                
                                allowed_files.push(file);
                            }
                            if(allowed_files.length == 0) return false;
            
                            return allowed_files;
                        }
                    }
                    else {
                        btn_choose = "Drop files here or click to choose";
                        no_icon = "icon-cloud-upload";
                        before_change = function(files, dropped) {
                            return files;
                        }
                    }
                    var file_input = $('#id-input-file-3');
                    file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
                    file_input.ace_file_input('reset_input');
                });
            
            
            
            
                $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
                .on('change', function(){
                    //alert(this.value)
                });
                $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
                $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
            
            
                
                $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });
                $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
                    $(this).next().focus();
                });
                
                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    showSeconds: true,
                    showMeridian: false
                }).next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });
                
                $('#colorpicker1').colorpicker();
                $('#simple-colorpicker-1').ace_colorpicker();
            
                
                $(".knob").knob();
                
                
                //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
                var tag_input = $('#form-field-tags');
                if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
                {
                    tag_input.tag(
                      {
                        placeholder:tag_input.attr('placeholder'),
                        //enable typeahead by specifying the source array
                        source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                      }
                    );
                }
                else {
                    //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                    tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
                    //$('#form-field-tags').autosize({append: "n"});
                }
                
                
                
            
                /////////
                $('#modal-form input[type=file]').ace_file_input({
                    style:'well',
                    btn_choose:'Drop files here or click to choose',
                    btn_change:null,
                    no_icon:'icon-cloud-upload',
                    droppable:true,
                    thumbnail:'large'
                })
                
                //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                //and its width cannot be determined.
                //so we set the width after modal is show
                $('#modal-form').on('shown.bs.modal', function () {
                    $(this).find('.chosen-container').each(function(){
                        $(this).find('a:first-child').css('width' , '210px');
                        $(this).find('.chosen-drop').css('width' , '210px');
                        $(this).find('.chosen-search input').css('width' , '200px');
                    });
                })
                /**
                //or you can activate the chosen plugin after modal is shown
                //this way select element becomes visible with dimensions and chosen works as expected
                $('#modal-form').on('shown', function () {
                    $(this).find('.modal-chosen').chosen();
                })
                */
            
            });

        </script>

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="/Public/Admin/assets/js/jquery-2.0.3.min.js"></script>-->
		<script src="/Public/Admin/assets/js/jquery-2.0.3.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/Public/Admin/assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script src="/Public/Admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/Admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/Admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.sparkline.min.js"></script>
		<script src="/Public/Admin/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/Public/Admin/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/Public/Admin/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/Public/Admin/assets/js/ace-elements.min.js"></script>
		<script src="/Public/Admin/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) 
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>
	</body>
</html>