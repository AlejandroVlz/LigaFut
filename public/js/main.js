let showMenu = document.getElementById('showMenu');
let menuu = document.getElementById('menu');

let login_icon = document.getElementById('login-icon');
let login = document.getElementById('login');


let menu = true;


showMenu.addEventListener("click", () =>{
    menu= !menu 
    console.log(menu)
    if(menu==false){
        menuu.style.display= "none";
        login_icon.style.display= "block";

    }else{

        menuu.style.display= "block";
        login_icon.style.display= "none";

    }
})



loginAdd = true;

login_icon.addEventListener("click", () =>{
    loginAdd = !loginAdd;
    if(loginAdd==true){
        login.style.display="none";
    } else{
        login.style.display="block";
    }
});

