<?php 

class usersController{
       
       function index(){
       		
		$pageno = (int) $this->params['page'];
		$pageno = ($pageno<1)? 1: $pageno;
                
		$no_of_records_per_page = 5;
		$offset = ($pageno-1) * $no_of_records_per_page;
		 
		 $qry =  "SELECT  COUNT(`id`) as `total_records` from `rider_users`" ;
		 $this->total_users = $this->db->query($qry)->fetch_object()->num_rows;
		 $this->total_pages = ceil($this->total_users / $no_of_records_per_page);
		 $this->current_page=$pageno;
		 
		 
		$sql = "SELECT * from `rider_users` LIMIT $offset, $no_of_records_per_page ";
		$results = $this->db->query($sql);
		$records = [];
		while($row = $results->fetch_assoc())
		$records[] = $row;

		$this->records = $records;
		$this->table_headings = array_keys($records[0]);	
	 
	 	
	}
	
	function __construct(){
	    	if(!$_SESSION['uid']){
				header("location:".BASEURL);
				exit;
		}
	}
}

?>	
