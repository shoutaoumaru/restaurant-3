<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>  
</head>

<body class="animsition">
  <div class="superwrapper">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="pc-header">
          <ul class="pc-header__list">
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a></li>
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">Menu</a></li>
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>/news">News</a></li>
          </ul>
        </div>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a href="tel:092-686-7954"><i class="icon-tel"></i></a></li>
          <li><a target="_blank" href="https://www.hotpepper.jp/"><i class="icon-net"></i></a></li>
          <li><a href="https://goo.gl/maps/CyWuFwBDtuB9U6Ld7" target="_blank"><i class="icon-map"></i></a></li>
        </ul>
      </nav>
      <!-- /.sp-navbtn -->
    </header>
    <!-- /#header -->
    <div id="top" class="p-top ">
      <div class="top__wrapper">
        <div class="hero">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/paella@sp.jpg" />
                <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/paella@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_1@sp.jpg " />
                <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_1@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/store_3@sp.jpg " />
                <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/store_3@pc.jpg" />
              </div>
            </div>
          </div>
        </div>
        <div class="sub-title-name">
          <p>RivRound</p>
        </div>
        <a class="scrolldown" href="#">Scroll</a>
      </div>
    </div>
    <!-- /#top -->
    <section id="message" class="p-message">
      <div class="c-container">
        <h2 class="p-message__tit clip-js left">
          <p class="c-txt-lr">Message</p>
          <span class="c-txt-xs">メッセージ</span>
        </h2>
        <div class="p-message__txt clip-js left">
          <p class="c-txt-sm">RivRoundからお客様へ<br class="view-pc">私達が大切にしている事
          </p>
        </div>
        <div class="p-message__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/store_3@pc.jpg" alt="">
          <div class="img-txt clip-js left">
            <p>福岡の街で一番愛される、<br class="view-pc">ダイニングカフェでありたい。
            </p>
          </div>
          <div class="c-txt-vertical clip-js bottom">
            <p>MESSAGE</p>
          </div>
        </div>
      </div>
    </section>
    <!-- /#message -->
    <section id="about" class="p-about">
      <div class="c-container">
        <h2 class="p-about__tit clip-js left">
          <p class="c-txt-lr">About</p>
          <span class="c-txt-xs">RivRoundについて</span>
        </h2>
        <div class="p-about__txt appear up">
          <p class="c-txt-sm item">様々の料理の楽しみ方をお届けする<br class="view-pc">RivRoundのコンセプト
          </p>
        </div>
        <div class="p-about__sub-txt appear up">
          <p class="c-txt-xs item">きょう、この街で、あの人と。<br class="view-pc">テーブルにきらめく美味しいお肉と時間。<br
              class="view-pc">カジュアルにたのしむディナーも、大切な人のお祝いも。<br class="view-pc">RivRoundで、しあわせのひとときを。
          </p>
        </div>
        <div class="p-about__photo appear up">
          <div class="p-about__img left item">
            <img class="parallax-down" src="<?php echo get_template_directory_uri(); ?>/images/home/yakitori.jpg" alt="">
          </div>
          <div class="p-about__img right item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
          </div>
        </div>
        <div class="cover-bg clip-js-bg skew"></div>
        <div class="c-txt-vertical clip-js bottom">
          <p>About RivRound</p>
        </div>
      </div>
    </section>
    <!-- /#about -->
    <section id="menu" class="p-menu">
      <div class="p-menu__container">
        <h2 class="p-menu__tit clip-js left">
          <p class="c-txt-lr">Menu</p>
          <span class="c-txt-xs">メニュー</span>
        </h2>
        <div class="p-menu__txt clip-js left">
          <p class="c-txt-sm">RivRoundの人気メニューたち
          </p>
        </div>
        <div class="p-menu__slider-wrapper">
          <div class="p-menu__slider hero clip-js left">
            <div class="swiper-container2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/steak_3@pc.jpg" />
                  <p class="menu-name">menu1</p>
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/pasta@pc.jpg" />
                  <p class="menu-name">menu2</p>
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/salad_1@pc.jpg" />
                  <p class="menu-name">menu3</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-menu__slider hero clip-js left">
            <div class="swiper-container3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/sushi_1@pc.jpg" />
                  <p class="menu-name">menu1</p>
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" />
                  <p class="menu-name">menu2</p>
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/yakitori.jpg" />
                  <p class="menu-name">menu2</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="view-more">
          <a class="view-more__link animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">
            <span>MENU LIST</span></a>
        </div>
        <div class="c-txt-vertical clip-js bottom">
          <p>MENU</p>
        </div>
      </div>
    </section>
    <!-- /#menu -->
    <section id="special" class="p-special">
      <div class="c-container">
        <h2 class="p-special__tit clip-js left">
          <p class="c-txt-lr">Speciality</p>
        </h2>
        <div class="p-special__wrapper appear right">
          <div class="p-special__img left item">
            <img class="parallax-rt" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_2@sp.jpg" alt="">
          </div>
          <div class="p-special__txt">
            <h3>
              <span class="txt01 item">”じゅわっ”</span>
              <span class="txt02 item">”とろっ”</span><br>
              <span class="txt03 item">溢れる肉汁、溶けるような美味しさ。</span>
            </h3>
          </div>
          <div class="p-special__img right item">
            <img class="parallax-lt" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_3@sp.jpg" alt="">
          </div>
        </div>
        <div class="cover-bg clip-js-bg skew2"></div>
        <div class="c-txt-vertical clip-js bottom">
          <p>Speciality</p>
        </div>
      </div>
    </section>
    <!-- /#special -->
    <section id="information" class="p-info">
      <div class="c-container">
        <h2 class="p-info__tit clip-js left">
          <p class="c-txt-lr">Information</p>
          <span class="c-txt-xs">インフォメーション</span>
        </h2>
        <div class="p-info__wrapper appear up">
          <ul class="p-info__list item">
            <li class="p-info__item">
              <span>住所</span>
              <p>〒812-0011</p>
              <p>福岡県福岡市博多区博多駅前<br>3-27-25,第二岡部ビル9F</p>
              <p><span>TEL:</span><a href="tel:092-686-7954">092-686-7954</a></p>
              <a class="g-map" href="https://goo.gl/maps/mhtAv9khM8E8tXuE9">Google Map</a>
            </li>
            <li class="p-info__item">
              <span>営業時間</span>
              <p>lunch</p>
              <p>11:30 - 15:00(LO14:30)</p>
              <p>Dinner</p>
              <p>17:00 - 23:00(LO22:00)</p>
            </li>
            <li class="p-info__item">
              <span>定休日</span>
              <p>水曜日</p>
              <p>年末年始</p>
            </li>
            <li class="p-info__item">
              <span>支払い方法</span>
              <p>カード可</p>
              <p>(VISA、MASTER、JCB、AMEX、Diners)</p>
              <p>電子マネー可</p>
              <p>(交通系、PayPay、iD、nanaco、WAON)</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /#information -->
    <section id="instagram" class="p-insta">
      <div class="c-container">
        <h2 class="p-insta__tit clip-js left">
          <p class="c-txt-lr">Instagram</p>
          <span class="c-txt-xs">インスタグラム</span>
        </h2>
        <div class="p-insta-img">
        <?php echo apply_filters('the_content', '[instagram-feed]'); ?>
        </div>
      </div>
    </section>
    <!-- /#instagram -->
    <section id="news" class="p-news">
      <div class="c-container">
        <h2 class="p-news__tit clip-js left">
          <p class="c-txt-lr">News</p>
          <span class="c-txt-xs">お知らせ</span>
        </h2>
        <div class="p-news__wrapper appear up">
          <ul class="p-news__list item">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
              <li class="p-news__item">
                <a class="p-news__link animsition-link" href="<?php the_permalink(); ?>">
                <div class="thomneil">
                <?php the_post_thumbnail(); ?>
                </div>
                  <span class="p-news__date"><?php echo get_the_date(); ?></span>
                  <p><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="view-more">
            <a class="view-more__link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">
              <span>NEWS LIST</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- /#news -->
    <footer class="p-footer">
      <div class="c-container">
        <div class="p-footer__sns">
          <div class="sns-insta">
            <a class="sns-link" href="https://www.instagram.com/"><i></i></a>
          </div>
          <div class="sns-fb">
            <a class="sns-link" href="https://www.facebook.com/"><i></i></a>
          </div>
        </div>
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo.png" alt="">
        </div>
        <div class="copyright">
          &copy; RivRound.inc
        </div>
      </div>
    </footer>
    <!-- /#footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">MENU</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->
  <?php get_footer(); ?>
</body>

</html>