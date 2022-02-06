<?php
$sql = "SELECT * FROM `periordictable`";
$query = mysqli_query($conn, $sql);
?>

<span class="display-4 text-info">Lab 3</span>
<h4>โปรแกรมตารางธาตุ</h4>

<hr>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <!-- Generate columns -->
                <?php for ($i = 1; $i <= 18; $i++) { ?>
                    <th class="align-middle"><?= $i; ?></th>
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
            $pos1 = [];
            $count = 0;
            $index_count = 0;
            for ($i = 1; $i <= 118; $i++) {
                array_push($pos1, $i);
            }
            for ($r = 0; $r <= 6; $r++) {
            ?>
                <tr class="text-center">
                    <?php for ($i = 1; $i <= 18; $i++) {
                    ?>
                        <td>
                            <?php for ($j = 0; $j < count($index[$r]); $j++) {
                                if ($i == $index[$r][$j]) {
                                    $count++;
                                    $index_count++;
                                    if ($index_count != 57 && $index_count != 75) {
                                        echo $count;
                                    }

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