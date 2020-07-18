const femalePictures = 19;
const malePictures = 7;
const colorPictures = 5;

function slideshow(gender, idNumber)
{
    imageId = "" + gender + idNumber;
    imageId = imageId.toString();
    className = document.getElementById(imageId).className.toString();

    if(className == "imageCenter") return;

    if(className == "imageLeft") shiftLeft(gender, imageId, idNumber);
    else if(className == "imageRight") shiftRight(gender, imageId, idNumber);
    return;
}

function shiftRight(gender, centerId, idNumber)
{
    let mod = gender == "damen" ? femalePictures : malePictures;
    if(gender == "color") mod = colorPictures;

    let left = (idNumber - 1 + mod) % mod;
    let right = (idNumber + 1 + mod) % mod;
    let notVisible = (left - 1 + mod) % mod;

    showSlides(gender, notVisible, left, centerId, right);

}

//Clicked on the left pic
function shiftLeft(gender, centerId, idNumber)
{
    let mod = gender == "damen" ? femalePictures : malePictures;
    if(gender == "color") mod = colorPictures;

    let left = (idNumber - 1 + mod) % mod;
    let right = (idNumber + 1 + mod) % mod;
    let notVisible = (right + 1 + mod) % mod;

    showSlides(gender, notVisible, left, centerId, right);
}

function showSlides(gender, notVisible, left, centerId, right)
{
    let notVisibleId = ("" + gender + notVisible).toString();
    let leftId = ("" + gender + left).toString();
    let rightId = ("" + gender + right).toString();
    

    document.getElementById(notVisibleId).className = "imageHidden";
    document.getElementById(leftId).className = "imageLeft";
    document.getElementById(centerId).className = "imageCenter";
    document.getElementById(rightId).className = "imageRight";
}