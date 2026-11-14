<?php
    // we are creating a countdown to the next launch to Mars
    $departure_date = "2026-12-15 11:00";

    // convert our departure date to php seconds
    $departure_time = strtotime($departure_date);

    // get the current number of seconds since 1970
    $now = time();

    // var to hold the diff in time from now to depature 
    $seconds_left = $departure_time - $now;

    echo "<br>departure time: " . $departure_time;
    echo "<br>now: " . $now;
    echo "<br>seconds left: " . $seconds_left;

    // set up constant to represent 60 sec in a minute
    $MINUTE = 60;

    // set up constant to represent 3600 sec in a minute
    $HOUR = 3600;

    // set up constant to represent 86400 sec in a minute
    $DAY = 86400;

    // determine how many days are left before take off
    // foor rounds down
    $days = floor($seconds_left / $DAY);

    // determine how many hours are left before take off
    $hours = floor(($seconds_left % $DAY) / $HOUR);

    // determine how many minutes are left before take off
    $minutes = floor(($seconds_left % $HOUR) / $MINUTE);

    echo "<br>Days left: " . $days;
    echo "<br>Hours left: " . $hours;
    echo "<br>Minutes left: " . $minutes;   

    // message  var 
    $messsage = "";

    // create messages based on time
    if ($seconds_left < 0){
        $messsage = "Opps you missed the launch!";
    }
    elseif($days > 30){
        $messsage = "Days left: " . $days . "<br> Plenty of time for takeoff.";
    }
    elseif($days > 14){
        $messsage = "Days left: " . $days . "You still have some time before takeoff.";
    }
    elseif($days > 3){
        $messsage = "Days left: " . $days . "Pack your bags!";
    }
    else {
        $messsage = "Days left: " . $days . "Time to go to the launch pad!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Countdown</title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="mars.css">
</head>
<body class = "countdown">
    <header>
        <nav>           
            <a href="mars_home.php">Home</a>
            <a href="mars_app.php">Pilot Application</a> 
            <a href="mars_countdown.php">Countdown</a>             
        </nav>

        <h1>Countdown to next ship:</h1>
    </header>

    <main>
       <h2 class = "ctdh2"> Come travel the galaxy with us </h2>
        <div class = "cntMess">
            <p><?php echo $messsage; ?> </p>

            <p>Time to departure: 
                Days: <?php echo $days;?> days            
                Hours: <?php echo $hours;?> hours
                Minutes: <?php echo $minutes;?> minutes
            </p>

            <!-- <p>Next departure: <?php echo $departure_date?></p> -->
            <p>Next departure: <?php echo date ("F j, Y \a\\t g:i A", $departure_time) ?></p>
        </div>      
    </main>    
</body>
</html>