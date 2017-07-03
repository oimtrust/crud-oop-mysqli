<div class="container">
	<div class="row">
	    <div class="col s12 m12">
	    	<div class="card blue-grey darken-1">
	    		<div class="card-title center white-text">
	    			<h4>Update Article</h4>
	    			<?php 
	    				if (isset($error)) {
	    					foreach ($error as $error) {
	    						?>
								<div class="row">
				    				<div class="col s12">
				    					<div class="chip red darken-1 white-text">
										    <?php echo $error; ?>
										    <i class="close mdi mdi-close white-text"></i>
										 </div>
				    				</div>
				    			</div>
	    						<?php
	    					}
	    				}
	    			 ?>
	    		</div>
		    	<div class="card horizontal">
			    	<form class="col s12" method="POST">
			    		<input type="hidden" name="id" value="<?php echo $data->id; ?>" class="validate">
				      <div class="row">
				        <div class="input-field col s12">
							<i class="prefix mdi mdi-martini"></i>
				          	<input id="title" name="title" type="text" value="<?php echo $data->title ?>" class="validate">
				          	<label for="title">Title</label>
				        </div>

				        <div class="input-field col s12">
							<i class="prefix mdi mdi-book-open-page-variant"></i>
				          	<textarea id="content" name="content" class="materialize-textarea validate"><?php echo $data->content; ?></textarea>
				          	<label for="content">Content</label>
				        </div>

				        <div class="input-field col s12">
							<i class="prefix mdi mdi-account-circle"></i>
				          	<input id="author" name="author" type="text" value="<?php echo $data->author; ?>" class="validate">
				          	<label for="author">Author</label>
				        </div>
				      </div>
				      <div class="row right">
				      	<div class="input-field col s12">
				      		<button type="submit" name="btn_update_article" class="waves-effect waves-light btn ">Save</button>
				      		<a href="<?php $baseUrl; ?>index.php?page=articles" class="waves-effect waves-green btn purple">Back</a>
				      	</div>
				      </div>
				    </form>
			    </div>
		    </div>
	    </div>
	</div>
</div>

<!-- Script JS -->
<script type="text/javascript">
  	$('#content').trigger('autoresize');
</script>