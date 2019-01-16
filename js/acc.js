 

var accordion = document.getElementsByClassName("acc-titel");
var i;

for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function(){
    this.classList.toggle("active");
    
    var showContent = this.nextElementSibling;
      if (showContent.style.maxHeight) {
        showContent.style.maxHeight = null;
        showContent.style.opacity = null;
        showContent.style.transform = "translateY(5px)";
      } else {
        showContent.style.maxHeight = showContent.scrollHeight + "px";
        showContent.style.opacity = "1";
        showContent.style.transform = "translateY(0px)";
      }
  });
}


 


   