<?PHP

/* //////////////////////////////*/
/*          VARIABLES            */
/* //////////////////////////////*/

// COMMONLY USED PATHS

// Campaign folder name
$path_project = "139-Q2EducationCampaign";
// Use if images are on server
$path_img = "http://tyn-dropzone.criticalmass.com/emailtest/".$path_project."/images/";
// Use if images are local
//$path_img = "images/";

// COMMONLY USED STYLES
$style_img = "display:block; text-align:left; vertical-align:top; line-height:18px !important; padding-top:0 !important; padding-right:0 !important; padding-bottom:0 !important; padding-left:0 !important; margin-top:0 !important; margin-right:0 !important; margin-bottom:0 !important; margin-left:0 !important;white-space:nowrap;";

$style_td_containing_img = "text-align:left; vertical-align:top; line-height:18px !important; padding-top:0 !important; padding-right:0 !important; padding-bottom:0 !important; padding-left:0 !important; margin-top:0 !important; margin-right:0 !important; margin-bottom:0 !important; margin-left:0 !important;";

$style_no_padding_no_margin = "padding-top:0 !important; padding-right:0 !important; padding-bottom:0 !important; padding-left:0 !important; margin-top:0 !important; margin-right:0 !important; margin-bottom:0 !important; margin-left:0 !important;";

$style_mobile_content_initial = "display:none; width:0; overflow:hidden; float:left; height:0;";

/* //////////////////////////////*/
/*          FUNCTIONS            */
/* //////////////////////////////*/

// Outlook Background Image
function get_background_image_code_for_outlook($path_img,$bg_img_height,$bg_img_width,$bg_img_repeat,$bg_img_file_name,$bg_img_width_unit) {
echo '<!--[if gte mso 9]>
<v:image xmlns:v="urn:schemas-microsoft-com:vml" id="theImage" style="behavior:url(#default#VML); background-repeat:'.$bg_img_repeat.'; display:inline-block; position:absolute; left:0; top:0; height:'.$bg_img_height.'px; width:'.$bg_img_width.''.$bg_img_width_unit.';  border:0; z-index:1;" src="'.$path_img.$bg_img_file_name.'"/>
<v:shape xmlns:v="urn:schemas-microsoft-com:vml" id="theText" style="behavior:url(#default#VML); background-repeat:'.$bg_img_repeat.'; display:inline-block; position:absolute; left:-10; top:-10; height:'.$bg_img_height.'px; width:'.$bg_img_width.''.$bg_img_width_unit.'; border:0; z-index:2; color:#ffffff;">
<![endif]-->
';
}

?>
