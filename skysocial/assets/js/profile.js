function timeline() {
    document.getElementById("timeline").style.display = "block";
    document.getElementById("friends").style.display = "none";
    document.getElementById("photos").style.display = "none";
}

function friends() {
    document.getElementById("timeline").style.display = "none";
    document.getElementById("friends").style.display = "block";
    document.getElementById("photos").style.display = "none";
}

function photos() {
    document.getElementById("timeline").style.display = "none";
    document.getElementById("friends").style.display = "none";
    document.getElementById("photos").style.display = "block";
}