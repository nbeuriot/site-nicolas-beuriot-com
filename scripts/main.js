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

/* Menu management */
    const menus = document.querySelectorAll(`[id^="menu"]`);

    const menuPressed = e => {
            let selectedmenu = e.target.id.replace(/(^menu-)/gi, "");
            document.getElementsByClassName('selected')[0].removeAttribute('class')
            document.getElementById(e.target.id).setAttribute('class','selected')
            const page = "middleleft" + selectedmenu + ".php";
            $(".middle").load(page);

            const tt = document.querySelector('.top p');
            const image = document.querySelector('.top img');
            if (selectedmenu === 'about')
                {
                    image.style.visibility = 'hidden';
                    tt.style.visibility = 'hidden';
                }
            else
                {
                    image.style.visibility = 'visible';
                    tt.style.visibility = 'visible';
                }
        }
        
        for (let menu of menus) {
            menu.addEventListener("click", menuPressed);
        }

/* On CV page manage filters */
/*    const orderElement = document.forms.order;

                orderElement.addEventListener('change', (event) => {
                    console.log(event.target.value);
                    console.log(document.forms.order);
                    result.textContent = `You like ${event.target.value}`;
                    //const page = "middleleft" + selectedmenu + ".php";
                    //$(".left").load(page)
                  });
      
*/
});


