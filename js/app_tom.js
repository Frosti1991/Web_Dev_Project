// # Build look - up table
// const questions = {
// ‘loesung1’: { ‘value’: ‘hallo’, ‘digits’: 6, … },
// ‘loesung2’: { ‘value’….}
// }

// # access element of look - up table
// questions[text.id][‘value’]-> ‘hallo’

$(document).ready(function () {
    //wait for app_bootstrap.js to finish before continuing
    window.bootstraploader
        .then(function () {
            setupPage();
        })

    function setupPage() {
        /**
         * Allergie state module
         * provides methods: setState, activate, deactivate, toggle
         *
         * @param initial {Boolean} inital state
         * @param activateHandler {Function} function to execute if activated
         * @param deactivateHandler {Function} function to execute if deactivated
         * @returns {binaryStateModule|null}
         */
        let binaryStateModule = function (initial, activateHandler, deactivateHandler) {
            let initialState = (!(initial === undefined || initial == false)); //false if undefined or == false, true otherwise.
            if (activateHandler === undefined || deactivateHandler === undefined) {
                console.log("failed to instanciate state module: invalid handler functions.");
                return null;
            }
            let self = this;
            self.activate = function () {
                self.state = true;
                activateHandler();
                return true;
            }
            self.deactivate = function () {
                self.state = false;
                deactivateHandler();
                return false;
            }
            self.toggle = function () {
                if (self.state) return self.deactivate();
                else return self.activate();
            }
            self.setState = function (state) {
                state = (!(state === undefined || state == false)); //false if undefined or == false, true otherwise.
                if (state) return self.activate();
                else return self.deactivate();
            }
            self.state = self.setState(initialState);
            return self;
        }

        const allergie = document.querySelector('#allergie');
        if (allergie) {
            //set to "nein" initially
            allergie.value = "0";
            let activateHandler = function () {
                document.querySelector('#allergie-container').style.display = "block";
            }
            let deactivateHandler = function () {
                document.querySelector('#allergie-container').style.display = "none";
            }
            const allergieStateModule = binaryStateModule(false, activateHandler, deactivateHandler);
            allergie.addEventListener('change', function (e) {
                console.log("hallo!");

                //call state module to handle transition
                if (allergie.value === "0") allergieStateModule.deactivate();
                else allergieStateModule.activate();
            });
        };
        // display/none-display "Allergie"-Entry end

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

        //
        // check #Loesung start

        const check = document.querySelector('#check');
        const loesung = document.querySelector('#Loesung');
        if (check) {
            check.addEventListener('submit', function (e) {
                console.log(loesung.value.toUpperCase());
                if (loesung.value.toUpperCase() == "CORONA") {
                    alert("Glückwunsch! Du hast das Lösungswort erraten und wirst nun zur Einladungs-Homepage weitergeleitet!");
                } else {
                    alert("Das war leider falsch! Bitte nochmal versuchen!");
                    e.preventDefault();
                }
            })
            // check #Loesung end
        };
        // //Anmeldung Name übergeben start
        // const Name_Input = document.querySelector('#name_input');
        // const Anmeldung = document.querySelector('#Anmeldung');
        // if (Anmeldung) {
        //     Anmeldung.addEventListener('submit', function (e) {
        //         // e.preventDefault();
        //         console.log(Name_Input.value);
        //         alert("Sie werden nun auf die offiziele Rätsel-Seite weitergeleitet!");

        //     })
        //     //Anmeldung Name übergeben end
        // };

    };

});

