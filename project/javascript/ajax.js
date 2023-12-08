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