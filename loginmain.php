<?php
session_start();
// Redirect to login if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Stock Cashflow and fundamental analysis tool for Indian stocks</title>

    <link rel="stylesheet" href="https://cdn-static.screener.in/css/skeleton.1b34977e6b65.css" media="all">
    <link rel="stylesheet" href="https://cdn-static.screener.in/css/custom.edb772496e5f.css" media="all">

    
  <style>
  .home-search i.addon {
    padding: 12px;
    line-height: 1.6;
    font-size: 2rem;
  }

  .home-search input {
    padding: 12px 12px 12px 52px;
    font-size: 1.9rem;
  }

  .suggestions a {
    font-weight: 400;
    text-transform: none;
    background: transparent;
    font-size: 1.3rem;
    letter-spacing: var(--letter-spacing-13);
    color: var(--ink-600);
    padding: 8px 12px;
    margin: 6px;
  }

  .suggestions a:hover {
    background: var(--base);
  }

  #large-footer {
    margin-top: 0;
  }

  nav .logo,
  nav .search,
  nav .mobile-links {
    display: none;
  }

  .top-nav-holder {
    background: transparent;
    border: none;
  }
  </style>

    
    

    <meta name="Aaditya partiban" content="Aaditya Ventures Private Limited">

    <!-- PWA manifest -->
    <meta name="theme-color"
          content="#fff"
          media="(prefers-color-scheme: light)">
    <meta name="theme-color"
          content="#222530"
          media="(prefers-color-scheme: dark)">
    <link rel="manifest" href="/static/manifest.json">

    <!-- favicons -->
    <link rel="apple-touch-icon"
          sizes="180x180"
          href="https://cdn-static.screener.in/favicon/apple-touch-icon.b6e5f24bf7d3.png">
    <link rel="icon"
          type="image/png"
          sizes="32x32"
          href="https://cdn-static.screener.in/favicon/favicon-32x32.00205914303a.png">
    <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="https://cdn-static.screener.in/favicon/favicon-16x16.2b35594b2f33.png">
    <link rel="mask-icon"
          href="https://cdn-static.screener.in/favicon/safari-pinned-tab.adbe3ed3c5ad.svg"
          color="#8ED443">
    <meta name="msapplication-TileColor" content="#da532c">
  </head>

  <body class="light flex-column">
    <nav class="u-full-width no-print">
      <div id="mobile-search"><div class="has-addon left-addon dropdown-typeahead">
  <i class="addon icon-search"></i>
  <input
    aria-label="Search for a company"
    type="search"
    autocomplete="off"
    spellcheck="false"
    placeholder="Search for a company"
    class="u-full-width"
    
    data-company-search="true">
</div>
</div>

<ul class="bottom-menu-bar hide-from-tablet-landscape">
  
    <li class="active">
      <a href="">
        <i class="icon-home"></i>
        <br>
        Home
      </a>
    </li>
  

  <li class="">
    <a href="screen.html">
      <i class="icon-screens"></i>
      <br>
      Screens
    </a>
  </li>

  <li>
    <button type="button"
            onclick="MobileMenu.toggleSearch(this)"
            class="search-button"
            title="Search">
      <i class="icon-search" style="font-size: 18px"></i>
    </button>
  </li>

  <li>
    <button class="button-plain" onclick="Modal.showInModal('#nav-tools-menu')">
      <i class="icon-tools"></i>
      <br>
      Tools
    </button>
  </li>

  
  
</ul>

      <div class="top-nav-holder">
        <div class="container">



<div class="layer-holder top-navigation">
  <div class="layer flex flex-space-between"
       style="align-items: center;
              height: 50px">
    <div class="flex" style="align-items: center">
      <a href="" class="logo-holder" style="font-size: 1.5rem; font-weight: bold; text-decoration: none;">
        Home
      </a>
    
      <div class="desktop-links" style="margin-left: 48px">
        <a href="">Home</a>
        <a href="screen.html">Screens</a>
        <div class="dropdown-menu">
          <button class="button-plain"
                  type="button"
                  onclick="Utils.toggleDropdown(event)">
            Tools
            <i class="icon-down"></i>
          </button>
          <ul class="dropdown-content flex-column tools-menu"
              style="width: 350px"
              id="nav-tools-menu">
            <li>
              <a href="tools.html"
                 class="flex flex-align-center flex-gap-16">
                <div class="bg-stripes square-56">
                  <img src="https://cdn-static.screener.in/icons/screens.e960a5daedf9.svg" alt="Create a stock screen">
                </div>
                <div>
                  <div class="font-weight-500 font-size-14">Create a stock screen</div>
                  <div class="sub font-size-13">Run queries on 10 years of financial data</div>
                </div>
              </a>
            </li>
            <li>
              <a href="searchapi.html" class="flex flex-align-center flex-gap-16">
                <div class="bg-stripes square-56">
                  <img src="https://cdn-static.screener.in/icons/export.d623f0029933.svg" alt="Commodity Prices">
                </div>
                <div>
                  <div class="font-weight-500 font-size-14">suggestions </div>
                  <div class="sub font-size-13">See prices and trends</div>
                </div>
              </a>
            </li>
            <li>
              <a href="overview.html"
                 class="flex flex-align-center flex-gap-16">
                <div class="bg-stripes square-56">
                  <img src="https://cdn-static.screener.in/icons/shares.10acc20cb936.svg"
                       alt="Company Overview">
                </div>
                <div>
                  <div class="font-weight-500 font-size-14">company overview</div>
                  <div class="sub font-size-13">See companies </div>
                </div>
              </a>
            </li>
            <li>
              <a href="chart.html"
                 class="flex flex-align-center flex-gap-16">
                <div class="bg-stripes square-56">
                  <img src="https://cdn-static.screener.in/icons/loudspeaker.88769927f6eb.svg" alt="Latest Announcements">
                </div>
                <div>
                  <div class="font-weight-500 font-size-14">Chart Analysis</div>
                </div>
              </a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </div>

    <div class="show-from-tablet-landscape flex flex-gap-16"
         style="justify-content: flex-end;
                flex: 1 1 400px">
      <div class="search" id="desktop-search"><div class="has-addon left-addon dropdown-typeahead">
    <a class="search-button" href="srchover.html">  
  <i class="addon icon-search"></i>
  <input
    aria-label="Search for a company"
    type="search"
    autocomplete="off"
    spellcheck="false"
    placeholder="Search for a company"
    class="u-full-width"
    
    data-company-search="true">
    </a>  
    <script src="searchcompany.js"></script>
    

