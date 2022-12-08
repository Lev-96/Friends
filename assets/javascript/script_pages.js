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