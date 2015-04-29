<?php
namespace Project\Controllers;

use Ionian\Core\Controller;
use Ionian\Database\Database;

class MemberController extends Controller{

    public function showAllMembersAction (){
        //TODO Susanne
    }
    public function getMemberByIdAction(){
        //TODO Lollo
    }
    public function getMemberByEmailAction($email){
        $stm = Database::get()->prepare("SELECT user_id,email FROM users WHERE email = :email");
        $stm->bindparam(":email",$email);
        $stm->execute();
        $this->outputJSON($stm->fetch());
    }
    public function showMemberCartAction(){
        //TODO Jennie
    }
}

