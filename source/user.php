<?php
namespace userApp;

class user
{
    public $name;
    public $email;
    public $role;

    public function showProfile(){
        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->role;

        return $data;
    }
}

//$user = new User();
//$user->name = "Petras";
//$user->email = "email@email.com";
//$user->role = "admin";

// var_dump($user->showProfile());


?>

<!---->
<!---->
<!--<ul>-->
<!--        --><?php
//        foreach($user->showProfile() as $data):
//            ?>
<!--          <li> --><?//= $data;?><!--</li>-->
<!--        --><?php
//        endforeach;
//        ?>
<!--</ul>-->
