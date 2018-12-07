<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/12/18
 * Time: 00:06
 */

include 'PHP/connectDB.php';

?>

<html>

<head>
    <title><?php echo $websiteName ?> - About</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="css/bamboostyle.css"/>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Compass Starter by Ariona, Rian</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->

</head>

<body>
<div class="row">
    <div class="col-md-4">

        <h1 id="coord" style="padding-left: 20px; padding-top: 20px">My First Google Map</h1>

        <div id="googleMap" style="width:100%;height:600px;"></div>

        <script>

            var pos;

            function myMap() {
                var mapProp = {
                    center: new google.maps.LatLng(51.508742, -0.120850),
                    zoom: 5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                var infoWindow = new google.maps.InfoWindow;

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Location found.');
                        infoWindow.open(map);
                        map.setCenter(pos);

                        geocodeLatLng(pos.lat, pos.lng, map, infoWindow);
                        document.getElementById("coord").textContent = "Coords : " + convertToDms(pos.lat, false) + " " + convertToDms(pos.lng, true);
                    }, function () {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }

                var marker = new google.maps.Marker({position: pos});
                marker.setMap(map);
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }

            function convertToDms(dd, isLng) {
                var dir = dd < 0
                    ? isLng ? 'W' : 'S'
                    : isLng ? 'E' : 'N';

                var absDd = Math.abs(dd);
                var deg = absDd | 0;
                var frac = absDd - deg;
                var min = (frac * 60) | 0;
                var sec = frac * 3600 - min * 60;
                // Round it to 2 decimal points.
                sec = Math.round(sec * 100) / 100;
                return deg + "°" + min + "'" + sec + '"' + dir;
            }

            function geocodeLatLng(lat, lng, map, infowindow) {
                var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
                var geocoder = new google.maps.Geocoder;
                geocoder.geocode({'location': latlng}, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(11);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                            document.getElementById("location").textContent = results[3].formatted_address;
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
            }

        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ&callback=myMap"></script>
    </div>
    <div class="col-md-8">
        <div class="site-content">
            <div class="forecast-table">
                <div class="container">
                    <div class="forecast-container">
                        <div class="today forecast">
                            <div class="forecast-header">
                                <div class="day">
                                    <?php
                                    setlocale(LC_TIME, array('fr_FR.UTF-8', 'fr_FR@euro', 'fr_FR', 'french'));
                                    echo(ucfirst(strftime('%A')));
                                    ?>
                                </div>
                                <div class="date">
                                    <?php
                                    echo(strftime('%d'));
                                    echo " ";
                                    echo(ucfirst(strftime('%b')));
                                    ?>
                                </div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div id="location" class="location">blblbllb</div>
                                <div class="degree">
                                    <div class="num">23<sup>o</sup>C</div>
                                    <div class="forecast-icon">
                                        <img src="images/icons/icon-1.svg" alt="" width=90>
                                    </div>
                                </div>
                                <span><img src="images/icon-umberella.png" alt="">20%</span>
                                <span><img src="images/icon-wind.png" alt="">18km/h</span>
                                <span><img src="images/icon-compass.png" alt="">East</span>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">
                                    <?php
                                    $timeValueOfADay = (24 * 60 * 60);
                                    echo(ucfirst(strftime('%A', time() + 1 * $timeValueOfADay)));
                                    ?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-3.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">
                                    <?php
                                    echo(ucfirst(strftime('%A', time() + 2 * $timeValueOfADay)));
                                    ?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-5.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day"><?php
                                    echo(ucfirst(strftime('%A', time() + 3 * $timeValueOfADay)));
                                    ?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-7.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day"><?php
                                    echo(ucfirst(strftime('%A', time() + 4 * $timeValueOfADay)));
                                    ?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-12.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day"><?php
                                    echo(ucfirst(strftime('%A', time() + 5 * $timeValueOfADay)));
                                    ?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-13.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day"><?php
                                    echo(ucfirst(strftime('%A', time() + 6 * $timeValueOfADay)));
                                    ?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-14.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

    </div>
</div>

</body>

</html>