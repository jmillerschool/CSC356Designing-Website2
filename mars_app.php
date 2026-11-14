<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Pilot Application</title>

    <!-- Link to the external CSS file and JavaScript file -->
    <link rel="stylesheet" href="mars.css">
    <script src="mars.js"></script>

</head>
<body class = "app">
    <header>
        <nav>           
            <a href="mars_home.php">Home</a>
            <a href="mars_app.php">Pilot Application</a>     
            <a href="mars_countdown.php">Countdown</a>              
        </nav>

        <h1>Trop Luxury Space Cruise Ships - Pilot Application</h1>
    </header>

    <main>
       <h2>Pilot Application</h2>

        <!-- form is used to collect pilot application information -->
        <!-- method is post because we are submitting data to the server -->
        <!-- action attribute specifies the URL to submit the form data to -->
        <!-- onsubmit is used to validate the form before submission for security -->
       <form name="frmApp" id = "frmApp" method="post" action="mars_app_process.php" onsubmit="return validateForm();">                  
            <div>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required><br><br>
            </div>

            <div>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required><br><br>
            </div>

            <div>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required><br><br>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
            </div>

            <div>
                <label for="experience">Years of Experience:</label>
                <input type="number" id="experience" name="experience" min="0" max="50" required><br><br>
            </div>

            <input type="submit" value="Submit Application">
        </form>
    </main>
    
</body>
</html>