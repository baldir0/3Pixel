function showUserPanel($targetId)
{

    var target = document.getElementById($targetId);   //TARGET TO VARIABLE
    var displayValue = target.style.display;    //GETTING DISPLAY VALUE

    displayValue=='none' ? target.style.display='block' : target.style.display = 'none';    //CHANGE DISPLAY VALUE
}

function changeImage(target, src)
{
    document.getElementById(target).src = src;
}