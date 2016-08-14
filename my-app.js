$(document).ready(function() {

// lsit seklinde olan melumat box-un gizledirik
		$('.data-div').hide();

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: ''
			},
			default:false,
			// default olaraq bugunun tarixin secirik
			defaultDate: new Date(),
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				//var title = prompt('Event Title:');
				var eventData;
				var arr = [];
				
				//if (title) {
					/*eventData = {
						title: 'Anar',
						start: start,
						end: end
					};*/

					// baslangic ve son tarixi muvafiq formata gore gotrur ve "T" simvoluna gore split edib lazim 
					//olan hisseni gotururuk

					var start_d = moment(start).format().split("T")[0];
					var end_d = moment(end).format().split("T")[0];
					//baslangic ve son tarixleri muvafiq inputlara yaziriq

					$('#start-date').val(start_d);
					$('#end-date').val(end_d);
					var price = $('#price').val();
					//begin ajax request data.php file
					$.ajax
    				({ 
        			url: 'data.php',
        			data:{'start_d':start_d,'end_d':end_d,'price':price},
        			dataType:'json',
        			type: 'post',
        			success: function(result)
        			{
        				//alert(JSON.stringify(result));die();
        				// calendara custom qiymetler elave etmek ucun events massivi yaradiriq
        				var events = [];
        				var li = [];
        				//$('.data-div').html(result[0]['start']);
        				arr = result;
        			
        					for(var i =0; i < arr.length; i++) 
							{events.push( {title: arr[i]['price'] , start:arr[i]['start'],end:end})}
							//alert(JSON.stringify(events));die();

							/*for(var j=0;j<arr.length;j++){
									eventData = {
									title: arr[j]['price'],
									start: arr[j]['start'],
									end: end
									};
					}*/

					//muvafiq inputlari disable edirik

					$("#start-date").prop('disabled', true);
					$("#end-date").prop('disabled', true);

					//ilkin olaraq fullcalendar.io -un event massivin silib custom event massivimizi muvafiq xanalara yerlesdirik
					$('#calendar').fullCalendar('removeEventSource', events);
					$('#calendar').fullCalendar('addEventSource', events);

					//list seklinde olan melumat box-una gelen data-ni jquery vasitesi ile yerlesdirirk
					$.each(events,function(i,item){
						li.push('<li class="list-group-item my-li-hover">Tarix: ' + item.start +" Qiymet: "+ item.title  + '$</li>');
					});

					$('.data-div').append("<h2>Prices for relevant dates</h2><ul class='list-group my-list'><li class='list-group-item active'>Tarix: Qiymet:</li>"+ li.join(' ') +"</ul>").fadeIn(500);

					localStorage.setItem("eve",  JSON.stringify(events));

       				 },
       				 async: false
   				 });
	


    			//end ajax

				$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				//}
				$('#calendar').fullCalendar('unselect');
				alert(localStorage.getItem("eve"));
			},

			editable: true,
			eventLimit: true, // allow "more" link when too many events
			// muvafiq qiymetlere click eden zaman custom css elave etirik
			eventClick:function(){
				$(this).css({'border-radius':'0','background':'green'});
			}
			/*events:[{
				title:12,
				start:"2016-08-08",
				end:"2016-08-19"
			}
			],*/

		});
		
	});

