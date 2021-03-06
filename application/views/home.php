<?php defined('SYSPATH') OR die('No direct script access.') ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
  <head>
    <meta charset="UTF-8">
    <title>Maison Bourdon :: <?php echo __('Sunglasses Made in Montréal') ?></title>
    <meta name="description" content="Maison Bourdon &ndash; <?php echo __('Sunglasses Made in Montréal') ?>">
    <meta name="keywords" content="Maison Bourdon, Montréal, <?php echo __('sunglasses') ?>, <?php echo __('handmade') ?>, <?php echo __('design') ?>">
    <meta name="author" content="Maison Bourdon">
    <link rel="icon" type="image/x-icon" href="<?php echo $URL_base ?>assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $URL_base ?>assets/images/apple_touch_icons/touch_icon_iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $URL_base ?>assets/images/apple_touch_icons/touch_icon_ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $URL_base ?>assets/images/apple_touch_icons/touch_icon_iphone_retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $URL_base ?>assets/images/apple_touch_icons/touch_icon_ipad_retina.png">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300">
    <link rel="stylesheet" type="text/css" href="<?php echo $URL_base ?>assets/css/site.css">
    <!--[if IE]><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.flexslider').flexslider({
          controlNav: "thumbnails",
          slideshow: false
        });
        $.scrollIt({
          topOffset: -86
        });
        $('#banner').easyFader({
          slideDur: 3000,
          fadeDur: 1000
        });
        $(window).scroll(function(){
          if($(window).scrollTop() >= $('header').outerHeight()) {
            $("header").addClass("header_scroll");
          } else {
            $("header").removeClass("header_scroll");
          }
        });
      });
    </script>
  </head>
  <body>
    <header>
      <div>
        <h1>Maison Bourdon</h1>
        <nav>
          <ul>
            <li><a data-scroll-nav="0" class="active"><i class="fa fa-chevron-circle-up fa-2x"></i><span><?php echo __('top') ?></span></a></li>
            <li><a data-scroll-nav="1"><?php echo __('about us') ?></a></li>
            <li><a data-scroll-nav="2"><?php echo __('models') ?></a></li>
            <li><a data-scroll-nav="3"><?php echo __('Fauna') ?></a></li>
            <li><a data-scroll-nav="4"><?php echo __('purchase') ?></a></li>
            <li><a href="<?php echo $URL_base; if ($lang == 'en') echo 'fr/'; else echo 'en/' ?>"><?php if ($lang == 'en') echo 'français'; else echo 'English' ?></a></li>
          </ul>
        </nav>
      </div>
      <ul>
        <li><a href="https://www.facebook.com/MaisonBourdonMontreal" class="facebook" title="facebook"><span>Facebook</span> <i class="fa fa-facebook-square"></i></a></li>
        <li><a href="https://twitter.com/maisonbourdon" class="twitter" title="twitter"><span>Twitter</span> <i class="fa fa-twitter"></i></a></li>
        <li><a href="http://www.pinterest.com/maisonbourdon/" class="pinterest" title="pinterest"><span>Pinterest</span> <i class="fa fa-pinterest"></i></a></li>
        <li><a href="http://www.youtube.com/watch?v=aL4ZbnsryVc" class="youtube" title="youtube"><span>YouTube</span> <i class="fa fa-youtube"></i></a></li>
      </ul>
    </header>
    <div id="banner" class="fader" data-scroll-index="0">
<?php
  $slides = array(1, 2, 3, 4);
  foreach ($slides as $slide):
?>
      <img class="slide" src="<?php echo $URL_base ?>assets/images/banners/banner_<?php echo $slide ?>.jpg" alt="banner <?php echo $slide ?>">
