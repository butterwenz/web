<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YOSHIUTA快樂學歌詞</title>
  <!-- 引入 Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
<a href="<?= base_url()?>">回到首頁</a>
  <h2>會員登入</h2>
  <form id="loginForm" method="post" action="<?= base_url('login_model') ?>">
    <div class="form-group">
      <label for="loginUsername">帳號</label>
      <input type="text" class="form-control" id="loginUsername" name="loginUsername" placeholder="請輸入帳號">
    </div>
    <div class="form-group">
      <label for="loginPassword">密碼</label>
      <input type="password" class="form-control" id="loginPassword" name="loginPassword"  placeholder="請輸入大於8位密碼">
    </div>
    <button type="submit" class="btn btn-primary">登入</button>
  </form>
<a href="<?= base_url()?>register">沒有帳號嗎? 註冊一個新帳號</a>

<!-- 引入 Bootstrap 及 jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--avaScript -->
<script>
  $(document).ready(function() {
    $('#loginForm').submit(function(e) {
      var empty = false;
      var account = $('#loginUsername').val();
      var password = $('#loginPassword').val();
      
      if (account === '' || password === '') {
        alert('請填寫所有欄位');
        empty = true;
        return false;
      }

      if(empty){  
            e.preventDefault(); // 防止表單提交
              }
    });
  });
</script>
</body>
</html>
