<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<div class="row-fluid">
	<div class="span12">
		<legend><?php echo $name; ?></legend>
	</div>
</div>
<div class="row-fluid">
	<div class="span2">
		<?php if($photoID != null): ?>
			<img src="<?php echo File::getRelativePathFromID($photoID); ?>" />
		<?php endif; ?>
	</div>
	<div class="span10">
		<?php echo $bio; ?>
	</div>
</div>