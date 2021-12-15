<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>halaman1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="lapak">
    <div class="header">
      <div class="header-logo">INIWEB</div>
      <div class="header-list">
        <ul>
          <li class="tentang"><a href="#">Tentang</a></li>
          <li><a href="#">Pelajaran</a></li>
          <li><a href="#">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>

    <div class="main">
      <div class="copy-container">
        <h1>HELLO WORLD<span>.</span></h1>
        <h2>Ayo belajar coding</h2>
      </div>
      
      <div class="contents">
        <h3 class="section-title">Pelajaran</h3>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg">
          <p>HTML & CSS</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
          <p>PHP</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
          <p>Ruby</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
          <p>Swift</p>
        </div>
      </div>
      
      <div class="contact-form">
        <h3 class="section-title">Hubungi kami</h3>
        <p>Email (Wajib Diisi)</p>
        <input>
        
        <p>Pesan (Wajib Diisi)</p> 
        <textarea></textarea>
        
        <p>*Bidang Wajib Diisi</p>
        <input class="contact-submit" type="submit" value="kirim" >
        
      </div>
    </div>

    <div class="footer">
      <div class="footer-logo">Progate</div>
      <div class="footer-list">
        <ul>
          <li>Tentang</li>
          <li>Karier</li>
          <li>Hubungi Kami</li>
        </ul>
      </div>
    </div>
  </div>
  </body>
</html>