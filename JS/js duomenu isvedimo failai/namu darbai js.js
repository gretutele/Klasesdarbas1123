// Apskritimo ilgis ir plotas //

let r = 15;
let ats1;
let ats2;

ats1 = r * 2;
ats2 = r * 3.14 * 2;

console.log(ats1);
console.log(ats2);

// Duomenys //

let vardas = "Sima";
let pavarde = "Rimaite";
let kursas = 4 + "kursas,";
let pavadinimas = "mokosi KTU,";
let pazymiai = "jos pazymiai [8, 3, 9]";

console.log(vardas, pavarde, kursas, pavadinimas, pazymiai);

let sentence = 'vardas yra Sima, pavarde yra Rimaite, kursas 4, ' +
    'mokosi "KTU", jos pazymiai [8, 3, 9]';
document.getElementById("demo").innerHTML = sentence + "<br>";

// typeof //

console.log(typeof 'Sima');
console.log(typeof 'Rimaite');
console.log(typeof 4);
console.log(typeof 'mokosi KTU');
console.log(typeof []);

//  Objektas studente //

const studente = {
    vardas1: "Sima",
    pavarde1: "Rimaite",
    kursas1: 4,
    pavadinimas1: "KTU",
    pazymiai1: [8, 3, 9]
};
// masyvas/konsole.log 5/6 //

let masyvas = ["Sima", "Rimaite", 4, "KTU", [8, 3, 9]];
console.log(masyvas);

//  dot ir bracket //

let dot = "Dot notation: " +
    studente.vardas1 + " " +
    studente.pavarde1 + " mokosi " +
    studente.kursas1 + " kurse, " +
    studente.pavadinimas1 + ", jos pazymiai: " + "[" +
    studente.pazymiai1 + "]";
console.log(dot);

let bracket = "Bracket notation: " +
    studente['vardas1'] + " " +
    studente['pavarde1'] + " mokosi " +
    studente['kursas1'] + " kurse, " +
    studente['pavadinimas1'] + ", jos pazymiai: " + "[" +
    studente['pazymiai1'] + "]";
console.log(bracket);

// pazymiai //

for (let i = 0; i < masyvas.length; i++) {
   document.getElementById("pazymiai").innerHTML = masyvas[4];
}

// pakelti per viena  //

let x = 8; y = 3; z = 9;
x++ , y++ , z++;
console.log(x, y, z);

// suma

let sum = 8 + 3 + 9;
document.getElementById("sum").innerHTML = sum;


// daugyba

let daug = 8 * 3;
document.getElementById("daug").innerHTML = daug;

// ar kursas numeral tipo

kursas = 4;
document.getElementById("NaN").innerHTML = typeof kursas;

//  ar studente mokosi ketvirtame kurse ir ar ši reikšmė yra kaip numeral

if("Sima" === 4 && 4 === NaN) {
document.getElementById("ketvirtas_kursas").innerHTML = typeof NaN;
}

//paskaitos uzduotis

function sudetis(a, b){
    return a + b;
}
function atimtis(a, b){
    return a - b;
}
function daugyba(a, b){
    return a * b;
}
function dalyba(a, b) {
    return a / b;
}
let m = 1;
let n= 2;
function run(){
     let rez = document.getElementById('rezultatai');
     for (let m = 1; m <= 5; m++) {
         for(let n = 1; n <= 20; n += 2){
             rezult.innerHTML += 'Skaiciu [' + m + ', ' + n + '] suma: ' + sudetis(m, n) + '<br>';
             rezult.innerHTML += 'Skaiciu [' + m + ', ' + n + '] atimtis: ' + atimtis(m, n) + '<br>';
             rezult.innerHTML += 'Skaiciu [' + m + ', ' + n + '] daugyba: ' + daugyba(m, n) + '<br>';
             rezult.innerHTML += 'Skaiciu [' + m + ', ' + n + '] dalyba: ' + dalyba(m, n) + '<br>';
          }
      }
};

let kortele = document.getElementsByClassName('kortele');

function perjungtTaba(pasirinkimaiId) {
    console.log(pasirinkimaiId);
    console.log(kortele);
    for (let i = 0; i < kortele.length; i++) {
       $(kortele[i]).css("display", "none");
    }
    $(document.getElementById(pasirinkimaiId))
        .css("display", "block");
}

// reikia paspaudus gauti kad zodis pasikeitu i atributa
// kaip a tarkim ar string ar kazkas tokio Jquery tema

//neanonimine
function tagVardas(elementas) {
   console.log ('veikiu', elementas);
   //$('#kasas').text(elementas.target.tagName);
}
// anonimine
$(document).ready(function() {
 console.log ('veikiu');
 $('*').click(tagVardas);
});

//uzduotis toliau pilna

$('*').click(function (e) {
        let pavadinimas = e.target.tagName;
        let tags = $(pavadinimas);
        let tagCount = tags.length;
        $('#kasas').text('Paspaudete ant ' + pavadinimas + ' tago. Tokiu elementu yra: ' + tagCount)
        tags.css('background-color', 'yellow');
    }
);

