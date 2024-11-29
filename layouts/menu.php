<div class="container mt-3">
    <div class="row">
        <div class="col-sm-4 mt-2">
            <h3 class="text-center">รายละเอียดเว็บ</h3>
            <p>SEVER: <?php echo $_SERVER['SERVER_NAME']; ?></p>
            <p>ผู้ใช้ทั้งหมด: <?php echo $totaluser['total']; ?> คน</p>
            <p>รายได้ทั้งหมด:
                <?php
                if(empty($totaltopup['total'])){
                    echo "0.00";
                }else{
                    echo $totaltopup['total'];
                }
                ?> บาท</p>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <!-- ปุ่มแยก -->
                <div class="col-6 col-md-4 mt-2">
                    <a href="/settings_user" class="btn btn-primary w-100">
                        <i class="fas fa-users-cog"></i> จัดการผู้ใช้
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/settings_web" class="btn btn-secondary w-100">
                        <i class="fas fa-cog"></i> จัดการเว็บ
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/settings_product" class="btn btn-success w-100">
                        <i class="fas fa-shopping-basket"></i> จัดการสินค้า
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/settings_termgame" class="btn btn-danger w-100">
                        <i class="fas fa-gamepad"></i> จัดการเติมไอดี-พาส
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/settings_code" class="btn btn-warning w-100">
                        <i class="fas fa-code"></i> จัดการโค๊ด
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/history_topup" class="btn btn-info w-100">
                        <i class="fas fa-history"></i> ประวัติการเติมเงิน
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/history_product" class="btn btn-light w-100">
                        <i class="fas fa-history"></i> ประวัติการซื้อสินค้า
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/history_termgame" class="btn btn-dark w-100">
                        <i class="fas fa-history"></i> ประวัติการเติมไอดี-พาส
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-2">
                    <a href="/history_random" class="btn btn-outline-primary w-100">
                        <i class="fas fa-history"></i> ประวัติการสุ่มของรางวัล
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
