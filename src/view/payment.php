<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        insert_ticket($id_schedule, $seat, $price);
        $ticket = load_ticket_where($id_schedule, $seat);
        extract($ticket);
        $user_id = 1;
        $booking_time = date('H:i:s');
        $booking_date = date('Y-m-d');
        $user_id_exists = false;
        $ticket_id_exists = false;

        foreach ($list_bill as $item) {
            if ($user_id === $item['user_id']) {
                $user_id_exists = true;
            }

            if ($ticket_id === $item['ticket_id']) {
                $ticket_id_exists = true;
            }

            // Nếu cả hai biến đã tồn tại trong danh sách, bạn có thể break ra khỏi vòng lặp ngay tại đây để tăng hiệu suất
            if ($user_id_exists && $ticket_id_exists) {
                break;
            }
        }

        if ($user_id_exists && $ticket_id_exists) {
            // Cả hai biến tồn tại trong $list_bill
            // Thực hiện các hành động khác nếu cần
            echo "error";
        } else {
            // Một hoặc cả hai biến không tồn tại trong $list_bill
            post_table_booking($user_id, $ticket_id, $booking_time, $booking_date);
        }
    }
?>
<div class="pb-10 md:pb-20 px-4 xl:px-0 text-white ">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-wrap xl:flex-nowrap gap-5">
            <div class="w-2/3">
                <div class="p-4 md:p-6 space-y-6 bg-[#1A1D23] rounded-2xl text-sm md:text-base">
                    <h4 class="font-bold">Thông tin phim</h4>
                    <div>
                        <p>Phim</p>
                        <p class="font-semibold"><?= $title ?></p>
                    </div>
                    <div class="flex items-center gap-10">
                        <div class="w-1/2">
                            <p>Ngày giờ chiếu</p>
                            <div class="flex items-center space-x-2">
                                <span class="font-bold text-orange-500"><?= $convertedTime['hour'].":".$convertedTime['minute'] ?></span>
                                <span>-</span>
                                <span class="font-semibold"><?= $convertedDate ?></span>
                            </div>
                        </div>
                        <div>
                            <p>Ghế</p>
                            <p class="font-semibold"><?= $seat ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-10">
                        <div class="w-1/2">
                            <p>Định dạng</p>
                            <p class="font-semibold">2D</p>
                        </div>
                        <div>
                            <p>Phòng chiếu</p>
                            <p class="font-semibold"><?= $room_name ?></p>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:p-6 space-y-6 bg-[#1A1D23] mt-5 rounded-2xl text-sm md:text-base">
                    <h4 class="font-bold">Thông tin thanh toán</h4>
                    <div>
                        <div class="mt-4 ring-1 ring-gray-700 sm:mx-0 rounded-xl">
                            <table class="min-w-full divide-y divide-gray-600">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Bộ phim</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Số lượng</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-medium text-white"><?= $title ?></div>
                                        </td>
                                        <td class="px-3 py-3.5 text-sm">
                                            1
                                        </td>
                                        <td class="px-3 py-3.5 text-sm">
                                            <?= $price ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 flex-1 text-sm md:text-base">
                <div class="bg-[#1A1D23] h-full rounded-2xl p-4 md:p-6 space-y-5">
                    <h4 class="font-bold">Phương thức thanh toán</h4>
                    <div>

                    </div>
                    <h4 class="font-bold">Chi phí</h4>
                    <div>
                        <div class="flex items-center justify-between">
                            <p>Thanh tóán</p>
                            <p class="font-bold"><?= $price ?></p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p>Fee (0%)</p>
                            <p class="font-bold">0đ</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p>Tổng cộng</p>
                            <p class="font-bold"><?= $price ?></p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <form method="post">
                            <button class="w-full bg-orange-500 border-white border border-solid rounded-xl" type="submit">
                                <div class=" p-0 flex justify-center items-center">
                                    <p class="py-4">Thanh toán</p>
                                </div>
                            </button>
                        </form>

                        <button class="">Quay lại</button>
                        <div class="text-sm text-center mx-auto mt-4 text-orange-500">
                            <b>Lưu ý:</b>
                            Không mua vé cho trẻ em dưới 13 tuổi đối với các suất chiếu phim kết thúc sau 22h00 và
                            không mua vé cho trẻ em dưới 16 tuổi đối với các suất chiếu phim kết thúc sau 23h00.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>