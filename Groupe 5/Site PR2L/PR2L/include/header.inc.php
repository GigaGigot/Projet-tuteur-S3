<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<?php
$title = "Bienvenue sur le site du Pôle international de Ressources de Limoges et du Limousin"; ?>
		<title>
		<?php echo $title?>
		</title>

<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	selector: "textarea",
	plugins: [
	"advlist autolink lists link image charmap print preview anchor",
	"searchreplace visualblocks code fullscreen",
	"insertdatetime media table contextmenu paste moxiemanager"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

</head>
<body>
	<div id="header">
		<div id="entete">
			
		</div>
		
	</div>