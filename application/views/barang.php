
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
	
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
						<h3>Data Barang </h3>

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
                                        <th>Kode Produk</th>
                                        <th class="hidden-480">Nama Barang</th>

                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i> Satuan
                                        </th>
                                        <th class="hidden-480">Harga Beli</th>

                                        <th>Harga Jual</th>
										
										<th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody id="tbody_barang">
                                    
                                </tbody>
                            </table>
							<input type="hidden" id="total_record"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div id="sample-table-2_info" class="dataTables_info"></div>
                            </div>
                            <div class="col-xs-6">
                                <div class="dataTables_paginate paging_bootstrap">
                                    <ul class="pagination" id="paginationbarang">
									<!--
                                        <li class="prev disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                        <li class="prev disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                       
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
								-->
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <button class="btn btn-white btn-info btn-bold" id="bootbox-regular"> + Tambah Data Barang</button>

                        </div>
						
						
						<div class="col-xs-6" id="modal-barang">
					
                            <div class="modal-content" style="margin-top:-200px;">
                                <div class="modal-header">
                                    <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" id="btn-x-input">×</button>
                                    <h4 class="modal-title">Input Data Barang</h4>
								</div>
                                <div class="modal-body">
                                    <div class="bootbox-body">
                                        <form class="bootbox-form">
										Kode Barang
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
										Nama Barang
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
										Kode Produk
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
										Satuan
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
										Harga Beli
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
										Harga Jual
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
										Stock
                                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text">
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button data-bb-handler="cancel" type="button" class="btn btn-default" id="btn-cancel-input">Cancel</button>
                                    <button data-bb-handler="confirm" type="button" id="btn-save" class="btn btn-primary">OK</button>
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
					  $("#modal-barang").hide();
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
					  
					    
						function tampildatabarang(){
							var targeturl="<?php echo base_url().'index.php/barang_controller/getbarangall'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							success: function (data) {
							var obj = JSON.parse(data);
							var jumlahrecord=obj.length;
							
							
							for (var i =0; i< obj.length; i++){
							
							$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['kode_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td></tr>");
							}
							
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
								console.log("ERRORS : " + errorThrown);
							}
				
							});
						}
						
						
						
						
						function buat_paging(total_record){
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
						
					
						function pindahpage(page){
							//alert(page);
							var pagenum=page.substring(5, 4);
							alert(pagenum);
							var targeturl="<?php echo base_url().'index.php/barang_controller/pindahpage'?>";
							$.ajax({
							url:targeturl,
							type: "POST",
							data:{
							 page:pagenum
							 },
							
							success: function (data) {
							var obj = JSON.parse(data);
							//alert(obj[0]['kode_barang']);
							$("#tbody_barang").empty();
							for (var i =0; i< obj.length; i++){
							
							$("#tbody_barang").append("<tr><td></td><td>"+obj[i]['kode_barang']+"</td>"+"<td>"+obj[i]['kode_produk']+"</td><td>"+obj[i]['nama_barang']+"</td><td>"+obj[i]['satuan']+"</td><td>"+obj[i]['harga_beli']+"</td><td>"+obj[i]['harga_jual']+"</td><td>"+obj[i]['stock']+"</td></tr>");
							}
							var start=(pagenum * 4) + 1;
							var lastlimit=start + 3;
							$("#sample-table-2_info").text('Menampilkan '+ start+' Sampai '+lastlimit +' Dari ' + $('#total_record').val() +' Records');
							},
							error: function (jqXHR, textStatus, errorThrown) {
							alert('ajax not succesfull'+ errorThrown);
								console.log("ERRORS : " + errorThrown);
							}
				
							});
						}	
						
					  
		$(document).ready(function() {
		gettotalrecord();
       tampildatabarang();
	   buat_paging($("#total_record").val());
	   $("#sample-table-2_info").text("");
		$("#sample-table-2_info").text('Menampilkan 1 Sampai 4 Dari '+ $('#total_record').val() +' Records');
		$("#bootbox-regular").click(function(event) {
			event.preventDefault();
			 $("#modal-barang").show();
			 
			
        });
		
		
		
		
		
		$("#btn-cancel-input").click(function(event) {
			event.preventDefault();
			 $("#modal-barang").hide();
        });
		
			
		$("#btn-x-input").click(function(event) {
			event.preventDefault();
			 $("#modal-barang").hide();
        });
		
		
        });
		
		
		</script>
	