$(function() {

	$.get('dashboard/xhrGetListings', function(o) {
		
		for(var i = 0; i < o.length; i++)
		{
			$('#listInserts').before(
									'<tr>'+
										'<td>' + o[i].id + '</td>'+
										'<td>' + o[i].text + '</td>'+
										'<td>'+
											'<a class="del" rel="'+ o[i].id +'" href="#"> Delete </a>'+
										'</td>'+
									'</tr>'
				);
		}

		$(document).on('click', '.del', function() {
			delItem = $(this);
			var id = $(this).attr('rel');

			$.post('dashboard/xhrDeleteListing',{'id':id}, function(o){
				delItem.parent().remove();
			});

			return false;
		});

	}, 'json');
	
	$('#randomInsert').submit(function(){
		var url = $(this).attr('action');
		var data = $(this).serialize();

		$.post(url, data, function(o){
			$('#listInserts').before(
									'<tr>'+
										'<td>' + o.id + '</td>'+
										'<td>' + o.text + '</td>'+
										'<td>'+
											'<a class="del" rel="'+ o.id +'" href="#"> Delete </a>'+
										'</td>'+
									'</tr>'
								);
		}, 'json');

		return false;
	});
});