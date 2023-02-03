var map;

function loadMap() {
    var london = { lat: 51.50747611284895, lng: -0.12758442858739596 };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: london
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllPOIs(allData)
}

function showAllPOIs(allData) {
    var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data) {
        var content = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = data.name;
        content.appendChild(strong);

        var info = document.createElement('div');
        info.textContent = data.info;
        content.appendChild(info);

        var clickme = document.createElement('div');
        clickme.textContent = data.clickme;
        content.appendChild(clickme);


        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data.lat, data.lng),
            map: map
        });

        marker.addListener('mouseover', function() {
            infoWind.setContent(content);
            infoWind.open(map, marker);

        })

        marker.addListener('click', function() {
            window.location.href = data.wplink;
        })
    })

}

function codeAddress(cdata) {
    Array.prototype.forEach.call(cdata, function(data) {
        var address = data.address;
        geocoder.geocode({ 'address': address }, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                var points = {};
                points.id = data.id;
                points.lat = map.getCenter().lat();
                points.lng = map.getCenter().lng();
                updatePOIWithLatLng(points);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    });
}

function loadMap2() {
    var newyork = { lat: 40.738092293710764, lng: -73.98503534607389 };
    map = new google.maps.Map(document.getElementById('map2'), {
        zoom: 12,
        center: newyork
    });

    var cdata2 = JSON.parse(document.getElementById('data2').innerHTML);
    codeAddress(cdata2);

    var allData2 = JSON.parse(document.getElementById('allData2').innerHTML);
    showAllPOIs(allData2)

}

function showAllPOIs(allData2) {
    var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData2, function(data2) {
        var content = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = data2.name;
        content.appendChild(strong);

        var info = document.createElement('div');
        info.textContent = data2.info;
        content.appendChild(info);

        var clickme = document.createElement('div');
        clickme.textContent = data2.clickme;
        content.appendChild(clickme);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data2.lat, data2.lng),
            map: map
        });

        marker.addListener('mouseover', function() {
            infoWind.setContent(content);
            infoWind.open(map, marker);

        })

        marker.addListener('click', function() {
            window.location.href = data2.wplink;
        })
    })

}

function codeAddress(cdata2) {
    Array.prototype.forEach.call(cdata2, function(data2) {
        var address = data2.address;
        geocoder.geocode({ 'address': address }, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                var points = {};
                points.id = data2.id;
                points.lat = map.getCenter().lat();
                points.lng = map.getCenter().lng();
                updatePOIWithLatLng(points);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    });
}