function loadData(data)
 {
	 if(data == "btn1")
	 {
		document.getElementById("para1").innerHTML = "To find out if we deliver in your area, head over to  https://www.ocean08.com/join and enter your zip code! <br>You'll be able to begin the sign up process if we do deliver in your area." ;
     }

     else if(data == "btn2")
     {
        
        document.getElementById("para2").innerHTML ="Our co-workers are provided appropriate PPE and supplies to work safely including hand sanitizer and masks.";

     }

     else if(data == "btn3")
     {

        document.getElementById("para3").innerHTML ="Step 1: Go to https://www.ocean08.com/join <br> Step 2: Enter your details & zip code and click submit <br> Step 3:step 3: Select the type of produce you want ";
    }
    
    else if(data =="btn4")
    {
              
        document.getElementById("para4").innerHTML="If you are still unable to add the payment method,<br> please reach out to our customer support team.<br> A member of our team will look into your concern and get back to <br> you at the earliest. We usually respond to all requests within 24 hours,<br> we appreciate your patience.";

    }

}