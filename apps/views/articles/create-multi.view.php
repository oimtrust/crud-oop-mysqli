<div class="container">
	<div class="row">
	    <div class="col s12 m12">
	    	<div class="card blue-grey darken-1">
	    		<div class="card-title center white-text">
	    			<h4>Create Article</h4>
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
			    		<div class="center">
			    			<h4>Article 1</h4>
			    		</div>
				      <div class="row">
				        <div class="input-field col s12">
							<i class="prefix mdi mdi-martini"></i>
				          	<input id="title" name="title" type="text" class="validate">
				          	<label for="title">Title</label>
				        </div>

				        <div class="input-field col s12">
							<i class="prefix mdi mdi-book-open-page-variant"></i>
				          	<textarea id="content" name="content" class="materialize-textarea validate"></textarea>
				          	<label for="content">Content</label>
				        </div>

				        <div class="input-field col s12">
							<i class="prefix mdi mdi-account-circle"></i>
				          	<input id="author" name="author" type="text" class="validate">
				          	<label for="author">Author</label>
				        </div>
				      </div>

				      <hr>
						
						<div class="center">
			    			<h4>Article 2</h4>
			    		</div>

				      <div class="row">
				        <div class="input-field col s12">
							<i class="prefix mdi mdi-martini"></i>
				          	<input id="titlem" name="titlem" type="text" class="validate">
				          	<label for="titlem">Title</label>
				        </div>

				        <div class="input-field col s12">
							<i class="prefix mdi mdi-book-open-page-variant"></i>
				          	<textarea id="contentm" name="contentm" class="materialize-textarea validate"></textarea>
				          	<label for="contentm">Content</label>
				        </div>

				        <div class="input-field col s12">
							<i class="prefix mdi mdi-account-circle"></i>
				          	<input id="authorm" name="authorm" type="text" class="validate">
				          	<label for="authorm">Author</label>
				        </div>
				      </div>
				      <div class="row right">
				      	<div class="input-field col s12">
				      		<button type="submit" name="btn_save_multi_article" class="waves-effect waves-light btn ">Save</button>
				      		<a href="<?php $baseUrl; ?>index.php?page=articles&action=articles" class="waves-effect waves-green btn purple">Back</a>
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