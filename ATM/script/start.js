alert("Welcome in ATM simulator, creator of this amazing program is Filip Burski");
var name = prompt("What's your name");
var pin = prompt("Creat your pin");
var cash = prompt("Set amount of cash on your account");

sessionStorage.setItem("name", name);
sessionStorage.setItem("pin", pin);
sessionStorage.setItem("cash", cash);
