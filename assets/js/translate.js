$.get('dictionary', function(data){
	var dict = JSON.parse(data);
	$('body').translate({lang: 'id', t: dict});
});
