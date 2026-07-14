<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

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

<script src="eligibility.js"></script>

<?php include 'includes/footer.php'; ?>
