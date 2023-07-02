<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/page_style.css">
</head>

<body>
    <?php get_template_part('include/header'); ?>

    <main class="js-main">

        <?php get_template_part('include/modal'); ?>

        <section class="page-mainvisurl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/onsen-header.png" alt="">
            <h1 class="page-mainvisurl-header-title">
                温泉
            </h1>
        </section>


        <section class="service">
            <div class="service-inner">
            <?php get_template_part('include/breadcrumb'); ?>

                <div class="content-text">
                    <p>心も身体も癒やす汐の温泉。<br>
                        湯あたりしにくく、赤ちゃんから年配の方までどなたでもゆっくりと安心して入っていただけます。<br>
                        柔らかく優しい湯にじっくりと漬かれば、心身共にリラックスできます。</p>
                </div>


                <ul class="service-list-box" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/onsen01.png" alt="">
                    </li>
                    <li class="service-list-item-txt">
                        <h2 class="service-title">貸し切り露天風呂「雲居の湯」
                        </h2>
                        <p class="service-text">弱酸性の湯質が優しく肌を包み込むような心地よさ<br>
                            最上階の露天風呂「雲居の湯」では、湯冷めしにくい食塩泉を<br>
                            温海の町並みを遠方に望みながら・・・
                        </p>
                        <p class="service-text-atention">
                            <!-- ＊部屋数に限りがございます。<br>
                            ＊洗い場はないため、お体を先に大浴場でお流しになって頂く必要があります。 -->
                        </p>
                    </li>
                </ul>

                <ul class="service-list-box service-list-box-2" data-aos="fade-up" data-aos-duration="3000">
                    <li class="service-list-item-txt service-list-item-txt-2">
                        <h2 class="service-title">美肌を促す乳白色の硫黄泉を
                        </h2>
                        <p class="service-text">
                            まじりっけなしの白いにごり湯。鳥海山から引いた酸性の強い硫酸塩泉を、<br>
                            たっぷりと掛け流しています。<br>
                            四季の移り変わりを、天然温泉の湯に浸りながら味わってください。
                        </p>
                        <p class="service-text-atention">
                            <!-- ＊お庭は複数のお客様と囲む形になります。<br>
                            ＊部屋数に限りがあります。<br>
                            ＊ご希望の方は「お抹茶/500円」をルームサービスさせていただきます。 -->
                        </p>
                    <li class="service-list-item-img service-list-item-img-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/onsen02.png" alt="">
                    </li>

                    </li>
                </ul>

            </div>
        </section>

        <section class="onsen-kono ">
            <div class="inner">
                <h2 class="service-title">温泉の効能
                </h2>


                <dl class="onsen-kono-box " data-aos="fade-up" data-aos-duration="3000">
                    <div class="onsen-kono-list">
                        <dt class="onsen-kono-title">効能</dt>
                        <dd class="onsen-kono-data">神経痛・慢性関節リューマチ・腰痛・冷え性・慢性婦人病・うちみなど</dd>
                    </div>
                    <div class="onsen-kono-list">

                        <dt class="onsen-kono-title">泉質</dt>
                        <dd class="onsen-kono-data">ナトリウム・カルシウム-塩化物泉</dd>
                    </div>
                    <div class="onsen-kono-list">
                        <dt class="onsen-kono-title">飲用効果</dt>
                        <dd class="onsen-kono-data">弱塩化物泉は肌にやわらかなため、高齢者や病後の回復期によく、飲用すれば慢性便秘や慢性消化
                            器病に効果があります。</dd>
                    </div>
                </dl>
            </div>
        </section>

    </main>

    <?php get_template_part('include/footer'); ?>

    <?php get_footer(); ?>

    </footer>
</html>