// SELECT ELEMENTS
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");
const dayElement = document.querySelector(".day-value")

const iconElement2 = document.querySelector(".weather-icon2");
const tempElement2 = document.querySelector(".temperature-value2 p");
const descElement2 = document.querySelector(".temperature-description2 p");
const locationElement2 = document.querySelector(".location2 p");
const dayElement2 = document.querySelector(".day-value2")

const iconElement3 = document.querySelector(".weather-icon3");
const tempElement3 = document.querySelector(".temperature-value3 p");
const descElement3 = document.querySelector(".temperature-description3 p");
const locationElement3 = document.querySelector(".location3 p");
const dayElement3 = document.querySelector(".day-value3")

const iconElement4 = document.querySelector(".weather-icon4");
const tempElement4 = document.querySelector(".temperature-value4 p");
const descElement4 = document.querySelector(".temperature-description4 p");
const locationElement4 = document.querySelector(".location4 p");
const dayElement4 = document.querySelector(".day-value4")

const iconElement5 = document.querySelector(".weather-icon5");
const tempElement5 = document.querySelector(".temperature-value5 p");
const descElement5 = document.querySelector(".temperature-description5 p");
const locationElement5 = document.querySelector(".location5 p");
const dayElement5 = document.querySelector(".day-value5")

// App data
const weather = {};

weather.temperature = {
    unit: "celsius"
}

// APP CONSTS AND VARS
const KELVIN = 273;
// API KEY
const key = "94724cd14db5eb6e2a40ddca60060b2d";

// GET WEATHER FROM API PROVIDER
let apiNOW = 'https://api.openweathermap.org/data/2.5/weather?q=london&appid=94724cd14db5eb6e2a40ddca60060b2d';
let api = `https://api.openweathermap.org/data/2.5/forecast?q=london&appid=94724cd14db5eb6e2a40ddca60060b2d`;

fetch(apiNOW)
    .then(function(response) {
        let data = response.json();
        return data;
    })
    .then(function(data) {
        weather.temperature.value = Math.floor(data.main.temp - KELVIN);
        weather.description = data.weather[0].description;
        weather.iconId = data.weather[0].icon;
        weather.city = data.name;
        weather.country = data.sys.country;
        weather.day = "Current Weather"

    })
    .then(function() {
        displayWeather();
    });

// DISPLAY WEATHER TO UI
function displayWeather() {
    iconElement.innerHTML = `<img src="weather/icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
    dayElement.innerHTML = weather.day;
}

fetch(api)
    .then(function(response2) {
        let data2 = response2.json();
        return data2;
    })
    .then(function(data2) {
        weather.temperature.value2 = Math.floor(data2.list[0].main.temp - KELVIN);
        weather.description2 = data2.list[0].weather[0].description;
        weather.iconId2 = data2.list[0].weather[0].icon;
        weather.city2 = data2.city.name;
        weather.country2 = data2.city.country;
        weather.day2 = data2.list[0].dt_txt;

    })
    .then(function() {
        displayWeather2();
    });

// DISPLAY WEATHER TO UI
function displayWeather2() {
    iconElement2.innerHTML = `<img src="weather/icons/${weather.iconId2}.png"/>`;
    tempElement2.innerHTML = `${weather.temperature.value2}°<span>C</span>`;
    descElement2.innerHTML = weather.description2;
    locationElement2.innerHTML = `${weather.city2}, ${weather.country2}`;
    dayElement2.innerHTML = weather.day2;
}

fetch(api)
    .then(function(response3) {
        let data3 = response3.json();
        return data3;
    })
    .then(function(data3) {
        weather.temperature.value3 = Math.floor(data3.list[1].main.temp - KELVIN);
        weather.description3 = data3.list[1].weather[0].description;
        weather.iconId3 = data3.list[1].weather[0].icon;
        weather.city3 = data3.city.name;
        weather.country3 = data3.city.country;
        weather.day3 = data3.list[1].dt_txt;

    })
    .then(function() {
        displayWeather3();
    });

// DISPLAY WEATHER TO UI
function displayWeather3() {
    iconElement3.innerHTML = `<img src="weather/icons/${weather.iconId3}.png"/>`;
    tempElement3.innerHTML = `${weather.temperature.value3}°<span>C</span>`;
    descElement3.innerHTML = weather.description3;
    locationElement3.innerHTML = `${weather.city3}, ${weather.country3}`;
    dayElement3.innerHTML = weather.day3;
}

fetch(api)
    .then(function(response4) {
        let data4 = response4.json();
        return data4;
    })
    .then(function(data4) {
        weather.temperature.value4 = Math.floor(data4.list[2].main.temp - KELVIN);
        weather.description4 = data4.list[2].weather[0].description;
        weather.iconId4 = data4.list[2].weather[0].icon;
        weather.city4 = data4.city.name;
        weather.country4 = data4.city.country;
        weather.day4 = data4.list[2].dt_txt;

    })
    .then(function() {
        displayWeather4();
    });

// DISPLAY WEATHER TO UI
function displayWeather4() {
    iconElement4.innerHTML = `<img src="weather/icons/${weather.iconId4}.png"/>`;
    tempElement4.innerHTML = `${weather.temperature.value4}°<span>C</span>`;
    descElement4.innerHTML = weather.description4;
    locationElement4.innerHTML = `${weather.city4}, ${weather.country4}`;
    dayElement4.innerHTML = weather.day4;
}

fetch(api)
    .then(function(response5) {
        let data5 = response5.json();
        return data5;
    })
    .then(function(data5) {
        weather.temperature.value5 = Math.floor(data5.list[3].main.temp - KELVIN);
        weather.description5 = data5.list[3].weather[0].description;
        weather.iconId5 = data5.list[3].weather[0].icon;
        weather.city5 = data5.city.name;
        weather.country5 = data5.city.country;
        weather.day5 = data5.list[3].dt_txt;

    })
    .then(function() {
        displayWeather5();
    });

// DISPLAY WEATHER TO UI
function displayWeather5() {
    iconElement5.innerHTML = `<img src="weather/icons/${weather.iconId5}.png"/>`;
    tempElement5.innerHTML = `${weather.temperature.value5}°<span>C</span>`;
    descElement5.innerHTML = weather.description5;
    locationElement5.innerHTML = `${weather.city5}, ${weather.country5}`;
    dayElement5.innerHTML = weather.day5;
}