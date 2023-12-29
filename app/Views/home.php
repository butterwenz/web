<?php $session = session();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YOSHIUTA快樂學歌詞</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* 自定义样式来使 <hr> 看起来像分格线 */
    hr {
      border: none;
      height: 1px;
      background-color: #000;
      margin: 10px 0; /* 控制分隔线的上下间距 */
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- 左側選項 -->
        <h3>選項</h3>
        <ul class="list-group">
        <?php if(isset($session->account)): ?>
          <li class="list-group-item">你好，<?=$session->userName?></li>
          <?php else : ?>
          <li class="list-group-item"><a href="<?= base_url()?>login">登入</a> / <a href="<?= base_url()?>register">註冊</a></li>
          <?= $session->get('account')?>
          <?php endif; ?>
          <li class="list-group-item">歌曲列表</li>
          <li class="list-group-item">新增歌曲</li>
        </ul>
      </div>
      <div class="col-md-9">
        <!-- 搜尋框 -->
        <h1>歌曲列表</h1>
        <input type="text" class="form-control" id="searchBar" placeholder="搜尋歌曲...">
        
        <!-- 最近新增的歌曲 -->
        <h3>最近新增的歌曲</h3>
        <ul class="list-group">
        <?php foreach ($songs as $song): ?>
        <table class=" song-list notranslate" border="0">
        <tbody>

            <tr valign="top">
              <td rowspan="3" style="width:90px;">
                <div style="overflow:hidden;width:80px;height:60px;position:relative;margin:0;background:#000;">
                  
                    <img style="position:relative;border:0;width:80px;" src="https://i.ytimg.com/vi/<?= $song['youtube_vid'] ?>/default.jpg">
                    <!-- 歌曲時間可以在這裡放入 -->
                  
                </div>
              </td>
              <td align="left" rowspan="2" class="song-name">
                <a href="" target="_blank"><?= $song['song_title'] ?></a><span> - <?= $song['publisher'] ?></span>
              </td>
            </tr>
            <tr valign="bottom">
              <td colspan="2" align="right">
              <?= $song["singers"] ?>
                

                <?php echo ($song['is_checked'] === '1') ? "<span> ．站長已檢查  </span>" : "" ?>

              </td>
            </tr>
            <hr>
        </tbody>
        </table>
        <?php endforeach; ?>
        <hr>
          <ul>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // 在這裡你可以開始使用 jQuery 來操作元素和處理事件
    // 例如，你可以使用 AJAX 請求從後端獲取歌曲列表，然後將它們顯示在 #recentSongs 元素中
    // 也可以實現搜尋功能，當用戶輸入內容到搜尋框時，搜尋符合的歌曲並更新列表
  </script>
</body>
</html>
