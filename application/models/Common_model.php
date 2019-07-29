<?php
class Common_Model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }

	function exec_proc($proc_name,$data=array(),$only_exec=0)
	{

        try
		{
            $this->db->reconnect();
            $sql = "CALL `".$proc_name."`";
			$indexes=array();
			foreach($data as $c)
			{
			  $indexes[]="?";
			}
			if(count($indexes)>0)
			 $sql.= "(".implode(",",$indexes).")";
			else
			 $sql.= "()";

			$result = $this->db->query($sql,$data);

			if($only_exec==0)
			$ret = $result->result_array();
			else
			$ret = $result;

		$this->db->close();
        }
		catch (Exception $e)
		{
            echo $e->getMessage();
        }

		return $ret;

    }



}
?>
