const section = document.querySelectorAll('section');
const navlink = document.querySelectorAll('.nav-link a')
const navbar = document.querySelector('.navbar');

window.addEventListener("scroll",()=>{

      section.forEach((index) => {
            var id = index.getAttribute("id");
            var scrollY = window.scrollY;
            var offsetTop = (index.offsetTop - 150);
            var offsetHeight = index.offsetHeight;

            if ( scrollY > 150) {
                  navbar.classList.add("active");
            }else{
                  navbar.classList.remove("active");   
            }
      
            if( scrollY > offsetTop && scrollY < offsetTop + offsetHeight){
                  
                  navlink.forEach((e)=>{
                        e.classList.remove("active");
                        var link = document.querySelector(`.navbar-menu ul li.nav-link[id=${id}] a`);
                        link.classList.add("active");
                  })
            }
      });
})