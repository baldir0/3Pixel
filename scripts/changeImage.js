//Change Image After button press
function changeImage(button)
{
    var images = document.querySelectorAll('.ImbB > div img');  //Select <Img> elements
    var n = 0;
    //clear Show class from Images
    images.forEach((img, i) => {
      if(img.classList.contains("show"))
      {
        img.classList.remove("show");
      }
    });

    var buttons =  document.querySelectorAll("#ImageBoardButtons > button"); //Select <button> elements
    //Clear Class from Buttons
    buttons.forEach((item, i) => {
      if(item.classList.contains("active"))
        item.classList.remove("active");

      if(item==button)
      {
        if(i>3) n=0;
        else n = i;
      }
    });
    images.forEach((img, i) => {
      if(i==n){
        img.classList.add("show");
      }
    })
    //Add class to new active element
    button.classList.add("active");
}


function contententLoaded()
{
    var interval = 10000; //Set Interval in ms
    var buttons = document.querySelectorAll("#ImageBoardButtons > button"); //Select <button> elements

    var timeout = setInterval(imgSwitch, interval);


    //Other Events to work after page load
    document.querySelector(".ImbB").addEventListener("mouseover", function() {
      document.querySelector(".ImbB > div > div").style.height = '15px';
    });

    document.querySelector(".ImbB").addEventListener("mouseout", function() {
      document.querySelector(".ImbB > div > div").style.height = '2px';
    })

    buttons.forEach((button, i) => {
        button.addEventListener("click", function() {
          clearTimeout(timeout);
          setTimeout(function () {
            timeout = setInterval(imgSwitch, interval);
          }, 0);
        })
    });

}


function imgSwitch()
{
    var active = 0; //Active button number
    var buttons = document.querySelectorAll("#ImageBoardButtons > button"); //Select <button> elements
    var images = document.querySelectorAll(".ImbB > div img");//Select <img> elements

    buttons.forEach((button, i) => {
      if(button.classList.contains("active"))
      {
        active = i;
        return;
      }
    });



    buttons[active].classList.remove("active"); //Clear Active button class
    images[active].classList.remove("show");

    active+=1;  //Change active button number to next one
    if(active>3) active = 0;  //If number is higer than 3 set it to 0

    buttons[active].classList.add("active"); //Add active class to new button
    images[active].classList.add("show");
}

document.addEventListener('DOMContentLoaded',contententLoaded);
