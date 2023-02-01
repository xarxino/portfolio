<?php function reading_time()
{
	// First, we need to calculate the reading time of our blog post
	function calculateReadingTime($words)
	{
		// We'll assume an average reading speed of 200 words per minute
		$readingSpeed = 200;
		// Divide the total number of words in the post by the reading speed
		$minutes = $words / $readingSpeed;
		// Round to the nearest whole number
		$roundedMinutes = ceil($minutes);
		return $roundedMinutes;
	}

	// Next, we'll grab the total number of words in our post
	$postContent = get_the_content();
	$words = str_word_count($postContent);

	// Then, we'll use the calculateReadingTime function to get the reading time
	$readingTime = calculateReadingTime($words);

	// Finally, we'll display the reading time on the page
	echo '<i class="ph-clock-fill"></i>' . $readingTime . ' minutes';
}
