<?php

$color = filter_input(INPUT_POST, FILTER_UNSAFE_RAW, 'color');

?>

<?php if ($color) : ?>
    <p>You selected <span style="color:<?php echo $color ?>"><?php echo $color ?></span></p>
    <p><a href="index.php">Back to the form</a></p>
<?php else : ?>
    <p>You did not select any color</p>
<?php endif ?>