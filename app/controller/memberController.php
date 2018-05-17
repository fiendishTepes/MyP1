<?php

class memberController extends controller {
    public function loginAction()
    {
        $log = $_POST['nav'];
        //Application::myDump($log);
        if(!empty($log[username]) && !empty($log[password]))
        {
            $rs = Connect::myconnect()->query("SELECT * FROM tbl_member "
                    . "WHERE "
                    . "member_username = '".$log[username]."' AND "
                    . "member_password = '". base64_encode(base64_encode($log[password]))."'");
           if($rs->num_rows == 1)
           {
               echo 'ok';
           }
        }
    }
    public function registerAction()
    {
        echo "<script> swal('REGISTER','','success'); </script>";
    }
}
