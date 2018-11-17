function scrollTo (element) {
    window.scroll({
        behavior: "smooth",
        left: 0,
        top: element.offsetTop
    });
};

var nav = document.querySelector('#wrapper-navbar'); // Identify target

if (this.window.location.pathname == "/"){
    window.addEventListener('scroll', function(event) { // To listen for event
        event.preventDefault();
            if (window.scrollY >= 200) { // Just an example
                nav.classList.add('solid-nav'); // or default color
            } else {
                nav.classList.remove('solid-nav');
            }});
} else {
    nav.classList.add('solid-nav');
};
