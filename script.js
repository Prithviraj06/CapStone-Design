$(document).ready(function(){
$("#submit").click(function(){
    var fname = document.getElementById("input first Name").value;
var lname = document.getElementById("input Last Name").value;
var email = document.getElementById("inputEmail4").value;
var Peremail = document.getElementById("inputPermemail").value;
var GradTerm = document.getElementById("inputGradterm").value;
var AdmitTerm = document.getElementById("inputadmitterm").value;
var TermGpa = document.getElementById("inputtermGPA").value;
var CumGpa = document.getElementById("inputcumGPA").value;
var InProgressUnits = document.getElementById("inputprogressunits").value;
var CumUnits = document.getElementById("inputcumunits").value;
var AdmitTerm = document.getElementById("inputadmitterm").value;
var Comments = document.getElementById("inputAdditional").value;
var dataString = 'fname1='+ fname + 'lname1='+ lname + 'email1='+ email + 'Peremail1='+ Peremail + 'GradTerm1='+ GradTerm + 'AdmitTerm1='+ AdmitTerm + 'TermGpa1='+ TermGpa + 'CumGpa1='+ CumGpa + 'InProgressUnits1='+ InProgressUnits + 'CumUnits1='+ CumUnits + 'AdmitTerm1='+ AdmitTerm + 'Comments1='+ Comments;
    
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
