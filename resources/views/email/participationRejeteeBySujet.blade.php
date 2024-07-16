


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
            <p>Nous vous informons que votre photo ne correspond à aucune des trois catégories du concours. Pour rappel, voici les trois catégories :</p>
            
        <br>
        <li><b>1. Vitalité :</b></li>
        Cette catégorie met en avant l'énergie et le dynamisme des Marocains dans divers contextes de vie.
        Que ce soit des activités sportives, des festivals, ou des moments quotidiens pleins de vie,
        nous recherchons des images qui capturent la passion et l'engagement des Marocains dans leur quotidien.
        <br>

        <li><b>2. Trésors du Maroc :</b></li>
        Cette catégorie vise à valoriser la richesse culturelle, historique et naturelle du Maroc. 
        Nous attendons des photos qui documentent les paysages, les monuments, 
        les traditions et les scènes de vie qui font la singularité et la beauté du patrimoine marocain.
        <br>

        <li><b>3. Faras :</b></li>
        Cette catégorie se concentre sur le rôle du cheval dans la culture marocaine.
        De la tborida aux pratiques équestres quotidiennes,
        les images devraient explorer la relation entre les Marocains et leurs chevaux,
        symboles de grâce et de puissance.
        <br>
        <br>

        <p>Nous vous invitons à soumettre une nouvelle photo qui correspond à l'une de ces catégories. Merci de votre compréhension et de votre participation.</p>

        <br><br>

        <a href="https://grandprixphoto.ma/backoffice/login" class="login-button">Login</a>
        <br><br> <br>
        Comité de verification des participations.
        <br><br>
        </td>
        <td width="50%" class="text-right-rtl" valign="top">
            <strong>المشارك العزيز،</strong>
            <br>
            <p>نحيطكم علماً بأن صورتكم لا تتوافق مع أي من الفئات الثلاث للمسابقة. للتذكير، إليكم الفئات الثلاث:</p> 
            <br>

            <li><b>1. رياضة و حيوية:</b></li>
            <br>
            <p>
                تُبرز هذه الفئة الطاقة والحيوية لدى المغاربة في مختلف جوانب الحياة. سواء كانت الأنشطة الرياضية، أو المهرجانات، أو اللحظات اليومية المليئة بالحياة، نبحث عن صور تلتقط الشغف والالتزام لدى المغاربة في حياتهم اليومية. 
            </p>

            <li><b>2. كنوز المغرب:</b></li>
            <br>
            <p>
                تهدف هذه الفئة إلى تسليط الضوء على الثروة الثقافية والتاريخية والطبيعية للمغرب. ننتظر صوراً توثق المناظر الطبيعية، والمعالم، والتقاليد، والمشاهد الحياتية التي تُظهر تفرد وجمال التراث المغربي.
            </p>
            <li><b>3. فارس:</b></li>
            <br>
            <p>
                تركز هذه الفئة على دور الحصان في الثقافة المغربية. من التبوريدة إلى الممارسات الفروسية اليومية، يجب أن تستكشف الصور العلاقة بين المغاربة وخيولهم، رموز الرشاقة والقوة.
            </p>
            <br><br>
            <p>ندعوكم لتقديم صورة جديدة تتوافق مع إحدى هذه الفئات. شكراً لتفهمكم ولمشاركتكم.</p>
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

