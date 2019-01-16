<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>회원가입</title>
    <style>
      .signup-title {
        font-size: 50px;
        color: #a07b12;
      }

      .signup {
        margin-top: 10%;
      }

      .signup input {
        width: 45%;
        display: inline-block;
        background: transparent;
        letter-spacing: 0.1em;
        color: white;
        border-radius: 8px;
        padding: 18px;
        border: 1px solid rgba(223, 190, 106, 0.3);
      }

      button {
        width: 45%;
        display: inline-block;
        background: transparent;
        font-weight: 500;
        font-style: normal;
        font-size: 0.625rem;
        letter-spacing: 0.3em;
        color: rgba(223, 190, 106, 0.7);
        border-radius: 20px;
        padding: 18px 80px 20px;
        transition: all 0.7s ease-out;
        background: linear-gradient(270deg, rgba(223, 190, 106, 0.8), rgba(146, 111, 52, 0.8), rgba(34, 34, 34, 0), rgba(34, 34, 34, 0));
        background-position: 1% 50%;
        background-size: 300% 300%;
        text-decoration: snow;
        margin: 0.625rem;
        border: none;
        border: 1px solid rgba(223, 190, 106, 0.3);
      }

      button:hover {
        color: #fff;
        border: 1px solid rgba(223, 190, 106, 0);
        color: snow;
        background-position: 99% 50%;
      }
    </style>

  </head>
  <body style="background-color: #1f1f1f">
    <div class='signup' style="text-align: center">
      <h1 class="signup-title">SIGN UP</h1>
      <form name="input" method="post"  action="../../control/singup.php" onsubmit="return check();" >
        <div>
          <input id="realName" name="realName" placeholder="Your Name">
          <p id="nameError" style="color: darkred; text-align: -moz-center"></p>
        </div>

        <div>
          <input id="id" name="id" placeholder="Username">
          <p id="idError" style="color: darkred; text-align: -moz-center"></p>
        </div>
        <div>
          <span id="passwordWrapper">
            <input id="password" title="password" name="password" placeholder="Password" type="password" style="width: 20%;">
            <input id="confirm" title="confirm" name="confirm" placeholder="Confirm" type="password" style="width: 20%; margin-bottom: 0px">
            <script src='./confirm.js'></script>
            <p id="passError" style="color: darkred; text-align: -moz-center"></p>
          </span>
        </div>

        <div>
          <input id="nickname" name="nickname" placeholder="Nickname" >
          <p id="nickError" style="color: darkred; text-align: -moz-center"></p>
        </div>

        <div>
          <input id="email" name="email" placeholder="Email" type="email">
          <p id="mailError" style="color: darkred; text-align: -moz-center"></p>
        </div>
        <br>
        <button id="btn" type="submit" style="width: 45%;">Sign Up</button>
      </form>
    </div>
  </body>
</html>