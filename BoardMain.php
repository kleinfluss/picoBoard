// Displays post list.
<HTML>
  <HEAD>
    <TITLE> #BoardNameHere# </TITLE>
  </HEAD>
  <BODY>
    <?php
      $SqlCon = mysql_connect("#MySQLServer#","#UserName#","#Password#")or die(
        echo "MySQL Server does not respond correctly."
      );
      mysql_select_db("#DatabaseHere#",$SqlCon)or die(
        echo "Failed to select proper Database from SQL Server."
      );
      

    ?>
  <BODY>
</HTML>
