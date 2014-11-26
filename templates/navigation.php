<! Adapted from getbootstrap.com>

<?php if (isset($name)): ?>
	<div style="text-align:right;">
    	<h5>Welcome, <?= htmlspecialchars($name) ?>!</h5>
	</div>
<?php endif ?>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a href="/">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Results</a></li>
        <li><a href="#">Standings</a></li>   
		<li><a href="/huddle.php">The Huddle</a></li>  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Log out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Change password</a></li>
            <li><a href="#">Change e-mail</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
