$(function(){
		$(".scrollable").scrollable({
			vertical : true,
			mousewheel : true
		});

		$("a[rel]").overlay({

			mask : '#000',
			effect : 'default',

			onBeforeLoad : function() {

				// grab wrapper element inside content
				var wrap = this.getOverlay().find(".contentWrap");

				// load the page specified in the trigger
				wrap.load(this.getTrigger().attr("href"));
			}
		});
		
		$(".servicios_header:has(p)").addClass("activo");
	}
	
);
