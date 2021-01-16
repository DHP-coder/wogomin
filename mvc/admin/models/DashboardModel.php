<?php
class DashBoardModel extends DB{
    public function countUser(){
        $qr = "SELECT * FROM user";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function countDoctor(){
        $qr = "SELECT * FROM doctor";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function countHistoryChat(){
        $qr = "SELECT * FROM chat";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function countMoney(){
        $qr = "SELECT * FROM user";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function getDataChart1(){
        $today = date("m"); // month
        $prevmonth = ($today == 1) ? 12 : $today - 1;
        $data = array();

        $qr = "SELECT count(distinct fullName) as 'lastMonth' FROM user where month(user.createdDate) = $prevmonth";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        array_push($data, $mang[0]['lastMonth']);

        $qr = "SELECT count(distinct fullName) as 'currentMonth' FROM user where month(user.createdDate) = $today";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        array_push($data, $mang[0]['currentMonth']);

        return json_encode($data);
    }

    public function getDataChart2(){
        $today = date("m"); // month
        $prevmonth = ($today == 1) ? 12 : $today - 1;
        $data = array();
        
        $qr = "SELECT sum(user.wallet) as 'lastMonth' FROM user where month(user.createdDate) = $prevmonth";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        array_push($data, $mang[0]['lastMonth']);

        $qr = "SELECT sum(user.wallet) as 'currentMonth' FROM user where month(user.createdDate) = $today";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        array_push($data, $mang[0]['currentMonth']);

        return json_encode($data);
    }
}
?>