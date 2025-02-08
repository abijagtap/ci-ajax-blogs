<?php
class Blog_model extends CI_Model
{

    public function get_all_blogs()
    {
        $query = $this->db->get('blogs');
        return $query->result_array();
    }

    public function get_blog($id)
    {
        $query = $this->db->get_where('blogs', array('id' => $id));
        return $query->row_array();
    }

    public function insert_blog($data)
    {
        return $this->db->insert('blogs', $data);
    }

    public function update_blog($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('blogs', $data);
    }

    public function delete_blog($id)
    {
        return $this->db->delete('blogs', array('id' => $id));
    }
}
?>