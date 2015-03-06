<!DOCTYPE HTML>
<!--Author: Richard Cerone-->
<!--Allows user to login to Jigger's homepage-->
<html>
    <!--Import JQuery-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <header>
        <title>Jigger, It's Party Time</title>
    </header>

    <body>
        <h1>Jigger</h1>
        <h6>It's Party Time</h6>
        <div id="error"><!--Error will post here.--></div>
        <!--Login Form-->
        <form action="checkEmail.php" method="post" id="loginForm">
            <input type="text" name="email" placeholder="Enter Your Rowan Email">
            <input type="submit" value="Enter" id="submit">
        </form>
    </body>
</html>

<script>
    /*Submit form data to checkEmail.php. If login succeeds go to
     *home page, else post error message in error div.
     */
    $("#submit").click(function()
    {
        //Post data to checkEmail.php.
        $.post("checkEmail.php", $("#loginForm").serialize()).done(function(data)
        {
            //Store JSON data into array.
            var myArray = JSON.parse(data);
            //If boolean match is true transfer to home.php.
            if (myArray['match'] == true)
            {
                window.location.replace("home.php");
            }
            //Match is false, post error message in div above.
            else if (myArray['match'] == false)
            {
                $("#error").html(myArray['message']);
            }
        });
        return false; //Prevent default action from function.
    });
</script>
