window.onload = () => {

    var loader = document.getElementById('loader');
    
    //remove loader after 2500ml
    setTimeout(() =>{
        loader.style.display = 'none';
    }, 3500);

    let discoverBtn = document.getElementById('discover');
    let brandsView = document.getElementById('brands-view');

    if( discoverBtn !== null ) {
        discoverBtn.addEventListener('click', ()=> {
            brandsView.scrollIntoView({
                behavior: 'smooth'
            })
        } )
    }
    
    sal();
}