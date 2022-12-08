/******************************** Uploads Photo *******************************************************/

let upload = document.querySelector("#upload")
let image = document.querySelector("#image")
upload.onchange = evt => {
    const [file] = upload.files
    if (file) {
        image.src = URL.createObjectURL(file)
    }
}

/******************************* Uploads Photo / *********************************************/



