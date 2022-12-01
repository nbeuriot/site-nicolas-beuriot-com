/*
function about() {
    selected('about');
}

function cv() {
    selected('cv');
}

function hobbies() {
    selected('hobbies');
}

function somelinks() {
    selected('somelinks');
}

function contact() {
    selected('contact');
}

function selected($class) {
    const $page = "middleleft" + $class + ".php";
    $(".left").load($page);
    document.getElementById('selected').removeAttribute('id');
    document.getElementsByClassName($class)[0].setAttribute('id','selected');
}
*/

$( document ).ready(function() {
    console.log( "ready!" );

const menus = document.querySelectorAll(`[id^="menu"]`);
console.log(menus)

const menuPressed = e => {
        let selectedmenu = e.target.id.replace(/(^menu-)/gi, "");
        document.getElementsByClassName('selected')[0].removeAttribute('class')
        document.getElementById(e.target.id).setAttribute('class','selected')
        const page = "middleleft" + selectedmenu + ".php";
        $(".left").load(page);
      }
      
      for (let menu of menus) {
        menu.addEventListener("click", menuPressed);
        console.log(menu.innerHTML)
      }



});


