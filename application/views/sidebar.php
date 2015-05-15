<?php if (!defined( 'BASEPATH')) exit( 'No direct script access allowed'); /* Manggu Framework * Simple PHP Application Development * Kusnassriyanto S. Bahri * kusnassriyanto@gmail.com * */ ?>
  <div class="main-container" id="main-container">
  <script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

<div id="sidebar" class="sidebar responsive">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="ace-icon fa fa-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="ace-icon fa fa-pencil"></i>
                    </button>

                    <!-- #section:basics/sidebar.layout.shortcuts -->
                    <button class="btn btn-warning">
                        <i class="ace-icon fa fa-users"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="ace-icon fa fa-cogs"></i>
                    </button>

                    <!-- /section:basics/sidebar.layout.shortcuts -->
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div>
            <!-- /.sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li class="active">
                    <a href="#" id="mnu_dashboard">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text"> Master </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" class="dropdown-toggle" id="mnu_barang" name="mnu_barang">
                                <i class="menu-icon fa fa-caret-right"></i> Barang
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_suplier" name="mnu_suplier">
                                <i class="menu-icon fa fa-caret-right"></i> Suplier
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_customer" name="mnu_customer">
                                <i class="menu-icon fa fa-caret-right"></i> Customer
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle" id="mnu_transaksi" name="mnu_transaksi">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text"> Transaksi </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" id="mnu_trans_pembelian" name="mnu_trans_pembelian">
                                <i class="menu-icon fa fa-caret-right" ></i> Pembelian
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_trans_penjualan" name="mnu_trans_penjualan">
                                <i class="menu-icon fa fa-caret-right"></i> Penjualan
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_trans_return" id="mnu_trans_return">
                                <i class="menu-icon fa fa-caret-right"></i> Return
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> Laporan </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" id="mnu_lap_seluruh_pemasok" name="mnu_lap_seluruh_pemasok">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Pemasok
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_lap_seluruh_kota" name="mnu_lap_seluruh_kota">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Pelanggan
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_lap_seluruh_group_barang" name="mnu_lap_seluruh_group_barang">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Group Barang
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_lap_seluruh_produk_barang" name="mnu_lap_seluruh_produk_barang">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Produk Barang
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_seluruh_stok_minimum" id="mnu_lap_seluruh_stok_minimum">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Stok Barang Minimum
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_lap_penj_pernota" name="mnu_lap_penj_pernota">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Penjualan Pernota
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_penj_per_tgl_transaksi" id="mnu_lap_penj_per_tgl_transaksi">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Penjualan Per Tanggal Transaksi
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_lap_penj_per_periode" name="mnu_lap_penj_per_periode">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Penjualan Per Periode
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_penj_per_nota" id="mnu_lap_penj_per_nota">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Pembelian Pernota
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_pemb_per_tgl_transaksi" id="mnu_lap_pemb_per_tgl_transaksi">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Pembelian Pertanggal Transaksi
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_pemb_per_periode" id="mnu_lap_pemb_per_periode">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Pembelian Perperiode
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_seluruh_return_pemb" id="mnu_lap_seluruh_return_pemb">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Return Pembelian
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_seluruh_return_penj" id="mnu_lap_seluruh_return_penj">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Return Penjualan
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" name="mnu_lap_seluruh_pengguna" id="mnu_lap_seluruh_pengguna">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan Seluruh Pengguna
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>


                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-magnet"></i>
                        <span class="menu-text"> Acounting </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="hsub open">
                            <a class="dropdown-toggle" href="#" id="mnu_akuntansi_file" id="mnu_akuntansi_file">
                                <i class="menu-icon fa fa-caret-right"></i> File
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu nav-show" style="display: block;">
                                <li class="">
                                    <a href="#" id="mnu_login_akuntansi" name="">
                                        <i class="menu-icon fa fa-caret-right"></i> Login
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#" name="mnu_akuntansi_exit" name="mnu_akuntansi_exit">
                                        <i class="menu-icon fa fa-caret-right"></i> Exit
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>

                        <li class="hsub open">
                            <a class="dropdown-toggle" href="#" name="mnu_akuntansi_master" id="mnu_akuntansi_master">
                                <i class="menu-icon fa fa-caret-right"></i> Master
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu nav-show" style="display: block;">
                                <li class="">
                                    <a href="#" id="mnu_akuntansi_nama_usaha" name="mnu_akuntansi_nama_usaha">
                                        <i class="menu-icon fa fa-caret-right"></i> Nama Usaha
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#" name="mnu_akuntansi_informasi_pajak" id="mnu_akuntansi_informasi_pajak">
                                        <i class="menu-icon fa fa-caret-right"></i> Informasi Pajak Perusahaan
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#" id="mnu_akuntansi_perkiraan" name="mnu_akuntansi_perkiraan">
                                        <i class="menu-icon fa fa-caret-right"></i> Perkiraan
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#" id="mnu_akuntansi_periode" name="mnu_akuntansi_periode">
                                        <i class="menu-icon fa fa-caret-right"></i> Periode
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>

                        <li class="hsub open">
                            <a class="dropdown-toggle" href="#" id="mnu_akuntansi_setup" name="mnu_akuntansi_setup">
                                <i class="menu-icon fa fa-caret-right"></i> Setup
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu nav-show" style="display: block;">
                                <li class="">
                                    <a href="#" id="mnu_akuntansi_setup_saldo_awal" name="mnu_akuntansi_setup_saldo_awal">
                                        <i class="menu-icon fa fa-caret-right"></i> Setup Saldo Awal
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                              </ul>
                        </li>

                        <li class="hsub">
                            <a class="dropdown-toggle" href="#">
                                <i class="menu-icon fa fa-desktop"></i>
                                <span class="menu-text"> Transaksi </span>

                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">



                                <li class="hsub">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="menu-icon fa fa-caret-right" id="mnu_trans_akuntansi_jurnal_umum" name="mnu_trans_akuntansi_jurnal_umum"></i> Jurnal Umum
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    
                                </li>
                                <li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_trans_jurnal_penyesuaian" name="mnu_akuntansi_trans_jurnal_penyesuaian">
                                        <i class="menu-icon fa fa-caret-right"></i> Jurnal Penyesuaian
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    
                                </li>

                            </ul>
                        </li>

                        <li class="hsub">
                            <a class="dropdown-toggle" href="#" >
                                <i class="menu-icon fa fa-desktop"></i>
                                <span class="menu-text"> Laporan </span>

                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">



                                <li class="hsub">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="menu-icon fa fa-caret-right" ></i> Jurnal
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    <ul class="submenu">
                                        <li class="">
                                            <a href="#" id="mnu_akuntansi_laporan_jurnal_umum" name="mnu_akuntansi_laporan_jurnal_umum">
                                                <i class="menu-icon fa fa-leaf"></i> Jurnal Umum
                                            </a>

                                            <b class="arrow"></b>
                                        </li>
										<li class="">
                                            <a href="#" id="mnu_akuntansi_laporan_jurnal_penyesuaian" name="mnu_akuntansi_laporan_jurnal_penyesuaian">
                                                <i class="menu-icon fa fa-leaf"></i> Jurnal Penyesuaian
                                            </a>

                                            <b class="arrow"></b>
                                        </li>

                                        
                                    </ul>
									<ul class="submenu">
                                        <li class="">
                                            <a href="#">
                                                <i class="menu-icon fa fa-leaf"></i> Jurnal Penyesuaian
                                            </a>

                                            <b class="arrow"></b>
                                        </li>

                                        
                                    </ul>
									
                                </li>
                                <li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_laporan_buku_besar">
                                        <i class="menu-icon fa fa-caret-right"></i> Buku Besar
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    <ul class="submenu">
                                        <li class="">
                                            <a href="#">
                                                <i class="menu-icon fa fa-leaf"></i> Item #1
                                            </a>

                                            <b class="arrow"></b>
                                        </li>

                                        <li class="hsub">
                                            <a class="dropdown-toggle" href="#">
                                                <i class="menu-icon fa fa-pencil"></i> 4th level
                                                <b class="arrow fa fa-angle-down"></b>
                                            </a>

                                            <b class="arrow"></b>

                                            <ul class="submenu">
                                                <li class="">
                                                    <a href="#">
                                                        <i class="menu-icon fa fa-plus"></i> Add Product
                                                    </a>

                                                    <b class="arrow"></b>
                                                </li>

                                                <li class="">
                                                    <a href="#">
                                                        <i class="menu-icon fa fa-eye"></i> View Products
                                                    </a>

                                                    <b class="arrow"></b>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
								<li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_lap_neraca_saldo">
                                        <i class="menu-icon fa fa-caret-right" ></i> Neraca Saldo
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    <ul class="submenu">
                                        <li class="">
                                            <a href="#">
                                                <i class="menu-icon fa fa-leaf"></i> Item #1
                                            </a>

                                            <b class="arrow"></b>
                                        </li>

                                        <li class="hsub">
                                            <a class="dropdown-toggle" href="#">
                                                <i class="menu-icon fa fa-pencil"></i> 4th level
                                                <b class="arrow fa fa-angle-down"></b>
                                            </a>

                                            <b class="arrow"></b>

                                            <ul class="submenu">
                                                <li class="">
                                                    <a href="#">
                                                        <i class="menu-icon fa fa-plus"></i> Add Product
                                                    </a>

                                                    <b class="arrow"></b>
                                                </li>

                                                <li class="">
                                                    <a href="#">
                                                        <i class="menu-icon fa fa-eye"></i> View Products
                                                    </a>

                                                    <b class="arrow"></b>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
								<li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_lap_neraca_lajur">
                                        <i class="menu-icon fa fa-caret-right"></i> Neraca Lajur
                               
                                    </a>                                    
                                </li>
								<li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_lap_laba_rugi">
                                        <i class="menu-icon fa fa-caret-right"></i> Laba Rugi
                               
                                    </a>                                    
                                </li>
								<li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_periode_equitas">
                                        <i class="menu-icon fa fa-caret-right"></i> Periode Equitas
                               
                                    </a>                                    
                                </li>
								<li class="hsub">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="menu-icon fa fa-caret-right" id="mnu_akuntansi_neraca"></i> Neraca
                               
                                    </a>                                    
                                </li>
								
								<li class="hsub">
                                    <a class="dropdown-toggle" href="#" id="mnu_akuntansi_lap_keuangan">
                                        <i class="menu-icon fa fa-caret-right"></i> Catatan Laporan Keuangan
                               
                                    </a>                                    
                                </li>
								
                            </ul>
                        </li>

                        <li class="hsub">
                            <a class="dropdown-toggle" href="#" id="mnu_akuntansi_proses">
                                <i class="menu-icon fa fa-desktop"></i>
                                <span class="menu-text"> Proses </span>

                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">



                                <li class="hsub">
                                    <a class="dropdown-toggle" href="#"id="mnu_akuntansi_posting_periode">
                                        <i class="menu-icon fa fa-caret-right"></i> Posting Periode
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    
                                </li>
                                
                            </ul>
                        </li>

                        <li class="">
                            <a href="#" id="mnu_akuntansi_laporan">
                                <i class="menu-icon fa fa-caret-right"></i> Laporan
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hsub open">
                            <a class="dropdown-toggle" href="#">
                                <i class="menu-icon fa fa-caret-right" id="mnu_akuntansi_tools"></i> Tools
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu nav-show" style="display: block;">
                                <li class="">
                                    <a href="#" id="mnu_akuntansi_hapus_data_latihan">
                                        <i class="menu-icon fa fa-caret-right"></i> Hapus Semua Data Latihan
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                              </ul>
                        </li>
                    </ul>
                </li>


                <li class="">
                    <a href="#" id="mnu_grafik_penjualan">
                        <i class="menu-icon fa fa-list-alt"></i>
                        <span class="menu-text"> Grafik Penjualan </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" id="mnu_trafic_pengunjung">
                        <i class="menu-icon fa fa-calendar"></i>

                        <span class="menu-text">
								Trafik Pengunjung

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>

                        <!-- /section:basics/sidebar.layout.badge -->
                        </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" id="mnu_pelanggan_online">
                        <i class="menu-icon fa fa-picture-o"></i>
                        <span class="menu-text"> Pelanggan Online </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle" id="mnu_akuntansi_manajemen">
                        <i class="menu-icon fa fa-file-o"></i>

                        <span class="menu-text">
								Manajemen

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-primary">5</span>

                        <!-- /section:basics/sidebar.layout.badge -->
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="faq.html">
                                <i class="menu-icon fa fa-caret-right"></i> FAQ
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="error-404.html">
                                <i class="menu-icon fa fa-caret-right"></i> Error 404
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="error-500.html">
                                <i class="menu-icon fa fa-caret-right"></i> Error 500
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="grid.html">
                                <i class="menu-icon fa fa-caret-right"></i> Grid
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="blank.html">
                                <i class="menu-icon fa fa-caret-right"></i> Blank Page
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.nav-list -->

            <!-- #section:basics/sidebar.layout.minimize -->
            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

            <!-- /section:basics/sidebar.layout.minimize -->
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {}
				
				$(document).ready(function() {
					var username= $("#username").text();
					$("#mnu_dashboard").click(function(event) {
						event.preventDefault();
						//alert('ok');
						window.location.href='<?php echo base_url().'index.php/base/getpage/dashboard/'?>'+username;
						//alert('barang is here');
					});
				
				
					$("#mnu_barang").click(function(event) {
					
						event.preventDefault();
						//alert('ok');
						window.location.href='<?php echo base_url().'index.php/base/getpage/barang/'?>'+username;
						//alert('barang is here');
					});
					
					$("#mnu_suplier").click(function(event) {
						event.preventDefault();
						//alert('ok');
						window.location.href='<?php echo base_url().'index.php/base/getpage/supplier/'?>'+username;
						//alert('barang is here');
					});
					
					
				});
				
				
			
				
            </script>
        </div>