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
            <p class="text-muted">น้ำหนักโมเลกุล</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col">
                        <h5 id="elements"><?= ($result_elem != "" ? $result_elem : "-") ?></h5>
                    </div>
                    <div class="col-auto">
                        <h1 class="text-center text-primary" id="element_value"><?= ($sum > 0 ? $sum : "0") ?></h1>
                    </div>
                </div>
            <hr>
            <div class="text-centers">
            <p class="text-muted">ธาตุและน้ำหนัก</p>
            <h5 id="list_elements">
                <?php
                    for ($i=0; $i<count($temp_elem); $i++){
                        if ($value_elem[$i] == 0){
                            echo "<small class='text-danger'>ไม่พบธาตุ".$temp_elem[$i]."</small>";
                        }else{
                            echo $temp_elem[$i];
                        }
                        if ($i != count($temp_elem)-1){
                            echo "<span class='mx-1'>+</span>";
                        }
                    }
                ?>
            </h5>
            <p id="value_elements">
            <?php
                    for ($i=0; $i<count($value_elem); $i++){
                        if ($value_elem[$i] > 0){
                            echo $value_elem[$i];
                        }else {
                            echo "<span class='text-danger'>0</span>";
                        }
                        if ($i != count($value_elem)-1){
                            echo "<span class='mx-1'>+</span>";
                        }
                        
                    }
                ?>
            </p>
            </div>
            </div>
        </div>
    </div>
</div>