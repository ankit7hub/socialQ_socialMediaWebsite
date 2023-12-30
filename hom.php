<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SocialQ </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/home.css" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
  <script src="./js/home.js"></script>
  <!-- header starts -->
  <div class="header">
    <div class="header__left">
      <img src="images\logod.png" alt="" />
      <div class="header__input">
        <span class="material-symbols-outlined"> search </span>
        <input type="text" placeholder="Search SocialQ" />
      </div>
    </div>

    <div class="header__middle">
      <div class="header__option active">
        <span class="material-symbols-outlined">
          Home
        </span>
        <div class="hide">Home</div>
      </div>
      <div class="header__option">
        <span class="material-symbols-outlined">
          pages
        </span>
        <div class="hide">Shorts</div>
      </div>
      <div class="header__option">
        <span class="material-symbols-outlined"> subscriptions </span>
      </div>
      <div class="hide">Videos</div>
      <div class="header__option">
        <span class="material-symbols-outlined">
          sentiment_very_satisfied
        </span>
        <div class="hide">Memes</div>
      </div>
      <div class="header__option">
        <span class="material-symbols-outlined"> supervised_user_circle </span>
      </div>
      <div class="hide">Friends</div>
    </div>

    <div class="header__right">
      <div class="header__info">
        <img class="user__avatar" src="images/profile.jpg" alt="" />
        <h4>lutera_killer</h4>
      </div>
      <span class="material-symbols-outlined"> add </span>
      <span class="material-symbols-outlined"> forum </span>
      <span class="material-symbols-outlined"> notifications_active </span>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
          aria-expanded="false"></button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Theme</a></li>
          <li><a class="dropdown-item" href="#">Help & Support</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- header ends -->

  <!-- main body starts -->
  <div class="main__body">
    <!-- feed starts -->
    <div class="feed">
      <div class="storyReel">
        <!-- story starts -->
        <div style="
              background-image: url('https://images.unsplash.com/photo-1527082395-e939b847da0d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');
            " class="story">
          <img class="user__avatar story__avatar" src="https://www.shareicon.net/data/2016/05/24/770139_man_512x512.png"
            alt="" />
          <h4>lutera_killer</h4>
        </div>
        <!-- story ends -->

        <!-- story starts -->
        <div style="
              background-image: url('./images/aja.jpg');
            " class="story">
          <img class="user__avatar story__avatar" src="images/profile.jpg" alt="" />
          <h4>ajay</h4>
        </div>
        <!-- story ends -->

        <!-- story starts -->
        <div style="
              background-image: url('./images/deep.jpg');
            " class="story">
          <img class="user__avatar story__avatar" src="images/profile.jpg" alt="" />
          <h4>deepa</h4>
        </div>
        <!-- story ends -->

        <!-- story starts -->
        <div style="
              background-image: url('./images/kash.jpg');
            " class="story">
          <img class="user__avatar story__avatar" src="images/profile.jpg" alt="" />
          <h4>kashish</h4>
        </div>
        <!-- story ends -->

        <!-- story starts -->
        <div style="
              background-image: url('./images/anki.jpg');
            " class="story">
          <img class="user__avatar story__avatar"
            src="https://image.freepik.com/free-vector/businessman-avatar-cartoon-character-profile_18591-50584.jpg"
            alt="" />
          <h4>ankit</h4>
        </div>
        <!-- story ends -->

        <!-- story starts -->
        <div style="
              background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTBHC2s4NFdzXEsVzvBPGjkrSePQa-8XFuNtQ&usqp=CAU');
            " class="story">
          <img class="user__avatar story__avatar" src="images/profile.jpg" alt="" />
          <h4>Rahu</h4>
        </div>
        <!-- story ends -->
      </div>

      <!-- message sender starts -->
      <div class="messageSender">
        <div class="messageSender__top">
          <img class="user__avatar" src="images/profile.jpg" alt="" />
          <form>
            <input class="messageSender__input" placeholder="What's on your mind?" type="text" />
          </form>
        </div>

        <div class="messageSender__bottom">
          <div class="messageSender__option" onclick="webcam()">
            <span style="color: red" class="material-symbols-outlined"> videocam </span>
            <h3>Live</h3>
          </div>
          <div class="messageSender__option">
            <span style="color: green" class="material-symbols-outlined"> photo_library </span>
            <h3>Post</h3>
          </div>

          <div class="messageSender__option">
            <span style="color: orange" class="material-symbols-outlined"> insert_emoticon </span>
            <h3>Feeling</h3>
          </div>

        </div>
      </div>
      <div class="live_video">
        <video autoplay="true" id="videoElement">

        </video>
      </div>
      <!-- message sender ends -->

      <!-- post starts -->
      <div class="post">
        <div class="post__top">
          <img class="user__avatar post__avatar" src="images/profile.jpg" alt="" />
          <div class="post__topInfo">
            <h3>ketu</h3>
            <p>25 April at 20:30</p>
          </div>
        </div>

        <div class="post__bottom">
          <p>Message</p>
        </div>

        <div class="post__image">
          <img
            src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2Fyc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
            alt="" />
        </div>

        <div class="post__options">
          <div class="post__option">
            <span class="material-symbols-outlined"> thumb_up </span>
            <p>Like</p>
          </div>

          <div class="post__option">
            <span class="material-symbols-outlined"> chat_bubble_outline </span>
            <p>Comment</p>
          </div>

          <div class="post__option">
            <span class="material-symbols-outlined"> near_me </span>
            <p>Share</p>
          </div>
        </div>
      </div>
      <!-- post ends -->

      <!-- post starts -->
      <div class="post">
        <div class="post__top">
          <img class="user__avatar post__avatar" src="images/profile.jpg" alt="" />
          <div class="post__topInfo">
            <h3>Shivam</h3>
            <p>25 April at 20:30</p>
          </div>
        </div>

        <div class="post__bottom">
          <p>Post Without Image</p>
        </div>

        <div class="post__options">
          <div class="post__option">
            <span class="material-symbols-outlined"> thumb_up </span>
            <p>Like</p>
          </div>

          <div class="post__option">
            <span class="material-symbols-outlined"> chat_bubble_outline </span>
            <p>Comment</p>
          </div>

          <div class="post__option">
            <span class="material-symbols-outlined"> near_me </span>
            <p>Share</p>
          </div>
        </div>
      </div>
      <!-- post ends -->

      <!-- post starts -->
      <div class="post">
        <div class="post__top">
          <img class="user__avatar post__avatar" src="images/profile.jpg" alt="" />
          <div class="post__topInfo">
            <h3>Mirnal</h3>
            <p>25 April at 20:30</p>
          </div>
        </div>

        <div class="post__bottom">
          <p>Message</p>
        </div>

        <div class="post__image">
          <img src="https://wallpapercave.com/wp/wp7357832.jpg" alt="" />
        </div>

        <div class="post__options">
          <div class="post__option">
            <span class="material-symbols-outlined"> thumb_up </span>
            <p>Like</p>
          </div>

          <div class="post__option">
            <span class="material-symbols-outlined"> chat_bubble_outline </span>
            <p>Comment</p>
          </div>

          <div class="post__option">
            <span class="material-symbols-outlined"> near_me </span>
            <p>Share</p>
          </div>
        </div>
      </div>
      <!-- post ends -->
    </div>
    <!-- feed ends -->


</body>

</html>