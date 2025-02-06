
<?php 
$title = 'Register';
include('shared/header.php'); ?>
    <h1>Register</h1>
    <form method="post" action="insert-user.php">
        <fieldset>
            <label for="username">Username:</label>
            <input name="username"/>
</fieldset>
<fieldset>
            <label for="password">Password:</label>
            <input name="password"/>
</fieldset>
<button>Register</button>
</main>
</body>
</html>