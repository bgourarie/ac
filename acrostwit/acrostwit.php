<?php 

/**
1) file opener (from remote url)
2) For each line, extract the first letters
 a) if it's more than 4 words!
 b) store them in an array i guess
 c) lowercase them all
3) using array_intersect, find the ones which are words?

*/
$readme = "
Twit-crostic maker.

Reads in a file of words and a file of 'tweets'. Parses the tweets to see which internet poets have made beautiful acrostic poems.
This readme and the results are done by the PHP file in this repository. 


A few notes:
1) make sure to trim and lowercase everything
2) No external libraries were used for this, because it wasn't really necessary
3) 3 < 4
4) there's some duplicates -- in the list of words. I have left them in on the assumption that they're meant to be there. Because one tuba is never enough.
The code goes through all the tweets and tries to make a 'word' out of the first letter of each word in the tweet. If the word is too short or contains invalid characters, it's discarded. Otherwise the word gets saved into an array as the key alongside the original tweet.

Results are listed below, after some tests.



Test Values (Key = test, Value = result of test. Blank = fail, or if value == key its success.)
";
echo $readme;

$tests = array( 
	'req a-z 4+ chars' => array(
	'benbenbenbenben' =>	require_a_to_z("benbenbenbenben"), // t
	'1sadpuppy' =>	require_a_to_z("1sadpuppy"), // f
	'#notmychristian' =>	require_a_to_z("#notmychristian"), // f
 	'hashtagnotmychristian' =>	require_a_to_z("hashtagnotmychristian"), // t
	'MyWifiPasswordIsMyNameSixTimes' =>	require_a_to_z("MyWifiPasswordIsMyNameSixTimes"), //f
	'My Wifi Password Is My Name Six Times' =>	require_a_to_z("My Wifi Password Is My Name Six Times"), // f
	'RT@b3nb3nb3n' =>	require_a_to_z("RT@b3nb3nb3n"), // f
	'abc' =>	require_a_to_z("abc"), // f
		),
	'get_first_letters' => array(
		'My attitude towards college: https://t.co/8VaStW8SSV'	=> parse_first_letters("My attitude towards college: https://t.co/8VaStW8SSV"),
		'Love is not jealous'	=> parse_first_letters("Love is not jealous"),
		'let this be your motivation to go to sch😂😂✋😘'	=> parse_first_letters("let this be your motivation to go to sch😂😂✋😘"),
		'RT @SuryaElyna: @ayeulfa 😂😂 let this be your motivation to go to sch😂😂✋😘'	=> parse_first_letters("RT @SuryaElyna: @ayeulfa 😂😂 let this be your motivation to go to sch😂😂✋😘"),
		'RT @sis_bi32: スマホでこっそりお小遣い稼ぎの裏ワザ！'	=> parse_first_letters("RT @sis_bi32: スマホでこっそりお小遣い稼ぎの裏ワザ！"),
		'Please sunshine'	=> parse_first_letters("Please sunshine?"),
		'De nada'	=> parse_first_letters("De nada")
		)
	);
print_r($tests);

function get_tweets_file(){
	return fopen("https://dl.dropboxusercontent.com/u/483778/AdColony/CandidateQuestions/TweetAcrostics/tweets.txt", "r");
}
function get_words_file(){
	return fopen("https://dl.dropboxusercontent.com/u/483778/AdColony/CandidateQuestions/TweetAcrostics/words-lowercase.txt","r");
}
/*
Checks if a string contains anything but a-z inclusive, returning the string, or false if it has non a-z chars
*/
function require_a_to_z($word){
	if(preg_match("/\A[a-z]{4,}\z/",$word))
		return trim($word);
	return false; 
}
// returns false on failure, or a lowercase string on success
function parse_first_letters($tweet){
	$arr = explode(" ",$tweet);
	if(sizeof($arr)<4)
		return false;
	$word = '';
	foreach($arr as $c){
		$word .= strtolower($c[0]);
	}
	return require_a_to_z(trim($word));
}

$tweet_handle = get_tweets_file();
$tweet_array = array('words'=>array(),'tweets'=>array());
if($tweet_handle){
	// setting line length based on a few bytes more thanhttp://stackoverflow.com/questions/5999821/how-many-bytes-of-memory-is-a-tweet
	 while (($line = fgets($tweet_handle, 600)) !== false) {
    	$curr_word = parse_first_letters($line);
			if($curr_word){
				if(array_key_exists(trim($curr_word),$tweet_array) 
					&& ! in_array(trim($line),$tweet_array[trim($curr_word)])
					){
					$tweet_array[$curr_word][] = trim($line);
				}else{
					$tweet_array[$curr_word] = array(trim($line)); 
				}
  		} 
  }
  if (!feof($tweet_handle)) {
    echo "Error: unexpected fgets() fail\n";
  }
  fclose($tweet_handle);
}


$words_handle = get_words_file();
if($words_handle){
	while(($curr_word_line = fgets($words_handle, 4096)) !== false) {
		$matches = $tweet_array[trim($curr_word_line)];
		if(sizeof($matches)>0){
			foreach($matches as $tweet){
				echo trim($curr_word_line)." - ".$tweet."\n";
			}
		}
	}
	if (!feof($words_handle)) {
    echo "Error: unexpected fgets() fail\n";
  }
  fclose($words_handle);
}
