
<div class="text-center">
    <h1>รายการกิจกรรม</h1>
</div>
<div class="d-flex justify-content-center">
    <div class="row container">
            <section class="col-4 mb-1 ">
                <div class="border  rounded-4 overflow-hidden ">
                    <section>
                        <img src="<?= $a['image'] ?>" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                    </section>
                    <div class="container">
                        <section class="text-center">
                            <strong>โครงการ</strong>
                        </section>
                        <section><strong>วันที่ </strong></section>
                        <section><strong>สถานที่ </strong></section>
                        <section><strong>ชั่วโมงกิจกรรม</strong> </section>
                        <section><strong>รับสมัคร</strong></section>
                        <div class="d-flex justify-content-between mb-3">
                            <section class=" text-center mt-2"><strong></strong></section>
                            <section class="">
                                <form action="activity" method="get" >
                                    <input name="activity_id" type="hidden" >
                                    <input class="btn btn-primary " type="submit" value="ลงทะเบียน" >
                                </form>
                            </section>

                        </div>
                    </div>

            </section>
    </div>
</div>
</div>





