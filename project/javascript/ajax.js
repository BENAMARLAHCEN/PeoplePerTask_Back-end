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


function showRegion(){
    var region = document.getElementById('region').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('ville').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "http://localhost/test/project/view/viewAllProject.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`regionid=${region}&ville=${ville}`);
}

function showProject(){  
    $.ajax({
        url:"http://localhost/test/project/view/viewAllProject.php",
        method:"post",
        data:{show :1},
        success:function(data){
            $('.allProject-section').html(data);
        }
    });
}

function filterbyCategory(){
    var category3 = document.getElementById('category').value;
    showProjectByCatg(category3);
    showSubCategory();
}

function filterbySubCategory(){
    var subCtgry = document.getElementById('subCategory').value;
    showProjectBySubCatg(subCtgry);
}

function searchbytags(){
    var search = document.getElementById('search').value;
    showProjectByTags(search);
}

function searchbytitle(){
    var search = document.getElementById('search').value;
    showProjectBytitle(search);
}

function changeFilter(){
    var searchtype = document.getElementById('filterType').value;
    if (searchtype == 1) {
        document.getElementById('searchinput').innerHTML = '<input oninput="searchbytags()" type="text" placeholder="Search..." class="form-control" id="search" name="search">';
    } else {
        document.getElementById('searchinput').innerHTML = '<input oninput="searchbytitle()" type="text" placeholder="Search..." class="form-control" id="search" name="search">';
    }
}

function showProjectByCatg(id){  
    $.ajax({
        url:"http://localhost/test/project/view/viewAllProject.php",
        method:"post",
        data:{showId :id},
        success:function(data){
            $('.allProject-section').html(data);
        }
    });
}
function showProjectByTags(tag){  
    $.ajax({
        url:"http://localhost/test/project/view/viewAllProject.php",
        method:"post",
        data:{searchTag : tag},
        success:function(data){
            $('.allProject-section').html(data);
        }
    });
}

function showProjectBySubCatg(sub){  
    $.ajax({
        url:"http://localhost/test/project/view/viewAllProject.php",
        method:"post",
        data:{searchsub : sub},
        success:function(data){
            $('.allProject-section').html(data);
        }
    });
}
function showProjectBytitle(title){  
    $.ajax({
        url:"http://localhost/test/project/view/viewAllProject.php",
        method:"post",
        data:{searchtitle : title},
        success:function(data){
            $('.allProject-section').html(data);
        }
    });
}

