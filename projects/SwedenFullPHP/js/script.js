// https://css-tricks.com/snippets/jquery/smooth-scrolling/
$(document).ready(function() {
  var $windowWidth = $(window).width();
  if ($windowWidth >= 1120) {
    $('#fullpage').fullpage();
  }
  $("a[href*='#']:not([href='#'])").click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
  });
});

// Get the modal
var modal = document.getElementById("myModal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var modalPicture = document.getElementById("modal-image");

function loadNumbers(currentCount, maxCount){
  var numberText = document.getElementById("numbertext");
  var paragraph = document.createElement("p");
  paragraph = "";
  while(numberText.firstChild){
    numberText.removeChild(numberText.firstChild);
  }
  paragraph = currentCount  + "/" + maxCount;
  numberText.append(paragraph);
}

function jumpPicture(maxCount){
  var dotContainer = document.getElementById("dot-container");
  while(dotContainer.firstChild){
    dotContainer.removeChild(dotContainer.firstChild);
  }
  for (var i = 0; i < maxCount; i++) {
    var span = document.createElement("span");
    span.className = "dot";
    span.dataset.count = i;
    span.addEventListener("click", function(){
      // Separate Picture path to change that part of the source url
      var spliceSpot = modalPicture.src.indexOf("images");
      var imgPath = modalPicture.src.substr(spliceSpot);
      // var urlPath = modalPicture.src.substr(0, spliceSpot);
      modalPicture.src = imgPath.replace(modalPicture.dataset.count, this.dataset.count);
      modalPicture.dataset.count = this.dataset.count;
      loadNumbers(parseInt(modalPicture.dataset.count) + 1, modalPicture.dataset.maxCount);
      activateDot(this.dataset.count);
    });
      dotContainer.append(span);
  }
}

function activateDot(count){
  var dots = document.getElementsByClassName("dot");
  for (var i = 0; i < dots.length; i++) {
    dots[i].className = "dot";
    if (dots[i].dataset.count == count) {
      dots[i].className = "dot dot-active";
    }
  }
}

function addClick(img, imgAmount){
  img.addEventListener('click', function() {
    modalPicture.src = this.src;
    modal.style.display = "block";
    modalPicture.dataset.count = this.dataset.count;
    modalPicture.dataset.maxCount = imgAmount;
    loadNumbers(parseInt(modalPicture.dataset.count) + 1, parseInt(modalPicture.dataset.maxCount));
    jumpPicture(parseInt(modalPicture.dataset.maxCount));
    activateDot(this.dataset.count);
  });
}

function changePicture(img, direction){
  // Keep track of where the user is and the last Picture number
  var count = parseInt(img.dataset.count);
  var maxCount = parseInt(modalPicture.dataset.maxCount);
  // Separate url parts to avoid number issues
  var spliceSpot = modalPicture.src.indexOf("images");
  var imgPath = modalPicture.src.substr(spliceSpot);
  var urlPath = modalPicture.src.substr(0, spliceSpot);
  if (direction == "backwards") {
    if (count != 0) {
      var newPath = urlPath + imgPath.replace(count, count - 1);
      modalPicture.src = newPath;
      modalPicture.dataset.count = count - 1;
      activateDot(modalPicture.dataset.count);
    }
    else{
      var newPath = urlPath + imgPath.replace(count, maxCount - 1);
      modalPicture.src = newPath;
      modalPicture.dataset.count = maxCount - 1;
      activateDot(modalPicture.dataset.count);
    }
  }
  else{
    if (count != maxCount - 1) {
      var newPath = urlPath + imgPath.replace(count, count + 1);
      modalPicture.src = newPath;
      modalPicture.dataset.count = count + 1;
      activateDot(modalPicture.dataset.count);
    }
    else{
      var newPath = urlPath + imgPath.replace(count, 0);
      modalPicture.src = newPath;
      modalPicture.dataset.count = 0;
      activateDot(modalPicture.dataset.count);
    }
  }
  loadNumbers(parseInt(modalPicture.dataset.count) + 1, maxCount);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}