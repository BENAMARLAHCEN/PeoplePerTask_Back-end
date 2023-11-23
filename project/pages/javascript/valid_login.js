var form3 = document.getElementById('login-form')
var mailregex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  var passwordregex=/^[a-zA-Z0-9._%+-]{6,}$/;

form3.addEventListener('submit', function(event)  {
    event.preventDefault();

    var l_mail_regester = document.getElementById('login-mail_inp').value;
    var l_password = document.getElementById('login-password_inp').value;
    
    var l_mail_regester_err = document.getElementById('login-mail_reg_err');
    l_mail_regester_err.textContent=""
 
    if(!passwordregex.test(l_password) || !mailregex.test(l_mail_regester))
    {
        l_mail_regester_err.textContent="email or password are not correct"
        return;
    }



    form3.submit();
})