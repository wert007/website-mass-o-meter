function dunno(gender, mode)
{
    let prev, cur, n;
    if(gender == 'damen')
    {
        prev = "damenLeft";
        cur = "damenCenter";
        n = "damenRight";
    }
    else if(gender == 'herren')
    {
        prev = "herrenLeft";
        cur = "herrenCenter";
        n = "herrenRight";
    }    
    
    let previous = document.getElementById(prev).src.toString();
    let current = document.getElementById(cur).src.toString();
    let next = document.getElementById(n).src.toString();
    let picLeft, picCenter, picRight;

    if(mode == 'left')
    {
        picLeft = shiftLeft(gender, getPicture(previous));
        picCenter = shiftLeft(gender, getPicture(current));
        picRight = shiftLeft(gender, getPicture(next));
    }
    else if(mode == 'right')
    {
        picLeft = shiftRight(gender, getPicture(previous));
        picCenter = shiftRight(gender, getPicture(current));
        picRight = shiftRight(gender, getPicture(next));
    }
    
    document.getElementById(prev).src = "./assets/bilder/" + gender + "/" + picLeft + ".jpg";
    document.getElementById(cur).src = "./assets/bilder/" + gender + "/" + picCenter + ".jpg";
    document.getElementById(n).src = "./assets/bilder/" + gender + "/" + picRight + ".jpg";
}

function getPicture(src)
{
    src = src.replace ( /[^\d]/g, '' );
    let num = parseInt(src);
    num = num > 800000 ? num - 808000 : num - 80800;
    return num;
}

function shiftLeft(gender, pic)
{
   let mod = gender == "damen" ? 20 : 8;
   console.log(pic);
   pic = pic <= 1 ? (mod + --pic)%mod : --pic;
   if(pic == 0) pic = mod;
   //console.log(pic);
   return pic.toString();
}

function shiftRight(gender, pic)
{ 
    let mod = gender == "damen" ? 20 : 8;
    pic = ++pic % mod;
    if(pic == 0) pic++;

    return pic.toString();
}

/*
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
}*/
