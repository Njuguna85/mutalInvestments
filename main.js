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

    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?', { attribution: '<a href="http://mutall.co.ke">Mutall</a>' }).addTo(my_map);

    var customIcon = L.icon({
        iconUrl: 'img/marker.png',
        iconSize: [20, 20],
        popupAncor: [-3, -76],

    });

    var land_marker = L.marker(
        [-1.37924965, 36.69550797],
        { icon: customIcon }).addTo(my_map);
    land_marker.bindPopup('<strong>Land For Sale</strong><br/>3km From Main Road').openPopup();
}
show_map('map1');
show_map('map2');