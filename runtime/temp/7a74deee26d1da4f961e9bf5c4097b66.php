<?php /*a:7:{s:58:"F:\gitProject\Tofu\application\index\view\index\index.html";i:1593420879;s:59:"F:\gitProject\Tofu\application\index\view\public\index.html";i:1593326855;s:60:"F:\gitProject\Tofu\application\index\view\public\header.html";i:1592982431;s:60:"F:\gitProject\Tofu\application\index\view\public\banner.html";i:1592962010;s:57:"F:\gitProject\Tofu\application\index\view\public\nav.html";i:1592548201;s:60:"F:\gitProject\Tofu\application\index\view\public\footer.html";i:1594189925;s:59:"F:\gitProject\Tofu\application\index\view\public\model.html";i:1593326855;}*/ ?>
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
<!--    <link rel="stylesheet" href="/static/index/css/flexslider.css" type="text/css" media="screen" property="" />-->
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
    
<!--swiper-->
<link rel="stylesheet" href="/static/index/swiper/css/swiper.min.css">
<!-- Swiper JS -->
<script src="/static/index/swiper/js/swiper.min.js"></script>

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
<style>
    .swiper-container0 {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide0 {
        text-align: center;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-slide0 img{
        width:100%;
        height:auto;
    }
    .my-pagination{
        position:absolute;
        bottom:10px;
    }
</style>
<div class="banner">
    <!-- Swiper -->
    <div class="swiper-container0" style="position:relative">
        <div class="swiper-wrapper">
            <?php if(!(empty($banner) || (($banner instanceof \think\Collection || $banner instanceof \think\Paginator ) && $banner->isEmpty()))): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <div class="swiper-slide swiper-slide0">
                <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" alt="" title="<?php echo htmlentities($val['title']); ?>"/>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination my-pagination" id="swiper-pagination-banner"></div>
        <!-- Add Arrows -->
        <a class="carousel-control-prev swiper-button-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" id="swiper-button-prev">
            <span  aria-hidden="true"></span><!--class="carousel-control-prev-icon"-->
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next swiper-button-next" href="#carouselExampleIndicators" role="button" data-slide="next" id="swiper-button-next">
            <span  aria-hidden="true"></span><!--class="carousel-control-next-icon"-->
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Initialize Swiper -->
<script>
    var swiper0 = new Swiper('.swiper-container0', {
        grabCursor: true,//鼠标覆盖Swiper时指针会变成手掌形状
        slidesPerView: 1,//容器默认显示数量
        spaceBetween: 0,//在slide之间设置距离（单位px）
        loop: true,//循环
        pagination: {
            el: '#swiper-pagination-banner',
            clickable: true,
        },
        navigation: {
            nextEl: '#swiper-button-next',
            prevEl: '#swiper-button-prev',
        },
        speed:2000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    //鼠标覆盖停止自动切换
    swiper0.el.onmouseover = function(){
        swiper0.autoplay.stop();
    }

    //鼠标离开开始自动切换
    swiper0.el.onmouseout = function(){
        swiper0.autoplay.start();
    }
</script>
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


<!--/inner-content-->
<!--/banner-bottom-->
<section class="banner-bottom" id="brand">
    <div class="container">
        <h3 class="tittle">
            <span class="span-d">
                品牌故事
            </span>
        </h3>
        <div class="row inner-sec">
            <div class="col-lg-6 about-img" data-aos="flip-right">
                <img src="/static/index/images/index/brand.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 about-info text-left" data-aos="flip-left" >
                <p>被霓虹灯渲染的城市夜晚，映照着形单影只的崔南杨老师。他找遍整个城市，也没有找到适合一个人吃的烤鱼。他想“既然找不到，不如自己创造一家”。</p>
                <p>首当其冲的问题便是鱼的选择，经过多方比较，湄公鱼成了崔南杨老师的最佳选择，不仅因湄公鱼的肉质肥嫩，口感细腻鲜美；更是因为其兼具了鱼类所共有的营养价值，含动物蛋白和钙、磷及维生素A、D、B1、B2且易消化吸收，有防治心脑血管疾病和保护视力等功效。</p>
                <p>选好了鱼后，崔南杨老师放弃了传统烤鱼模式，让烤鱼也能成为一人食新式快餐，传达一个人的烤鱼，两个人的故事，三个人的欢乐理念。当然为了迎合不同的人群，他也创造了四种不同的口味，还加入了香辣蟹和花甲的选择，只想让跟他一样孤身漂泊的人也能从容地吃一顿烤鱼，让繁忙的城市白领，在短暂的时间里，心满意足的解决午餐。城市很大，心却很暖，一个人也要好好吃饭。</p>
                <p>壹纸馋锡纸烤鱼饭----四川唯一一家商标加盟品牌。</p>
                <p>十年经验累积，技术沉淀，不断挑战创新，致力于打造时尚烤鱼新快餐！</p>
                <div class="view my-4">
                    <a href="#brand" class="btn btn-primary read-m" style="padding: 0.3em 2em;">YZC XIZHIKAOYU</a>
                </div>
                <!--<img src="/static/index/images/index/letter.png" class="img-fluid" alt="">-->
            </div>
        </div>
    </div>
</section>
<!--//banner-bottom-->

<!--/banner-bottom-->
<style>
    .my-blog-item img {
        box-shadow: 2px 2px 3px 2px aliceblue;
        margin: 0 15px;
        width: 250px;
    }
</style>
<section class="grid-info-section">
    <div class="container">
        <h3 class="tittle">
            <span class="span-f">
            菜品推荐
            </span>
        </h3>
        <div class="row inner-sec">
            <?php if(!(empty($product) || (($product instanceof \think\Collection || $product instanceof \think\Paginator ) && $product->isEmpty()))): if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <div class="my-blog-item text-center"><!--blog-item-->
                <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" alt="<?php echo htmlentities($val['desc']); ?>" class="img-fluid"/>
                <div class="floods-text">
                    <h3><?php echo htmlentities($val['title']); ?></h3>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--//banner-bottom-->
<!--/Menu-->
<style>
    .blog-item img {
        box-shadow: 0px 0px black;
    }
    #swiper_container_store {
        margin: 0 auto;
        padding-top: 4px;
    }
    #swiper_container_store .swiper-wrapper {
        -webkit-transition-timing-function: linear; /*之前是ease-out*/
        -moz-transition-timing-function: linear;
        -ms-transition-timing-function: linear;
        -o-transition-timing-function: linear;
        transition-timing-function: linear;
        margin: 0 auto;
    }
    #swiper_container_store img{
        width: 270px;
        border: 0 none;
        vertical-align: top;
    }
    #swiper_container_store p{
        color: #FFF;
        font-size: 2em;
        background-color: #D6664E;
    }
    #btn-prex-store,#btn-next-store{
        position: absolute;
        cursor: pointer;
        z-index: 100;
        padding-top: 100px;
        color: #D6664E;
    }
    #btn-prex-store{
        left: -50px;
    }
    #btn-next-store{
        right: -50px;
    }
