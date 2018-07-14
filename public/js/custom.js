

var picks = [];
var score = 0;

function addRock(img){
	if(!img.includes('c')){
		if(picks.length < 3){
			var pos = picks.push('rock');
			img = img.concat(pos);
		}
	}

	console.log(img);
	document.getElementById(img).src="storage/stones.png";
};

function addPaper(img){

	if(!img.includes('c')){
		if(picks.length < 3){
			var pos = picks.push('paper');
			img = img.concat(pos);
		}
	}

	console.log(img);
	document.getElementById(img).src="storage/copy.png";

};

function addScissors(img){
	if(!img.includes('c')){
		if(picks.length < 3){
			var pos = picks.push('scissors');
			img = img.concat(pos);
		}
	}

	console.log(img);
	document.getElementById(img).src="storage/scissors.png";
};

function play(){
	if(picks.length !=3){
		alert('Please choose 3');
	}else{

		var result = {
			win:0,
			lose:0,
			draw:0
		};

		for (var i = picks.length - 1; i >= 0; i--) {

			if(picks[i] === 'rock'){
				addRock('imgr'+ (i+1));
			}else if (picks[i] === 'paper') {
				addPaper('imgr'+ (i+1));
			}else{
				addScissors('imgr'+ (i+1));
			}

			var comp = compare(picks[i], generateChoice(i+1));
			if(comp === 0){
				result.draw++;
			}else if(comp === 1){
				result.win++;
			}else{
				result.lose++;
			}
		}

		var points = computePoints(result);

		document.getElementById('result').innerHTML = 'You got ' + points + ' point/s for this round!';
		picks = []; //reset picks

		document.getElementById('img1').src = '';
		document.getElementById('img2').src = '';
		document.getElementById('img3').src = '';

		//add score
		score += points;
		document.getElementById('points').innerHTML = 'Player Points: ' + score;
	}
}

function generateChoice(i){
	var computerChoice = Math.random();
	if (computerChoice < 0.34) {
		addRock('imgc'+i);
		return "rock";
	} else if(computerChoice <= 0.67) {
		addPaper('imgc'+i);
		return "paper";
	} else {
		addScissors('imgc'+i);
		return "scissors";
	}
}

function compare(a, b){
	if (a === b) {
		return 0;
	}

	if (a === 'rock') {
		if (b === 'paper') {
			return -1;
		}else{
			return 1;
		}
	}

	if (a === 'paper') {
		if (b === 'scissors') {
			return -1;
		}else{
			return 1;
		}
	}

	if (a === 'scissors') {
		if (b === 'rock') {
			return -1;
		}else{
			return 1;
		}
	}
}

function computePoints(result){
	var total=0;

	if(result.win > 1){
		total += (result.win * 2);
	}else{
		total += result.win;
	}
	if(result.lose > 1){
		total -= (result.lose * 2);
	}else{
		total -= result.lose;
	}

	return total;
}
