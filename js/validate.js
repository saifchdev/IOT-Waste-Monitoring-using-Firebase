function checkEmail(e) {
    var element=e.target;
    if(/[^a-zA-Z0-9@._]/.test(element.value)){
        alert("email is invalid ");
        element.value="";
        return false;
    }
   
    if(!/[^a-zA-Z]/.test(element.value)){
        alert("email is invalid only a-z or A-Z are ,ust");
        element.value="";
        return false;
    }


    if(!/[^[@]/.test(element.value)){
        alert("email is invalid missing @");
        element.value="";
        return false;
    }


    if(!/[^[.]/.test(element.value)){
        alert("email is invalid missing .domain");
        element.value="";
        return false;
    }


    return true;
}

var email=document.getElementById('useremail');
email.addEventListener('blur',checkEmail,false);


function submitForm(e){
    e.preventDefault();
    if(document.getElementById('useremail').value!="" &&
    document.getElementById('subject').value!="" &&
    document.getElementById('message').value!=""){
        var contact=document.getElementsByClassName('col2');
        contact[0].innerHTML="<h2>Thanks</h2>"
    }






}
var subject=document.getElementById('submit-btn');
submitForm.addEventListener('click',submitForm,false);