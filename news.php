<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="span12">
        <div class="span3" id="whatsNew" title="In the news?">IN THE NEWS</div>
        <div id="productsWrapper">
          <div id="newsImg"></div>
          <div id="newsArticle">
            <div class="article_title">News Article Title</div>
            <div class="article_date">Article Date</div>
            <div class="article_body"> 
            Quod ii legunt saepius claritas est etiam processus 
            dynamicus qui sequitur mutationem. Doming id quod mazim placerat facer 
            possim assum typi non habent claritatem insitam. Nihil imperdiet est usus 
            legentis in iis qui facit eorum claritatem Investigationes demonstraverunt. 
            Dolor in hendrerit in vulputate velit esse molestie consequat vel illum 
            dolore eu feugiat nulla? Vel eum iriure facilisis at vero eros et accumsan et. 
            Lius consuetudium lectorum mirum est notare quam littera gothica, quam nunc putamus. 
            Congue lectores legere me parum claram anteposuerit litterarum formas humanitatis 
            per seacula quarta decima? Zzril delenit augue duis dolore te: 
            feugait nulla facilisi nam liber tempor? </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="grey_line"></div>
        <?php require_once("inc/favourites.php"); ?>
        <!--/row--> 
      </div>
      <!--/span--> 
    </div>
    <!--/row--> 
    
  </div>
  <?php require_once("inc/footer.php"); ?>
  <!--/.fluid-container--> 
</div>
<?php require_once("inc/js.php"); ?>
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
</body>
</html>