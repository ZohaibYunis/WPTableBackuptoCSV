<?php
/**
 * @package table-data-csv-backup-plugin
 * @version 1.0.0
 */
/*
Plugin Name: table data csv backup
Plugin URI: http://aspiranthawks.com/
Description: Admin dashboard and information wiget
Author: Muhammad Zohaib
Version: 1.0.0
Author URI: https://xcyzx.com/
Author URI: https://xcyzx.com/
*/


// Admin plugin in admin
// Admin Side Create a page --  A button to export
// Exporrt all table data


add_action("admin_menu" ,  'tdcb_create_plugin_menu');

// admin panel
function tdcb_create_plugin_menu(){
    // WordPress function for adding admin side menu
    add_menu_page("CSV Data Backup" , "CSV Data Backup", "manage_options" ,
        'csv-data-backup' , 'tdcb_export_form' ,  'dashicon-database-export'  ,8 );
}

// form layout
function tdcb_export_form(){
    ob_start();
    include_once  plugin_dir_path(__FILE__) . "template/table_data_backup.php";
    $layout = ob_get_contents();
    ob_end_clean();
    echo  $layout;
}

add_action("admin_init" ,  'tdcb_handle_form_export');
function tdcb_handle_form_export(){
    if(isset($_POST['tdcb_export_button'])){
        global $wpdb;
        $table_prefix  = $wpdb->prefix;
        $table_name    = $table_prefix . "students_data";
        $students      = $wpdb->get_results("SELECT * FROM {$table_name}" , ARRAY_A);

        if(empty($students)){
            echo 'No Error Records'; die;
        }

        $filenmame = 'students_data'.time().'.csv';
        header("Content-Type: text/csv; charset=utf-8;");
        header("Content-Disposition: attachment; filename=".$filenmame);

        $output = fopen("php://output", "w");
        fputcsv($output , array_keys($students[0]));

        foreach ($students as $student) {
            fputcsv($output , $student);
        }
        fclose($output);
        exit;
    }

}

