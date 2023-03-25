<?php

class Board {
	public $seq;
	public $title;
	public $userid;
	public $contents;
	public $regdate;
	
	public function __construct($seq, $title, $userid, $contents, $regdate)  
    {  
		$this->seq = $seq;
		$this->title = $title;
        $this->userid = $userid;
	    $this->contents= $contents;
	    $this->regdate = $regdate;
    } 
}

?>  