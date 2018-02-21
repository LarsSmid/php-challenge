<?php
class Task extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('tasks');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['taken'] = $this->tasks->get_news();
                $data['title'] = 'Taken';

                $this->load->view('templates/header', $data);
                $this->load->view('taken/index', $data);
                $this->load->view('templates/footer');
        }

        public function getWhere($id = null)
        {
          $data['taken'] = $this->tasks->get_where($id);
          $data['title'] = 'Taken';

          $this->load->view('templates/header', $data);
          $this->load->view('taken/index', $data);
          $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Maak een taak';

            $this->form_validation->set_rules('taak', 'Taak', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('taken/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->tasks->set_news();
                redirect('/task', 'refresh');
            }
        }

        public function update($id = null)
        {

          $this->load->helper('form');
          $this->load->library('form_validation');

          $data = array(
              'title' => 'Update een taak',
              'id' => $id
           );
          $this->form_validation->set_rules('taak', 'Taak', 'required');

          if ($this->form_validation->run() === FALSE) {
              $this->load->view('templates/header', $data);
              $this->load->view('taken/update', $data);
              $this->load->view('templates/footer');

          } else {

              $this->tasks->update_news($id);
              redirect('/task', 'refresh');
          }
        }

        public function delete($id = null)
        {
          $this->db->delete('taken', array('id' => $id));
          redirect('/task', 'refresh');
        }
}
