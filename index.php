<?php # INDEX
// This is the main page for the site.

// Include the configuration file:
require ('includes/config.php');

// Set the page title and include the HTML header:
$page_title = 'Welcome to this Site!';
include ('includes/header.php');

// Welcome the user (by name if they are logged in):
echo '<h1>Welcome';
if (isset($_SESSION['user_id'])) {
  echo ", {$_SESSION['user_id']}";
}
  echo '!</h1>';
?>
<p>Spam spam spam spam spam spam
 spam spam spam spam spam spam
 spam spam spam spam spam spam
 spam spam spam spam spam spam.</p>
 <p>Spam spam spam spam spam spam
 spam spam spam spam spam spam
 spam spam spam spam spam spam
 spam spam spam spam spam spam.</p>

<?php include ('includes/footer.php');
?>
