function update() {
	var height = $(window).height();
	var width = $(window).width();
}

$(document).ready(function() {
	// SETUP	//////////////////////////////////////////////


	// UPDATE	//////////////////////////////////////////////
	$('#toRegistration').click(function() {
		$('#loginDiv').attr('class', '');
		$('#registerDiv').attr('class', 'active');
	});

	$('#toLogin').click(function() {
		$('#loginDiv').attr('class', 'active');
		$('#registerDiv').attr('class', '');
	});

	// setInterval('update()', 100);
});