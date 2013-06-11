// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf('msie') != -1) && (clientPC.indexOf('opera') == -1));
var is_win = ((clientPC.indexOf('win') != -1) || (clientPC.indexOf('16bit') != -1));

var isNav4Min = (navigator.appName == "Netscape" && parseInt(navigator.appVersion) >= 4)
var isIE4Min = (navigator.appName.indexOf("Microsoft") != -1 && parseInt(navigator.appVersion) >= 4)

// Quote the selected text
function quoteSelection() 
{
	var userSelection = false;
	var textarea = document.postform.message;

	if (isNav4Min && window.getSelection() !=  '') {
		userSelection = window.getSelection();
	}
	else if (isIE4Min && document.selection) {
		userSelection = document.selection.createRange().text;
	}
			
	if (userSelection) {
		insert_text('[quote]' + userSelection + '[/quote]\n');
		textarea.focus();
		userSelection = '';
		return;
	}
	else
	{
		alert(LA_NO_TEXT_SELECTED);
	}
}

// Checks if the minimum of characters was entered
function checkQuickForm() {
	formErrors = false;
		
	if (document.postform.message.value.length <= CONFIG_QR_MIN_CHAR) {
		formErrors = LA_TOO_FEW_CHARS;
	}

	if (formErrors)
	{
		alert(formErrors);
		return false;
	} 
	else
	{
		if (document.postform.quote_last_msg.checked) 
		{
			document.postform.message.value = document.postform.last_post.value + document.postform.message.value;
		} 
		return true;
	}
}
