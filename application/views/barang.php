<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */
?>
	
                    <div class="col-xs-12" id="induk-barang">
                        <!-- PAGE CONTENT BEGINS -->
						<h3>Data <?php echo $pagename; ?> </h3>

                        <div class="row">
                            <!-- content is here -->
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="position-relative">
                                                <input class="ace" type="checkbox">
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th>Kode Barang</th>
                                        <th>Nama Produk</th>
                                        <th class="hidden-480">Nama Barang</th>

                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i> Satuan
                                        </th>
                                        <th class="hidden-480">Harga Beli</th>

                                        <th>Harga Jual</th>
										
										<th>Stock</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody id="tbody_barang">
                                    
                                </tbody>
                            </table>
							<input type="text" id="total_record2"/> <input type="hidden" id="data-pencarian" rows=5 style="visible:0"></input> <input type="text" id="total_record_cari"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div id="sample-table-2_info" class="dataTables_info"></div>
                            </div>
                            <div class="col-xs-6">
                                <div class="dataTables_paginate paging_bootstrap">
                                    <ul class="pagination" id="paginationbarang">
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <button id="bootbox-regular"class="btn btn-white btn-default"><span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span> Tambah Data barang</button>
							
                        </div>
						
						<div aria-hidden="false" style="display: block;" class="bootbox modal fade bootbox-prompt in" tabindex="-1" role="dialog" id="modal-testing">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="background-color:#8F0000; color:white;">
									<button style="color:white;" type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" id="btn-x-input">×</button>
									<h4 class="modal-title" id="judul-modal">Title</h4></div>
								<div class="modal-body">
									<div class="bootbox-body">
										<form class="bootbox-form">
											<span id="span-kode-barang">
												Kode Barang
												<input placeholder="contoh:b1" id="kode_barang"  name="kode_barang" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
											</span>
											<span id="span-nama">
												Nama Barang
												<input placeholder="contoh:alisan" id="nama_barang" name="nama_barang" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
											</span>
											<span id="span-kode">
												Nama Produk
												<select id="kode_produk" name="kode_produk" class="bootbox-input bootbox-input-text form-control" autocomplete="off"><option>Pilih Produk</option></select>
											</span>
											<span id="span-satuan">
												Satuan
												<input placeholder="contoh:potong" id="satuan" name="satuan" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
											</span>
											<span id="span-harga-beli">
												Harga Beli
												<input placeholder="contoh:100000" id="harga_beli" name="harga_beli" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
											</span>
											<span id="span-harga-jual">
												Harga Jual
												<input placeholder="contoh:150000" id="harga_jual" name="harga_jual" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
											</span>
											<span id="span-stock">
												Stock
												<input placeholder="contoh:30" id="stock" name="stock" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
											</span>
											<!--Aksi-->
											<input id="aksi" name="aksi" class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="hidden">
										</form>
									</div>
								</div>
								<div class="modal-footer" style="background-color:#8F0000; color:white;">
									<button data-bb-handler="cancel" type="button" class="btn btn-default" id="btn-cancel-input">Cancel</button>
									<button data-bb-handler="confirm" type="button" class="btn btn-primary" id="btn-ok">OK</button>
								</div>
							</div>
						</div>
				    </div>
						
						
						
                        <!-- /.row -->

                        <!-- #section:custom/extra.hr -->
                        <div class="hr hr32 hr-dotted"></div>

                        <!-- /section:custom/extra.hr -->
                        <div class="row">
                            <!-- content 1 is here -->
                        </div>
                        <!-- /.row -->

                        <div class="hr hr32 hr-dotted"></div>

                        <div class="row">
                            <!-- content 2 is here -->
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-6">
                            <!-- content 3 is here -->
                        </div>
                        <!-- /.col -->
                    </div>
					
					
					
					
					 <script type="text/javascript">
					 
					  function gettotalrecord(){
					  
						var targeturl="<?php echo base_url().'index.php/barang_controller/gettotalrecord'?>";
						$.ajax({
						url:targeturl,
						type: "POST",
						success: function (data) {
						var obj = JSON.parse(data);
						$("#total_record").val(obj[0]['totalrecord']);
						},
						error: function (jqXHR, textStatus, errorThrown) {
						alert('ajax not succesfull'+ errorThrown);
							console.log("ERRORS : " + errorThrown);
						}
			
						});
					
					  
					  }
					
					 
						
						function pindahpage(page){
							var pagenum=page.substring(5, 4);
							//alert(pagenum);
							var targeturl="<?php echo base_url().'index.php/barang_controller/pindahpage'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							data:{
							 page:pagenum
							 },
							
							success: function (data) {
							var obj = JSON.parse(data);
							$("#tbody_barang").empty();
							for (var i =0; i< obj.length; i++){
							$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['nama_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td><td><button id='button-edit"+i+"' style='margin-right:5px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus"+i+"' style='margin-right:5px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto"+i+"' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");
								
								$("#button-hapus"+i).click(function(event){
									event.preventDefault();
									tampil_modal_hapus(this.id);
								});
								
								$("#button-edit"+i).click(function(event){
									event.preventDefault();
									tampil_modal_edit(this.id);
								});
								
								$("#button-foto"+i).click(function(event){
									event.preventDefault();
									tampil_screen_upload(this.id);
								});
							
							}
							var start=(pagenum * 4) + 1;
							var lastlimit=start + 3;
							$("#sample-table-2_info").text('Menampilkan '+ start+' Sampai '+lastlimit +' Dari ' + $('#total_record2').val() +' Records');
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
						


							console.log("ERRORS : " + errorThrown);
							}
				
							});
						}	
						
						function pindahpage_cari(page,data){
						
						var obj = JSON.parse(data);
						//alert(obj[0]['nama_barang']);
						var pagenum=page.substring(5, 4);
						pagenum=parseInt(pagenum) +1;
						//alert(parseInt(pagenum)*3-2);
						$("#tbody_barang").empty();
						for (i=(parseInt(pagenum)*3)-2; i<(parseInt(pagenum)*3)+2; i++ ){
							//<button type='button' class='btn btn-white btn-pink btn-sm'>Pink</button>
							$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['nama_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td><td><button id='button-edit"+i+"' style='margin-right:5px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus"+i+"' style='margin-right:5px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto"+i+"' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");
								
								$("#button-hapus"+i).click(function(event){
									event.preventDefault();
									tampil_modal_hapus(this.id);
								});
								
								$("#button-edit"+i).click(function(event){
									event.preventDefault();
									tampil_modal_edit(this.id);
								});
								
								$("#button-foto"+i).click(function(event){
									event.preventDefault();
									tampil_screen_upload(this.id);
								});
							
							
						}
						
							
						}
						
						
						function buat_paging_cari(total_record){
						$("#paginationbarang").empty();
							$("#paginationbarang").append('<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>');
							var a=1;
							var b=0;
							for ( i=0; i< Math.floor(total_record/4); i++){
							$("#paginationbarang").append('<li class="next" ><a href="#"  id="'+'page'+b+'"  >'+a+'</a></li>');
							 $('#page'+b).bind('click', function() {
									pindahpage_cari(this.id,$('#data-pencarian').val());
								});
							a++;
							b++;
							}
							$("#paginationbarang").append('<li class="prev"><a href="#"><i class="fa fa-angle-right"></i></a></li>');
							
						}
						
						
						function cari_barang(myparam){
							//alert(myparam);
							var targeturl="<?php echo base_url().'index.php/barang_controller/cari_barang'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							data:{
							 param:myparam
							 },
							success: function (data){
							//alert('search sukses');
							
								var obj = JSON.parse(data);
								buat_paging_cari(obj.length)
								//alert(data);
								//alert(obj.length);
								$("#total_record_cari").val(obj.length);
								$("#sample-table-2_info").text('Menampilkan '+ start+' Sampai '+lastlimit +' Dari ' + $("#total_record_cari").val() +' Records');
								$('#data-pencarian').val(data);
								//alert(obj[0]['kode_barang']);
								$("#tbody_barang").empty();
								for (var i =0; i< 4; i++){
										$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['nama_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td><td><button id='button-edit"+i+"' style='margin-right:3px;' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus"+i+"' style='margin-right:3px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto"+i+"' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");
										
										$("#button-hapus"+i).click(function(event){
											event.preventDefault();
											tampil_modal_hapus(this.id);
										});
										
										$("#button-edit"+i).click(function(event){
											event.preventDefault();
											tampil_modal_edit(this.id);
										});
										
										$("#button-foto"+i).click(function(event){
											event.preventDefault();
											tampil_screen_upload(this.id);
										});
								
								}
								var start=(pagenum * 4) + 1;
								var lastlimit=start + 3;
								
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
							$("#data-pencarian").val('test');
								console.log("ERRORS : " + errorThrown);
							}
				
							});
						
						}
					    
						function tampildatabarang(){
							var targeturl="<?php echo base_url().'index.php/barang_controller/getbarangall'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							success: function (data) {
							var obj = JSON.parse(data);
							var jumlahrecord=obj.length;
							for (var i = 0; i < obj.length; i++) {
    $("#tbody_barang").append("<tr><td></td><td>" + obj[i]['kode_barang'] + "</td>" + "<td>" + obj[i]['nama_produk'] + "</td><td>" + obj[i]['nama_barang'] + "</td><td>" + obj[i]['satuan'] + "</td><td>" + obj[i]['harga_beli'] + "</td><td>" + obj[i]['harga_jual'] + "</td><td>" + obj[i]['stock'] + "</td><td><button style='margin-right:3px;' id='button-edit" + i + "' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus" + i + "' style='margin-right:3px;' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto" + i + "'type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");

    $("#button-hapus" + i).click(function(event) {
        event.preventDefault();
        tampil_modal_hapus(this.id);
    });

    $("#button-edit" + i).click(function(event) {
        event.preventDefault();
        tampil_modal_edit(this.id);
    });

    $("#button-foto" + i).click(function(event) {
        event.preventDefault();
        tampil_screen_upload(this.id);
    });

}
							
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
								console.log("ERRORS : " + errorThrown);
							}
				
							});
						}
						
						
						function tampil_screen_upload(id){
						
						 id=id.substring(11);
						 //alert(id);
							var username= $("#username").text();
							var kode_barang=document.getElementById('tbody_barang').children[id].children[1].textContent;
							//alert(kode_barang);
							window.location.href='<?php echo base_url().'index.php/barang_controller/upload_barang/barang_upload/'?>'+username+'/'+id+'/'+kode_barang;
						}
						
						
						
						function tampil_modal_edit(id){
						 id=id.substring(11);
						 $("#kode_produk").empty();
						  
						 $("#modal-testing").fadeIn(1000);
						 $("#judul-modal").text('Edit Data Barang');
						 $("#kode_barang").val(document.getElementById('tbody_barang').children[id].children[1].textContent);
						 $("#kode_barang").attr({ "disabled":false});
						 $("#kode_barang").attr({"readonly":"true"});
						 $("#nama_barang").val(document.getElementById('tbody_barang').children[id].children[3].textContent);
						 $("#nama_barang").attr({ "disabled":false});
						 $("#kode_produk").append('<option>'+document.getElementById('tbody_barang').children[id].children[2].textContent+'</option>');
						 get_product_edit();
						 $("#kode_produk").attr({ "disabled":false});
						 $("#satuan").val(document.getElementById('tbody_barang').children[id].children[4].textContent);
						 $("#satuan").attr({ "disabled":false});
						 $("#harga_beli").val(document.getElementById('tbody_barang').children[id].children[5].textContent);
						 $("#harga_beli").attr({ "disabled":false});
						 $("#harga_jual").val(document.getElementById('tbody_barang').children[id].children[6].textContent);
						 $("#harga_jual").attr({ "disabled":false});
						 $("#stock").val(document.getElementById('tbody_barang').children[id].children[7].textContent);
						 $("#stock").attr({ "disabled":false});
						 $("#aksi").val('edit');
						}
						
						
						function tampil_modal_hapus(id){
						 id=id.substring(12);
						 $("#kode_produk").empty();
						  $("#nama_barang").attr({"disabled":"true"});
						 $("#modal-testing").fadeIn(1000);
						 $("#judul-modal").text('Data berikut akan dihapus, apakah anda yakin mau melanjutkan?');
						 $("#kode_barang").val(document.getElementById('tbody_barang').children[id].children[1].textContent);
						 $("#kode_barang").attr({ "disabled":"disabled"});
						 $("#nama_barang").val(document.getElementById('tbody_barang').children[id].children[3].textContent);
						  $("#nama_barang").attr({ "disabled":"disabled"});
						 $("#kode_produk").append('<option>'+document.getElementById('tbody_barang').children[id].children[2].textContent+'</option>');
						  $("#kode_produk").attr({ "disabled":"disabled"});
						$("#satuan").val(document.getElementById('tbody_barang').children[id].children[4].textContent);
						 $("#satuan").attr({ "disabled":"disabled"});
						 $("#harga_beli").val(document.getElementById('tbody_barang').children[id].children[5].textContent);
						  $("#harga_beli").attr({ "disabled":"disabled"});
						 $("#harga_jual").val(document.getElementById('tbody_barang').children[id].children[6].textContent);
						  $("#harga_jual").attr({ "disabled":"disabled"});
						 $("#stock").val(document.getElementById('tbody_barang').children[id].children[7].textContent);
						  $("#stock").attr({ "disabled":"disabled"});
						 $("#aksi").val('hapus');
						//alert(id);
						}
						
						
						
						function get_product(){
						var targeturl="<?php echo base_url().'index.php/barang_controller/get_product'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							success: function (data) {
							//alert(data);
							var obj = JSON.parse(data);
							
							//alert(obj[0]['nama_produk']);
							$("#kode_produk").empty();
							$("#kode_produk").append("<option>Pilih Produk </option>");
							for (var i =0; i< obj.length; i++){
								$("#kode_produk").append("<option value='"+obj[i]['kode_produk']+"'>"+obj[i]['nama_produk']+" </option>");
							}
							
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
								console.log("ERRORS : " + errorThrown);
							}
				
							});
						
						}
						
						function get_product_edit(){
						var targeturl="<?php echo base_url().'index.php/barang_controller/get_product'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							success: function (data) {
							var obj = JSON.parse(data);
							
							for (var i =0; i< obj.length; i++){
								$("#kode_produk").append("<option value='"+obj[i]['kode_produk']+"'>"+obj[i]['nama_produk']+" </option>");
							}
							
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
								console.log("ERRORS : " + errorThrown);
							}
				
							});
						
						}
						
						
						function buat_paging(total_record){
						$("#paginationbarang").empty();
							$("#paginationbarang").append('<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>');
							var a=1;
							var b=0;
							for ( i=0; i< Math.floor(total_record/4); i++){
							$("#paginationbarang").append('<li class="next" ><a href="#"  id="'+'page'+b+'"  >'+a+'</a></li>');
							 $('#page'+b).bind('click', function() {
									pindahpage(this.id);
								});
							a++;
							b++;
							}
							$("#paginationbarang").append('<li class="prev"><a href="#"><i class="fa fa-angle-right"></i></a></li>');
							
						}
						
						function getjumlahrecord(){
						var t= <?php echo json_encode($totalrecord);?>;
						getjumlahrecord=  t[0].totalrecord;
						$("#total_record2").val(t[0].totalrecord)
						//alert(t[0].totalrecord);
						}
						
						
						
		function hapus_data(kode_barang){
			var targeturl="<?php echo base_url().'index.php/barang_controller/hapus_data'?>";
			$.ajax({
			url:targeturl,
			type: "POST",
			data:{
			kode_barang:kode_barang
			},
			success: function (data) {
			alert('Data Sukses Dihapus..');
			var obj = JSON.parse(data);
			$("#tbody_barang").empty();
								for (var i =0; i< obj.length; i++){
								$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['nama_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td><td><button id='button-edit"+i+"' style='margin-right:3px;' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus"+i+"' style='margin-right:3px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto"+i+"' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");
								
								$("#button-hapus"+i).click(function(event){
									event.preventDefault();
									tampil_modal_hapus(this.id);
								});
								
								$("#button-edit"+i).click(function(event){
									event.preventDefault();
									tampil_modal_edit(this.id);
								});
								
								$("#button-foto"+i).click(function(event){
									event.preventDefault();
									tampil_screen_upload(this.id);
								});
								
							}
							$("#modal-testing").fadeOut("slow");
			},
			error: function (jqXHR, textStatus, errorThrown) {
			alert('ajax not succesfull'+ errorThrown);
			console.log("ERRORS : " + errorThrown);
			}
			});
			
		}
		
		function simpan_data(mykode_barang,mynama_barang,mykode_produk,mysatuan,myharga_beli,myharga_jual,mystock){
						
							var targeturl="<?php echo base_url().'index.php/barang_controller/simpan_data'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							data:{
							 kode_barang:mykode_barang,
							 nama_barang:mynama_barang,
							 kode_produk:mykode_produk,
								  satuan:mysatuan,
							  harga_beli:myharga_beli,
							  harga_jual:myharga_jual,
								   stock:mystock
							},
							success: function (data){
							alert('Data Sukses Di Tambahkan..');
							
							$('#tbody_barang').empty();
							
							var obj = JSON.parse(data);
							var jumlahrecord=obj.length;
							for (var i =0; i< obj.length; i++){
							
								$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['nama_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td><td><button id='button-edit"+i+"' style='margin-right:3px;' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus"+i+"' style='margin-right:3px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto"+i+"' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");
								
								$("#button-hapus"+i).click(function(event){
									event.preventDefault();
									tampil_modal_hapus(this.id);
								});
								
								$("#button-edit"+i).click(function(event){
									event.preventDefault();
									tampil_modal_edit(this.id);
								});
								
								$("#button-foto"+i).click(function(event){
									event.preventDefault();
									tampil_screen_upload(this.id);
								});
								$("#modal-testing").fadeOut("slow");
							}
							
							
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
							$("#data-pencarian").val('test');
								console.log("ERRORS : " + errorThrown);
							}
				
							});
							
						
						}
		
		function edit_data(mykode_barang,mynama_barang,mykode_produk,mysatuan,myharga_beli,myharga_jual,mystock){
			var targeturl="<?php echo base_url().'index.php/barang_controller/edit_data'?>";
			$.ajax({
			url :targeturl,
						data:{
							kode_barang:mykode_barang,
							nama_barang:mynama_barang,
							 kode_produk:mykode_produk,
								  satuan:mysatuan,
							  harga_beli:myharga_beli,
							  harga_jual:myharga_jual,
								   stock:mystock
						},
			type: "POST",
			success: function (data){
			var obj = JSON.parse(data);
			//alert(obj[0]['nama_produk']);
			alert('Data Sukses Diedit');
			$("#tbody_barang").empty();
				for (var i =0; i< obj.length; i++){
								$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['nama_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td><td><button id='button-edit"+i+"' style='margin-right:3px;' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class='ace-icon fa fa-pencil bigger-120'></i></a></button><button id='button-hapus"+i+"' style='margin-right:3px' type='button' class='btn btn-white btn-pink btn-sm'><a href='#'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></button><button id='button-foto"+i+"' type='button' class='btn btn-white btn-pink btn-sm'><a href='#' ><i class=' fa fa-camera'></i></a></button></tr>");
								
								$("#button-hapus"+i).click(function(event){
									event.preventDefault();
									tampil_modal_hapus(this.id);
								});
								
								$("#button-edit"+i).click(function(event){
									event.preventDefault();
									tampil_modal_edit(this.id);
								});
								
								$("#button-foto"+i).click(function(event){
									event.preventDefault();
									tampil_screen_upload(this.id);
								});
								$("#modal-testing").fadeOut("slow");
							}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
			alert('ajax not succesfull'+ errorThrown);
			console.log("ERRORS : " + errorThrown);
			}
				
		});
		}
						
		//validasi inputan 
			function cek_inputan_kosong(){
			
				if($("#kode_barang").val() == "" | $("#nama_barang").val() == "" | $("#kode_produk").val() == "" | $("#satuan").val() == "" | $("#harga_beli").val() == "" | $("#harga_jual").val() == "" | $("#stock").val() == ""){
					
					cek_inputan_kosong=true;
				}else{
				cek_inputan_kosong=false;
				
				}
				
			}
			
			
			function hanya_angka(){
			
			 $("#harga_beli").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				// Allow: Ctrl+A, Command+A
				(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
				// Allow: home, end, left, right, down, up
				(e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
				alert('Hanya Boleh Diisi Angka..');
				 $("#harga_beli").val("");
				}
				});
				
				$("#harga_jual").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				// Allow: Ctrl+A, Command+A
				(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
				// Allow: home, end, left, right, down, up
				(e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
				alert('Hanya Boleh Diisi Angka..');
				$("#harga_jual").val("");
				}
				});
				
				
				$("#stock").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				// Allow: Ctrl+A, Command+A
				(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
				// Allow: home, end, left, right, down, up
				(e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
				
				}
				});
				
				batasi_digit()
			}
			
			function batasi_digit(){
			$('#stock').keypress(function(e) { 

			var verified = (e.which == 8 || e.which == undefined || e.which == 0) ? null : String.fromCharCode(e.which).match(/[^0-9]/);debugger;
			if (verified || e.delegateTarget.value.length>2 || e.ctrlKey ==true) { alert('maksimal 3 digit dan harus angka'); $("#harga_jual").val(""); if(e.which!=8 ){e.preventDefault();}}

			}).on('paste',function(e){ e.preventDefault();});

			
			}
			
			
			
			
			
			
		//validasi inputan
					  
		$("#modal-testing").hide();			  
					  
		$(document).ready(function() { 
		
		getjumlahrecord();
       tampildatabarang();
	   
	  
	   
	   buat_paging($("#total_record2").val());
	   
	   $("#sample-table-2_info").text("");
		$("#sample-table-2_info").text('Menampilkan 1 Sampai 4 Dari '+ $('#total_record2').val() +' Records');
		
		$("#btn-cancel-input").click(function(event) {
			event.preventDefault();
			 $("#modal-testing").fadeOut("slow");
        });
		
			
		$("#btn-x-input").click(function(event) {
			event.preventDefault();
			 $("#modal-testing").fadeOut("slow");
        });
		
		//bootbox-regular
		
		$("#bootbox-regular").click(function(event) {
			event.preventDefault();
			 $("#modal-testing").fadeIn(1000);
			  get_product();
			 $("#judul-modal").text('Tambah Data Barang');
			 $("#kode_barang").val("");
			 $("#kode_barang").attr({ "disabled":false});
			 $("#nama_barang").val("");
			 $("#kode_produk").attr({ "disabled":false});
			 $("#nama_produk").val("");
			 $("#nama_barang").attr({ "disabled":false});
			 $("#satuan").val("");
			 $("#satuan").attr({ "disabled":false});
			 $("#harga_beli").val("");
			 $("#harga_beli").attr({ "disabled":false});
			 $("#harga_jual").val("");
			 $("#harga_jual").attr({ "disabled":false});
			 $("#stock").val("");
			 $("#stock").attr({ "disabled":false});
			 $("#aksi").val('tambah');
			 $("#btn-ok").attr({ "disabled":false});
			 
			 hanya_angka();
	    });
		
		
		$("#text-search-barang").change(function(event) {
			event.preventDefault();
			//cari_barang($("#text-search-barang").val());
			//cari();
	    });
		$("#btn-cari").css('cursor','pointer');
		$("#btn-cari").click(function(event) {
			event.preventDefault();
			cari_barang($("#text-search-barang").val());
	    });
		
		$("#btn-ok").click(function(event) {
		
			event.preventDefault();
			
			if($("#kode_barang").val() == "" | $("#nama_barang").val() == "" | $("#kode_produk").val() == "" | $("#satuan").val() == "" | $("#harga_beli").val() == "" | $("#harga_jual").val() == "" | $("#stock").val() == ""){
				alert('Semuanfield harus diisi');
				
			}else{
				
				if($("#aksi").val()=="tambah"){
				
					simpan_data($("#kode_barang").val(),$("#nama_barang").val(),$("#kode_produk").val(),$("#satuan").val(),$("#harga_beli").val(),$("#harga_jual").val(),$("#stock").val());
					
				}else if($("#aksi").val()=="hapus"){
				
					hapus_data($("#kode_barang").val());
					
				}else if($("#aksi").val()=="edit"){
				
					edit_data($("#kode_barang").val(),$("#nama_barang").val(),$("#kode_produk").val(),$("#satuan").val(),$("#harga_beli").val(),$("#harga_jual").val(),$("#stock").val());
					
				}
				
			}
	    });
		
        });
		
		</script>
	