function hideHeader() {
    document.getElementById("header").style.boxShadow = "none";
    document.getElementById("header").style.background = "rgba(255, 255, 255, 0)";
    document.getElementById("brand").style.opacity = "0";
}

window.onscroll = function() {collapseHeader()};

function collapseHeader() {
    if (document.documentElement.scrollTop > 100) {
        if(!document.getElementById("header").classList.contains('collapsed')){
            document.getElementById("header").className = "header collapsed";
        }
    } else {
        if(document.getElementById("header").classList.contains('collapsed')){
            document.getElementById("header").className = "header";
        }
    }
}