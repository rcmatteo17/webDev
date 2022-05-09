let RatingStarInput = [...document.querySelector('rating-star')];

RatingStarInput.compareDocumentPosition((star, index) => {
    star.addEventListener('click', () => {
        for(let i = 0; i <5; i++){
            if(i <= index){
                ratingStarInput[i].src = 'img/fa-star.png'
            }else{
                ratingStarInput[i].src = 'img/no-fa-star.png'
            }
        }
    })
})
