let savedMoneyAmount = sessionStorage.getItem("saveWithdrawAmount");
let balanceMoney = sessionStorage.getItem("restMoney");
let moneyOut = document.getElementById("moneyOut");
let balanceAfter = document.getElementById("balanceLeft");



moneyOut.innerHTML = savedMoneyAmount;
balanceAfter.innerHTML = balanceMoney;


