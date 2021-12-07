let depositMoney = sessionStorage.getItem("autoDeposit");
let balanceAfterDeposit = sessionStorage.getItem("cashDeposit");
let moneyDeposit = document.getElementById("moneyDeposit");
let balanceAfterAutoDeposit = document.getElementById("balanceAfterAutoDeposit");

moneyDeposit.innerHTML = depositMoney;
balanceAfterAutoDeposit.innerHTML = balanceAfterDeposit;