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
window.addEventListener('DOMContentLoaded', () => {
    let ms = 400;
    loader.style.transition = 'all .3s';

    let loaderOpacity = function () {
        loader.style.opacity = 0;
    }
    let loaderDisplay = function () {
        loader.style.display = "none";
    }
    setTimeout(loaderOpacity, 1000);
    setTimeout(loaderDisplay, 1000 + ms);
});

/*********************************** Loader / ***************************************/

/*********************************** Ajax Database ***************************************/


let link_btn = document.querySelector("#link_btn")

let getSubmit = async () =>{
    if(link_btn) {
        console.log("ok");
        const data = {
            btn: link_btn,
        }

        const response = await fetch('../../views/components/videos.php', {
            method:'POST',
            body: JSON.stringify(data)
        })

        const response_data = await response.data
        console.log(response);
    }
}
link_btn.addEventListener('click', getSubmit)

/*********************************** Ajax Database / ***************************************/
