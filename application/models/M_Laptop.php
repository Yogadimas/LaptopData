<?php

class M_Laptop extends CI_Model
{
    public function show_data($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function delete_data($table, $id)
    {
        $id = ['id' => $id];
        $this->db->where($id);
        $this->db->delete($table);
    }

    public function get_laptop_by_id($table, $id)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array();
    }

    public function update_data($table, $data, $id)
    { 
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    public function detail_data($table, $id = NULL)
    {
        $query = $this->db->get_where($table, array(
            'id' => $id
        ))->row();
        return $query;
    }
}