</div>
</div>

      
<div class="header">
    <div class="welcome-message">
        Welcome,<?php echo htmlspecialchars($_SESSION['username']); ?>!
    </div>
    <div>
        <a class="logout-link" href="logout.php">Logout</a>
    </div>
</div>

      
    </div>
  </div>
</div>
</div>
      </div>
    </nav>

    
      <main class="flex-grow container">
        <div class="breadcrumb hidden-if-empty"></div>
        

        
  <div class="flex flex-column"
       style="max-width: 650px;
              margin: 96px auto;
              min-height: 60vh;
              text-align: center;
              justify-content: center;
              padding: 16px">
    <h1 style="margin-bottom: 0">
      <img class="u-max-full-width logo"
           src="applogo.png"
           alt="Cashflow logo" />
    </h1>

    <p class="bigger">Stock analysis and screening tool for investors in India.</p>

    <div style="margin-top: 3%">
      <div class="home-search" style="margin-bottom:1.5rem">
        <div class="has-addon left-addon dropdown-typeahead">
  <i class="addon icon-search"></i>
  <input
    aria-label="Search for a company"
    type="search"
    autocomplete="off"
    spellcheck="false"
    placeholder="Search for a company"
    class="u-full-width"
    autofocus="true"
    data-company-search="true">
    <script src="searchcompany.js"></script>

</div>

      </div>
      <p class="suggestions">
        Or analyse:
        <a class="button" href="overview.html">Coastal Corp</a>
        <a class="button" href="overview.html">Frontier Springs</a>
        <a class="button" href="overview.html">ITD Cem</a>
        <a class="button" href="overview.html">Krishca Strapp.</a>
        <a class="button" href="overview.html">Modison</a>
        <a class="button" href="overview.html">Permanent Magnet</a>
        <a class="button" href="overview.html">Pix Transmission</a>
        <a class="button" href="overview.html">RACL Geartech</a>
        <a class="button" href="overview.html">Sandur Manganese</a>
        <a class="button" href="overview.html">Wanbury</a>
      </p>
    </div>
  </div>


<footer id="large-footer">
  <div class="flex-row flex-space-between flex-column-tablet container no-print">
    <div class="hide-from-tablet" style="margin-bottom: 20px;">
      <img src="applogo.png"
           alt="Cashflow Logo"
           style="min-width: 60px"
           class="logo">
    </div>

    <div class="show-from-tablet" style="padding: 0 64px 0 0;">
      <img src="applogo.png"
           alt="Cashflow Logo"
           style="max-width: 120px"
           class="logo">
      <p class="font-size-19" style="font-weight: 500;">Stock analysis and screening tool</p>
      <p class="sub">
        Aaditya Ventures Private Ltd &copy; 2024
        <br>
        Made with <i class="icon-heart red"></i> in India.
      </p>
    </div>

    
      <div class="flex-grow">
        <div class="title">Theme</div>
        <ul class="items">
          <li>
            <button onclick="SetTheme('light')"
                    aria-label="Set light theme"
                    class="button-plain">
              <i class="icon-sun"></i>
              Light
            </button>
          </li>
          <li>
            <button onclick="SetTheme('dark')"
                    aria-label="Set dark theme"
                    class="button-plain">
              <i class="icon-moon"></i>
              Dark
            </button>
          </li>
          <li>
            <button onclick="SetTheme('auto')"
                    aria-label="Set auto theme"
                    class="button-plain">
              <i class="icon-monitor"></i>
              Auto
            </button>
          </li>
        </ul>
      </div>
    </div>

    <div class="hide-from-tablet">
      <hr>
      <p class="sub">Aaditya Ventures Private Limited &copy; 2024</p>
      <p class="sub">Data provided by Yahoo Finances Pvt Ltd</p>
    </div>
  </div>
  

</footer>

    <script src="handling.js"></script>
    <script src="typehead.js"></script>
    <script src="theme.js"></script>
    <script src="compsearch.js"></script>
  </body>
</html>
