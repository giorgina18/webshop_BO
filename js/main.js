const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("stickey", this.window.scrollY > 0);
})

let menu = document.querySelector('#menu-icon');
let navmenu = document.querySelector('.navmenu');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navmenu.classList.toggle('open');

}





// shopping cart / searchbar // 

const addToCartButtons = document.getElementsByClassName("trending-products__atc");
let cartMessage = 0;
const cartMessageValue = document.getElementsByClassName("shoppingCart__message")[0];
const shoppingModal = document.getElementById("js--shoppingModal")
let modalIsOpen = false;
let GTA5 = 0;
let WWII = 0;
let CODIII = 0;


for (let i = 0; i < addToCartButtons.length; i++) {
    addToCartButtons[i].onclick = function () {

        cartMessage += 1;
        cartMessageValue.innerHTML = cartMessage;
 
        if (modalIsOpen === false) {
            // shoppingModal.style.display = "flex";
            shoppingModal.classList.remove("hidden");
            modalIsOpen = true;
            setTimeout(function () {
                // shoppingModal.style.display = "none";
                shoppingModal.classList.add("hidden");
                modalIsOpen = false;
            }, 2000);
        }
    }
}







// start searchBar function//
const searchBar = document.getElementById("js--searchBar");
const games = document.getElementsByClassName("product-item");
searchBar.onkeyup = function (event) {
    if (event.keyCode === 13) {
        let searchTerm = searchBar.value.toUpperCase().split(" ").join("");

        for (let i = 0; i < games.length; i++) {
            if (games[i].dataset.title.search(searchTerm) === -1) {
                games[i].style.opacity = 0.3;
            }
            else {
                games[i].style.opacity = 1;
            }
        };
    };
};

