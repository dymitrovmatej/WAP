window.onscroll = () => {
console.log(window.scrollY);
document.getElementById("L1").style.top = window.scrollY + 0.3 + "px";
document.getElementById("L2").style.top = window.scrollY + 1.5 + "px";
document.getElementById("L3").style.top = window.scrollY + 2 + "px";
document.getElementById("L4").style.top = window.scrollY + 2.5 + "px";
}