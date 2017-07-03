<div class="navbar-fixed">
<nav>
	<div class="nav-wrapper green accent-4">
		<div class="container">
			<div class="row">
			    <a href="<?php $baseUrl; ?>index.php" class="brand-logo">Ongisschool</a>
			    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			    <ul id="nav-mobile" class="right hide-on-med-and-down">
			        <li><a href="<?php $baseUrl; ?>index.php">Home</a></li>
			        <li><a href="<?php $baseUrl; ?>index.php?page=articles">Articles</a></li>
			    </ul>
			</div>
		</div>
	</div>
</nav>
</div>

<ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="public/images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="public/images/ongislogo.png"></a>
      <a href="#!name"><span class="white-text name">Ongis School</span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php $baseUrl; ?>index.php">Home</a></li>
    <li><a class="waves-effect" href="<?php $baseUrl; ?>index.php?page=articles">Articles</a></li>
</ul>
  