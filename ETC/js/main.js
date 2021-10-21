    function aboutus(){
            document.getElementById('aboutus').scrollIntoView({
              behavior: 'smooth'
            });
        }
   
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        
        $('#return-to-top').fadeIn(200);    
    } else {
        $('#return-to-top').fadeOut(200);   
    }
});
$('#return-to-top').click(function() {      
    $('body,html').animate({
        scrollTop : 0                       
    }, 500);
});




let navbar = $(".navbar-wrapper");
$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
    navbar.addClass("sticky");
  } else {
    navbar.removeClass("sticky");
  }
});


let navbar1 = $(".throw");
$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
    navbar1.addClass("low");
  } else {
    navbar1.removeClass("low");
  }
});

navbar-buttons

let navbar2 = $("#navbar");
$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
    navbar2.addClass("bigger");
  } else {
    navbar2.removeClass("bigger");
  }
});

/*const btn = document.querySelector('.eaz');
btn.addEventListener('mouseover', function() {
    btn.style.backgroundColor = 'red';
});*/

/*$(".open").click(function(){
        if($(this).text()=== "+"){
            $(this).text("-");
             $(this).addClass('b').removeClass('r');
        }
        else{
            $(this).text("+"); 
            
        }
         $(".openbutton").toggle(300);
    }); */
