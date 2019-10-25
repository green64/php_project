<?php 
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

<div style="margin-left: 30px; max-width:650px;">
<h2>We're interactive. Things are getting real!</h2>
<p>I've now used native PHP filters and some RegEx to filter my form responses on
<a href="add.php">add.php</a>. I'm 
using the POST method so users don't see their submissions yet &mdash; 
unless they're invalid. Nothing's hooked up to the database ... yet.</p>
<p>I also learned that you need to protect form fields to avoid hackers redirecting
your users or sending them to a malware-ridden site. The key? Wrapping the 
code line in 'htmlspecialchars'. Gotta stay one step ahead of hackers ...</p>
</div>
	<?php include('templates/footer.php'); ?>

</html>