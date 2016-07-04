<?php

class RedirectAdminPagesConfig extends ModuleConfig{

	public function getDefaults() {
	    return array(
	      'userRoles' => 'editor',
	      'redirectPage' => '/',
	    );
	}

	public function getInputfields() {

    	$inputfields = parent::getInputfields();

    	$f = $this->modules->get('InputfieldText');
    	$f->attr('name', 'userRoles');
    	$f->label = 'User roles';
		$f->description = 'Add roles to redirect after login. Add each role comma separated';

		$inputfields->add($f);


		$f = $this->modules->get('InputfieldText');
	    $f->attr('name', 'redirectPage');
	    $f->label = 'Page';
		$f->description = 'Page to redirect users to with the matching role. e.g. /custom-landing-page/';

	    $inputfields->add($f);

	    return $inputfields;
  	}
}
