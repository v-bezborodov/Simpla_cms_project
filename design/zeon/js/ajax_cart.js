// Аяксовая корзина
$('form.variants').live('submit', function(e) {
	e.preventDefault();
	if($(this).find('input[name=variant]:checked').size()>0)
		variant = $(this).find('input[name=variant]:checked').val();
	if($(this).find('select[name=variant]').size()>0)
		variant = $(this).find('select').val();
	$.ajax({
		url: "ajax/cart.php",
		data: {variant: variant, amount: $(this).find('input[name="amount"]').val()},
		dataType: 'json',
		success: function(data){
			$('#cart_informer').html(data);
		}
	});
	var o1 = $(this).offset();
	var o2 = $('#cart_informer').offset();
	var dx = o1.left - o2.left;
	var dy = o1.top - o2.top;
	var distance = Math.sqrt(dx * dx + dy * dy);
	$(this).closest('.product').find('.image img').effect("transfer", { to: $("#cart_informer"), className: "transfer_class" }, distance);	
	$('.transfer_class').html($(this).closest('.product').find('.image').html());
	$('.transfer_class').find('img').css('height', '100%');
	return false;
});



$(document).ready(function() {
$(".image").height($("div.image").width());
$(".heigth2").height($("div.big-image").width());
$(".heigth").height($("div.big-image").width()/6);
$(".heigth").css("line-height",$("div.big-image").width()/6+"px");
$(".image a").css("line-height",$("div.image").width()+"px");	
	function setHeight(column) {
		var maxHeight = 0;
		column = $(column);
		column.each(function() {       
			if($(this).height() > maxHeight) {
				maxHeight = jQuery(this).height();
			}

		});
		column.height(maxHeight);
	}
	setHeight('.product-details h1');

	// Капча
	$('.captcha img').attr('src', 'captcha/image.php');
 
// Плюс и минус
$('.minus').click(function () {
    var $input = $(this).parent().find('input[type=number]');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});
$('.plus').click(function () {
    var $input = $(this).parent().find('input[type=number]');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});   
	// Выбор вариантов
	$('select[name=variant]').change(function() {
		price = $(this).find('option:selected').attr('price');
		compare_price = '';
		if(typeof $(this).find('option:selected').attr('compare_price') == 'string')
			compare_price = $(this).find('option:selected').attr('compare_price');
		$(this).find('option:selected').attr('compare_price');
		$(this).closest('form').find('span.pr').html(price);
		$(this).closest('form').find('span.old').html(compare_price);
		return false;		
	});

});