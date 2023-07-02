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
            <img src="<?php echo get_template_directory_uri(); ?>/img/oheya-header.png" alt="">
            <h1 class="page-mainvisurl-header-title">
                お部屋
            </h1>
        </section>


        <section class="service">
            <div class="service-inner">
            <?php get_template_part('include/breadcrumb'); ?>

                <div class="content-text">
                    <p>創業より受け継がれてきた石井花壇の和の造り<br>
                        温海の雄大な絶景を堪能していただけるように設計された客室<br>
                        ゆるやかに流れ行く時間に身を委ねて</p>
                </div>


                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/oheya01.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">温泉付き客室
                        </h2>
                        <p class="service-text">温海の源泉かけ流し露天風呂付き客室になります。<br>
                            あなただけの上質な安らぎのひとときを。
                        </p>
                        <p class="service-text-atention">
                            ＊部屋数に限りがございます。<br>
                            ＊洗い場はないため、お体を先に大浴場でお流しになって頂く必要があります。
                        </p>
                    </li>
                </ul>

                <ul class="service-list-box service-list-box-2" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-txt service-list-item-txt-2">
                        <h2 class="service-title">庭園付き客室
                        </h2>
                        <p class="service-text">庭園付きの客室になります。<br>
                            お庭を見ながら、ほっとするひとときをお過ごしください。
                        </p>
                        <p class="service-text-atention">
                            ＊お庭は複数のお客様と囲む形になります。<br>
                            ＊部屋数に限りがあります。<br>
                            ＊ご希望の方は「お抹茶/500円」をルームサービスさせていただきます。
                        </p>
                    <li class="service-list-item-img service-list-item-img-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/oheya02.png" alt="">
                    </li>

                    </li>
                </ul>



                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/oheya03.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">一般客室
                        </h2>
                        <p class="service-text">最もベーシックな客室になります。伝統の中にモダンさを取り入れた<br>
                            内装となっており、とても過ごしやすくしていただけます。
                        </p>
                        <p class="service-text-atention">
                            ＊全室お部屋より日本海を望むことができます。 </p>
                    </li>
                </ul>
            </div>
        </section>
    </main>


    <?php get_template_part('include/footer'); ?>

    <?php get_footer(); ?>

    </footer>


</html>