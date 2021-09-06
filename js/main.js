
/**
 * this is animating the header logo
 * */
document.getElementById('logo').addEventListener('mouseout', function(){

    var polyLines = document.getElementById("logo").getElementsByClassName("logo_hover_line");

    polyLines[0].classList.add("logo_hover_out_line");
    polyLines[1].classList.add("logo_hover_out_line");

});

/**
 * this is animating the hero section headlines
 */
var videoHero = document.getElementById('hero_video');

var heroTitle1 = document.getElementById('hero_title_1');
var heroTitle2 = document.getElementById('hero_title_2');

videoHero.addEventListener("timeupdate", function () {
    
    if (videoHero.currentTime > 1) {
        
        heroTitle1.classList.add('title_1');
    }

    if (videoHero.currentTime > 2) {
       
        heroTitle2.classList.add('title_2');
    }

    if (videoHero.currentTime > videoHero.duration - 0.5) {
        
        heroTitle2.classList.remove('title_2');
        heroTitle1.classList.remove('title_1');
    }
});

/**
 * this is to animate the sign up button 
 */
var sigUpBtnText = document.getElementById('nav_link_btn');
var sigUpBtn = document.getElementById('nav_btn_bg');

sigUpBtn.addEventListener('mouseover', function (){

    sigUpBtnText.classList.add('sign_up_btn_hover');
    sigUpBtnText.classList.remove('sign_up_btn');
});

sigUpBtn.addEventListener('mouseleave', function (){

    sigUpBtnText.classList.remove('sign_up_btn_hover');
    sigUpBtnText.classList.add('sign_up_btn');
});

var toggleBtn = document.getElementById('nav_toggle_btn');

toggleBtn.onclick = function(){

    toggleBtn.classList.toggle('toggle_active');
}