window.onload = () => {

    var loader = document.getElementById('loader');
    
    //remove loader after 2500ml
    setTimeout(() =>{
        loader.style.display = 'none';
    }, 3200);

    let discoverBtn = document.getElementById('discover');
    let brandsView = document.getElementById('brands-view');

    if( discoverBtn !== null ) {
        discoverBtn.addEventListener('click', ()=> {
            brandsView.scrollIntoView({
                behavior: 'smooth'
            })
        } )
    }

    let tabs = document.querySelectorAll('.tab');

    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            
            let activeTab = document.querySelectorAll('.tabs-content.active')[0];
            let active = document.querySelectorAll('.tab-inner-content.active')[0]

            if( active !== undefined && activeTab !== undefined ) {
                active.classList.remove('active');
                activeTab.classList.remove('active');
            }

            let target = document.getElementById(tab.dataset.tab);
            let tabContainer = document.querySelectorAll('.tabs-content')[0];

            tabContainer.classList.add('active');
            target.classList.add('active');
            
        });
    });

    let closeTabBtn = document.querySelectorAll('.close-window');

    closeTabBtn.forEach(btn => {

        btn.addEventListener('click', ()=> {
            let active = document.querySelectorAll('.tab-inner-content.active')[0]
            if( active !== undefined ) {
                active.classList.remove('active');
            }
        })
    });

    var burgerIcon = document.getElementById('burger-icon');
    var body = document.querySelectorAll('body')[0];

    burgerIcon.addEventListener('click', function() {
        body.classList.toggle('menu-opened');
    })

    sal({
        threshold: 0.15
    });

    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        effect: 'fade',
    
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next .next-mobile',
          prevEl: '.swiper-button-prev .prev-mobile',
        }
    })

    //let tl = new TimelineLite();
}