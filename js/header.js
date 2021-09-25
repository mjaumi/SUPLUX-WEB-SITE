/**
 * this is to animate the nav toggle button
 */
 var toggleBtn = document.getElementById('nav_toggle_btn');
 var nav = document.getElementsByClassName('nav_menu');
 
 toggleBtn.onclick = function(){
 
    toggleBtn.classList.toggle('toggle_active');
    nav[0].classList.toggle('nav_visible');
 }

 /**
 * this is animating the header logo
 * */
document.getElementById('logo').addEventListener('mouseout', function(){

    var polyLines = document.getElementById("logo").getElementsByClassName("logo_hover_line");

    polyLines[0].classList.add("logo_hover_out_line");
    polyLines[1].classList.add("logo_hover_out_line");

});