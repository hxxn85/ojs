<?php 
if(stripos($_SERVER['REQUEST_URI'],"template")!==false)exit();
	$url=basename($_SERVER['REQUEST_URI']);
	$dir=basename(getcwd());
	if($dir=="discuss3") $path_fix="../";
	else $path_fix="../";
 	if(isset($OJ_NEED_LOGIN)&&$OJ_NEED_LOGIN&&(
                  $url!='loginpage.php'&&
                  $url!='lostpassword.php'&&
                  $url!='lostpassword2.php'&&
                  $url!='registerpage.php'
                  ) && !isset($_SESSION[$OJ_NAME.'_'.'user_id'])){
 
           header("location:".$path_fix."loginpage.php");
           exit();
        }
	$_SESSION[$OJ_NAME.'_'.'profile_csrf']=rand();
	if($OJ_ONLINE){
		require_once($path_fix.'include/online.php');
		$on = new online();
	}
?>
      <!-- Static navbar -->
      <nav class="navbar navbar-default" role="navigation" >
        <div style="height:75px; background-color: #e56d63">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $OJ_HOME?>" style="color:#ffffff; font-size: large"><i class="icon-home"></i><?php echo $OJ_NAME?></a>
	 <?php if(file_exists("moodle")){?>
            <a class="navbar-brand" href="moodle"><i class="icon-home"></i>Moodle</a>
	 <?php }?>
         
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
	      <?php $ACTIVE="class='active'"?>
	      <?php if(!isset($OJ_ON_SITE_CONTEST_ID)){?>
              <li <?php if ($url=="faqs.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>faqs.php" style="color: #ffffff; font-size: large">
			<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <?php echo $MSG_FAQ?></a></li>
	      <?php }else{?>
	      <?php }?>

	      <?php if (isset($OJ_PRINTER)&& $OJ_PRINTER){ ?>
              <li <?php if ($url=="printer.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>printer.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> <?php echo $MSG_PRINTER?></a></li>
	      <?php }?>
	      <?php if(!isset($OJ_ON_SITE_CONTEST_ID)){?>
	      <li <?php if ($url=="problemset.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>problemset.php" style="color: #ffffff; font-size: large"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <?php echo $MSG_PROBLEMS?></a></li>
              <li <?php if ($url=="status.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>status.php" style="color: #ffffff; font-size: large"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> <?php echo $MSG_STATUS?></a></li>
              <li <?php if ($url=="ranklist.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>ranklist.php" style="color: #ffffff; font-size: large"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $MSG_RANKLIST?></a></li>
              <li <?php if ($url=="contest.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>contest.php" style="color: #ffffff; font-size: large"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <?php echo $MSG_CONTEST?></a></li>
	      <?php }else{?>
              <li <?php if ($url=="contest.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>contest.php<?php echo "?cid=".intval($OJ_ON_SITE_CONTEST_ID); ?>" style="color: #ffffff; font-size: large"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <?php echo $MSG_CONTEST?></a></li>
	      <?php }?>
<?php if(isset($_GET['cid'])){ $cid=intval($_GET['cid']); } ?>

            </ul>

	    <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown" style="color:#ffffff">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="profile" style="color: #ffffff">Login</span><span class="caret" style="color: #ffffff"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <script src="<?php echo $path_fix."template/$OJ_TEMPLATE/profile.php?profile_csrf=".$_SESSION[$OJ_NAME.'_'.'profile_csrf'];?>" ></script>
                    <!--<li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
	            </ul>
	        </li>
        </ul>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>


