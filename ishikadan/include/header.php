    <!-- ヘッダー -->
    <header class="header js-header">
        <div class="header-inner inner">
            <div class="header-left">
                <div class="header-logo-warp">

                    <?php if(is_page()){?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sub-header-logo.png" alt="">
                    <?php } else if(is_home()){?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top-header-logo.png" alt="">
                    <?php } else{}?>
                    
                </div>
                <div class="header-center">
                    <ul class="header-menu-box">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>oheya">
                            <li class="header-menu-item">お部屋</li>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>oryouri">
                            <li class="header-menu-item">お料理</li>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>onsen">
                            <li class="header-menu-item">温泉</li>
                        </a>
                    </ul>
                </div>
            </div>
            <a class="header-right js-modal">
                <p class="btn" href="">宿泊予約
                </p>
                <span id="js-modal" class="material-symbols-outlined">
                    calendar_month
                </span>
            </a>
            <div class="openbtn1"><span></span><span></span><span></span></div>
        </div>
    </header>
