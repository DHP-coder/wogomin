<?php
class RoomChatModel extends DB{
    public function roomChat(){
        $qr = "SELECT * FROM chatroom";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function addRoomChat($roomName, $dateCreate){
        $qr = "INSERT INTO chatroom VALUE(null, '$roomName', '$dateCreate')";

        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return json_encode( $result );
    }

    public function getDetailRoomChat($id){
        $qr = "SELECT * FROM chatroom WHERE id = $id";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function updateRoomChat($id, $roomname, $datecreate){
        $qr = "UPDATE chatroom SET roomName = '$roomname', dateCreated = '$datecreate' WHERE id = $id";
        mysqli_query($this->con, $qr);
    }

    public function checkRoom($r){
        $r= trim($r);
        if($r == ''){
            $kq = 0;
        }
        else{
        $qr = "SELECT id FROM chatroom WHERE roomName = '$r'";
        $rows = mysqli_query($this->con, $qr);
        $kq = true;
        if(mysqli_num_rows($rows)>0){
            $kq = false;
        }}
        return json_encode($kq);
    }

    public function deleteRoomChat($id){
        $qr = "DELETE FROM chatroom WHERE id = $id";
        mysqli_query($this->con, $qr);
    }

    public function deleteAllRoomChat(){
        $qr = "DELETE FROM chatroom";
        mysqli_query($this->con, $qr);
    }

    public function searchData($s){
        $s=trim($s);
        $qr = "SELECT * FROM chatroom WHERE roomName LIKE '%$s%'";
        $rows = mysqli_query($this->con, $qr);
        
        if(mysqli_num_rows($rows)>0){
            $output = '<table class="table table-data2">
            <thead style="background-color: darkgray">
                <tr>
                    <th>Room chat</th>
                    <th>Date create</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            while($row = mysqli_fetch_array($rows)){
                $output .= '<tr class="tr-shadow">
                <td>'.$row["roomName"].'</td>
                <td>
                    <span class="block-email">'.$row["dateCreated"].'</span>
                </td>
                
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <a href="./editchatroom/'.$row["id"].'"><i class="zmdi zmdi-edit"></i></a>
                            
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <a href="./deletechatroom/'.$row["id"].'"><i class="zmdi zmdi-delete"></i></a>
                        </button>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>';
            }
            '</tbody></table>';
            
            echo $output;
        }
        else {
            echo "Data not found";
        }
    }
}
?>