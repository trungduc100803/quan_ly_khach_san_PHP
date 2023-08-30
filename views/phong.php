<?php
// include('../../quan_ly_khach_san/controllers/handleRoom.php');
// $query_phongdon = "SELECT * FROM rooms WHERE typeRoom = 'Phòng đơn'";
// $query_phongdoi = "SELECT * FROM rooms WHERE typeRoom = 'Phòng đôi'";
// $query_giadinh = "SELECT * FROM rooms WHERE typeRoom = 'Phòng gia đình'";

// $data_phongdon = mysqli_query($conn, $query_phongdon);
// $data_phongdoi = mysqli_query($conn, $query_phongdoi);

?>

<form method="post" action="../../quan_ly_khach_san/controllers/handleRoom.php" class="room">
    <!-- <input type="submit" value="juj"> -->
    <div class="room_left">
        <div class="room_side">
            <h4>Trạng thái phòng</h4>
            <div class="room_left_choose">
                <div class="room_left_choose_item">
                    <input type="radio" name="trangthaiphong" id="" value="empty">
                    <span>Phòng trống</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="trangthaiphong" id="" value="ordered">
                    <span>Phòng đã đặt</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="trangthaiphong" id="" value="renting">
                    <span>Phòng đang thuê</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="trangthaiphong" id="" checked value="all">
                    <span>Tất cả phòng</span>
                </div>

            </div>
        </div>

        <div class="room_side">
            <h4>Loại phòng</h4>
            <div class="room_left_choose">
                <div class="room_left_choose_item">
                    <input type="radio" name="loaiphong" id="" value="each">
                    <span>Phòng đơn</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="loaiphong" id="" value="group">
                    <span>Phòng đôi</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="loaiphong" id="" value="family">
                    <span>Phòng gia đình</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="loaiphong" id="" checked value="all">
                    <span>Tất cả phòng</span>
                </div>

            </div>
        </div>

        <div class="room_side">
            <h4>Dọn dẹp</h4>
            <div class="room_left_choose">
                <div class="room_left_choose_item">
                    <input type="radio" name="dondep" id="" value="clean">
                    <span>Đã dọn dẹp</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="dondep" id="" value="not_clean">
                    <span>Chưa dọn dẹp</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="dondep" id="" value="fixing">
                    <span>Sửa chữa</span>
                </div>
                <div class="room_left_choose_item">
                    <input type="radio" name="dondep" id="" checked value="all">
                    <span>Tất cả</span>
                </div>

            </div>
        </div>
    </div>
    <div class="room_right">
        <form method="post" action="" class="room_right_search">
            <input type="text" name="searchRoom" id="" placeholder="Search">
        </form>
        <h4>Phòng đơn</h4>
        <div class="room_right_listCard">
            <?php
            // $i = 0;
            // while ($don = mysqli_fetch_array($data_phongdon)) {
            //     $i++;
            //     if ($don['statusRoom'] == 'Đã đặt') {
            //         $setColor = 'background-color: rgb(13, 104, 190);';
            //     } else if ($don['statusRoom'] == 'Đã nhận') {
            //         $setColor = 'background-color: rgb(13, 166, 190);';
            //     } else {
            //         $setColor = '';
            //     }
            ?>
            <div class="room_right_card" style="">
                <div class="room_right_card_head">
                    <p>P101</p>
                    <div class="room_right_card_status">Đang trống</div>
                </div>
                <div class="room_right_card_body">
                    <i class="fa-solid fa-user"></i>
                    <div class="room_right_card_name">Đang trống</div>
                </div>
                <div class="room_right_card_bott">
                    <div class="room_right_card_time">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>Đang trống</span>
                    </div>
                    <div class="room_right_card_clean">Đã dọn dẹp</div>
                </div>
            </div>
            <?php
            // }
            ?>
        </div>

        <h4>Phòng đôi</h4>
        <div class="room_right_listCard">
            <?php
            // $i = 0;
            // while ($doi = mysqli_fetch_array($data_phongdoi)) {
            //     $i++;
            ?>
            <div class="room_right_card">
                <div class="room_right_card_head">
                    <p>P102</p>
                    <div class="room_right_card_status">Đang trống</div>
                </div>
                <div class="room_right_card_body">
                    <i class="fa-solid fa-user"></i>
                    <div class="room_right_card_name">Đang trống</div>
                </div>
                <div class="room_right_card_bott">
                    <div class="room_right_card_time">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>Đang trống</span>
                    </div>
                    <div class="room_right_card_clean">Đã dọn dẹp</div>
                </div>
            </div>
            <?php
            // }
            ?>
        </div>

        <h4>Phòng gia đình</h4>
        <div class="room_right_listCard">
            <div class="room_right_card">
                <div class="room_right_card_head">
                    <p>P101</p>
                    <div class="room_right_card_status">Chưa đặt</div>
                </div>
                <div class="room_right_card_body">
                    <i class="fa-solid fa-user"></i>
                    <div class="room_right_card_name">Trung duc</div>
                </div>
                <div class="room_right_card_bott">
                    <div class="room_right_card_time">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>3 ngày</span>
                    </div>
                    <div class="room_right_card_clean">Đã dọn dẹp</div>
                </div>
            </div>
        </div>
    </div>

    <div class="roomdetail">

        <div class="roomdetail_container">
            <div class="roomdetail_inner">
                <div class="roomdetail_head">
                    <div class="roomdetail_head_item">
                        <span>Trung duc</span>
                    </div>
                    <div class="roomdetail_head_item">
                        <span>21/08/2023 | 11:00AM</span>
                    </div>
                    <div class="roomdetail_head_item">
                        <span>3 ngay</span>
                    </div>
                    <div class="roomdetail_head_item">
                        <span>1</span>
                    </div>
                </div>
                <table class="roomdetail_body">
                    <thead>
                        <th>Chọn dịch vụ</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nước Sting</td>
                            <td>
                                <span>1</span>
                                <span class="plus" style="font-size: 16px; font-weight: 600; margin-right: 12px; margin-left: 20px;">+</span>
                                <span class="minus" style="font-size: 16px; font-weight: 600;">--</span>
                            </td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>Nước Sting</td>
                            <td>
                                <span>1</span>
                                <span class="plus" style="font-size: 16px; font-weight: 600; margin-right: 12px; margin-left: 20px;">+</span>
                                <span class="minus" style="font-size: 16px; font-weight: 600;">--</span>
                            </td>
                            <td>10000</td>
                        </tr>
                    </tbody>
                </table>
                <span>Thành tiền</span>
                <input type="text" name="roomdetail_price" value="" id="" class="roomdetail_price">
                <div class="roomdetail_bott">
                    <input type="submit" value="Nhận phòng">
                    <input type="submit" value="Lưu">
                    <input class="close" type="submit" value="Hủy">
                </div>
            </div>
        </div>
    </div>
</form>