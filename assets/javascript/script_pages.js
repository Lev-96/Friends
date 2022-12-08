/************************ Play Videos ****************************/

if (document.querySelectorAll('.videoImg').length) {
    document.querySelectorAll('.videoImg').forEach(item => {
        item.addEventListener('click', (e) => {
            e.target.style.display = 'none'
            e.target.parentElement.querySelector("#player").src = `${e.target.parentElement.querySelector("#player").src}?autoplay=1`
        })
    })
}
/************************ Play Videos / ****************************/


const linkItems = document.querySelectorAll(".link-item");

linkItems.forEach((linkItem, index) => {
    linkItem.addEventListener("click", () => {
        document.querySelector(".active").classList.remove("active");
        linkItem.classList.add("active");

    })
})


/*********************************** Loader ***************************************/


const loader = document.getElementById('js-loader');
window.addEventListener('load', () => {
    const ms = 400;
    loader.style.transition = 'opacity ' + ms + 'ms';

    const loaderOpacity = function () {
        loader.style.opacity = 0;
    }
    const loaderDisplay = function () {
        loader.style.display = "none";
    }

    setTimeout(loaderOpacity, 1000);
    setTimeout(loaderDisplay, 1000 + ms);
});

/*********************************** Loader / ***************************************/
