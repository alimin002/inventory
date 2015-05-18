<?php if (!defined( 'BASEPATH')) exit( 'No direct script access allowed'); /* Manggu Framework * Simple PHP Application Development * Kusnassriyanto S. Bahri * kusnassriyanto@gmail.com * */ ?>
<style>

body
{
font-family:arial;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>
<body>
<div class="col-xs-12" id="induk-barang">
		<!-- PAGE CONTENT BEGINS -->
		<h3>Upload Foto Barang</h3>

		<div class="row">
			<!-- content is here -->

			<input type="hidden" id="total_record2" />
			<input type="hidden" id="data-pencarian" />
		</div>

		<!-- /.row -->

		<!-- #section:custom/extra.hr -->
		<div class="hr hr32 hr-dotted"></div>

		<!-- /section:custom/extra.hr -->
		<div class="row">
			<!-- content 1 is here -->
			<div class="col-xs-12 col-sm-3 center">
				<div>
					<!-- #section:pages/profile.picture -->
					<span class="profile-picture">
					<?php echo $databarang[0]->kode_barang; ?>
						<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="<?php echo base_url().'uploads/foto_barang/'.$databarang[0]->kode_barang.'/foto.jpg'; echo "?rnd=".rand(0,10000)  ?>" >
					</span>

					<!-- /section:pages/profile.picture -->
					<div class="space-4"></div>

					<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
						<div class="inline position-relative">
							<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
								<i class="ace-icon fa fa-circle light-green"></i> &nbsp;
								<span class="white" id="nama-barang-frame"></span>
							</a>

							<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
								<li class="dropdown-header"> Change Status </li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-circle green"></i> &nbsp;
										<span class="green">Available</span>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-circle red"></i> &nbsp;
										<span class="red">Busy</span>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-circle grey"></i> &nbsp;
										<span class="grey">Invisible</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-9">

				<div class="profile-user-info profile-user-info-striped">
					<div class="profile-info-row">
						<div class="profile-info-name"> Kode Barang </div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="kode_barang"></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Nama Barang </div>

						<div class="profile-info-value">
							<i class="editable editable-click"></i>
							<span class="editable editable-click" id="nama_barang"></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Nama Produk </div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="nama_produk"></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name">Satuan</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="satuan"></span>
						</div>
					</div>

					
					<div class="profile-info-row">
						<div class="profile-info-name">Harga Beli</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="harga_beli"></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Harga Jual </div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="harga_jual"></span>
						</div>
					</div>
					
					<div class="profile-info-row">
						<div class="profile-info-name"> Stock </div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="stock"></span>
						</div>
					</div>
					
				</div>

			</div>

		</div>
		<div  class="row">
			<div class="col-xs-12 col-sm-3 center" style="margin-top:10px;">
				<form id="imageform" method="post" action="http://localhost/inventory/index.php/barang_controller/do_upload" enctype="multipart/form-data">
						<input class="btn btn-white btn-primary" name="userfile" size="20" type="file">
						<input id="dirfile" name="dirfile" size="20" type="hidden">
						<input id="id" name="id" size="20" type="hidden">
						<input id="kode_barang" name="kode_barang" size="20" type="hidden">
						<div style="margin-top:10px; margin-bottom:200px; width:270px; background-color:#dadada;">
							<button type="submit" class="btn btn-danger btn-block" style="margin-top:10px width;">Upload </button>
						</div>
				</form>
			</div>
		<!-- /.row -->

			<div class="hr hr32 hr-dotted"></div>

			<div class="row">
				<div id="preview">
				</div>
				<!-- content 2 is here -->
			</div>
		<!-- /.col -->

			<div class="col-sm-6">
				<!-- content 3 is here -->
			</div>
		<!-- /.col -->
	</div>
</div>
<script type="text/javascript">

$(document).ready(function() { 
//alert(<?php $enkod= json_encode($databarang);  $phpArray = json_decode($enkod, true);  foreach ($phpArray as $key => $value) {
    echo "<h2>$key</h2>";
    foreach ($value as $k => $v) {
        echo "$k | $v <br />";
    }
} ?>);
var obj=<?php echo json_encode($databarang);?>;
//alert(obj[0]['kode_barang']);
//alert('<?php echo json_encode($databarang);?>');
$('#kode_barang').text(obj[0]['kode_barang']);
$('#nama_barang').text(obj[0]['nama_barang']);
$('#nama-barang-frame').text(obj[0]['nama_barang']);
$('#nama_produk').text(obj[0]['nama_produk']);
$('#satuan').text(obj[0]['satuan']);
$('#harga_beli').text(obj[0]['harga_beli']);
$('#harga_jual').text(obj[0]['harga_jual']);
$('#stock').text(obj[0]['stock']);
$('#dirfile').val(obj[0]['kode_barang']);
$('#id').val("<?php echo  $id; ?>");

//var targetlink="<?php echo base_url()?>";
//alert(targetlink+'uploads/'+obj[0]['kode_barang']+'/foto.jpg');
//$("#avatar").attr({ "src":targetlink+'uploads/foto_barang/'+obj[0]['kode_barang']+'/foto.jpg'});






});


</script>