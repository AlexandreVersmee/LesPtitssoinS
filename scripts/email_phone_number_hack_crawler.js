let username = "lesptitssoins";
let hostname = "gmail.com";

let emailString =  username + "@" + hostname;
let emailMailTo = "mailto:" + emailString;

let linktext = "<a href='" + emailMailTo + "'>" + emailString + "</a>" ;

let phoneNumber = "07 60 00 17 12";


$("#phoneNumberLPSContact").html(phoneNumber);
$("#phoneNumberLPS").html(phoneNumber);
$("#emailHeaderLPS").html(linktext);
$("#emailFooterLPS").attr("href", emailMailTo);