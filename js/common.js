function getRequstResults(id)
{
	$.ajax( {
		type: "POST",
		url: "/ajax/youtube.php",
		data: {
			"do": 'getYoutubeData',
			"id": id
		},
		success: function(data){					
			console.log(data);
			var d = $.parseJSON(data);
			//alert(d.result[1].title);
			setInformation(id, d.count, d.avarage);
			setData(id, d.result)
		}
	});
}

function setInformation(id, count, average)
{
	var info = 'К-во в базе: <span class="label label-primary">' + count + '</span><br>'
	+ 'Средний рейтинг: <span class="label label-primary">' + average + '</span>';
	$("#rData"+id).html(info);
}

function setData(id, obj)
{
	/*
	var info = 'К-во в базе: <span class="label label-primary">' + count + '</span><br>'
	+ 'Средний рейтинг: <span class="label label-primary">' + average + '</span>';
	$("#rData"+id).html(info);*/
	var info = '';
	$.each( obj, function( key, value ) {
		info += '<div><small>'
		+ '<strong><a href="https://www.youtube.com/watch?v=' + value.videoId + '">' 
		+ value.title + '</a></strong><br>'
		+ value.description + '<br>'
		+'<strong>Rating: ' + value.rating + '</strong><br><br>'
		+ '</small></div>';
		//alert( key + ": " + value.title );

	});
	$("#rResults"+id).html(info);
}