function checkPassword(form) { 
    password1 = form.password.value.trim(); 
    password2 = form.hpassword.value.trim(); 

    // If password not entered 
    if (password1 == '' || password1 == null) 
    {
        document.getElementById('errorresult').innerHTML = "Password didnt match. Please try again.";
        return false;
    }
          
    // If confirm password not entered 
    else if (password2 == '' || password2 == null) 
    {
        document.getElementById('errorresult').innerHTML = "Password didnt match. Please try again.";
        return false;
    }
          
    // If Not same return False.     
    else if (password1 != password2) 
    { 
        // alert ("\nPassword did not match: Please try again...") ;
        document.getElementById('errorresult').innerHTML = "Password didnt match. Please try again.";
        return false; 
    } 

    // If same return True. 
    else
    {    
        return true; 
    } 
} 