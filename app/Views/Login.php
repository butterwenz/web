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
  <form id="loginForm">
    <div class="form-group">
      <label for="loginEmail">Email 地址</label>
      <input type="email" class="form-control" id="loginEmail" placeholder="請輸入Email">
    </div>
    <div class="form-group">
      <label for="loginPassword">密碼</label>
      <input type="password" class="form-control" id="loginPassword" placeholder="請輸入密碼">
    </div>
    <button type="submit" class="btn btn-primary">登入</button>
  </form>
<a href="<?= base_url()?>register">沒有帳號嗎? 註冊一個新帳號</a>

<!-- 引入 Bootstrap 及 jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- 你的自訂的 JavaScript -->
<script>
  // 在這裡寫你的 JavaScript 代碼，處理登入和註冊表單的提交事件、驗證等等。
  $(document).ready(function() {
    // 登入表單提交事件
    $('#loginForm').submit(function(e) {
      e.preventDefault(); // 防止表單默認提交行為，可以在此處處理登入邏輯
      // 你的登入處理代碼
    });
  });
</script>
</body>
</html>
