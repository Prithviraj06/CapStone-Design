function formsubmit(){ 
var FName = document.getElementById("FName").value;
var Lname = document.getElementById("Lname").value;
var Email = document.getElementById("inputEmail").value;
var Permemail = document.getElementById("inputPermemail").value;
var Gradterm = document.getElementById("inputGradterm").value;
var Admitterm = document.getElementById("inputadmitterm").value;
var TermGPA = document.getElementById("inputtermGPA").value;
var cumGPA = document.getElementById("inputcumGPA").value;
var progressunits = document.getElementById("inputprogressunits").value;
var cumunits = document.getElementById("inputcumunits").value;
var Additional = document.getElementById("inputAdditional").value;
    
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'FName1=' + FName + '&Lname1=' + Lname + '&Email1=' + Email + '&Permemail=' + Permemail+ '&Gradterm1=' + Gradterm + '&Admitterm1=' + Admitterm +'&TermGPA1=' + TermGPA ++ '&cumGPA1=' + cumGPA + '&progressunits1=' + progressunits + '&cumunits1=' + cumunits + '&Additional=' + cumunits;
    
};






