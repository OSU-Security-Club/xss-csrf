var target_url = '';

$('body').append('<img src="' + target_url + '?logout">');

$.ajax({
    url: target_url,
}).done(function(r) {
    console.log(r);
});



