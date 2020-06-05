function slideshow(gender, idNumber)
{
    imageId = "" + gender + idNumber;
    imageId = imageId.toString();
    className = document.getElementById(imageId).className.toString();
    console.log(className);
    if(className == "imageCenter") return;

    if(className == "imageLeft") shiftLeft(gender, imageId, idNumber);
    else if(className == "imageRight") shiftRight(gender, imageId, idNumber);
    return;
}

function shiftRight(gender, centerId, idNumber)
{/*
    let mod = gender == "damen" ? 20 : 8;

    let left = (idNumber - 1) < 0 ? mod : idNumber - 1; 
    let right = (idNumber + 1)
    let notVisible = (idNumber - 2) < 0 ? mod - 1 + idNumber : idNumber - 2;
    if(gender == "damen") right = idNumber == 19 ? 0 : right;
    if(gender == "herren") right = idNumber == 7 ? 0 : right; 

    showSlides(gender, notVisible, left, centerId, right);*/
    let mod = gender == "damen" ? 19 : 7;

    let left = (idNumber - 1 + mod) % mod;
    let right = (idNumber + 1 + mod) % mod;
    let notVisible = (left - 1 + mod) % mod;

    showSlides(gender, notVisible, left, centerId, right);

}

//Clicked on the left pic
function shiftLeft(gender, centerId, idNumber)
{
    let mod = gender == "damen" ? 19 : 7;

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

