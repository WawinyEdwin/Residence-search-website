function openNav(){
    document.getElementById("mynav").style.width = "180px";
    document.getElementById("main").style.marginLeft = "200px";
}

function closeNav(){
    document.getElementById("mynav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function logout() {
    alert("Are you sure you want to logOut?");
}
/*
function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; 
    }
}
*/
//admin js
//when the user clicks the button
function myFunction() {
    document.getElementById("mydropdown").classList.toggle("show");
}

//close the dropdown menu if the user clicks outside it
window.onclick = function(event) {
    if(!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i=0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
//choice js
function payReg(){
    document.getElementById("pay").disabled = true;
}

 function validate() {
        let x = document.forms["myForm"]["name"].value;
        if (x == "") {
          alert("Name must be filled out");
          return false;
        }
        let y = document.forms["myForm"]["tel"].value;
        if (y == "") {
            alert("enter a valid phone number");
            return false;
        }
      }
//registration js
function submitFunction(){
    alert("please enter the verification code!");

}
//makes the image visible during upload..
function preview_image(event)
{
    var reader = new FileReader();
    reader.onload = function()
    {
        var output = document.getElementById('image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0,1]);
}

