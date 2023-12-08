// send proposal

function sendProposal(projectid, freelanceid) {
    if (confirm("are you sure")) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "http://localhost/test/project/Controller/send.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`projectid=${projectid}&freelanceid=${freelanceid}`);
}
}


function showSubCategory(){
    var cat = document.getElementById('category').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('subCategory').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "http://localhost/test/project/Controller/select.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`catigoryid=${cat}`);
}

function showville(ville){
    var region = document.getElementById('region').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('ville').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "http://localhost/test/project/Controller/select.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`regionid=${region}&ville=${ville}`);
}
