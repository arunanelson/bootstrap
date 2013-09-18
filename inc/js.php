<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo BASE_URL; ?>fluid_files/jquery.js"></script>
<script src="<?php echo BASE_URL; ?>js/jquery-migrate-1.2.1.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/holder.js"></script>
<script type="text/javascript"> Cufon.now(); </script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-transition.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-alert.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-modal.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-dropdown.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-scrollspy.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-tab.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-tooltip.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-popover.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-button.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-collapse.js"></script>
<script src="<?php echo BASE_URL; ?>fluid_files/bootstrap-typeahead.js"></script>
<!-- include jQuery + carouFredSel plugin -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo BASE_URL; ?>js/BodoniBook-Cufon_italic_400.font.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/GillSans.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.cssmap.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery-scrollto.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo BASE_URL; ?>js/isuggest.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/gen_validatorv31.js" type="text/javascript"></script>
<script type="text/javascript">
        Cufon.replace('#favHeader', { fontFamily: 'GillSans-Cufon' });
		Cufon.replace('#pageTitle', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.footer-text a', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.footer-bottom', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.navi a', { fontFamily: 'GillSans-Cufon' });
		Cufon.replace('.nav-header', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.footer-header', { fontFamily: 'BodoniBook-Cufon', fontWeight: 'bold' });
        Cufon.replace('.carousel-control', { fontFamily: 'GillSans-Cufon' });
        Cufon.replace('.fav-product-heading', { fontFamily: 'BodoniBook-Cufon' });
		Cufon.replace('.stores', { fontFamily: 'BodoniBook-Cufon', fontSize: '18px' });
		Cufon.replace('.article_title', { fontFamily: 'BodoniBook-Cufon', fontSize: '26px' });
		Cufon.replace('.headline', { fontFamily: 'BodoniBook-Cufon', fontSize: '26px' });
	    Cufon.replace('.article_date', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
		Cufon.replace('.article_body', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
        Cufon.replace('.article_left', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
		Cufon.replace('.fav-product-detail', { fontFamily: 'GillSans-Cufon' });
	    Cufon.replace('#city', { fontFamily: 'BodoniBook-Cufon', fontSize: '28px', fontWeight: 'bold' });
	    Cufon.replace('#thank-you', { fontFamily: 'BodoniBook-Cufon', fontSize: '28px', fontWeight: 'bold' });
		Cufon.replace('#sales', { fontFamily: 'GillSans-Cufon', fontSize: '19px' });
		Cufon.replace('.bigger', { fontFamily: 'GillSans-Cufon', fontSize: '16px' });

    </script>
<!-- optionally include helper plugins -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/helper-plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/helper-plugins/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/helper-plugins/jquery.transit.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>nivo-slider/jquery.nivo.slider.js">
</script><script src="<?php echo BASE_URL; ?>js/modernizr.custom.79241.js"></script>
<script type="text/javascript">
    $(window).load(function() {
		$("a[rel^='prettyPhoto']").prettyPhoto();
			$('body').on('click', '.btn-xs', function(){
					
					if(i == 0)
					{
						$(".summary").hide();
						$(".specs").show();
						Cufon.replace('.specs', { fontFamily: 'GillSans-Cufon', fontSize: '10px' }); 
						$(this).text("View Details >>");
						i = 1;
					}
					else
					{
						$(".specs").hide();
						$(".summary").show();
						$(this).text("View Specifications >>");
						i = 0;
					}
			    });
								
				$(".fav-product-heading").click(function(){
					$(this).parent().parent().find("a[rel^='prettyPhoto']")[0].click()
				});
				
				$('body').on('mouseenter, mouseover', '.prod_colour_option', function(){
					$("#fullResImage").attr('src', '<?php echo BASE_URL; ?>img/catalog/' + $(this).attr("data-color"));
					$(".pp_code").html("<span class=\"pull-left\">"+ $(this).attr("data-item-code") +"</span><span style=\"margin-left:30px\">"+ $(this).attr("data-decoration-code") +"</span>");
					Cufon.replace('.pp_code', { fontFamily: 'GillSans-Cufon', fontSize: '12px' }); 

			    });
				$('body').on('mouseout, mouseleave', '.prod_colour_option', function(){
					$("#fullResImage").attr('src', '<?php echo BASE_URL; ?>img/catalog/' + $(this).attr("data-item-img") + '_big.png');
					$(".pp_code").html("<span class=\"pull-left\">"+ $(this).attr("data-orig-itemcode") +"</span><span style=\"margin-left:30px\">"+ $(this).attr("data-orig-coddec") +"</span>");
					Cufon.replace('.pp_code', { fontFamily: 'GillSans-Cufon', fontSize: '12px' }); 
			    });
				
				$('body').on('click', '#twitter, #faceBook, .twitterWhite, .faceBookWhite, .pInterestWhite, .instaGramWhite', function(){
					window.open($(this).attr('data-url'), "_blank");
			    });
				
    }); 
</script>
<script>
        !function ($) {
            $(function () {
			$("div[data-tooltip]").tooltip({placement:"top"});
			$(".scrollItem").click(function(event) {
				event.preventDefault();	
				if(window.location.toString().indexOf('who_we_are') < 0)
				{
					window.location = '<?php echo BASE_URL; ?>who_we_are/' + $(this).attr("href");
				}

				$($(this).attr("href")).ScrollTo({
						duration: 1000,
						easing: 'easeInQuad'
					});	
					window.location.hash = $(this).attr("href");	
				});
				$(".logo").click(function(){
					window.location = "<?php echo BASE_URL; ?>";
					});
				$('#iSearch').iSuggest({ url: '<?php echo BASE_URL; ?>inc/results/mysql_suggestions_results.php'});
                if($('#flip'))
				{
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
				}
            })
        }(window.jQuery)
 </script>