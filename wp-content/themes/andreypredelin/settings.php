<?php
function add_option_field_to_general_admin_page(){
    $option_name = 'phone_pr_option';

    // регистрируем опцию
    register_setting( 'general', $option_name );

    // добавляем поле
    add_settings_field(
        'phone_pr_setting-id',
        'Номер телефона',
        'phone_pr_setting_callback_function',
        'general',
        'default',
        array(
            'id' => 'phone_pr_setting-id',
            'option_name' => 'phone_pr_option'
        )
    );
}
function phone_pr_setting_callback_function( $val ){
    $id = $val['id'];
    $option_name = $val['option_name'];
    ?>
    <input
        type="text"
        name="<?php echo $option_name ?>"
        id="<?php echo $id ?>"
        value="<?php echo esc_attr( get_option($option_name) ) ?>"
        />
<?php
}
add_action('admin_menu', 'add_option_field_to_general_admin_page');


function address_pr_add_option_field_to_general_admin_page(){
    $option_name = 'address_pr_option';

    // регистрируем опцию
    register_setting( 'general', $option_name );

    // добавляем поле
    add_settings_field(
        'address_pr_setting-id',
        'Адрес',
        'phone_pr_setting_callback_function',
        'general',
        'default',
        array(
            'id' => 'address_pr_setting-id',
            'option_name' => 'address_pr_option'
        )
    );
}
function address_pr_setting_callback_function( $val ){
    $id = $val['id'];
    $option_name = $val['option_name'];
    ?>
    <input
        type="text"
        name="<?php echo $option_name ?>"
        id="<?php echo $id ?>"
        value="<?php echo esc_attr( get_option($option_name) ) ?>"
        />
<?php
}
add_action('admin_menu', 'address_pr_add_option_field_to_general_admin_page');

function handle_shortcode($para){
    //get_options
    return get_option($para['para']);
}
add_shortcode('getOption', 'handle_shortcode');

?>