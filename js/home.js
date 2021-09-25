/**
 * this is to get the page back to the top while reloading the page
 */
 window.onunload = function () {
    
    window.location.href = "log-in-or-sign-up.html" + queryString;
  }

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
 * this is to animate the title and the home page sections
 */
new fullpage('#main_content', {

    autoScrolling: true,
    navigation: true,
    anchors: ['home-section', 'about-us-section', 'destinations-section', 'testimonials-section', 'join-us-section', 'contact-us-section', 'developers-section', 'socials-section'],
    navigationTooltips: ['Home', 'About Us', 'Destinations', 'Testimonials', 'Join us', 'Contact us', 'Developers', 'Socials'],
    controlArrows: false,
    slidesNavigation: true,
    onLeave: (origin, destination, direction) => {

        const section = destination.item;
        const sectionPrev = origin.item;
        const titleTopForward = section.querySelectorAll('.title_top');
        const titleTopBackward = sectionPrev.querySelectorAll('.title_top');

        const tltf = new TimelineMax({delay: 0.5});
        const tltb = new TimelineMax();
       
        tltf.fromTo(titleTopForward, 1, {left: '-80%', opacity: 0}, {left: '2%', opacity: 1});
        tltb.fromTo(titleTopBackward, 1, {left: '2%', opacity: 1}, {left: '-80%', opacity: 0});
    }
})
