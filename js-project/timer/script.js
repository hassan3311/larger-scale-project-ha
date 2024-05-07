var timeBegan = null;
var timeStopped = null;
var stoppedDuration = 0;
var startInterval = null;
var flag = false;

const timerContainer = document.getElementsByClassName("timer-container")[0];

timerContainer.addEventListener("click", function(){
    if(flag){
        stopTimer();
        flag = false;
    } else {
        startTimer();
        flag = true;
    }
});

timerContainer.addEventListener("dblclick", function(){
    resetTimer();
});

function startTimer() {
    if(timeBegan === null)
        timeBegan = new Date(); 

    if(timeStopped !== null)
        stoppedDuration += (new Date() - timeStopped);

    startInterval = setInterval(clockRunning, 10);
}

function stopTimer() {
    timeStopped = new Date();
    clearInterval(startInterval);
}

function resetTimer() {
    clearInterval(startInterval);
    timeBegan = null;
    timeStopped = null;
    stoppedDuration = 0;
    flag = false;
    document.getElementById("timer-display").innerHTML = "00:00:00";
}

function clockRunning() {
    var current = new Date();
    var timeElapsed = new Date(current - timeBegan - stoppedDuration);

    var minutes = timeElapsed.getUTCMinutes();
    var seconds = timeElapsed.getUTCSeconds();
    var milliseconds = timeElapsed.getUTCMilliseconds();

    milliseconds = Math.floor(milliseconds/10);

    document.getElementById("timer-display").innerHTML =
    (minutes < 10 ? '0' + minutes : minutes) + ":" +
    (seconds < 10 ? '0' + seconds : seconds) + ":" +
    (milliseconds < 10 ? '0' + milliseconds : milliseconds);
}
