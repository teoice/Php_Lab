function window_kian(){
    panel.style.display = "block";
}
document.getElementById("return").addEventListener("click", function(){
    document.getElementById("panel_kian").style.display = "none";
})

document.getElementById("kian").addEventListener("click", function(){
    
    console.log("nf");
    document.getElementById("panel_kian").style.display = "block";
});
