<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intelligent Library</title>
    <style>
      * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background: url('https://64.media.tumblr.com/ee5169a677d71323105a5210404f474d/tumblr_ptp22tbWHk1tgo74ho1_1280.gif') center/cover no-repeat;
        position: relative;
      }

      body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
      }

      .landingtext {
        text-align: center;
      }

      .landingtext h1 {
        font-size: 5em;
        color: white;
        opacity: 0;
        animation: abstractAnimation 1.5s forwards;
      }

      @keyframes abstractAnimation {
        0% {
          opacity: 0;
          transform: translateY(-120px);
        }
        50% {
          opacity: 1;
          transform: translateY(5px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .landingtext button {
        opacity: 0;
        animation: abstractButtonAnimation 1s forwards;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: blueviolet; 
        color: white; 
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 1em;
      }

      .landingtext button:hover {
        background-color: goldenrod; 
      }

      @keyframes abstractButtonAnimation {
        0% {
          opacity: 0;
          transform: translateY(100px);
        }
        50% {
          opacity: 1;
          transform: translateY(-30px);
        }
        100% {
          opacity: 1;
          transform: translateY(90);
        }
      }

      /* Responsive Styles */
      @media screen and (max-width: 768px) {
        .landingtext h1 {
          font-size: 3em;
        }

        .landingtext button {
          font-size: 0.8em;
        }
      }
    </style>
  </head>
  <body>
    <div class="landingtext">
      <h1>Intelligent Library</h1>
      <a href="login"><button type="button">Login</button></a>
    </div>
  </body>
</html>
