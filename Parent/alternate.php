<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <div class="right">Statement 1</div>
  <div class="left">Statement 2</div>
  <div class="right">Statement 3</div>
  <div class="left">Statement 4</div>
</div>




</body>

<style>

.container {
  width: 100%;
  overflow: hidden;
}

.right {
  float: right;
  clear: right;
  width: 50%;
  text-align: right;
}

.left {
  float: left;
  clear: left;
  width: 50%;
  text-align: left;
}
</style>
</html>