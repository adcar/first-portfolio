var lightbtn = document.getElementById("light-button");
lightbtn.addEventListener("click", open);
var lightImg = document.getElementById("lightbox-image");
var lightbox = document.getElementsByClassName("lightbox")[0];
lightbox.addEventListener("click", close)
function open(){
  // Display the lightbox
  lightbox.style.display = "flex";

  // Load the image
  lightImg.src = "img/webprofessionals-full.jpg";
}
function close(){
  //Hide the lightbox
  lightbox.style.display = "none";
}
