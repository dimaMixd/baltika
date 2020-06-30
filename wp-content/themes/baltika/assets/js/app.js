//IE11 polyfill
if ('NodeList' in window && !NodeList.prototype.forEach) {
    console.info('polyfill for IE11');
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (var i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}

window.onload = function() {
    
    var loader = document.getElementById('loader');
    
    //remove loader after 2500ml
    setTimeout(function(){
        loader.style.display = 'none';
    }, 3200);
    
    var discoverBtn = document.getElementById('discover');
    var brandsView = document.getElementById('brands-view');
    
    if( discoverBtn !== null ) {
        discoverBtn.addEventListener('click', function() {
            brandsView.scrollIntoView({
                behavior: 'smooth'
            })
        } )
    }
    
    var tabs = document.querySelectorAll('.tab');
    
    tabs.forEach( function(tab) {
        tab.addEventListener('click', function(e) {
            
            var activeTab = document.querySelectorAll('.tabs-content.active')[0];
            var active = document.querySelectorAll('.tab-inner-content.active')[0]
            
            if( active !== undefined && activeTab !== undefined ) {
                active.classList.remove('active');
                activeTab.classList.remove('active');
            }
            
            var target = document.getElementById(tab.dataset.tab);
            var tabContainer = document.querySelectorAll('.tabs-content')[0];
            
            tabContainer.classList.add('active');
            target.classList.add('active');
            
        });
    });
    
    var closeTabBtn = document.querySelectorAll('.close-window');
    
    closeTabBtn.forEach( function(btn) {
        
        btn.addEventListener('click', function() {
            var active = document.querySelectorAll('.tab-inner-content.active')[0]
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
    
    if( !isIE11 ) {
        sal({
            threshold: 0.15
        });
    }
    
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        effect: 'fade',
        autoHeight: true,
        
        // Navigation arrows
        navigation: {
            nextEl: '.swipe-next',
            prevEl: '.swipe-prev'
        }
    })
}