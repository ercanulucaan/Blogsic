<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <title><?= $meta['title'] ?></title>
   <meta name="keywords" content="<?= $meta['keywords'] ?>" />
   <meta name="description" content="<?= $meta['description'] ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="shortcut icon" type="image/x-icon" href="<?= url($settings['site_favicon_path']) ?>" />
   <link rel="stylesheet" href="<?= url('public/css/bootstrap.min.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/LineIcons.2.0.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/animate.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/tiny-slider.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/glightbox.min.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/main.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/reset.css') ?>" />
   <link rel="stylesheet" href="<?= url('public/css/responsive.css') ?>" />

</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve
         your experience and security.
      </p>
      <![endif]-->
   <?= $content ?>
   <script src="<?= url('public/js/bootstrap.min.js') ?>"></script>
   <script src="<?= url('public/js/count-up.min.js') ?>"></script>
   <script src="<?= url('public/js/wow.min.js') ?>"></script>
   <script src="<?= url('public/js/tiny-slider.js') ?>"></script>
   <script src="<?= url('public/js/glightbox.min.js') ?>"></script>
   <script src="<?= url('public/js/imagesloaded.min.js') ?>"></script>
   <script src="<?= url('public/js/isotope.min.js') ?>"></script>
   <script src="<?= url('public/js/main.js') ?>"></script>
   <script type="text/javascript">
      GLightbox({
         'href': 'https://www.youtube.com/watch?v=BqI0Q7e4kbk&t=1s',
         'type': 'video',
         'source': 'youtube', //vimeo, youtube or local
         'width': 900,
         'autoplayVideos': true,
      });
      tns({
         container: '.client-logo-carousel',
         slideBy: 'page',
         autoplay: true,
         autoplayButtonOutput: false,
         mouseDrag: true,
         gutter: 15,
         nav: false,
         controls: false,
         responsive: {
            0: {
               items: 1,
            },
            540: {
               items: 2,
            },
            768: {
               items: 3,
            },
            992: {
               items: 4,
            },
            1170: {
               items: 6,
            }
         }
      });
      var slider = new tns({
         container: '.home-slider',
         slideBy: 'page',
         autoplay: false,
         mouseDrag: true,
         gutter: 0,
         items: 1,
         nav: true,
         controls: false,
         controlsText: [
            '<i class="lni lni-arrow-left prev"></i>',
            '<i class="lni lni-arrow-right next"></i>'
         ],
         responsive: {
            1200: {
               items: 1,
            },
            992: {
               items: 1,
            },
            0: {
               items: 1,
            }

         }
      });
      var slider = new tns({
         container: '.testimonial-slider',
         slideBy: 'page',
         autoplay: false,
         mouseDrag: true,
         gutter: 0,
         items: 1,
         nav: true,
         controls: false,
         controlsText: [
            '<i class="lni lni-arrow-left prev"></i>',
            '<i class="lni lni-arrow-right next"></i>'
         ],
         responsive: {
            1200: {
               items: 2,
            },
            992: {
               items: 1,
            },
            0: {
               items: 1,
            }

         }
      });
      imagesLoaded('#container', function() {
         var elem = document.querySelector('.grid');
         var iso = new Isotope(elem, {
            // options
            itemSelector: '.grid-item',
            masonry: {
               columnWidth: '.grid-item'
            }
         });

         let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
         filterButtons.forEach(e =>
            e.addEventListener('click', () => {
               let filterValue = event.target.getAttribute('data-filter');
               iso.arrange({
                  filter: filterValue
               });
            })
         );
      });
   </script>
</body>

</html>