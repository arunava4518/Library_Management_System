<?php
include("conn.php");

$error="";
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }
   
else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admindas.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}
   
}

 
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

    <style></style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="" />
    <meta name="keywords" content="free books, books to read, free ebooks, audio books, read books for free, read books online, online library">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="OpenLibrary.org" />
    <meta name="creator" content="OpenLibrary.org" />
    <meta name="copyright" content="Original content copyright; 2007-2015" />
    <meta name="distribution" content="Global" />
    <meta name="theme-color" content="#e2dcc5">


    <link rel="canonical" href="https://openlibrary.org/" />
    <link rel="preconnect" href="https://analytics.archive.org">

    <link rel="search" type="application/opensearchdescription+xml" title="Open Library" href="/static/opensearch.xml">
    <link rel="manifest" href="/static/manifest.json">

    <link href="/static/images/openlibrary-128x128.png" rel="apple-touch-icon" />
    <link href="/static/images/openlibrary-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="/static/images/openlibrary-167x167.png" rel="apple-touch-icon" sizes="167x167" />
    <link href="/static/images/openlibrary-180x180.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="/static/images/openlibrary-192x192.png" rel="icon" sizes="192x192" />
    <link href="/static/images/openlibrary-128x128.png" rel="icon" sizes="128x128" />
    <link rel="stylesheet" href="style.css">
    <link href="/static/build/page-home.css?v=e71a5cacad71220a720b32fbe1bfb0ef" rel="stylesheet" type="text/css" />

    <noscript>
      <style>
        /* Don't hide content with clamp if no js to show more/less */
        .clamp {
          -webkit-line-clamp: unset !important;
        }

        /* @width-breakpoint-tablet media query: */
        @media only screen and (min-width: 768px) {
          /* Sticky navbar to top of screen if compact title cannot be stickied */
          .work-menu {
            top: 0 !important;
          }
        }
      </style>
    </noscript>
 <script>


  </script>

    <!-- JavaScript execution queue that will be emptied at the bottom of the page -->
    <script type="text/javascript">window.q = [];</script>
    <meta name="google-site-verification" content="KrqcZD4l5BLNVyjzSi2sjZBiwgmkJ1W7n6w7ThD7A74" />
    <meta name="google-site-verification" content="vtXGm8q3UgP-f6qXTvQBo85uh3nmIYIotVqqdJDpyz4" />
    <meta name="alexaVerifyID" content="wJKlTRj1Z1OI4G-J0w9R-cWhJjw" /> <!-- Necessary for Alexa -->
    <!-- Drini, Google Search Console -->
    <meta name="google-site-verification" content="XYOJ9Uj0MBr6wk7kj1IkttXrqY-bbRstFMADTfEt354" />







    <meta name="description" content="Open Library is an open, editable library catalog, building towards a web page for every book ever published. Read, borrow, and discover more than 3M books for free." />
    
    <title>Welcome to  Library Management | Library Management</title>

</head>




<body class="" style="background-image:url(images/library1.jpg)" >
  <script>
      // Provide a signal that JS will load
      document.body.className += ' client-js';
  </script>
  <span id="top"></span>
  <div id="offline-info">It looks like you&#39;re offline.</div>
  
  
  
    <div id="donato"></div>
    <script src="/cdn/archive.org/donate.js" data-platform="ol"></script>
    


</div>

  
<header id="header-bar" class="header-bar">



  <div class="logo-component">
    <a href="/" title="The Internet Archive&#39;s Open Library: One page for every book">
      <div class="logo-txt">
        <img class="logo-icon" src="images/library.png" style="height: 100px;"
          width="189" height="47"
          alt="Open Library logo"/>
      </div>
    </a>
  </div>



  <ul class="navigation-component">
    <li>











<div class="mybooks-component header-dropdown">
  <a href="/account/loans" class="" style="color:red;font-size :20px;"data-ol-link-track=MainNav|MyBooks>My Books</a>
</div>
</li>
    <li>











<div class="browse-component header-dropdown">
  <details>
    <summary >
   
      <span class="shift">Menu</span>
      
      <img class="down-arrow" aria-hidden="true" src="/static/images/down-arrow.png" alt="" role="presentation" width="7" height="4">
    </summary>
    <div
    class="browse-dropdown-component navigation-dropdown-component"
    >
      <ul class="dropdown-menu browse-dropdown-menu">
        <li>
        <a href="/subjects" data-ol-link-track=MainNav|Subjects>
          Subjects
        </a>
        </li>
        <li>
        <a href="/trending" data-ol-link-track=MainNav|Trending>
          Trending
        </a>
        </li>
        <li>
        <a href="/explore" data-ol-link-track=MainNav|Explore>
          Library Explorer
        </a>
        </li>
        <li>
        <a href="/lists" data-ol-link-track=MainNav|Lists>
          Lists
        </a>
        </li>
        <li>
        <a href="/collections" data-ol-link-track=MainNav|Collections>
          Collections
        </a>
        </li>
        <li>
        <a href="/k-12" data-ol-link-track=MainNav|K12Library>
          K-12 Student Library
        </a>
        </li>
        <li>
        <a href="/random" data-ol-link-track=MainNav|RandomBook>
          Random Book
        </a>
        </li>
        <li>
        <a href="/advancedsearch" data-ol-link-track=MainNav|AdvancedSearch>
          Advanced Search
        </a>
        </li>
      </ul>
    </div>
  </details>
</div>
</li>
  </ul>

  <div class="search-component">
    <div class="search-bar-component">
      <div class="search-bar">
        <div class="search-facet">
          <label class="search-facet-selector">
            <span aria-hidden="true" class="search-facet-value"></span>
            <select aria-label="Search by">
              <option value='all'>All</option>
              <option value='title'>Title</option>
              <option value='author'>Author</option>
              <option value='text'>Text</option>
              <option value='subject'>Subject</option>
              <option value='lists'>Lists</option>
              <option value='advanced'>Advanced</option>
            </select>
          </label>
        </div>
        <form class="search-bar-input" action="/search" method="get">
          <input type="text" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
          <input name="mode" type="checkbox" aria-hidden="true" aria-label="Search checkbox" checked="checked" value="" id="ftokenstop" class="hidden instantsearch-mode">
          <input type="submit" value="" class="search-bar-submit" aria-label="Search submit">
        </form>
      </div>
      <div class="search-dropdown">
        <ul class="search-results">
        </ul>
      </div>
    </div>
  </div>

  <ul class="auth-component">
    <li class="hide-me">
      <a class="btn primary"
         href="home.php">Log In</a></li>
    <li><a class="btn primary" href="home.php">Sign Up</a></li>
  </ul>
  
  











<div class="hamburger-component header-dropdown">
  <details>
    <summary data-ol-link-track="HeaderBar|Hamburger">
      
      <img class="down-arrow" aria-hidden="true" src="/static/images/down-arrow.png" alt="" role="presentation" width="7" height="4">
    </summary>
    <div class="mask-menu"></div>
    <div
    class="app-drawer"
    >
      <ul class="dropdown-menu hamburger-dropdown-menu">
        <li class="subsection">
          My Open Library
        </li>
        <li class="login-links">
          <a class="login-links__secondary" href="home.php">Log In</a>
          <a class="login-links__primary" href="home.php">Sign Up</a>
        </li>
        <li class="subsection">
          Browse
        </li>
        <li>
        <a href="/subjects" data-ol-link-track=Hamburger|Subjects>
          Subjects
        </a>
        </li>
        <li>
        <a href="/trending" data-ol-link-track=Hamburger|Trending>
          Trending
        </a>
        </li>
        <li>
        <a href="/explore" data-ol-link-track=Hamburger|Explore>
          Library Explorer
        </a>
        </li>
        <li>
        <a href="/lists" data-ol-link-track=Hamburger|Lists>
          Lists
        </a>
        </li>
        <li>
        <a href="/collections" data-ol-link-track=Hamburger|Collections>
          Collections
        </a>
        </li>
        <li>
        <a href="/k-12" data-ol-link-track=Hamburger|K12Library>
          K-12 Student Library
        </a>
        </li>
        <li>
        <a href="/random" data-ol-link-track=Hamburger|RandomBook>
          Random Book
        </a>
        </li>
        <li>
        <a href="/advancedsearch" data-ol-link-track=Hamburger|AdvancedSearch>
          Advanced Search
        </a>
        </li>
        <li class="subsection">
          More
        </li>
        <li>
        <a href="/books/add" data-ol-link-track=Hamburger|AddBook>
          Add a Book
        </a>
        </li>
        <li>
        <a href="/recentchanges" data-ol-link-track=Hamburger|RecentEdits>
          Recent Community Edits
        </a>
        </li>
        <li>
        <a href="/developers" data-ol-link-track=Hamburger|Developers>
          Developer Center
        </a>
        </li>
        <li>
        <a href="/help" data-ol-link-track=Hamburger|Help>
          Help &amp; Support
        </a>
        </li>
      </ul>
    </div>
  </details>
</div>


</header>
<header class="header-bar mobile">
  <ul class="navigation-component mobile">
    <li>











<div class="btn primary">
  <a href="" class="btn primary" data-ol-link-track=MainNav|MyBooks>My Books</a>
