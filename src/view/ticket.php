<div class="text-white pb-10 xl:pb-20 px-4 xl:px-0">
    <div class="mx-auto max-w-7xl">
        <h3 class="text-2xl font-bold mb-10 text-center">Thông tin cá nhân</h3>
        <div class="flex items-center justify-center gap-4 flex-wrap">
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700
            dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                <a href="index.php?act=info-user&page=account" class="p-0 block w-full">Tài khoản của tôi</a>
            </button>
            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none
        focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80
        font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Lịch sử mua vé
            </button>

        </div>
        <div class="mt-4 ring-1 ring-gray-700 sm:mx-0 sm:rounded-xl">
            <table class="min-w-full divide-y divide-gray-600">
                <thead>
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Ngày giao dịch</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Tên phim</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Số ghế</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Phòng</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Tổng tiền</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_ticket as $item){
                extract($item);
                ?>
                <tr>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="font-medium text-white">
                            <?php echo date("d/m/Y", strtotime($booking_date)) ?>
                        </div>
                    </td>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="font-medium text-white">
                            <?php echo $title ?>
                        </div>
                    </td>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="font-medium text-white">
                            <?php echo $seat_number ?>
                        </div>
                    </td>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="font-medium text-white">
                            <?php echo $room_name ?>
                        </div>
                    </td>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="font-medium text-white">
                            <?php echo $price ?>
                        </div>
                    </td>
                </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>

    </div>
</div>