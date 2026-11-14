function validateForm()
{
    // shortcut to the form 
    let form = document.frmApp;

    // name user entered 
    // trim method removes whitespace at the beginning and end 
    let firstName = form.firstName.value.trim();
    let lastName = form.lastName.value.trim();
    let dob = form.dob.value.trim();
    let email = form.email.value.trim();
    let experience = form.experience.value.trim();

    // keep track of whether or not the form elements pass validation 
    let isValid = true;

    // if this is true the form passed validation otherwise the user should be given a 
    // message that their form is invalid
    if (firstName.length < 2)
    {
        alert("First name must be at least 2 characters long.");
        isValid = false;
    }
    if (lastName.length < 2)
    {
        alert("Last name must be at least 2 characters long.");
        isValid = false;
    }
    if (dob === "")
    {
        alert("Please enter your date of birth.");
        isValid = false;
    }
    if (email === "")
    {
        alert("Please enter your email address.");
        isValid = false;
    }
    if (experience === "")
    {
        alert("Please enter your years of experience.");
        isValid = false;
    }

    return isValid;

    // script for countdown
    setTimeout(() => 
        {
            location.reload();            
        },5000); // 5 seconds reloads
}