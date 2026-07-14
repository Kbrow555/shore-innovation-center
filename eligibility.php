<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility Evaluator</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <a href="https://www.kennesaw.edu/ccse/" target="_blank">
        <img src="img/ksu-logo.png" alt="KSU Logo" class="logo">
    </a>

    <h1>Robin and Doug Shore Innovation Center</h1>

    <nav>
    <a href="index.html">Home</a>
    <a href="facilities.html">Facilities & Labs</a>
    <a href="research.html">Research & Opportunities</a>
    <a href="eligibility.html" class="active">Eligibility Evaluator</a>
</nav>

</header>

<main>

<h2>Student Assistant Position Eligibility Evaluator</h2>

<p>
Complete the form below to determine whether you meet the eligibility
requirements for a Summer Student Assistant position.
</p>

<form id="eligibilityForm">

    <label for="studentName">Student Name:</label><br>
    <input type="text" id="studentName" name="studentName"><br><br>

    <label for="studentEmail">Student Email:</label><br>
    <input type="email" id="studentEmail" name="studentEmail"><br><br>

    <label for="studentStatus">Student Status:</label><br>

    <select id="studentStatus">
        <option value="">-- Select Status --</option>
        <option value="undergraduate">Undergraduate</option>
        <option value="graduate">Graduate</option>
    </select>

    <br><br>

    <div id="courseSection">
        <!-- JavaScript will place the courses here -->
    </div>

    <br>

    <button type="button" id="evaluateBtn">
        Evaluate Eligibility
    </button>

</form>

<br>

<div id="result"></div>

</main>

<footer>

<p>
This website is a student class project for IT 5443 Web Technologies at Kennesaw State University.
It is not an official KSU website.
</p>

</footer>

<script src="eligibility.js"></script>

</body>
</html>