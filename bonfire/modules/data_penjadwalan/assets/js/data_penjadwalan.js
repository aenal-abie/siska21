$(this).ready( function() {
    		$("#data_penjadwalan_kode_matakuliah").autocomplete({
      			minLength: 2,
      			source: 
        		function(req, add){
          			$.ajax({
		        		url: $('#url_ma').val()+$('#jenjang').val()+'/' ,
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
					$('#data_penjadwalan_nama_matakuliah').val(ui.item.nama_matakuliah);
         		},		
    		});
            
            
            $("#data_penjadwalan_nama_dosen").autocomplete({
      			minLength: 2,
      			source: 
        		function(req, add){
          			$.ajax({
		        		url: $('#url_dosen').val(),
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
					$('#data_penjadwalan_kode_dosen').val(ui.item.kode_dosen);
         		},		
    		});

	    });
     