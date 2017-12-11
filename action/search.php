<?php require_once 'includes/connect.php' ;?>
<?php
	$search = '';
	if(isset($_GET['search']) && !empty($_GET['search']))
	{
		 $search = $_GET['search'];
		 echo '<div class="txtsearch">Kết quả tìm kiếm cho từ khóa:<strong> '. $search.'</strong></div>';
	}
	else
	{
		 $search = '';
	}
	// truy vấn lấy kết quả trả về có từ cần tìm 
	$query_search = "SELECT * FROM details WHERE title LIKE '%".$search."%' or category LIKE '%".$search."%' or city LIKE '%".$search."%'";
	$result_search = $link->query($query_search);
	
	// đếm số kết quả tìm được
	$total_rows = mysqli_fetch_assoc($result_search);
?>