</div>
</li>
    <li>











<div class="browse-component header-dropdown">
  <details>
    <summary >
      Browse
      <span class="shift">Menu</span>
      
      <img class="down-arrow" aria-hidden="true" src="/static/images/down-arrow.png" alt="" role="presentation" width="7" height="4">
    </summary>
    <div
    class="browse-dropdown-component navigation-dropdown-component"
    >
      <ul class="dropdown-menu browse-dropdown-menu">
        <li>
        <a href="/subjects" data-ol-link-track=MainNav|Subjects>
          Subjects
        </a>
        </li>
        <li>
        <a href="/trending" data-ol-link-track=MainNav|Trending>
          Trending
        </a>
        </li>
        <li>
        <a href="/explore" data-ol-link-track=MainNav|Explore>
          Library Explorer
        </a>
        </li>
        <li>
        <a href="/lists" data-ol-link-track=MainNav|Lists>
          Lists
        </a>
        </li>
        <li>
        <a href="/collections" data-ol-link-track=MainNav|Collections>
          Collections
        </a>
        </li>
        <li>
        <a href="/k-12" data-ol-link-track=MainNav|K12Library>
          K-12 Student Library
        </a>
        </li>
        <li>
        <a href="/random" data-ol-link-track=MainNav|RandomBook>
          Random Book
        </a>
        </li>
        <li>
        <a href="/advancedsearch" data-ol-link-track=MainNav|AdvancedSearch>
          Advanced Search
        </a>
        </li>
      </ul>
    </div>
  </details>
</div>
</li>
  </ul>
</header>

  
  <div id="test-body-mobile">
    
    <div class="flash-messages">
    </div>
    
    
    











<div id="contentBody" style="background-color:yellow;">

  
<div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2">Welcome to  MY BOOKS</h2>
  </div>

  <div class="carousel-container">
    <div
      class="carousel carousel--progressively-enhanced"
      id="welcome_carousel"
      data-config="[&quot;#welcome_carousel&quot;, 3, 3, 2, 1, 1]"
    >
      <div class="carousel__item tutorial__item">
        <a
          href="/help/faq/borrow"
          tabindex="0"
          data-ol-link-track="OnboardingCarouselClick|Read"
        >
          <img src="images/read.png" />
          <div class="card__text">
            <p>Read Free Library Books Online</p>
            <p class="small">Millions of books available through Controlled Digital Lending</p>
          </div>
        </a>
      </div>

      <div class="carousel__item tutorial__item show-modal">
        <a
          href="/help/faq/reading-log"
          tabindex="0"
          data-ol-link-track="OnboardingCarouselClick|Organize"
        >
          <img src="images/track.png" />
          <div class="card__text">
            <p>Keep Track of your Favorite Books</p>
            <p class="small">Organize your Books using Lists &amp; the Reading Log</p>
          </div>
        </a>
      </div>

      <div class="carousel__item tutorial__item">
        <a
          href="/explore"
          tabindex="0"
          data-ol-link-track="OnboardingCarouselClick|Explore"
        >
          <img src="images/library_explorer.png" />
          <div class="card__text">
            <p>Try the virtual Library Explorer</p>
            <p class="small">Digital shelves organized like a physical library</p>
          </div>
        </a>
      </div>

      <div class="carousel__item tutorial__item">
        <a
        href="/search/inside"
        tabindex="0"
        data-ol-link-track="OnboardingCarouselClick|FulltextSearch"
        >
          <img src="/static/images/onboarding/fulltext.png" />
          <div class="card__text">
            <p>Try Fulltext Search</p>
            <p class="small">Find matching results within the text of millions of books</p>
          </div>
        </a>
      </div>

      <div class="carousel__item tutorial__item">
        <a
          href="/librarians"
          tabindex="0"
          data-ol-link-track="OnboardingCarouselClick|Librarians"
        >
          <img src="/static/images/onboarding/librarian.png" />
          <div class="card__text">
            <p>Be an Open Librarian</p>
            <p class="small">Dozens of ways you can help improve the library</p>
          </div>
        </a>
      </div>

      <div class="carousel__item tutorial__item">
        <a
          href="https://forms.gle/enM9rGoPBGB89kd4A"
          tabindex="0"
          data-ol-link-track="OnboardingCarouselClick|Feedback"
        >
          <img attribution="Reading by Chattapat from the Noun Project" src="/static/images/onboarding/feedback.png" />
          <div class="card__text">
            <p>Send us feedback</p>
            <p class="small">Your feedback will help us improve these cards</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="" href="/trending/daily">Trending Books</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel- carousel--progressively-enhanced"
      data-config="[&quot;.carousel-&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/trending/daily.json&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL18020194W">
      <img class="bookcover" loading="lazy"
        title="It Ends With Us by Colleen Hoover"
        alt="It Ends With Us by Colleen Hoover"
      src="images/10473609-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    




















<form method="POST" action="/borrow/ia/itendswithus0000hoov" class="join-waitlist waitinglist-form">
  <input type="hidden" name="action" value="join-waitinglist"/>
  <div class="cta-button-group">
    <input type="submit" class="cta-btn cta-btn--unavailable" id="waitlist_ebook" value="Join Waitlist"/>
  </div>
</form>



  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL27733867W">
      <img class="bookcover" loading="lazy"
        title="It Starts with Us by Colleen Hoover"
        alt="It Starts with Us by Colleen Hoover"
      src="images/12749873-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL27733867W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL17590212W">
      <img class="bookcover" loading="lazy"
        title="The Subtle Art of Not Giving a F*ck by Mark Manson"
        alt="The Subtle Art of Not Giving a F*ck by Mark Manson"
      src="images/8231990-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a class="cta-btn cta-btn--shell cta-btn--preview"
     data-iframe-src="https://archive.org/details/subtleartofnotgi0000mans_n2n5?view=theater&wrapper=false"
     data-iframe-link="https://archive.org/details/subtleartofnotgi0000mans_n2n5"
     data-ol-link-track="CTAClick|Preview" href="#bookPreview">Preview</a>
</div>

<div class="hidden">
  <div class="floater" id="bookPreview">
    <div class="book-preview">
      <div class="floaterHead">
        <h2>Preview Book</h2>
        <a class="dialog--close" data-key="book_preview">&times;<span class="shift">Close</span></a>
      </div>
      <div class="iframe-container">
        <iframe style="width:100%; height:515px"></iframe>
      </div>
      <p class="learn-more">
        <a data-key="book_preview_learn_more"
           data-ol-link-track="book_preview_learn_more">
          See more about this book on Archive.org
        </a>
      </p>
    </div>
  </div>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL1968368W">
      <img class="bookcover" loading="lazy"
        title="The 48 Laws of Power by Robert Greene"
        alt="The 48 Laws of Power by Robert Greene"
      src="images/6424160-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/48lawsofpow00gree?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL2010879W">
      <img class="bookcover" loading="lazy"
        title="Rich Dad, Poor Dad by Robert T. Kiyosaki, Sharon L. Lechter, Tim Wheeler"
        alt="Rich Dad, Poor Dad by Robert T. Kiyosaki, Sharon L. Lechter, Tim Wheeler"
      src="images/8315302-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    




















<form method="POST" action="/borrow/ia/richdadpoordadwh0000kiyo_c5p7" class="join-waitlist waitinglist-form">
  <input type="hidden" name="action" value="join-waitinglist"/>
  <div class="cta-button-group">
    <input type="submit" class="cta-btn cta-btn--unavailable" id="waitlist_ebook" value="Join Waitlist"/>
  </div>
</form>



  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL17930368W">
      <img class="bookcover" loading="lazy"
        title="Atomic Habits by James Clear"
        alt="Atomic Habits by James Clear"
      src="images/12539702-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a class="cta-btn cta-btn--shell cta-btn--preview"
     data-iframe-src="https://archive.org/details/atomic-habits-tiny-changes-remarkable-results-by-james-clear-z-lib.org?view=theater&wrapper=false"
     data-iframe-link="https://archive.org/details/atomic-habits-tiny-changes-remarkable-results-by-james-clear-z-lib.org"
     data-ol-link-track="CTAClick|Preview" href="#bookPreview">Preview</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL24390422W">
      <img class="bookcover" loading="lazy"
        title="Twisted Love by Ana Huang"
        alt="Twisted Love by Ana Huang"
      data-lazy="//covers.openlibrary.org/b/id/10926303-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL24390422W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL24178205W">
      <img class="bookcover" loading="lazy"
        title="The Love Hypothesis by Ali Hazelwood"
        alt="The Love Hypothesis by Ali Hazelwood"
      data-lazy="//covers.openlibrary.org/b/id/10601402-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL24178205W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL27215385W">
      <img class="bookcover" loading="lazy"
        title="Atomic Habits Journal Tracking by Matt Eglesias"
        alt="Atomic Habits Journal Tracking by Matt Eglesias"
      data-lazy="//covers.openlibrary.org/b/id/12993845-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL27215385W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL16014245W">
      <img class="bookcover" loading="lazy"
        title="Shatter Me by Tahereh Mafi"
        alt="Shatter Me by Tahereh Mafi"
      data-lazy="//covers.openlibrary.org/b/id/6974992-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<form method="POST" action="/borrow/ia/shatterme00mafi_0" class="join-waitlist waitinglist-form">
  <input type="hidden" name="action" value="join-waitinglist"/>
  <div class="cta-button-group">
    <input type="submit" class="cta-btn cta-btn--unavailable" id="waitlist_ebook" value="Join Waitlist"/>
  </div>
