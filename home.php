<!DOCTYPE html>
<html lang="en">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    /* --navbar-- */
    .navbar {
        background-color: #22577E;
        color: #F6F2D4;
        height: 110px;
    }

    .navbar-brand {
        color: #F6F2D4;
        font-family: 'Chonburi', cursive;
        font-size: 25px;
        margin-left: 1em;
    }

    .navbar-nav .nav-link {
        color: #F6F2D4;
        font-family: 'Dosis', sans-serif;
        font-weight: 900;
        font-size: 18px;
    }

    .about-header h2 {
        font-family: 'Chonburi', cursive;
        font-size: 24px;
        color: #5584AC;
        margin: 2rem;

    }

    html {
        scroll-behavior: smooth;
    }


    .about-section {
        padding: 4em;
    }

    .contact-section {
        top: 0;
        padding: 4em;
        background: #97BFB4;
    }

    .contact-section .container {

        min-height: 40vh;

    }

    .contact-section .contact-header {

        font-family: 'Chonburi', cursive;
        font-size: 24px;
        color: #F5EEDC;
        margin: 2rem;
    }

    .about-text p {
        font-family: 'Chonburi', cursive;
        font-size: 18px;
        margin-top: 1rem;
    }



    .about-skill {
        margin: 1rem;
        font-family: 'Chonburi', cursive;
        text-align: center;
    }

    .about-skill h2 {
        font-family: 'Chonburi', cursive;
        font-size: 24px;
        color: #95D1CC;
        text-align: start;
        margin: 2rem;
    }

    /* --ไอคอน-- */

    .sci {
        position: absolute;
        left: 15%;
        display: flex;
        justify-content: center;
        align-items: start;
        flex-direction: column;
        font-family: 'Chonburi', cursive;
        font-size: 18px;
        color: #F5EEDC;
    }

    .sci li {
        list-style: none;

    }

    .sci li a {
        text-decoration: none;
        width: 60px;
        height: 60px;
        background: #F6F2D4;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        margin: 5px 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .sci li a img {
        transform: scale(0.6);
        transition: 0.5s;

    }

    .sci li:hover a img {
        transform: scale(0.6) rotate(360deg);
        transition: 0.5s;

    }

    /* --กรอกรูปภาพ-- */
    .about-img .container {
        position: relative;
        display: flex;
        justify-content: start;
        align-items: center;
        left: 0;
    }

    /* --พื้นหลัง-- */
    .about-img .container .card {
        position: relative;
        width: 600px;
        height: 350px;
        margin-left: 2px;
        display: flex;
        justify-content: flex-start;
        align-items: start;
        background: linear-gradient(45deg, #1a2f3f, #22577E);
    }

    .about-img .container .card img {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 400px;
        transition: 0.5s;
    }

    .about-img .container .card:hover img {

        left: 75%;
        height: 500px;

    }

    /* --ตัวอักษรในการ์ด-- */
    .about-img .container .card .content {
        position: relative;
        width: 50%;
        left: 10%;
        padding: 20px 20px 20px 40px;
        transition: 0.5s;
        opacity: 0;
        visibility: hidden;
    }

    .about-img .container .card:hover .content {
        left: 0;
        visibility: visible;
        opacity: 1;
    }

    .about-img .container .card .content h2 {
        color: #fff;
        text-transform: uppercase;
        font-size: 2.2em;
        line-height: 1em;
        font-family: 'Chonburi', cursive;
        font-size: 20px;
        color: #F6F2D4;
    }

    .about-img .container .card .content p {
        color: #fff;
        position: relative;
        /* background: #fff; */
        display: inline-block;
        padding: 10px 20px;
        margin-top: 10px;
        text-decoration: none;
        font-weight: 700;
        font-family: 'Chonburi', cursive;
        font-size: 16px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* --รูปโปรเจค-- */
    .project-section {
        /* display: flex; */
        justify-content: start;
        align-items: center;
        min-height: 100vh;
        background: #FBF3E4;
    }

    .project-section .container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: start;
        flex-wrap: wrap;
        max-width: 1100px;
    }

    .project-section .container .card {
        position: relative;
        width: 480px;
        height: 320px;
        margin: 15px;
        overflow: hidden;
    }

    /* --รูปผลงาน-- */
    .project-section .container .card .imgBx,
    .project-section .container .card .contentBx {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .project-section .container .card .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* --animation-- */
    .project-section .container .card .contentBx::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        transform: scaleX(0);
        transition: transform 0.5s ease-in-out;
        transform-origin: right;
        transition-delay: 0.5s;
    }

    .project-section .container .card:hover .contentBx::before {
        transform: scaleX(1);
        transition: transform 0.5s ease-in-out;
        transform-origin: left;
        transition-delay: 0s;
    }

    .project-section .container .card:hover .contentBx {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .project-section .container .card .contentBx .content {
        position: relative;
        padding: 30px;
        z-index: 1;
        transition: 0.5s;
        transform: translateX(-300px);
        transition-delay: 0s;
    }

    .project-section .container .card:hover .contentBx .content {
        transform: translateX(0px);
        transition-delay: 0.5s;
    }

    .project-section .container .card .contentBx .content h3 {
        font-size: 1.3em;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Chonburi', cursive;
        color: #22577E;
    }

    .project-section .container .card .contentBx .content p {
        font-size: 1.3em;
        line-height: 1.4em;
        font-weight: 300;
        font-family: 'Chonburi', cursive;
        color: #22577E;
    }

    .project-header h2 {
        padding: 4em;
        font-family: 'Chonburi', cursive;
        font-size: 24px;
        color: #476072;
        margin-left: 2rem;
        font-size: 24px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Dosis:wght@200&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="navbar-brand">Portfolio .</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Projects</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="about-section" id="about">
            <div class="container">
                <div class="about-header">
                    <h2>About</h2>
                    <div class="row">
                        <div class="about-img col-6">
                            <div class="container">
                                <div class="card">
                                    <div class="content">
                                        <h2> Pudis Earmsaard</h2>
                                        <p>Folk</p>
                                        <p>07/19/2000</p>
                                    </div>
                                    <img src="me1.png">
                                </div>
                            </div>
                        </div>

                        <div class="about-text col-6 ">
                            <p>I’m a apprentice at font-end developer </p>
                            <p>i'm pactice to coding ...</p>
                        </div>
                    </div>
                    <div class="about-skill">
                        <h2>Skill</h2>
                        <div class="row">
                            <div class="col-2">CSS</br><img width="50" height="50" src="https://cdn-icons-png.flaticon.com/512/5968/5968242.png" alt="Css 3 free icon" title="Css 3 free icon" class="loaded"></div>
                            <div class="col-2">HTML</br><img width="50" height="50" src="https://cdn-icons-png.flaticon.com/512/5968/5968267.png" alt="Html 5 free icon" title="Html 5 free icon" class="loaded"></div>
                            <div class="col-2">BOOTSTRAP</br><img width="50" height="50" src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png" alt="Bootstrap free icon" title="Bootstrap free icon" class="loaded"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="contact-section" id="contact">
            <div class="container">
                <div class="contact-header">
                    <h2>Contact</h2>
                </div>
                <ul class="sci">
                    <li><a herf=""><img width="50" height="50" src="images/facebook.png"></a>
                        <ul>
                            <li>

                                <div class="content">
                                    <p> Folkpudis</p>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li><a herf="#"><img width="50" height="50" src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram free icon" title="Instagram free icon" class="loaded"></a>
                        <ul>
                            <li>

                                <div class="content">
                                    <p> folk_pudis</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a herf="#"><img width="50" height="50" src="images/gmail.png"></a>
                        <ul>
                            <li>

                                <div class="content">
                                    <p> Folkpudis.earm@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="project-section" id="project">
        <div class="project-header">
            <h2>Projects</h2>
        </div>
        <div class="container">

            <div class="card">
                <div class="imgBx">
                    <img src="images/lms_dti1.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>lms_dti1</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/lms_dti2.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>lms_dti2</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/nida_folk2.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>nida_folk2</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/nida_folk3.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>nida_folk3</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/nida2_web4.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>nida2_web4</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/nida2_web6.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>nida2_web6</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/nida2_web61.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>nida2_web6_1</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/nida2_web62.jpg">
                </div>
                <div class="contentBx">
                    <div class="content">
                        <h3>nida2_web6_2</h3>
                        <p>ฝึกทำหน้าเว็บ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>





</body>

</html>