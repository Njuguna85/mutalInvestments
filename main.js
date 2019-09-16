let default_view = "slider";

function switch_layout(layout){
    if(layout != default_view){
        document.getElementById(layout).style.display = 'block';
        document.getElementById(default_view).style.display = 'none';
        default_view = layout;
    }

}
