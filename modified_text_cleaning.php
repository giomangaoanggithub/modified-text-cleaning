<?php

$sample_essay = "Hello Gio, I know you have a hard time facing this darkest hour, but not to worry you're gonna be okay, you're going to be okay.";

$sample_essay = explode(" ", strtolower($sample_essay));

for ($i = 0; $i < count($sample_essay); $i++){
    if((ord($sample_essay[$i][strlen($sample_essay[$i])-1]) > 31 && ord($sample_essay[$i][strlen($sample_essay[$i])-1]) < 48) || (ord($sample_essay[$i][strlen($sample_essay[$i])-1]) > 57 && ord($sample_essay[$i][strlen($sample_essay[$i])-1]) < 65) || (ord($sample_essay[$i][strlen($sample_essay[$i])-1]) > 90 && ord($sample_essay[$i][strlen($sample_essay[$i])-1]) < 97) || (ord($sample_essay[$i][strlen($sample_essay[$i])-1]) > 122 && ord($sample_essay[$i][strlen($sample_essay[$i])-1]) < 127)){
        $sample_essay[$i] = trim($sample_essay[$i], "!@#$%^&*()_+={}[]|\\:;'".'"<>,.?/~`');
    }
}

$modified_stopwords = explode(" ", "a about again all am an and any are as at be because been before being but by could did do does doing during each few for from further had has have having he he'd he'll he's her here here's hers herself him himself his how how's i i'd i'll i'm i've if in into is it it's its itself let's me more most my myself of off on once only or other ought our ours ourselves out own same she she'd she'll she's should so some such than that that's the their theirs them themselves then there there's these they they'd they'll they're they've this those through to too until very was we we'd we'll we're we've were what what's when when's where where's which while who who's whom why why's with would you you'd you'll you're you've your yours yourself yourselves");

$sample_essay = array_diff($sample_essay, $modified_stopwords);

print_r($sample_essay);

?>