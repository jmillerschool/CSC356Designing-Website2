<?php
    // any code in between the opening and closing tags needs to follow the rules of php

    // php is a loosely typed language so it will guess the data type of a variable based on the 
    // value assigned to it
    
    // var start with $ sign then after the $ you can use letters or _ to 
    //      start the variable name and then you can use letters, numbers or _
    //      to continue the variable name
    $name = "John Doe"; 

    // PHP is case sensitive so $name and $Name are different variables
    $Name = "Jane Doe";

    // starting capitals should only be used with constants - var that do not change
    // uppercase is a sign for other programmers that this variable is a constant and 
    // should not be changed
    $PI = 3.14;

    // concat in PHP when you add strings to each other you use the . operator
    echo "name=" . $name;

    // Variable data types in PHP is 
    //      string- a sequence of characters
    //      integer- whole numbers
    //      float- decimal numbers
    //      boolean- true or false
    //      array- a collection of values
    //      object- an instance of a class
    //      null- a variable with no value
    //      object- an instance of a class

    // There are four variable scopes in PHP
    //      local- a variable declared inside a function and can only be accessed inside that function
    //      global- a variable declared outside a function and can be accessed inside a function using the global keyword
    //      static- a variable declared inside a function and can be accessed inside that function even after the function has finished executing
    //      superglobal- a variable that is available in all scopes throughout a script

    // STATIC every time you call it it will remember the value of the variable from the last time 
    //      it was called that time durring that user session. if you refresh the page it will reset 
    //      the value of the variable to the initial value

    // Function in PHP is a block of code that can be reused multiple times. 
    //      this is a stand alone funtions it does not take in any values and does not return any values
    function calcPayroll()
    {
        // local variable that can only be accessed inside the function    
        $hoursPerWeek = 20;

        // local var
        $payRate = 20;

        $totalPay = $hoursPerWeek * $payRate;

        // print out the total calcPayroll
        echo "<br>Total Pay: " . $totalPay;
    }

    // calling the function to execute the code inside it
    calcPayroll();

    // this global var resides in a different part of the computer memory that local function
    //      variable in calcPayroll so it is a seperate var
    $hoursPerWeek = 30;

    //create a function that uses a parameter and a global var
    function calcPay($payRate)
    {
        // we want to use the global hoursPerWeek var
        global $hoursPerWeek;

        // calulate total calcPay
        $totalPay = $hoursPerWeek * $payRate;

        // print out the total calcPay
        echo "<br>Total Pay: " . $totalPay;
    }

    // calling the function to execute the code inside it passing in pay rate as a parameter
    calcPay(25);

    // create a function to demonstrate static variable in PHP works
    //      static var in a function remembers the value between function calls for a particular user session
    //      not parameters but a return value
    function calculateTotalPay()
    {
        $hoursPerWeek = 10;
        $payRate = 20;
        
        // declare a static variable to remember the value between function calls
        static $totalPay;
        $totalPay = $totalPay + ($hoursPerWeek * $payRate);

        // return the total pay to the calling code
        return $totalPay;
    }

    // call the function to execute the code inside it and return the total pay to use
    $totalPay = calculateTotalPay();
    echo "<br>Total Pay: " . $totalPay;

    // call it a second time to show static variable remembers the value from the last time it 
    //     was called
    $totalPay = calculateTotalPay();
    echo "<br>Total Pay: " . $totalPay;

    // this fucntion will take in a parameter and return a value
    function calculatePay($hoursPerWeek, $payRate)
    {
        // calculate total pay
        //$totalPay = $hoursPerWeek * $payRate;

        // return the total pay to the calling code
        //return $totalPay;

        // can add validation to check if the values passed in are valid 
        return $hoursPerWeek * $payRate;
    }

    // call the calculatePay function and pass in the hours per week and pay rate as parameters
    //      and return the total pay to use
    //      best as it is more dynamic and can be used in different situations with different values

    $pay = calculatePay(25, 15);
    echo "<br>Calculated Pay: " . $pay;

    // loops - 2 main types of loops in PHP are for and while loops
    //      FOR LOOPS- is used when you know how many times you want to loop through a block of code
    //      WHILE LOOPS- is used when you don't know how many times you want to loop through

    $counter = 0;
    // while loop will loop through the code block as long as the condition is true
    while ($counter < 5) {
        echo "<br>" . $counter;

        // when using a while loop make sure you include the "off ramp" so the loop will not run forever
        $counter++;
    }

    // for loops are used when you know how many times you want to loop through a block of code
    for ($counter = 0; $counter < 5; $counter++) {
        echo "<br>" . $counter;
    }

    // we ten to use the foreach syntax when working with arrays as it is easier to read and understand
    $years_exp = [5, 10, 1];

    // the $years_exp  is the array we are looping through 
    // $exp is the variable that will hold the value of the current element in the array
    // in other words For each item in $years_exp, temporarily call that item $exp
    foreach ($years_exp as $exp) {
       // add some if/elso (decision) logic here to catergorize the years of experience into different levels
       if ($exp < 3) {
            echo "<br>Welcome to flying with your " . $exp . " years of experience.";
       } elseif ($exp < 6) {
            echo "<br>You have some experince with your " . $exp . " years of flying.";
       } else {
            echo "<br>You have much experince with your " . $exp . " years of flying.";
       }
    }
?>  