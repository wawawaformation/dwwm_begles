/**
 * Transforme les chaînes de caractères de date en objets Date, puis vérifie que dateBefore est antérieur à dateAfter.
 * @param {string} dateBeforeString 
 * @param {string} dateAfterString 
 */
function compareDates(dateBeforeString, dateAfterString) {
    const dateBefore = new Date(dateBeforeString);
    const dateAfter = new Date(dateAfterString);
    return dateBefore < dateAfter;
}

/**
 * Comapare si la date passé en paramètre est antérieur à la date du jour.
 * @param {string} dateString 
 * @returns 
 */

function isDateBeforeToday(dateString) {
    const date = new Date(dateString);
    const today = new Date();
    return date < today;
}

document.getElementById('add-author').addEventListener('submit', function (e) {
    const birthdate = document.getElementById('birthdate').value;
    const deathdate = document.getElementById('deathdate').value;

    if (birthdate != "" && deathdate != "") {
        if (!isDateBeforeToday(birthdate)) {
            e.preventDefault();
            alert("La date de naissance doit être antérieure à la date du jour.");
            return
        }
        if (!isDateBeforeToday(deathdate)) {
            e.preventDefault();
            alert("La date de décès doit être antérieure à la date du jour.");
            return
        }
        if (!compareDates(birthdate, deathdate)) {
            e.preventDefault();
            alert("La date de naissance doit être antérieure à la date de décès.");
            return
        }
    }

    if (birthdate != "") {
        if (!isDateBeforeToday(birthdate)) {
            e.preventDefault();
            alert("La date de naissance doit être antérieure à la date du jour.");
            return
        };
    } else if (deathdate != "") {
        if (!isDateBeforeToday(deathdate)) {
            e.preventDefault();
            alert("La date de décès doit être antérieure à la date du jour.");
            return
        }
    }

    return
});