</form>



  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL28744393W">
      <img class="bookcover" loading="lazy"
        title="King of Wrath by Ana Huang"
        alt="King of Wrath by Ana Huang"
      data-lazy="//covers.openlibrary.org/b/id/12992939-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL28744393W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL20068530W">
      <img class="bookcover" loading="lazy"
        title="Verity by Colleen Hoover"
        alt="Verity by Colleen Hoover"
      data-lazy="//covers.openlibrary.org/b/id/8747160-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL20068530W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL20018811W">
      <img class="bookcover" loading="lazy"
        title="November 9 by Colleen Hoover"
        alt="November 9 by Colleen Hoover"
      data-lazy="//covers.openlibrary.org/b/id/12439714-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<form method="POST" action="/borrow/ia/november9novel0000hoov" class="join-waitlist waitinglist-form">
  <input type="hidden" name="action" value="join-waitinglist"/>
  <div class="cta-button-group">
    <input type="submit" class="cta-btn cta-btn--unavailable" id="waitlist_ebook" value="Join Waitlist"/>
  </div>
</form>



  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL82563W">
      <img class="bookcover" loading="lazy"
        title="Harry Potter and the Philosopher&#39;s Stone by J. K. Rowling"
        alt="Harry Potter and the Philosopher&#39;s Stone by J. K. Rowling"
      data-lazy="//covers.openlibrary.org/b/id/10521270-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<form method="POST" action="/borrow/ia/harrypotterphilo0000rowl_j1k7" class="join-waitlist waitinglist-form">
  <input type="hidden" name="action" value="join-waitinglist"/>
  <div class="cta-button-group">
    <input type="submit" class="cta-btn cta-btn--unavailable" id="waitlist_ebook" value="Join Waitlist"/>
  </div>
</form>



  </div>
</div>


      


<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL27730094W">
      <div class="carousel__item__blankcover"  title="A Light in the Flame">
        <div class="carousel__item__blankcover--title">
A Light in the Flame 
</div>
        <div class="carousel__item__blankcover--authors">
Jennifer L. Armentrout 
</div>
      </div>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL27730094W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL28695130W">
      <img class="bookcover" loading="lazy"
        title="I Fell in Love with Hope by Lancali"
        alt="I Fell in Love with Hope by Lancali"
      data-lazy="//covers.openlibrary.org/b/id/12871748-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL28695130W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL19667762W">
      <img class="bookcover" loading="lazy"
        title="If he had been with me by Laura Nowlin"
        alt="If he had been with me by Laura Nowlin"
      data-lazy="//covers.openlibrary.org/b/id/9614548-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/ifhehadbeenwithm0000nowl?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL16142094W">
      <img class="bookcover" loading="lazy"
        title="Wonder by R. J. Palacio"
        alt="Wonder by R. J. Palacio"
      data-lazy="//covers.openlibrary.org/b/id/8223160-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/wonder0000pala_i4b7?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>

  
  













  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="public_domain" href="/read">Classic Books</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-public_domain carousel--progressively-enhanced"
      data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/search.json?q=ddc%3A8%2A+first_publish_year%3A%5B%2A+TO+1950%5D+publish_year%3A%5B2000+TO+%2A%5D+NOT+public_scan_b%3Afalse&amp;fields=key%2Ctitle%2Csubtitle%2Cauthor_name%2Ccover_i%2Cia%2Cavailability%2Cid_project_gutenberg%2Cid_librivox%2Cid_standard_ebooks%2Cid_openstax&amp;has_fulltext=true&quot;, &quot;pageMode&quot;: &quot;offset&quot;, &quot;limit&quot;: 20}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL815443W">
      <img class="bookcover" loading="lazy"
        title="Tristana by Benito Pérez Galdós"
        alt="Tristana by Benito Pérez Galdós"
      src="//covers.openlibrary.org/b/id/10468722-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/tristana00galdgoog?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL4315764W">
      <img class="bookcover" loading="lazy"
        title="The Heavenly Twins by Sarah Grand"
        alt="The Heavenly Twins by Sarah Grand"
      src="//covers.openlibrary.org/b/id/4006900-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/heavenlytwins00granrich?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL52574W">
      <img class="bookcover" loading="lazy"
        title="Italienische Reise by Johann Wolfgang von Goethe"
        alt="Italienische Reise by Johann Wolfgang von Goethe"
      src="//covers.openlibrary.org/b/id/8243335-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/ausgoethesitalie00goetuoft?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL879035W">
      <img class="bookcover" loading="lazy"
        title="Another sheaf by John Galsworthy"
        alt="Another sheaf by John Galsworthy"
      src="//covers.openlibrary.org/b/id/5925369-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/anothersheaf00gals_0?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL2646763W">
      <img class="bookcover" loading="lazy"
        title="Personality Plus by Edna Ferber"
        alt="Personality Plus by Edna Ferber"
      src="//covers.openlibrary.org/b/id/1152174-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/lovesofpelleas00galerich?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL242680W">
      <img class="bookcover" loading="lazy"
        title="The Rayner-Slade amalgamation by Joseph Smith Fletcher"
        alt="The Rayner-Slade amalgamation by Joseph Smith Fletcher"
      src="//covers.openlibrary.org/b/id/5660642-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/raynersladeamalg00fletuoft?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL15724776W">
      <img class="bookcover" loading="lazy"
        title="Le Cid by Pierre Corneille"
        alt="Le Cid by Pierre Corneille"
      data-lazy="//covers.openlibrary.org/b/id/8236984-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/lecidtragdieno00cornuoft?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL2703165W">
      <img class="bookcover" loading="lazy"
        title="Wells Brothers by Andy Adams"
        alt="Wells Brothers by Andy Adams"
      data-lazy="//covers.openlibrary.org/b/id/1513932-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/wellsbrothersyou00adamrich?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL1427209W">
      <img class="bookcover" loading="lazy"
        title="Les origines de la poesie lyrique en France au moyen age by Alfred Jeanroy"
        alt="Les origines de la poesie lyrique en France au moyen age by Alfred Jeanroy"
      data-lazy="//covers.openlibrary.org/b/id/5989102-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/lesoriginesdelap00jeanuoft?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL66488W">
      <img class="bookcover" loading="lazy"
        title="Cyclops by Euripides"
        alt="Cyclops by Euripides"
      data-lazy="//covers.openlibrary.org/b/id/125353-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/cyclops00euriuoft?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL857584W">
      <img class="bookcover" loading="lazy"
        title="Historia de Mayta by Mario Vargas Llosa"
        alt="Historia de Mayta by Mario Vargas Llosa"
      data-lazy="//covers.openlibrary.org/b/id/3356096-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/historiademayta00varg?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL15420303W">
      <img class="bookcover" loading="lazy"
        title="John Donne Poetry by John Donne, John Booty, P.G. Stanwood"
        alt="John Donne Poetry by John Donne, John Booty, P.G. Stanwood"
      data-lazy="//covers.openlibrary.org/b/id/8238738-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/poemsdon01donnuoft?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL67524W">
      <img class="bookcover" loading="lazy"
        title="De inventione by Cicero"
        alt="De inventione by Cicero"
      data-lazy="//covers.openlibrary.org/b/id/3833647-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/cicerodeinventio0000unse?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL1213932W">
      <img class="bookcover" loading="lazy"
        title="Samia by Menander of Athens"
        alt="Samia by Menander of Athens"
      data-lazy="//covers.openlibrary.org/b/id/4930112-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/samia0000mena?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL54115W">
      <img class="bookcover" loading="lazy"
        title="The Autobiography of Mark Twain by Mark Twain, Charles Neider"
        alt="The Autobiography of Mark Twain by Mark Twain, Charles Neider"
      data-lazy="//covers.openlibrary.org/b/id/6654540-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/autobiographyofm0000neid?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL970351W">
      <img class="bookcover" loading="lazy"
        title="Thebais by Publius Papinius Statius"
        alt="Thebais by Publius Papinius Statius"
      data-lazy="//covers.openlibrary.org/b/id/567097-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/togailnatebetheb00stat?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL1948670W">
      <img class="bookcover" loading="lazy"
        title="Five Go Adventuring Again by Enid Blyton"
        alt="Five Go Adventuring Again by Enid Blyton"
      data-lazy="//covers.openlibrary.org/b/id/11627305-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/fivegoadventurin00bly_del?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL684115W">
      <img class="bookcover" loading="lazy"
        title="Hyperion by Friedrich Hölderlin"
        alt="Hyperion by Friedrich Hölderlin"
      data-lazy="//covers.openlibrary.org/b/id/2206760-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/hyperionorhermit0000hold?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL15845152W">
      <img class="bookcover" loading="lazy"
        title="Simple&#39;s Uncle Sam by Langston Hughes, Akiba Sullivan Harper"
        alt="Simple&#39;s Uncle Sam by Langston Hughes, Akiba Sullivan Harper"
      data-lazy="//covers.openlibrary.org/b/id/6808239-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/trent_0116301749390?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/works/OL41072W">
      <img class="bookcover" loading="lazy"
        title="The Murders in the Rue Morgue by Edgar Allan Poe"
        alt="The Murders in the Rue Morgue by Edgar Allan Poe"
      data-lazy="//covers.openlibrary.org/b/id/11774455-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    























