<?php
namespace userApp;

class user
{
    public $asmensKodas;
    public $vardas;
    public $pavarde;
    public $pareigos;
    public $email;
    public $darbuUzmokestis;


    public function __construct($asmensKodas, $vardas, $pavarde, $pareigos, $email, $darbuUzmokestis){
        $this->asmensKodas = $asmensKodas;
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->pareigos = $pareigos;
        $this->email = $email;
        $this->darbuUzmokestis = $darbuUzmokestis;
    }

    public function showProfile(){
        $data[] = $this->asmensKodas;
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->pareigos;
        $data[] = $this->email;
        $data[] = $this->darbuUzmokestis;

        return $data;
    }
}
//
//$user = new User();
//$user->name = "Petras";
//$user->email = "email@email.com";
//$user->role = "admin";
//
// var_dump($user->showProfile());


?>



