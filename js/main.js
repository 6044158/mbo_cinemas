    // sub menu laten aantonen en verborgen
    let menuIcon = document.getElementById("icon_menu");
    let subNav = document.getElementById("sub_nav");
    let navItemArray = document.getElementsByClassName(".nav_item");

    // update en controleer schermgroote bij laden en reszie 
    window.addEventListener('resize',checkSchermGroote );
    window.addEventListener('DOMContentLoaded',checkSchermGroote)

    function checkSchermGroote(){
        // telefoon
        if(window.innerWidth < 767){
            subNav.style.display = "none";
            // console.log("telefoon "+ window.innerWidth);
        }else{          //desktop
            subNav.style.display = "block";
            // console.log("desktop "+ window.innerWidth);
        }
    }

    menuIcon.addEventListener('click',function(){
        
        if(subNav.style.display == "none"){
            subNav.style.display = "block";
            console.log("dd");
           subNav.style.zIndex = 1; 
        }else{
            subNav.style.display = "none";
            console.log("aa");
        }
       
    })
    // for(let navItem of navItemArray){
        
    // }
    


    // slide show
   
   let slidesArray = document.getElementsByClassName("slide");
   let index = 0;
   
    setInterval(slideShow,1800)
    function slideShow(){
    //    veberg de huidige slide
     slidesArray[index].style.display = "none";
       index++;

       if(index >= slidesArray.length){
           index =0 ;
       }
       slidesArray[index].style.display = "block";
    }
 

  







  
    
   
    
   