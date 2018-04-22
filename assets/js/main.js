$(document).ready(function() {
	var data_dummy = {id:1, nama:'baju bagus',harga:10000};

	$('.add-cart').click(function(){
		var cookies = getCookie('cart');

		if (cookies == '') {
			var cookies_data = {
					1: {
						nama:data_dummy.nama,
						harga:data_dummy.harga,
						jumlah:1
			}};
			setCookie('cart', JSON.stringify(cookies_data), 30)
		}
	});

	console.log(getCookie('cart'));
});
