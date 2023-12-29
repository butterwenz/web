<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YOSHIUTA快樂學歌詞</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- 左側選項 -->
        <h3>選項</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="<?= base_url()?>login">登入</a> / <a href="<?= base_url()?>register">註冊</a></li>
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
        <ul class="list-group" id="recentSongs">
            <table class="song-list notranslate" border="0">
                <tbody><tr valign="top">
                  <td rowspan="3" style="width:90px;">
                    <div style="overflow:hidden;width:80px;height:60px;position:relative;margin:0;background:#000;">
                        
                      <a href="JPSongPlay-19650.html" target="_blank"><img style="position:relative;border:0;width:80px;" src="https://i.ytimg.com/vi/pHMH408ltEM/default.jpg"><span class="spanDuration">3:26</span></a>
                      
                    </div>
                    <!--<a href="JPSongPlay.asp?sn=19650"><img src="https://i.ytimg.com/vi/pHMH408ltEM/default.jpg" class="photo" width="80"></a>-->
                  </td>
                  <td align="left" rowspan="2" class="song-name">
                    <a href="JPSongPlay-19650.html" target="_blank"><span lang="ja">Tokyo Calling</span></a><span lang="ja"> - 新しい学校のリーダーズ</span>
                  </td>
                  <td align="right" style="width:140px;"><span>15</span> views / <span>0</span> likes</td>
                </tr>
                <tr valign="top">
                  <td align="right"><div class="star" ref="3" title="3" style="width: 100px;"><img src="../jquery/raty/img/star-on.png" alt="1" title="3">&nbsp;<img src="../jquery/raty/img/star-on.png" alt="2" title="3">&nbsp;<img src="../jquery/raty/img/star-on.png" alt="3" title="3">&nbsp;<img src="../jquery/raty/img/star-off.png" alt="4" title="3">&nbsp;<img src="../jquery/raty/img/star-off.png" alt="5" title="3"><input type="hidden" name="score" value="3" readonly="readonly"></div></td>
                </tr>
                <tr valign="bottom">
                  <td colspan="2" align="right">
                    <a href="javascript:;" onclick="doAddSearch('SongType','J-POP');">J-POP</a><span> ． </span>
              
                    <a href="javascript:;" lang="ja" onclick="doAddSearch('Singer','新しい学校のリーダーズ');">新しい学校のリーダーズ</a>
                    <!--<span> ． </span>-->
                    
                    <!--<a href="javascript:;" onclick="doAddSearch('FormatType','YouTube');">YouTube</a>-->
                    
                    <span> ． </span><img src="../images/check.png" style="vertical-align:text-top" alt="站長已檢查" title="站長已檢查">
                    
                  </td>
                </tr>
              </tbody></table>
            <li class="list-group-item">歌曲名稱 2</li>
            <li class="list-group-item">歌曲名稱 3</li>
          <!-- 這裡將會列出最近新增的歌曲 -->
        </ul>
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
