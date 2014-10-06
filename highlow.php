<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your name? ');

// Get the input from user
$firstName = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $firstName,Want to play a game?\n");

// Get the input from user
$answer = trim(fgets(STDIN));

// Output the user's name
if($answer == 'yes') {
	fwrite(STDOUT, "Great lets play. Guess a number between 1 and 100. \n");
} else { 
	fwrite(STDOUT, "Awwwww, you're no fun.\n");
}


$number = rand(0, 100);
$guess = trim(fgets(STDIN));
$count = 1;

while($guess != $number){
	if($guess < $number){ 
		fwrite(STDOUT, "Try Higher . \n"); 
		$guess = trim(fgets(STDIN));}

	elseif ($guess > $number) {
		fwrite(STDOUT, "Try Lower . \n"); 
		$guess = trim(fgets(STDIN));}

	$count++;}
	
	fwrite(STDOUT, "Good guess, $firstName How'd you know?" . "\n" );
	echo $count  . "Times it took" . "\n";