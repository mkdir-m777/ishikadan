<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>

</head>


<body>
    <?php get_template_part('include/header'); ?>
    <main class="js-main">
        <?php get_template_part('include/modal'); ?>


        <section class="mainvisurl">
            <div class="slider">
                <div class="slick-img">
                    <img class="mainvisurl-img-pc"  src="<?php echo get_template_directory_uri(); ?>/img/mainbg01.png" alt="" />
                    <img class="mainvisurl-img-sp" src="<?php echo get_template_directory_uri(); ?>/img/sp_mainbg01.png" alt="" />
                  
                </div>
                <div class="slick-img">
                    <img class="mainvisurl-img-pc" src="<?php echo get_template_directory_uri(); ?>/img/mainbg02.png" alt="" />
                    <img class="mainvisurl-img-sp" src="<?php echo get_template_directory_uri(); ?>/img/sp_mainbg02.png" alt="" />                  
                </div>
                <div class="slick-img">
                    <img class="mainvisurl-img-pc" src="<?php echo get_template_directory_uri(); ?>/img/mainbg03.png" alt="" />
                    <img class="mainvisurl-img-sp" src="<?php echo get_template_directory_uri(); ?>/img/sp_mainbg03.png" alt="" />
                </div>
            </div>
            <div class="catcopy-wrap">
                <p class="catcopy-1">
                    頑張る人の
                </p>
                <p class="catcopy-2">
                    頑張らない時間
                </p>
            </div>
        </section>

        <section class="introduction">
            <div class="introduction-inner" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="introduction-title vertical-writing">
                    温海温泉の<br>美しさに癒やされて
                </h2>
                <p class="introduction-mes vertical-writing">
                    東北の奥座敷である温海温泉郷<br>
                    開湯は約
                    <span class="textconbine">1</span>
                    <span class="textconbine">3</span>
                    <span class="textconbine">0</span>
                    <span class="textconbine">0</span>

                    年前とされ、役小角が<br class="sp-none">
                    発見したと伝えられます
                </p>
                <p class="introduction-mes vertical-writing">
                    石井花壇は江戸より続く由緒ある旅館<br class="sp-none">でクラシックな作りの中に大正ロマンあふれる<br class="sp-none">内装を残しております </p>
                <p class="introduction-mes vertical-writing">
                    圧倒的癒やしの空間で<br class="sp-none">頑張る現代人に<br class="sp-none">頑張らない圧倒的な非日常をご提供します
                </p>
                <p class="introduction-name vertical-writing">
                    石井花壇
                </p>
            </div>
        </section>

        <section class="service">
            <div class="sevrice-inner">
                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/oheya01.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">喧騒から離れた空間<br>
                            心落ち着く至極のひととき
                        </h2>
                        <p class="service-text">まるで時が止まったかのような、圧倒的な静寂のなかで、<br>
                            ひたすらにゆったりと…。<br>
                            最高級の「何もしない時間」をお過ごしください。
                        </p>
                        <a href="" class="btn bgleft service-btn"><span>お部屋について</span></a>
                    </li>
                </ul>
                <ul class="service-list-box reverse" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu-top.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">出迎えるのは<br>
                            極上の温海料理
                        </h2>
                        <p class="service-text">最も旬の食材を愉しむ、最高の贅沢を<br>
                            最高級A5ランクの米沢牛と共に頂く。<br>
                            あなたの人生史に残る「極上の感動」を<br>
                            お約束します。
                        </p>
                        <a href="" class="btn bgleft service-btn"><span>お料理について</span></a>
                    </li>
                </ul>
                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/onsen-top.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">疲れ切った身体にやすらぎを<br>
                            温海の源泉に癒やされて
                        </h2>
                        <p class="service-text">古くは弘法大師の病をも治療したと言われる温海の泉質。<br>
                            現代人の疲弊しきった身体を修復する最高級の湯治場として<br>
                            ご活用ください。
                        </p>
                        <a href="" class="btn bgleft service-btn"><span>お部屋について</span></a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="plan">
            <div class="section-inner">
                <div class="section-title-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo02.png" alt="">
                    <h2 class="section-title">
                        おすすめご宿泊プラン
                    </h2>
                </div>
                <ul class="plan-list">
                    <li class="plan-list-box" data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu01.png" alt="">
                        <div class="plan-content-wrap">
                            <h3 class="plan-title">朝食付きプラン、日本近海で取れた<br>
                                のどぐろを朝食として…</h3>
                            <p class="plan-text">最高級と称されるのどぐろ、正式には「アカ<br>
                                ムツ」と呼ばれる魚、味は独特の上品な味わ<br>
                                いで、焼いても煮ても美味</p>
                        </div>
                    </li>
                    <li class="plan-list-box" data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu02.png" alt="">
                        <div class="plan-content-wrap">
                            <h3 class="plan-title">【期間限定】温海蟹をたっぷりと<br>
                                愉しむプラン。</h3>
                            <p class="plan-text">温海で水揚げされた蟹は「温海蟹」<br>
                                として知られ、嗜好品として愛されて<br>
                                きました。この宿泊プランでは存分に</p>
                        </div>
                    </li>
                    <li class="plan-list-box" data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu03.png" alt="">
                        <div class="plan-content-wrap">
                            <h3 class="plan-title">【平日限定】贅沢美味懐石プラン。<br>
                                海辺の四季旬彩プラン。</h3>
                            <p class="plan-text">温海近海で取れた魚を鮮度そのままに舟盛りに<br>
                                してご提供。生きた味をお楽しみください。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="news">
            <div class="section-inner">
                <div class="section-title-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo02.png" alt="">
                    <h2 class="section-title">
                        お知らせ
                    </h2>
                    <div class="news-menu">
                        <p>営業情報</p>
                        <p>その他</p>
                    </div>
                </div>
                <article data-aos="fade-up" data-aos-duration="3000">
                    <ul class="news-list-warp">
                        <a class="news-list-item" href="">
                            <li class="news-list-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news01.png" alt="">
                                <div class="news-text-warp">
                                    <time>2020.12.24</time>
                                    <p class="news-text">年末最後の営業日は27日になります。</p>
                                </div>
                            </li>
                        </a>
                        <a class="news-list-item" href="">
                            <li class="news-list-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                <div class="news-text-warp">
                                    <time>2020.12.24</time>
                                    <p class="news-text">年末最後の営業日のお知らせ</p>
                                </div>
                            </li>
                        </a>
                        <a class="news-list-item" href="">
                            <li class="news-list-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                <div class="news-text-warp">
                                    <time>2020.12.11</time>
                                    <p class="news-text">12.21は臨時休業とさせていただきますので、よろしく<br>
                                        お願いします。</p>
                                </div>
                            </li>
                        </a>
                        <a class="news-list-item" href="">
                            <li class="news-list-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news01.png" alt="">
                                <div class="news-text-warp">
                                    <time>2020.12.24</time>
                                    <p class="news-text">年末最後の営業日のお知らせ</p>
                                </div>
                            </li>
                        </a>
                        <a class="news-list-item" href="">
                            <li class="news-list-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news01.png" alt="">
                                <div class="news-text-warp">
                                    <time>2020.12.01</time>
                                    <p class="news-text">和室の改装を行いますため、12.10はお休み<br>
                                        させていただきます。</p>
                                </div>
                            </li>
                        </a>
                        <a class="news-list-item" href="">
                            <li class="news-list-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                <div class="news-text-warp">
                                    <time>2020.12.24</time>
                                    <p class="news-text">年末最後の営業日のお知らせ</p>
                                </div>
                            </li>
                        </a>
                    </ul>
                </article>
            </div>
        </section>

        <section class="accses">
            <div class="section-inner">
                <div class="section-title-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo02.png" alt="">
                    <h2 class="section-title">
                        アクセス
                    </h2>
                </div>
                <ul class="accses-list" data-aos="fade-up" data-aos-duration="3000">
                    <li class="accses-list-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/acess.png" alt="">
                    </li>
                    <li class="accses-text">
                        <p>住所</p>
                        <p>〒000-0000 <br>
                            山形県鶴岡市xxxxxxxxxx</p>
                        <p>TEL/FAX</p>
                        <p>000-0000-0000/00-0000-0000</p>
                        <p>営業時間</p>
                        <p>14:00-23:00</p>
                        <p>＊4名以上のご予約の場合は、最寄り駅の「鶴岡駅」より送迎が可能ですので、<br>
                            ご連絡ください。</p>
                    </li>
                </ul>
                <iframe data-aos="fade-up" data-aos-duration="3000" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36224.96295988972!2d139.7420112834307!3d38.77026851468334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8c19c93e21b2fd%3A0x7f8b6a160814b124!2z5rmv6YeO5rWc5rW35rC05rW05aC0!5e0!3m2!1sja!2sjp!4v1687874977738!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

    <?php get_template_part('include/footer'); ?>

    <?php get_footer(); ?>
    </footer>