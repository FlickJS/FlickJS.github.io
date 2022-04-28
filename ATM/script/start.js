alert("Welcome in ATM simulator, creator of this amazing program is Filip Burski");
const name = prompt("What's your name");
const pin = prompt("Creat your pin");
let cash = prompt("Set amount of cash on your account");

sessionStorage.setItem("name", name);
sessionStorage.setItem("pin", pin);
sessionStorage.setItem("cash", cash);


