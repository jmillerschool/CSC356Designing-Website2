<?php
    // see if a form was submitted to the page 
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // get the form data from the POST request
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $dob = $_POST["dob"];
        $email = $_POST["email"];
        $experience = $_POST["experience"];

        // display the submitted data back to the user
        echo "<h2>Application Submitted</h2>";
        echo "<p>Thank you, $firstName $lastName, for your application.</p>";
        echo "<p>Date of Birth: $dob</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Years of Experience: $experience</p>";
    } 
    // if the form was not submitted, redirect back to the application page
    else 
    {        
        echo "<p>No application data submitted."; 
    }

?>