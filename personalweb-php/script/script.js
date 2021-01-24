function showModal(id) {
    let ele = document.getElementById(id);
    if (ele.classList.contains('hidden')) {
        ele.classList.remove('hidden')
    }
}

function close(_id) {
    let doc = document.getElementById(_id);
    doc.classList.add('hidden')
    console.log("hemlo")
}