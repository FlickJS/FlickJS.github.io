let image = document.getElementById("banknote");
let imagePath = 'img/original.jpg';
let img;

let amountImages = parseFloat(savedMoneyAmount/50);

for(i=0;i<amountImages;i++){
    img = new Image();
    img.src = imagePath;
    image.style.width = amountImages * 100 + "px";
    image.appendChild(img);
}