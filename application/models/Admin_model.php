<!-- penulisan  file pada model harus diawali dengan huruf kapital
 karna akan berpengaruh kepada hasil hostingan-->
 <?php
 class Admin_model extends CI_Model{
    //  tampildata mempunyai barometer yang ada didalam kurung
public function tampildata($table, $urut_id){
    return $this->db->from($table)
                ->order_by($urut_id,'DESC')
                ->get('');
        }
public function simpandata($table, $data){
    return $this->db->insert($table,$data);
}
 }
 ?>