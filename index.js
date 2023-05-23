window.addEventListener("scroll", function() {
    var contentHeight = document.querySelector("odi").offsetHeight;
    var yOffset = window.pageYOffset + window.innerHeight;
    if (yOffset >= contentHeight) {
      document.querySelector(".footer").style.display = "flex";
    } else {
      document.querySelector(".footer").style.display = "none";
    }
  });

  


  function iimg(x, y) {
   var image = document.getElementById("kpn");

   image.style.position="absolute";
   image.style.left= x + "0px";
   image.style.top= y + "-40px";
  }


  function search() {
    document.getElementById('search_bar').style.display='block';
}
