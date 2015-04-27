<?php
	class PageContents{
		public function get_header(){
			global $oTools;
			require_once('includes/header.php');
		}
		public function get_nav(){
			global $oTools;
			require_once('includes/nav.php');
		}
		public function get_banner(){
			require_once('includes/banner.php');
        }
		public function get_part($addpart){
			global $oTools;
			include_once('includes/'.$addpart);
		}
		public function get_footer(){
			require_once('includes/footer.php');
		}
		public function fix_course(){
			require_once('js/fixedNav.js');
		}
	}
	class Tools{
		public function get_current_page(){
			$link =explode("/",$_SERVER['PHP_SELF']);
			$page=$link[2];
			return $page;
		}
	}
?>