<div class="cta-button-group">
  <a href="/borrow/ia/murdersinruemor00poee?ref=ol" title="Read ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--read"
     data-ol-link-track="CTAClick|Read"
    >Read</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>


  
  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="staff_picks" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+%28collection%3A%28inlibrary%29+OR+%28%21collection%3A%28printdisabled%29%29%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29+AND+languageSorter%3A%28%22English%22%29+AND+openlibrary_subject%3Aopenlibrary_staff_picks&amp;sort=-lending___last_browse">Books We Love</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-staff_picks carousel--progressively-enhanced"
      data-config="[&quot;.carousel-staff_picks&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=languageSorter:(\&quot;English\&quot;)&amp;subject=openlibrary_staff_picks&amp;work_id=&amp;_type=&amp;sorts=lending___last_browse desc&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL35675912M">
      <img class="bookcover" loading="lazy"
        title="Harry Potter and the Deathly Hallows by J. K. Rowling"
        alt="Harry Potter and the Deathly Hallows by J. K. Rowling"
      src="//covers.openlibrary.org/w/id/10110415-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/harrypotterdeath0000rowl_m0z4?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL32784407M">
      <img class="bookcover" loading="lazy"
        title="Harry Potter and the Chamber of Secrets by J. K. Rowling"
        alt="Harry Potter and the Chamber of Secrets by J. K. Rowling"
      src="//covers.openlibrary.org/w/id/8234423-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/isbn_9780439064866?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL31448957M">
      <img class="bookcover" loading="lazy"
        title="Fahrenheit 451 by Ray Bradbury"
        alt="Fahrenheit 451 by Ray Bradbury"
      src="//covers.openlibrary.org/w/id/12993656-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/fahrenheit4510000brad?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26215118M">
      <img class="bookcover" loading="lazy"
        title="Roller Girl by Victoria Jamieson"
        alt="Roller Girl by Victoria Jamieson"
      src="//covers.openlibrary.org/w/id/11327078-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/rollergirl0000jami_x4s9?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9885798M">
      <img class="bookcover" loading="lazy"
        title="Many Waters by Madeleine L&#39;Engle"
        alt="Many Waters by Madeleine L&#39;Engle"
      src="//covers.openlibrary.org/w/id/6536498-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/manywaters00leng_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7428343M">
      <img class="bookcover" loading="lazy"
        title="The Phantom Tollbooth by Norton Juster"
        alt="The Phantom Tollbooth by Norton Juster"
      src="//covers.openlibrary.org/w/id/8578174-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/phantomtollbooth00nort?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL3424351M">
      <img class="bookcover" loading="lazy"
        title="Anansi Boys by Neil Gaiman, Mónica Faerna, Lenny Henry"
        alt="Anansi Boys by Neil Gaiman, Mónica Faerna, Lenny Henry"
      data-lazy="//covers.openlibrary.org/w/id/12049134-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/anansiboys0000gaim_p4y7?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25844975M">
      <img class="bookcover" loading="lazy"
        title="My Brilliant Friend by Elena Ferrante"
        alt="My Brilliant Friend by Elena Ferrante"
      data-lazy="//covers.openlibrary.org/w/id/12706346-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/isbn_9781609450786?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL28018073M">
      <img class="bookcover" loading="lazy"
        title="Ramona and Her Mother by Beverly Cleary"
        alt="Ramona and Her Mother by Beverly Cleary"
      data-lazy="//covers.openlibrary.org/w/id/9400388-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/ramonahermother1980clea?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL1633754M">
      <img class="bookcover" loading="lazy"
        title="The Asimov chronicles by Isaac Asimov"
        alt="The Asimov chronicles by Isaac Asimov"
      data-lazy="//covers.openlibrary.org/w/id/6969899-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/asimovchronicles00asim?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8458764M">
      <img class="bookcover" loading="lazy"
        title="Hatchet by Gary Paulsen"
        alt="Hatchet by Gary Paulsen"
      data-lazy="//covers.openlibrary.org/w/id/101811-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/hatchet00gary_2?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL32491053M">
      <img class="bookcover" loading="lazy"
        title="The Satanic Verses by Salman Rushdie"
        alt="The Satanic Verses by Salman Rushdie"
      data-lazy="//covers.openlibrary.org/w/id/8312209-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/satanicverses0000rush?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24746817M">
      <img class="bookcover" loading="lazy"
        title="The Great Gatsby by F. Scott Fitzgerald"
        alt="The Great Gatsby by F. Scott Fitzgerald"
      data-lazy="//covers.openlibrary.org/w/id/8432047-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/greatgat00fitz?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7268412M">
      <img class="bookcover" loading="lazy"
        title="Hamlet by William Shakespeare"
        alt="Hamlet by William Shakespeare"
      data-lazy="//covers.openlibrary.org/w/id/8281954-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/hamletshortersha0000unse?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL39473076M">
      <img class="bookcover" loading="lazy"
        title="The Yiddish Policemen&#39;s Union by Michael Chabon"
        alt="The Yiddish Policemen&#39;s Union by Michael Chabon"
      data-lazy="//covers.openlibrary.org/w/id/12745258-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/lccn_978000714827?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL37040070M">
      <img class="bookcover" loading="lazy"
        title="The Awakening by Kate Chopin"
        alt="The Awakening by Kate Chopin"
      data-lazy="//covers.openlibrary.org/w/id/8750241-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/awakening0000chop_e2e3?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25763813M">
      <img class="bookcover" loading="lazy"
        title="Tagging by Gene Smith"
        alt="Tagging by Gene Smith"
      data-lazy="//covers.openlibrary.org/w/id/8232691-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/isbn_9780321529176?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="recently_returned" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+collection%3A%28inlibrary%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29&amp;sort=-lending___last_browse">Recently Returned</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-recently_returned carousel--progressively-enhanced"
      data-config="[&quot;.carousel-recently_returned&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=&amp;subject=&amp;work_id=&amp;_type=&amp;sorts=lending___last_browse desc&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL21079036M">
      <img class="bookcover" loading="lazy"
        title="A history of private life by Philippe Ariès"
        alt="A history of private life by Philippe Ariès"
      src="//covers.openlibrary.org/w/id/7402013-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/historyofprivat3e00ari?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL15497424M">
      <img class="bookcover" loading="lazy"
        title="Civilizations of the Ancient Near East.  n set.  n 2 vols by Jack Sasson"
        alt="Civilizations of the Ancient Near East.  n set.  n 2 vols by Jack Sasson"
      src="//covers.openlibrary.org/w/id/10715269-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/civilizationsofa0001unse_0102?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8740448M">
      <img class="bookcover" loading="lazy"
        title="Native Science by Gregory Cajete"
        alt="Native Science by Gregory Cajete"
      src="//covers.openlibrary.org/w/id/826239-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/nativesciencenat0001caje?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      



