<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ThingSpeak_model');
        $this->load->model('ThingSpeak_model2');

    }
    
    public function index(){
        $data['title'] = "WTP Network - HOME PAGE";
        $data['Headbar'] = "Perum Peruri Karawang";
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_topbar', $data);
        $this->load->view('home');
        $this->load->view('templates/home_footer', $data);
    }
    public function Menara() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - Water Tower PAGE";
        $data['Headbar'] = "Water Tower";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/water_sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('watertower', $data);
        $this->load->view('templates/footer', $data);
    }

    public function bi() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model2->get_thingspeak_data_meteran();
        $json_data1 = $this->ThingSpeak_model2->get_thingspeak_data_limit();
    
        // Ambil data terakhir dari ThingSpeak_data_meteran
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'created_at' => "",
            );
        }
    
        // Ambil data terakhir dari ThingSpeak_data_limit
        if (!empty($json_data1['feeds'])) {
            $latest_feed1 = $json_data1['feeds'][0];
            $data['fieldlimit'] = isset($latest_feed1['field1']) ? $latest_feed1['field1'] : "Tidak ada data";
        } else {
            // Jika feeds kosong
            $data['fieldlimit'] = "Tidak ada data";
        }
    
        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - Water Tower PAGE";
        $data['Headbar'] = "Supply Valve Kawasan Bank Indonesia";
        $data['grafik1'] = "https://thingspeak.com/channels/1715266/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/bi_sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bi', $data);
        $this->load->view('templates/footer', $data);
    }



    public function MAKO() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - MAKO PAGE";
        $data['Headbar'] = "Node Kawasan Markas Komando";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/MAKO', $data);
        $this->load->view('templates/footer', $data);
    }
    public function SDM() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - SDM PAGE";
        $data['Headbar'] = "Node Kawasan Gedung SDM";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/SDM', $data);
        $this->load->view('templates/footer', $data);
    }
    public function LINIA() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - UTAS Lini A PAGE";
        $data['Headbar'] = "Node Kawasan Gedung Produksi Uang Kertas LINI A";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/LINIA', $data);
        $this->load->view('templates/footer', $data);
    }
    public function LINIB() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - UTAS Lini B PAGE";
        $data['Headbar'] = "Node Kawasan Gedung Produksi Uang Kertas LINI B";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/LINIB', $data);
        $this->load->view('templates/footer', $data);
    }
    public function TASGANU() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - TASGANU PAGE";
        $data['Headbar'] = "Node Kawasan Gedung Tasganu";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/TASGANU', $data);
        $this->load->view('templates/footer', $data);
    }
    public function PRODUGAM() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - PRODUGAM PAGE";
        $data['Headbar'] = "Node Gedung Produksi Uang Logam";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/PRODUGAM', $data);
        $this->load->view('templates/footer', $data);
    }
    public function SICPA() {
        // Panggil model untuk mendapatkan data
        $json_data = $this->ThingSpeak_model->get_thingspeak_data();

        // Ambil data terakhir
        if (!empty($json_data['feeds'])) {
            $latest_feed = $json_data['feeds'][0];
            $data = array(
                'field1' => isset($latest_feed['field1']) ? $latest_feed['field1'] : "Tidak ada data",
                'field2' => isset($latest_feed['field2']) ? $latest_feed['field2'] : "Tidak ada data",
                'field3' => isset($latest_feed['field3']) ? $latest_feed['field3'] : "Tidak ada data",
                'field4' => isset($latest_feed['field4']) ? $latest_feed['field4'] : "Tidak ada data",
                'field5' => isset($latest_feed['field5']) ? $latest_feed['field5'] : "Tidak ada data",
                'field6' => isset($latest_feed['field6']) ? $latest_feed['field6'] : "Tidak ada data",
                'field7' => isset($latest_feed['field7']) ? $latest_feed['field7'] : "Tidak ada data",
                'field8' => isset($latest_feed['field8']) ? $latest_feed['field8'] : "Tidak ada data",
                'created_at' => isset($latest_feed['created_at']) ? $latest_feed['created_at'] : "",
            );
        } else {
            // Jika feeds kosong
            $data = array(
                'field1' => "Tidak ada data",
                'field2' => "Tidak ada data",
                'field3' => "Tidak ada data",
                'field4' => "Tidak ada data",
                'field5' => "Tidak ada data",
                'field6' => "Tidak ada data",
                'field7' => "Tidak ada data",
                'field8' => "Tidak ada data",
                'created_at' => "",
            );
        }

        // Load view dengan data yang sudah didapat
        $data['title'] = "WTP Network - PT SICPA PAGE";
        $data['Headbar'] = "Node Kawasan Gedung PT SICPA Security ink.";
        $data['grafik']= "https://thingspeak.com/channels/1798532/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=24&type=line&width=600&height=275";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('NODE/SICPA', $data);
        $this->load->view('templates/footer', $data);
    }
}
