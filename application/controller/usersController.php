<?php 

class usersController{
       
       function details(){
         
			$sql = "SELECT * from `rider_users`";
			$results = $this->db->query($sql);

			$records = [];
			while($row = $results->fetch_assoc())
				$records[] = $row;

			$this->records = $records;
			$this->table_headings = array_keys($records[0]);

		
       }


}




 ?>