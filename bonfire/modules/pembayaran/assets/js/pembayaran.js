var linka;
$(this).ready( function() {
            $('#nama').hide();
            $('.form-actions').hide();
            //alert(linka);
            $('#jenis_pembayaran').hide();
    		$("#nim").autocomplete({
      			minLength: 2,
      			source: 
        		function(req, add){
          			$.ajax({
		        		url: $('#urla').val() ,
		          		dataType: 'json',
		          	   	type: 'get',
		          		data: req,
		          		success:function(data){
		              		if(data.response =="true"){
		                 		add(data.message);
		              		}
		            	},
              		});
         		},
            
         	select: 
         		function(event, ui) { 
    		      linka = $('#linka').val();
         		    var nim = $('#nim').val();
                    $('#nama').show();
					$('#nama').val(ui.item.nama);
                    linka = linka + ui.item.nim;
                    //alert(linka);
                    $('#jenis_pembayaran').fadeOut("slow").load(linka).fadeIn("slow");
                     $('.form-actions').show();
         		},		
    		});
            
        $('#nim').keyup(function(){
        	var nim = $('#nim').val();
            if(nim==''){
               $('#nama').hide();
               $('#jenis_pembayaran').hide();
               $('.form-actions').hide();
            }
        });
            
            
	    });
     