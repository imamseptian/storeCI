<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_user');
    }

    public function index()
    {

        $data['title'] = 'My Profile';
        $data['user'] = $this->Model_user->getUser();
        $data['store'] = $this->Model_user->getStoreData();

        $ayy = [
            'id_store' => $data['store']['id_store'],
            'store_name' => $data['store']['store_name']
        ];
        $this->session->set_userdata($ayy);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function set_store()
    {
        $data['user'] = $this->Model_user->getUser();
        $data['title'] = 'Set your Store';
        $this->form_validation->set_rules('sName', 'Store Name', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('contact', 'Contact', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('fund', 'Starting Fund', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'MePeT Set Store';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('user/set_store');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'id' => $data['user']['id'],
                'store_name' => htmlspecialchars($this->input->post('sName', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'contact' => htmlspecialchars($this->input->post('contact', true)),
                'description' => htmlspecialchars($this->input->post('description', true)),
                'fund' => htmlspecialchars($this->input->post('fund', true)),
            ];

            $this->db->insert('store', $data);
            redirect('user');
        }
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);

            ///upload gambar

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.PNG') {
                        unlink(FCPATH . 'assets/img/profile' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Your profile has been updated!</div>');
            redirect('user');
        }
    }

    public function my_store()
    {
        $data['title'] = 'My Store';
        $data['user'] = $this->Model_user->getUser();
        $data['store'] = $this->Model_user->getStoreData();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/my_store', $data);
        $this->load->view('templates/footer');
    }

    public function edit_store()
    {
        $data['title'] = 'Edit Store';
        $data['user'] = $this->Model_user->getUser();
        $data['store'] = $this->Model_user->getStoreData();

        $this->form_validation->set_rules('store_name', 'Store name', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('contact', 'Contact', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit_store', $data);
            $this->load->view('templates/footer');
        } else {

            $arr = [
                'store_name' => $this->input->post('store_name', true),
                'address' => $this->input->post('address', true),
                'description' => $this->input->post('description', true),
                'contact' => $this->input->post('contact', true),
                'fund' => $this->input->post('fund', true)
            ];

            $this->db->where('id_store', $data['store']['id_store']);
            $this->db->update('store', $arr);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Your Store has been updated!</div>');
            redirect('user/my_store');
        }
    }

    public function storage()
    {
        $data['user'] = $this->Model_user->getUser();
        $data['storage'] = $this->Model_user->getStorage();
        $data['title'] = 'My Storage';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/storage', $data);
        $this->load->view('templates/footer');
    }

    public function add_product()
    {
        $data['user'] = $this->Model_user->getUser();
        $data['title'] = 'Add a Product';
        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('stock', 'Stock', 'required|trim|numeric');
        $this->form_validation->set_rules('price', 'Price', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add_product', $data);
            $this->load->view('templates/footer');
        } else {
            $num1 = 1;
            $num2 = $this->input->post('stock');

            if ((int) $num2 < (int) $num1) {
                $stat = 'Out of Stock';
            } else {
                $stat = 'Available';
            }

            $arr = [
                'id_store' => $this->session->userdata('id_store'),
                'product_name' => $this->input->post('product_name', true),
                'description' => $this->input->post('description', true),
                'stock' => $this->input->post('stock', true),
                'price' => $this->input->post('price', true),
                'status' => $stat
            ];

            $arr1 = [
                'id_store' => $this->session->userdata('id_store'),
                'name' => 'Add product',
                'type' => '_',
                'detail' => 'Adding ' . $this->input->post('stock') . ' ' . $this->input->post('product_name') . ' to Storage',
                'cost' => '_',
                'date' => time()
            ];

            $this->db->insert('products', $arr);
            $this->db->insert('history', $arr1);
            redirect('user/storage');
        }
    }

    public function detail($id)
    {
        $data['user'] = $this->Model_user->getUser();
        $data['product'] = $this->Model_user->getProduct($id);
        $data['title'] = $data['product']['product_name'] . ' Detail';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail_product', $data);
        $this->load->view('templates/footer');
    }

    public function edit_product($id)
    {
        $data['user'] = $this->Model_user->getUser();
        $data['product'] = $this->Model_user->getProduct($id);
        $data['title'] = 'Edit ' . $data['product']['product_name'];

        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('stock', 'Stock', 'required|trim|numeric');
        $this->form_validation->set_rules('price', 'Price', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit_product', $data);
            $this->load->view('templates/footer');
        } else {

            $num1 = 1;
            $num2 = $this->input->post('stock');

            if ((int) $num2 < (int) $num1) {
                $stat = 'Out of Stock';
            } else {
                $stat = 'Available';
            }

            $arr = [
                'id_store' => $this->session->userdata('id_store'),
                'product_name' => $this->input->post('product_name', true),
                'description' => $this->input->post('description', true),
                'stock' => $this->input->post('stock', true),
                'price' => $this->input->post('price', true),
                'status' => $stat
            ];

            $arr1 = [
                'id_store' => $this->session->userdata('id_store'),
                'name' => 'Edit product',
                'type' => '_',
                'detail' => 'Edit ' . $this->input->post('product_name') . ' Product information',
                'cost' => '_',
                'date' => time()
            ];

            $this->db->where('id_product', $data['product']['id_product']);
            $this->db->update('products', $arr);
            $this->db->insert('history', $arr1);
            redirect('user/storage');
        }
    }

    public function delete($id)
    {
        $data['product'] = $this->Model_user->getProduct($id);
        $arr1 = [
            'id_store' => $this->session->userdata('id_store'),
            'name' => 'Delete product',
            'type' => '_',
            'detail' => 'Delete ' . $data['product']['product_name'] . ' from Storage',
            'cost' => '_',
            'date' => time()
        ];
        $this->db->insert('history', $arr1);
        $this->db->delete('products', ['id_product' => $id]);
        redirect('user/storage');
    }

    public function trading()
    {
        $data['user'] = $this->Model_user->getUser();
        $data['storage'] = $this->Model_user->getSellingList();
        $data['title'] = 'Trade and Sell Product';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/trading', $data);
        $this->load->view('templates/footer');
    }

    public function add_record()
    {
        $data['user'] = $this->Model_user->getUser();
        $data['store'] = $this->Model_user->getStoreData();
        $data['title'] = 'Add new Transactions Record';

        $limit = $data['store']['fund'];

        $this->form_validation->set_rules('record_name', 'Record Name', 'required|trim');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('detail', 'detail', 'required|trim');
        if ($this->input->post('type') == 'Spending') {
            $this->form_validation->set_rules('cost', 'Price', 'required|trim|numeric|less_than_equal_to[' . $limit . ']');
        } else {
            $this->form_validation->set_rules('cost', 'Price', 'required|trim|numeric');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add_record', $data);
            $this->load->view('templates/footer');
        } else {

            $num1 = $this->input->post('cost');
            $num2 = $data['store']['fund'];

            if ($this->input->post('type') == 'Income') {
                $remain = (int) $num2 + (int) $num1;
            } else {
                $remain = (int) $num2 - (int) $num1;
            }



            $arr = [
                'id_store' => $this->session->userdata('id_store'),
                'name' => $this->input->post('record_name', true),
                'type' => $this->input->post('type', true),
                'detail' => $this->input->post('detail', true),
                'cost' => $this->input->post('cost', true),
                'date' => time()
            ];

            $arr1 = [
                'fund' => $remain
            ];

            $this->db->insert('history', $arr);

            $this->db->where('id_store', $data['store']['id_store']);
            $this->db->update('store', $arr1);
            redirect('user/trading');
        }
    }

    public function Sell($id)
    {
        $data['user'] = $this->Model_user->getUser();
        $data['store'] = $this->Model_user->getStoreData();
        $data['product'] = $this->Model_user->getProduct($id);
        $data['title'] = 'Sell ' . $data['product']['product_name'];

        $limit = $data['product']['stock'];

        $this->form_validation->set_rules('number', 'Selling', 'required|numeric|trim|less_than_equal_to[' . $limit . ']');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/selling', $data);
            $this->load->view('templates/footer');
        } else {
            $num1 = $this->input->post('number');
            $num2 = $data['product']['price'];
            $sum = (int) $num1 * (int) $num2;
            $arr = [
                'id_store' => $this->session->userdata('id_store'),
                'name' => 'Sell a thing',
                'type' => 'Income',
                'detail' => 'Selling  ' . $this->input->post('number') . ' ' . $data['product']['product_name'] . ' to customer',
                'cost' => $sum,
                'date' => time()
            ];

            if ((int) $num1 == (int) $limit) {
                $jml = 'Out of Stock';
            } else {
                $jml = 'Available';
            }

            $sisa = (int) $limit - (int) $num1;

            $arr1 = [
                'stock' => $sisa,
                'status' => $jml
            ];

            $a1 = $data['store']['fund'];
            $b1 = $this->input->post('number');
            $c1 = $data['product']['price'];
            $d1 = (int) $b1 * (int) $c1;
            $e1 = (int) $a1  + (int) $d1;

            $arr2 = [
                'fund' => $e1
            ];

            $this->db->insert('history', $arr);



            $this->db->where('id_product', $data['product']['id_product']);
            $this->db->update('products', $arr1);

            $this->db->where('id_store', $data['store']['id_store']);
            $this->db->update('store', $arr2);



            redirect('user/trading');
        }
    }

    public function finance()
    {
        $data['title'] = 'Finance and Record';
        $data['user'] = $this->Model_user->getUser();
        $data['store'] = $this->Model_user->getStoreData();
        $data['history'] = $this->Model_user->getHistory();

        $data['income'] = $this->Model_user->countIncome();
        $data['spending'] = $this->Model_user->countSpending();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/finance', $data);
        $this->load->view('templates/footer');
    }
}
