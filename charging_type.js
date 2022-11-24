function chargeValid(){
            var isValid=true;
            var rnoPattern = /^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{1,4}$/;
            var validRn = document.getElementById("vehicleno").value;
            var contactPattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;

        //vehicleno validation on buttonClick
            if(validRn==null || validRn==""){
                document.getElementById("rnoValidate").innerHTML="Vehicle Number Required";
                isValid=false;
            }
            else if(!validRn.match(rnoPattern)){
                document.getElementById("rnoValidate").innerHTML="Invalid Registration Number";
                isValid=false;
            }
            if(validContact==null || validContact==""){
                document.getElementById("cnoValidate").innerHTML="Contact Required";
                isValid=false;
            }
            else if(!validContact.match(contactPattern)){
                document.getElementById("cnoValidate").innerHTML="Invalid contact number";
                isValid=false;
            }
            return isValid;
        }

      function rnoValidate(){
         var validRno = document.getElementById("vehicleno").value;
         var rnoPattern = /^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{1,4}$/;
         isValid=true;
         if(validRno.match(rnoPattern)){
            document.getElementById("rnoValidate").innerHTML="";
         }
         else if(!validRno){
            document.getElementById("rnoValidate").innerHTML="Registration Number required";
            isValid=false;
         }
         else{
            document.getElementById("rnoValidate").innerHTML="Invalid Registration Number";
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
