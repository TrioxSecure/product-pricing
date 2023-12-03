<div class="wrap">
    <h1>Custom Pricing Settings</h1>
    <form method="post" action="">
        <?php
        if (isset($_POST['update_custom_pricing_settings'])) {
            // Handle form submission and update options
            update_option('pleat_value', intval($_POST['pleat_value']));
            update_option('roll_width_size', intval($_POST['roll_width_size']));
            update_option('increase_in_raw_material', intval($_POST['increase_in_raw_material']));
            update_option('price_of_one_meter', floatval($_POST['price_of_one_meter']));
            echo '<div class="updated"><p>Settings updated!</p></div>';
        }
        ?>

        <label for="pleat_value">Pleat Value:</label>
       <p> <input type="number" name="pleat_value" value="<?php echo esc_attr(get_option('pleat_value', 2)); ?>" /></p>

        <label for="roll_width_size">Roll Width Size:</label>
        <p><input type="number" name="roll_width_size" value="<?php echo esc_attr(get_option('roll_width_size', 280)); ?>" /></p>

        <label for="increase_in_raw_material">Increase in Raw Material:</label>
        <p><input type="number" name="increase_in_raw_material" value="<?php echo esc_attr(get_option('increase_in_raw_material', 30)); ?>" /></p>

        <label for="price_of_one_meter">Price of 1 Meter:</label>
        <p><input type="number" step="0.01" name="price_of_one_meter" value="<?php echo esc_attr(get_option('price_of_one_meter', 20)); ?>" /></p>

        <input type="submit" name="update_custom_pricing_settings" class="button-primary" value="Update Settings" />
    </form>
</div>
