<?php
$data = [];
$sql = "SELECT * FROM `periordictable`";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) {
    array_push($data, $row);
}
?>


<span class="display-4 text-info">Lab 3</span>
<h4>โปรแกรมตารางธาตุ</h4>

<hr>

<div class="table-responsive">
    <table class="table table-sm">
        <thead class="thead-dark">
            <tr class="text-center">
                <!-- Generate columns -->
                <?php for ($i = 1; $i <= 18; $i++) { ?>
                    <th class="align-middle" width="5.55%"><?= $i; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = [
                [1, 18],
                [1, 2, 13, 14, 15, 16, 17, 18],
                [1, 2, 13, 14, 15, 16, 17, 18],
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
            ];

            $colors = [
                ['elem_green', 'elem_blue'],
                ['elem_pink', 'elem_orange', 'elem_darkgreen', 'elem_green', 'elem_green', 'elem_green', 'elem_yellow', 'elem_blue'],
                ['elem_pink', 'elem_orange', 'elem_grey', 'elem_darkgreen', 'elem_green', 'elem_green', 'elem_yellow', 'elem_blue'],
                ['elem_pink', 'elem_orange', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink','elem_grey', 'elem_darkgreen', 'elem_darkgreen', 'elem_green', 'elem_yellow', 'elem_blue'],
                ['elem_pink', 'elem_orange', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink','elem_grey', 'elem_grey', 'elem_darkgreen', 'elem_darkgreen', 'elem_yellow', 'elem_blue'],
                ['elem_pink', 'elem_orange', 'elem_purple', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink','elem_grey', 'elem_grey', 'elem_grey', 'elem_grey', 'elem_yellow', 'elem_blue'],
                ['elem_pink', 'elem_orange', 'elem_darkpink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink', 'elem_litepink','elem_grey', 'elem_grey', 'elem_grey', 'elem_grey', 'elem_yellow', 'elem_blue'],
            ];

            $rounded_border = [5,14,33,52];
            $count = 0;
            $index_count = 0;
            for ($r = 0; $r <= 6; $r++) {
            ?>
                <tr>
                    <?php for ($i = 1; $i <= 18; $i++) {
                    ?>
                        <td width="5.5%">
                            <?php for ($j = 0; $j < count($index[$r]); $j++) {
                                if ($i == $index[$r][$j]) {
                                    $count++;
                                    $index_count++;
                                    //if ($index_count != 57 && $index_count != 75) { 
                            ?>
                                    <div class="openmodal_viewelement  <?= (in_array($count, $rounded_border) ? 'rounded border_elem' : '')  ?> <?= $colors[$r][$j] ?>" onclick="modalViewElement(['<?= $data[$count - 1]['Pid']; ?>','<?= $data[$count - 1]['AtomicWeight']; ?>','<?= $data[$count - 1]['ElementName']; ?>','<?= $data[$count - 1]['Symbol']; ?>','<?= $data[$count - 1]['MeltingPoint']; ?>','<?= $data[$count - 1]['BoilingPoint']; ?>','<?= $data[$count - 1]['Density']; ?>','<?= $data[$count - 1]['Discover']; ?>','<?= $data[$count - 1]['Groups']; ?>','<?= $data[$count - 1]['ElectronConfiguration']; ?>','<?= $data[$count - 1]['IonizationEnergy']; ?>'])">
                                        <small class="text-muted float-right"><?= $count; ?></small>
                                        <h5 class="mb-0"><?= $data[$count - 1]['Symbol']; ?></h5>
                                        <p class="text-tiny mb-0"><span><?= $data[$count - 1]['ElementName']; ?></span></p>
                                        <p class="text-tiny mb-0"><?= $data[$count - 1]['AtomicWeight']; ?> </p>
                                    </div>
                            <?php  //}

                                    if ($index_count == 57) {
                                        $count += 14;
                                    }

                                    if ($index_count == 75) {
                                        $count += 14;
                                    }
                                }
                            } ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<div class="table-responsive mt-3">
    <table class="table table-sm">
        <tbody>
            <tr>
                <?php for ($i = 54; $i <= 71; $i++) { ?>
                    <?php if ($i < 58) { ?>
                        <td width="5.5%"></td>
                    <?php } else { ?>
                        <td width="5.5%">
                        <div class="openmodal_viewelement  elem_purple" onclick="modalViewElement(['<?= $data[$i - 1]['Pid']; ?>','<?= $data[$i - 1]['AtomicWeight']; ?>','<?= $data[$i - 1]['ElementName']; ?>','<?= $data[$i - 1]['Symbol']; ?>','<?= $data[$i - 1]['MeltingPoint']; ?>','<?= $data[$i - 1]['BoilingPoint']; ?>','<?= $data[$i - 1]['Density']; ?>','<?= $data[$i - 1]['Discover']; ?>','<?= $data[$i - 1]['Groups']; ?>','<?= $data[$i - 1]['ElectronConfiguration']; ?>','<?= $data[$i - 1]['IonizationEnergy']; ?>'])">
                        <small class="text-muted float-right"><?= $i; ?></small>
                            <h5 class="mb-0"><?= $data[$i - 1]['Symbol']; ?></h5>
                            <p class="text-tiny mb-0"><span><?= $data[$i - 1]['ElementName']; ?></span></p>
                            <p class="text-tiny mb-0"><?= $data[$i - 1]['AtomicWeight']; ?> </p>

                        </div>
                        </td>
                    <?php } ?>
                <?php } ?>
            </tr>

            <tr>
                <?php for ($i = 86; $i <= 103; $i++) { ?>
                    <?php if ($i < 90) { ?>
                        <td width="5.5%"></td>
                    <?php } else { ?>
                        <td width="5.5%" >
                        <div class="openmodal_viewelement  elem_darkpink" onclick="modalViewElement(['<?= $data[$i - 1]['Pid']; ?>','<?= $data[$i - 1]['AtomicWeight']; ?>','<?= $data[$i - 1]['ElementName']; ?>','<?= $data[$i - 1]['Symbol']; ?>','<?= $data[$i - 1]['MeltingPoint']; ?>','<?= $data[$i - 1]['BoilingPoint']; ?>','<?= $data[$i - 1]['Density']; ?>','<?= $data[$i - 1]['Discover']; ?>','<?= $data[$i - 1]['Groups']; ?>','<?= $data[$i - 1]['ElectronConfiguration']; ?>','<?= $data[$i - 1]['IonizationEnergy']; ?>'])">
                        <small class="text-muted float-right"><?= $i; ?></small>
                            <h5 class="mb-0"><?= $data[$i - 1]['Symbol']; ?></h5>
                            <p class="text-tiny mb-0"><span><?= $data[$i - 1]['ElementName']; ?></span></p>
                            <p class="text-tiny mb-0"><?= $data[$i - 1]['AtomicWeight']; ?> </p>
                        </div>
                        </td>
                    <?php } ?>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div>

<?php
include_once('./components/modal_viewelement.php');
?>