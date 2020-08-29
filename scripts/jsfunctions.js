//User Menu
function showUserPanel(target)
{
  var target = document.querySelector(target);
  var displayValue = target.style.display;

  displayValue=='none' ? target.style.display='block' : target.style.display = 'none';
}

function changeObjectVisibility(fObj, sObj, sDisplay)
{
    document.querySelector(fObj).style.display = "none";
    document.querySelector(sObj).style.display = sDisplay;
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
}

function form()
{
    var cookie = getCookie('Form');
    if(cookie==1)
    {
        document.querySelector('.SinC').style.display = 'none';
        document.querySelector('.SupC').style.display = 'block';
    }
}

function switchForm()
{
    var forms = document.querySelectorAll(".container > div > div > form");
    if(forms[0].classList.contains("hidden"))
    {
      forms[0].classList.remove("hidden");
      forms[1].classList.add("hidden");
    }else{
      forms[0].classList.add("hidden");
      forms[1].classList.remove("hidden")
    }
}

//UNUSED For Now
/*

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

*/
