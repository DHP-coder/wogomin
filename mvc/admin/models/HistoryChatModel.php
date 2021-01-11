<?php
class HistoryChatModel extends DB{
    public function historyChat(){
        $qr = "SELECT * FROM chat, chatroom WHERE chat.chatRoom_id = chatroom.id";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }
}
?>