<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/page_style.css">
</head>


<body>
    <!-- ヘッダー -->
    <?php get_template_part('include/header'); ?>

    <main class="js-main">
        <?php get_template_part('include/modal'); ?>


        <section class="page-mainvisurl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu-header.png" alt="">
            <h1 class="page-mainvisurl-header-title">
                お料理
            </h1>
        </section>
        <section class="service">
            <div class="service-inner">


                <?php get_template_part('include/breadcrumb'); ?>

                <div class="content-text">
                    <p>地元温海の市場で仕入れた食材のみを使った食材をふんだんに使い、<br>
                        大将の技が光る「温海料理」<br>
                        四季ごと、日ごとに変化する味わいを、どうぞご堪能ください。</p>
                </div>
                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu01.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">地元食材にこだわった会席料理
                        </h2>
                        <p class="service-text">みずみずしくほのかに甘い野菜、新鮮で味に深みがある魚介類、肉類。<br>
                            旬の素材をそのままに生かす、経験に裏打ちされた確かな技。<br>
                            四季ごと、日ごとに変化する味わいを、どうぞご堪能ください。
                        </p>
                        <p class="service-text-atention">
                            <!-- ＊部屋数に限りがございます。<br>
                            ＊洗い場はないため、お体を先に大浴場でお流しになって頂く必要があります。 -->
                        </p>
                    </li>
                </ul>

                <ul class="service-list-box service-list-box-2" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-txt service-list-item-txt-2">
                        <h2 class="service-title">温海の漁港で目利きの品を
                        </h2>
                        <p class="service-text">石井花壇でお出しする料理はすべて料理長である大将の目利きで、<br>
                            温海の魚市場でその日のうちに仕入れたものを使用しております。<br>
                            日本海の宝玉を十分にお楽しみください。
                        </p>
                        <p class="service-text-atention">
                            <!-- ＊お庭は複数のお客様と囲む形になります。<br>
                            ＊部屋数に限りがあります。<br>
                            ＊ご希望の方は「お抹茶/500円」をルームサービスさせていただきます。 -->
                        </p>
                    <li class="service-list-item-img service-list-item-img-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu02.png" alt="">
                    </li>
                </ul>

                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu03.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">食材が一流、職人も一流
                        </h2>
                        <p class="service-text">石井花壇の料理人は料亭で20年経験を積んだものばかり。
                            その時の最も旬な食材を、最高の調理でお届けします。
                            また、お料理への細かいご要望にもお答えできますので、
                            お気軽にお申し付けください。
                        </p>
                        <p class="service-text-atention">
                            <!-- ＊全室お部屋より日本海を望むことができます。  -->
                        </p>
                    </li>
                </ul>
            </div>
        </section>

    </main>
    <?php get_template_part('include/footer'); ?>

    <?php get_footer(); ?>

    </footer>

</html>