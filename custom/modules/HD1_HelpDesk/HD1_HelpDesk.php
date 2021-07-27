<?php
    require_once "modules/HD1_HelpDesk/HD1_HelpDesk.php";

    class HD1_HelpDesk_c extends HD1_HelpDesk {
        function get_list_view_data() {
            $temp_array = parent::get_list_view_data();
            $temp_array['NAME'] = '<a href="#"><span>Created</span></a>';
            $temp_array['RANDOM_FIELD_C'] = fetch_random_name();
            return $temp_array;
        }
    }
?>