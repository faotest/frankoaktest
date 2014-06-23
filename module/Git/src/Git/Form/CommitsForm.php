<?php

namespace Git\Form;

use Zend\Form\Form;

class RepoForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('repo');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Name',
            ),
        ));

        $this->add(array(
            'name' => 'description',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Description',
            ),
        ));

        $this->add(array(
            'name' => 'homepage',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Homepage',
            ),
        ));

        $this->add(array(
            'name' => 'private',
            'type' => 'Zend\Form\Element\Checkbox',
            'attributes' => array(
                'type'  => 'checkbox',
            ),
            'options' => array(
                'label' => 'Private',
            ),
        ));

        $this->add(array(
            'name' => 'has_issues',
            'type' => 'Zend\Form\Element\Checkbox',
            'attributes' => array(
                'type'  => 'checkbox',
            ),
            'options' => array(
                'label' => 'Has issues',
            ),
        ));

        $this->add(array(
            'name' => 'has_wiki',
            'type' => 'Zend\Form\Element\Checkbox',
            'attributes' => array(
                'type'  => 'checkbox',
            ),
            'options' => array(
                'label' => 'Has wiki',
            ),
        ));

        $this->add(array(
            'name' => 'has_downloads',
            'type' => 'Zend\Form\Element\Checkbox',
            'attributes' => array(
                'type'  => 'checkbox',
            ),
            'options' => array(
                'label' => 'Has wiki',
            ),
        ));

        $this->add(array(
            'name' => 'auto_init',
            'type' => 'Zend\Form\Element\Checkbox',
            'attributes' => array(
                'type'  => 'checkbox',
            ),
            'options' => array(
                'label' => 'Add README file',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Add',
                'id' => 'submitbutton',
            ),
        ));
    }
}