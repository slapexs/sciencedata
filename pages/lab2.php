<span class="display-4 text-info">Lab 2</span>
<h4>โปรแกรมข้อมูลน้ำหนักอะตอมของธาตุผ่านระบบฐานข้อมูล</h4>

<hr>
<div class="row mt-3">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <form action="./?lab=2" method="post">
          <div class="form-group">
            <label for="searchbox">ค้นหา</label>
            <input type="text" name="searchbox" id="searchbox" class="form-control" placeholder="Search" required>
          </div>

          <div class="form-group d-flex">
            <div class="pr-3">
              <input type="radio" class="form-chrck-input" name="category" value="Pid" id="Pid" required>
              <label for="Pid">เลขอะตอม</label>
            </div>

            <div class="pr-3">
              <input type="radio" class="form-chrck-input" name="category" value="Symbol" id="symbol" required>
              <label for="symbol">ชื่อย่อธาตุ</label>
            </div>

            <div class="pr-3">
              <input type="radio" class="form-chrck-input" name="category" value="ElementName" id="elementname" required>
              <label for="elementname">ชื่อเต็มธาตุ</label>
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit" name="searchdata">ค้นหา</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <?php if ($iserror == false) { ?>
          <p><strong>เลขอะตอมธาตุ : </strong> <?= $result['Pid']; ?></p>
          <p><strong>น้ำหนักอะตอม : </strong> <?= $result['AtomicWeight']; ?></p>
          <p><strong>ชื่อเต็มธาตุ : </strong> <?= $result['ElementName']; ?></p>
          <p><strong>ชื่อย่อธาตุ : </strong> <?= $result['Symbol']; ?></p>
          <p><strong>จุดหลอมเหลว : </strong> <?= $result['MeltingPoint']; ?></p>
          <p><strong>จุดเดือด : </strong> <?= $result['BoilingPoint']; ?></p>
          <p><strong>ความหนาแน่น : </strong> <?= $result['Density']; ?></p>
          <p><strong>ปีที่ค้นพบธาตุ : </strong> <?= $result['Discover']; ?></p>
          <p><strong>หมู่ของธาตุ : </strong> <?= $result['Groups']; ?></p>
          <p><strong>การจัดเรียงอิเล็กตรอน : </strong> <?= $result['ElectronConfiguration']; ?></p>
          <p><strong>ค่าพลังงานไอออไนซ์เซชัน : </strong> <?= $result['IonizationEnergy']; ?></p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>