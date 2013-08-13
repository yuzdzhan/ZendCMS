<?php

class Zend_Form_Element_MyParagraph extends Zend_Form_Element
{
    public $helper = 'myParagraph';
    public function init()
    {
        $view = $this->getView();
    }
}

?>