$(document).ready(function($) {
    // http://callmenick.com/post/single-page-site-with-smooth-scrolling-highlighted-link-and-fixed-navigation
    // Some customizations added
    var aChildren = $("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    // Loop through all of the nav items except for the icon
    for (var i=0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values
    
    // set the year for the footer when the document loads
    var year = new Date().getFullYear();
    var yearEle = document.getElementById("year");
    yearEle.innerText = year;
   

    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();
        var $navHeight = $((document).getElementsByTagName("nav")).height(); //nav height
        var $heightModifier;
        if ($(window).width() > 900) {
            $heightModifier = 80;
        }
        else if ($(window).width() > 500 && $(window).width() < 900){
            $heightModifier = 20;
        }
        else{
            $heightModifier = 0;
        }
        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos + $navHeight + $heightModifier >= divPos && windowPos + $navHeight < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("active");
                if ($heightModifier == 0) {
                    if (windowPos + $navHeight - 250 >= divPos && windowPos + $navHeight < (divPos + divHeight)){
                        getArticleImages(theID);
                    }
                }
                else{
                    getArticleImages(theID);
                }
            } else {
                $("a[href='" + theID + "']").removeClass("active");
            }
        }

        // Slightly modified activating the last section by giving it an additional pixel
        if(windowPos + windowHeight +1 >= docHeight) {
            if (!$("nav li:last-child a").hasClass("active")) {
                var navActiveCurrent = $(".active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("active");
                $("nav li:last-child a").addClass("active");
                getArticleImages(theID);
            }
        }
    });

     $("nav a").click(function(evn){
        var $navHeight = $((document).getElementsByTagName("nav")).height();
        evn.preventDefault();
        this.blur();
        $(this).addClass("active");
        $('html,body').scrollTo(this.hash, this.hash, {offset: -$navHeight});
    });

    $("p a").click(function(){
        this.blur();
    });

   function getArticleImages(hashID){
     var id = hashID.slice(1);
     var $articleEle = $(document.getElementById(id));
     var $img = $($articleEle.find('img')[0]);
     if ($img.hasClass("right") || $img.hasClass('left')) {
         animateImages($img);
     }
   }

   var $docWidth  = $(document).width();
   if ($docWidth > 800){
      animateImages($(document.getElementById('PicOfMe')));
   }
   var $pic = $(document.getElementById("RIT"));
   if ($(window).width() < 1100){
      $pic.removeClass('left');
      $pic.addClass('right');
      $pic.appendTo('#education');
   }
   // Make RIT logo on right side for tablets
   $(window).on('resize', function(){
      var $pic = $(document.getElementById("RIT"));
      if ($(window).width() < 1100){
         $pic.removeClass('left');
         $pic.addClass('right');
         $pic.appendTo('#education');
      }
      else{
         $pic.removeClass('right');
         $pic.addClass('left');
         $pic.prependTo('#education');
      }
   });

   function animateImages(img){
     img.animate({
         left: "0px",
         opacity: 1,
         filter: 'alpha(opacity=50)'
     }, 750);
   }

});