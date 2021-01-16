<?php
class HistoryChatModel extends DB{
    public function historyChat(){
        $qr = "SELECT * FROM chat, chatroom, user, doctor WHERE doctor.id = chat.toUser and chat.chatRoom_id = chatroom.id AND chat.fromUser = user.id";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function searchDataHistory($s){
        $qr = "SELECT * FROM chat, chatroom, user, doctor WHERE doctor.id = chat.toUser and chat.chatRoom_id = chatroom.id AND chat.fromUser = user.id AND roomName LIKE '%$s%'";
        $rows = mysqli_query($this->con, $qr);
        
        if(mysqli_num_rows($rows)>0){
            $output = '<table class="table table-data2">
            <thead style="background-color: darkgray">
                <tr>
                    
                    <th>Room name</th>
                    <th>User</th>
                    <th>Doctor</th>
                    <th>Content</th>
                    <th>Date</th>
                    
                </tr>
            </thead>
            <tbody>';
            while($row = mysqli_fetch_array($rows)){
                $output .= '<tr class="tr-shadow">
                        
                <td>'.$row["roomName"].'</td>
                <td>
                '.$row["fullName"].'
                </td>
                <td>'.$row["name"].'</td>
                <td>'.$row["content"].'</td>
                <td>'.$row["dateCreated"].'</td>
                
                
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

    public function filterDataHistory($v){
        $qr = "SELECT * FROM chat, chatroom, user WHERE chat.chatRoom_id = chatroom.id AND chat.fromUser = user.id AND roomName LIKE '%$v%'";
        $rows = mysqli_query($this->con, $qr);
        
        if(mysqli_num_rows($rows)>0){
            $output = '<table class="table table-data2">
            <thead style="background-color: darkgray">
                <tr>
                    
                    <th>Room name</th>
                    <th>User send</th>
                    <th>User receive</th>
                    <th>Content</th>
                    <th>Date</th>
                    
                </tr>
            </thead>
            <tbody>';
            while($row = mysqli_fetch_array($rows)){
                $output .= '<tr class="tr-shadow">
                        
                <td>'.$row["roomName"].'</td>
                <td>
                '.$row["fullName"].'
                </td>
                <td>'.$row["toUser"].'</td>
                <td>'.$row["content"].'</td>
                <td>'.$row["dateCreated"].'</td>
                
                
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