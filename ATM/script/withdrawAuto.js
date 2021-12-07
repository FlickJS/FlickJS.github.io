let savedMoneyAuto = sessionStorage.getItem("autoWithdraw");
let balanceAfterAuto = sessionStorage.getItem("cash");
let moneyAuto = document.getElementById("moneyAuto");
let balanceAuto = document.getElementById("balanceAuto");


moneyAuto.innerHTML = savedMoneyAuto;
balanceAuto.innerHTML = balanceAfterAuto;

