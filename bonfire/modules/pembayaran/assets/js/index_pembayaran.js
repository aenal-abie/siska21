/*
 * untuk menmpilkan data pembayaran yang dilakukan oleh mahasiswa bersangkutan
 */
var linka;
$(this).ready( function() {
            nim= $('#nim').val();
            //alert(nim);
            (nim=='') ? $('#nama').hide() : "";    
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
         		    nim = $('#nim').val();
                    $('#nama').show();
					$('#nama').val(ui.item.nama);
                    linka = linka + ui.item.nim;
                    //alert(linka);
                    $('#data_permahasiswa').fadeOut("slow").load(linka).fadeIn("slow");
                    $('#data').hide();
         		},		
    		});
            
        $('#nim').keyup(function(){
        	var nim = $('#nim').val();
            if(nim==''){
               $('#nama').hide();
               $('#jenis_pembayaran').hide();
               $('#data_permahasiswa').hide();
               $('#data').show();
            }
        });
            
            
	    });
     