$(document).ready(function() {
	$("form").submit(function() {
		var url = $('#urlName').val();
		$("#frame1").load(url);
		return false;
	});
	$("#countURL").click(function() {
		var eles = [];
		var i = 0;
		$("#frame1 *").each(function() {
			eles.push(this.tagName);
		});
		var ilen = eles.length;
		jQuery.unique(eles);

		for (i = 0; i < ilen; i++) {
			var eleUni = eles[i].toLowerCase();
			$("#tagResult").append(eleUni + "<br>");
			$("#countResult").append($(eleUni).length + "<br>");
		}

	});
	$("#countSRC").click(function() {
		var srcs = [];
		var j = 0;
		$("script").each(function() {
			srcs.push(this.src);
		});
		for (j = 0; j < srcs.length; j++) {
			$("#srcDoc").append("<br>" + srcs[j] + "<br>");
		}

	});
});
