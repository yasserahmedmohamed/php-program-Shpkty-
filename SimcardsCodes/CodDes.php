<?php

class CodDes
{
public $id;
public $Sim_kind;
public $description;
public $code;
function __construct($id,$Sim_kind,$description,$code)
{
    $this->id=$id;
    $this->Sim_kind=$Sim_kind;
    $this->description=$description;
    $this->code=$code."#";

}

}

?>