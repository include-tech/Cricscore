function cricket_league_open_tab(evt, cityName) {
    var cricket_league_i, cricket_league_tabcontent, cricket_league_tablinks;
    cricket_league_tabcontent = document.getElementsByClassName("tabcontent");
    for (cricket_league_i = 0; cricket_league_i < cricket_league_tabcontent.length; cricket_league_i++) {
        cricket_league_tabcontent[cricket_league_i].style.display = "none";
    }
    cricket_league_tablinks = document.getElementsByClassName("tablinks");
    for (cricket_league_i = 0; cricket_league_i < cricket_league_tablinks.length; cricket_league_i++) {
        cricket_league_tablinks[cricket_league_i].className = cricket_league_tablinks[cricket_league_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});