<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Chat</title>


  <script>
	// function to retrieve questions from the database and display them in the chat container
function getQuestions() {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("q_id").innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "get_q_messages.php", true);
  xhr.send();
}

// function to retrieve answers from the database and display them in the chat container
function getAnswers() {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("a_id").innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "get_a_messages.php", true);
  xhr.send();
}

// function to submit a question to the database
function submitQuestion() {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("q_message").value = "";
      getQuestions();
    }
  };
  xhr.open("POST", "q_messages.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  const message = document.getElementById("q_message").value;
  const params = "message=" + message;
  xhr.send(params);
}

// function to submit an answer to the database
function submitAnswer() {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("a_qid").value = "";
      document.getElementById("a_message").value = "";
      getAnswers();
    }
  };
  xhr.open("POST", "a_messages.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  const qid = document.getElementById("a_qid").value;
  const message = document.getElementById("a_message").value;
  const params = "qid=" + qid + "&message=" + message;
  xhr.send(params);
}

// retrieve messages when page loads
window.onload = function () {
  getQuestions();
  getAnswers();
}

// event listener for submitting a question
document.getElementById("q_form").addEventListener("submit", function (e) {
  e.preventDefault();
  submitQuestion();
  this.reset();
});

// event listener for submitting an answer
document.getElementById("a_form").addEventListener("submit", function (e) {
  e.preventDefault();
  submitAnswer();
  this.reset();
});

	</script>


  <style>
     .container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.message-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 20px;
}

.message-box {
  width: 45%;
  height: 200px;
  background-color: #eee;
  border: 2px solid #333;
  border-radius: 10px;
  padding: 10px;
  overflow-y: scroll;
}

.input-container {
  display: flex;
  justify-content: space-between;
  width: 99%;
}

.form-container {
  width: 45%;
  margin-bottom: 20px;
}

input[type="text"] {
  width: 100%;
  height: 40px;
  padding: 3px;
  margin-bottom: 10px;
  border: 2px solid #333;
  border-radius: 5px;
}

button[type="submit"] {
  width: 100%;
  height: 40px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #555;
}


</style>
  

</head>

<body>
<div class="container">
  <h1>***SHARE HERE***</h1>
  <h1>CHAT</h1>
  <div class="message-container">
    <div class="message-box" id="q_id"><?php include('get_q_messages.php');?></div>
    <div class="message-box" id="a_id"><?php include('get_a_messages.php');?></div>
  </div>
  <div class="input-container">
    <div class="form-container">
      <form id="q_form" method="POST" action="q_messages.php">
        <input type="text" id="q_message" name="q_message" placeholder="Type your problem" />
        <button type="submit" name="submit1">Submit</button>
      </form>
    </div>
    <div class="form-container">
      <form id="a_form" method="POST" action="a_messages.php">
        <input type="text" id="a_qid" name="a_qid" placeholder="Enter problem ID" />
        <input type="text" id="a_message" name="a_message" placeholder="Type your solution" />
        <button type="submit" name="submit2">Submit</button>
      </form>
    </div>
  </div>
</div>

  <script src="script.js"></script>
</body>
</html>

<a href="MENTAL HEALTH.html">Back to Home</a>
    
