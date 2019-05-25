<?php
function get_page_by_id($id) {
    global $page;
    if (array_key_exists($id, $page)) {
        return $page[$id];
    }
    return false;
}
