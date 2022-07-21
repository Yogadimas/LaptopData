<?php
class Lenovo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Laptop');
    }
    public function index()
    {
        $data['laptops'] = $this->M_Laptop->show_data('tb_laptop_lenovo');
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('datalaptop/lenovo/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {

        $detail = $this->M_Laptop->detail_data('tb_laptop_lenovo', $id);
        $data['detail'] = $detail;
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('datalaptop/lenovo/detail', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $data['laptops'] = $this->M_Laptop->show_data('tb_laptop_lenovo');
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');
        $this->form_validation->set_rules('cpu', 'CPU', 'required|trim');
        $this->form_validation->set_rules('ram', 'RAM', 'required|trim');
        $this->form_validation->set_rules('storage', 'Storage', 'required|trim');
        $this->form_validation->set_rules('grafis', 'Graphic', 'required|trim');
        $this->form_validation->set_rules('display', 'Display', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            ' . 'Failed to add data, there is an input that has not been filled in!' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>'
            );
            redirect('Lenovo');
        } else {
            $upload_image = $_FILES['picture']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048'; // kb = 2mb   
                $config['encrypt_name'] = true;
                $config['file_ext_tolower'] = true;
                $config['upload_path'] = './assets/img/lenovo/';
                $this->load->library('upload', $config);
                // jika sukses upload ke folder
                if ($this->upload->do_upload('picture')) {
                    $new_image = $this->upload->data('file_name');
                    $name_image =  $new_image;
                    $this->db->set('picture', $name_image);
                } else {
                    // jika gagal upload ke folder menampilkan eror ke web
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $this->upload->display_errors() . ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></div>');
                    redirect('Lenovo');
                }
            } else {
                $name_image = 'default_lenovo.jpg';
            }

            $data = [
                'title' => $this->input->post('title'),
                'price' => $this->input->post('price'),
                'cpu' => $this->input->post('cpu'),
                'ram' => $this->input->post('ram'),
                'storage' => $this->input->post('storage'),
                'grafis' => $this->input->post('grafis'),
                'display' => $this->input->post('display'),
                'os' => $this->input->post('os'),
                'picture' => $name_image,
                'merk' => $this->input->post('merk')
            ];

            $this->M_Laptop->input_data('tb_laptop_lenovo', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Successfully added <strong>' . $data['title']  . '</strong> data! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>'
            );
            redirect('Lenovo');
        }
    }

    public function edit($id)
    {
        $data['laptops'] = $this->M_Laptop->get_laptop_by_id('tb_laptop_lenovo', $id);
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');
        $this->form_validation->set_rules('cpu', 'CPU', 'required|trim');
        $this->form_validation->set_rules('ram', 'RAM', 'required|trim');
        $this->form_validation->set_rules('storage', 'Storage', 'required|trim');
        $this->form_validation->set_rules('grafis', 'Graphic', 'required|trim');
        $this->form_validation->set_rules('display', 'Display', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('datalaptop/lenovo/edit', $data);
            $this->load->view('template/footer');
        } else {
            $upload_image = $_FILES['picture']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048'; // kb = 2mb   
                $config['encrypt_name'] = true;
                $config['file_ext_tolower'] = true;
                $config['upload_path'] = './assets/img/lenovo/';
                $this->load->library('upload', $config);
                // jika sukses upload ke folder
                if ($this->upload->do_upload('picture')) {
                    $old_image = $data['laptops']['picture'];
                    // menghapus gambar lama yang tergantikan, selain gambar default.jpg
                    if ($old_image != 'default_lenovo.jpg') {
                        unlink(FCPATH . 'assets/img/lenovo/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $name_image =  $new_image;
                    $this->db->set('picture', $name_image);
                } else {
                    // jika gagal upload ke folder menampilkan eror ke web
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $this->upload->display_errors() . ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></div>');
                    redirect('Lenovo');
                }
            } 
            $data = [
                'title' => $this->input->post('title'),
                'price' => $this->input->post('price'),
                'cpu' => $this->input->post('cpu'),
                'ram' => $this->input->post('ram'),
                'storage' => $this->input->post('storage'),
                'grafis' => $this->input->post('grafis'),
                'display' => $this->input->post('display'),
                'os' => $this->input->post('os'),
                'merk' => $this->input->post('merk')
            ];
            $this->M_Laptop->update_data('tb_laptop_lenovo', $data, $id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Successfully edited <strong>' . $data['title']  . '</strong> data! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>'
            );
            redirect('Lenovo/index');
        }
    }

    public function delete($id) {
          $picture = $this->M_Laptop->get_laptop_by_id('tb_laptop_lenovo', $id);
          if ($picture['picture'] != 'default_lenovo.jpg') {
              unlink(FCPATH . 'assets/img/lenovo/' . $picture['picture']);
          }

 
        $this->M_Laptop->delete_data('tb_laptop_lenovo', $id);

        $this->session->set_flashdata('flash', 'deleted');
        redirect('Lenovo');
    }

    
}
