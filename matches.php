<?php include("top.html"); ?>
<fieldset>
    <legend>Returning User:</legend> 
    <form action="matches-submit.php" method="post">
        <label>Name:</label>
        <input type="text" size="16" name="name"/>
        <br/>
        <label>Password:</label>
        <input type="password" size="8" name="password"/>
        <br/>
        <input type="submit" value="View My Matches" />
    </form>
</fieldset>
<?php include("bottom.html"); ?>
