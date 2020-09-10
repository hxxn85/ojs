<?php require_once("admin-header.php");
  if(isset($OJ_LANG)){
    require_once("../lang/$OJ_LANG.php");
  }
?>
<html>
<head>
  <title><?php echo $MSG_ADMIN?></title>
</head>

<body>
  <br>
<table class="table">
  <tbody>
    <tr>
      <td><a class='btn btn-block btn-sm' href="../status.php" target="_top"><b><?php echo $MSG_SEEOJ?></b></a></td>
      <td><p><?php echo $MSG_HELP_SEEOJ?></p></td>
    </tr>

  <?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])){?>
    <tr>
      <td><center><a class='btn btn-info btn-sm' href="setmsg.php" target="main"><b><?php echo $MSG_NEWS."-".$MSG_SETMESSAGE?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_SETMESSAGE?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-info btn-sm' href="news_list.php" target="main"><b><?php echo $MSG_NEWS."-".$MSG_LIST?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_NEWS_LIST?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-info btn-sm' href="news_add_page.php" target="main"><b><?php echo $MSG_NEWS."-".$MSG_ADD?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_ADD_NEWS?></p></td>
    </tr>
  <?php }?>

  <?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])||isset( $_SESSION[$OJ_NAME.'_'.'password_setter'] )){?>
    <tr>
      <td><center><a class='btn btn-primary btn-sm' href="user_list.php" target="main"><b><?php echo $MSG_USER."-".$MSG_LIST?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_USER_LIST?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-primary btn-sm' href="changepass.php" target="main"><b><?php echo $MSG_USER."-".$MSG_SETPASSWORD?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_SETPASSWORD?></p></td>
    </tr>
  <?php }?>

  <?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])){?>
    <tr>
      <td><center><a class='btn btn-primary btn-sm' href="privilege_list.php" target="main"><b><?php echo $MSG_USER."-".$MSG_PRIVILEGE."-".$MSG_LIST?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_PRIVILEGE_LIST?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-primary btn-sm' href="privilege_add.php" target="main"><b><?php echo $MSG_USER."-".$MSG_PRIVILEGE."-".$MSG_ADD?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_ADD_PRIVILEGE?></p></td>
    </tr>
  <?php }?>

  <?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])||isset($_SESSION[$OJ_NAME.'_'.'problem_editor'])){?>
    <tr>
      <td><center><a class='btn btn-success btn-sm' href="problem_list.php" target="main"><b><?php echo $MSG_PROBLEM."-".$MSG_LIST?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_PROBLEM_LIST?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-success btn-sm' href="problem_add_page.php" target="main"><b><?php echo $MSG_PROBLEM."-".$MSG_ADD?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_ADD_PROBLEM?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-success btn-sm' href="problem_import.php" target="main"><b><?php echo $MSG_PROBLEM."-".$MSG_IMPORT?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_IMPORT_PROBLEM?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-success btn-sm' href="problem_export.php" target="main"><b><?php echo $MSG_PROBLEM."-".$MSG_EXPORT?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_EXPORT_PROBLEM?></p></td>
    </tr>
  <?php }?>
  <?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])||isset($_SESSION[$OJ_NAME.'_'.'contest_creator'])){?>
    <tr>
      <td><center><a class='btn btn-warning btn-sm' href="contest_list.php" target="main"><b><?php echo $MSG_CONTEST."-".$MSG_LIST?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_CONTEST_LIST?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-warning btn-sm' href="contest_add.php" target="main"><b><?php echo $MSG_CONTEST."-".$MSG_ADD?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_ADD_CONTEST?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-warning btn-sm' href="user_set_ip.php" target="main"><b><?php echo $MSG_CONTEST."-".$MSG_SET_LOGIN_IP?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_SET_LOGIN_IP?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-warning btn-sm' href="team_generate.php" target="main"><b><?php echo $MSG_CONTEST."-".$MSG_TEAMGENERATOR?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_TEAMGENERATOR?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-warning btn-sm' href="team_generate2.php" target="main"><b><?php echo $MSG_CONTEST."-".$MSG_TEAMGENERATOR?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_TEAMGENERATOR?></p></td>
    </tr>
  <?php }?>

  <?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])){?>
    <tr>
      <td><center><a class='btn btn-danger btn-sm' href="rejudge.php" target="main"><b><?php echo $MSG_SYSTEM."-".$MSG_REJUDGE?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_REJUDGE?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-danger btn-sm' href="source_give.php" target="main"><b><?php echo $MSG_SYSTEM."-".$MSG_GIVESOURCE?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_GIVESOURCE?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-danger btn-sm' href="../online.php" target="main"><b><?php echo $MSG_SYSTEM."-".$MSG_HELP_ONLINE?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_ONLINE?></p></td>
    </tr>
    <tr>
      <td><center><a class='btn btn-danger btn-sm' href="update_db.php" target="main"><b><?php echo $MSG_SYSTEM."-".$MSG_UPDATE_DATABASE?></b></a></center></td>
      <td><p><?php echo $MSG_HELP_UPDATE_DATABASE?></p></td>
  <?php }?>
  </tbody>
</table>

<?php if (isset($_SESSION[$OJ_NAME.'_'.'administrator'])&&!$OJ_SAE){?>
  <a href="problem_copy.php" target="main" title="Create your own data"><font color="eeeeee">CopyProblem</font></a> <br>
  <a href="problem_changeid.php" target="main" title="Danger,Use it on your own risk"><font color="eeeeee">ReOrderProblem</font></a>
  
<?php }?>

</body>
</html>
