<?php
class Employee_model extends CI_model{
    
    
    function create($formArray)
    {
        $this->db->insert('employees',$formArray);
    }

    function all() {
       return $employee = $this->db->get('employees')->result_array(); //đổ dữ liệu nhân viên ra
    }

    function getEmployee($employeeId) {
        $this->db->where('user_id',$employeeId);
        return $employee = $this->db->get('employees')->row_array();

    }

    function updateEmployee($employeeId,$formArray) {
        $this->db->where('user_id',$employeeId);
        $this->db->update('employees',$formArray);
    }

    function deleteEmployee($employeeId) {
        $this->db->where('user_id',$employeeId );
        $this->db->delete('employees');
    }
}
?>