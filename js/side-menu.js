window.onload = function(){
  
  // Declare variables
  var navbtn = document.getElementById("icon-wrap");
  var icon = navbtn
  var menu = document.getElementById("links");
  var main = document.getElementsByTagName("main")[0];
  var footer = document.getElementsByTagName("footer")[0];
  var overlay = document.getElementById("transparent-overlay");
  var slideState = "closed";

  // Create event listeners
  overlay.addEventListener("click", slide);
  navbtn.addEventListener("click", slide);
  window.addEventListener("resize", responsiveBlur);
    icon.addEventListener("click", iconChange);

  // Function launches on resize which detects if the window size is above a certain amount, will then reset some things like overlay and blur.
  function responsiveBlur(){
    if (window.innerWidth >= 1237){
      // Turn off blur
      footer.style.filter = "none";
      main.style.filter = "none";

      // Hide overlay
      overlay.style.display = "none";
    }
    else if (slideState == "expanded") {
      // Turn on blur
      footer.style.filter = "blur(5px)";
      main.style.filter = "blur(5px)";

      // Show overlay
      overlay.style.display = "block";
    }
  }


  function slide(){
    if (menu.style.left == "0px"){

      // Hide the menu
      menu.style.left = "-310px";

      // Change the slidestate variable to "closed"
      slideState = "closed";


      // Turn off blur
      main.style.filter = "none";
      footer.style.filter = "none"

      // Change the button to "menu"
      //navbtn.innerHTML = "menu";

      // Hide the overlay
      overlay.style.display = "none";
    }
    else {
      // Slide out the menu
      menu.style.left = "0px";

      // Change the slidestate variable to "expanded"
      slideState = "expanded";

      // Turn on blur
      footer.style.filter = "blur(5px)";
      main.style.filter = "blur(5px)";

      // Change the button to "cancel"
      //navbtn.innerHTML = "cancel";

      // Show the overlay
      overlay.style.display = "block";
    }
  }
  // Icon Animation

  function iconChange(){
    if (slideState == "closed"){
      // Change the icon to its default state
      icon.className = "";
    }
    else if (slideState == "expanded") {
      // Change the icon to the close state
      icon.className = "iconClose";
    }
  }

}
