<?php

include("bases/list.php");
$offers = "";
foreach($bases as $base)
{
	$layoutimage = $base['name'];
	$picture = '';
	if (file_exists('pages/bases/'.$base['name'].'.png'))
		$picture = '<img src="'.$boardroot.'/plugins/layoutmaker/pages/bases/'.$layoutimage.'.png" />';
	$cellClass = ($cellClass + 1) % 2;
	$offers .= "
	<tr class=\"cell$cellClass\">
		<td>
			$picture
		</td>
		<td>
		".actionLinkTag($base['title'], "layoutmaker2", $base['name'])."
		</td>
		<td>
			".$base['description']."
		</td>
	</tr>";
}

write(
"<style>div.Eziosig
{
	background: rgba(0,0,0, 0.5);
	margin: 15px;
	padding: 15px;
	border: 1px solid #FFA500;
	border-radius: 8px;
	color: #ffffff;
	font-family: \"Lucida Sans Unicode\";
	
}</style>
<div class=\"Eziosig\"><big><big><b>ATTENTION PEOPLE WHO'S LAYOUTS ARE NOT WORKING!</big></big></b><br>
If your post layouts are not showing up on your post, its because you dont have the setting turned on for them.<br>
To turn said setting on, go edit your profile and click the \"post layout\" tab at the top. Scroll down and tick the box that says \"Apply layout to whole post box\"<br>
This will make the post layouts work correctly.</div><br>
<table class=\"outline margin width50\">
	<tr class=\"header1\">
		<th>Preview</th>
		<th>Name</th>
		<th>Description</th>
	</tr>
	{0}
</table>
<br>
<div class=\"Eziosig\"><big><b>Layout making tips</big></b><br>
If you want an image that doesnt scroll with the post contents, click the ... button where you can configure the background and turn on \"fixed attachment\" and it will work</div><br>
<p>
<div class=\"Eziosig\">Obvious problems I'm well aware of that you shouldn't bother bugging me about:
<ul>
	<li>Sliders don't have buddy ranges</li>
	<li>The CGA palette in the color picker doesn't trigger the auto-update.</li>
	<li>There are only stock templates, gonna make more</li>
</ul>
</div>
</p>
",	$offers);


