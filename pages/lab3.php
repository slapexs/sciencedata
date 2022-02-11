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
    <table class="table table-bordered table-sm">
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
                                    <small class="text-muted float-right"><?= $count; ?></small>
                                    <h5 class="text-danger mb-0"><?= $data[$count - 1]['Symbol']; ?></h5>
                                    <p class="text-tiny mb-0"><span><?= $data[$count - 1]['ElementName']; ?></span></p>
                                    <p class="text-tiny mb-0"><?= $data[$count - 1]['AtomicWeight']; ?> </p>
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
    <table class="table table-sm table-bordered">
        <tbody>
            <tr>
                <?php for ($i = 54; $i <= 71; $i++) { ?>
                    <?php if ($i < 58) { ?>
                        <td width="5.5%"></td>
                    <?php } else { ?>
                        <td width="5.5%">
                            <small class="text-muted float-right"><?= $i; ?></small>
                            <h5 class="text-danger mb-0"><?= $data[$i - 1]['Symbol']; ?></h5>
                            <p class="text-tiny mb-0"><span><?= $data[$i - 1]['ElementName']; ?></span></p>
                            <p class="text-tiny mb-0"><?= $data[$i - 1]['AtomicWeight']; ?> </p>
                        </td>
                    <?php } ?>
                <?php } ?>
            </tr>

            <tr>
                <?php for ($i = 86; $i <= 103; $i++) { ?>
                    <?php if ($i < 90) { ?>
                        <td width="5.5%"></td>
                    <?php } else { ?>
                        <td width="5.5%">

                        <small class="text-muted float-right"><?= $i; ?></small>
                            <h5 class="text-danger mb-0"><?= $data[$i - 1]['Symbol']; ?></h5>
                            <p class="text-tiny mb-0"><span><?= $data[$i - 1]['ElementName']; ?></span></p>
                            <p class="text-tiny mb-0"><?= $data[$i - 1]['AtomicWeight']; ?> </p>

                        </td>
                    <?php } ?>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div>