<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL59039M">
      <img class="bookcover" loading="lazy"
        title="Literature without borders"
        alt="Literature without borders"
      src="//covers.openlibrary.org/w/id/81311-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/literaturewithou0000unse?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7984909M">
      <img class="bookcover" loading="lazy"
        title="Asterix and the Laurel Wreath (Asterix) by René Goscinny, Albert Uderzo"
        alt="Asterix and the Laurel Wreath (Asterix) by René Goscinny, Albert Uderzo"
      src="//covers.openlibrary.org/w/id/499651-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/asterixlaurelwre0000gosc?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL39280M">
      <img class="bookcover" loading="lazy"
        title="The Jew in the medieval world by Marcus, Jacob Rader"
        alt="The Jew in the medieval world by Marcus, Jacob Rader"
      src="//covers.openlibrary.org/w/id/4034400-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/jewinmedievalwor00marc?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25432910M">
      <img class="bookcover" loading="lazy"
        title="The House of Hades by Rick Riordan"
        alt="The House of Hades by Rick Riordan"
      data-lazy="//covers.openlibrary.org/w/id/8057334-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/houseofhades00rick?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8739946M">
      <img class="bookcover" loading="lazy"
        title="Mostly on the Edge by Karl Hess"
        alt="Mostly on the Edge by Karl Hess"
      data-lazy="//covers.openlibrary.org/w/id/825886-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/mostlyonedgeauto0000hess?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL1880327M">
      <img class="bookcover" loading="lazy"
        title="Nature&#39;s metropolis by William Cronon, Cronon"
        alt="Nature&#39;s metropolis by William Cronon, Cronon"
      data-lazy="//covers.openlibrary.org/w/id/248644-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/naturesmetropoli00cron_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2038776M">
      <img class="bookcover" loading="lazy"
        title="World War II by Michael J. Lyons"
        alt="World War II by Michael J. Lyons"
      data-lazy="//covers.openlibrary.org/w/id/85633-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/worldwariishorth00lyon?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25697792M">
      <img class="bookcover" loading="lazy"
        title="To Hell and back by Ian Kershaw"
        alt="To Hell and back by Ian Kershaw"
      data-lazy="//covers.openlibrary.org/w/id/7353551-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/tohellbackeurope0000kers_l3i8?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24093421M">
      <img class="bookcover" loading="lazy"
        title="God&#39;s battalions by Rodney Stark"
        alt="God&#39;s battalions by Rodney Stark"
      data-lazy="//covers.openlibrary.org/w/id/8118297-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/godsbattalionsca0000star?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2540158M">
      <img class="bookcover" loading="lazy"
        title="Winter in the blood by James Welch"
        alt="Winter in the blood by James Welch"
      data-lazy="//covers.openlibrary.org/w/id/94160-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/winterinblood000welc?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24789773M">
      <img class="bookcover" loading="lazy"
        title="What&#39;s a disorganized person to do? by Stacey Platt"
        alt="What&#39;s a disorganized person to do? by Stacey Platt"
      data-lazy="//covers.openlibrary.org/w/id/11425637-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/whatsdisorganize0000plat?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26135477M">
      <img class="bookcover" loading="lazy"
        title="Miniature Schnauzer Whiskers by Margaret Fetty"
        alt="Miniature Schnauzer Whiskers by Margaret Fetty"
      data-lazy="//covers.openlibrary.org/w/id/7792570-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/miniatureschnauz0000fett?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25968835M">
      <img class="bookcover" loading="lazy"
        title="Loved Ones by Ian Jack"
        alt="Loved Ones by Ian Jack"
      data-lazy="//covers.openlibrary.org/w/id/7480380-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/grantamagazineof0000unse?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL4548854M">
      <img class="bookcover" loading="lazy"
        title="Bandicoot by Richard Condon"
        alt="Bandicoot by Richard Condon"
      data-lazy="//covers.openlibrary.org/w/id/4416140-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/bandicoot00cond?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7387129M">
      <img class="bookcover" loading="lazy"
        title="Old World Encounters by Jerry H. Bentley"
        alt="Old World Encounters by Jerry H. Bentley"
      data-lazy="//covers.openlibrary.org/w/id/122025-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/oldworldencounte00jerr?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="romance" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+collection%3A%28inlibrary%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29+AND+subject%3A%28romance%29&amp;sort=-lending___last_browse">Romance</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-romance carousel--progressively-enhanced"
      data-config="[&quot;.carousel-romance&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=subject:(romance)&amp;subject=&amp;work_id=&amp;_type=&amp;sorts=lending___last_browse desc&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9752717M">
      <img class="bookcover" loading="lazy"
        title="The Italian Doctor&#39;s Mistress by Catherine Spencer"
        alt="The Italian Doctor&#39;s Mistress by Catherine Spencer"
      src="//covers.openlibrary.org/w/id/215104-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/italiandoctorsmi00cath?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10738936M">
      <img class="bookcover" loading="lazy"
        title="Dark Captor by Lindsay Armstrong"
        alt="Dark Captor by Lindsay Armstrong"
      src="//covers.openlibrary.org/w/id/9525203-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/darkcaptor00arms?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10738580M">
      <img class="bookcover" loading="lazy"
        title="Out Of Control by Charlotte Lamb"
        alt="Out Of Control by Charlotte Lamb"
      src="//covers.openlibrary.org/w/id/9242841-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/outofcontrol00char?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10691149M">
      <img class="bookcover" loading="lazy"
        title="The Master of Craighill (Harlequin Romance, 2333) by Sheila Strutt"
        alt="The Master of Craighill (Harlequin Romance, 2333) by Sheila Strutt"
      src="//covers.openlibrary.org/w/id/9517506-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/masterofcraighil0000stru?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      



