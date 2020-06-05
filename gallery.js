function slideshow(gender, idNumber)
{
    imageId = "" + gender + idNumber;
    imageId = imageId.toString();
    className = document.getElementId(imageID).className;
    if(className == "imageCenter") return;

    if(className == "imageLeft") shiftLeft(gender, imageId, idNumber);
    else if(className == "imageRight") shiftRight(gender, imageId, idNumber);
    return;
}

function shiftRight(gender, imageId, idNumber)
{
    let mod = gender == "damen" ? 20 : 8;
    let left = (imageId - 1) < 0 ? mod - 1 : imageId - 1; 
    let center = imageId;
    let right = (center + 1) % mod;
    
    



}

function shiftLeft(gender, imageId, idNumber)
{
    let mod = gender == "damen" ? 19 : 7;


}



/*function dunno(gender, mode)
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
    //document.getElementById(prev).href = "./assets/bilder/" + gender + "/" + 
    document.getElementById(cur).src = "./assets/bilder/" + gender + "/" + picCenter + ".jpg";
    document.getElementById(n).src = "./assets/bilder/" + gender + "/" + picRight + ".jpg";
    //document.getElementById(n).href = "./assets/bilder/" + gender + "/" + gender == "damen" ? ++pic % 20 : ++pic % 8 + ".jpg";
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
  let mod = gender == "damen" ? 19 : 7;
  pic = --pic < 0 ? mod: pic;
  return pic.toString();
}

function shiftRight(gender, pic)
{ 
   let mod = gender == "damen" ? 20 : 8;
   pic = ++pic % mod;
   return pic.toString();
}
*/
