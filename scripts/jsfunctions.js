function showUserPanel($targetId)
{
    var target = document.getElementById($targetId);   //TARGET TO VARIABLE
    var displayValue = target.style.display;    //GETTING DISPLAY VALUE

    displayValue=='none' ? target.style.display='block' : target.style.display = 'none';    //CHANGE DISPLAY VALUE
    return;
}

function changeImage(target, src, button)
{
    document.getElementById(target).src = src;
    var but1 = document.querySelector('#Img1');
    var but2 = document.querySelector('#Img2');
    var but3 = document.querySelector('#Img3');
    var but4 = document.querySelector('#Img4');

    but1.className = "";
    but2.className = "";
    but3.className = "";
    but4.className = "";

    var newButton = document.querySelector(button);
    newButton.className = "active";

    
    return;
}

function switchImage()
{
        var but1 = document.querySelector('#Img1');
        var but2 = document.querySelector('#Img2');
        var but3 = document.querySelector('#Img3');
        var but4 = document.querySelector('#Img4');
        var imgB = document.querySelector('#BoardImg');
        var linkB = document.querySelector('#BoardImgLink');
        
        var link = ['#link1','#link2','#link3','#link4'];

        var src = ['./img/ImageBoardImage1.png','./img/ImageBoardImage2.png','./img/ImageBoardImage3.png','./img/ImageBoardImage4.png'];

        setInterval(() => {
            if(but1.className=="active")
            {
                but1.className="";
                but2.className="active"
                imgB.src = src[1];
                linkB.setAttribute("href",link[1]);
                
            }else if(but2.className=="active")
            {
                but2.classList="";
                but3.className="active";
                imgB.src = src[2];
                linkB.setAttribute("href",link[2]);

            }else if(but3.className=="active")
            {
                but3.className="";
                but4.className="active";
                imgB.src = src[3];
                linkB.setAttribute("href",link[3]);
            }else if(but4.className=="active")
            {
                but4.className="";
                but1.className="active";
                imgB.src = src[0];
                linkB.setAttribute("href",link[0]);
            }
        }, 10000);
}

function checkPasswords(firstId, secondId, messageBoxId)
{
    var passwordOne = document.getElementById(firstId).value;
    var passwordTwo = document.getElementById(secondId).value;
    var messageBox = document.getElementById(messageBoxId);
    if(passwordOne == "") return;
    if(passwordTwo == "") return;
    if(passwordOne.localeCompare(passwordTwo))
    {
        messageBox.style = "display: block";
    }else messageBox.style = "display: none";
    return;
}

function showElement(id)
{
    document.getElementById(id).style = "display: block";
}

function changeObjectVisibility(firstObjectId, firstObjectDisplaySetting, secondObjectId, secondObjectDisplaySetting)
{
    document.getElementById(firstObjectId).style.display = firstObjectDisplaySetting;
    document.getElementById(secondObjectId).style.display = secondObjectDisplaySetting;
    return;
}

function getCookie(name)
{
    var cname = name + "=";
    var decodeCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodeCookie.split(';');

    for( var i = 0 ; i < cookieArray.length ; i++)
    {
        var c = cookieArray[i];
        while(c.charAt(0) == ' ')
        {
            c = c.substring(1);
        }
        if(c.indexOf(cname) == 0)
        {
            return c.substring(cname.length, c.length);
        }
    }
    return 0;
}