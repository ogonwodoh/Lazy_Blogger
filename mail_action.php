<?php
// open IMAP connection
$mail = imap_open('{mail.ogonwodoh.com:143/novalidate-cert}INBOX',   'webmaster@ogonwodoh.com', 'PASS') or die('Cannot connect: ' . imap_last_error());


// grab a list of all the mail headers
$headers = imap_headers($mail);


// grab a header object for the last message in the mailbox
$last = imap_num_msg($mail);
$header = imap_header($mail, $last);

// grab the body for the same message
$structure = imap_fetchstructure($mail, $last);


$body = imap_body($mail, $last);
$body=imap_fetchbody($mail,$last, 1);
$msg=explode("<END>",$body);//this tag will help us parse email responses



// close the connection
imap_close($mail);
?>
