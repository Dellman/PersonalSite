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
        // console.log($heightModifier);
        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            // Add in the nav height and remove 5px from the required div offset
            // if (windowPos + $navHeight + 30 >= divPos ) {
            //     getArticle(theID);
            // }
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

   animateImages($(document.getElementById('PicOfMe')));

    function getArticleImages(hashID){

        var id = hashID.slice(1);
        var $articleEle = $(document.getElementById(id));
        var $img = $($articleEle.find('img')[0]);
        if ($img.hasClass("right") || $img.hasClass('left')) {
            animateImages($img);
        }
    }

    var $docWidth  = $(document).width();
    // Make RIT logo on right side for tablets
    if ($docWidth > 800){
      animateImages($(document.getElementById('PicOfMe')));
   }
    if ($docWidth < 1100){
      var $pic = $(document.getElementById("RIT"));
      $pic.removeClass('left');
      $pic.addClass('right');
      $pic.appendTo('#education');
   }

    function animateImages(img){
        img.animate({
            left: "0px",
            opacity: 1,
            filter: 'alpha(opacity=50)'
        }, 750);
    }

    //Contact Form https://codepen.io/jaycbrf/pen/iBszr/
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please fill in a comment'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});