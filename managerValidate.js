 function addmanagerValid(){
            var isValid=true;
            var nameCityPattern =  /(^[A-Za-z]{3,16})([ ]{0,1})/;
            var contactPattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
            var emailPattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            var pwdPattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
            var validContact = document.getElementById("contact").value;
            var validEmail = document.getElementById("email").value;
            var validManagername = document.getElementById("mname").value;
            var validPassword1 = document.getElementById("password").value;
            var validPassword2 = document.getElementById("cpassword").value;

            if(validManagername==null || validManagername==""){
                document.getElementById("managernameValidate").innerHTML="Manager Name Required";
                isValid=false;
            }
            else if(!validManagername.match(nameCityPattern)){
                document.getElementById("managernameValidate").innerHTML="Invalid Name";
                isValid=false;
            }

            //contact validation on buttonClick
            if(validContact==null || validContact==""){
                document.getElementById("cnoValidate").innerHTML="Contact Required";
                isValid=false;
            }
            else if(!validContact.match(contactPattern)){
                document.getElementById("cnoValidate").innerHTML="Invalid contact number";
                isValid=false;
            }

            //email validation on buttonClick
            if(validEmail==null || validEmail==""){
                document.getElementById("emailValidate").innerHTML="Email Required";
                isValid=false;
            }
            else if(!validEmail.match(emailPattern)){
                document.getElementById("emailValidate").innerHTML="Invalid email";
                isValid=false;
            }
         

         //password validation on buttonClick
            if(validPassword1==null || validPassword1==""){
                document.getElementById("passwordValidate").innerHTML="Password Required";
                isValid=false;
            }
            else if(!validPassword1.match(pwdPattern)){
                alert("Password should have atleast 8 characters with one alphaneumeric, one uppercase and one lowercase");
                isValid=false;
            }

            //confirm password on buttonClick
            if(validPassword2==null || validPassword2==""){
                document.getElementById("cpasswordValidate").innerHTML="Password Required";
                isValid=false;
            }
            else if(validPassword1!=validPassword2){
                document.getElementById("cpasswordValidate").innerHTML="Enter same password";
                isValid=false;
            }
            else if(!validPassword2.match(pwdPattern)){
                alert("Password should have atleast 8 characters with one alphaneumeric, one uppercase and one lowercase");
                isValid=false;
            }
            return isValid;
        }

function managernameValidate(){
         var managername = document.getElementById("mname").value;
         var pattern =  /(^[A-Za-z]{3,16})([ ]{0,1})/;
         isValid=true;
         if(managername.match(pattern)){
            document.getElementById("managernameValidate").innerHTML="";
         }
         else if(!managername){
            document.getElementById("managernameValidate").innerHTML="Manager Name Required";
            isValid=false;
         }
         else{
            document.getElementById("managernameValidate").innerHTML="Invalid Name";
            isValid=false;
         }
         return isValid;
      }

      function cnoValidate(){
         var cno = document.getElementById("contact").value;
         var pattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
         isValid=true;
         if(cno.match(pattern)){
            document.getElementById("cnoValidate").innerHTML="";
         }
         else if(!cno){
            document.getElementById("cnoValidate").innerHTML="Number required";
            isValid=false;
         }
         else{
            document.getElementById("cnoValidate").innerHTML="Invalid Contact Number";
            isValid=false;
         }
         return isValid;
         
      }

      function emailValidate(){
         var email = document.getElementById("email").value;
         var pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
         isValid=true;
         if(email.match(pattern)){
            document.getElementById("emailValidate").innerHTML="";
          }
          else if(!email){
            document.getElementById("emailValidate").innerHTML="Email Required";
            isValid=false;
         }
          else{
            document.getElementById("emailValidate").innerHTML="Invalid email";
            isValid=false;
          }
          return isValid;
      }

      function validateconfirmPassword(){
         var cpassword = document.getElementById("cpassword").value;
         var password = document.getElementById("password").value;
         isValid=true;
         if(cpassword!=password){
            document.getElementById("cpasswordValidate").innerHTML="Enter same password";
         }
         else if(!cpassword){
            document.getElementById("cpasswordValidate").innerHTML="Password Required";
            isValid=false;
         }
         else{
             document.getElementById("cpasswordValidate").innerHTML="";
            isValid=false;
         }
         return isValid;

      }

      function validatepwd(){
         var password = document.getElementById("password").value;
         var pattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
         isValid=true;
         if(password.match(pattern)){
            document.getElementById("passwordValidate").innerHTML="";  
         }
         else if(!password){
            document.getElementById("passwordValidate").innerHTML="Password Required";
            isValid=false;
         }
         else{
            isValid=false;
         }
         return isValid;
         
      }