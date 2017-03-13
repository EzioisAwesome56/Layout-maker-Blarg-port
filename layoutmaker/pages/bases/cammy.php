<?php

$cssTemplate = ".mainbar[ID] {
background: [BACKGROUND] repeat top center !important;
color:[COLOR];
font-family: \"[FONT]\";
border: [BORDER];
}
.sidebar[ID] {
background-color:[SIDEBACK] !important;
color:[SIDEFONTCOLOR];
font-family:\"[FONT]\";
border: [BORDER];
}
.mainbar[ID] div.quoteheader {
background-color: [QUOTEFONTCOLOR] !important;
border: [BORDER];
}
.mainbar[ID] div.quotecontent {
background-color:[QUOTECOLOR] !important;
}
.mainbar[ID] div.codeblock {
background-color: [CODECOLOR] !important;
}
.mainbar[ID] div.textbox[ID] {
background-color:[TXTCOLOR] !important;
border: [BORDER];
max-width: 650px !important;
}
.topbar[ID]_1,.topbar[ID]_2 {
background-color: [TOPCOLOR] !important;
}";

$markupTemplateA = "<div class=\"textbox[ID]\">";
$markupTemplateB = "</div><div class=\"textbox[ID]\">Sig goes here</div>";

$parameters = array
(
	"ID" => array("label"=>"User ID", "type"=>"int"),
	"BACKGROUND" => array("label"=>"Background", "type"=>"background", "default"=>"#000000"),
	"TXTCOLOR" => array("label"=>"Text Box Color", "type"=>"color", "default"=>"#ffffcc"),
	"SIDEBACK" => array("label"=>"Sidebar Background", "type"=>"background", "default"=>"#000000"),
	"MARGIN" => array("label"=>"Margin", "type"=>"int", "default"=>"15", "pxem"=>"1"),
	"PADDING" => array("label"=>"Padding", "type"=>"int", "default"=>"15", "pxem"=>"1"),
	"OPACITY" => array("label"=>"Opacity", "type"=>"percentage", "default"=>"50"),
	"BORDER" => array("label"=>"Border", "type"=>"border", "default"=>"1px solid #6699ff"),
	"RADIUS" => array("label"=>"Corner radius", "type"=>"range", "min"=>"0", "max"=>"16", "default"=>"8", "pxem"=>"1"),
	"COLOR" => array("label"=>"Font Color", "type"=>"color", "default"=>"#FFFFFF"),
	"TOPCOLOR" => array("label"=>"Topbar Color", "type"=>"color", "default"=>"#6699ff"),
	"SIDEFONTCOLOR" => array("label"=>"Sidebar Font Color", "type"=>"color", "default"=>"#FFFFFF"),
	"QUOTECOLOR" => array("label"=>"Quote Color", "type"=>"color", "default"=>"#009900"),
	"QUOTEFONTCOLOR" => array("label"=>"Quote Header Color", "type"=>"color", "default"=>"#FFFFFF"),
	"CODECOLOR" => array("label"=>"Code Color", "type"=>"color", "default"=>"#32CF47"),
	"FONT" => array("label"=>"Font", "type"=>"font", "default"=>"Lucida Sans Unicode"),

	"TEXTFX" => array("label"=>"Text effect", "type"=>"textfx"),

	"MARGINTYPE" => array("hidden"=>"1"),
	"PADDINGTYPE" => array("hidden"=>"1"),
	"RADIUSTYPE" => array("hidden"=>"1"),
);

?>
