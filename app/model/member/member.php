<?php 

class member
{
	public function login($data = [])
	{
        if(!empty($data[username]) && !empty($data[password]))
        {
            $rs = Connect::myconnect()->query("SELECT * FROM tbl_member "
                    . "WHERE "
                    . "member_username = '".$data[username]."' AND "
                    . "member_password = '". base64_encode(base64_encode($data[password]))."'");
           if($rs->num_rows == 1)
           {
               echo 'ok';
           }
        }
	}
	public function register($data = [])
	{
		Application::myDump($data);
	}
}