<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26389068M">
      <img class="bookcover" loading="lazy"
        title="Tempted [electronic resource]"
        alt="Tempted [electronic resource]"
      src="//covers.openlibrary.org/w/id/8083402-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/tempted00lori?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8238803M">
      <img class="bookcover" loading="lazy"
        title="Out of the Storm (The Grace Livingston Hill Series No. 87) by Grace Livingston Hill"
        alt="Out of the Storm (The Grace Livingston Hill Series No. 87) by Grace Livingston Hill"
      src="//covers.openlibrary.org/b/id/9832973-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/outofstorm0000hill?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10896593M">
      <img class="bookcover" loading="lazy"
        title="Eternal Lover by Lynsay Sands"
        alt="Eternal Lover by Lynsay Sands"
      data-lazy="//covers.openlibrary.org/w/id/2601468-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/eternallover0000unse?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24087517M">
      <img class="bookcover" loading="lazy"
        title="Since the Surrender by Julie Anne Long"
        alt="Since the Surrender by Julie Anne Long"
      data-lazy="//covers.openlibrary.org/w/id/6304935-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/sincesurrenderpe00juli?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10739416M">
      <img class="bookcover" loading="lazy"
        title="Fugitive Bride by Miranda Lee"
        alt="Fugitive Bride by Miranda Lee"
      data-lazy="//covers.openlibrary.org/w/id/2407470-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/fugitivebridethe00mira?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9745419M">
      <img class="bookcover" loading="lazy"
        title="Slave to Love by Michelle Reid"
        alt="Slave to Love by Michelle Reid"
      data-lazy="//covers.openlibrary.org/w/id/10007310-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/slavetoloveharlq00mich?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10739314M">
      <img class="bookcover" loading="lazy"
        title="Marriage Under Suspicion by Sara Craven"
        alt="Marriage Under Suspicion by Sara Craven"
      data-lazy="//covers.openlibrary.org/w/id/2407371-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/marriageundersus00sara?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10742160M">
      <img class="bookcover" loading="lazy"
        title="A LIttle Moonlighting by Raye Morgan"
        alt="A LIttle Moonlighting by Raye Morgan"
      data-lazy="//covers.openlibrary.org/w/id/2408342-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/littlemoonlighti00raye?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL28470188M">
      <img class="bookcover" loading="lazy"
        title="Shaedes of Gray by Amanda Bonilla"
        alt="Shaedes of Gray by Amanda Bonilla"
      data-lazy="//covers.openlibrary.org/w/id/11323225-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/shaedesofgray0000boni?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8789043M">
      <img class="bookcover" loading="lazy"
        title="One Special Moment (Arabesque) by Brenda Jackson"
        alt="One Special Moment (Arabesque) by Brenda Jackson"
      data-lazy="//covers.openlibrary.org/w/id/2411228-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/onespecialmoment00jack_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10692016M">
      <img class="bookcover" loading="lazy"
        title="Mistletoe Marriage (Hitched!) by Jeanne Allan"
        alt="Mistletoe Marriage (Hitched!) by Jeanne Allan"
      data-lazy="//covers.openlibrary.org/w/id/9840858-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/mistletoemarriag00alla?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL11817512M">
      <img class="bookcover" loading="lazy"
        title="Silver Flame by Hannah Howell"
        alt="Silver Flame by Hannah Howell"
      data-lazy="//covers.openlibrary.org/w/id/2801894-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/silverflame00hann?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2417401M">
      <img class="bookcover" loading="lazy"
        title="A Lady&#39;s Lament by Rebecca Ashley"
        alt="A Lady&#39;s Lament by Rebecca Ashley"
      data-lazy="//covers.openlibrary.org/w/id/7090578-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/ladyslament0000ashl?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9599446M">
      <img class="bookcover" loading="lazy"
        title="Savage Interlude by Carole Mortimer"
        alt="Savage Interlude by Carole Mortimer"
      data-lazy="//covers.openlibrary.org/w/id/9568849-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/savageinterlude00caro_ard?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="children" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+collection%3A%28inlibrary%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29+AND+subject%3A%28Juvenile+Fiction%29&amp;sort=-lending___last_browse">Kids</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-children carousel--progressively-enhanced"
      data-config="[&quot;.carousel-children&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=subject:(Juvenile Fiction)&amp;subject=&amp;work_id=&amp;_type=&amp;sorts=lending___last_browse desc&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24422411M">
      <img class="bookcover" loading="lazy"
        title="Waiting for the BiblioBurro by Monica Brown"
        alt="Waiting for the BiblioBurro by Monica Brown"
      src="//covers.openlibrary.org/w/id/8758318-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/sylviaaki0000conk?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL28508460M">
      <img class="bookcover" loading="lazy"
        title="Zac and Mia by A. J. Betts"
        alt="Zac and Mia by A. J. Betts"
      src="//covers.openlibrary.org/w/id/11041958-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/zacmia0000bett_t6k7?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26709312M">
      <img class="bookcover" loading="lazy"
        title="Percy Jackson and the Lightning Thief by Rick Riordan"
        alt="Percy Jackson and the Lightning Thief by Rick Riordan"
      src="//covers.openlibrary.org/w/id/7239831-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/percyjacksonligh0000rior?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24411568M">
      <img class="bookcover" loading="lazy"
        title="Boy, Bird, and Dog by David M. McPhail"
        alt="Boy, Bird, and Dog by David M. McPhail"
      src="//covers.openlibrary.org/w/id/9663578-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/boybirddog0000mcph?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8097843M">
      <img class="bookcover" loading="lazy"
        title="A Child&#39;s Book Of Manners (Happy Day Books) by Ruth Odor"
        alt="A Child&#39;s Book Of Manners (Happy Day Books) by Ruth Odor"
      src="//covers.openlibrary.org/w/id/7346666-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/childsbookofmann00ruth_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL28569531M">
      <img class="bookcover" loading="lazy"
        title="Warriors : Omen of the Stars #2 by Erin Hunter, Owen Richardson, Allen Douglas"
        alt="Warriors : Omen of the Stars #2 by Erin Hunter, Owen Richardson, Allen Douglas"
      src="//covers.openlibrary.org/w/id/9391443-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL5714273W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL3428360M">
      <img class="bookcover" loading="lazy"
        title="Don&#39;t let the pigeon stay up late! by Mo Willems"
        alt="Don&#39;t let the pigeon stay up late! by Mo Willems"
      data-lazy="//covers.openlibrary.org/w/id/544914-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/dontletpigeonsta0000will?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL22860561M">
      <img class="bookcover" loading="lazy"
        title="Code talker by Joseph Bruchac"
        alt="Code talker by Joseph Bruchac"
      data-lazy="//covers.openlibrary.org/w/id/575536-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/codetalkernovela00bruc_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7644065M">
      <img class="bookcover" loading="lazy"
        title="Dance of Death by R. L. Stine"
        alt="Dance of Death by R. L. Stine"
      data-lazy="//covers.openlibrary.org/w/id/403237-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/danceofdeathfear00annm?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL8954448M">
      <img class="bookcover" loading="lazy"
        title="Maisy Goes Camping (Maisy) by Lucy Cousins"
        alt="Maisy Goes Camping (Maisy) by Lucy Cousins"
      data-lazy="//covers.openlibrary.org/w/id/516314-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/maisygoescamping0000cous?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL17177174M">
      <img class="bookcover" loading="lazy"
        title="Snow day! by Lester L. Laminack"
        alt="Snow day! by Lester L. Laminack"
      data-lazy="//covers.openlibrary.org/w/id/1890677-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/snowday0000lami?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24936646M">
      <img class="bookcover" loading="lazy"
        title="My side of the mountain by Jean Craighead George"
        alt="My side of the mountain by Jean Craighead George"
      data-lazy="//covers.openlibrary.org/w/id/10873108-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a class="cta-btn cta-btn--shell cta-btn--preview"
     data-iframe-src="https://archive.org/details/mysideofmountainge00geor?view=theater&wrapper=false"
     data-iframe-link="https://archive.org/details/mysideofmountainge00geor"
     data-ol-link-track="CTAClick|Preview" href="#bookPreview">Preview</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL22551204M">
      <img class="bookcover" loading="lazy"
        title="Wintergirls by Laurie Halse Anderson"
        alt="Wintergirls by Laurie Halse Anderson"
      data-lazy="//covers.openlibrary.org/w/id/7091513-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a class="cta-btn cta-btn--shell cta-btn--preview"
     data-iframe-src="https://archive.org/details/wintergirls00ande?view=theater&wrapper=false"
     data-iframe-link="https://archive.org/details/wintergirls00ande"
     data-ol-link-track="CTAClick|Preview" href="#bookPreview">Preview</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25884859M">
      <img class="bookcover" loading="lazy"
        title="Awkward by Svetlana Chmakova"
        alt="Awkward by Svetlana Chmakova"
      data-lazy="//covers.openlibrary.org/w/id/7390141-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/awkward0000chma?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL4898198M">
      <img class="bookcover" loading="lazy"
        title="Dragonsinger (Harper Hall of Pern #2) by Anne McCaffrey"
        alt="Dragonsinger (Harper Hall of Pern #2) by Anne McCaffrey"
      data-lazy="//covers.openlibrary.org/w/id/437864-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/dragonsinger00mcca_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24085101M">
      <img class="bookcover" loading="lazy"
        title="Maisy Goes to Preschool by Lucy Cousins"
        alt="Maisy Goes to Preschool by Lucy Cousins"
      data-lazy="//covers.openlibrary.org/w/id/6298205-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/maisygoestopresc0000cous?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL3949987M">
      <img class="bookcover" loading="lazy"
        title="Shattering Glass by Gail Giles"
        alt="Shattering Glass by Gail Giles"
      data-lazy="//covers.openlibrary.org/w/id/1424311-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/shatteringglass00gile_0?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7729576M">
      <img class="bookcover" loading="lazy"
        title="Among the Imposters by Margaret Peterson Haddix"
        alt="Among the Imposters by Margaret Peterson Haddix"
      data-lazy="//covers.openlibrary.org/w/id/436086-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/amongimpostorssh00marg?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="thrillers" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+collection%3A%28inlibrary%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29+AND+%28creator%3A%22Clancy%2C+Tom%22+OR+creator%3A%22King%2C+Stephen%22+OR+creator%3A%22Clive+Cussler%22+OR+creator%3A%28%22Cussler%2C+Clive%22%29+OR+creator%3A%28%22Dean+Koontz%22%29+OR+creator%3A%28%22Koontz%2C+Dean%22%29+OR+creator%3A%28%22Higgins%2C+Jack%22%29%29+AND+%21publisher%3A%22Pleasantville%2C+N.Y.+%3A+Reader%27s+Digest+Association%22+AND+languageSorter%3A%22English%22&amp;sort=-downloads">Thrillers</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-thrillers carousel--progressively-enhanced"
      data-config="[&quot;.carousel-thrillers&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=preset:thrillers&amp;subject=&amp;work_id=&amp;_type=&amp;sorts=downloads desc&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7503861M">
      <img class="bookcover" loading="lazy"
        title="Eyes of Darkness by Dean Koontz"
        alt="Eyes of Darkness by Dean Koontz"
      src="//covers.openlibrary.org/w/id/12547107-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/eyesofdarknes00koon?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL27403423M">
      <img class="bookcover" loading="lazy"
        title="IT by Stephen King"
        alt="IT by Stephen King"
      src="//covers.openlibrary.org/w/id/8569284-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/it0000king?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7949728M">
      <img class="bookcover" loading="lazy"
        title="The Shining by Stephen King"
        alt="The Shining by Stephen King"
      src="//covers.openlibrary.org/w/id/7013717-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/shining00step?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2716383M">
      <img class="bookcover" loading="lazy"
        title="Tom Clancy communist Strike Back by Tom Clancy, Larry Bond"
        alt="Tom Clancy communist Strike Back by Tom Clancy, Larry Bond"
      src="//covers.openlibrary.org/w/id/975379-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/redstormrising00tomc?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL15571085M">
      <img class="bookcover" loading="lazy"
        title="Cell by Stephen King"
        alt="Cell by Stephen King"
      src="//covers.openlibrary.org/w/id/8288254-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/cellnovel00king?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL7572262M">
      <img class="bookcover" loading="lazy"
        title="Pet Sematary by Stephen King"
        alt="Pet Sematary by Stephen King"
      src="//covers.openlibrary.org/w/id/12015500-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/petsematary00step?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24210802M">
      <img class="bookcover" loading="lazy"
        title="Insomnia by Stephen King"
        alt="Insomnia by Stephen King"
      data-lazy="//covers.openlibrary.org/w/id/7886954-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/insomnia00king?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL3307619M">
      <img class="bookcover" loading="lazy"
        title="Black wind by Clive Cussler"
        alt="Black wind by Clive Cussler"
      data-lazy="//covers.openlibrary.org/w/id/8231873-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/blackwind000cuss?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26869511M">
      <img class="bookcover" loading="lazy"
        title="The Bachman Books by Stephen King"
        alt="The Bachman Books by Stephen King"
      data-lazy="//covers.openlibrary.org/w/id/8565607-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/bachmanbooksfour00kin_zsv?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24590201M">
      <img class="bookcover" loading="lazy"
        title="Just After Sunset by Stephen King"
        alt="Just After Sunset by Stephen King"
      data-lazy="//covers.openlibrary.org/w/id/8494916-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/justaftersunsets00king?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL985560M">
      <img class="bookcover" loading="lazy"
        title="Executive Orders by Tom Clancy"
        alt="Executive Orders by Tom Clancy"
      data-lazy="//covers.openlibrary.org/w/id/7888554-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/executiveorders00clan?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL6792049M">
      <img class="bookcover" loading="lazy"
        title="The bear and the dragon by Tom Clancy"
        alt="The bear and the dragon by Tom Clancy"
      data-lazy="//covers.openlibrary.org/w/id/271976-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/beardragon00clan?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL17179828M">
      <img class="bookcover" loading="lazy"
        title="The good guy by Dean Koontz"
        alt="The good guy by Dean Koontz"
      data-lazy="//covers.openlibrary.org/w/id/12879774-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/goodguykoon00koon?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL3301363M">
      <img class="bookcover" loading="lazy"
        title="Dark Justice by Jack Higgins"
        alt="Dark Justice by Jack Higgins"
      data-lazy="//covers.openlibrary.org/w/id/259150-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/darkjustic00higg?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26377726M">
      <img class="bookcover" loading="lazy"
        title="Under the Dome by Stephen King"
        alt="Under the Dome by Stephen King"
      data-lazy="//covers.openlibrary.org/w/id/8275695-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/isbn_9781410423962?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL24382144M">
      <img class="bookcover" loading="lazy"
        title="Treasure by Clive Cussler"
        alt="Treasure by Clive Cussler"
      data-lazy="//covers.openlibrary.org/w/id/8231769-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/treasurecuss00cuss?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="textbooks" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+%28collection%3A%28inlibrary%29+OR+%28%21collection%3A%28printdisabled%29%29%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29+AND+openlibrary_subject%3Atextbooks&amp;sort=-lending___last_browse">Textbooks</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-textbooks carousel--progressively-enhanced"
      data-config="[&quot;.carousel-textbooks&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=&amp;subject=textbooks&amp;work_id=&amp;_type=&amp;sorts=lending___last_browse desc&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL1552110M">
      <img class="bookcover" loading="lazy"
        title="A first course in statistics by James T. McClave, Terry Sincich, Terry L. Sincich, Terry T. Sincich"
        alt="A first course in statistics by James T. McClave, Terry Sincich, Terry L. Sincich, Terry T. Sincich"
      src="//covers.openlibrary.org/w/id/3699592-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/firstcourseinsta00mccl?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL969043M">
      <img class="bookcover" loading="lazy"
        title="Basic statistical analysis by Richard C. Sprinthall"
        alt="Basic statistical analysis by Richard C. Sprinthall"
      src="//covers.openlibrary.org/w/id/1145749-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/basicstatistical00spri?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL4448534M">
      <img class="bookcover" loading="lazy"
        title="Analytic geometry by Paul Klein Rees"
        alt="Analytic geometry by Paul Klein Rees"
      src="//covers.openlibrary.org/w/id/9693473-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/analyticgeometry00rees?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL5534181M">
      <img class="bookcover" loading="lazy"
        title="Biological science by William T. Keeton"
        alt="Biological science by William T. Keeton"
      src="//covers.openlibrary.org/w/id/252638-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/biologicalscienc00keetrich?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2716900M">
      <img class="bookcover" loading="lazy"
        title="Biology by Karen Arms"
        alt="Biology by Karen Arms"
      src="//covers.openlibrary.org/w/id/4937756-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/biology00arms?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL5421673M">
      <img class="bookcover" loading="lazy"
        title="Beneath the mask by Christopher F. Monte"
        alt="Beneath the mask by Christopher F. Monte"
      src="//covers.openlibrary.org/w/id/302713-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/beneathmaskintro00mont?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL1109817M">
      <img class="bookcover" loading="lazy"
        title="California by Lawrence, David G."
        alt="California by Lawrence, David G."
      data-lazy="//covers.openlibrary.org/w/id/1274707-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/californiapoliti00lawr?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL1855043M">
      <img class="bookcover" loading="lazy"
        title="Advanced organic chemistry by Francis A. Carey, Richard J. Sundberg"
        alt="Advanced organic chemistry by Francis A. Carey, Richard J. Sundberg"
      data-lazy="//covers.openlibrary.org/b/id/2357535-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/advancedorganicc00care?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL6785593M">
      <img class="bookcover" loading="lazy"
        title="Astronomy by John D. Fix"
        alt="Astronomy by John D. Fix"
      data-lazy="//covers.openlibrary.org/w/id/1083921-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/astronomyjourney00fixj?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL796775M">
      <img class="bookcover" loading="lazy"
        title="College algebra by James Stewart"
        alt="College algebra by James Stewart"
      data-lazy="//covers.openlibrary.org/w/id/4312031-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/collegealgebra02stew?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL5913386M">
      <img class="bookcover" loading="lazy"
        title="A course in mathematical analysis by Edouard Goursat"
        alt="A course in mathematical analysis by Edouard Goursat"
      data-lazy="//covers.openlibrary.org/w/id/5742014-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/courseinmathemat00gour?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL21296084M">
      <img class="bookcover" loading="lazy"
        title="Current perspectives in social psychology by Edwin Paul Hollander"
        alt="Current perspectives in social psychology by Edwin Paul Hollander"
      data-lazy="//covers.openlibrary.org/w/id/5381734-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/currentperspecti00holl?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2199192M">
      <img class="bookcover" loading="lazy"
        title="Culture and values by Lawrence Cunningham, Lawrence S. Cunningham, John J. Reich"
        alt="Culture and values by Lawrence Cunningham, Lawrence S. Cunningham, John J. Reich"
      data-lazy="//covers.openlibrary.org/w/id/1274576-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/culturevaluessur00cunn?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL4737613M">
      <img class="bookcover" loading="lazy"
        title="Chemistry by Karen Timberlake"
        alt="Chemistry by Karen Timberlake"
      data-lazy="//covers.openlibrary.org/w/id/581950-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/chemistry00timbrich?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL3562419M">
      <img class="bookcover" loading="lazy"
        title="Calculus &amp; its applications by Larry Joel Goldstein, Larry J. Goldstein, David I. Schneider, David C. Lay"
        alt="Calculus &amp; its applications by Larry Joel Goldstein, Larry J. Goldstein, David I. Schneider, David C. Lay"
      data-lazy="//covers.openlibrary.org/w/id/1110721-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/calculusitsappli00gold_2?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL5192417M">
      <img class="bookcover" loading="lazy"
        title="Aristotle&#39;s Psychology by Aristotle"
        alt="Aristotle&#39;s Psychology by Aristotle"
      data-lazy="//covers.openlibrary.org/w/id/7968029-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/aristotlespsycho00arisrich?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL4769335M">
      <img class="bookcover" loading="lazy"
        title="Elementary statistics by Paul Gerhard Hoel"
        alt="Elementary statistics by Paul Gerhard Hoel"
      data-lazy="//covers.openlibrary.org/w/id/4486195-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/elementarystatis00hoel?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  


  <div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a name="authorsalliance_mit_press" href="https://archive.org/search.php?query=openlibrary_work%3A%28%2A%29+AND+%28collection%3A%28inlibrary%29+OR+%28%21collection%3A%28printdisabled%29%29%29+AND+%28lending___available_to_browse%3Atrue+OR+lending___available_to_borrow%3Atrue%29+AND+%28openlibrary_subject%3A%28authorsalliance%29+OR+collection%3A%28mitpress%29+OR+publisher%3A%28MIT+Press%29+OR+openlibrary_subject%3A%28mitpress%29%29">Authors Alliance &amp; MIT Press</a></h2>
  </div>
  <div class="carousel-container carousel-container-decorated">
    <div class="carousel carousel-authorsalliance_mit_press carousel--progressively-enhanced"
      data-config="[&quot;.carousel-authorsalliance_mit_press&quot;, 6, 5, 4, 3, 2, 1, {&quot;url&quot;: &quot;/browse.json?q=preset:authorsalliance_mitpress&amp;subject=&amp;work_id=&amp;_type=&amp;sorts=&quot;, &quot;pageMode&quot;: &quot;page&quot;, &quot;limit&quot;: 18}]">
      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10236742M">
      <img class="bookcover" loading="lazy"
        title="Kardio by Ivan Bratko"
        alt="Kardio by Ivan Bratko"
      src="//covers.openlibrary.org/w/id/8944098-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/KardioAStu_00_Brat?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2715716M">
      <img class="bookcover" loading="lazy"
        title="Conceptions of space and time--sources, evolution, directions by Murad Davudovich Akhundov"
        alt="Conceptions of space and time--sources, evolution, directions by Murad Davudovich Akhundov"
      src="//covers.openlibrary.org/w/id/8231164-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/conceptionsofspa00akhu?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL4879053M">
      <img class="bookcover" loading="lazy"
        title="Geothermal energy as a source of electric power by Stanley L. Milora"
        alt="Geothermal energy as a source of electric power by Stanley L. Milora"
      src="//covers.openlibrary.org/w/id/9022473-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/Geothermal_00_Milo?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL5203465M">
      <img class="bookcover" loading="lazy"
        title="Resource materials for environmental management and education by William Henry Matthews"
        alt="Resource materials for environmental management and education by William Henry Matthews"
      src="//covers.openlibrary.org/w/id/8935162-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/resourcematerial00matt?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL5425647M">
      <img class="bookcover" loading="lazy"
        title="Power plants with air-cooled condensing systems by E. S. Miliaras"
        alt="Power plants with air-cooled condensing systems by E. S. Miliaras"
      src="//covers.openlibrary.org/w/id/8921145-M.jpg"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/PowerPlant_00_Mili?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      



