<?php defined('C5_EXECUTE') or die(_('Access Denied'));

class StaffMemberBlockController extends BlockController{
	protected $btInterfaceWidth = 600;
	protected $btInterfaceHeight = 400;
	protected $btTable = 'btStaffMember';

	public function getBlockTypeName(){
		return t('Staff Member');
	}

	public function getBlockTypeDescription(){
		return t("Displays a staff member's photo and bio");
	}
}