</style>
<section class="banner-bottom">
    <div class="container">
        <h3 class="tittle">
            <span class="span-d">
                STORE DISPLAY
            </span>
        </h3>
        <div class="row inner-sec">
            <div class="swiper-button-prev" id="btn-prex-store"></div>
            <div class="swiper-container swiper_container_store" id="swiper_container_store">
                <div class="swiper-wrapper">
                    <?php if(!(empty($store) || (($store instanceof \think\Collection || $store instanceof \think\Paginator ) && $store->isEmpty()))): if(is_array($store) || $store instanceof \think\Collection || $store instanceof \think\Paginator): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide swiper-slide-store">
                        <div>
                            <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" alt="<?php echo htmlentities($val['desc']); ?>" class="img-fluid" />
                            <p><?php echo htmlentities($val['title']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination" id="swiper-pagination-store"></div>
            </div>
            <div class="swiper-button-next" id="btn-next-store"></div>
        </div>
        <script>
            var swiper_store = new Swiper('.swiper_container_store', {
                grabCursor: true,
                speed: 5000,
                /*slidesPerView: 4,*/
                slidesPerView: 'auto',
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '#swiper-pagination-store',
                    type: 'progressbar',
                },
                /*breakpointsInverse: false,*/
                breakpoints: {
                    //当宽度大于等于
                    270: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    540: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    810: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    1080: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
            /*鼠标移入停止轮播，鼠标离开 继续轮播*/
            //鼠标覆盖停止自动切换
            swiper_store.el.onmouseover = function(){
                swiper_store.autoplay.stop();
            }

            //鼠标离开开始自动切换
            swiper_store.el.onmouseout = function(){
                swiper_store.autoplay.start();
            }
            $("#btn-next-store").click(function(){
                swiper_store.params.autoplay.reverseDirection=false;
            });
            $("#btn-prex-store").click(function(){
                swiper_store.params.autoplay.reverseDirection=true;
            });
        </script>
    </div>
</section>
<!--//Menu-->

<style>
    .intrbox {
        width: 1200px;
        height: 356px;
        margin-top: 57px;
        position: relative
    }
    .introut {
        width: 1200px;
        height: 356px;
        overflow: hidden;
        position: relative
    }
    .introut img {
        width: 1200px;
        height: 357px
    }
    .introut .cover {
        width: 700px;
        height: 357px;
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
        padding-top: 88px;
        color: #fff;
        padding-right: 152px;
        padding-left: 180px;
        position: absolute;
        right: 0;
        top: 0px;
        background: url(/static/index/images/index/D6664E.png)
    }
    .introut:hover .cover {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    .introut .btn {
        color: #fff;
        border: 1px solid #fff;
        padding: 5px ;
        border-radius: 10px;
    }
    .introut p{
        color: black;
        margin-bottom:10px;
    }
    .introut .btn:hover {
        background: #000;
        border-color: #000
    }
    .trans p {
        text-indent: 2em;
    }
</style>
<section class="grid-info-section">
    <div class="container">
        <h3 class="tittle">
            <span class="span-f">
            公司介绍
            </span>
        </h3>
        <div class="row">
            <div class="intrbox">
                <div class="introut">
                    <img alt="" src="/static/index/images/index/team.jpg" />
                    <div class="cover trans">
                        <h3>成都餐协餐饮管理有限公司</h3>
                        <p>成都餐协餐饮管理有限公司，于二零一二年在享有“美食之都”之称的成都成立。成都餐协坚持以餐饮管理服务为本，坚持多元化发展方向、以市场经营为导向，在稳步发展中不断创新，形成了集运营管理、技术培训以及服务支持为一体的完整运营体系。集团自成立以来始......</p>
                        <a href="<?php echo url('index/brand/index'); ?>" class="btn">MORE +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .swiper-container {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        text-align: center;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-slide img{
        width:100%;
        height:auto;
    }

    .news_list {

    }
    .news_list li {
        float: left;
        /*border-bottom: 1px dashed;*/
        width: 100%;
    }
    .news_list span {
        float: right;
    }
    .news_list p {
        float: left;
        max-width: 400px;
        overflow: hidden;
        text-overflow:ellipsis;
        white-space: nowrap;
        text-indent: 0em;
    }
    .news_list ul, li {
        margin: 0;
        padding: 0;
        list-style: none;
    }
</style>
<section class="banner-bottom">
    <div class="container">
        <h3 class="tittle">
            <span class="span-d">
                News Center
            </span>
        </h3>
        <div class="row inner-sec">
            <div class="col-lg-6" data-aos="flip-right">
                <div class="swiper-container swiper-container-news" id="swiper-container-news">
                    <div class="swiper-wrapper">
                        <?php if(!(empty($news) || (($news instanceof \think\Collection || $news instanceof \think\Paginator ) && $news->isEmpty()))): if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide">
                            <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" alt=" " class="img-fluid">
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-info text-left" data-aos="flip-left" >
                <div>
                    <ul class="news_list">
                        <?php if(!(empty($news) || (($news instanceof \think\Collection || $news instanceof \think\Paginator ) && $news->isEmpty()))): if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('index/brand/details'); ?>?id=<?php echo htmlentities($val['id']); ?>">
                                <p><?php echo htmlentities($val['title']); ?></p>
                            </a>
                            <span><?php echo htmlentities($val['time']); ?></span>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="view my-4">
                    <a href="<?php echo url('index/brand/news'); ?>" class="btn btn-primary read-m" style="margin-top: 1em;">查看更多</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var swiper_news = new Swiper('#swiper-container-news', {
        speed:2000,
        grabCursor: true,
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            stopOnLastSlide: false,
            disableOnInteraction: false,
        },
    });
    /*鼠标移入停止轮播，鼠标离开 继续轮播*/
    //鼠标覆盖停止自动切换
    swiper_news.el.onmouseover = function(){
        swiper_news.autoplay.stop();
    }

    //鼠标离开开始自动切换
    swiper_news.el.onmouseout = function(){
        swiper_news.autoplay.start();
    }
</script>
<!--//inner-content-->


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