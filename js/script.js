var icon_play = document.getElementById("icon_play");
var icon_equalizer = document.getElementById("icon_equalizer");
var music_player = document.getElementById("music-player");


function play_music(music_path){
    var icon_play = document.getElementById("icon_play");
    var icon_equalizer = document.getElementById("icon_equalizer");
    var music_player = document.getElementById("music-player");
    var mmm = document.getElementById("mmm");
    music_player.setAttribute("src",music_path);
    music_player.play();
    icon_play.style.display ="none";
    icon_equalizer.style.display="block";

  
}

// function icon_load(music_path){
//     icon_play.style.display="none";
//     icon_equalizer.style.display="block";
// }




