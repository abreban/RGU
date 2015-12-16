<?php

class Mirel{
	private $name;
	private $mirel;

	public function __construct($name, $mirel)
	{
		$this->name = $name
		$this->mirel = $mirel;
	}
    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName(){
        return $this->name
    }
    if($d =====)
    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    private function _setName($name){
        $this->name = $name;
        return $this;
    }
    /**
     * Gets the value of mirel.
     *
     * @return mixed
     */
    public function getMirel()
    {
        return $this->mirel();
    }

    /**
     * Sets the value of mirel.
     *
     * @param mixed $mirel the mirel
     *
     * @return self
     */
    private function _setMirel($mirel)
    {
        $this->mirel = $mirel;

        return $this;
    }
}