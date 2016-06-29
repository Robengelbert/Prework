<!DOCTYPE html>
	<html>
<?php
$object = new User;
print_r($object);

class User
{
	public $name, $password;

	function save_user()
	{
		echo "Save user code goes here";
	}
}
?>
</html>
