<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>

<h2>Faculty Research Assistant Application</h2>

<?php

// Retrieve submitted form data
$firstName = trim($_POST["firstName"] ?? "");
$lastName = trim($_POST["lastName"] ?? "");
$email = trim($_POST["email"] ?? "");
$ksuID = trim($_POST["ksuID"] ?? "");
$major = trim($_POST["major"] ?? "");
$classification = $_POST["classification"] ?? "";
$skills = $_POST["skills"] ?? [];
$lab = $_POST["lab"] ?? "";
$interests = trim($_POST["interests"] ?? "");
$availability = $_POST["availability"] ?? "";

// Store validation errors
$errors = [];

// Required field validation
if ($firstName == "") {
    $errors[] = "First name is required.";
}

if ($lastName == "") {
    $errors[] = "Last name is required.";
}

if ($email == "") {
    $errors[] = "KSU email is required.";
}

if ($ksuID == "") {
    $errors[] = "KSU ID is required.";
}

if ($major == "") {
    $errors[] = "Major is required.";
}

if ($classification == "") {
    $errors[] = "Please select your classification.";
}

if (count($skills) == 0) {
    $errors[] = "Please select at least one research skill.";
}

if ($lab == "") {
    $errors[] = "Please select a preferred research lab.";
}

if ($interests == "") {
    $errors[] = "Please enter your research interests.";
}

if ($availability == "") {
    $errors[] = "Please select your availability.";
}
?>

<h2>Application Results</h2>
<?php

if (!empty($errors)) {

    echo "<h3>Application Could Not Be Submitted</h3>";

    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";

    echo "<p><a href='application.php'>Return to Application</a></p>";

} else {

?>
<h3>Application Submitted Successfully!</h3>

<p>
Thank you for applying to become a Faculty Research Assistant.
Below is a summary of your application.
</p>

<table border="1">

<tr>
    <th>Application Item</th>
    <th>Response</th>
</tr>

<tr>
    <td>First Name</td>
    <td><?= htmlspecialchars($firstName) ?></td>
</tr>

<tr>
    <td>Last Name</td>
    <td><?= htmlspecialchars($lastName) ?></td>
</tr>

<tr>
    <td>Email</td>
    <td><?= htmlspecialchars($email) ?></td>
</tr>

<tr>
    <td>KSU ID</td>
    <td><?= htmlspecialchars($ksuID) ?></td>
</tr>

<tr>
    <td>Major</td>
    <td><?= htmlspecialchars($major) ?></td>
</tr>

<tr>
    <td>Classification</td>
    <td><?= htmlspecialchars($classification) ?></td>
</tr>

<tr>
    <td>Preferred Lab</td>
    <td><?= htmlspecialchars($lab) ?></td>
</tr>

<tr>
    <td>Availability</td>
    <td><?= htmlspecialchars($availability) ?></td>
</tr>

<tr>
    <td>Research Interests</td>
    <td><?= htmlspecialchars($interests) ?></td>
</tr>

<tr>
    <td>Research Skills</td>
    <td><?= htmlspecialchars(implode(", ", $skills)) ?></td>
</tr>

</table>
<?php
}
?>

</main>

<?php include 'includes/footer.php'; ?>