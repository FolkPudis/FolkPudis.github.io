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
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #222;
  }

  .container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1100px;
  }

  .container .card {
    position: relative;
    width: 480px;
    height: 320px;
    margin: 15px;
    overflow: hidden;
  }

  .container .card .imgBx,
  .container .card .contentBx {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .container .card .imgBx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .container .card .contentBx::before {
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

  .container .card:hover .contentBx::before {
    transform: scaleX(1);
    transition: transform 0.5s ease-in-out;
    transform-origin: left;
    transition-delay: 0s;
  }

  .container .card:hover .contentBx {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container .card .contentBx .content {
    position: relative;
    padding: 30px;
    z-index: 1;
    transition: 0.5s;
    transform: translateX(-300px);
    transition-delay: 0s;
  }
  .container .card:hover .contentBx .content {
    transform: translateX(0px);
    transition-delay: 0.5s;
  }
  .container .card .contentBx .content  h3 {
    font-size: 1.3em;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

.container .card .contentBx .content  p{
  font-size: 1.3em;
  line-height: 1.4em;
  font-weight: 300;

}
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="images/lms_dti1.jpg">
      </div>
      <div class="contentBx">
        <div class="content">
          <h3>lms_dti1</h3>
          <p>....</p>
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
          <p>....</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>