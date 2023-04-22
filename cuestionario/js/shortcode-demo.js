/* Shortcode demo page 2*/
function toggleCodes(on) {
	var obj = document.getElementById('icons');
	if (on) {
		obj.className += ' codesOn';
	} else {
		obj.className = obj.className.replace(' codesOn', '');
	}
};
/* Shortcode demo page 4*/
$('#chkbx-1').change(function () {
	if ($(this).is(":checked")) {
		$('.font-icon-code').addClass('show');
		return;
	}
	$('.font-icon-code').removeClass('show');
});