function validateApplication() {

    let firstName = document.getElementById("firstName").value.trim();
    let lastName = document.getElementById("lastName").value.trim();
    let email = document.getElementById("email").value.trim();
    let ksuID = document.getElementById("ksuID").value.trim();
    let major = document.getElementById("major").value.trim();
    let lab = document.getElementById("lab").value;
    let interests = document.getElementById("interests").value.trim();
    let availability = document.getElementById("availability").value;

    if (firstName === "") {
        alert("Please enter your first name.");
        return false;
    }

    if (lastName === "") {
        alert("Please enter your last name.");
        return false;
    }

    if (email === "") {
        alert("Please enter your KSU email.");
        return false;
    }

    if (!email.endsWith("@students.kennesaw.edu")) {
        alert("Please enter a valid KSU student email address.");
        return false;
    }

    if (ksuID === "") {
        alert("Please enter your KSU ID.");
        return false;
    }

    if (major === "") {
        alert("Please enter your major.");
        return false;
    }

    // Check radio buttons
    let classification = document.querySelector('input[name="classification"]:checked');

    if (!classification) {
        alert("Please select your classification.");
        return false;
    }

    // Check at least one checkbox
    let skills = document.querySelectorAll('input[name="skills[]"]:checked');

    if (skills.length === 0) {
        alert("Please select at least one research skill.");
        return false;
    }

    if (lab === "") {
        alert("Please select a preferred research lab.");
        return false;
    }

    if (interests === "") {
        alert("Please describe your research interests.");
        return false;
    }

    if (availability === "") {
        alert("Please select your availability.");
        return false;
    }

    return true;
}
