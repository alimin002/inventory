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
<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
	
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active"><?php echo $pagename ?></li>
						</ul><!-- /.breadcrumb -->

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id= "<?php echo 'text-search-'.$pagename ?>"  autocomplete="off" type="text">
									<i class="ace-icon fa fa-search nav-search-icon" id="btn-cari"><a href="#"></a></i>
								</span>
								
							</form>
						</div><!-- /.nav-search -->
						

						<!-- /section:basics/content.searchbox -->
	</div>