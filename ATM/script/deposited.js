let depositedCash = sessionStorage.getItem("depositedMoney");
let depositAmount = document.getElementById("dpCash");
let depositBalance = document.getElementById("dpBalance");

depositAmount.innerHTML = depositedCash;
depositBalance.innerHTML = parseFloat(+cash + +depositedCash);