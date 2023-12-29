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
  <h2>會員註冊</h2>
  <form id="registerForm">
    <div class="form-group">
      <label for="registerName">暱稱</label>
      <input type="text" class="form-control" id="registerName" placeholder="請輸入暱稱">
    </div>
    <div class="form-group">
      <label for="registerUsername">帳號</label>
      <input type="text" class="form-control" id="registerUsername" placeholder="請輸入帳號">
    </div>

    <div class="form-group">
      <label for="registerPassword">密碼</label>
      <input type="password" class="form-control" id="registerPassword" placeholder="請輸入密碼">
    </div>
    <div class="form-group">
      <label for="confirmPassword">確認密碼</label>
      <input type="password" class="form-control" id="confirmPassword" placeholder="請再次輸入密碼">
    </div>
    <button type="submit" class="btn btn-primary">註冊</button>
  </form>
</div>

<!-- 引入 Bootstrap 及 jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- 你的自訂的 JavaScript -->
<script>
  // 在這裡寫你的 JavaScript 代碼，處理登入和註冊表單的提交事件、驗證等等。
  $(document).ready(function() {
    // 註冊表單提交事件
    $('#registerForm').submit(function(e) {
      e.preventDefault(); // 防止表單默認提交行為，可以在此處處理註冊邏輯
      var password = $('#registerPassword').val();
      var confirmPassword = $('#confirmPassword').val();
      
      if (password !== confirmPassword) {
        alert('密碼不一致，請重新輸入');
        return;
      }
      
      // 你的註冊處理代碼
    });
  });
</script>
</body>
</html>
