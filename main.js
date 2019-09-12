let default_view = "slider";

function switch_layout(layout){
    if(layout != default_view){
        document.getElementById(layout).style.display = 'block';
        document.getElementById(default_view).style.display = 'none';
        default_view = layout;
        show_map('map1')
    }

}
function show_map(params, btn) {
    if (btn) {
        btn.setAttribute('disabled', "");
        document.querySelector('#caption').style.display = 'block';
        
    }
    document.querySelector(`#${params}`).classList = 'map';
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
        { icon: customIcon })
        .bindPopup('<strong>Land For Sale</strong><br/>3km From Main Road')
        .addTo(my_map);
}
