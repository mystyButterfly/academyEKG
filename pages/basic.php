<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AcadeMyEKG</title>
  <link rel="icon" type="image/png" href="../images/iconMyEKGtransparant.png">
  <link rel="stylesheet" href="..//styles/stylemainred.css">
  <link rel="stylesheet" href="./basic/stylesbasic.css">
</head>
<body>
  <div class="navbar">
    <div class="label-image"><a href="..//index.php"><img  src="..//images/iconMyEKGtransparant.png" alt="heart"></a></div>
    <ul> 
      <li><a href="./indevelop.php">Рейтинги</a></li>
      <li><a href="..//index.php">Головна</a></li>
      <li><a href="./indevelop.php">Контакти</a></li>
      <li><a class="btn login" href="./indevelop.php">Увійти ♫</a></li>
    </ul>
  </div>
  <br><br>
  <div>
  <div><h1>Основи. Синусовий та несинусовий ритм</h1></div>
    <div id="game-container">
        <div class="progress">
          <div id="barHolder">
            <div id="bar"></div>
          </div>
        </div>
      <div id="questionP">Вкажіть ритм який Ви бачите на даній ЕКГ</div>
      <div class="question">
        <div id="questionP-image">
          
          <div id="image">image</div>
          <div id="restart"><a href="basic.php"><button id="restart-btn">Повторити з початку</button></a></div>
        </div>
      

        <div id="comment-container">
        <div class="answer-options" id="answer-options">
            <button class="answer-option">Option 1</button>
            <button class="answer-option">Option 2</button>
            <button class="answer-option">Option 3</button>
            <button class="answer-option">Option 4</button>
            </div>
            <div id="comment-and-butoon">
            <div id="comment-text">comment-text</div>
            <button id="comment-button">Коментар</button></div>
            <button id="next-button">Далі</button>
            
        </div>
        </div>

    
    
    

    <div id="result-rating">
		<div class="add-result">
    <div id="scoreshow"></div>
    <div id="addResult-prop">
      <div class="add-result-text">Додати мій результат в рейтинг</div>
      <div id="prop">
        <button popovertarget="proptext" popovertargetaction="toggle">?</button>
        <div popover id="proptext">Для ім'я не варто використовувати пошту,наприклад "Анастасія", "Andru123", "Софі:)". Пароль може бути простим, наприклад 123, 1111. Його варто запам'ятати, щоб під Вашим іменем могли ставити нові рекорди тільки Ви. Пароль також знадобиться щоб видалити ce6e з рейтингу(потрібно написати нам).</div>
      </div>
		</div>
		
		<form action="./includes/formhandler.inc.php" method="post">
		
		<input class="inputform" type="text" name="username" placeholder="Ваше ім'я"><br>
		<input class="inputform" type="password" name="pwd" placeholder="Пароль"><br>
    		
		<input class="inputform" type="text" name="scores" placeholder="Scores" id="scores" style="display: none;">
			<div class="addbutton"><div ></div>
			<button id="form-button">Додати</button></div>
		</form>
		</div>




		<div class="rating">
			<div class="rating-list">
			<?php include('./basic/includes/getlist.php'); ?></div>
		</div>
		</div>
    

        
    <script src="./basic/scriptbasic.js"></script>
  </div>
  <div class="red-futer">Найкращі  гравці рейтингу можуть отримати  подарунки. Слідкуйте за оновленнями.</div>
  <div class="grey-futer">
    <ul>
      <li><a href="./indevelop.php">Умови користування</a></li>
      <li><a href="./indevelop.php">Контаки</a></li>
      <li><a href="./indevelop.php">Часті питання</a></li>
      <li><a href="./indevelop.php">Ресурси</a></li>
      <li><a href="./indevelop.php">Рейтинги</a></li>
      <li><a href="./indevelop.php">Розробникам</a></li>
    </ul>
  </div>
  <p class="last-word">©  2024  acadeMyEKG</p>
</body>
</html>