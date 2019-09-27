let default_view = "slider";

function switch_layout(layout) {
    if (layout != default_view) {
        document.getElementById(layout).style.display = 'block';
        document.getElementById(default_view).style.display = 'none';
        default_view = layout;
    }

}

function show_map(params) {
    // Create a new instance of the map class
    var my_map = L.map(
        params, {
            center: [-1.37924965, 36.69550797],
            zoom: 11,
        });

    setInterval(() => {
        my_map.invalidateSize();
    }, 100);

    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?', {
        attribution: '<a href="http://mutall.co.ke">Mutall</a>'
    }).addTo(my_map);

    var landIcon = L.icon({
        iconUrl: 'img/marker.png',
        iconSize: [20, 20],
        popupAncor: [-3, -76],
    });

    var land_marker = L.marker(
        [-1.382003, 36.696138], {
            icon: landIcon
        }).addTo(my_map);

    land_marker.bindPopup('<b>Land For Sale</b><br/>3km From Main Road').openPopup();

}
show_map('map1');
show_map('map2');