<div class="container">
	<div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-action">
              <h5 class="white-text"><?php echo $data->title; ?></h5>
              <hr>
              <?php echo $data->author ?> | Created At : <?php echo $data->created_at; ?>, Update At : <?php echo $data->updated_at; ?>
            </div>
            <div class="card-content white-text">
              <p><?php echo $data->content; ?></p>
            </div>

            <div class="card-action">
            	<a href="<?php $baseUrl; ?>index.php?page=articles&action=articles" class="btn waves-effect waves-light">Back</a>
            </div>
          </div>
        </div>
    </div>
</div>