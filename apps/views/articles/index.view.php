<div class="container">
	<div class="row">

		<?php 
			if (isset($_GET['saved'])) {
				?>
				<div class="col s12 center">
					<div class="row">
			    		<div class="col s12">
			    			<div class="chip green darken-1 white-text">
								Congratulation..! Successfully saved data
								<i class="close mdi mdi-close white-text"></i>
							</div>
			    		</div>
			    	</div>
				</div>
				<?php
			}
			elseif (isset($_GET['error'])) {
				?>
				<div class="col s12 center">
					<div class="row">
			    		<div class="col s12">
			    			<div class="chip red darken-1 white-text">
								Choice your data for editing!
								<i class="close mdi mdi-close white-text"></i>
							</div>
			    		</div>
			    	</div>
				</div>
				<?php
			}
		 ?>
		<form >
			<table class="responsive-table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>Content</th>
						<th>Author</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$limit 	= 5;
						$pg 	= isset($_GET['pg']) ? $_GET['pg'] : "";

						if (empty($pg)) {
							$position 	= 0;
							$pg 		= 1;
						}
						else {
							$position 	= ($pg - 1) * $limit;
						}

						$sql 	= $article->execute(
							"SELECT id, title, content, author, created_at FROM articles WHERE id LIMIT $position, $limit"
							);
						$i 		= 1 + $position;

						while ($data = $sql->fetch_assoc()) {
							?>
							<tr class="<?php if($i % 2 == 0) {echo "odd";} else {echo "even";} ?>">
								<td><?php echo $i; ?></td>
								<td><?php echo $data['title']; ?></td>
								<td><?php echo $data['content']; ?></td>
								<td><?php echo $data['author']; ?></td>
								<td><?php echo $data['created_at']; ?></td>
								<td>
									<a href="<?php $baseUrl; ?>index.php?page=articles&action=detail&detail_id=<?php echo $data['id']; ?>" title="Detail" class="btn-floating waves-effect waves-light blue lighten-3 tippy">
										<i class="mdi mdi-eye-outline"></i>
									</a>

									<a href="<?php $baseUrl; ?>index.php?page=articles&action=update&edit_id=<?php echo $data['id']; ?>" title="Edit" class="btn-floating waves-effect waves-light yellow tippy">
										<i class="mdi mdi-pencil"></i>
									</a>
									
									<a href="<?php $baseUrl; ?>index.php?page=articles&action=delete&delete_id=<?php echo $data['id']; ?>" class="btn-floating waves-effect waves-light red tippy btn-delete" title="Delete" >
								<i class="mdi mdi-delete"></i>
							</a>
								</td>
							</tr>
							<?php
							$i++;
						}
					 ?>
				</tbody>
			</table>
			<div class="row right">
                  <?php 
                    $amount_of_data   = $article->execute("SELECT id, title, content, author, created_at FROM articles WHERE id");

                    $rows             = $amount_of_data->num_rows;

                    //calculate page
                    $amount_of_page   = ceil($rows / $limit);

                    /*
                     * navigation to return page/ before page
                     */
                    if ($pg > 1) {
                      $link   = $pg - 1;
                      $prev   = "<a href= '$baseUrl/index.php?page=articles&pg=$link'><i class='mdi mdi-arrow-left-bold'></i></a>";
                    }
                    else {
                      $prev   = "";
                    }

                    /*
                       * navigation to next/ after page
                       */
                      if ($pg < $amount_of_page) {
                        $link   = $pg + 1;
                        $next   = "<a href= '$baseUrl/index.php?page=articles&pg=$link'><i class='mdi mdi-arrow-right-bold'></i></a>";
                      }
                      else {
                        $next   = "";
                      }
                      echo "<ul class='pagination'>
                              <li class='waves-effect'>".$prev."</li>
                              <li class='waves-effect'>".$next."</li>
                            </ul>";
                   ?>
                </div>
		</form>

		<!-- Start Fixed Action Button -->
		<div class="fixed-action-btn horizontal click-to-toggle">
		    <a class="btn-floating btn-large red">
		      <i class="large mdi mdi-plus"></i>
		    </a>
		    <ul>		      
		      <li><a href="<?php $baseUrl; ?>index.php?page=articles&action=createMulti"  class="btn-floating green darken-1 tippy" title="Create Multiple"><i class="mdi mdi-checkbox-multiple-blank"></i></a></li>
		      <li><a href="<?php $baseUrl; ?>index.php?page=articles&action=create" class="btn-floating blue tippy" title="Create"><i class="mdi mdi-border-color"></i></a></li>
		    </ul>
		</div>
		<!-- End Fixed Action Button -->
	</div>
</div>

<!-- Script JS -->
<script type="text/javascript">
	Tippy('.tippy', {
	    position: 'top',
	    animation: 'scale',
	    duration: 1000,
	    theme: 'light',
	    arrow: true
	})

	$('.btn-delete').on('click',function(){
        var getLink = $(this).attr('href');
        
        swal({
            title: 'Delete Article',
            text: 'Are you sure?',
            html: true,
            confirmButtonColor: '#d9534f',
            showCancelButton: true,
            },function(){
                window.location.href = getLink
        });
        
        return false;
    });
</script>