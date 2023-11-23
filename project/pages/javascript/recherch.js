function search() {
    let srinput = document.getElementById('serchitem').value.toUpperCase();
    
    const elements = document.querySelectorAll(".card-body h4");

    for (var i = 0; i < elements.length; i++) {
        let text = elements[i].textContent ;

        if (text.toUpperCase().indexOf(srinput) > -1) {
            elements[i].closest('.card').style.display = "block";
        } else {
            elements[i].closest('.card').style.display = "none";
      
            
        }
    }
}











// function search(){
//     let srinput =  document.getElementById('#serch').value.toUpperCase()
//     const element = document.getElementById("#cards");
//     const elements = document.querySelectorAll(".card-body");
//     const jobname = document.getElementsByTagName("h4");

//     for(let i = 0;i <jobname.length;i++){
//         if(jobname[i].innerHTML.toUpperCase().indexOf(srinput)>= 0)
//         {
//             elements[i].style.display ="";
//         }
//         else{
//             elements[i].style.display ="none";
//         }
//     }
// }
