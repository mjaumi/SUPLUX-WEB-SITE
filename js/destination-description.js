
const title = document.querySelectorAll('.destination_intro_title');
const description = document.querySelectorAll('.description_text');
const cover = document.querySelectorAll('.destination_intro');

const image1 = document.getElementById('carousel_1');
const image2 = document.getElementById('carousel_2');
const image3 = document.getElementById('carousel_3');

const caption1 = document.querySelector('#carousel_caption_1');
const caption2 = document.getElementById('carousel_caption_2');
const caption3 = document.getElementById('carousel_caption_3');

const fareBi = document.getElementById('fare_bi');
const fareMulti = document.getElementById('fare_multi');
const fareNon = document.getElementById('fare_non');
const fareDd = document.getElementById('fare_dd');
const fareSleeper = document.getElementById('fare_sleeper');

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

    fareNon.innerHTML = "500 BDT";
    fareBi.innerHTML = "1100 BDT";
    fareMulti.innerHTML = "1100 BDT";
    fareDd.innerHTML = "1100 BDT";
    fareSleeper.innerHTML = "1800 BDT";

} else if(queries[0] === 'q=coxsbazar'){

    cover[0].style.backgroundImage = "url('img/coxs-bazar.jpg')";
    title[0].innerHTML = "COX'S BAZAR";
    description[0].innerHTML=" Cox's Bazar is a city, fishing port, tourism centre, and district headquarters in southeastern Bangladesh. It is famous mostly for its long natural sandy beach. It is located 150 km (93 mi) south of the city of Chittagong. Cox's Bazar is also known by the name Panowa, which translates literally as yellow flower. Another old name was Palongkee. It has one of the longest sea beaches in the world.The modern Cox's Bazar derives its name from Captain Hiram Cox, an officer of the British East India Company, a Superintendent of Palongkee outpost. To commemorate his role in refugee rehabilitation work, a market was established and named after him. The city covers an area of 23.4 km2 (9.0 sq mi) with 27 mahallas and 9 wards and as of 2011 had a population of 265,500. Cox's Bazar is connected by road and air with Chittagong.";

    image1.src = "img/inani.jpg";
    image2.src = "img/marine.jpg";
    image3.src = "img/himchori.jpg";

    caption1.innerHTML = "Inani Sea Beach";
    caption2.innerHTML = "Marine Drive";
    caption3.innerHTML = "Himchori";

    fareNon.innerHTML = "800 BDT";
    fareBi.innerHTML = "1800 BDT";
    fareMulti.innerHTML = "1800 BDT";
    fareDd.innerHTML = "1800 BDT";
    fareSleeper.innerHTML = "2500 BDT";
}