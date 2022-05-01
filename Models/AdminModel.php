<?php
class AdminModel extends BaseModel{
    public function getALL() {
        $sql = "SELect * from Categories";
        $query = $this-> query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }

}
?>