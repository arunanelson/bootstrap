<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="fluid_files/holder.js"></script>
<script type="text/javascript"> Cufon.now(); </script>
<script src="fluid_files/jquery.js"></script>
<script src="fluid_files/bootstrap-transition.js"></script>
<script src="fluid_files/bootstrap-alert.js"></script>
<script src="fluid_files/bootstrap-modal.js"></script>
<script src="fluid_files/bootstrap-dropdown.js"></script>
<script src="fluid_files/bootstrap-scrollspy.js"></script>
<script src="fluid_files/bootstrap-tab.js"></script>
<script src="fluid_files/bootstrap-tooltip.js"></script>
<script src="fluid_files/bootstrap-popover.js"></script>
<script src="fluid_files/bootstrap-button.js"></script>
<script src="fluid_files/bootstrap-collapse.js"></script>
<script src="fluid_files/bootstrap-carousel.js"></script>
<script src="fluid_files/bootstrap-typeahead.js"></script>
<!-- include jQuery + carouFredSel plugin -->
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/BodoniBook-Cufon_italic_400.font.js" type="text/javascript"></script>
<script src="js/GillSans-Cufon_500.font.js" type="text/javascript"></script>
<script src="js/jquery.cssmap.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
        Cufon.replace('#favHeader', { fontFamily: 'GillSans-Cufon', fontWeight: 'bold' });
		Cufon.replace('#whatsNew', { fontFamily: 'GillSans-Cufon', fontWeight: 'bold' });
        Cufon.replace('.footer-text a', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.footer-bottom', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.navi a', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.footer-header', { fontFamily: 'BodoniBook-Cufon', fontWeight: 'bold' });
        Cufon.replace('.carousel-control', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.fav-product-heading', { fontFamily: 'BodoniBook-Cufon' });
		Cufon.replace('.stores', { fontFamily: 'BodoniBook-Cufon', fontSize: '18px' });
		Cufon.replace('.article_title', { fontFamily: 'BodoniBook-Cufon', fontSize: '26px' });
	    Cufon.replace('.article_date', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
		Cufon.replace('.article_body', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
        Cufon.replace('.article_left', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
		Cufon.replace('.sales_left', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
		Cufon.replace('.fav-product-detail', { fontFamily: 'GillSans-Cufon' });
	    Cufon.replace('#newYork', { fontFamily: 'BodoniBook-Cufon', fontSize: '28px', fontWeight: 'bold' });
		Cufon.replace('#sales', { fontFamily: 'GillSans-Cufon', fontSize: '18px', fontWeight: 'bold' });

    </script>
<!-- optionally include helper plugins -->
<script type="text/javascript" src="js/helper-plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/helper-plugins/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="js/helper-plugins/jquery.transit.min.js"></script>
<script type="text/javascript" src="js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
<script>
        !function ($) {
            $(function () {
                $('#myCarousel').carousel();
                $('#flip').carouFredSel({
                    auto: false,
                    width: 960,
                    height: 250,
                    items: {
                        visible: 3,
                        minimum: 3,
                        width: "variable",
                        height: "variable"
                    },
                    prev: '#prev2',
                    next: '#next2',
                    mousewheel: true,
                    swipe: {
                        onMouse: true,
                        onTouch: true
                    }
                });
            })
        }(window.jQuery)
 </script>