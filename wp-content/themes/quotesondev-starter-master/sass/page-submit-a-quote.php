<?php

get_header(); ?>

<h1>Submit A Quote </h1>



Name: <input type="text" name="name">
Author of Quote <input type="text" name="Author">

Quote  <input type="text-area" name="Quote">
Where did you find the quote? (E.g. Book Name)   <input type="text" name="Location">

Provide the URL of quote source if available  <input type="text" name="URL">

<button> Submit a Quote </button>
</form>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php get_footer(); ?>