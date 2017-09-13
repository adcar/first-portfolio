
document.onscroll = function navResize(){
  var nav = document.querySelector("#nav");
  if (document.body.scrollTop >= 70 || document.documentElement.scrollTop >= 70){
    nav.className = "small";
  }
  else {
    nav.className = "large";
  }
}
