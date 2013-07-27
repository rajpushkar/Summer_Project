<!--Form Validation-->
    
function formValidator(){
  
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  
  
  // Check each input in the order that it appears in the form!
  if(isAlphabet(name, "Please enter only letters for Name")){
     if(emailValidator(email, "Please enter a valid email address")){
        return true;
                  }
                }
  return false;
  
}


          

        
function isAlphabet(elem, helperMsg){
  var alphaExp = /^[a-zA-Z][a-zA-Z ]+$/;
  if(elem.value.match(alphaExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}         



function emailValidator(elem, helperMsg){
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
  if(elem.value.match(emailExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}
