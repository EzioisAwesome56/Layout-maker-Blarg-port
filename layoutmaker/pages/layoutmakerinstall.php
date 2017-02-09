<?php

if($loguserid == 0)
	Kill("Only members can install their layouts");

if(isset($_POST['action']) && $_POST['action'] == "Install")
{
	//Changed this to not to use the uploader since it's now a plugin. ~Dirbaio
	//This isn't used anymore, instead the stylesheet is stored in the layout header ~EzioisAwesome56
	//if(!is_dir("layoutmaker"))
		//mkdir("layoutmaker/");

	//Honestly, I dont know why this code wasnt working with my devboard. Might have been rewritten URLs or folder perms.
	//So ive just commented out the useless crap so it wont even run.
	//$path = "layoutmaker/".$loguserid.".css";
	//file_put_contents($path, $_POST['css']);
	//$path = resourceLink($path);
	
	//You gonna change the line below for where it installs too. In this case just set it to dump everything in the post header
	$head = "<style>".$_POST['css']."</style>\n".$_POST['header'];
	$foot = $_POST['footer'];

	Query("UPDATE {users} SET postheader = {0}, signature = {1} WHERE id = {2}",
		$head, $foot, $loguserid);

	Report("[b]".$loguser['name']."[/] edited his layout with the layout maker. -> [g]#HERE#?uid=".$userid, 1);

	die(header("Location: ".actionLink("profile", $loguserid)));
}

?>
