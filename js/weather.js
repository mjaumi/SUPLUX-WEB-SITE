$(document).ready(function() {

  const api ={

      key: "ba101ede44acd03cc879ff20206f001a",
      base: "https://api.openweathermap.org/data/2.5/"
  }
    
    navigator.geolocation.getCurrentPosition(success, error);

    function success() {
        
      var queryString = decodeURIComponent(window.location.search);
      queryString = queryString.substring(1);
      var queries = queryString.split("&");

      if(queries[0] === 'q=bandarban'){

        weather('bandarban');
      }
        
      if(queries[0] === 'q=coxsbazar'){

        weather("cox's bazar");
      }
    }

    function error() {
        console.log("There was an error");
    }

    function weather(query) {
      
      var URL = `${api.base}weather?q=${query}&units=metric&APPID=${api.key}`;
      $.getJSON(URL, function(data) {
        display(data);

        console.log(data);
      });
    }
  
    function display(data) {
      var city = data.name.toUpperCase();
      var temp =
        Math.round(data.main.temp_max) +
        "&deg; C | " +
        Math.round(Math.round(data.main.temp_max) * 1.8 + 32) +
        "&deg; F";
      var desc = data.weather[0].description;
      var date = new Date();
  
      var months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ];
  
      var weekday = new Array(7);
      weekday[0] = "Sunday";
      weekday[1] = "Monday";
      weekday[2] = "Tuesday";
      weekday[3] = "Wednesday";
      weekday[4] = "Thursday";
      weekday[5] = "Friday";
      weekday[6] = "Saturday";
  
      if (data.weather[0].main == "Sunny") {
        $(".weathercon").html(
          "<i class='wi wi-day-sunny'></i>"
        );
      } else if(data.weather[0].main == "Haze" || data.weather[0].main == "Smoke"){
        $(".weathercon").html(
          "<i class='wi wi-dust'></i>"
        );
      } else if(data.weather[0].main == "Clouds"){
        $(".weathercon").html(
          "<i class='wi wi-cloudy'></i>"
        );
      } else if(data.weather[0].main == "Thunderstorm"){
        $(".weathercon").html(
          "<i class='wi wi-thunderstorm'></i>"
        );
      }  else if(data.weather[0].main == "Rain"){
        $(".weathercon").html(
          "<i class='wi wi-rain'></i>"
        );
      }
  
      var minutes =
        date.getMinutes() < 11 ? "0" + date.getMinutes() : date.getMinutes();
      var date =
        weekday[date.getDay()].toUpperCase() +
        " | " +
        months[date.getMonth()].toUpperCase().substring(0, 3) +
        " " +
        date.getDate() +
        " | " +
        date.getHours() +
        ":" +
        minutes;
      $(".location").html(city);
      $(".weather").html(data.weather[0].description);
      $(".temp").html(temp);
      $(".date").html(date);
    }
  });
  