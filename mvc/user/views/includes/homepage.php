<div class="wrapper">
            <div class="row header">
                <div class="col-12 header-homepage">
                    <div class="homepage-left">
                        <img id="avt-homepage1" src="/wogomin/public/images/user/huan/avt.jpg">
                        <div class="p-homepage">
                            <p id="p-homepage1"><b>Hello <?php echo $_SESSION['userName'] ?></b></p>
                            <p id="p-homepage2">How're you today!</p>
                        </div>
                    </div>
                    <div class="homepage-right">
                        <img id="avt-homepage2" src="/wogomin/public/images/user/huan/health_1.png">
                    </div>
                </div>
                <div class="row item-1">
                <?php
                    $mang = json_decode($data["homepage"]);
                foreach($mang as $m){
                ?>
                <div class="col-md-3 col-sm-4" id="col-homepage-2" style="margin: 10px 0px;">
                    <a id="a-friendship" href="./chatting">
                        <div class="row friendship">
                            <div class="col-4 col-sm-4">
                                <img id="avt-friendship" src="/wogomin/public/images/user/huan/<?php echo $m->images ?>">
                            </div>
                            <div class="col-8 col-sm-8">
                                <p id="p-fr"><?php echo $m->roomName ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
                </div>
            <div class="row item-3 justify-content-center">
                <div class="col-sm-3" id="col-homepage-3">
                    <a id="a-ykien" href="#">
                        <div class="ykien">
                            <img id="img-ykien" src="/wogomin/public/images/user/huan/ykien.png">
                        </div>
                    </a>
                    <p id="p-ykien">Trải nghiệm khách hàng</p>
                </div>
                <div class="col-sm-3" id="col-homepage-3">
                    <a id="a-cauhoi" href="#">
                        <div class="cauhoi">
                            <img id="img-cauhoi" src="/wogomin/public/images/user/huan/answer.png">
                        </div>
                    </a>
                    <p id="p-cauhoi">Câu hỏi thường gặp</p>
                </div>
            </div>
            </div>
        </div>