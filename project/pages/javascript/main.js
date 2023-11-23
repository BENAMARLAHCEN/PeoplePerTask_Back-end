const loadmore = document.querySelector('#loadmore');
const freelancerCard = document.querySelectorAll('.freelancer-card-display');
let index = 0;
loadmore.addEventListener('click', function(){


    if(index >= freelancerCard.length){
        loadmore.textContent="Load More";
        for (let j = 0; j < freelancerCard.length; j++) { 
            freelancerCard[j].classList.add('display-none-import');   
        }
        index=0;
        
    }else{
           
        for (let i = index; i < index+3; i++) {
            freelancerCard[i].classList.remove('display-none-import');
            freelancerCard[i].style.display = "flex"
        }
        index+=3;
        if(index >= freelancerCard.length){
            loadmore.textContent="Load less";
        }
    }


});