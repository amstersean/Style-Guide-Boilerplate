 <?php include_once('functions.php'); ?>
 <?php $project_name = "Project"; ?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title><?php echo($project_name)?>Style Guide</title>
<meta name="viewport" content="width=device-width">
<!-- Style Guide Boilerplate Styles -->
<link rel="stylesheet" href="css/styleguide.css">
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Google Font Lato -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>  
<!-- Replace below stylesheet with your own stylesheet -->
<link rel="stylesheet" href="css/theme.css">
</head>
<body   data-spy="scroll" data-target=".navbar-default" data-offset="60" >
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 0px;" role="navigation">
  <div class="container">
    <div class="navbar-header"> <a class="navbar-brand" href="#"><strong>Frontline Education</strong> Style Guide</a> </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select an element: <b class="caret"></b></a>
        <ul class="dropdown-menu  scroll-menu sg-sect">
          <?php listElementsAsOptions('docs'); ?>
          <?php listElementsAsOptions('foundation'); ?>
          <li role="presentation" class="divider"></li>
          <li role="presentation" class="dropdown-header">Base Styles</li>
          <?php listMarkupAsOptions('base'); ?>
          <li role="presentation" class="divider"></li>
          <li role="presentation" class="dropdown-header">Patterns</li>
          <?php listMarkupAsOptions('patterns'); ?>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!--/.sg-header-->

<div class=""> <!-- sg-body sg-container container -->
<div class="row" style="height: 100vh; background-color: #2b4c59; color: white; padding-top: 30vh; padding-left: 100px; padding-right: 100px;">
  <h1 class="" style="color: #6bCCb3; font-size: 5rem;">
  <?php showDocs(); ?>
  </h1>
</div>
<!--/.row-->
<div class="row">
  <h1 class="page-header">Foundation</h1>
  <?php showFoundation(); ?>
</div>
<!--/.row-->
<div class="row" style="height: 100vh; background-color: #402b56; background-repeat: no-repeat; background-attachment: fixed; background-position: right; background-image: url('http://www.frontlineeducation.com/getmedia/2af06be0-15c5-4778-b128-d9fca91d6302/whitePattern_1.aspx'); color: white; padding-top: 30vh; padding-left: 100px; padding-right: 100px;">
  <h1 style="color: #fff; font-size: 5rem;">
    The visual identity system is a package of design elements paired with style guidelines and used as a framework to ensure cohesive and consistent corporate image. <br>
    <small><em>Adapted from "Designing a Brand Identity"</em></small>  
  </h1>
</div>

<div class="row sg-base-styles">
  <h1 class="page-header">Form Elements</h1>
  <?php showMarkup('base'); ?>
  </div><!--/.sg-base-styles-->
  <div class="sg-pattern-styles">
    <h1 class="page-header">Patterns<small> - Design and mark-up patterns unique to our site</small></h1>
    <?php showMarkup('patterns'); ?>
  </div>
  <!--/.sg-pattern-styles-->
</div>
<!--/.sg-body-->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/scrollspy.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/sg-plugins.js"></script>
<script src="js/sg-scripts.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
