

window.addEventListener("load",function(){

 showPopup();
 // setTimeout(function(){
 //   loginPopup.classList.add("show");
 // },5000)

})

// setTimeout(function(){
//   $('.modal').modal({show:true});
// }, 3000);

function showPopup(){
      const timeLimit = 5 // seconds;
      let i=0;
      const timer = setInterval(function(){
       i++;
       if(i == timeLimit){
        clearInterval(timer);
        $('.modal').modal({show:true});
       } 
       console.log(i)
      },1000);
}


// close.addEventListener("click",function(){
//   loginPopup.classList.remove("show");
// })

