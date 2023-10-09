<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

<style type="text/css">
	body{
		
	}
	h1{
		font-size: 35px;
	color: #001e4d;
	font-weight: 600;
	border-bottom: 1px solid #333;
	padding-bottom: 30px;
	text-decoration: underline;
	}
	#btn{
		background: #fff;
	color: #222;
	font-weight: bold;
	width: 15%;
	border: 1px solid #222;
	padding: 10px;
	margin: 10px 0;
	
	text-align: left;
	border-radius: 20px;
	cursor: pointer;
	float: left;
	transition: all 0.3s;
	text-align: center;
	height: 40px;
    background: skyblue;
    color: white;
    border-radius: 40px;
    margin-top: 10px;
	}
	#btn:hover{
	background: #222;
	color: #fff;}
	#ques{
        font-weight: bold;
        text-decoration: underline;
        color: orange;
        font-size: 20px;
     }
    #ques{
	padding: 20px 0;
	height: 20px;
}
.question{
	font-size: 18px;
	color: #001e4d;
	font-weight: 600;
}
#opt{
	
}
.options{
	
	text-decoration: none;
	font-size: 20px;
	text-decoration-color: black;

}
#score{
       font-weight: bold;
       font-size: 25px;
}
</style>
</head>

<body>
	<div class="box">
		<center><h1>QUIZ</h1></center>
		<div class="question" id="ques"></div>
		<div class="options" id="opt"></div>
		<button onclick="checkAns()" id="btn">SUBMIT</button>
		<div id="score"></div>
		<script>
        
        
        // Questions 
const Questions = [{
	q: "1. What is the launch date for Chandrayaan 3 mission?",
	a: [{ text: "14 July 2023", isCorrect: true},
	{ text: "24 July 2023", isCorrect: false },
	{ text: "13 July 2023", isCorrect: false},
	{ text: " 04 July 2023", isCorrect: false }
	]

},
{
	q: "2. The Chandrayaan 3 mission’s rover is known as",
	a: [{ text: "Vikram", isCorrect: false, isSelected: false },
	{ text: "Bheem", isCorrect: false },
	{ text: "Pragyaan", isCorrect: true },
	{ text: "Dhruv", isCorrect: false }
	]

},
{
	q: "3. The mission life of the Lander and Rover equal to ",
	a: [{ text: "24 Earth Days", isCorrect: false },
	{ text: "16 Earth Days", isCorrect: false },
	{ text: "14 Earth Days", isCorrect: true },
	{ text: "12 Earth Days", isCorrect: false }
	]

},
                   {
	q: "4. The mission objectives of Chandrayaan-3",
	a: [{ text: "To demonstrate Rover roving on the moon and", isCorrect: false },
	{ text: "To demonstrate a Safe and Soft Landing on Lunar Surface", isCorrect: false },
	{ text: "To conduct in-situ scientific experiments.", isCorrect: false },
	{ text: "All of the above", isCorrect: true }
	]

},{
	q: "5. How much did the Chandrayaan 3 mission cost? ",
	a: [{ text: " 600 Crores", isCorrect: true},
	{ text: "1200 Crores", isCorrect: false},
	{ text: "960 Crores", isCorrect: false },
	{ text: "540 Crores", isCorrect: false }
	]

},

]

let currQuestion = 0
let score = 0

function loadQues() {
	const question = document.getElementById("ques")
	const opt = document.getElementById("opt")

	question.textContent = Questions[currQuestion].q;
	opt.innerHTML = ""

	for (let i = 0; i < Questions[currQuestion].a.length; i++) {
		const choicesdiv = document.createElement("div");
		const choice = document.createElement("input");
		const choiceLabel = document.createElement("label");

		choice.type = "radio";
		choice.name = "answer";
		choice.value = i;

		choiceLabel.textContent = Questions[currQuestion].a[i].text;

		choicesdiv.appendChild(choice);
		choicesdiv.appendChild(choiceLabel);
		opt.appendChild(choicesdiv);
	}
}

loadQues();

function loadScore() {
	const totalScore = document.getElementById("score")
	totalScore.textContent = `You scored ${score} out of ${Questions.length}`
}


function nextQuestion() {
	if (currQuestion < Questions.length - 1) {
		currQuestion++;
		loadQues();
	} else {
		document.getElementById("opt").remove()
		document.getElementById("ques").remove()
		document.getElementById("btn").remove()
		loadScore();
	}
}

function checkAns() {
	const selectedAns = parseInt(document.querySelector('input[name="answer"]:checked').value);

	if (Questions[currQuestion].a[selectedAns].isCorrect) {
		score++;
		console.log("Correct")
		nextQuestion();
	} else {
		nextQuestion();
	}
}

        
        </script>
	</div>

</body>

</html>