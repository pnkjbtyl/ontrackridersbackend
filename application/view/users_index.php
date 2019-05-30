
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="row">
<section id="login">
  <div class="col-12 mt-3">
  <table class="table table-bordered table-striped">
  <tbody>	
        <thead>
          <tr>
          <?php foreach($current_controller->table_headings as $heading){ ?>
          		<th style="width: 20px"><?php echo ucwords(str_replace('_', ' ', $heading)) ?></th>
          <?php } ?>
          </tr>
        </thead>
        <?php foreach($current_controller->records as $row){ ?>
			<tr>
				<?php foreach($row as $value){ ?>
	         		<td><?php echo $value ?></td>
	         	<?php } ?>
			</tr>
        <?php } ?>    
        </tbody>
      </table>
      </div>
</div>
<div>
<?php $centerpage = $current_controller->current_page; ?>
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno-1); } ?>">Previous</a></li>
  <?php  for($i=$centerpage-2; $i<=$centerpage+2; $i++){ ?>
  	<?php if($i>0 && $i>=$current_controller->total_pages){?>
  	<li class="page-item"><a class="page-link" href="<?php echo BASEURL.'users/index/page/'.$i ?>"><?php echo $i ?></a></li>
  	<?php }?>
  <?php } ?>
  <li class="page-item"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
  </div>
</ul>

</main>
