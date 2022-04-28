const name = sessionStorage.getItem("name");
const pin = sessionStorage.getItem("pin");
let cash = sessionStorage.getItem("cash");
const welcome = document.getElementById("name");
let money = document.getElementById("money");
let password = document.getElementById("pin");
let cashAmount = document.getElementById("amount");
let warnning = document.getElementById("warning");
let outCash = document.getElementById("outCash");
let amount = document.getElementById("amountDP");

if(name){
    welcome.innerHTML = name;
} else welcome.innerHTML = "*I dont know what is your name*";


function add(x) {
    if (password.value.length <= 3) {
        password.value += x;
    }
}

function move() {
    if(password.value === pin) {
        window.location.href = "menu.html";
    }else {
        warnning.innerHTML = "Wrong PIN";
    }
}

function cashCheck(x) {
    cashAmount.value += x;
}

if(cash){
    money.innerHTML = cash;
} else money.innerHTML = "Your bank account is empty";



function cashOut() {
  if (parseFloat(cashAmount.value)<=cash && parseFloat(cashAmount.value) % 50 === 0) {
      outCash.innerHTML = `Withdraw:  ${cashAmount.value} PLN`;
      let saveWithdrawAmount = parseFloat(cashAmount.value);
      let restMoney = parseFloat(cash - cashAmount.value);
      sessionStorage.setItem("saveWithdrawAmount", saveWithdrawAmount);
      sessionStorage.setItem("restMoney", restMoney);
      sessionStorage.setItem("cash", parseFloat(cash - cashAmount.value));
      window.location.href = "cashOutDone.html";
    } else {
      outCash.innerHTML = `Failed to withdraw funds, the amount withdrawn must be divisible by 50 and not less than   + ${cash}`;
    }
}

function withdraw(x){
    let autoWithdraw = parseFloat(x);
    if (parseFloat(autoWithdraw)<=cash && parseFloat(autoWithdraw) % 50 === 0){
    sessionStorage.setItem("autoWithdraw", autoWithdraw);
    sessionStorage.setItem("cash", parseFloat(cash - autoWithdraw));
    window.location.href = "autoWithdraw.html";
    } else {
        outCash.innerHTML = `Failed to withdraw funds, the amount withdrawn must be divisible by 50 and not less than   + ${cash}`;
    }
}

function deposit(x){
    let autoDeposit = x;
    let balanceDeposit = parseFloat(+autoDeposit + +cash);
    sessionStorage.setItem("autoDeposit", autoDeposit);
    sessionStorage.setItem("cashDeposit", balanceDeposit);
    sessionStorage.setItem("cash", parseFloat(+cash + +x));
    window.location.href = "autoDeposit.html";
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

