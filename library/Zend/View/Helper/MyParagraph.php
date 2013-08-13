<?php

class Zend_View_Helper_MyParagraph extends Zend_View_Helper_FormElement {

    public function init() {
    }

    public function myParagraph($name, $value) {
        $html = "<strong class='submittedline'>" . $value . "</strong>";
        return $html;
    }

}

?>