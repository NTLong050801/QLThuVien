<?php
class  AdminController extends BaseController{
    public function __construct()
    {
        //requai  file
        $this->loadModel('AdminModel');
        // khởi tạo đối tượng
        $this->AdminModel = new AdminModel;
        
    }
    public function index(){
        echo"ddaya la admincontrller";
    }
    //http://localhost:88/QLThuVien/index.php?controller=admin&action=test
    public function get_cate(){
        $data= $this -> AdminModel -> getALL();
        return $this-> view("frontend.admin.index",[
            'datas' => $data
        ]);
       
    }
}
?>