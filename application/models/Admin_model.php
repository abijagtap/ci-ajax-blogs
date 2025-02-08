<?php
class Admin_model extends CI_Model
{

    public function get_all_blogs()
    {
        $query = $this->db->get('blogs');
        return $query->result_array();
    }

    public function insert_blog($data)
    {
        $this->db->insert('blogs', $data);
    }

    public function get_blog($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('blogs');
        return $query->row_array();
    }

    public function update_blog($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
    }

    public function delete_blog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blogs');
    }
}
?>