<?php 
	$form = Loader::helper('form'); 
?>

<p><strong>Select photo</strong></p>
<?php
	$al = Loader::helper('concrete/asset_library');
	if($photoID != null){
		$photo = File::getByID($photoID);
	}
	else{
		$photo = null;
	}
	echo $al->image('photo-id', 'photoID', t('Select staff member photo'), $photo);
?>
<br/>

<p><strong>Name</strong></p>
<?php
	echo $form->text('name', $name);
?>
<br/><br/>

<p><strong>Biography</strong></p>
<?php
	Loader::element('editor_init');
	Loader::element('editor_config', array('editor_mode' => 'SIMPLE'));
	echo $form->textarea('bio', $bio, array('class'=>'advancedEditor ccm-advanced-editor'));
?>