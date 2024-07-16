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
        <td colspan="2" align="center"><img src="https://grandprixphoto.ma/gpp/wp-content/uploads/2024/05/Concours-photo-annonce.jpg" width="100%"></td>
    </tr>    
    <tr>
        <td colspan="2" align="center">
            <img src="{{ asset('storage/Thumbnails/' . $image) }}" width="30%">
        </td>
    </tr>
    <tr>
        <td width="50%" class="text-left" valign="top">
        <strong>Cher participant,</strong>
        <br>
        <p>Nous vous informons que votre photo soumise pour le concours ne respecte pas les caractéristiques techniques requises. Voici les détails :</p>
            
        <br>
        <li><b>Taille minimale :</b></li>
        3000 pixels du bord le plus court. Votre taille est de {{$WidthAndHeight}} pixels.
        <br>

        <li><b>Volume du fichier minimal :</b></li>
        10 MB. Votre fichier est de {{$volume}} MB.
        <br>

        <li><b>Résolution de l'image minimale :</b></li>
        240 DPI. Votre résolution est de {{$dpi}} DPI.
        <br>
        <br>

        <p>Nous vous invitons à soumettre une nouvelle photo qui correspond à l'une de ces catégories. Merci de votre compréhension et de votre participation.</p>

        <br><br>

        <a href="https://grandprixphoto.ma/backoffice/login" class="login-button">Login</a>
        <br><br> <br>
        <p>Merci de votre compréhension.</p>
        <br> <br>
        Comité de verification des participations.
        <br><br>
        </td>
        <td width="50%" class="text-right-rtl" valign="top">
            <strong>المشارك العزيز،</strong>
            <br>
            <p>نود إبلاغكم بأن الصورة التي قدمتموها للمسابقة لا تفي بالمواصفات الفنية المطلوبة. وفيما يلي التفاصيل:</p>
                
            <br>
            <li><b>الحجم الأدنى:</b></li>
             3000 بكسل من أقصر جانب. حجم صورتكم هو {{$WidthAndHeight}}  بكسل.

            <br>
    
            <li><b>حجم الملف الأدنى:</b></li>
             10 ميجابايت. حجم ملفكم هو {{$volume}} ميجابايت.

            <br>
    
            <li><b>دقة الصورة الأدنى:</b></li>
             240 نقطة في البوصة. دقة صورتكم هي {{$dpi}}  نقطة في البوصة.

            <br>
            <br>
    
            <p>نرجو منكم الدخول إلى مساحة المشاركة الخاصة بكم لتصحيح هذه المعايير وإعادة تقديم صورتكم.</p>

            <br>


        <br><br>
        <a href="https://grandprixphoto.ma/backoffice/login" class="login-button">تسجيل الدخول</a>
        <br><br><br><br>
        مع التحية،
        فريق الجائزة الكبرى للتصوير    </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><br><br>Powered by <a href="https://www.3wdev.ma">3wdev</a>  I  President du Grand Prix Photo <a href="https://www.darembouchentouf.com">Darem Bouchentouf</a>  I  Instagram <a href="https://www.instagram.com/grandprixphoto.ma/">Grandprixphoto.ma</a></td>
    </tr>
</table>
</body>
</html>