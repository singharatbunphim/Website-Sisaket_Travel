const slide_item = document.querySelectorAll(".slide-item");
const ButtonPrevPoint = document.querySelector(".prevbuttonpoint"); 
const btnbackslide = document.querySelector(".backbtn");
const btnnextslide = document.querySelector(".nextbtn");


for( var i = 0; i < slide_item.length; i++){
      var span = document.createElement("span");
      span.setAttribute("class","slide-1");
      span.setAttribute("id",`${i}`);
      ButtonPrevPoint.appendChild(span);
}
 

const btnpoint = document.querySelectorAll(".slide-1");







let numberslide = 0;



btnbackslide.addEventListener("click",()=>{
      BackSlide();
});

btnnextslide.addEventListener("click",()=> {
      NextSlide();
});

btnpoint.forEach((index)=>{
      index.addEventListener("click",()=>{
            var id = index.getAttribute("id");
            console.log(id);
            UpdateSlide(id);
      })
})



const UpdateSlide = (id) => {
      numberslide = id;


      slide_item.forEach((index)=>{
            index.classList.remove("active");
      })

      if(numberslide > slide_item.length - 1) {
            numberslide = 0;
      }

      slide_item[numberslide].classList.add("active");
      btnpointremove();
      btnpointadd();   

      console.log(numberslide);
}


const BackSlide = () => {
      numberslide--;
      slide_item.forEach((index)=>{
            index.classList.remove("active");
      })
      if(numberslide < 0) {
            numberslide = (slide_item.length - 1);
      }
      slide_item[numberslide].classList.add("active");
      btnpointremove();
      btnpointadd();   
}

const NextSlide = () => {
      numberslide++;
      slide_item.forEach((index)=>{
            index.classList.remove("active");
      })
      if(numberslide > slide_item.length - 1) {
            numberslide = 0;
      }
      slide_item[numberslide].classList.add("active");
      btnpointremove();
      btnpointadd();   
}

const btnpointremove = () => {
      btnpoint.forEach((index)=>{
            index.classList.remove("active");
      })
}

const btnpointadd = () => {
      btnpoint[numberslide].classList.add("active");
}


var playload;
const SlideState = () => {
      

      playload = setInterval(()=>{
            NextSlide();
      },4000)
      
}

SlideState();
