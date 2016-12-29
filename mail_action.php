<?php
//This is used to retreive a user's status updates and post it to the blog

// open IMAP connection
$mail = imap_open('{mail.ogonwodoh.com:143/novalidate-cert}INBOX',   'webmaster@ogonwodoh.com', '<password>') or die('Cannot connect: ' . imap_last_error());


// grab a list of all the mail headers
$headers = imap_headers($mail);


// grab a header object for the last message in the mailbox
$last = imap_num_msg($mail);
$header = imap_header($mail, $last);

// grab the body for the same message
$structure = imap_fetchstructure($mail, $last);

$body = imap_body($mail, $last);

$body=imap_fetchbody($mail,$last,1);

//For now I am using the tag EOM to detect when a user has finished writing their status update. This makes it easier to parse the response
$msg=strtok($body, "<EOM>");

print_r($msg);

// close the connection
imap_close($mail);
?>
