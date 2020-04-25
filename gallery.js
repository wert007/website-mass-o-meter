let indices = {}

function load(galleryId) {
    let gallery = document.getElementById(galleryId);
    indices[galleryId] = 1;
    setFocus(gallery, "./assets/bilder/" + galleryId + "/", indices[galleryId]);

    for (const img of gallery.children) {
        img.onclick = function (event) {
            console.log(event);
            const img = event.toElement;
            const parent = img.parentElement;
            if (img.className.includes("Left")) {
                indices[parent.id]--;
            }
            else if (img.className.includes("Right")) {
                indices[parent.id]++;
            }
            
            setFocus(gallery, "./assets/bilder/" + parent.id + "/", indices[parent.id]);
        }
    }
}

function setFocus(parent, path, index) {
    for (let i = 0; i < parent.childElementCount; i++) {
        const img = parent.children[i];
        console.log(img);
        img.src = path + (i + 1 + index) + ".jpg";
        if (i == 0)
            img.className = "gallery previewLeft";
        else if (i == 1)
            img.className = "gallery main";
        else if (i == 2)
            img.className = "gallery previewRight";

    }
}