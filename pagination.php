<?php
class PerPage {
	public $perpage;
	
	function __construct() {
		$this->perpage = 5;
	}
	
	function getAllPageLinks($count,$href) {
		$output = [];
		$output['page_url'] = $href;
		if(!isset($_GET["page"])) $_GET["page"] = 1;
		if($this->perpage != 0)
		{
			$output['count_pages']  = ceil($count/$this->perpage);
			$pages  = ceil($count/$this->perpage);
		}
		if($pages>1) {
			
			for($i=$_GET["page"]; $i <= $pages; $i++)	{
				if($i<1) continue;
				if($i>$pages) break;
				if($_GET["page"] == $i)
				{
					$output['current_page']=$i;
				}					
				else	
				{					
					$output['remain_pages']=$i;
				}
			}
			
			
		}
		return $output;
	}
	function getPrevNext($count,$href) {
		$output = [];
		$output['page_url'] = $href;
		if(!isset($_GET["page"])) $_GET["page"] = 1;
		if($this->perpage != 0)
		{
			$output['count_pages']  = ceil($count/$this->perpage);
			$pages  = ceil($count/$this->perpage);
		}
		if($pages>1) {
			$output['current_page']=$_GET["page"];
		}
		return $output;
	}
}
?>