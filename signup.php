<?php include("top.html"); ?>
        <fieldset>
            <legend>New User Signup:</legend>
            <form action="signup-submit.php" method="post">
                <strong>Name:</strong><input type="text" size="16" name="name"/><br/>
                <strong>Password:</strong><input type="password" size="8" name="password"/><br/>
                <strong>Gender:</strong>
                <label><input type="radio" name="gender" value="M"/>Male</label>
                <label><input type="radio" name="gender" value="F" checked/>Female</label>
             <br/>
             <strong>Age:</strong>
                <input type="text" name="age" size="6"/>
             <br/>
             <strong>Personality type:</strong>
                <input type="text" name="type" size="6" />
                <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
            <br/>
            <strong>Favorite OS:</strong>
            <select name="system">
                <option value="Windows" selected>Windows</option>
                <option value="Mac OS X">Mac OS X</option>
                <option value="Linux">Linux</option>
            </select>
            <br/>
            <strong>Seeking age:</strong>
                <input type="text" size="6" placeholder="min" name="minage"/>&nbsp;to&nbsp;<input type="text" size="6" placeholder="max" name="maxage"/>
            <br/>
            <input type="submit" value="Sign Up!">
            </form>
        </fieldset>
<?php include("bottom.html"); ?>
