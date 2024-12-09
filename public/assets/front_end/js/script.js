function include(url)
{
  document.write('<script src="'+url+'"></script>');
  return false ;
}
/* DEVICE.JS
========================================================*/
include('js/device.min.js');

/* Easing library
========================================================*/
include('js/jquery.easing.js');


/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')

$(document).on('scroll', function() {
	if ($(document).scrollTop() > 100) {
	      $('.header-inner').addClass('nav-shrink');
		} else {
		$('.header-inner').removeClass('nav-shrink');
	}
});

$('.products-slide').owlCarousel({
	items:5,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:10,
	nav:true,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:false,
	autoplayTimeout:3000,
	autoplayHoverPause:false,
	responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        769:{
          items: 2
        },
        960:{
          items: 3
        },
        1200:{
          items: 5
        }
    }
})

$('.testimonial').owlCarousel({
	items:2,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:15,
	nav:false,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:true,
	autoplayTimeout:3000,
	autoplayHoverPause:false,
	responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        769:{
          items: 1
        },
        960:{
          items: 2
        },
        1200:{
          items: 2
        }
    }
})

$('.similar-prod').owlCarousel({
	items:5,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:10,
	nav:true,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:false,
	autoplayTimeout:3000,
	autoplayHoverPause:false,
	responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        769:{
          items: 2
        },
        960:{
          items: 3
        },
        1200:{
          items: 5
        }
    }
})

//top
$(document).ready(function(){ 
					
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
 
		});



// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 2 ? value = 2 : '';
  value--;
  document.getElementById('number').value = value;
}

function increaseValues(id) {
  var value = parseInt(document.getElementById('number'+id).value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number'+id).value = value;
}

function decreaseValues(id) {
  var value = parseInt(document.getElementById('number'+id).value, 10);
  value = isNaN(value) ? 1 : value;
  value < 2 ? value = 2 : '';
  value--;
  document.getElementById('number'+id).value = value;
}

function opensection(evt, tabsection) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabsection).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

document.getElementById("year").innerHTML = new Date().getFullYear();