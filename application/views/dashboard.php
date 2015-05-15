
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
						<h3>Dashboard</h3>

                        <div class="row">
                            <!-- content is here -->
                            <div class="col-sm-7">
									<div class="widget-box transparent">
										<div class="widget-header widget-header-flat">
											<h4 class="widget-title lighter">
												<i class="ace-icon fa fa-signal"></i>
												Sale Stats
											</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main padding-4">
												<div style="width: 100%; height: 220px; padding: 0px; position: relative;" id="sales-charts"><canvas height="220" width="635" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 635px; height: 220px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 29px; text-align: center;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 124px; text-align: center;">1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 219px; text-align: center;">2.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 314px; text-align: center;">3.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 410px; text-align: center;">4.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 505px; text-align: center;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 204px; left: 600px; text-align: center;">6.0</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div class="flot-tick-label tickLabel" style="position: absolute; top: 192px; left: 1px; text-align: right;">-2.000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 168px; left: 1px; text-align: right;">-1.500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 144px; left: 1px; text-align: right;">-1.000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 120px; left: 1px; text-align: right;">-0.500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 96px; left: 4px; text-align: right;">0.000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 72px; left: 4px; text-align: right;">0.500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 48px; left: 4px; text-align: right;">1.000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 24px; left: 4px; text-align: right;">1.500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 4px; text-align: right;">2.000</div></div></div><canvas height="220" width="635" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 635px; height: 220px;" class="flot-overlay"></canvas><div class="legend"><div style="position: absolute; width: 62px; height: 66px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden"></div></div></td><td class="legendLabel">Domains</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(175,216,248);overflow:hidden"></div></div></td><td class="legendLabel">Hosting</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(203,75,75);overflow:hidden"></div></div></td><td class="legendLabel">Services</td></tr></tbody></table></div></div>
											</div><!-- /.widget-main -->
										</div><!-- /.widget-body -->
									</div><!-- /.widget-box -->
								</div>
                        </div>
                        <div class="row">
                           
						
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
		//$("#modal-barang").hide();
		$(document).ready(function() {
        $("#modal-barang").hide();
		
		$("#bootbox-regular").click(function(event) {
			event.preventDefault();
			//window.location.href='<?php echo base_url().'index.php/barang_controller/tampildatabarang'?>';
			//alert('barang is here');
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
	