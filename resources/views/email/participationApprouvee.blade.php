<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Message from Grand PriX Photo</title>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet"> <!-- Importing the Nunito font -->
<style>
    /* Apply styling to the table and set the font */
    body {
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        min-height: 100vh; /* Minimum height of the viewport */
        margin: 0; /* Remove default margin */
        font-family: 'Nunito', sans-serif; /* Apply Nunito as the primary font */
    }

    table {
        width: 90%;
        border-collapse: collapse;
        border: 0px; /* Set the border of the table to 0px */
    }

    /* Style the table cells */
    td {
        border: 0px; /* Set the border of the cells to 0px */
        padding: 10px;
    }

    /* Left column text alignment */
    .text-left {
        text-align: left;
    }

    /* Right column text alignment for RTL languages like Arabic */
    .text-right-rtl {
        text-align: right;
        direction: rtl; /* This property sets the direction of the text */
    }

    /* Button styling */
    .login-button {
        background-color: #ffd700; /* Yellow background */
        color: #000; /* Black text */
        font-size: 16px; /* Font size */
        padding: 10px 20px; /* Padding around the text */
        border: none; /* No border */
        border-radius: 8px; /* Rounded corners */
        cursor: pointer; /* Cursor indicates it's clickable */
        text-decoration: none; /* Remove underline from link */
        transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
    }

    /* Hover effect */
    .login-button:hover {
        background-color: #cca700; /* Darker yellow when hovered */
        color: #fff; /* White text when hovered */
    }
</style>
</head>
<body>
<table>
    <tr>
        <td colspan="2" align="center"><img src="https://grandprixphoto.ma/gpp/wp-content/uploads/2025/02/GPP24-Banner-MarsSeptembre-1.jpg" width="100%"></td>
    </tr>    
    <tr>
        <td colspan="2" align="center">
            <img src="{{ asset('storage/Thumbnails/' . $image) }}" width="30%">
        </td>
    </tr>
    <tr>
        <td width="50%" class="text-left" valign="top">
            <strong> <font color="green">Felicitation</font>, votre photo respecte les conditions du concours.</strong><br><br>
            Elle est validée .<br><br>
        <br> <br>
        <a href="https://grandprixphoto.ma/backoffice/login" class="login-button">Login</a>
        <br><br> <br>
        Comité de verification des participations.
        <br><br>
        </td>
        <td width="50%" class="text-right-rtl" valign="top">
            <strong> <font color="green">مبروك</font > صورتك تحترم جميع شروط المسابقة.</strong> <br><br>
            صورتك مقبولة. <br><br>
        <br><br>
        <a href="https://grandprixphoto.ma/backoffice/login" class="login-button">تسجيل الدخول</a>
        <br><br><br><br>
        لجنة تدقيق المشاركات
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><br><br>Powered by <a href="https://www.3wdev.ma">3wdev</a>  I  President du Grand Prix Photo <a href="https://www.darembouchentouf.com">Darem Bouchentouf</a>  I  Instagram <a href="https://www.instagram.com/grandprixphoto.ma/">Grandprixphoto.ma</a></td>
    </tr>
</table>
</body>
</html>