<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL26420424M">
      <img class="bookcover" loading="lazy"
        title="The Muses at work; arts, crafts, and professions in ancient Greece and Rome"
        alt="The Muses at work; arts, crafts, and professions in ancient Greece and Rome"
      src="https://archive.org/services/img/MusesatWor_00_Roeb"/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/MusesatWor_00_Roeb?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9350888M">
      <img class="bookcover" loading="lazy"
        title="The Logic of Sufficiency by Thomas Princen"
        alt="The Logic of Sufficiency by Thomas Princen"
      data-lazy="//covers.openlibrary.org/w/id/1154145-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/logicofsufficien0000prin?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL2527509M">
      <img class="bookcover" loading="lazy"
        title="PX, a computational logic by Susumu Hayashi"
        alt="PX, a computational logic by Susumu Hayashi"
      data-lazy="//covers.openlibrary.org/w/id/8919631-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/PXAComputa_00_Haya?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL6780054M">
      <img class="bookcover" loading="lazy"
        title="The logic of knowledge bases by Hector J. Levesque"
        alt="The logic of knowledge bases by Hector J. Levesque"
      data-lazy="//covers.openlibrary.org/w/id/150229-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL7796172W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL25275982M">
      <img class="bookcover" loading="lazy"
        title="Integrating climate, energy, and air pollution policies by Gary C. Bryner"
        alt="Integrating climate, energy, and air pollution policies by Gary C. Bryner"
      data-lazy="//covers.openlibrary.org/w/id/12174596-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/integratingclima0000bryn?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9702458M">
      <img class="bookcover" loading="lazy"
        title="Leonardo&#39;s Laptop by Ben Shneiderman"
        alt="Leonardo&#39;s Laptop by Ben Shneiderman"
      data-lazy="//covers.openlibrary.org/w/id/150731-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/leonardoslaptoph0000shne?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL9604029M">
      <img class="bookcover" loading="lazy"
        title="Marshall&#39;s Tendencies by John Sutton"
        alt="Marshall&#39;s Tendencies by John Sutton"
      data-lazy="//covers.openlibrary.org/w/id/152526-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/marshallstendenc0000sutt?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL29182395M">
      <img class="bookcover" loading="lazy"
        title="Networked by Lee Rainie, Barry Wellman"
        alt="Networked by Lee Rainie, Barry Wellman"
      data-lazy="//covers.openlibrary.org/w/id/7105518-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    




















