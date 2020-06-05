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
    let mod = gender == "damen" ? 19 : 7;

    let left = idNumber - 1;
    if(left < 0) left = mod;

    let right = idNumber + 1;
    if(right > mod) right = 0;

    let notVisible = idNumber - 2;
    if(notVisible < 0) notVisible = mod - 1 + notVisible;

    showSlides(gender, notVisible, left, centerId, right);

}

function shiftLeft(gender, centerId, idNumber)
{
    let mod = gender == "damen" ? 19 : 7;

    let left = idNumber - 1;
    if(left < 0) left = mod;

    let right = idNumber + 1;
    if(right > mod) right = 0;

    let notVisible = idNumber + 2;
    if(notVisible > mod) notVisible = notVisible - mod -1;

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