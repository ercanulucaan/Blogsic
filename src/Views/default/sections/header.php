<header class="header navbar-area">
   <div class="toolbar-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-9 col-12">
               <div class="toolbar-contact">
                  <p><i class="lni lni-envelope"></i><a href="mailto:info@ulucan.net"><?= $settings['business_email'] ?></a></p>
                  <p><i class="lni lni-phone"></i><a href="tel:905528521496"><?= $settings['business_tel'] ?></a></p>
                  <p><i class="lni lni-map-marker"></i> <?= $settings['business_address'] ?></p>
               </div>
            </div>
            <div class="col-lg-4 col-md-3 col-12">
               <div class="toolbar-sl-share">
                  <ul>
                     <li><a href="https://facebook.com/ulucanmedya" target="_blank"><i class="lni lni-facebook-filled"></i></a></li>
                     <li><a href="https://instagram.com/ulucanmedya" target="_blank"><i class="lni lni-instagram"></i></a></li>
                     <li><a href="https://twitter.com/ulucanmedya" target="_blank"><i class="lni lni-twitter-original"></i></a></li>
                     <li><a href="https://wa.me/905528521496" target="_blank"><i class="lni lni-whatsapp"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-12">
            <div class="nav-inner">
               <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="<?= url() ?>">
                     <img src="<?= url($settings['site_header_logo_path']) ?>" alt="<?= $settings['site_title'] ?>">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="toggler-icon"></span>
                     <span class="toggler-icon"></span>
                     <span class="toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                     <ul id="nav" class="navbar-nav m-auto">
                        <li class="nav-item">
                           <a class="page-scroll <?= (current_url() === url('anasayfa') ? 'active' : '') ?>" href="<?= url('anasayfa') ?>">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                           <a class="page-scroll <?= (current_url() === url('hakkimizda') ? 'active' : '') ?>" href="<?= url('hakkimizda') ?>">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                           <a class="page-scroll <?= (current_url() === url('hizmetlerimiz') ? 'active' : '') ?>" href="<?= url('hizmetlerimiz') ?>">Hizmetlerimiz</a>
                        </li>
                        <li class="nav-item">
                           <a class="page-scroll <?= (current_url() === url('portfoy') ? 'active' : '') ?>" href="<?= url('portfoy') ?>">Portföy</a>
                        </li>
                        <li class="nav-item">
                           <a class="page-scroll <?= (current_url() === url('haberler') ? 'active' : '') ?>" href="<?= url('haberler') ?>">Haberler</a>
                        </li>
                        <li class="nav-item">
                           <a class="page-scroll <?= (current_url() === url('iletisim') ? 'active' : '') ?>" href="<?= url('iletisim') ?>">İletişim</a>
                        </li>
                     </ul>
                  </div>
                  <div class="button">
                     <a href="https://wa.me/905528521496" class="btn white-bg mouse-dir">Hızlı Teklif Al <span class="dir-part"></span></a>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>