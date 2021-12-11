let name = sessionStorage.getItem("name");
let pin = sessionStorage.getItem("pin");
let cash = sessionStorage.getItem("cash");
let welcome = document.getElementById("name");
let money = document.getElementById("money");
let passwordPin = document.getElementById("pin");
let cashAmount = document.getElementById("amount");
let warnning = document.getElementById("warning");
let outCash = document.getElementById("outCash");
let amount = document.getElementById("amountDP");

function add(x) {
    if (passwordPin.value.length <= 3) {
        passwordPin.value += x;
    }
}
if(cash){
    money.innerHTML = cash;
} else money.innerHTML = "Your bank account is empty";

function move() {
    if(passwordPin.value === pin) {
        window.location.href = "action.html";
    }else {
    warnning.innerHTML = "Wrong PIN";
    }
}

function cashCheck(x) {
        cashAmount.value += x;
}

function cashOut() {
  if (parseFloat(cashAmount.value)<=cash && parseFloat(cashAmount.value) % 50 === 0) {
      outCash.innerHTML = `Withdraw:  ${cashAmount.value} PLN`;
      let saveWithdrawAmount = parseFloat(cashAmount.value);
      let restMoney = parseFloat(cash - cashAmount.value);
      sessionStorage.setItem("saveWithdrawAmount", saveWithdrawAmount);
      sessionStorage.setItem("restMoney", restMoney);
      sessionStorage.setItem("cash", parseFloat(cash - cashAmount.value));
      window.location.href = "cashOutDone.html";
    } else if {
      outCash.innerHTML = `Failed to withdraw funds, the amount withdrawn must be divisible by 50 and not less than   + ${cash}`;
    }
}

function withdraw(x){
    let autoWithdraw = parseFloat(x);
    if (parseFloat(autoWithdraw)<=cash && parseFloat(autoWithdraw) % 50 === 0){
    sessionStorage.setItem("autoWithdraw", autoWithdraw);
    sessionStorage.setItem("cash", parseFloat(cash - autoWithdraw));
    window.location.href = "autoWD.html";
    } else if {
        outCash.innerHTML = `Failed to withdraw funds, the amount withdrawn must be divisible by 50 and not less than   + ${cash}`;
    }
}

function deposit(x){
    let autoDeposit = x;
    let balanceDeposit = parseFloat(+autoDeposit + +cash);
    sessionStorage.setItem("autoDeposit", autoDeposit);
    sessionStorage.setItem("cashDeposit", balanceDeposit);
    sessionStorage.setItem("cash", parseFloat(+cash + +x));
    window.location.href = "autoDP.html";
}

function otherDeposit(x){
    if (amount.value.length <= 4) {
        amount.value += x;
    }
}

function depositDone(){
    let depositedValue = parseFloat(amount.value);
    sessionStorage.setItem("depositedMoney", depositedValue);
}
