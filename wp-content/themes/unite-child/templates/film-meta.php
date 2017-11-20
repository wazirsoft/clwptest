<?php

// get film meta using post id
extract(getFilmMeta(get_the_ID()));

?>

<ul>
	<?php if ($countries) : ?>
    <li>
        <strong>Countries:</strong> <?php echo $countries; ?>
    </li>
	<?php endif ?>
	<?php if ($genres) : ?>
    <li>
        <strong>Genre:</strong> <?php echo $genres; ?>
    </li>
	<?php endif ?>

	<?php if ($ticketPrice) : ?>
    <li>
        <strong>Ticket Price:</strong> <?php echo $ticketPrice; ?>
    </li>
	<?php endif ?>
	<?php if ($releaseDate) : ?>
    <li>
        <strong>Release Date:</strong> <?php echo $releaseDate; ?>
    </li>
	<?php endif ?>
</ul>