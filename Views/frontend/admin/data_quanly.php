<?php
if ($check_act == "cate") {
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên thể loại</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($data_cates as $cate) {
                $i ++;
            ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $cate['name_cate']  ?></td>
                    <td>
                    <button id_get="<?= $cate['id_cate'] ?>" id="btn_update" class="btn btn-secondary">Sửa</button>
                    <button id_get="<?= $cate['id_cate'] ?>" id="btn_delete" class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php
}
?>