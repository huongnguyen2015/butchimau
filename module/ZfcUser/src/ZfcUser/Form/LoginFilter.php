<?php

namespace ZfcUser\Form;

use ZfcBase\InputFilter\ProvidesEventsInputFilter;
use ZfcUser\Options\AuthenticationOptionsInterface;

class LoginFilter extends ProvidesEventsInputFilter
{
    public function __construct(AuthenticationOptionsInterface $options)
    {
        $identityParams = array(
            'name'       => 'identity',
            'required'   => true,
            'validators' => array()
        );

        $identityFields = $options->getAuthIdentityFields();
		//var_dump($identityFields);exit;
        
		if ($identityFields == array('parent_email')) {
            $validators = array('name' => 'EmailAddress');
            array_push($identityParams['validators'], $validators);
        }
        $this->add($identityParams);

        $this->add(array(
            'name'       => 'credential',
            'required'   => true,
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'min' => 6,
                    ),
                ),
            ),
            'filters'   => array(
                array('name' => 'StringTrim'),
            ),
        ));

        $this->getEventManager()->trigger('init', $this);
    }
	function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
}
