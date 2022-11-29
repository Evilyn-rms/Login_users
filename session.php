<?php
class Session {
    public function __construct() {
        if(session_status() != 2){
            
        session_start();
    }
    }
    public function set(string $index, $info) {
        if(!empty($index)) {
            $_SESSION[$index] = $info;
        }
    }
    public function get(string $index) {
        if(empty($index)) return '';
        return isset($_SESSION[$index]) ? $_SESSION[$index] : '';
    }
    public function destroy() {
        session_destroy();
    }
}