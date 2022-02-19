// Handle Open Modal menu Add Travel ... 


const btn_addTravel = document.querySelector(".btn_addTravel");
const travel = document.querySelector(".add-travel");
const btn_close = document.querySelector(".btn_close");
btn_addTravel.addEventListener("click",()=>{
      travel.classList.add("active");
})


btn_close.addEventListener("click",()=>{
      travel.classList.remove("active");
})