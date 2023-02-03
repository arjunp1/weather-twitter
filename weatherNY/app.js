// SELECT ELEMENTS
const iconElement6 = document.querySelector(".weather-icon6");
const tempElement6 = document.querySelector(".temperature-value6 p");
const descElement6 = document.querySelector(".temperature-description6 p");
const locationElement6 = document.querySelector(".location6 p");
const dayElement6 = document.querySelector(".day-value6")

const iconElement7 = document.querySelector(".weather-icon7");
const tempElement7 = document.querySelector(".temperature-value7 p");
const descElement7 = document.querySelector(".temperature-description7 p");
const locationElement7 = document.querySelector(".location7 p");
const dayElement7 = document.querySelector(".day-value7")

const iconElement8 = document.querySelector(".weather-icon8");
const tempElement8 = document.querySelector(".temperature-value8 p");
const descElement8 = document.querySelector(".temperature-description8 p");
const locationElement8 = document.querySelector(".location8 p");
const dayElement8 = document.querySelector(".day-value8")

const iconElement9 = document.querySelector(".weather-icon9");
const tempElement9 = document.querySelector(".temperature-value9 p");
const descElement9 = document.querySelector(".temperature-description9 p");
const locationElement9 = document.querySelector(".location9 p");
const dayElement9 = document.querySelector(".day-value9")

const iconElement10 = document.querySelector(".weather-icon10");
const tempElement10 = document.querySelector(".temperature-value10 p");
const descElement10 = document.querySelector(".temperature-description10 p");
const locationElement10 = document.querySelector(".location10 p");
const dayElement10 = document.querySelector(".day-value10")

// App data
const weather2 = {};

weather2.temperature = {
    unit: "celsius"
}

// APP CONSTS AND VARS
const KELVIN2 = 273;

// GET WEATHER FROM API PROVIDER
let apiNOWNY = 'https://api.openweathermap.org/data/2.5/weather?q=new+york&appid=94724cd14db5eb6e2a40ddca60060b2d';
let apiNY = `https://api.openweathermap.org/data/2.5/forecast?q=new+york&appid=94724cd14db5eb6e2a40ddca60060b2d`;

fetch(apiNOWNY)
    .then(function(response6) {
        let data6 = response6.json();
        return data6;
    })
    .then(function(data6) {
        weather2.temperature.value6 = Math.floor(data6.main.temp - KELVIN2);
        weather2.description6 = data6.weather[0].description;
        weather2.iconId6 = data6.weather[0].icon;
        weather2.city6 = data6.name;
        weather2.country6 = data6.sys.country;
        weather2.day6 = "Current Weather"

    })
    .then(function() {
        displayWeather6();
    });

// DISPLAY WEATHER TO UI
function displayWeather6() {
    iconElement6.innerHTML = `<img src="weatherNY/icons/${weather2.iconId6}.png"/>`;
    tempElement6.innerHTML = `${weather2.temperature.value6}°<span>C</span>`;
    descElement6.innerHTML = weather2.description6;
    locationElement6.innerHTML = `${weather2.city6}, ${weather2.country6}`;
    dayElement6.innerHTML = weather2.day6;
}

fetch(apiNY)
    .then(function(response7) {
        let data7 = response7.json();
        return data7;
    })
    .then(function(data7) {
        weather2.temperature.value7 = Math.floor(data7.list[0].main.temp - KELVIN);
        weather2.description7 = data7.list[0].weather[0].description;
        weather2.iconId7 = data7.list[0].weather[0].icon;
        weather2.city7 = data7.city.name;
        weather2.country7 = data7.city.country;
        weather2.day7 = data7.list[0].dt_txt;

    })
    .then(function() {
        displayWeather7();
    });

// DISPLAY WEATHER TO UI
function displayWeather7() {
    iconElement7.innerHTML = `<img src="weatherNY/icons/${weather2.iconId7}.png"/>`;
    tempElement7.innerHTML = `${weather2.temperature.value7}°<span>C</span>`;
    descElement7.innerHTML = weather2.description7;
    locationElement7.innerHTML = `${weather2.city7}, ${weather2.country7}`;
    dayElement7.innerHTML = weather2.day7;
}

fetch(apiNY)
    .then(function(response8) {
        let data8 = response8.json();
        return data8;
    })
    .then(function(data8) {
        weather2.temperature.value8 = Math.floor(data8.list[1].main.temp - KELVIN);
        weather2.description8 = data8.list[1].weather[0].description;
        weather2.iconId8 = data8.list[1].weather[0].icon;
        weather2.city8 = data8.city.name;
        weather2.country8 = data8.city.country;
        weather2.day8 = data8.list[1].dt_txt;

    })
    .then(function() {
        displayWeather8();
    });

// DISPLAY WEATHER TO UI
function displayWeather8() {
    iconElement8.innerHTML = `<img src="weatherNY/icons/${weather2.iconId8}.png"/>`;
    tempElement8.innerHTML = `${weather2.temperature.value8}°<span>C</span>`;
    descElement8.innerHTML = weather2.description8;
    locationElement8.innerHTML = `${weather2.city8}, ${weather2.country8}`;
    dayElement8.innerHTML = weather2.day8;
}

fetch(apiNY)
    .then(function(response9) {
        let data9 = response9.json();
        return data9;
    })
    .then(function(data9) {
        weather2.temperature.value9 = Math.floor(data9.list[1].main.temp - KELVIN);
        weather2.description9 = data9.list[1].weather[0].description;
        weather2.iconId9 = data9.list[1].weather[0].icon;
        weather2.city9 = data9.city.name;
        weather2.country9 = data9.city.country;
        weather2.day9 = data9.list[1].dt_txt;

    })
    .then(function() {
        displayWeather9();
    });

// DISPLAY WEATHER TO UI
function displayWeather9() {
    iconElement9.innerHTML = `<img src="weatherNY/icons/${weather2.iconId9}.png"/>`;
    tempElement9.innerHTML = `${weather2.temperature.value9}°<span>C</span>`;
    descElement9.innerHTML = weather2.description9;
    locationElement9.innerHTML = `${weather2.city9}, ${weather2.country9}`;
    dayElement9.innerHTML = weather2.day9;
}

fetch(apiNY)
    .then(function(response10) {
        let data10 = response10.json();
        return data10;
    })
    .then(function(data10) {
        weather2.temperature.value10 = Math.floor(data10.list[1].main.temp - KELVIN);
        weather2.description10 = data10.list[1].weather[0].description;
        weather2.iconId10 = data10.list[1].weather[0].icon;
        weather2.city10 = data10.city.name;
        weather2.country10 = data10.city.country;
        weather2.day10 = data10.list[1].dt_txt;

    })
    .then(function() {
        displayWeather10();
    });

// DISPLAY WEATHER TO UI
function displayWeather10() {
    iconElement10.innerHTML = `<img src="weatherNY/icons/${weather2.iconId10}.png"/>`;
    tempElement10.innerHTML = `${weather2.temperature.value10}°<span>C</span>`;
    descElement10.innerHTML = weather2.description10;
    locationElement10.innerHTML = `${weather2.city10}, ${weather2.country10}`;
    dayElement10.innerHTML = weather2.day10;
}