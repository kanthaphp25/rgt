<?php
    if (isset($_POST["page"])) {
			if($_POST["page"] != '<<' && $_POST["page"] != '>>')
			{
				$_SESSION['page'] = $_POST["page"];
			}else{
				
				if($_POST["page"] == '<<')
				$_POST["page"] = $_SESSION['page'] - 1;
				else if($_POST["page"] == '>>')
				$_POST["page"] = $_SESSION['page'] + 1;
			}
		}

$per_page =7;
function perpage($count, $per_page, $href)
{
    $output = '';
	 
    if (! isset($_POST["page"])) {
        $_POST["page"] = 1;
		$_SESSION['page'] = $_POST["page"];
    }else{
		if($_POST["page"] != '<<' || $_POST["page"] != '>>')
		{
			$_SESSION['page'] = $_POST["page"];
		}else{
			
			if($_POST["page"] == '<<')
			$_POST["page"] = $_SESSION['page'] - 1;
			else if($_POST["page"] == '>>')
			$_POST["page"] = $_SESSION['page'] + 1;
		}

	}
    if ($per_page != 0)
        $pages = ceil($count / $per_page);

    if ($pages >= 1) {

       $output = $output . '<input type="submit" name="page"  value="<<" />';
        for ($i =0; $i <= $pages; $i ++) {
            if ($i < 1)
                continue;
            if ($i > $pages)
                break;
            if ($_POST["page"] == $i)
			{
                $output = $output . '<span id=' . $i . ' class="current-page" >' . $i . '</span>';
			}
            else
			{
                $output = $output . '<input type="submit" name="page" class="perpage-link" value="' . $i . '" />';
			}
        }
       $output = $output . '<input type="submit" name="page"  value=">>" />';
    }
    return $output;
}

function showperpage($sql, $per_page, $href)
{
    require_once __DIR__ . '/DataSource.php';
    $db_handle = new DataSource();
    $count = $db_handle->getRecordCount($sql);
    $perpage = perpage($count, $per_page, $href);
    return $perpage;
}
?>