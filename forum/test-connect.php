
<?php
     #script -header.html
    header('Content-Type:text/html;charset=utf-8');

    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','hcf1443497615..');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','forum2');

    //make the connectionL:
    $dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)OR die('Could not connect to Mysql:'.mysqli_connect_error());

    //set the encoding...
    mysqli_set_charset($dbc,'utf-8');
   // echo 'connect database success';

    //start the session 
    session_start();
     $_SESSION['user_id']=1;
     $_SESSION['user_tz']='America/NeW_York';
     //For logging out
     //$_SESSION=array();

     //Need the database connnection:
     include('../mysqli_connect.php');
     //check for a new language id in the session:


     if(isset($_GET['lid'])&&filter_var($_GET['lid'],FILTER_VALIDATE_INT,array('min_range'=>1))
        ){
             $_SESSION['lid']=$_GET['lid'];  
          }elseif(!isset($_SESSION['lid'])){
             $_SESSION['lid']=1;//Default
         }//if end;'

    //get the words:
    $q="SELECT * FROM words WHERE lang_id={$_SESSION['lid']}";
    $r=mysqli_query($dbc,$q);
    if(mysqli_num_rows($r)==0){//Invalid language ID!
        //use the default language
        $_SESSION['lid']=1;//Default
        $q="SELECT * FROM words WHERE lang_id={$_SESSION['lid']}";
        $r=mysqli_query($dbc,$q);
    }

    //Fetch the results into a variable
    $words=mysqli_fetch_array($r,MYSQLI_ASSOC);
    //free the results 
    mysqli_free_result($r);
?>

<html >
    <head>
            <meta http-equiv="content=type" content="text/html; charset=utf-8">
            <title><?php echo $words['title']; ?></title>
            <style type="text/css" media="screen">
                body{background-color:#ffffff;}
                .content{
                    background-color:#f5f5f5;
                    padding:10px;
                    margin:10px;
                }
                a.navlink:link{color:#003366;text-decoration:none;};
                a.navlink:visited{color:#003366;text-decoration:none};
                a.navlink:hover{color:#cccccc;text-decoration:none};

                .title{
                    font-size:24px;font-weight:normal;color:#ffffff;
                    margin-top:5px;margin-left:20px;margin-bottom:5px;
                    padding-top:5px;padding-bottom:5px;padding-left:20px;
                }
            </style>
    </head>
    <body>
        <table width="90%" border="0" cellspacing="0" align="center">
        <tr>
            <td colspan="2" bgcolor="#003366" align="center"><p class="title"><?php echo $words['title']; ?></p></td>
        </tr>
        <tr>
            <td valign="top" nowrap="nowrap" width="10%"><b>
           
                    <?php 
                        echo '<a href="index.php" class="navlink">' . $words['home'].'</a><br /><a href="forum.php" class="navlink">' . $words['forum_home'].'</a><br />';

                    //Display links based upon login status:
                    if(isset($_SESSION['user_id']))
                    {
                        //if this is the forum page,add a link for posting new thread:
                        if(basename($_SERVER['PHP_SELF'])=='forum.php')
                        {
                            echo '<a href="psot.php" class="navlink">'.$words['new_thread'].'</a><br />';
                        }
                        //add the logout link:
                        echo '<a href="logout.php" class="navlink">'.$words['logout'].'</a><br />';                        
                    }else{
                        //register and login links
                        echo '<a href="register.php" class="navlink">'.$words['register'].'</a><br /><a href="login.php" class="navlink">'.$words['login'].'</a><br />';                                  
                     }
                    
                                                                                                                         
                    //for choosing a forum/languages
                    echo '</b><p><form action="forum.php" method="get"><select name="lid"><option value="0">'.$words['language'].'</option>';
                    
                    //retrieve all the languages...
                    $q="SELECT lang_id,lang From languages ORDER BY lang_eng ASC";
                    $r=mysqli_query($dbc,$q);
                    if(mysqli_num_rows($r)>0)
                    {
                        while($menu_row=mysqli_fetch_array($r,MYSQLI_NUM))
                        {
                            echo "<option value=\"$menu_roe[0]\">$menu_row[1]</option>\n";
                        }
                    }
                    mysqli_free_result($r);
                    echo '</select><br /><input name="submit" type="submit" value="'.$words['submit'].'" /></form</p></td><td valign="top" class="content">';
                    
            ?>
           </td>
</tr>
 <tr>
     <td colspan="2" align="center">&copy;2016 HUayra</td>
</tr>
</table>
</body>
</html>
