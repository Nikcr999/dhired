<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
	<div class="deznav-scroll">
		<a href="javascript:void(0)" class="add-menu-sidebar" >DHIRED</a>
		<ul class="metismenu" id="menu">
			<li><a class="ai-icon" href="<?= base_url('admin') ?>" aria-expanded="false">
					<i class="fa fa-dashboard"></i>
					<span class="nav-text">Dashboard</span>
				</a>
				<!-- <ul aria-expanded="false">
					<li><a href="index.html">Dashboard</a></li>
					<li><a href="event.html">Event</a></li>
					<li><a href="event-detail.html">Event Detail</a></li>
					<li><a href="customers.html">Customers</a></li>
					<li><a href="analytics.html">Analytics</a></li>
					<li><a href="reviews.html">Reviews</a></li>
				</ul> -->
			</li>
			<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="fa fa-map-marker"></i>
					<span class="nav-text">Location</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="<?= base_url('admin/add_country') ?>">Add Country</a></li>
					<li><a href="<?= base_url('admin/add_state') ?>">Add State</a></li>
					<li><a href="<?= base_url('admin/add_city') ?>">Add City</a></li>
				</ul>
			</li>
			<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="fa fa-list-alt"></i>
					<span class="nav-text">Masters</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="<?= base_url('admin/add_interest') ?>">Add Interest</a></li>
					<li><a href="<?= base_url('admin/add_category') ?>">Add Category</a></li>
					<li><a href="<?= base_url('admin/add_subcategory') ?>">Add Subcategory</a></li>
				</ul>
			</li>
			<li><a class="ai-icon" href="<?= base_url('admin/add_social') ?>" aria-expanded="false">
					<i class="flaticon-381-television"></i>
					<span class="nav-text">Social Media</span>
				</a>
			</li>
			<li><a class="ai-icon" href="<?= base_url('admin/add_community') ?>" aria-expanded="false">
					<i class="fa fa-group"></i>
					<span class="nav-text">Community</span>
				</a>
			</li>
			<!-- <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
					<i class="flaticon-381-settings-2"></i>
					<span class="nav-text">Widget</span>
				</a>
			</li>
			<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-381-notepad"></i>
					<span class="nav-text">Forms</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="./form-element.html">Form Elements</a></li>
					<li><a href="./form-wizard.html">Wizard</a></li>
					<li><a href="./form-editor-summernote.html">Summernote</a></li>
					<li><a href="form-pickers.html">Pickers</a></li>
					<li><a href="form-validation-jquery.html">Jquery Validate</a></li>
				</ul>
			</li>
			<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-381-network"></i>
					<span class="nav-text">Table</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
					<li><a href="table-datatable-basic.html">Datatable</a></li>
				</ul>
			</li>
			<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-381-layer-1"></i>
					<span class="nav-text">Pages</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="./page-register.html">Register</a></li>
					<li><a href="./page-login.html">Login</a></li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
						<ul aria-expanded="false">
							<li><a href="./page-error-400.html">Error 400</a></li>
							<li><a href="./page-error-403.html">Error 403</a></li>
							<li><a href="./page-error-404.html">Error 404</a></li>
							<li><a href="./page-error-500.html">Error 500</a></li>
							<li><a href="./page-error-503.html">Error 503</a></li>
						</ul>
					</li>
					<li><a href="./page-lock-screen.html">Lock Screen</a></li>
				</ul>
			</li> -->
		</ul>
		<!-- <div class="copyright">
			<p><strong>Acara Ticketing Dashboard</strong> © 2021 All Rights Reserved</p>
			<p>Made with <span class="heart"></span> by DexignZone</p>
		</div> -->
	</div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->