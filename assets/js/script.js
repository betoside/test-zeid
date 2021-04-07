$(document).ready(function(){

    $('.nav-main a[href^="#"]').on('click', function(e) {
        console.log($(this).attr('href'));
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 500);
    });
    
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 500) {
            document.querySelector('.botao-topo').style.width = '40px';
        } else {
            document.querySelector('.botao-topo').style.width = '';
        }
    });

    document.querySelector('.botao-topo').addEventListener('click',()=>{
        console.log('pah');
        jQuery('body,html').animate({
            scrollTop: 0
          }, 800);
         return false;
    });
});


window.onload = ()=>{
    document.querySelector('.menu-mobile').addEventListener('click',()=>{
    // console.log('hey');
    if (document.querySelector('.nav-main').style.display == 'flex') {
            document.querySelector('.nav-main').style.display = 'none';
        } else {
            document.querySelector('.nav-main').style.display = 'flex';
        }
    })
};

