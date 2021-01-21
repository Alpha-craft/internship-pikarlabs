function showModal(id) {
    let ele = document.getElementById(id);
    if (ele.style.display == "none") {
        ele.style.display == "block";
        console.log(id);
    }


}
new Glider(document.querySelector('.glider'), {
    slidesToScroll: 1,
    slidesToShow: 1,
    rewind: true,
    dots: '#dots',
    draggable: false,
    scrollLock: true,
    arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
    }
});