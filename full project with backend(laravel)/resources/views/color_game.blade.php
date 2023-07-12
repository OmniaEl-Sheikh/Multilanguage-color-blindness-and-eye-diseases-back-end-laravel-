<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Game </title>


  <link href="assets/img/logo.png" rel="icon">
  <link rel="stylesheet" href="/assets/css/game.css">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
</head>

<body>

  <section class="color-background">
    <div class="game">
      <h1 class="game__title">Color game</h1>
      <p class="game__timer"></p>
      <div class="game__button-wrapper">
        <button class="game__button">Play Again</button>
      </div>

      <div class="game__board">
        <ul id="colorList" class="color-list">
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
          <li>
            <div class="overlay"></div>
          </li>
        </ul>
      </div>
    </div>


  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.6.1/randomColor.min.js"
    integrity="sha512-vPeZ7JCboHcfpqSx5ZD+/jpEhS4JpXxfz9orSvAPPj0EKUVShU2tgy7XkU+oujBJKnWmu4hU7r9MMQNWPfXsYw=="
    crossorigin="anonymous"></script>
  <script type="module" src="/assets/js/color_game.js"></script>
</body>

</html>
