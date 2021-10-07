
const title = document.querySelectorAll('.destination_intro_title');
const description = document.querySelectorAll('.description_text');
const cover = document.querySelectorAll('.destination_intro');

const image1 = document.getElementById('carousel_1');
const image2 = document.getElementById('carousel_2');
const image3 = document.getElementById('carousel_3');

const caption1 = document.querySelector('#carousel_caption_1');
const caption2 = document.getElementById('carousel_caption_2');
const caption3 = document.getElementById('carousel_caption_3');

var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
var queries = queryString.split("&");

if(queries[0] === 'q=bandarban'){

    cover[0].style.backgroundImage = "url('img/bandarban.jpg')";
    title[0].innerHTML = "BANDARBAN";
    description[0].innerHTML="Bandarban, is a district in South-Eastern Bangladesh, and a part of the Chittagong Division. It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District. Bandarban city is the headquarters of the Bandarban district. Bandarban district (4,479 km2) is not only the most remote district of the country, but also the least populous (population 292,900)";

    image1.src = "img/keokradong.jpg";
    image2.src = "img/bandarban.jpg";
    image3.src = "img/keokradong.jpg";

    caption1.innerHTML = "Keokradong";
    caption2.innerHTML = "Nilgiri";
    caption3.innerHTML = "Nilachol";
}