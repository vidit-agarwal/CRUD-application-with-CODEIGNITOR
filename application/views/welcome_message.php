<?php include_once('header.php'); ?>
	<div class="container">
		<h3>View All Posts </h3>
		<?php echo anchor('welcome/create' , 'Add Post' , ['class'=>'btn btn-primary']);  echo "<br />" ;?>

		<table class="table table-striped table-hover table-bordered">
			  <thead class="thead-dark">
			    <tr>
			      <th>Title</th>
			      <th>Description</th>
			      <th>Creation Date</th>
			      <th>Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php  if(count($posts)) :?>
			  		<?php foreach($posts as $post) :?>
				    <tr>
				      <td><?php echo $post->title ;?></td>
				      <td><?php echo $post->description ;?></td>
				      <td><?php echo $post->date_created ;?></td>
				      <td>
				      	<?php echo anchor('welcome/view' , 'View' , ['class'=>'badge badge-primary']); ?>
				      	<?php echo anchor('welcome/update' , 'Update' , ['class'=>'badge badge-success']);?>
				      	<?php echo anchor('welcome/delete' , 'Delete' , ['class'=>'badge badge-danger']);?>


				      </td>
				    </tr>
				   <?php endforeach ;?>
				<?php else : ?>
					<tr>
						<td> No records FOund ! </td>
					</tr>
				<?php endif ;?>
			    
			  </tbody>
		</table> 

	</div>
<?php include_once('footer.php'); ?>