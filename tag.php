<?

class tag {

	private $kindTag;
	private $textTag;
	private $arguments;

	public function __construct($kindTag){
		$this->kindTag = $kindTag;
		$this->textTag = '';
	}

	public function setKind($kindTag){
		$this->kindTag = $kindTag;
		return $this;
	}

	public function getKind(){
		return $this->kindTag;
	}

	public function setText($textTag){
		$this->textTag = $textTag;
		return $this;
	}

	public function setArguments($arguments){
		$this->arguments = $arguments;
		return $this;
	}

	public function addArgument($key,$argument){
	    if(is_array($this->arguments)){
	        $this->arguments[$key] = $argument;
        } else {
	        $this->arguments = array();
            $this->arguments[$key] = $argument;
        }
        return $this;
    }

	public function show(){
	    $strArg = "";
	    if (is_array($this->arguments)){
            foreach ($this->arguments as $key => $argument){
                $strArg = $strArg." ".$key." = '".$argument."'";
            }
        }
        return $strTag = "<".$this->kindTag.$strArg.">".$this->textTag."</".$this->kindTag.">";
	}
}

?>