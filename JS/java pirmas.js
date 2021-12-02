<!--
let a = 1;
let tekstas = 'Kintamojo a reiksme: ';
console.log(tekstas + a);
a = 2;
console.log(tekstas + a);

let b = 'Greta'
let e = ' '
let c = 'Mano vardas'
console.log(b + e + c);

let metai = 1989;
let menuo = 10;
let diena = 25;
let a1 = metai % 10;
let a2 = menuo % 10;
let a3 = diena % 10;
let ats = a1 + a2 + a3;
console.log(ats);
-->

<!--
let n1 = 3;
let n2 = 4;

let s1 = (n1 - 2) * 180;
let s2 = (n2 - 2) * 180;

document.getElementById('ats')
.innerHTML = 'Pirmo daugiakampio [' + n1 + '] kampu suma yra ' + s1 + ' ';
document.getElementById('ats')
.innerHTML += 'Antrojo daugiakampio [' + n2 + '] kampu suma yra ' + s2 + ' ';
document.getElementById('ats')
.innerHTML += 'Abieju kampu suma yra ' + (s1 + s2);

let elementasAts = document.getElementById('ats'
);
-->

let inta=-5; let intb=0; let intc=-4; let intd=4;
let answer;

if ((intd >= inta) && (intc <= intb)) {
    let cut_x = Math.max(inta, intc);
    let cut_y = Math.min(intd, intb);
    answer = "Rezis: " + [cut_x, cut_y];
} else {
    answer = "Null";
}
console.log(answer);
