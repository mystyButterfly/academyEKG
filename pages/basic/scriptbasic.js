const questionImage = document.getElementById('image');
    const answerOptions = document.querySelectorAll('.answer-option');
    const nextButton = document.getElementById('next-button');
    const commentText = document.getElementById("comment-text");
    const commentButton = document.getElementById("comment-button");
    

    let currentQuestion = 0;
    let score = 0;
    let questions = [
      {
        image: "<img src=./basic/images/ritm1.jpg>",
        answer: "Option 1",
        options: ["Option 1", "Option 2", "Option 3","Option 4"],
        comment: "Зверніть увагу на зубці P1.Зверніть увагу на зубці P1.Зверніть увагу на зубці P1.Зверніть увагу на зубці P1."
        
      },
      {
        image: "<img src=./basic/images/ritm2.jpg>",
        answer: "Option 2",
        options: ["Option 21", "Option 2", "Option 23","Option 24"],
        comment: "Зверніть увагу на зубці P2"
      },
      {
        image: "<img src=./basic/images/ritm3.jpg>",
        answer: "Option 3",
        options: ["Option 2", "Option 22", "Option 3","Option 24"],
        comment: "Зверніть увагу на зубці P3"
      },
      {
        image: "<img src=./basic/images/ritm4.jpg>",
        answer: "Option 4",
        options: ["Option 1", "Option 2", "Option 3","Option 4"],
        comment: "Зверніть увагу на зубці P4"
        
      },
      {
        image: "<img src=./basic/images/ritm5.jpg>",
        answer: "Option 5",
        options: ["Option 1", "Option 5", "Option 3","Option 4"],
        comment: "Зверніть увагу на зубці P5"
        
      },
      {
        image: "<img src=./basic/images/ritm6.jpg>",
        answer: "Option 6",
        options: ["Option 6", "Option 2", "Option 3","Option 4"],
        comment: "Зверніть увагу на зубці P6"
        
      },
      {
        image: "<img src=./basic/images/ritm7.jpg>",
        answer: "Option 7",
        options: ["Option 1", "Option 2", "Option 3","Option 7"],
        comment: "Зверніть увагу на зубці P7"
        
      },
      {
        image: "<img src=./basic/images/ritm8.jpg>",
        answer: "Option 8",
        options: ["Option 1", "Option 2", "Option 8","Option 4"],
        comment: "Зверніть увагу на зубці P8"
        
      },
      {
        image: "<img src=./basic/images/ritm9.jpg>",
        answer: "Option 9",
        options: ["Option 9", "Option 2", "Option 3","Option 4"],
        comment: "Зверніть увагу на зубці 9"
        
      },
      {
        image: "<img src=./basic/images/ritm10.jpg>",
        answer: "Option 10",
        options: ["Option 10", "Option 2", "Option 3","Option 4"],
        comment: "Зверніть увагу на зубці P10"
        
      },
    ];

    function showQuestion(question) {
      questionImage.innerHTML = question.image;
      answerOptions.forEach((option, index) => {
        option.textContent = question.options[index];
        option.classList.remove('correct', 'incorrect');
      });
      enable();
      document.getElementById("result-rating").style.display = 'none';
      nextButton.style.display = 'none';
      commentText.innerHTML = question.comment;
      commentText.style.display = "none";
      commentButton.style.display = "none"
      }

    function checkAnswer(selectedOption) {
      const answer = questions[currentQuestion].answer;
      var progressNumber= (Number(currentQuestion)+1);
      move(progressNumber);
      
      if (selectedOption.textContent === answer) {
        selectedOption.classList.add('correct');
        var audio = new Audio("./basic/positivAnswer.mp3");
        audio.play();
        score++;
        } else {
        selectedOption.classList.add('incorrect');
      };
      disable(event);
      nextButton.style.display = 'block';
      commentButton.style.display = "inline-block"
    }
     

    answerOptions.forEach(option => {
      option.addEventListener('click', () => checkAnswer(option));
    });

    nextButton.addEventListener('click', () => {
      currentQuestion++;
      if (currentQuestion < questions.length) {
        showQuestion(questions[currentQuestion]);
      } else {
        // end of game
        endGame();
        document.getElementById("scoreshow").innerHTML =`Правильних відповідей ${score} з ${questions.length}!`;
        document.getElementById("scores").value = `${score}`;
        }
    });

    function endGame(){
        nextButton.style.display = 'none';
        commentText.style.display = "none";
        commentButton.style.display = "none";
        document.getElementById("result-rating").style.display = 'block';
        questionImage.style.display = 'none';
        document.getElementById("questionP").style.display = 'none';
        document.getElementById("answer-options").style.display = 'none';

    }
    //comment-button hide/show
    document.getElementById("comment-button").addEventListener("click", ()=>{
     if(commentText.style.display != "inline-block"){commentText.style.display = "inline-block"
    }else{commentText.style.display = "none";
    }});

    //progress-bar
    function move(progressNumber){
        var bar = document.getElementById('bar');
        if(progressNumber*10 < 101){
        bar.style.width = progressNumber*10 +'%';
        }
    }

    //disable function for button
     function disable(event) {
        const answerContainer = document.querySelector('.answer-options');
        const buttons = answerContainer.querySelectorAll('.answer-option'); 
        for (const button of buttons) {
        button.disabled = true;
        }
    }

    function enable(){
        const answerContainer = document.querySelector('.answer-options'); 
        for (let i = 0; i < answerContainer.children.length; i++) {answerContainer.children[i].disabled = false;
        }
    }

showQuestion(questions[currentQuestion]);