// # Build look - up table
// const questions = {
// ‘loesung1’: { ‘value’: ‘hallo’, ‘digits’: 6, … },
// ‘loesung2’: { ‘value’….}
// }

// # access element of look - up table
// questions[text.id][‘value’]-> ‘hallo’

// //Anmeldung Name übergeben start
// const Name_Input = document.querySelector('#name_input');
// const Anmeldung = document.querySelector('#Anmeldung');
// Anmeldung.addEventListener('submit', function (e) {
//     // e.preventDefault();
//     console.log(Name_Input.value);
//     alert("Sie werden nun auf die offiziele Rätsel-Seite weitergeleitet!");

// })
// //Anmeldung Name übergeben end

// // display/none-display "Allergie"-Entry start
// const test = document.querySelector('#text_musik');
// test.addEventListener('input', function () {
//     console.log("hallo");
//     if (test.value == "ja") {
//         document.querySelector('#text_allergie').style.display = "block";
//     } else
//         document.querySelector('#text_allergie').style.display = "none";
// });
// const allergie = document.querySelector('#allergie');
// allergie.addEventListener('change', function () {
//     console.log("hallo!");
//     if (allergie.value == "ja") {
//         document.querySelector('#text_allergie').style.display = "block";
//     } else
//         document.querySelector('#text_allergie').style.display = "none";
// });
// // display/none-display "Allergie"-Entry end

//colorize entries friends start

const solutions = {
    Antwort1: {
        value: "DYNAMO",
        pairedInput: document.querySelector("#Buchstabe1"),
        lookingLetter: "O",
    },
    Antwort2: {
        value: "FERNSEHER",
        pairedInput: document.querySelector("#Buchstabe2"),
        lookingLetter: "R",
    },
    Antwort3: {
        value: "GRÜN",
        pairedInput: document.querySelector("#Buchstabe3"),
        lookingLetter: "N",
    },
    Antwort4: {
        value: "HANDBALL",
        pairedInput: document.querySelector("#Buchstabe4"),
        lookingLetter: "A",
    },
    Antwort5: {
        value: "BLUMENTOPF",
        pairedInput: document.querySelector("#Buchstabe5"),
        lookingLetter: "O",
    },
    Antwort6: {
        value: "CANADA",
        pairedInput: document.querySelector("#Buchstabe6"),
        lookingLetter: "C",
    },
    Antwort7: {
        value: "DRESDEN",
        pairedInput: document.querySelector("#Buchstabe7"),
        lookingLetter: "R",
    },
    Antwort8: {
        value: "OBERLOSA",
        pairedInput: document.querySelector("#Buchstabe8"),
        lookingLetter: "O",
    },
    Antwort9: {
        value: "TEAG",
        pairedInput: document.querySelector("#Buchstabe9"),
        lookingLetter: "A",
    },
}

const colorize = function (text) {

    console.log(text.id);
    console.log(solutions[text.id]["value"]);
    console.log(text.value.charAt(solutions[text.id]["lookingLetter"] - 1));
    const result = text.value.toUpperCase();
    console.log(result);
    if (result == solutions[text.id]["value"]) {
        text.style.backgroundColor = "green";
        solutions[text.id]["pairedInput"].value = solutions[text.id]["lookingLetter"].toUpperCase();
    } else if (result.length < solutions[text.id]["value"].length) {
        text.style.backgroundColor = "white";
        solutions[text.id]["pairedInput"].value = "";
    } else {
        text.style.backgroundColor = "red";
        solutions[text.id]["pairedInput"].value = "";
    }
};

const allTries = document.querySelectorAll('.solution_try');
var counter = 0;
for (let trie of allTries) {
    counter++;
    trie.addEventListener('input', function () {
        colorize(trie);
    });
};

//colorize entries friends end


//check #Loesung start

const check = document.querySelector('#check');
const loesung = document.querySelector('#Loesung');
check.addEventListener('submit', function (e) {
    console.log(loesung.value.toUpperCase());
    if (loesung.value.toUpperCase() == "CORONA") {
        alert("Glückwunsch! Du hast das Lösungswort erraten und wirst nun zur Einladungs-Homepage weitergeleitet!");
    } else {
        alert("Das war leider falsch! Bitte nochmal versuchen!");
        e.preventDefault();
    }
})

//check #Loesung end

