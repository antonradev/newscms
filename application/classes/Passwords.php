<?php

class Security {

    /** PBKDF2 Implementation (described in RFC 2898)
       *
       *  @param string p password
       *  @param string s salt
       *  @param int c iteration count (use 1000 or higher)
       *  @param int kl derived key length
       *  @param string a hash algorithm
       *
       *  @return string derived key
        */
    public function pbkdf2($password, $salt, $algorithm = 'sha512', $count = 20000, $key_length = 128, $raw_output = false) {
        if (!in_array($algorithm, hash_algos(), true)) {
            exit('pbkdf2: Hash algoritme is niet geinstalleerd op het systeem.');
        }

        if ($count <= 0 || $key_length <= 0) {
            $count = 20000;
            $key_length = 128;
        }

        $hash_length = strlen(hash($algorithm, "", true));
        $block_count = ceil($key_length / $hash_length);

        $output = "";
        for ($i = 1; $i <= $block_count; $i++) {
            $last = $salt . pack("N", $i);
            $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
            for ($j = 1; $j < $count; $j++) {
                $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
            }
            $output .= $xorsum;
        }

        if ($raw_output) {
            return substr($output, 0, $key_length);
        } else {
            return base64_encode(substr($output, 0, $key_length));
        }
    }

    public function salt() {
        return uniqid(mt_rand(), true);
    }

}

/*
  // The password the user entered
  $user_password = "fsdfdsjs";

  // Instantiate a new Security object
  $s = new Security;

  // Generate a Salt
  $salt = $s->salt();

  // Generate a secure password
  $secure_password = $s->pbkdf2($user_password, $salt, 1000, 32);

  // Store secure password and Salt in database

  if($s->pbkdf2($user_password, $salt, 1000, 32) == $secure_password){
  // Correct password
  }

 */
?>