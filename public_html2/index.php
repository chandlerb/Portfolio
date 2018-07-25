<!DOCTYPE html>
<html>
   <head>
   <title>Chandler Brown</title>
   <link rel="shortcut icon" type="image/x-icon" href="css/images/tab_icon.png" />
      <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
   </head>
   <body onload="fade_in()">
   <div id="wrapper">
      <div id="menu_icon">
        <img onclick="menu_click_fromhome()" id="menu" src="css/images/menu_b.png">
      </div>
      <div id="menu_fill">
      </div> 
      <div id="content">
        <div id="center_img">
          <img id="name" src="css/images/name2.png">
        </div>

        <div id="icons">
          <a id="l_con" target="_blank" href="https://arizona.joinhandshake.com/users/3769331"><img src="css/images/handshake.png"></a>
          <a id="lc_con" target="_blank" href="https://www.linkedin.com/in/chandlerbrown12"><img src="css/images/linkedin.png"></a>
          <a id="rc_con" target="_blank" href="https://github.com/chandlerb"><img src="css/images/github.svg"></a>
          <a id="r_con" target="_blank" href="https://www.facebook.com/profile.php?id=1365361923"><img src="css/images/facebook.png"></a>
        </div>
      </div>
    </div>
   </body>
</html>

<script> 



function fade_in(){
  document.getElementById("name").style.opacity = "1";
  document.getElementById("name").style.transition = "All 2s";  
}

/* impliment to exit the menu options */
function menu_click(){
  /* this is how to remove the color for content change the parent 
  and the choldren follow the same styling */

  document.getElementById("menu_fill").style.opacity = "1";
  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?mode=menu_options", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) {
          document.getElementById("menu_fill").innerHTML = anObj.responseText; /* addition */
          document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click_exit()" id="menu" src="css/images/menu_c.png">';
        }
        }
}
/* impliment to exit the menu options */
function menu_click_fromhome(){
  /* this is how to remove the color for content change the parent 
  and the choldren follow the same styling */
  
  document.getElementById("menu_fill").style.opacity = "1";
  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?home=true", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) {
          document.getElementById("menu_fill").innerHTML = anObj.responseText; /* addition */
          document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click_exit()" id="menu" src="css/images/menu_c.png">';
        }
        }
}

function menu_click_exit(){
  /*  need to find a way to change the menu icon to white
  when the user is on the skills page  */
  document.getElementById("menu_fill").innerHTML = "";
  document.getElementById("menu_fill").style.opacity = "0";
  document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click()" id="menu" src="css/images/menu_b.png">';
}


function home(){
  document.getElementById("menu_fill").innerHTML = "";
  document.getElementById("menu_fill").style.opacity = "0";
  document.getElementById("menu_fill").style.transition = "All 1s";

  document.getElementById("menu_icon").style.backgroundColor = "rgba(24, 23, 36, .8)";
  document.getElementById("menu_icon").style.color = "rgba(0, 0, 0, .8)";
  document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click()" id="menu" src="css/images/menu_b.png">';

  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?mode=home", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) { 
          document.getElementById("content").innerHTML = anObj.responseText;
          document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click_fromhome()" id="menu" src="css/images/menu_b.png">';
        }
    }
  document.getElementById("wrapper").style.height = "0%";
  document.getElementById("wrapper").style.backgroundColor = "rgba(255, 255, 255, .0)";
  document.getElementById("wrapper").style.transition = "All 2s";
}

function about(){
  document.getElementById("menu_fill").innerHTML = "";
  document.getElementById("menu_fill").style.opacity = "0";
  document.getElementById("menu_fill").style.transition = "All 1s";

  document.getElementById("menu_icon").style.backgroundColor = "rgba(24, 23, 36, .8)";
  document.getElementById("menu_icon").style.color = "rgba(0, 0, 0, .8)";
  document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click()" id="menu" src="css/images/menu_b.png">';

  document.getElementById("wrapper").style.height = "100%";
  document.getElementById("wrapper").style.backgroundColor = "rgba(255, 255, 255, .9)";
  document.getElementById("wrapper").style.transition = "All 2s";

  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?mode=about", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) { 
          document.getElementById("content").innerHTML = anObj.responseText;
          document.getElementById("content").style.color = "rgba(24, 23, 36, 1)";
          document.getElementById("content").style.transition = "All 4s";
          }
      }
}

