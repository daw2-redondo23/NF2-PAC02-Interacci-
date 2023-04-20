<?php
require("abstract.databoundobject.php");
class Login extends DataBoundObject {
    public $user_id;
    public $username;
	public $password;

    protected function DefineTableName() {
        return("login");
    }

    protected function DefineRelationMap() {
        return(array(
            "user_id" => "user_id",
            "username" => "username",
			"password" => "password"
            
        ));
    }

    protected function DefineAutoIncrementField() {
        return(null);
    }

}
?>