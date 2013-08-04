<!--Form Validation-->
    
function formValidator(){
  
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var message = document.getElementById('message');
  
  // Check each input in the order that it appears in the form!
  if(isAlphabet(name, "Please enter only Alphabets for Name")){
     if(emailValidator(email, "Please enter a valid Email Address")){
	if(notempty(message, "The message field can not be left blank")){
        return true;
		    }
                  }
                }
  return false;
  
}


          

        
function isAlphabet(elem, helperMsg){
  var alphaExp = /^[a-zA-Z][a-zA-Z ]+$/;
  var len = elem.value.length;
    if(len==0){
	alert("The Name field can not be left blank");
	elem.focus();
        return false;
	} else if(elem.value.match(alphaExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}         



function emailValidator(elem, helperMsg){
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
  var len = elem.value.length;
    if(len==0){
	alert("The Email field can not be left blank");
	elem.focus();
        return false;
	} else if(elem.value.match(emailExp)){
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

function notempty(elem, helperMsg){
    var len = elem.value.length;
    if(len==0){
	alert(helperMsg);
	elem.focus;
	return false;
	} else {
	    return true;
	    }
}
