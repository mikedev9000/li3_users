<?php
/**
 * Lithium Sphere: communized sphere of influence
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://www.opensource.org/licenses/MIT The MIT License
 */
foreach($users as $user):
?>

<h1><?php echo $user->_id;?></h1>
<?php echo $user->email;?>

<?php endforeach; ?>