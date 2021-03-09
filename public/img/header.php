<?php
include(dirname(__FILE__)."/include/metadata.php");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
$title = wp_title('|', false, 'right') . get_bloginfo('name');
$description = get_bloginfo('description');
$keywords = '';

$keywords .= 'keywords,here,theme,dev';
?>
    <meta charset="<?php bloginfo('charset'); ?>">

    <?php if ($noindex === true) { echo '<meta name="robots" content="noindex, nofollow">'; } ?>

    <title><?=$title;?></title>
    <meta name="description" content="<?=$description;?>">
    <meta name="keywords" content="<?=$keywords;?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include(dirname(__FILE__)."/favicon/html_code.html"); ?>

    <meta property="og:url" content="<?=$ogp_url;?>">
    <meta property="og:image" content="<?=$ogp_non_https;?>">
    <meta property="og:image:secure_url" content="<?=$ogp_https;?>" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="<?=$title;?>" />
    <meta property="og:site_name" content="<?=get_bloginfo('name');?>">
    <meta property="og:title" content="<?=$title;?>">
    <meta property="og:description" content="<?=$description;?>">
    <meta property="og:type" content="<?php $siteType = is_front_page() ? 'website' : 'article'; echo $siteType; ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$title;?>">
    <meta name="twitter:description" content="<?=$description;?>">
    <meta name="twitter:image:src" content="<?=$ogp_https;?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="back-to-top" class="back-to-top" style="display: none">
        <i class="fas fa-chevron-circle-up"></i>
    </div><!-- #back-to-top -->
    <div class="wrapper header-wrapper">

        <header class="header">
            <br>
		    <div style="text-align:left; font-family: 'Meiryo'; font-size: 18px; font-weight=300">
