<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div style="color: blue">
        	Hello {{ $user->name }},<br/>
            Thank you for creating an account in Phuc Truong. To support for you better,  
            Please follow the link below to verify your email address
            {{ URL::to('signup/verify/' . $confirmation_code) }}.<br/>

        </div>

        <div>
        	<hr>
        	Support Team
        </div>

    </body>
</html>
