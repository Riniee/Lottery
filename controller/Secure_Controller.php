<?php

require_once '../model/Home_Model.php';


class Secure_Controller 
    
{
    
    
/**
       * 
       * Encryption - Securely Encrypt Strings
       *
       * @param String $string
       *
       * @return String $output - Encrypted String
       *
       */
        
        public function encrypt(&$string)
        {
            
            $secure_key = '0008754063617000';
            $output = false;
            $encrypt_method = 'AES-256-CBC';
            $secret_key =  $secure_key;
            $secret_iv = strrev($secure_key);
            $key = hash('sha256', $secret_key); // hash
            $iv = substr(hash('sha256', $secret_iv), 0, 16);    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
            
        }
        
        
    /**
       * 
       * Decryption - Securely Decrypt Strings
       *
       * @param String $string
       *
       * @return String $output - Decrypted String
       *
       */
        
        public function decrypt($string)
        {
            
            $secure_key = '0008754063617000';
            $output = false;
            $encrypt_method = 'AES-256-CBC';
            $secret_key =  $secure_key;
            $secret_iv = strrev($secure_key);
            $key = hash('sha256', $secret_key); // hash
            $iv = substr(hash('sha256', $secret_iv), 0, 16);    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            return $output;
            
        }
    
    
    /**
       * 
       * Image Uploads - Upload Pictures to the Filesytem (Folder - Uploads)
       *
       * @param $file, $key, $folder, $filename
       *
       */
        
        public function imageUploads($file, $key, $folder, $filename = null)
        {
            
            if (!empty($file) && !empty($key) && !empty($folder)) {
                $tmp = (explode('.',$file[$key]['name']));
                $ext = ".".strtolower(end($tmp));
                $file_name = isset($filename) ? $filename : time().mt_rand(000,999);
                $file_name_ext = $file_name.$ext;
                $file_path = "../uploads/".$folder."/".$file_name_ext;
                $uploaded = move_uploaded_file($file[$key]['tmp_name'], $file_path);
                return $file_name_ext;
            }

        }
    
    
        public function uploadPDF($luck, $db) 
        {
        
            $obj = new Home_Model;
        
            $inserted = $obj->uploadPDF($luck, $db);
        
            if ($inserted) {
                
                return true;
                
            }
        
            return false;
        
        }
        
        
    
}
