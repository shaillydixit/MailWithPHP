<!-- https://www.campaignmonitor.com/email-templates/
https://www.emailonacid.com/
https://www.litmus.com/
https://www.pinpointe.com/blog/email-campaign-html-and-css-support/
https://templates.mailchimp.com/resources/html-to-text/ -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Send an email</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script>
        $( document ).ready(function() {
            /**
             * When the form is submitted, disable the submit button and display the loading image
             */
            $('#emailForm').on('submit', function() {
                $('#sendButton').prop('disabled', true);
                $('#progressImage').show();
            })
        });
    </script>
</head>
<body>

    <h1>Send an email</h1>

    <p><?php echo $_GET['time'] ?? ''; ?></p>

    <form action="send.php" method="post" id="emailForm">
        <button type="submit" id="sendButton">Send</button>
        <img src="loading.gif" width="16" height="16" id="progressImage" class="hidden" />
    </form>

</body>
</html>