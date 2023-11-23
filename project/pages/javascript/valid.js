var form2 = document.getElementById('regester-form')

var mailregex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  var passwordregex=/^[a-zA-Z0-9._%+-]{6,}$/;

form2.addEventListener('submit', function(event)  {
    event.preventDefault();

    var name_regester = document.getElementById('name_inp').value;
    var mail_regester = document.getElementById('mail_inp').value;
    var password = document.getElementById('password_inp').value;
    var password_rp = document.getElementById('password_rep_inp').value;
    
    var name_regester_err = document.getElementById('name_reg_err');
    var mail_regester_err = document.getElementById('email_reg_err');
    var password_err = document.getElementById('password_reg_err');
    var password_rp_err = document.getElementById('password_rep_err');

    name_regester_err.textContent=""
    mail_regester_err.textContent=""
    password_err.textContent=""
    password_rp_err.textContent=""


    if(name_regester.trim() == "")
    {
        name_regester_err.textContent="name is required"
        return;
    }

    if(mail_regester.trim() == "")
    {
        mail_regester_err.textContent="email is required"
        return;
    }

    if(!mailregex.test(mail_regester))
    {
        mail_regester_err.textContent="email is not correct"
        return;     
    }

    if(!passwordregex.test(password))
    {
        password_err.textContent="password must be more than 6 char"
        return;
    }

    if(password !== password_rp)
    {
        password_rp_err.textContent="password doesn't match"
        return;
    }


    form2.submit();
})




