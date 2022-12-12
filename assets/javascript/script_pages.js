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


const panel = document.getElementById("js-panel");
const btns = document.querySelectorAll(".flap__btn");


function hidePanel() {
    panel.classList.remove("is--open");
}

const init = function () {
    panel.classList.add("is--open");


}

/**************************** Window open Ajax ***************************************/

// const items = document.querySelector('.items')
const deleteItem = document.querySelectorAll('.deleteItem')
const delete_video_id = document.querySelector('.delete_video_id')
const btn_yes = document.querySelector('#btn_yes')
// const btn_no = document.querySelector('#btn_no')

deleteItem.forEach(element => {
    element.addEventListener('click', (e) => {
        panel.style.display = "block"
        delete_video_id.value = element.closest('.videos').dataset.id;
        init();
    })
});


btns.forEach(el => {
    el.addEventListener("click", (e) => {
        e.preventDefault()
        if (e.target === btn_yes) {
            fetchData()
        }
        hidePanel()

    })
})


const fetchData = async () => {
    const formData = {id: delete_video_id.value}
    try {
        const response = await fetch(
            './php/profile/ajax_request.php',
            {
                body: JSON.stringify(formData),
                method: 'POST',
                header: {"Content-Type": "application/json"}
            }
        )

        const data = response.json()
        // console.log(data);

    } catch (error) {
        console.log(error);
    }
}

/**************************** Window open Ajax / ***************************************/
