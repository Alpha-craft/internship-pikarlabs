function showModal(id) {
    let ele = document.getElementById(id);
    if (ele.classList.contains('hidden')) {
        ele.classList.remove('hidden');
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            navigation: {
                nextEl: '#next',
                prevEl: '#prev',
            },
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
        });
    }
}

function tutup(_id) {
    let comp = document.getElementById(_id);
    comp.classList.add('hidden');

}

function showImg(img) {
    let ele = document.getElementById(img);
    ele.classList.remove('hidden')
}

function hiddenImg(img) {
    let ele = document.getElementById(img);
    ele.classList.add('hidden');
}

var swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '#next',
        prevEl: '#prev',
    },
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});