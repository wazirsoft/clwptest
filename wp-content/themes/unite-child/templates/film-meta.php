<?php

// get film meta using post id
extract(getFilmMeta(get_the_ID()));

?>

<ul>
	<?php if ($countries) : ?>
    <li>
        <strong><?php echo __('Countries', 'unite-child'); ?>:</strong> <?php echo $countries; ?>
    </li>
	<?php endif ?>
	<?php if ($genres) : ?>
    <li>
        <strong><?php echo __('Genre', 'unite-child'); ?>:</strong> <?php echo $genres; ?>
    </li>
	<?php endif ?>

	<?php if ($ticketPrice) : ?>
    <li>
        <strong><?php echo __('Ticket Price', 'unite-child'); ?>:</strong> <?php echo $ticketPrice; ?>
    </li>
	<?php endif ?>
	<?php if ($releaseDate) : ?>
    <li>
        <strong><?php echo __('Release Date', 'unite-child'); ?>:</strong> <?php echo $releaseDate; ?>
    </li>
	<?php endif ?>
</ul>