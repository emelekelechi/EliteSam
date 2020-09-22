
        function opensidenav(){
            document.getElementById("mynav").classList.toggle("show-sidenav");
        }
  /*  window.onclick = function(event) {
  if (!event.target.matches('.open')) {
    var dropdowns = document.getElementsByClassName("sidenav");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-sidenav')) {
        openDropdown.classList.remove('show-sidenav');
      }
    }
  }
} */
function closenav(){
    document.getElementById("mynav").classList.toggle("show-sidenav");
}

    function myFunction(){
        var top = document.getElementById("about");
        var ypos = window.pageYOffset;
        if(ypos > 300){
            top.classList.add("display");
        }
        else{
            top.classList.remove("display");
        }
    }
    window.addEventListener("scroll", myFunction);

    function myFunction1(){
        var top = document.getElementById("img1");
        var ypos = window.pageYOffset;
        if(ypos > 400){
            top.classList.add("display1");
        }
        else{
            top.classList.remove("display1");
        }
    }
    window.addEventListener("scroll", myFunction1);

    function myFunction2(){
        var top = document.getElementById("img2");
        var ypos = window.pageYOffset;
        if(ypos > 404){
            top.classList.add("display2");
        }
        else{
            top.classList.remove("display2");
        }
    }
    window.addEventListener("scroll", myFunction2);

    function myFunction3(){
        var top = document.getElementById("img3");
        var ypos = window.pageYOffset;
        if(ypos > 410){
            top.classList.add("display3");
        }
        else{
            top.classList.remove("display3");
        }
    }
    window.addEventListener("scroll", myFunction3);

