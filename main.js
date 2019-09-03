let default_view = "slide-container";

function switch_layout(layout){
    if(layout != default_view){
        document.getElementsByClassName(layout)[0].style.display = 'block';
        document.getElementsByClassName(default_view)[0].style.display = 'none';
        default_view = layout;
    }

}
