<!DOCTYPE html>
<html lang="en">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

  }

  body {
    display: flex;
    justify-content: start;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container .card {
    position: relative;
    width: 550px;
    height: 350px;
    margin: 20px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    background: linear-gradient(45deg, #1a2f3f, #7094ce);
  }

  .container .card img {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    height: 400px;
    transition: 0.5s;
  }

  .container .card:hover img {

    left: 75%;
    height: 500px;

  }

  .container .card .content {
    position: relative;
    width: 50%;
    left: 20%;
    padding: 20px 20px 20px 40px;
    transition: 0.5s;
    opacity: 0;
    visibility: hidden;
  }

  .container .card:hover .content {
    left: 0;
    visibility: visible;
    opacity: 1;
  }

  .container .card .content h2 {
    color: #fff;
    text-transform: uppercase;
    font-size: 2.2em;
    line-height: 1em;
  }

  .container .card .content p {
    color: #fff;
    position: relative;
    /* background: #fff; */
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: 700;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

</head>

<body>
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
 

</body>

</html>