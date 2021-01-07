addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }


    // You can also use "jQuery(window).load(function() {"
    jQuery(function () {
      // Slideshow 1
      jQuery("#slider1").responsiveSlides({
         auto: true,
         nav: true,
         speed: 500,
         namespace: "callbacks",
      });
    });



            jQuery(document).ready(function(jQuery) {
                jQuery(".scroll").click(function(event){     
                    event.preventDefault();
                    jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top},900);
                });
            });
