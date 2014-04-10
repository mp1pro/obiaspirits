 function ageCheck() { 
     var min_age = 21;  //Set the minimum age 
     var year = parseInt(document.getElementById('byear').value);
     var month = parseInt(document.getElementById('bmonth').value);
     var day = parseInt(document.getElementById('bday').value);
     var theirDate = new Date((year + min_age), month, day);
     var today = new Date;
     
     if ((today.getTime() - theirDate.getTime()) < 0) {
        window.location = 'http://www.obiaspirits.com'; //enter domain url where you would like the underage visitor to be sent to
     } else {
         var days = 1; //number of days until they must use age checker again
         var date = new Date();
    	 date.setTime(date.getTime()+(days*24*60*60*1000));
		 var expires = "; expires="+date.toGMTString();
         document.cookie = 'userBirthday=true;'+expires+"; path=/";
         location.reload();
     };
};