<section class="container text-center mt-2">
    <h1>สมัครสมาชิกใหม่</h1>
    <div class="d-flex justify-content-center mt-2 ">
        <form class="border rounded-2  w-50 shadow p-4 mb-4 bg-white" action="/register" method="post">
            <div class="container  flex-column ">
                <label for="id" class="form-label  mt-2 d-flex justify-content-start">รหัสนิสิต:</label>
                <input type="text" id="id" name="id" class="form-control form-control-lg">
                <label for="fn" class="form-label  mt-2 d-flex justify-content-start">ชื่อ:</label>
                <input type="text" id="fn" name="fn" class="form-control form-control-lg">
                <label for="ln" class="form-label  mt-2 d-flex justify-content-start">นามสกุล:</label>
                <input type="text" id="ln" name="ln" class="form-control form-control-lg">
                <label for="email" class="form-label  mt-2 d-flex justify-content-start">อีเมล:</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg">
                <label for="password" class="form-label mt-2 d-flex justify-content-start">รหัสผ่าน:</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg">
                <input type="submit" class="btn btn-primary btn-lg mt-3 w-25 " value="สมัครสมาชิก">
                <a href="/login">
                    <p><strong>Login</strong>
                    </p>
                </a>
            </div>
        </form>
    </div>


</section>