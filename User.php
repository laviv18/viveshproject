<?php
class User
{
	public $name;
	public $color;
    public $geboortedatum;
	protected $Password;

	public function __construct($name, $color)
	{
		$this->$name = $name;
		$this->$color = $color;
	}

	public function getName()
	{
		return $this->name;
	}

	function setPassword($Password){
		this->Password= $Password;
	}

	function GetPassword(){
		return $this->password;
	}

	function ValidateUser()
	{
		$errors=[];

		if(empty($this->username)){
			array_push($errors, "invalid");
		}else if (empty($this->password)){
			array_push($errors, "invalid password");
		}

			return $errors;
	}

	

}













