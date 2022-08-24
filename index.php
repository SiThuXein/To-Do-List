
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="list_1" id="myDiv">
        <h1>To Do List</h1>
        <input type="text"   id="myInput">
        <span onclick="addItem()">Add</span>
      </div>
        <ul id="myUL">
          <li class="checked">Learn news</li>
          <li>Play games</li>
          <li>Walking with my dog</li>
        </ul>
    </div>
  </body>
  <script>
 

  var list = document.querySelector('ul');
  list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'LI') {
      ev.target.classList.toggle('checked');
    }
  });
  </script>
</html>
