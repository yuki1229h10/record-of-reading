<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>読書ログの登録</title>
</head>

<body>
  <h1>読書ログの登録</h1>
  <form action="" method="POST">
    <div>
      <div>
        <label for="title">書籍名:</label>
        <input type="text" name="title" id="title"></input>
      </div>
      <div>
        <label for="author">著者名:</label>
        <input type="text" name="author" id="author"></input>
      </div>
      <div>
        <label for="status1">未読</label>
        <input type="radio" name="status" id="status1" value="未読"></input>
        <label for="status2">途中</label>
        <input type="radio" name="status" id="status2" value="途中"></input>
        <label for="status3">読了</label>
        <input type="radio" name="status" id="status3" value="読了"></input>
      </div>
      <div>
        <label for="evaluation">評価:</label>
        <select name="evaluation" id="evaluation">
          <option name="evaluation" value="1">1</option>
          <option name="evaluation" value="2">2</option>
          <option name="evaluation" value="3">3</option>
          <option name="evaluation" value="4">4</option>
          <option name="evaluation" value="5">5</option>
        </select>
      </div>
      <div>
        <label for="summary">感想:</label>
        <textarea name="summary" id="summary" cols="30" rows="10"></textarea>
      </div>
      <button type="submit">登録</button>
    </div>
  </form>
</body>

</html>
