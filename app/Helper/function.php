<?php

// Mở composer.json
// Thêm vào trong "autoload" chuỗi sau
// "files": [
//         "app/function/function.php"
// ]

// Chạy cmd : composer  dumpautoload

function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
}

function get_Admin_All_User()
{
	return count( App\User::all() );
}

function get_Admin_All_UserGroup()
{
	return count( App\UserGroup::all() );

}

function get_Admin_All_Role()
{
	return count( App\Role::all() );
}

function get_Admin_All_UserRole()
{
	return count( App\UserRole::all() );
}

function get_Admin_Helpdesk_All_Category()
{
	return count( App\HelpdeskCategory::all() );
}

?>