function skills(){
  document.getElementById("menu_fill").innerHTML = "";
  document.getElementById("menu_fill").style.opacity = "0";
  document.getElementById("menu_fill").style.transition = "All 1s";

  document.getElementById("menu_icon").style.backgroundColor = "rgba(24, 23, 36, .8)";
  document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click()" id="menu" src="css/images/menu_b.png">';

  document.getElementById("wrapper").style.height = "100%";
  document.getElementById("wrapper").style.backgroundColor = "rgba(98, 97, 106, .9)";
  document.getElementById("wrapper").style.transition = "All 2s";

  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?mode=skills", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) { 
          document.getElementById("content").innerHTML = anObj.responseText;
          document.getElementById("content").style.color = "rgba(255,255,255, 1)";
          document.getElementById("content").style.transition = "All 4s";
          }
      }
}

function portfolio(){
  document.getElementById("menu_fill").innerHTML = "";
  document.getElementById("menu_fill").style.opacity = "0";
  document.getElementById("menu_fill").style.transition = "All 1s";

  document.getElementById("menu_icon").style.backgroundColor = "rgba(24, 23, 36, .8)";
  document.getElementById("menu_icon").style.color = "rgba(0, 0, 0, .8)";
  document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click()" id="menu" src="css/images/menu_b.png">';

  document.getElementById("wrapper").style.height = "100%";
  document.getElementById("wrapper").style.backgroundColor = "rgba(255, 255, 255, .9)";
  document.getElementById("wrapper").style.transition = "All 2s";

  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?mode=portfolio", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) { 
          document.getElementById("content").innerHTML = anObj.responseText;
          document.getElementById("content").style.color = "rgba(24, 23, 36, 1)";
          document.getElementById("content").style.transition = "All 4s";
          }
      }
}

function contact(){
  document.getElementById("menu_fill").innerHTML = "";
  document.getElementById("menu_fill").style.opacity = "0";
  document.getElementById("menu_fill").style.transition = "All 1s";

  document.getElementById("menu_icon").style.backgroundColor = "rgba(24, 23, 36, .8)";
  document.getElementById("menu_icon").style.color = "rgba(0, 0, 0, .8)";
  document.getElementById("menu_icon").innerHTML = '<img onclick="menu_click()" id="menu" src="css/images/menu_b.png">';

  document.getElementById("wrapper").style.height = "100%";
  document.getElementById("wrapper").style.backgroundColor = "rgba(241, 245, 248, .9)";
  document.getElementById("wrapper").style.transition = "All 2s";

  var anObj = new XMLHttpRequest();
    anObj.open("GET", "controller.php?mode=contact", true);    
    anObj.send();
    anObj.onreadystatechange = function () {
        if (anObj.readyState == 4 && anObj.status == 200) { 
          document.getElementById("content").innerHTML = anObj.responseText;
          document.getElementById("content").style.color = "rgba(24, 23, 36, 1)";
          document.getElementById("content").style.transition = "All 4s";
          }
      }
}

function test($var) {
  document.getElementById("content").style.color = "rgba(255, 255, 255, 0)";
  document.getElementById("content").style.transition = "All 1.5s";

  document.getElementById("wrapper").style.height = "0%";
  document.getElementById("wrapper").style.backgroundColor = "rgba(255, 255, 255, .9)";
  
  setTimeout(function(){
    if($var == 'home'){
      home();
    }
    if($var == 'about'){
      about();
    }
    if($var == 'skills'){
      skills();
    }
    if($var == 'portfolio'){
      portfolio();
    }
    if($var == 'contact'){
      contact();
    }
    
}, 1750);
}


</script>