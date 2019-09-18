<?php
require 'dbase.php';

$db = new dbase();
$key_towns = $db->get_keyTowns();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>

    <!-- Leaflet css cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />

    <!-- Leaflet from a CDN -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
    <title>Plot For Sale</title>

</head>

<body>
    <!-- Property Details -->
    <section class="content-wrapper">
        <div class="showcase">
            <h1 class="sale-tag">4 Plots on Sale at Olkeri, Ngong.</h1>
            <!-- <div class="slide-container"> -->
            <div id="slider" class="cycle-slideshow"
                data-cycle-pager-template="<a class='thumb'href='#'><img src='{{src}}'></a>">
                <span class="cycle-pager"></span>
                <span class="cycle-prev">&#9001;</span>
                <span class="cycle-next">&#9002;</span>

                <img src="img/A toward BC  and D.JPG" alt="">
                <img src="img/A toward D.jpg" alt="">
                <img src="img/E towards A.jpg" alt="">
                <img src="img/E towards D.jpg" alt="">
                <img src="img/from main road toward point A.jpg" alt="">
                <img src="img/point E towards BC.jpg" alt="">
                <img src="img/mutation.jpeg" alt="Mutation">
                <img src="img/map.jpg" alt="Map">
            </div>

            <!-- Div to hold the map -->
            <div id="map1" style="height: 390px;"></div>

            <!-- Switch Buttons -->
            <div class="buttons">
                <button class="images_btn button" onclick="switch_layout('slider')">Images</button>
                <div class="or"></div>
                <button class="map_btn button" onclick="switch_layout('map1')">Map</button>
            </div>
        </div>

        <div class="content-land">
            <div class="land_details">
                <h4>Land Details</h4>
                <p id="size">Size: 1/8th Acre(0.045ha) Each</p>
                <p id="price">Price: 4M (Negotiable) </p>
                <p id="dist">Accessibility: 100m From Tarmac</p>
            </div>

            <!-- Owner Details -->
            <div class="land_owner">
                <h4>Contact</h4>
                <p id="name">Paulo Sokoto</p>
                <p class="phone-no">+254 717 900902 </p>
            </div>

            <div class="caption" id="caption">
                <p>Four portions of land on Sale in Olkeri Area. Its Location is well accesible and
                    boasts amenities such as
                    closeness to a Olkeri Police Post, Olkeri Water Project with the area being in a residential
                    community.
                    The area is also accesible from numerous entry points i.e. From Ngong-Kiserian Road, Karen,
                    Rongai-Gataka Road.
                </p>
            </div>
            <!-- Div to hold the map -->
            <div id="map2" style="height: 220px;"></div>
        </div>
    <script>
    var key_towns = <?php echo JSON_encode($key_towns); ?>;
        for(var 1=0; i< key_towns.length; i++){
            L.marker(
                key_towns
            )
        }
    
    </script>
    </section>

</body>
<script src="main.js"></script>

</html>