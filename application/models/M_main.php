<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_main extends CI_Model
{
    public function select_all($table, $res)
    {
        $rest = $this->db->get($table);
        return $this->__res($rest, $res);
    }

    public function get_where($table, $res, $where)
    {
        $this->db->where($where);
        $rest = $this->db->get($table);
        return $this->__res($rest, $res);
    }

    public function select_where($table, $res, $id, $where)
    {
        $this->db->where($where);
        $rest = $this->db->get($table);
        return $this->__res($rest, $res);
    }

    public function select_array($table, $res, $select, $where)
    {
        $this->db->select($select)->from($table);
        if ($where) {
            $this->db->where($where);
        }
        $rest = $this->db->get();
        return $this->__res($rest, $res);
    }

    public function select_array_in($table, $res, $select, $where, $where_in_name, $where_in_array)
    {
        $this->db->select($select)->from($table);
        if ($where) {
            $this->db->where($where);
        }
        if($where_in_name){
            $this->db->where_in($where_in_name,$where_in_array);
        }
        $rest = $this->db->get();
        return $this->__res($rest, $res);
    }

    public function select_array_group($table, $res, $select, $where, $group)
    {
        $this->db->select($select)->from($table);
        if ($where) {
            $this->db->where($where);
        }
        $this->db->group_by($group);
        $rest = $this->db->get();
        return $this->__res($rest, $res);
    }

    public function select_where_in($table, $res, $id, $where)
    {
        $this->db->where_in($id, $where);
        $rest = $this->db->get($table);
        return $this->__res($rest, $res);
    }

    public function select_limit($table, $res, $limit)
    {
        $this->db->limit($limit);
        $rest = $this->db->get($table);
        return $this->__res($rest, $res);
    }

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
        $this->db->affected_rows();
        return true;
    }

    public function delete($table, $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    public function delete_where($table, $where)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function __res($rest, $res)
    {
        switch ($res) {
            case 'row':
                $result = $rest->row();
                break;
            case 'result':
                $result = $rest->result();
                break;
            case 'result_array':
                $result = $rest->result_array();
                break;
            case 'num_rows':
                $result = $rest->num_rows();
                break;
        }
        return $result;
    }

}
