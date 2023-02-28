//<?php

	$groups = array();

	foreach (\IPS\Member\Group::groups() as $a => $b) {
		if ($a != \IPS\Settings::i()->guest_group) {
			$groups[$a] = $b->name;
		}
	}

	$form->add(new \IPS\Helpers\Form\Stack('dfGroupLegend_admin', (isset(\IPS\Settings::i()->dfGroupLegend_admin)) ? explode(",", \IPS\Settings::i()->dfGroupLegend_admin) : NULL, TRUE, array('stackFieldType' => 'Select', 'options' => $groups, 'parse' => 'normal')));
	$form->add(new \IPS\Helpers\Form\Stack('dfGroupLegend_special', (isset(\IPS\Settings::i()->dfGroupLegend_special)) ? explode(",", \IPS\Settings::i()->dfGroupLegend_special) : NULL, TRUE, array('stackFieldType' => 'Select', 'options' => $groups, 'parse' => 'normal')));
	$form->add(new \IPS\Helpers\Form\Stack('dfGroupLegend_normal', (isset(\IPS\Settings::i()->dfGroupLegend_normal)) ? explode(",", \IPS\Settings::i()->dfGroupLegend_special) : NULL, TRUE, array('stackFieldType' => 'Select', 'options' => $groups, 'parse' => 'normal')));

	if ($values = $form->values()) {
		$form->saveAsSettings();
		return TRUE;
	}

	return $form;
