let gamePage = document.getElementById('page');

function sendValue(name , image , description , price , rating) {
    localStorage.setItem('name', name);
    localStorage.setItem('image', image);
    localStorage.setItem('description', description);
    localStorage.setItem('price', price);
    localStorage.setItem('rating', rating);
    window.location.href = 'game.html'

}

function makePage(name , image , description , price , rating) {
    gamePage.innerHTML = `<h1>${name}</h1>
                            <div class="gameDetail">  
                            <img src="${image}" alt="" class="gameIMG" />
                             <div class="gameDes"> Description: ${description}</div>
                             </div>
                             <div class="moreDetail">  
                             <div class="price">Price: ${price}</div>  
                             <div class="rating">Rating: ${rating}/5</div>  
                             </div>`;
}



let games = Array.from(document.querySelectorAll('.game'));


makePage(
    localStorage.getItem('name'),
    localStorage.getItem('image'),
    localStorage.getItem('description'), 
    localStorage.getItem('price'),
    localStorage.getItem('rating')
  );

