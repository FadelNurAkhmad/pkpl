<?php

require 'Database\Query.php';

class ShowController extends Query{

    public $show;

    public function Show(){
       
        $this->show = $this->TampilData()->FetchArray();

        return $this;
    }
}