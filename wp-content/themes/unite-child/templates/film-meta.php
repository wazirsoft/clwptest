<?php
global $post;

$countries = wp_get_post_terms( get_the_ID(), 'countries', array("fields" => "names"));
if (count($countries) > 0) {
	$countries = implode(', ', $countries);
}else {
	$countires = false;
}

$genres = wp_get_post_terms( get_the_ID(), 'genres', array("fields" => "names"));
if (count($genres) > 0) {
	$genres = implode(', ', $genres);
}else {
	$genres = false;
}

$ticketPrice = get_field( "ticket_price" );
$releaseDate = get_field( "release_date" );

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