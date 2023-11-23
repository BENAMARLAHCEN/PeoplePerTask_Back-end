
  var form = document.getElementById('contact-form')

  var mailregex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  var passwordregex=/^[a-zA-Z0-9._%+-]{6,}$/

  form.addEventListener('submit', function(e)  {
   
    e.preventDefault();
 
    var name = document.getElementById('name_in').value;
    var mail = document.getElementById('email_in').value;
    var message = document.getElementById('message_in').value;
    var name_error = document.getElementById('name_error');
    var mail_error = document.getElementById('email_error');
    var message_error = document.getElementById('message_error');
    

    name_error.textContent=""
    mail_error.textContent=""
    message_error.textContent=""

    if(name.trim() == "")
    {
        name_error.textContent="name is required"
        return;
    }

    if(mail.trim() == "")
    {
        mail_error.textContent="email is required"
        return;
    }

    if(!mailregex.test(mail))
    {
        mail_error.textContent="email is not correct"
        return;     
    }

    if(message.trim().length<30)
    {
        message_error.textContent="message must be more than 30 characters long."
        return;
    }

  form.submit();
  })
                //   validation regesster


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