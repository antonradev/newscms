<?php

class Category extends Model {

    public function select_all_from_categories() {

        $this->_db->query("SELECT * from categories");
        $this->row_category = $this->_db->resultset();
    }


    public function select_categories_names() {

        if (ctype_digit($_GET['id'])) {
            $category_id = $_GET['id'];
        } else {
            header('Location: http://newscms.dev/');
        }

        $this->_db->query("SELECT * from categories WHERE category_id = '$category_id'");
        $this->row_categories_names = $this->_db->resultset();

        foreach ($this->row_categories_names as $category_name) {
            echo $category_name['category_name'];
        }
    }

    public function build_category_menu() {
        $this->select_all_from_categories();
        foreach ($this->row_category as $row) {
            require VIEWS_PATH . 'categories/menu.php';
        }
    }

    public function display_category_items() {

        if (ctype_digit($_GET['id'])) {
            $this->_id = $_GET['id'];
        } else {
            header('Location: http://newscms.dev/');
        }

        foreach ($this->_rows as $row) {
            require VIEWS_PATH . 'categories/item_box.php';
        }
    }

}

?>