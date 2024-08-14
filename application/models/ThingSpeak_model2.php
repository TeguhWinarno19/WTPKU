<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThingSpeak_model2 extends CI_Model {

    public function get_thingspeak_data_meteran() {
        $channelID = '1715266';
        $url = "https://api.thingspeak.com/channels/$channelID/feeds.json?results=1";

        // Ambil data dari ThingSpeak
        $data = file_get_contents($url);
        $json_data = json_decode($data, true);

        // Kembalikan data yang sudah diambil
        return $json_data;
    }
    public function get_thingspeak_data_limit() {
        $channelID = '1715269';
        $url = "https://api.thingspeak.com/channels/$channelID/feeds.json?results=1";

        // Ambil data dari ThingSpeak
        $data = file_get_contents($url);
        $json_data = json_decode($data, true);

        // Kembalikan data yang sudah diambil
        return $json_data;
    }
}