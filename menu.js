console.log("Working")

document.getElementById("menu").addEventListener("click", openMenu);

function openMenu(){
    document.getElementById("dropdown").classList.toggle("active");
}