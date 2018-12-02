<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Reset Password | Phuc Truong Web</h2>

        <div style="color: blue">
        	Hello {{ $user->name }},<br/>
            You have requested to have your password reset for your account at Phuc Truong Web.
            Please follow this url below to reset your password:

            {{ URL::to('password/reset/'. $new_pass) }}.<br/>

        </div>

        <div>
        	<hr>
        	Support Team
        </div>

    </body>
</html>
