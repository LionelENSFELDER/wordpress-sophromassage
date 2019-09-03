
<style>
body{
    background-color: <?php echo get_option('admin_background_color');?>; 
}
</style>

<form action="" method="POST">
    <div class="wrap nosubsub">
        <?php screen_icon('edit'); ?>
        <h2 style="color: <?php echo get_option('admin_background_color'); ?>;" ><?php echo esc_html( $title ); ?></h2>
        <?php 
            if($color_exist){
                echo "<p>fdgdfgdfgdfg</p>";
            }
        ?>
        <?php echo "Actuellement la valeur de l'arrière plan est"; ?><input type="text"  value='<?php echo get_option('admin_background_color'); ?>' readonly>

        </br>
        <?php echo "Entrez une la valeur de la couleur de l'arrière plan de l'interface admin de Wordpress"; ?>
        </br>
        <input type="color" name="admin_color" value="<?php echo get_option('admin_background_color');?>">
        <button type="submit">Envoyer</button>
    </div>
</form>

<?php

if(isset($_POST['admin_color'])){
    $color = $_POST['admin_color'];
    $res_get_option = get_option('admin_background_color');

    if ($res_get_option && $res_get_option !== $color){
        update_option('admin_background_color', $color);
        var_dump($_SERVER['PHP_SELF']);
        echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";
    }else if (!$res_get_option){
        $res = add_option('admin_background_color', $color);
        echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";
    }else{
        $color_exist == TRUE;
    }
}
