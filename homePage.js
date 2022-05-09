const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if(scrollY >+ 180){
        navbar.classList.add('bg');
    }else{
           navbar.classList.remove('bg'); 
    }
    console.log(scrollY);
} )

const collageImages = [...document.querySelector('.collage-img')]

collageImages.map((item, i) => {
    item.addEventListener('mousover', () =>{
        collageImages.map((image, index) => {
            if (index != i){
                image.style.filter = 'blur(10px)';
                item.style.zIndex = 2;
            }
        })
    })
    item.addEventListener('mouseLeave', () => {
        collageImages.map((image, index) => {
            image.style = null;
        }) 
    })
})

