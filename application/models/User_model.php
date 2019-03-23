<?php 
    class User_model extends CI_Model{

        public function register($enc_password){
            //User data array
            $data = array(
                'name' => $this->input->post('name'), /*I think we can access 'post' variables here because of 'form' helper  */
                'email' => $this->input->post('email'),/*other way is passing as variable like  '$enc_password' is passed from controller*/
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'zipcode' => $this->input->post('zipcode')
            );

            //Insert user
            return $this->db->insert('users', $data);
        }

        //Log user in
        public function login($username, $password){
            //Validate
            $this->db->where('username', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('users');
            
            if($result->num_rows() == 1){
                //returns user id
                return $result->row(0)->id;
            }else{
                return false;
            }
        }

        // Check username exists
        public function check_username_exists($username){
            $query = $this->db->get_where('users', array('username' => $username));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }
        }

        // Check email exists
        public function check_email_exists($email){
            $query = $this->db->get_where('users', array('email' => $email));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }
        }
    }