function window_kian(){
    panel.style.display = "block";
}
document.getElementById("return").addEventListener("click", function(){
    panel.style.display = "none";
})

document.getElementById("kian").addEventListener("click", window_kian);
let panel = document.getElementById("panel_kian");
