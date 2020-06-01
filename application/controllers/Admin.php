<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == '') {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Dashboard';
        $data['page'] = $this->load->view('back-end/dashboard', $data, true);
        $this->load->view('back-end/index', $data);
    }

    public function contact()
    {
        $data['data'] = $this->m_main->select_all('tbl_company', 'row');
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Contact';
        $data['page'] = $this->load->view('back-end/contact', $data, true);
        $this->load->view('back-end/index', $data);
    }

    public function slider()
    {
        $data['img'] = $this->m_main->select_all('tbl_slider', 'result');
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Slider';
        $data['page'] = $this->load->view('back-end/slider', $data, true);
        $this->load->view('back-end/index', $data);
    }
    
    public function team()
    {
        $data['img'] = $this->m_main->select_all('tbl_team', 'result');
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Team';
        $data['page'] = $this->load->view('back-end/team', $data, true);
        $this->load->view('back-end/index', $data);
    }

    public function promo()
    {
        $data['img'] = $this->m_main->select_all('tbl_promo', 'result');
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Promotion';
        $data['page'] = $this->load->view('back-end/promo', $data, true);
        $this->load->view('back-end/index', $data);
    }

    public function service()
    {
        $data['img'] = $this->m_main->select_all('tbl_career', 'result');
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Career';
        $data['page'] = $this->load->view('back-end/service', $data, true);
        $this->load->view('back-end/index', $data);
    }

    public function event()
    {
        $data['img'] = $this->m_main->select_all('tbl_project', 'result');
        $data['web_name'] = 'PT Karya Bangsa Kita';
        $data['pagename'] = 'Project';
        $data['page'] = $this->load->view('back-end/event', $data, true);
        $this->load->view('back-end/index', $data);
    }

    public function saveCompany()
    {
        $tabel = $this->input->post('tabel');
        if ($this->m_main->select_all($tabel, 'row')) {
            $res = $this->m_main->update($tabel, $this->input->post(), ['id' => 1]);
        } else {
            $res = $this->m_main->add($tabel, $this->input->post());
        }
        if ($res) {
            $this->session->set_flashdata('success_msg', ' data saved');
        } else {
            $this->session->set_flashdata('error_msg', 'Error data saved');
        }
        redirect('Admin/' . $this->input->post('page'));
    }

    public function saveTeam()
    {
        $config['upload_path'] = './assets/img/team/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('url_img')) {
					$this->session->set_flashdata('error_msg', 'Error images upload'.$this->upload->display_errors());
        } else {
            $filename = $this->upload->data('file_name');
        }
        $data = [
            'url_img' => $filename,
            'name' => $this->input->post('name'),
            'job' => $this->input->post('job'),
            'twitter' => $this->input->post('twitter'),
            'facebook' => $this->input->post('facebook'),
            'google' => $this->input->post('google'),
            'linked' => $this->input->post('linked'),
        ];
        $res = $this->m_main->add('tbl_team', $data);

        if ($res) {
            $this->session->set_flashdata('success_msg', ' data saved');
        } else {
            $this->session->set_flashdata('error_msg', 'Error data saved');
        }
        redirect('Admin/team');
    }

    public function deleteTeam($id)
    {
        $data = $this->m_main->get_where('tbl_team','row',['id' => $id ] );
        unlink('assets/img/team/'.$data->url_img);
        if($data){
            $res = $this->m_main->delete('tbl_team',$id);
            if ($data) {
                $this->session->set_flashdata('success_msg', ' data deleted');
            } else {
                $this->session->set_flashdata('error_msg', 'Error data delete');
            }
        }
        redirect('Admin/team');
    }

    public function saveSlider()
    {
        $config['upload_path'] = './assets/img/intro-carousel/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('url_img')) {
                    $this->session->set_flashdata('error_msg', 'Error images upload'.$this->upload->display_errors());
        } else {
            $name = $this->upload->data('file_name');
        }
        $data = [
            'url_img' => $name,
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];
        $res = $this->m_main->add('tbl_slider', $data);

        if ($res) {
            $this->session->set_flashdata('success_msg', ' data saved');
        } else {
            $this->session->set_flashdata('error_msg', 'Error data saved');
        }
        redirect('Admin/slider');
    }

    public function deleteSlider($id)
    {
        $data = $this->m_main->get_where('tbl_slider','row',['id' => $id ] );
        unlink('assets/img/intro-carousel/'.$data->url_img);
        if($data){
            $res = $this->m_main->delete('tbl_slider',$id);
            if ($data) {
                $this->session->set_flashdata('success_msg', ' data deleted');
            } else {
                $this->session->set_flashdata('error_msg', 'Error data delete');
            }
        }
        redirect('Admin/slider');
    }

    public function savePromo()
    {
        $config['upload_path'] = './assets/img/promo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('url_img')) {
                    $this->session->set_flashdata('error_msg', 'Error images upload'.$this->upload->display_errors());
        } else {
            $name = $this->upload->data('file_name');
        }
        $data = [
            'url_img' => $name,
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];
        $res = $this->m_main->add('tbl_promo', $data);

        if ($res) {
            $this->session->set_flashdata('success_msg', ' data saved');
        } else {
            $this->session->set_flashdata('error_msg', 'Error data saved');
        }
        redirect('Admin/promo');
    }

    public function deletePromo($id)
    {
        $data = $this->m_main->get_where('tbl_promo','row',['id' => $id ] );
        unlink('assets/img/promo/'.$data->url_img);
        if($data){
            $res = $this->m_main->delete('tbl_promo',$id);
            if ($data) {
                $this->session->set_flashdata('success_msg', ' data deleted');
            } else {
                $this->session->set_flashdata('error_msg', 'Error data delete');
            }
        }
        redirect('Admin/promo');
    }

    public function saveEvent()
    {
        $config['upload_path'] = './assets/img/events/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('url_img')) {
                    $this->session->set_flashdata('error_msg', 'Error images upload'.$this->upload->display_errors());
        } else {
            $name = $this->upload->data('file_name');
        }
        $data = [
            'url_img' => $name,
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];
        $res = $this->m_main->add('tbl_project', $data);

        if ($res) {
            $this->session->set_flashdata('success_msg', ' data saved');
        } else {
            $this->session->set_flashdata('error_msg', 'Error data saved');
        }
        redirect('Admin/event');
    }

    public function deleteEvent($id)
    {
        $data = $this->m_main->get_where('tbl_project','row',['id' => $id ] );
        unlink('assets/img/events/'.$data->url_img);
        if($data){
            $res = $this->m_main->delete('tbl_project',$id);
            if ($data) {
                $this->session->set_flashdata('success_msg', ' data deleted');
            } else {
                $this->session->set_flashdata('error_msg', 'Error data delete');
            }
        }
        redirect('Admin/event');
    }

    public function saveService()
    {
        $data = [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];
        $res = $this->m_main->add('tbl_career', $data);

        if ($res) {
            $this->session->set_flashdata('success_msg', ' data saved');
        } else {
            $this->session->set_flashdata('error_msg', 'Error data saved');
        }
        redirect('Admin/service');
    }

    public function deleteService($id)
    {
        $data = $this->m_main->get_where('tbl_career','row',['id' => $id ] );
        if($data){
            $res = $this->m_main->delete('tbl_career',$id);
            if ($data) {
                $this->session->set_flashdata('success_msg', ' data deleted');
            } else {
                $this->session->set_flashdata('error_msg', 'Error data delete');
            }
        }
        redirect('Admin/service');
    }
}
