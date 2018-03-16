<?php
class Tasks extends CI_Model {

  public function __construct(){
    $this->load->database();
  }
  public function get_news(){
      $query = $this->db->get('taken');
      return $query->result_array();


    //$query = $this->db->get_where('taeken', array('slug' => $slug));
    return $query->row_array();
  }

  public function get_where($id){
      $query = $this->db->get_where('taken', array('group_id' => $id));
      return $query->result_array();


    //$query = $this->db->get_where('taeken', array('slug' => $slug));
    return $query->row_array();
  }

  public function set_news()
  {
      $this->load->helper('url');

      $slug = url_title($this->input->post('title'), 'dash', TRUE);


      $data = array(
          'taak' => $this->input->post('taak'),
      );

      return $this->db->insert('taken', $data);
  }
  public function update_news($id)
  {

    $this->load->helper('url');


    $data = $this->input->post();

    $this->db->where('id', $id);
    $this->db->update('taken', $data);
  }
}