<!--	           <span>クラウド・シンクライアント導入で「安心」「安全」「快適作業」を提案します。</span> -->
            </div><!-- .header-logo -->
            <div class="header-top">


                <div class="header-logo">
                    <a href="<?=esc_url(site_url('/'));?>"></a>
                </div><!-- .header-logo -->

                <div class="header-text">
                    <span>クラウド・シンクライアント導入で「安心」「安全」「快適作業」を提案します。</span>
                </div><!-- .header-logo -->

                <div class="header-sns">
                    <div class="top">
                      <div class="bottom" style=" font-family: 'Meiryo'">
                         <div class="search header-search">
                             <form method="get" id="searchform" action="<?=esc_url(site_url('/search/'));?>">
                                 <input class="" type="text" name="search" id="search" value="" placeholder="Search...">
                                 <button type="submit"></button>
                             </form>
					     </div>

					     <a href="<?=esc_url(site_url('/support-schedule/'));?>">
						    <img src="<?=get_template_directory_uri().'/images/header-support-schedule-pc.png';?>"/>
						    <span>サポートスケジュールはこちら</span>
				        </a>
				     </div>

                        <div>
                            <a href="<?=esc_url(site_url('/contact/'));?>">
								<img
								src="<?=get_template_directory_uri().'/images/header-consultation-pc-20200114.gif';?>"
								onmouseover="<?=get_template_directory_uri().'/images/header-consultation-pc-20200114.gif';?>"
								/>
							</a>
                        </div>
                        <div>
                        <?php
                        if (is_user_logged_in())
                        {
                            ?>
							<div>
                            <a href="<?=wp_logout_url(site_url('/'));?>">
								<img src="<?=get_template_directory_uri().'/images/logout_header.png';?>"/>
							</a>
							</div>
                            <?php
                        }
                        else
                        {
                            ?>
							<div>
                            <a href="<?=esc_url(site_url('/login/'));?>">
								<img src="<?=get_template_directory_uri().'/images/login_header.png';?>"/>
							</a>
							</div>
                            <?php
                        }
                        ?>
                        </div>
                        <!-- <div class="fb-like" data-href="https://www.facebook.com/pages/%E3%81%8D%E3%81%A3%E3%81%A8%E3%82%A8%E3%82%A4%E3%82%A8%E3%82%B9%E3%83%94%E3%83%BC/1834109976839605" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div> -->
                    </div>
                </div><!-- .header-logo -->
            </div>
            <div id="nav-toggle" class="nav-toggle">
                <div class="nav-toggle-bar1"></div>
                <div class="nav-toggle-bar2"></div>
                <div class="nav-toggle-bar3"></div>
            </div><!-- .nav-toogle -->
            <nav id="header-nav" class="header-nav">
                <div class="header-nav-bg"></div>
                <ul class="header-nav-list">
                    <li>
                        <!-- <a href="<?=esc_url(site_url('/services-solutions/'));?>"> -->
                            <span class="header-nav-item">サービス/ソリューション</span>
                        <!-- </a> -->
                        <ul>
                            <li>
                                <a href="<?=esc_url(site_url('/our-services/'));?>">
                                    <span class="header-nav-item">当社のサービス</span>
                                </a>
                            </li>
                            <li>
                                <!-- <a href="<?=esc_url(site_url('/solutions/'));?>"> -->
                                    <span class="header-nav-item">ソリューション</span>
                                <!-- </a> -->
                                <ul>
                                    <li>
                                        <a href="<?=esc_url(site_url('/web-separation/'));?>">
                                            <span class="header-nav-item">Web分離(インターネット分離)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=esc_url(site_url('/work-style-reform/'));?>">
                                            <span class="header-nav-item">働き方改革</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=esc_url(site_url('/thin-client/'));?>">
                                            <span class="header-nav-item">シンクライアント</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=esc_url(site_url('/security/'));?>">
                                            <span class="header-nav-item">セキュリティ</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/function-introduction/'));?>">
                            <span class="header-nav-item">機能紹介</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?=esc_url(site_url('/go-global/'));?>">
                                    <span class="header-nav-item">GO-Globalとは</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/lift-shift/'));?>">
                                    <span class="header-nav-item">アプリケーションクラウド化</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/technical-site/'));?>">
                            <span class="header-nav-item">技術サイト</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/partners-list/'));?>">
                            <span class="header-nav-item">代理店一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/case-study/'));?>">
                            <span class="header-nav-item">導入事例</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?=esc_url(site_url('/adaptation-facility-1/'));?>">
                                    <span class="header-nav-item">医療機関</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/adaptation-facility-2/'));?>">
                                    <span class="header-nav-item">教育機関</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/adaptation-facility-3/'));?>">
                                    <span class="header-nav-item">ISV</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/adaptation-facility-4/'));?>">
                                    <span class="header-nav-item">中小企業</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/adaptation-facility-5/'));?>">
                                    <span class="header-nav-item">BCP対策</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/faq/'));?>">
                            <span class="header-nav-item">FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/downloads/'));?>">
                            <span class="header-nav-item">Download</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/news/'));?>">
                            <span class="header-nav-item">ニュース</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?=esc_url(site_url('/site-news/'));?>">
                                    <span class="header-nav-item">サイト<br>ニュース</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/tech-news/'));?>">
                                    <span class="header-nav-item">技術ニュース</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=esc_url(site_url('/company-information/'));?>">
                            <span class="header-nav-item">企業概要</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?=esc_url(site_url('/representative-greetings/'));?>">
                                    <span class="header-nav-item">代表あいさつ</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/philosophy/'));?>">
                                    <span class="header-nav-item">理念</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=esc_url(site_url('/history/'));?>">
                                    <span class="header-nav-item">沿革</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header-nav-list-search-item">
                        <div class="search header-search mobile">
                            <form method="get" id="searchform" action="<?=esc_url(site_url('/search/'));?>">
                                <input class="open" type="text" name="search" id="search" value="" placeholder="Search...">
                                <button type="submit"></button>
                            </form>
                        </div>
                    </li>
                </ul>

                     <!-- BREADCRUMBS Added on 20191209 -->
				     <div align="left" class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				     <?php if(function_exists('bcn_display'))
					   {
				       if(!is_home() && !is_front_page())
					   	{
					  	 bcn_display();
					   	}
				       }?>
				     </div>

            </nav><!-- .nav -->
        </header><!-- .header -->
    </div><!-- .wrapper -->

<div class="wrapper content-wrapper">
