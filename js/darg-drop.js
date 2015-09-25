$(document).ready(function() {
	$(".droppable").sortable({
		update : function(event, ui) {
			Dropped();
		}
	});
});

var i = 1;
function Dropped(event, ui) {
	$(".draggable").each(function() {
		$('<input>').attr({
		    type: 'hidden',
		    name: 'elementOrder[]',
		    value: i
		    	
		}).appendTo(".order" + i);
		i++;

	});
	refresh();
}