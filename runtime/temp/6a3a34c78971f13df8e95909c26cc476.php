<?php /*a:7:{s:58:"F:\gitProject\Tofu\application\index\view\brand\index.html";i:1593325572;s:58:"F:\gitProject\Tofu\application\index\view\public\base.html";i:1593326855;s:60:"F:\gitProject\Tofu\application\index\view\public\header.html";i:1592982431;s:57:"F:\gitProject\Tofu\application\index\view\public\nav.html";i:1592548201;s:59:"F:\gitProject\Tofu\application\index\view\public\title.html";i:1592963669;s:60:"F:\gitProject\Tofu\application\index\view\public\footer.html";i:1594189925;s:59:"F:\gitProject\Tofu\application\index\view\public\model.html";i:1593326855;}*/ ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo htmlentities($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="/static/index/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!--<link rel="stylesheet" href="/static/index/css/flexslider.css" type="text/css" media="screen" property="" />-->
    <link href="/static/index/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/static/index/css/fontawesome-all.css" rel="stylesheet">
    <link href="/static/index/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
    <link href="http://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
    <!-- js -->
    <script src="/static/index/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- 当前页面的样式及JS -->
    
</head>
<body>
<header>
    <div class="top-bar_sub container-fluid">
        <div class="row">
            <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
                <span>Welcome Back!</span>
                <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="#">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
                <span>
						<a href="#">
							<i class="far fa-user"></i> Register</a>
					</span>
            </div>
            <div class="col-md-4 logo text-center" data-aos="fade-up">
                <a class="navbar-brand" href="index.html">
                    <!--<i class="fab fa-gitkraken"></i> Baked-->
                    <img src="<?php echo htmlentities(get_file_path($config['logo'])); ?>" height="70px">
                </a>
            </div>
            <div class="col-md-4 log-icons text-right"  data-aos="fade-up">
                <ul class="social_list1 mt-4">
                    <li>
                        <a href="#" class="mx-2">
                            <img src="/static/index/images/common/message.png" title="在线申请">
                        </a>
                    </li>
                    <li>
                        <a class="mx-2" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2854196306&site=qq&menu=yes">
                            <img src="/static/index/images/common/QQ.png" title="QQ">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mx-2">
                            <img src="/static/index/images/common/tel.png" title="400-8068-918">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:layer_load()" class="mx-2">
                            <img src="/static/index/images/common/load.png" title="可行性报告">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<script src="/static/libs/layer/layer.js"></script>
<script>
    function layer_load() {
        //页面层-图片
      /*  layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            area: 'auto',
            skin: 'layui-layer-molv', //没有背景色
            shadeClose: true,
            content: '<a href="https://rrx.cn/view-y4p1a5" target="_blank"><img src="/static/index/images/common/code.png" width="200px"></a>'
        });*/
        //自定页
        layer.open({
            type: 1,
            title: '可行性报告',
            skin: 'layui-layer-molv', //样式类名
            closeBtn: 1, //不显示关闭按钮
            anim: 1,
            offset: 'auto',
            shade: [0.8,'black'],    //遮罩层,
            shadeClose: true, //开启遮罩关闭
            content: '<a href="https://rrx.cn/view-y4p1a5" target="_blank"><img src="/static/index/images/common/code.png" width="200px"></a>'
        });
    }
</script>
<!--/banner-->
<?php if(empty($page_img) || (($page_img instanceof \think\Collection || $page_img instanceof \think\Paginator ) && $page_img->isEmpty())): ?>
<div class="banner-inner">
</div>
<?php endif; if(!(empty($page_img) || (($page_img instanceof \think\Collection || $page_img instanceof \think\Paginator ) && $page_img->isEmpty()))): ?>
<div class="banner-inner" style="background-image: url(<?php echo htmlentities(get_file_path($page_img['img'])); ?>);">
</div>
<?php endif; ?>
<!--//banner-->
<!--/nav-->


<div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(!(empty($nav) || (($nav instanceof \think\Collection || $nav instanceof \think\Paginator ) && $nav->isEmpty()))): ?>
            <ul class="navbar-nav mx-auto">
                <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty())): ?>
                    <li class="nav-item" id="my-nav-pid-<?php echo htmlentities($val['id']); ?>">
                        <a class="nav-link" href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>"><?php echo htmlentities($val['title']); ?></a>
                    </li>
                    <?php endif; if(!(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty()))): ?>
                    <li class="nav-item dropdown" id="my-nav-pid-<?php echo htmlentities($val['id']); ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="brandDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <?php echo htmlentities($val['title']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="brandDropdown">
                            <?php if(is_array($val['arr']) || $val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <a class="dropdown-item" href="<?php echo url($v['url_value']); if($v['params'] != ''): ?>?<?php echo htmlentities($v['params']); ?><?php endif; ?>"><?php echo htmlentities($v['title']); ?></a>
                            <?php if($i != count($val['arr'])): ?>
                            <div class="dropdown-divider"></div>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <?php endif; ?>
        </div>
    </nav>
    <script>
        $(document).ready(function(){
            var nav_pid = <?php echo htmlentities($nav_pid); ?>;
            var str1 = '#my-nav-pid-' + nav_pid;
            $(str1).addClass('active');
        })
    </script>
</div>

<!--
<div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/index/index'); ?>">首页</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="brandDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        公司文化
                    </a>
                    <div class="dropdown-menu" aria-labelledby="brandDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌简介</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌文化</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌风采</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌动态</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        产品展示
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">纸包鱼</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">纸火锅</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">冒菜</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">卤菜</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">凉菜</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">饮品</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        项目优势
                    </a>
                    <div class="dropdown-menu" aria-labelledby="projectDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/project/index'); ?>">产品优势</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/project/index'); ?>">扶持优势</a>
                    </div>
                </li>
                &lt;!&ndash;<li class="nav-item">
                    <a class="nav-link scroll" href="#menu">Menu</a>
                </li>&ndash;&gt;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profitDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        盈利模式
                    </a>
                    <div class="dropdown-menu" aria-labelledby="brandDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">合作支持</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">客户权益</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">合作流程</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">合作条件</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="storiesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        成功案例
                    </a>
                    <div class="dropdown-menu" aria-labelledby="storiesDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/stories/index'); ?>">效果图</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/stories/index'); ?>">实体店</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/stories/index'); ?>">加盟商</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/poster/index'); ?>">项目海报</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        联系我们
                    </a>
                    <div class="dropdown-menu" aria-labelledby="contactDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/contact/index'); ?>">联系我们</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/contact/index'); ?>">在线留言</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>-->

<!--//nav-->
<ol class="breadcrumb" style="margin-bottom: 0px;">
    <li class="breadcrumb-item">
        <a href="<?php echo url('index/index/index'); ?>">首页</a>
    </li>
    <li class="breadcrumb-item active"><?php echo htmlentities($title); ?></li>
</ol>


<section class="banner-bottom">
	<div class="container">
		<h3 class="tittle">
			<h3 class="tittle">
    <span class="span-d">
        <?php echo htmlentities($title); ?>
    </span>
</h3>
		</h3>
		<div class="row inner-sec">
			<img src="/static/index/images/brand/i1.jpg" width="100%" alt="">
			<p style="padding: 50px 0;">一纸馋隶属于成都餐协餐饮管理有限公司，公司于二零一二年在享有“美食之都”之称的成都成立，是经工商、税务、环保等部门登记注册的一家独立性集团化食品技术研发有限公司。成都餐协坚持以餐饮管理服务为本、坚持多元化发展方向、坚持以市场经营为导向，在稳步发展中不断创新，追求卓越，形成专业化服务、人性化管理、科学化发展的经营格局，短短五年时间，成都餐协凭借良好的品牌优势和专业诚信的优质服务成为餐饮界新贵，并不断扩大自己的经营空间。成都餐协拥有集运营管理、技术培训以及服务支持为一体的完整运营体系，实现了大陆业务无缝式链接，地域覆盖无盲区的目标。集团自成立以来始终为成为中国更绿色更健康的餐饮运营服务商而努力，坚持“为顾客创造价值，与顾客共同成长”的宗旨，“任人唯贤、唯才是举、选贤任能、用人所长”的人才观，吸引了大批人才，组建了一支注重实干、讲求效率的优良团队。我们的团队秉承“精品、服务、质量”的企业信条，把优质的产品和服务提供给客户，不断演绎着美食的至高境界，为社会创造财富和效益。</p>
			<img src="/static/index/images/brand/i2.png" width="100%" alt="">
		</div>
		<div class="row inner-sec">
			<div class="col-lg-6 about-img" data-aos="flip-right">
				<img src="/static/index/images/brand/i3.png" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
				<h4 class="sub-hd mb-4">一纸馋纸包鱼<br><span style="font-size: 0.5em;">一纸馋隶属于成都餐协餐饮管理有限公司</span></h4>
				<p>用品质与内涵走入大众视线。成都餐协高薪聘请做鱼大师-曾国立，将“潮流”、“分寸”、“私享”、“精致”等时尚概念，融入纸包鱼打造之中。用极客的心态，进行尺寸的把玩，以克制成巨制，用匠心承初心。蒜香纸包鱼、麻辣纸包鱼、香辣纸包鱼以及各种地域风情纸包鱼，玩转纸包鱼全能。</p>
			</div>
		</div>
		<div class="row inner-sec">
			<div class="col-lg-6 about-img" data-aos="flip-right">
				<p>一纸馋纸包鱼的今天由无数个辛勤的昨天完美诠释，一纸馋纸包鱼的明天由无数个拼搏的今天来精彩续写。一纸馋人用激情、诚信创新、责任、专注、奉献的精神演绎美食的境界，与无数的梦想追逐者一起努力打造属于我们的成功！</p>
			</div>
			<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
				<img src="/static/index/images/brand/i4.png" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>


<style>
    footer .footer-grid img {
        width: 80%;
        max-width: 200px ;
    }
    footer .footer-grid h4{
        color: #FFFFFF;
    }
    footer ul {
        float: right;
        margin-top: 17px;
        margin-right: 30px;
    }

    footer li {
        width: 125px;
        float: left
    }

    footer li dl {
        text-align: center
    }

    footer li dt {
        font-size: 18px;
        margin-bottom: 10px
    }

    /*footer li dd {*/
    /*    border-left: 1px solid #f3f3f3;*/
    /*    height: 160px;*/
    /*    font-size: 15px*/
    /*}*/

    footer li dd a {
        display: block;
        line-height: 26px;
        color: #fff;
        -webkit-transition: all .3s;
        transition: all .3s;
        padding-bottom: 3px;
    }

    footer li dd a:hover {
        color: cyan;
    }

    footer li:first-child dd {
        border-left: 0
    }
    .normlist {
        list-style: none;
        margin: 0;
        padding: 0
    }
    footer .subscribe-main{
        padding-bottom: 0px;
    }
</style>

<footer>
    <div class="container">
        <div class="row" style="margin-bottom: 1em;">
            <div class="col-lg-2 footer-grid text-center" data-aos="fade-right" >
                <img src="<?php echo htmlentities(get_file_path($config['wx_img'])); ?>" width="80%">
                <h4><b>扫一扫<br/>立即关注<br/>官方微信</b></h4>
            </div>
            <!-- subscribe -->
            <div class="col-lg-10 subscribe-main footer-grid text-left" data-aos="fade-left">
                <?php if(!(empty($footer) || (($footer instanceof \think\Collection || $footer instanceof \think\Paginator ) && $footer->isEmpty()))): ?>
                <ul class="normlist">
                    <?php if(is_array($footer) || $footer instanceof \think\Collection || $footer instanceof \think\Paginator): $i = 0; $__LIST__ = $footer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <li>
                        <dl>
                            <dt><?php echo htmlentities($val['title']); ?></dt>
                            <?php if(!(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty()))): ?>
                            <dd>
                                <?php if(is_array($val['arr']) || $val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <a href="<?php echo url($v['url_value']); if($v['params'] != ''): ?>?<?php echo htmlentities($v['params']); ?><?php endif; ?>"><?php echo htmlentities($v['title']); ?></a>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                            <?php endif; ?>
                        </dl>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div style="width: 100%;height: 1em;border-top: 1px dotted #000000;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 footer-grid text-left" data-aos="fade-right" style="padding: 0 0 0 15px;">
                <h5>免费财富热线</h5>
                <h4 style="padding-bottom: 15px;"><?php echo htmlentities($config['tel']); ?></h4>
                <b>总部地址：<?php echo htmlentities($config['address']); ?></b>
            </div>
            <!-- subscribe -->
            <div class="col-lg-7 subscribe-main text-right" data-aos="fade-left">
                <img src="<?php echo htmlentities(get_file_path($config['logo'])); ?>" style="height: 70px;">
                <p style="color: #FFFFFF">
                    成都餐协餐饮管理有限公司@版权所有信息备案号：<a href="http://www.beian.miit.gov.cn/" style="color: blue;">蜀ICP备12020698号-9</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- /js files -->
<link href='/static/index/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href='/static/index/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
<script src='/static/index/js/aos.js'></script>
<script src="/static/index/js/aosindex.js"></script>
<!-- //js files -->
<!--/ start-smoth-scrolling -->
<script src="/static/index/js/move-top.js"></script>
<script src="/static/index/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!--// end-smoth-scrolling -->

<script>
    $(document).ready(function () {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>

<!-- //Custom-JavaScript-File-Links -->
<script src="/static/index/js/bootstrap.js"></script>

</body>
</html>