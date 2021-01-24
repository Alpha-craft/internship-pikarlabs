function showModal(id) {
    let ele = document.getElementById(id);
    if (ele.classList.contains('hidden')) {
        ele.classList.remove('hidden')
        console.log(id);
    }


}