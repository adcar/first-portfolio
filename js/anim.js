window.addEventListener("scroll", function(){ // Launches on scroll
    var anims = document.getElementsByClassName("anim");
    for (let i = 0; i < anims.length; i++){
      console.log(anims[i].getBoundingClientRect().bottom)
      console.log("Client Height" + document.documentElement.clientHeight)
      if (anims[i].getBoundingClientRect().top < document.documentElement.clientHeight - 100){ // Minus 100 so you can actually see the animation
        anims[i].style.animationPlayState = "running";
      }
    }
})


window.addEventListener("load", function(){ // Launches on load
    var anims = document.getElementsByClassName("anim");
    for (let i = 0; i < anims.length; i++){
      console.log(anims[i].getBoundingClientRect().bottom)
      console.log("Client Height" + document.documentElement.clientHeight)
      if (anims[i].getBoundingClientRect().top < document.documentElement.clientHeight - 100){ // Minus 100 so you can actually see the animation
        anims[i].style.animationPlayState = "running";
      }
    }
})