<div class="cta-button-group">
  <a href="/works/OL16167934W" class="cta-btn cta-btn--missing"
     data-ol-link-track="CTAClick|NotInLibrary">Not in Library</a>
</div>





  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL10237034M">
      <img class="bookcover" loading="lazy"
        title="Musical Networks by Peter M. Todd"
        alt="Musical Networks by Peter M. Todd"
      data-lazy="//covers.openlibrary.org/w/id/2341612-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/musicalnetworksp0000unse?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL44471M">
      <img class="bookcover" loading="lazy"
        title="From Gutenberg to the global information infrastructure by Christine L. Borgman"
        alt="From Gutenberg to the global information infrastructure by Christine L. Borgman"
      data-lazy="//covers.openlibrary.org/w/id/149480-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/fromgutenbergtog0000borg?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL1433017M">
      <img class="bookcover" loading="lazy"
        title="Front stage, backstage by Raymond A. Friedman"
        alt="Front stage, backstage by Raymond A. Friedman"
      data-lazy="//covers.openlibrary.org/w/id/1153801-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/frontstagebackst0000frie?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL373034M">
      <img class="bookcover" loading="lazy"
        title="From Web to workplace by Kaj Grønbæk"
        alt="From Web to workplace by Kaj Grønbæk"
      data-lazy="//covers.openlibrary.org/w/id/2341618-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/fromwebtoworkpla0000grnb?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


      

<div class="book carousel__item">
  <div class="book-cover">
    <a href="/books/OL23606339M">
      <img class="bookcover" loading="lazy"
        title="The future of thinking by Cathy N. Davidson, Davidson, Cathy N.; Goldberg, David Theo"
        alt="The future of thinking by Cathy N. Davidson, Davidson, Cathy N.; Goldberg, David Theo"
      data-lazy="//covers.openlibrary.org/w/id/6908914-M.jpg"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
    </a>
  </div>
  <div class="book-cta">
    





















<div class="cta-button-group">
  <a href="/borrow/ia/9780262513746?ref=ol" title="Borrow ebook from Internet Archive" class="cta-btn cta-btn--ia cta-btn--available cta-btn--borrow"
     data-ol-link-track="CTAClick|Borrow"
    >Borrow</a>
</div>




  </div>
</div>


    </div>
  </div>
</div>



  
<div class="carousel-section">
  <div class="carousel-section-header">
    <h2 class="home-h2"><a href="/subjects">Browse by Subject</a></h2>
  </div>
  <div class="carousel-container">
    <div class="carousel carousel--progressively-enhanced" id="categories_carousel"
      data-config="[&quot;#categories_carousel&quot;, 6, 5, 4, 3, 2]">
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/art#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/art.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Art books"/>
          </div>
          <p class="category-title">Art</p>
          <p class="category-count">77,861 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/science_fiction#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/science_fiction.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Science Fiction books"/>
          </div>
          <p class="category-title">Science Fiction</p>
          <p class="category-count">17,808 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/fantasy#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/fantasy.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Fantasy books"/>
          </div>
          <p class="category-title">Fantasy</p>
          <p class="category-count">13,018 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/biographies#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/biographies.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Biographies books"/>
          </div>
          <p class="category-title">Biographies</p>
          <p class="category-count">18,818 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/recipes#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/recipes.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Recipes books"/>
          </div>
          <p class="category-title">Recipes</p>
          <p class="category-count">9,021 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/romance#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/romance.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Romance books"/>
          </div>
          <p class="category-title">Romance</p>
          <p class="category-count">20,218 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/textbooks#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/textbooks.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Textbooks books"/>
          </div>
          <p class="category-title">Textbooks</p>
          <p class="category-count">24,179 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/children#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/children.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Children books"/>
          </div>
          <p class="category-title">Children</p>
          <p class="category-count">45,358 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/history#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/history.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse History books"/>
          </div>
          <p class="category-title">History</p>
          <p class="category-count">1,678,601 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/medicine#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/medicine.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Medicine books"/>
          </div>
          <p class="category-title">Medicine</p>
          <p class="category-count">42,003 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/religion#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/religion.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Religion books"/>
          </div>
          <p class="category-title">Religion</p>
          <p class="category-count">99,150 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/mystery_and_detective_stories#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/mystery_and_detective_stories.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Mystery and Detective Stories books"/>
          </div>
          <p class="category-title">Mystery and Detective Stories</p>
          <p class="category-count">13,852 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/plays#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/plays.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Plays books"/>
          </div>
          <p class="category-title">Plays</p>
          <p class="category-count">2,784 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/music#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/music.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Music books"/>
          </div>
          <p class="category-title">Music</p>
          <p class="category-count">65,855 Books</p>
        </a>
      </div>
      <div class="category-item carousel__item">
        <a class="category-nostyle" data-ol-link-track="CarouselCategories"
           href="/subjects/science#sort=date_published&ebooks=true">
          <div class="category-icon">
            <img class="category-img" src="/static/images/categories/science.svg"
                width="30" height="30"
                loading="lazy"
                alt="browse Science books"/>
          </div>
          <p class="category-title">Science</p>
          <p class="category-count">75,694 Books</p>
        </a>
      </div>
    </div>
  </div>
</div>



  
<div id="home-resources">
  <div class="head">
    <h2>About the Project</h2>
  </div>

  <div id="home-about">
    <div id="home-about-mission">
      <h3 id="home-about-mission-tldr">
         Library is an open, editable library catalog, building towards a web page for every book ever published.
        <a href="/about" class="small sansserif">More</a>
      </h3>
      <p id="home-about-mission-desc">
        Just like Wikipedia, you can contribute new information or corrections to the catalog. You can browse by <a href="/subjects">subjects</a>, <a href="/authors">authors</a> or <a href="/lists">lists</a> members have created. If you love books, why not help build a library?
      </p>
    </div>
  
  </div>
</div>


 </div>

  </div>




<!--For analytics-->
<div class="clearfix"></div>


<footer>
  <div id="footer-content" >
   <img src="images/footer.jpg" style="height: 400px ; width: 800px;"
    <hr>
    <div id="footer-details">
      <img id="archive-logo" src="/static/images/pantheon.png" alt="Open Library logo">
     
    </div>
  </div>
</footer>


<!--Will be moved inside index.js-->
<script type="text/javascript">
  if ("serviceWorker" in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register("/sw.js").then(registration => {

      }).catch(error => {
        console.log("ServiceWorker registration failed");
      });
    });
  }

  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent the mini-infobar from appearing on mobile
    e.preventDefault();
  });
</script>

<!-- Must be loaded after jquery -->
<script src="/cdn/archive.org/analytics.js" type="text/javascript"></script>
<script src="/static/build/all.js?v=c83d7dbdb3e6e93a66e0223b061ea648" type="text/javascript"></script>
<!-- Passes total_time for analytics to ol.analytics.js -->
<div class="analytics-stats-time-calculator" data-time="10.168075561523438"></div>

<!-- clear the window.q and setup the jQuery plugins -->
<script>
$( function () {
    var i;
    for ( i = 0; i < window.q.length; i++ ) {
        $( window.q[i] );
    }
    window.q = [];
} );

if (typeof archive_analytics !== 'undefined') {
  archive_analytics.set_up_event_tracking();
}
</script>
</body>
</html>

