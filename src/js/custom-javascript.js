function scrollTo (element){
    window.scroll({
        behavior: "smooth",
        left: 0,
        top: element.offsetTop
    });
};
document.getElementById('contact-cta').addEventListener('click', function (e) {
    e.preventDefault();
    scrollTo (document.getElementById('contact-section'));
});