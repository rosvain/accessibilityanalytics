<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- // Change these to better suit your project -->
    <title>Accessibility Analytics - Testing Template</title>
    <meta name="description" content="Accessibility Analytics">
    <meta name="keywords" content="accessibility analytics, accessibility data, accessibility reports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta name="generator" content="Lovingly created by Mikal Morello and Ramiro Oliva using Typecast">

    <!-- // CSS Reset – http://meyerweb.com/eric/tools/css/reset/ -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
</head>
<body>
  <a href="#maincontent" class="skip">Skip to main content</a>
 <nav role="navigation">
    <div class="icon-close">
      <img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">
    </div>
    <ul class="nav">
      <li class="nav">
        <a href="javascript:void(0)" class="active">Home</a>
      </li>
      <li href="" class="nav">
        <a href="" class="inactive">Analytics</a>
      </li>
      <li class="nav">
        <a href="" class="inactive">Use Case</a>
      </li>
      <li class="nav">
        <a href=")" class="inactive">Team Members</a>
      </li>
    </ul>
    </nav>
  <header role="banner">
  </header>
  <article id="maincontent" class="main  white-gradient" role="main">
      <section class="main navigation">
        <div class="container">
          <div class="icon-menu">
            Menu
          </div>
        </div>
    </section>
    <section class="main article-heading">
      <div class="container">
          <p class="header"><em>By </em><span class="author">Ramiro &amp; Oliva </span>· <span>June 05, 2015</span></p>
          <h1>Invisible Ink: Accessibility Analytics Tracking</h1>
          <h2 class="header"><strong>Tracking accessibility through the depths of the internet</strong></h2>
       </div>
    </section>
    <section class="main">
      <div class="container">
        <p class="first-paragraph"><span class="first-letter">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius dapibus enim, vitae imperdiet dolor egestas in. Fusce id sodales ligula, id aliquam risus.</p>
        <p>Curabitur a elementum dui, quis imperdiet tortor. Maecenas ac enim tincidunt, ultricies est at, gravida quam. Vestibulum elementum hendrerit vulputate. Phasellus a suscipit magna, eu hendrerit nisl. Vestibulum ipsum dolor, pellentesque sed ultrices nec, mollis ac libero. Curabitur a elementum dui, quis imperdiet tortor. Maecenas ac enim tincidunt.</p>
        <blockquote>
          <p class="quote">“Etiam gravida sapien non massa sagittis, ac convallis nibh facilisis. Nunc in posuere purus. Aliquam tincidunt placerat risus, ac egestas mi. Sed cursus nisl sed ultricies faucibus. ” — <a>Ramiro</a><sup>1</sup></p>
        </blockquote>
        <p>Nullam aliquet leo vitae dolor tristique, sed pretium erat tempor. Curabitur mi ex, finibus sed elit sit amet <a>, consectetur efficitur risus.</a>, Duis sollicitudin hendrerit nibh eu malesuada. Morbi volutpat dui eu dui consectetur, eu sagittis arcu lobortis. Duis sollicitudin hendrerit nibh eu malesuada. Morbi volutpat dui eu dui consectetur, eu sagittis arcu lobortis.</p>
        <p>AEtiam tincidunt posuere purus in elementum. Etiam facilisis mauris quam, ut sodales magna vestibulum a. Etiam tempor diam egestas, viverra arcu id, aliquam elit. Nullam turpis lorem, auctor nec erat pretium, elementum venenatis ante.</p>
        <div class="figure">
          <img src="media/boat.png" alt="Image of boat" />
          <p class="caption">Etiam facilisis mauris quam, ut sodales magna vestibulum a.</p>
        </div>
        <p><strong>Etiam gravida sapien non massa sagittis</strong>, ac convallis nibh facilisis. Nunc in posuere purus. Aliquam tincidunt placerat risus, ac egestas mi. Sed cursus nisl sed ultricies faucibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean vehicula non nisi a rhoncus. Suspendisse vulputate tortor a enim sollicitudin, ut imperdiet tellus pulvinar. Nulla vulputate lorem eu turpis venenatis fringilla.</p>
        <blockquote class="pquote">
          <p class="pquote">Donec tristique, felis et condimentum bibendum, massa velit placerat purus, at consectetur nisl nisi quis diam.</p>
        </blockquote>
         <div class="figure">
            <video id="video" controls preload="metadata">
              <!--<source src="http://iandevlin.github.io/mdn/video-player-with-captions/video/sintel-short.mp4" type="video/mp4">
              <source src="http://iandevlin.github.io/mdn/video-player-with-captions/video/sintel-short.webm" type="video/webm">
              <track label="English" kind="subtitles" srclang="en" src="http://iandevlin.github.io/mdn/video-player-with-captions/subtitles/vtt/sintel-en.vtt" default>-->
          </video>
          <div id="video-controls" class="controls" data-state="hidden">
              <button id="playpause" type="button" data-state="play">Play/Pause</button>
              <button id="stop" type="button" data-state="stop">Stop</button>
              <div class="progress">
                  <progress id="progress" value="0" min="0">
                      <span id="progress-bar"></span>
                  </progress>
              </div>
              <button id="mute" type="button" data-state="mute">Mute/Unmute</button>
              <button id="volinc" type="button" data-state="volup">Vol+</button>
              <button id="voldec" type="button" data-state="voldown">Vol-</button>
              <button id="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
              <button id="subtitles" type="button" data-state="subtitles">CC</button>
          </div>
            </div>
        <p>Etiam tincidunt posuere purus in elementum. Etiam facilisis mauris quam, ut sodales magna vestibulum a. Etiam tempor diam egestas, viverra arcu id, aliquam elit. Nullam turpis lorem, auctor nec erat pretium, elementum venenatis ante:</p>
        <ul>
          <li>Vel laoreet metus egestas</li>
          <li>Maecenas ac enim tincidunt:<ul class="level2"><li>Curabitur a elementum dui, quis imperdiet tortor;</li><li>Etiam tempor diam egestas, viverra arcu id, aliquam elit; and so</li><li>Nullam turpis lorem, auctor nec erat pretium; ultricies est at, gravida quam.</li></ul></li>
        </ul>
        <p>Nascetur ridiculus mus. Aenean vehicula non nisi a rhoncus. Suspendisse vulputate tortor a enim sollicitudin</p>
      </div>
    </section>
    <!--<section class="main">
      <div class="container">
        <h2>HTML 5 ELEMENTS</h2>
        <hr>
        <h3>Header Levels</h3>
        <h1>Header Level 1</h1>
        <h2>Header Level 2</h2>
        <h3>Header Level 3</h3>
        <h4>Header Level 4</h4>
        <h5>Header Level 5</h5>
        <h6>Header Level 6</h6>
        <hr>
        <h3>Hidden Content</h3>
        <p>Hide boolean exists below, but is hidden to all</p>
        <div hidden>Hidden content lives here in hide boolean</div>
        <hr>
        <h3>Abbreviations</h3>
        <p>Abbreviated text has title to indicate unabbreviated name</p>
        <abbr title="HyperText Markup Language">HTML</abbr>
        <abbr title="Cascading Style Sheets">CSS</abbr>
        <hr>
        <h3>Sub and Superscripts</h3>
        <p>Subsripts and Superscripts</p>
        H<sub>2</sub>O
        1<sup>st</sup> Place
        <hr>
        <h3>Meter and Progress</h3>
        <p>Desctiption</p>
        <meter value="7" max="10">7 stars</meter>
        You are <progress value="50" max="100">50%</progress> complete.
        <hr>
        <h3>Address and Time</h3>
        <p>Desctiption</p>
        <time datetime="2011-08-24T15:00">August 24th, 2011 at 3pm</time>
        <address>
          <strong>Shay Howe</strong><br>
          <a href="http://learn.shayhowe.com">http://learn.shayhowe.com</a><br>
          <a href="mailto:hello@awesome.com">hello@awesome.com</a><br>
          600 W. Chicago Ave.<br>
          Suite 620<br>
          Chicago, IL 60654<br>
          USA  
        </address>
        <hr>
        <h3>Code Example</h3>
        <p>Desctiption</p>
        <pre><code>body {
          color: #666;
          font: 14px/20px Arial, sans-serif;
        }</code></pre>
        <hr>
        <h3>Side Comments</h3>
        <p>Small - semantically means to be rendered as a side comments or small print. This often includes copyright information or legal print.</p>
        <small>&copy; 2012 Shay Howe</small>
        <hr>
        <h3>Section Title</h3>
        <p>Desctiption</p>
        Insert Element
        <hr>
        <h3>Section Title</h3>
        <p>Desctiption</p>
        Insert Element
        <hr>
        <h3>Section Title</h3>
        <p>Desctiption</p>
        Insert Element
        <hr>
        <h3>Section Title</h3>
        <p>Desctiption</p>
        Insert Element
      </div>
    </section>-->
    <section class="main">
      <div class="container">
        <span class="hr">—</span>
        <h2>Comments</h2>
        <p class="comment-options">
          <a href="javascript:void(0)">Leave a comment</a>
        </p>
        <ul class="comment-list">
          <li class="a-comment">
            <h3 class="comment-header">Taylor Swift <span class="heading-small">Feb 25, 2015</span></h3>
            <p class="comment">liquam tincidunt placerat risus, ac egestas mi.</p>
          </li>
          <li class="a-comment">
            <h3 class="comment-header">Ramiro Oliva <span class="heading-small">Feb 13, 2015</span></h3>
            <p class="comment">Sed cursus nisl sed ultricies faucibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed cursus nisl sed ultricies faucibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..</p>
          </li>
          <li class="a-comment">
            <h3 class="comment-header">Mikal Morello <span class="heading-small">Jan 08, 2015</span></h3>
            <p class="comment">Etiam tincidunt posuere purus in elementum. Etiam facilisis mauris quam, ut sodales magna vestibulum a. Etiam tempor diam egestas, viverra arcu id, aliquam elit. Nullam turpis lorem, auctor nec erat pretium, elementum venenatis ante. </p>
          </li>
        </ul>
        </div>
      </section>
      <section class="main">
         <div class="container">
          <span class="hr">—</span>
          <h2>Footnotes</h2>
          <ol class="footnote-list">
            <li>Suspendisse vulputate tortor a enim sollicitudin <a href="javascript:void(0)">Phasellus finibus non</a>, Aliquam tincidunt placerat risus, ac egestas mi. Sed cursus nisl sed ultricies faucibus. </li>
            <li>Morbi scelerisque dapibus sem, vel laoreet metus egestas in</li>
            <li>Pellentesque non turpis risus. Vestibulum a enim nibh. Integer eget odio consequat, egestas quam id, molestie elit. Phasellus finibus non diam et vehicula. Phasellus faucibus libero id libero condimentum, sed auctor mauris sodales. Vivamus dapibus odio arcu, a tempor nisi tristique id.</li>
            <li>A description by Polybius of what they were like and how they were worked.</li>
          </ol>
      </div>
    </section>
  </article>
  <aside role="complementary">
  </aside>
  <footer>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/template.js" type="text/javascript"></script>
</body>
</html>
