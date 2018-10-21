function scrollTo (element) {
    window.scroll({
        behavior: "smooth",
        left: 0,
        top: element.offsetTop
    });
};