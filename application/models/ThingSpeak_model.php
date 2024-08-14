<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThingSpeak_model extends CI_Model {

    public function get_thingspeak_data() {
        $channelID = '1798532';
        $url = "https://api.thingspeak.com/channels/$channelID/feeds.json?results=1";

        // Ambil data dari ThingSpeak
        $data = file_get_contents($url);
        $json_data = json_decode($data, true);

        // Kembalikan data yang sudah diambil
        return $json_data;
    }
}
