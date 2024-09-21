<?php include("head.php"); ?>

<div class="container icenter">

    <p>How do I check if the information in the form is correct before saving it to the database?</p>
    <ul>
        <li>On the browser (client-side):
            I can use JavaScript to check if the passwords match, if the email is formatted correctly, and if all fields are filled out. This happens before the form is submitted, so the user gets immediate feedback.</li>
        <li>On the server (PHP):
            Even after the form is submitted, I should double-check everything on the server side in PHP. This ensures that no bad data gets saved to the database if something slipped past the client-side checks.

        </li>
    </ul>

</div>

<div class="container icenter">
    <p>What do I do when the information isn't correct, and how do I let the user fix it?</p>
    <ul>
        <li>Show error messages:
            If the form data is wrong (like the passwords don’t match), I will send the user back to the form with a clear error message explaining what went wrong, like "Passwords don’t match."</li>
        <li>Keep the form data:
            I don’t want the user to have to retype everything, so I will make sure the form is filled with the data they already typed in. In PHP, I can use the $_POST array to remember what they entered and display it in the form again.</li>
    </ul>
</div>

<div class="container icenter">
    <p>How would I create PHP pages for users to edit their account (like changing name, email, or password)?
    </p>
    <ul>
        <li>Pre-fill the form with current data:
            I will pull the user’s current info (name, email, etc.) from the database and pre-fill the form with this data. That way, they can see their existing information and only change what’s needed.

        </li>
        <li>Track the user account:
            I’ll use PHP sessions to track which user is logged in. The session will store their user ID, and I’ll use this ID to know which account I’m updating.

        </li>
        <li>Update the account:
            When the form is submitted, I’ll check the new data (like the new name or email) and then update the database with the new values.</li>
    </ul>


</div>

<div class="container icenter">
    <p>What tools do I use to remember if a user has logged in?</p>
    <ol>
        <li>Cookies:
            Cookies are stored in the user’s browser and sent with every request. I could use a cookie to remember a user’s login state for a long time, like when they come back after closing the browser. But cookies can be less secure.</li>
        <li>Sessions:
            Sessions store information on the server, and only a small session ID is kept in the user’s browser. This is more secure since the important data stays on the server. I’ll use sessions to track who is logged in.

        </li>
    </ol>
</div>

<div class="container icenter">
    <p>What's the difference between cookies and sessions?</p>
    <ol>
        <li>Cookies:
            Cookies store data in the user’s browser and persist across visits, but they are less secure because the data is stored client-side and can be manipulated.</li>
        <li>Sessions:
            Sessions store data on the server. Only a session ID is kept in the browser. This is more secure because the sensitive info stays server-side.
        </li>
    </ol>
</div>

<div class="container icenter">
    <p>How did the videos log someone in?</p>
    <ol>
        <li>Submit login form: The user enters their credentials (username and password).</li>
        <li>Validate credentials: The server checks if the credentials match what’s in the database.
        </li>
        <li>Create session: If everything is correct, a session is created and the session ID is stored in a cookie, while the user’s actual data is kept on the server. The session remembers who is logged in.
        </li>
    </ol>
</div>



<?php include("foot.php"); ?>