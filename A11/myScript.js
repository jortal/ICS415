$(document).ready(function() {
	$("#faqAnswer1").hide();
	$("#faqAnswer2").hide();
	$("#faqAnswer3").hide();
	$("#faqAnswer4").hide();
	$("#faqAnswer5").hide();
	$("#faq1").click(function() {
		$("#faqAnswer1").toggle();
	});
	$("#faq2").click(function() {
		$("#faqAnswer2").toggle();
	});
	$("#faq3").click(function() {
		$("#faqAnswer3").toggle();
	});
	$("#faq4").click(function() {
		$("#faqAnswer4").toggle();
	});
	$("#faq5").click(function() {
		$("#faqAnswer5").toggle();
	});
});
