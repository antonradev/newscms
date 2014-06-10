<?php

class Sidebar extends Model {

    public function show_latests() {

        $this->_db->query("SELECT * from posts LIMIT 10");
        $this->row_latests = $this->_db->resultset();

        $latests = array();

        foreach ($this->row_latests as $latest) {
            $latests[] = $latest;

            print '<li><a href="post.php?id='. $latest['post_id'] .'" title="' . $latest['post_title'] . '" >' .
                    $latest['post_title'] . '</a></li>';
        }
        
    }

}

?>
