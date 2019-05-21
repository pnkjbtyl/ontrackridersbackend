
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
</div
</main>