//Change Image After button press
function changeImage(src, button, link)
{
    document.querySelector('.ImbB > div:first-of-type img').src = src;  //Select <Img> element

    //Clear Class from Buttons
    var buttons =  document.querySelectorAll("#ImageBoardButtons > button")
    buttons.forEach((item, i) => {
      item.classList.remove("active");
    });

    //Change Link
    var linkB = document.querySelector('.ImbB > div:first-of-type a');
    linkB.setAttribute("href",link);

    //Add class to new active element
    button.classList.add("active");
}

function switchImage()
{
    var interval = 10000; //Interval in ms
    var buttons = document.querySelectorAll("#ImageBoardButtons > button"); //Select all Buttons

    var imgB = document.querySelector(".ImbB > div:first-of-type img"); //Select First <Img> element from ImageBoardImage class
    var linkB = document.querySelector(".ImbB > div:first-of-type img");  //Select First <a> element from ImageBoardImage class

    var link = ['#link1','#link2','#link3','#link4']; //Array of links

    var src = ['./img/ImageBoardImage1.png','./img/ImageBoardImage2.png','./img/ImageBoardImage3.png','./img/ImageBoardImage4.png'];  //array of images src.

    var active = 0; //Active button number
    setInterval(() => {

      buttons.forEach((button, i) => {
        if(button.classList.contains("active"))
        {
          active = i;
          return;
        }
      });

      buttons[active].classList.remove("active"); //Clear Active button class
      active+=1;  //Change active button number to next one
      if(active>3) active = 0;  //If number is higer than 3 set it to 0
      buttons[active].classList.add("active"); //Add active class to new button
      imgB.src = src[active]; //Change Image Src.
      linkB.setAttribute("href",link[active]) //Change Image Link
    }, interval);
}
document.addEventListener('DOMContentLoaded',switchImage);
