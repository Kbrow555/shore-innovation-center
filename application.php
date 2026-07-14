<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>

<h2>Faculty Research Assistant Application</h2>

<p>
Students who meet the eligibility requirements may submit this application to
express their interest in working as a Faculty Research Assistant at the Robin
and Doug Shore Innovation Center.
</p>

<p>
Please complete all required fields below before submitting your application.
</p>
<form id="applicationForm"
      action="processApplication.php"
      method="post"
      onsubmit="return validateApplication();">
 
 <h3>Student Information</h3>

<label for="firstName">First Name *</label><br>
<input type="text" id="firstName" name="firstName"><br><br>

<label for="lastName">Last Name *</label><br>
<input type="text" id="lastName" name="lastName"><br><br>

<label for="email">KSU Email *</label><br>
<input type="email" id="email" name="email"><br><br>

<label for="ksuID">KSU ID *</label><br>
<input type="text" id="ksuID" name="ksuID"><br><br>

<label for="major">Major *</label><br>
<input type="text" id="major" name="major"><br><br>
 
<h3>Classification</h3>

<input type="radio" id="freshman" name="classification" value="Freshman">
<label for="freshman">Freshman</label><br>

<input type="radio" id="sophomore" name="classification" value="Sophomore">
<label for="sophomore">Sophomore</label><br>

<input type="radio" id="junior" name="classification" value="Junior">
<label for="junior">Junior</label><br>

<input type="radio" id="senior" name="classification" value="Senior">
<label for="senior">Senior</label><br>

<input type="radio" id="graduate" name="classification" value="Graduate">
<label for="graduate">Graduate</label><br><br>

<h3>Research Skills</h3>

<input type="checkbox" name="skills[]" value="Programming">
Programming<br>

<input type="checkbox" name="skills[]" value="Laboratory Experience">
Laboratory Experience<br>

<input type="checkbox" name="skills[]" value="Data Analysis">
Data Analysis<br>

<input type="checkbox" name="skills[]" value="Technical Writing">
Technical Writing<br>

<input type="checkbox" name="skills[]" value="Teamwork">
Teamwork<br><br>

<label for="lab">Preferred Research Lab *</label><br>

<select id="lab" name="lab">
    <option value="">Select a Lab</option>
    <option>Artificial Intelligence</option>
    <option>Cybersecurity</option>
    <option>Robotics</option>
    <option>Biomedical Engineering</option>
    <option>Data Science</option>
</select>

<br><br>

<label for="interests">Research Interests *</label><br>

<textarea
id="interests"
name="interests"
rows="5"
cols="50"></textarea>

<br><br>

<label for="availability">Weekly Availability *</label><br>

<select id="availability" name="availability">
    <option value="">Select Availability</option>
    <option>5-10 hours</option>
    <option>10-15 hours</option>
    <option>15-20 hours</option>
    <option>20+ hours</option>
</select>

<br><br>

<input type="submit" value="Submit Application">
<input type="reset" value="Reset Form">

</form>

</main>
<script src="application.js"></script>
<?php include 'includes/footer.php'; ?>

