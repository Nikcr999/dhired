<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
	<div class="copyright">
		<p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
	</div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?= base_url() ?>admin_assets/vendor/global/global.min.js"></script>
<script src="<?= base_url() ?>admin_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>admin_assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/custom.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/deznav-init.js"></script>
<script src="<?= base_url() ?>admin_assets/vendor/owl-carousel/owl.carousel.js"></script>

<!-- Chart piety plugin files -->
<script src="<?= base_url() ?>admin_assets/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url() ?>admin_assets/vendor/apexchart/apexchart.js"></script>
<!-- Datatable -->
<script src="<?= base_url() ?>admin_assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins-init/datatables.init.js"></script>
<!-- Dashboard 1 -->
<script src="<?= base_url() ?>admin_assets/js/dashboard/dashboard-1.js"></script>
<!-- Dropzone -->
<script src="<?= base_url() ?>dropzone/js/dropify.min.js"></script>
<script>
	$(document).ready(function() {
		// Basic
		$('.dropify').dropify();
		// Translated
		$('.dropify-fr').dropify({
			messages: {
				default: 'Glissez-déposez un fichier ici ou cliquez',
				replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
				remove: 'Supprimer',
				error: 'Désolé, le fichier trop volumineux'
			}
		});
		// Used events
		var drEvent = $('#input-file-events').dropify();
		drEvent.on('dropify.beforeClear', function(event, element) {
			return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
		});

		drEvent.on('dropify.afterClear', function(event, element) {
			alert('File deleted');
		});

		drEvent.on('dropify.errors', function(event, element) {
			console.log('Has Errors');
		});
		var drDestroy = $('#input-file-to-destroy').dropify();
		drDestroy = drDestroy.data('dropify')
		$('#toggleDropify').on('click', function(e) {
			e.preventDefault();
			if (drDestroy.isDropified()) {
				drDestroy.destroy();
			} else {
				drDestroy.init();
			}
		})
	});
</script>
<!-- Summernote -->
<script src="<?= base_url() ?>admin_assets/vendor/summernote/js/summernote.min.js"></script>
<!-- Summernote init -->
<script src="<?= base_url() ?>admin_assets/js/plugins-init/summernote-init.js"></script>
<script>
	function carouselReview() {
		/*  event-bx one function by = owl.carousel.js */
		jQuery('.event-bx').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			center: true,
			autoplaySpeed: 3000,
			navSpeed: 3000,
			paginationSpeed: 3000,
			slideSpeed: 3000,
			smartSpeed: 3000,
			autoplay: false,
			navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
			dots: true,
			responsive: {
				0: {
					items: 1
				},
				720: {
					items: 2
				},

				1150: {
					items: 3
				},

				1200: {
					items: 2
				},
				1749: {
					items: 3
				}
			}
		})
	}
	jQuery(window).on('load', function() {
		setTimeout(function() {
			carouselReview();
		}, 1000);
	});
</script>
</body>

</html>