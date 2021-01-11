<?php
class Admin extends Controller{

    public $lg;
    public $rc, $edit_rc, $update_rc, $add_rc, $delete_rc, $deleteall_rc, $searchData;
    public $us, $tw;
    public $hc;

    public function __construct()
    {
        //call model
        $this->lg = $this->modelAdmin("LoginModel");
        $this->rc = $this->modelAdmin("RoomChatModel");
        $this->edit_rc = $this->modelAdmin("RoomChatModel");
        $this->update_rc = $this->modelAdmin("RoomChatModel");
        $this->add_rc = $this->modelAdmin("RoomChatModel");
        $this->delete_rc = $this->modelAdmin("RoomChatModel");
        $this->deleteall_rc = $this->modelAdmin("RoomChatModel");
        $this->searchData = $this->modelAdmin("RoomChatModel");
        $this->us = $this->modelAdmin("UsersModel");
        $this->tw = $this->modelAdmin("UsersModel");
        $this->hc = $this->modelAdmin("HistoryChatModel");
    }
// -------------------------------------------------------------------//
    function index(){
        $this->viewAdmin("layout_admin", [
            "page"=>"dashboard"
        ]);
    }
// -------------------------------------------------------------------//
    function chatRoom(){
        $this->viewAdmin("layout_admin", [
            "page"=>"chatroom",
            "rc" => $this->rc->roomChat()
        ]);
    }
// -------------------------------------------------------------------//
    function showaddChatRoom(){
        $this->viewAdmin("layout_admin", [
            "page"=>"addchatroom"
        ]);
    }

    function addChatRoom(){
        if (isset($_POST["btn-addRoom"])){
            $roomname = $_POST["roomname"];
            $datecreate = $_POST["datecreate"];
            
        }

        $this->add_rc->addRoomChat($roomname, $datecreate);
        header("Location: /wogomin/admin/chatroom");
        
    }
// -------------------------------------------------------------------//
    function editChatRoom($id){
        
        $this->viewAdmin("layout_admin", [
            "page"=>"editchatroom",
            "edit_rc" => $this->edit_rc->getDetailRoomChat($id)
        ]);
        
    }

    function updateChatRoom($id){
        if (isset($_POST["btn-updatechatroom"])){
            
            $roomname = $_POST["roomname"];
            $datecreate = $_POST["datecreate"];  
        }

        $this->update_rc->updateRoomChat($id, $roomname, $datecreate);
        header("Location: /wogomin/admin/chatroom");
    }
// -------------------------------------------------------------------//
    function deleteChatRoom($id){
        $this->delete_rc->deleteRoomChat($id);
        header("Location: /wogomin/admin/chatroom");
    }

    function deleteAllChatRoom(){
        $this->deleteall_rc->deleteAllRoomChat();
        header("Location: /wogomin/admin/chatroom");
    }
// -------------------------------------------------------------------//
public function search(){
    $s = $_POST["s"];

    echo $this->searchData->searchData($s);
}
// -------------------------------------------------------------------//
    function users(){

        $kq = $this->tw->topWallet();
        $this->viewAdmin("layout_admin", [
            "page"=>"users",
            "us" => $this->us->user(),
            "result" => $kq
        ]);
    }
// -------------------------------------------------------------------//
    function contentChat(){
        $this->viewAdmin("layout_admin", [
            "page"=>"contentchat",
            "hc" => $this->hc->historyChat()
        ]);
    }
// -------------------------------------------------------------------//
    function login(){

        $this->viewAdmin("layout_login", [
            "lg" => $this->lg->account()
        ]);
    }
// -------------------------------------------------------------------//
}
?>