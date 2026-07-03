const studentStatus = document.getElementById("studentStatus");
const courseSection = document.getElementById("courseSection");
const result = document.getElementById("result");
const evaluateBtn = document.getElementById("evaluateBtn");

studentStatus.addEventListener("change", displayCourses);
evaluateBtn.addEventListener("click", evaluateEligibility);

function displayCourses() {

    if (studentStatus.value === "undergraduate") {

        courseSection.innerHTML = createCourseHTML([
            "CSE 3203 Mobile System Overview",
            "IT 4213 Mobile Web Development",
            "IT 4323 Database Systems",
            "IT 4403 Advanced Web Development"
        ]);

    } else if (studentStatus.value === "graduate") {

        courseSection.innerHTML = createCourseHTML([
            "IT 7113 Data Visualization",
            "IT 6713 Business Intelligence",
            "IT 7323 Information Security",
            "IT 7423 Advanced Database Systems"
        ]);

    } else {

        courseSection.innerHTML = "";
    }
}

function createCourseHTML(courses) {

    let html = "<h3>Required Courses</h3>";

    courses.forEach(course => {

        html += `
            <label>${course}</label>

            <select class="grade">
                <option value="">Select Grade</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>F</option>
            </select>
            <br><br>
        `;

    });

    return html;
}

function gradeToPoints(letter) {

    switch(letter){

        case "A":
            return 4;

        case "B":
            return 3;

        case "C":
            return 2;

        case "D":
            return 1;

        default:
            return 0;
    }
}

function evaluateEligibility() {

    const name = document.getElementById("studentName").value.trim();
    const email = document.getElementById("studentEmail").value.trim();

    if(name === ""){

        result.innerHTML = "Please enter your name.";
        return;
    }

    if(email === ""){

        result.innerHTML = "Please enter your email.";
        return;
    }

    if(studentStatus.value === ""){

        result.innerHTML = "Please select your student status.";
        return;
    }

    const grades = document.querySelectorAll(".grade");

    let total = 0;

    for(let grade of grades){

        if(grade.value === ""){

            result.innerHTML = "Please select a grade for every course.";
            return;
        }

        total += gradeToPoints(grade.value);
    }

    const average = total / grades.length;

    let eligible = false;

    if(studentStatus.value === "undergraduate"){

        eligible = average > 3.2;

    }else{

        eligible = average > 3.7;
    }

    if(eligible){

        result.innerHTML = `
            <h3>Congratulations!</h3>

            <p><strong>Average Grade:</strong> ${average.toFixed(2)}</p>

            <p>You meet the eligibility requirements for a Summer Student Assistant position.</p>

            <p>
                <a href="#">Continue to the Milestone 3 Application Form</a>
            </p>
        `;

    }else{

        result.innerHTML = `
            <h3>Thank You</h3>

            <p><strong>Average Grade:</strong> ${average.toFixed(2)}</p>

            <p>
                Thank you for your interest.
                At this time you do not meet the minimum eligibility requirement.
            </p>
        `;
    }

}