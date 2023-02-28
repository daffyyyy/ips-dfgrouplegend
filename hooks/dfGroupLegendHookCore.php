//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook62 extends _HOOK_CLASS_
{

	public function groupLegendList(string $groupsName = 'admin')
	{
		$groups = array();
		$allGroups = \IPS\Member\Group::groups();
		switch ($groupsName)
		{
			case 'admin':
				$choosenGroups = explode(',', \IPS\Settings::i()->dfGroupLegend_admin);
				break;
			case 'special':
				$choosenGroups = explode(',', \IPS\Settings::i()->dfGroupLegend_special);
				break;
			case 'normal':
				$choosenGroups = explode(',', \IPS\Settings::i()->dfGroupLegend_normal);
				break;
		}
		
		if (count($choosenGroups))
		{
			foreach ($choosenGroups as $group)
			{
				if (array_key_exists($group, $allGroups))
				{
					$groups[] = $allGroups[$group];
				}
			}
		}
		
		return $groups;
	}

}
