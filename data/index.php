<html>

<ul>
<li>Get the lesson tasks data: add tasks.php?if= (the lesson number) <a href="http://design-ceramic.epizy.com/data/task.php?id=1">Lesson 1</a></li><hr>
<li>Get the lessons data: add lessons.php <a href="http://design-ceramic.epizy.com/data/lesson.php">Lessons</a></li><hr>
<li>Register the user: add createuser.php <a href="http://design-ceramic.epizy.com/data/createuser.php?name=stephan&email=step@gmail.com&password=api">Register example (POST)</a></li><hr>
<li>Login the user : add createuser.php (GET)<a href="http://design-ceramic.epizy.com/data/createuser.php?number=8911440514&password=api">Login the user example</a></li><hr>
<li>Update users lesson : (POST)<a href="http://design-ceramic.epizy.com/data/updatelesson.php?number=8911440514&lesson=1">Update users lesson </a></li><hr>
<li>Update user notification:(POST)<a href="http://design-ceramic.epizy.com/data/updatenotification.php?number=8911440514&notification=1">Update user notification</a></li><hr>
<li>Update user verified: (POST)<a href="http://design-ceramic.epizy.com/data/updateverified.php?number=8911440514&verified=1">Update user verified:</a></li><hr>
<li>notification for the lesson with the order number(count from the users noti)  (GET)<a href="http://design-ceramic.epizy.com/data/notification.php?number=1&lesson=1">Notification</a></li><hr>
</ul>
<h1>How to use the data in app:</h1>
<p>When a user goes to a lesson, the app makes the request to get this data, then it(the app) shows the first task
(can be text task or the recording task, it is stated in the "type" varible) and whan it is completed (that means that if the task is a text tesk, then it goes forword, if the recording task, then it plays the recording). If in the task there is a spesial string in "say" == true, than the app must show the messege and then turn on the microphone (ask me, if you don't really get it). After the user said the phrase, app must COMPARE what the user said with the string that is stated in "text" var, then it shows the seccess or the error. Ir error, try again and again, if not go to next task</p>
</html>