<?php endforeach ?>
    </div>
    <div id="about_us" data-scroll-index="1">
      <h2><?php echo __('Sunglasses Made in Montréal') ?></h2>
      <div class="description">
        <p><?php echo __('Maison Bourdon is a small Montréal design boutique specializing in sunglasses since 2013. Its founder, Jean-François Bourdon, is proud to offer a quality product designed and fabricated in Québec.') ?></p>
        <p><?php echo __('Many models of sunglasses are available, for women and men, in a wide variety of colors. Every frame is moulded in plastic and fitted with assorted lenses from professional optical laboratories. All materials respect Canadian health and safety norms.') ?></p>
      </div>
      <div class="image">
        <img src="<?php echo $URL_base ?>assets/images/photos/presentoir.jpg" width="389px" height="270px" alt="showcase">
        <img src="<?php echo $URL_base ?>assets/images/photos/modelgirl_1.jpg" width="180px" height="270px" alt="model 1">
        <img src="<?php echo $URL_base ?>assets/images/photos/modelgirl_2.jpg" width="180px" height="270px" alt="model 2">
      </div>
    </div>

    <div id="models" data-scroll-index="2">
      <h2><?php echo __('Models') ?></h2>
      <div class="slide">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <h3>MB-1</h3>
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB1_a1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB1_a1.jpg" alt="MB-1 photo 1"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB1_a2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB1_a2.jpg" alt="MB-1 photo 2"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB1_b1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB1_b1.jpg" alt="MB-1 photo 3"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB1_b2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB1_b2.jpg" alt="MB-1 photo 4"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB1_c1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB1_c1.jpg" alt="MB-1 photo 5"></li>
              <!-- <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB1_c2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB1_c2.jpg" alt="MB-1 photo 6"></li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <h3>MB-2</h3>
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB2_a1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB2_a1.jpg" alt="MB-2 photo 1"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB2_a2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB2_a2.jpg" alt="MB-2 photo 2"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB2_b1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB2_b1.jpg" alt="MB-2 photo 3"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB2_b2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB2_b2.jpg" alt="MB-2 photo 4"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <h3>MB-3</h3>
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_a1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_a1.jpg" alt="MB-3 photo 1"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_a2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_a2.jpg" alt="MB-3 photo 2"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_b1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_b1.jpg" alt="MB-3 photo 3"></li>

              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_c2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_c2.jpg" alt="MB-3 photo 6"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_c1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_c1.jpg" alt="MB-3 photo 5"></li>
              <!-- <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_b2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_b2.jpg" alt="MB-3 photo 4"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB3_c3.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB3_c3.jpg" alt="MB-3 photo 7"></li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <h3>MB-4</h3>
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB4_a1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB4_a1.jpg" alt="MB-4 photo 1"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB4_a2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB4_a2.jpg" alt="MB-4 photo 2"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB4_b1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB4_b1.jpg" alt="MB-4 photo 3"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB4_b2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB4_b2.jpg" alt="MB-4 photo 4"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <h3>MB-5</h3>
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB5_a1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB5_a1.jpg" alt="MB-5 photo 1"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB5_a2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB5_a2.jpg" alt="MB-5 photo 2"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <h3>MB-6</h3>
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB6_a1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB6_a1.jpg" alt="MB-6 photo 1"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB6_a2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB6_a2.jpg" alt="MB-6 photo 2"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB6_b1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB6_b1.jpg" alt="MB-6 photo 3"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB6_b2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB6_b2.jpg" alt="MB-6 photo 4"></li>
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB6_c1.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB6_c1.jpg" alt="MB-6 photo 5"></li>
              <!-- <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB6_c2.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB6_c2.jpg" alt="MB-6 photo 6"></li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="slide" id="boitier">
        <div class="flexslider_wrapper">
          <div class="flexslider">
            <ul class="slides">
              <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/boitier.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/boitier.jpg" alt="boitier"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="fauna" data-scroll-index="3">
      <img src="<?php echo $URL_base ?>assets/images/fauna/fauna.png" width="506px" height="146px" alt="fauna">
      <p id="fauna_tagline"><?php echo __('Canada\'s only chimpanzee sanctuary') ?></p>
      <p id="fauna_donation"><?php echo __('10$ of every purchase goes to ') ?><a href="http://www.faunafoundation.org"><?php echo __('Fauna Foundation') ?></a></p>
    </div>
    <div id="purchase" data-scroll-index="4">
      <h2><?php echo __('Available in these stores') ?></h2>
      <div id="stores">
        <div class="vcard">
          <div class="org">Diffusion Griff 3000</div>
          <div class="url"><a href="http://www.annedeshalla.com">http://www.annedeshalla.com</a></div>
          <div class="tel">+1 (514) 398-0761</div>
          <div class="adr">
            <div class="street-address">350 Saint-Paul Est</div>
            <div class="locality">Montréal, Québec</div>
            <div class="country">Canada</div>
          </div>
        </div>
        <div class="vcard">
          <div class="org">Signatures Québécoises</div>
          <div class="url"><a href="http://www.signaturesquebecoises.com">http://www.signaturesquebecoises.com/</a></div>
          <div class="tel">+1 (418) 648-9976</div>
          <div class="adr">
            <div class="street-address">560 rue St Joseph Est</div>
            <div class="locality">Québec, Québec</div>
            <div class="country">Canada</div>
          </div>
        </div>
        <div class="vcard">
          <div class="org"><?php echo __('Mano Online Store') ?></div>
          <div class="url"><a href="http://www.mano.ca/catalogsearch/result/?q=maison+bourdon">http://www.mano.ca/</a></div>
          <div class="tel">+1 (844) 991-4500</div>
        </div>
        <div class="vcard">
          <div class="org">L'Autre Couture</div>
          <div class="adr">
            <div class="street-address">Promenades de la Cathédrale</div>
            <div class="street-address">625 rue Ste-Catherine Ouest</div>
            <div class="locality">Montréal, Québec</div>
            <div class="country">Canada</div>
          </div>
        </div>
      </div>
      <h2><?php echo __('Buy direct') ?></h2>
      <address>
        <p class="title">Maison Bourdon</p>
        <p class="email"><a href="mailto:infos@maisonbourdon.com">infos@maisonbourdon.com</a></p>
        <p class="tel">+1 (514) 452-7649</p>
      </address>
      <div id="representatives">
        <div class="vcard">
          <div class="title"><?php echo __('Sales Representative in France') ?></div>
          <div class="name">Sébastien Laloy <span class="sep">::</span> <span class="email"><a href="mailto:sebastienlaloy@gmail.com">sebastienlaloy@gmail.com</a></span></div>
        </div>
      </div>
      <ul>
        <li><span><?php echo __('In Canada, all models start at') ?> <span class="dollar_sign">&dollar;</span><span class="price">199</span> <abbr title="<?php echo __('canadian dollar') ?>">CAD</abbr> <small> + <?php echo __('taxes') ?> <br/><span class="note">* <?php echo __('call for other countries') ?></span></small></span></li>
        <li><span><i class="fa fa-file-text"></i> <a href="<?php echo $URL_base ?>assets/guarantee/guarantee.pdf"><?php echo __('Maison Bourdon Guarantee') ?></a></span></li>
      </ul>
    </div>
    <footer>
      <p>
        <span class="copyright"><span class="sign">&#169;</span> <span class="year">2015</span> Maison Bourdon</span>
      </p>
    </footer>
    <script type="text/javascript">
      <!-- Load Site Javascript -->
      document.writeln("<script type='text/javascript' src='<?php echo $URL_base ?>assets/js/site.min.js'><" + "/script>");
      <!-- Piwik -->
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://maisonbourdon.com/stats/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="http://maisonbourdon.com/stats/piwik.php?idsite=1" style="border:0;" alt="piwikinvisibleimage"></p></noscript>
    <!-- End Piwik Code -->
  </body>
</html>
