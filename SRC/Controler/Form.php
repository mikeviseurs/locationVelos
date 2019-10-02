<?php
// namespace controler\Form;
require "head.php";
head("test Form");
class Form {
    private $action;

    private $method;

    public function __construct(string $method, string $action=null)
    {
        $this->action = isset($action)?$action:"#";
        $this->method = $method;
    }

    public function getDebutForm(){
        return "<form action=".$this->getAction()." method=".$this->getMethod().">";
    }

    public function getInput($type,$name,$id,$class=null) {
        return "<input class='".$class."' type =".$type." name = ".$name." id = ".$id.">";
    }
    public function getLabel(string $label, string $for,$class=null)
    {
        return "<label for=".$for." class=".$class.">".$label."</label>";
    }

    public function getTextArea($name,$id,$col,$row,$placeholder,$class)
    {
        return "<textarea class='".$class."' name=".$name." id=".$id." cols=".$col." rows=".$row." placeholder=".$placeholder."></textarea>";
    }
    
    public function getButton($type,$value,$class="btn-primary")
    {
        return "<button class='btn ".$class." btn-block' type=".$type.">".$value."</button>";
    }

    public function getFinForm()
    {
        return "</form><br>";
    }
    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }
}