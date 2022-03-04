<span class="display-4 text-info">Lab 4</span>
<h4>โปรแกรมคำนวณหาน้ำหนักโมเลกุล</h4>
<hr>

<div class="row">
    <div class="col-lg-6">
        <div class="bg-light p-3 rounded">
            <form action="" id="cal_element" method="post">
                <div class="form-group row">
                    <label for="find_elements" class="col-form-label col-12">ระบุธาตุและน้ำหนัก <small class="text-muted">(เช่น Na2CO)</small></label>
                    <div class="col">
                        <input type="text" name="find_elements" id="find_elements" autocomplete="off" class="form-control" required>
                        <small class="invalid-feedback">โปรดระบุชื่อธาตุให้ถูกต้อง</small>
                    </div>

                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit" name="search_element">คำนวณ</button>
                        <button class="btn btn-outline-dark" type="reset">ล้างค่า</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="bg-light rounded p-3">
            <h5 class="text-center">ผลลัพธ์</h5>
            <div class="mt-4">
            <h3 id="list_elements" class="text-center text-muted">ไม่มีข้อมูล</h3>
            <h1 class="text-center" id="element_value">0</h1>
            </div>
        </div>
    </div>
</div>