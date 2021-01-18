<?php
class HomepageModel extends DB{
    public function getDataHome(){
        $qr = "SELECT * FROM chatroom";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }
}
?>