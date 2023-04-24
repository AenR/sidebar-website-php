<?php $page = 'home';
include_once 'main/header.php'; ?>

<head>
  <title>Emre Eren Tan | Homepage</title>
  <style>
    .welcomeaenr {
      font-size: 18px;
      color: #373150;
    }

    .welcomeaenr::first-letter {
      font-size: 36px;
      font-weight: bold;
      color: #fc0;
    }

    .header {
      border-style: solid;
      border-left-color: #fc0;
      border-width: 0px 0px 0px 10px;
      border-radius: 5px;
      margin-left: 2px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

    .animation_text h1 {
      font-family: "Poppins", sans-serif;
      text-align: center;
      color: #373150;
      font-size: 24px;
      font-weight: 500;
      float: left;
    }

    .animation_text h1 span {
      color: #fc0;
    }

    @media(max-width:768px) {
      .animation_text h1 {
        font-size: 30px
      }
    }
  </style>
</head>
<?php include_once 'main/sidebar.php'; ?>

<div class="main_content">
  <div class="header">Emre Eren Tan | Homepage <div style="float: right;"><img class="pikachup" src="img/pika.png"></div>
  </div>
  <div class="info">
    <img class="pphoto" src="img/logo.jpg">
  </div>
  <div class="welcomeaenr">Hello! Welcome to my website. You can see my personal information here. Feel free!</div>

  <div class="animation_text">
    <h1>I am a
      <span class="typewrite" data-period="2000" data-words='[ " Developer.", " Designer.", " Creator.", "Big Dreamer."]'></span>
    </h1>
  </div>

</div>
</div>

<?php include_once 'main/footer.php'; ?>
<script>
  var Text = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  Text.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };

  window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-words');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new Text(elements[i], JSON.parse(toRotate), period);
      }
    }
  };
</script>