<?php
class Admin extends Controller{

    public $lg;
    public $cu, $cd, $cm,  $chart1;
    public $rc, $edit_rc, $update_rc, $add_rc, $delete_rc, $deleteall_rc, $searchData, $checkroom;
    public $us, $tw;
    public $hc, $searchDataHistory, $filterDataHistory;

    public function __construct()
    {
        //call model
        $this->lg = $this->modelAdmin("LoginModel");
        $this->cu = $this->modelAdmin("DashboardModel");
        $this->chart1 = $this->modelAdmin("DashboardModel");
        $this->cd = $this->modelAdmin("DashboardModel");
        $this->cm = $this->modelAdmin("DashboardModel");
        $this->rc = $this->modelAdmin("RoomChatModel");
        $this->edit_rc = $this->modelAdmin("RoomChatModel");
        $this->update_rc = $this->modelAdmin("RoomChatModel");
        $this->add_rc = $this->modelAdmin("RoomChatModel");
        $this->delete_rc = $this->modelAdmin("RoomChatModel");
        $this->deleteall_rc = $this->modelAdmin("RoomChatModel");
        $this->searchData = $this->modelAdmin("RoomChatModel");
        $this->checkroom = $this->modelAdmin("RoomChatModel");
        $this->us = $this->modelAdmin("UsersModel");
        $this->tw = $this->modelAdmin("UsersModel");
        $this->hc = $this->modelAdmin("HistoryChatModel");
        $this->searchDataHistory = $this->modelAdmin("HistoryChatModel");
        $this->filterDataHistory = $this->modelAdmin("HistoryChatModel");
    }
// -------------------------------------------------------------------//
    function index(){
        $cm = $this->cm->countMoney();
        $ch = $this->hc->historyChat();
        $cd = $this->cd->countDoctor();
        $this->viewAdmin("layout_admin", [
            "page"=>"dashboard",
            "cu" => $this->cu->countUser(),
            "cd" => $cd,
            "ch" => $ch,
            "cm" => $cm
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
        if (isset($_POST["btn-addRoom"]) and isset($_POST["roomname"])){
            $roomname = trim($_POST["roomname"]);
            $datecreate = date("Y-m-d");
            $this->add_rc->addRoomChat($roomname, $datecreate);
            header("Location: /wogomin/admin/chatroom");
        }

        else{
            header("Location: /wogomin/admin/showaddChatRoom");
        }
        
    }
// -------------------------------------------------------------------//
    function editChatRoom($id){
        
        $this->viewAdmin("layout_admin", [
            "page"=>"editchatroom",
            "edit_rc" => $this->edit_rc->getDetailRoomChat($id)
        ]);
        
    }

    function updateChatRoom($id){
        if (isset($_POST["btn-updatechatroom"]) and isset($_POST["roomname"])){
            
            $roomname = trim($_POST["roomname"]);
            $datecreate = date("Y-m-d");
            $this->update_rc->updateRoomChat($id, $roomname, $datecreate);
            header("Location: /wogomin/admin/chatroom");
        }

        else{
            $this->viewAdmin("layout_admin", [
                "page"=>"editchatroom",
                "edit_rc" => $this->edit_rc->getDetailRoomChat($id)
            ]);
        }

        
    }

    public function checkRoom(){
        $r = $_POST["r"];

        echo $this->checkroom->checkRoom($r);
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

        $listsv = $this->rc->roomChat();
        $this->viewAdmin("layout_admin", [
            "page"=>"contentchat",
            "hc" => $this->hc->historyChat(),
            "listsv" => $listsv
        ]);
    }

    public function search_history(){
        $s = $_POST["s"];
    
        echo $this->searchDataHistory->searchDataHistory($s);
    }

    public function filter_history(){
        $v = $_POST["v"];
    
        echo $this->filterDataHistory->filterDataHistory($v);
    }
// -------------------------------------------------------------------//
    function login(){

        $this->viewAdmin("layout_login", [
            "lg" => $this->lg->account()
        ]);
    }
// -------------------------------------------------------------------//
    public function chart1(){
        echo $this->chart1->getDataChart1();
    }

    public function chart2(){
        echo $this->chart1->getDataChart2();
    }
}
?>