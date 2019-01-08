var sample_global = 'This a sample global variable';

function click_me() {
	var msg = document.getElementById("display_message");
	msg.innerHTML += "<p>Kita sendang belajar Javascript!!</p>";
}

console.log(sample_global.toUpperCase())
console.log(sample_global.length)

var a = 5;
var b = 3;
console.log("Penjumlahan "+a+b);
console.log("Perkalian "+a*b);
console.log("Pembagian "+a/b);
console.log("Pengurangan "+(a-b));
console.log("Modulus "+a%b);

//Prioritas operator aritmatika
console.log((1+5)*5);