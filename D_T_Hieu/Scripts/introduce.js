$('#btn-login-st').click(function() {
	$('.session-login').css('display','none');
	$('.loginbox').show(1000);
	var value = $('#btn-login-st').text();
	var titleLogin = '<h1>'+value+'</h1>'
	$('.loginbox .append').append(titleLogin);
});

$('#btn-login-tc').click(function() {
	$('.session-login').css('display','none');
	$('.loginbox').show(1000);
	var value = $('#btn-login-tc').text();
	var titleLogin = '<h1>'+value+'</h1>'
	$('.loginbox .append').append(titleLogin);
});

$('#back-session').click(function() {
	$('.loginbox .append').empty();
	$('.session-login').show(500);
	$('.loginbox').css('display','none');
});