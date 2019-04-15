<!DOCTYPE html>
<?php
    if($this->session->userdata("id") == "") {
        redirect('english_home');
    }
?>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Königeld Dashboard</title>

  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">

      </button>
      <div class="navbar-brand" href="#">
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
          <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 76.57 71.69"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title>Asset 14</title><g id="Layer_2" data-name="Layer 2"><g id="Olav"><path class="cls-1" d="M68.59,35.2a7,7,0,0,1,0,14H8.14a7,7,0,1,1,0-14"/><polyline class="cls-1" points="10.35 35.2 8.14 35.2 56.79 35.2"/><path class="cls-1" d="M68.44,56.72a7,7,0,0,1,0,14H8a7,7,0,1,1,0-14"/><polyline class="cls-1" points="10.2 56.72 7.99 56.72 56.64 56.72"/><path class="cls-1" d="M62.69,1.73h-.34Q61,4.36,59.72,7L53,2.39l-.12.11,1.59,2.61c.74,1.21,1.46,2.41,2.17,3.6v5H8a7,7,0,0,0,0,14H68.44a7,7,0,0,0,0-14l-.1-4.95"/><path class="cls-1" d="M53.07,2.18a.41.41,0,0,0-.4-.39.39.39,0,0,0-.4.39.38.38,0,0,0,.4.38.39.39,0,0,0,.21-.06L53,2.39A.38.38,0,0,0,53.07,2.18Z"/><path class="cls-1" d="M62.35,1.73h.34a.39.39,0,0,0,.24-.34A.4.4,0,0,0,62.52,1a.39.39,0,0,0-.4.38A.39.39,0,0,0,62.35,1.73Z"/><path class="cls-1" d="M72.25,2.65a.4.4,0,0,0,.41-.38.41.41,0,0,0-.4-.39.4.4,0,0,0-.41.39.37.37,0,0,0,.08.22l.12.1A.36.36,0,0,0,72.25,2.65Z"/><polyline class="cls-1" points="62.71 1.78 65.17 6.92 71.92 2.49 72.05 2.59 68.34 8.73"/></g></g>
          </svg>
        </button>
        <h3>Home</h3>
      </div>
      <div class="nav nav-actions">
        <div class="konilogo">
          <svg version="1.1" class="logo" width="45" height="45" id="konigeld" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 86.1 127" style="enable-background:new 0 0 86.1 127;" xml:space="preserve">
          		<style type="text/css">
          			.st0{fill:#FFFFFF;}
          		</style>
          		<path id="g" class="st0" d="M54.3,103.8c2.2-1.7,2.7-4.8,1-7s-4.8-2.7-7-1c-0.4,0.3-0.7,0.6-1,1l-18.1,18.1L12.6,98.3V31.4
          			l16.9-16.9l18.3,18.4c2.2,1.7,5.3,1.2,7-1c1.3-1.8,1.3-4.2,0-6L33.1,4.1c-2-1.9-5.2-1.9-7.2,0l-1.3,1.3L24.2,5l-0.1-0.1
          			c-1.1-1.3-2.2-2.5-3.2-3.8C21,0.8,21,0.5,20.8,0.3c-0.3-0.3-0.8-0.4-1.1-0.1c-0.3,0.3-0.4,0.8-0.1,1.1c0,0,0,0,0,0
          			c0.1,0.2,0.3,0.3,0.5,0.3c0.1,0.8,0.1,1.6-0.1,2.4c-0.9,3.6-5.3,4.9-5,6.6l-3.9-1.4c0-0.2,0-0.4-0.2-0.6c-0.3-0.3-0.8-0.4-1.1-0.1
          			S9.6,9.2,9.9,9.6c0.1,0.2,0.3,0.3,0.6,0.3l0.7,4c-1.6-0.6-3.6,3.6-7.3,3.9c-0.8,0.1-1.6-0.1-2.3-0.3c0-0.2,0-0.4-0.2-0.6
          			c-0.3-0.3-0.8-0.4-1.1-0.1s-0.4,0.8-0.1,1.1c0.2,0.2,0.5,0.3,0.8,0.2l3.3,3.8c0,0,0,0.1,0.1,0.1L6,23.9c0,0,0,0,0.1,0.1l-0.6,0.6
          			c-1.7,0.8-2.8,2.6-2.8,4.5v71.4c0,0.3,0,0.5,0.1,0.8c0,0.1,0,0.1,0,0.2c0.2,1.1,0.8,2.1,1.6,2.8l20.4,20.4c0.2,0.4,0.5,0.8,0.8,1.1
          			c1,1,2.3,1.5,3.7,1.4c1.9,0.1,3.6-0.9,4.5-2.6L54.3,103.8z"/>
          		<path id="lbrow" class="st0" d="M43.6,43.1c0-1.6-1.3-2.9-2.9-2.9c0,0,0,0,0,0H29.5c-1.6,0-2.9,1.3-2.9,2.9c0,1.6,1.3,2.9,2.9,2.9
          			h11.3C42.3,46,43.6,44.7,43.6,43.1C43.6,43.1,43.6,43.1,43.6,43.1z"/>
          		<path id="rbrow" class="st0" d="M66.5,46h11.2c1.6,0,2.9-1.3,2.9-2.9c0-1.6-1.3-2.9-2.9-2.9H66.5c-1.6,0-2.9,1.3-2.9,2.9
          			C63.7,44.7,64.9,46,66.5,46z"/>
          		<circle id="leye" class="st0" cx="35.1" cy="51.9" r="4.8"/>
          		<circle id="reye" class="st0" cx="72.2" cy="51.9" r="4.8"/>
          		<path id="king" class="st0" d="M86,86.5c-0.2-0.2-0.6-0.2-0.9,0C85,86.6,85,86.7,85,86.9c-2.4-0.4-4.8-0.8-7.2-1.3l-5.2-1l3.2-8.8
          			c0.2,0.1,0.5,0,0.7-0.1c0.3-0.2,0.3-0.6,0-0.9c-0.2-0.3-0.6-0.3-0.9,0c-0.2,0.2-0.2,0.4-0.2,0.7l-8.9,3.2c-0.3-1.8-0.7-3.5-1-5.3
          			c-0.4-2.4-0.8-4.8-1.3-7.2c0.1,0,0.2-0.1,0.3-0.2c0.2-0.2,0.2-0.6,0-0.9c-0.2-0.2-0.6-0.2-0.9,0c-0.2,0.2-0.2,0.6,0,0.9
          			c0.1,0.1,0.2,0.1,0.3,0.2c-0.4,1.6-0.8,3.2-1.2,4.8s-0.8,3.3-1.3,4.9l3.4,3.4l0,0l-3.4-3.4c-0.5,1.8-1.6,3.5-2.9,4.8
          			c-1.1,1-2.3,1.8-3.7,2.3l-1.2-1.2l0.4-0.4c1.3-1.3,1.2-3.5-0.1-4.8c-1.3-1.2-3.3-1.2-4.6,0L34.7,91.3c-1.2,1.4-1.1,3.5,0.3,4.7
          			c1.3,1.1,3.2,1.1,4.5,0l9.6-9.5l15,15l-9.6,9.5c-1.3,1.3-1.2,3.5,0.1,4.8c1.3,1.2,3.3,1.2,4.6,0L73.9,101c1.3-1.3,1.3-3.4,0-4.8l0,0
          			c-1.3-1.3-3.4-1.3-4.8,0l-0.4,0.4l-0.4-0.4c1.2-3.2,3.8-5.6,7.1-6.6c-1.1-1.1-2.3-2.2-3.4-3.4l0,0l3.4,3.4l0,0
          			c1.6-0.4,3.2-0.9,4.8-1.3c1.6-0.4,3.2-0.8,4.8-1.2c0,0.1,0.1,0.2,0.2,0.3c0.2,0.2,0.6,0.2,0.9,0S86.2,86.7,86,86.5L86,86.5z
          			 M58.8,93.3c-1,0-1.7-0.8-1.7-1.7c0-1,0.8-1.7,1.7-1.7c1,0,1.7,0.8,1.7,1.7l0,0C60.5,92.6,59.7,93.3,58.8,93.3
          			C58.8,93.3,58.8,93.3,58.8,93.3L58.8,93.3z M63,85c0-0.7,0.6-1.3,1.3-1.2h2.1c0.7,0,1.3,0.5,1.3,1.2c0,0,0,0,0,0v2.1
          			c0,0.7-0.5,1.3-1.2,1.3c0,0,0,0,0,0h-2.1c-0.7,0-1.3-0.5-1.3-1.2c0,0,0,0,0,0V85z M60.6,81c0.4-0.4,1.1-0.4,1.6,0
          			c0.4,0.4,0.4,1.1,0,1.6c-0.4,0.4-1.1,0.4-1.6,0C60.2,82.1,60.2,81.4,60.6,81C60.6,81,60.6,81,60.6,81z M70.4,90.8
          			c-0.4,0.4-1.1,0.4-1.6,0c0,0,0,0,0,0c-0.4-0.4-0.4-1.1,0-1.6c0.4-0.4,1.1-0.4,1.6,0S70.8,90.4,70.4,90.8z"/>
          </svg>
        </div>
        <div class="flexspacing"></div>
      </div>
      <!--<ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>-->
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="nav-dropdown-text">
              <?php echo $this->session->userdata("fname")." ".$this->session->userdata("lname"); ?>
              <i class="arrow-down"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Account Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i>Sign Out
            </a>
          </div>
        </li>
      </ul>
      <!--<button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>-->
    </header>
    <div class="konilay konilay-popover konilay-visual"></div>
    <div class="konilay konilay-popover"></div>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'dashboard' ?>">
                <svg version="1.1" class="nav-icon" width="56" height="56" id="dashboard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 29 31" style="enable-background:new 0 0 29 31;" xml:space="preserve">
                  <style type="text/css">
                    .st0{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
                  </style>
                  <g transform="translate(1 1)">
                    <g transform="translate(0 0)">
                      <path class="st0" d="M0,0v29h27"/>
                      <path class="st0" d="M5.2,9.2L5.2,9.2c1.3,0,2.4,1.1,2.4,2.4l0,0V29l0,0H2.8l0,0V11.6C2.8,10.2,3.8,9.2,5.2,9.2L5.2,9.2z"/>
                      <path class="st0" d="M13.4,15.6L13.4,15.6c1.3,0,2.4,1.1,2.4,2.4l0,0v11l0,0H11l0,0V18C11,16.6,12.1,15.6,13.4,15.6L13.4,15.6z"/>
                      <path class="st0" d="M24.4,5.2V29h-4.8V5.6"/>
                    </g>
                    <g transform="translate(17.849 0.383)">
                      <line class="st0" x1="6.5" y1="5.1" x2="6.5" y2="3.1"/>
                      <path class="st0" d="M4.2,0.3L4.2,0.3L3,2.4L0.3,0.6H0.2l0.3,0.5c0.2,0.3,0.3,0.5,0.3,0.5C1,1.9,1.3,2.3,1.7,3.1v2.1"/>
                      <path class="st0" d="M0.3,0.5c0-0.1-0.1-0.2-0.2-0.2S0,0.4,0,0.5s0.1,0.2,0.2,0.2l0,0h0.1V0.5L0.3,0.5z"/>
                      <path class="st0" d="M4.2,0C4.1,0,4,0.1,4,0.2l0,0c0,0.1,0,0.1,0.1,0.1h0.1c0.1,0,0.1-0.1,0.1-0.1C4.3,0.1,4.2,0,4.2,0"/>
                      <path class="st0" d="M8.1,0.7c0.1,0,0.2-0.1,0.1-0.2c0-0.1-0.1-0.2-0.2-0.1c0,0-0.1,0-0.1,0.1v0.1L8.1,0.7C8,0.7,8.1,0.7,8.1,0.7z
                        "/>
                      <path class="st0" d="M4.2,0.3l1,2.1L8,0.6l0,0L6.5,3.1"/>
                    </g>
                  </g>
                </svg>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(). 'reports_salessummary' ?>">
                <svg version="1.1" class="nav-icon" width="56" height="56" id="reports" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 30.9 34.9" style="enable-background:new 0 0 30.9 34.9;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:none;stroke:#FFFFFF;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;}
                      .st1{fill:none;stroke:#FFFFFF;stroke-width:1.5;stroke-linecap:round;}
                    </style>
                    <g transform="translate(0.75 0.75)">
                      <path class="st0" d="M26.5,0H11.9C10.3,0,9,1.3,9,2.9v2.7h8.6c1.6,0,2.9,1.3,2.9,2.9v19.3h6.1c1.6,0,2.9-1.3,2.9-2.9l0,0v-22
                        C29.4,1.3,28.1,0,26.5,0L26.5,0z"/>
                      <line class="st0" x1="11.9" y1="2.7" x2="26.5" y2="2.7"/>
                      <line class="st0" x1="11.9" y1="5.5" x2="26.5" y2="5.5"/>
                      <line class="st0" x1="20.6" y1="8.3" x2="26.5" y2="8.3"/>
                      <line class="st0" x1="20.6" y1="11.1" x2="26.6" y2="11.1"/>
                      <path class="st1" d="M20.5,13.9h6.1"/>
                      <path class="st1" d="M20.5,16.7h6.1"/>
                      <line class="st0" x1="20.6" y1="19.5" x2="26.6" y2="19.5"/>
                      <line class="st0" x1="20.6" y1="22.3" x2="26.6" y2="22.3"/>
                      <line class="st0" x1="20.6" y1="25.2" x2="26.6" y2="25.1"/>
                      <path class="st0" d="M4,5.6h12.5c2.2,0,4,1.8,4,4v19.8c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V9.6C0,7.4,1.8,5.6,4,5.6z"/>
                      <line class="st0" x1="2.9" y1="8.3" x2="17.5" y2="8.3"/>
                      <line class="st0" x1="2.9" y1="11.1" x2="17.5" y2="11.1"/>
                      <line class="st0" x1="2.9" y1="13.9" x2="17.5" y2="13.9"/>
                      <line class="st0" x1="3" y1="16.7" x2="17.6" y2="16.7"/>
                      <line class="st0" x1="3" y1="19.5" x2="17.6" y2="19.5"/>
                      <line class="st0" x1="3" y1="22.3" x2="17.6" y2="22.3"/>
                      <line class="st0" x1="3" y1="25.1" x2="17.6" y2="25.1"/>
                      <line class="st0" x1="3" y1="27.9" x2="17.6" y2="27.9"/>
                      <line class="st0" x1="3" y1="30.7" x2="17.6" y2="30.7"/>
                    </g>
                </svg>
                <span class="nav-text">Reports</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'products_library' ?>">
                <svg version="1.1" class="nav-icon" width="56" height="56" id="products" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 33.3 36.7" style="enable-background:new 0 0 33.3 36.7;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
                      .st1{fill:none;stroke:#FFFFFF;stroke-linecap:round;stroke-linejoin:round;}
                      .st2{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:0.25;}
                      .st3{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-linecap:round;stroke-linejoin:round;}
                      .st4{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}
                      .st5{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
                    </style>
                    <g transform="translate(-804.274 -355.882)">
                      <path class="st0" d="M815.2,365.3h6.4c5.5,0,9.9,4.4,9.9,9.9v6.4c0,5.5-4.4,9.9-9.9,9.9h-6.4c-5.5,0-9.9-4.4-9.9-9.9v-6.4
                        C805.3,369.7,809.7,365.3,815.2,365.3z"/>
                      <path class="st0" d="M810.4,365.3c-0.2-4.4,3.2-8.2,7.7-8.4c4.4-0.2,8.2,3.2,8.4,7.7c0,0.3,0,0.5,0,0.8"/>
                      <path class="st1" d="M830.1,364.1c-0.3-0.3-0.7-0.3-1,0l0,0l-1.9,1.9c0.5,0.2,0.9,0.4,1.3,0.8l1.7-1.7
                        C830.4,364.8,830.4,364.3,830.1,364.1z"/>
                      <rect x="809.9" y="374.2" class="st1" width="17.1" height="10.2"/>
                      <circle class="st2" cx="812.8" cy="377.2" r="0.7"/>
                      <circle class="st2" cx="812.8" cy="379.3" r="0.7"/>
                      <circle class="st2" cx="812.8" cy="381.5" r="0.7"/>
                      <line class="st3" x1="814.9" y1="377.2" x2="824.1" y2="377.2"/>
                      <line class="st3" x1="814.9" y1="379.3" x2="824.1" y2="379.3"/>
                      <line class="st3" x1="814.9" y1="381.5" x2="824.1" y2="381.5"/>
                      <path class="st0" d="M830.8,365.5l1.3,1.1c1.2,1,2.9,0.8,3.9-0.3l0,0l0,0c1-1.2,0.8-2.9-0.3-3.9l0,0l-3.8-3.2l-5.5-1l1.9,5.2
                        l0.4,0.4"/>
                      <path class="st4" d="M817.7,367.6l-0.9,0.9c-0.5,0.5-0.5,1.2,0,1.7c0.2,0.2,0.5,0.4,0.9,0.4h1.8c0.7,0,1.2-0.5,1.2-1.2
                        c0-0.3-0.1-0.6-0.4-0.9l-0.9-0.9C818.9,367.2,818.2,367.2,817.7,367.6z"/>
                      <path class="st5" d="M817.7,363.3l-2.9,2.9c-0.5,0.5-0.5,1.3,0,1.7c0.2,0.2,0.5,0.4,0.9,0.4h5.9c0.7,0,1.2-0.6,1.2-1.2
                        c0-0.3-0.1-0.6-0.4-0.9l-2.9-2.9C819,362.8,818.2,362.8,817.7,363.3z"/>
                    </g>
                </svg>
                <span class="nav-text">Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'employees' ?>">
                <svg version="1.1" class="nav-icon" width="56" height="56" id="employees" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 31.7 14.3" style="enable-background:new 0 0 31.7 14.3;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:none;stroke:#FFFFFF;stroke-linecap:round;stroke-linejoin:round;}
                    </style>
                    <g transform="translate(-866.497 -319.985)">
                      <g transform="translate(872.239 326.674)">
                        <line class="st0" x1="13.6" y1="3.4" x2="6.5" y2="3.4"/>
                        <path class="st0" d="M6.4,3.2c0.1,0,0.2,0.1,0.1,0.2c0,0.1-0.1,0.1-0.1,0.1"/>
                        <path class="st0" d="M13.8,3.2c-0.1,0-0.2,0.1-0.2,0.2c0,0.1,0.1,0.2,0.2,0.2"/>
                        <path class="st0" d="M0.2,0C0.1,0,0,0.1,0,0.2s0.1,0.2,0.1,0.2"/>
                        <path class="st0" d="M20.2,0c0.1,0,0.2,0.1,0.2,0.2s-0.1,0.2-0.1,0.2"/>
                      </g>
                      <g transform="translate(866.997 320.485)">
                        <path class="st0" d="M23,11.3c0-4.2-3.4-7.7-7.7-7.7l0,0l0,0c-4.2,0-7.7,3.4-7.7,7.7l0,0C12.4,14,18.2,14,23,11.3L23,11.3z"/>
                        <circle class="st0" cx="11.6" cy="7.7" r="0.8"/>
                        <circle class="st0" cx="19.1" cy="7.7" r="0.8"/>
                        <circle class="st0" cx="25.5" cy="4.5" r="0.8"/>
                        <path class="st0" d="M7.9,9.7c-0.2,0-0.3,0-0.5,0C4.8,9.6,2.2,8.9,0,7.7C0,3.4,3.4,0,7.7,0l0,0l0,0c2.7,0,5.2,1.4,6.6,3.8"/>
                        <circle class="st0" cx="5.4" cy="4.5" r="0.8"/>
                        <path class="st0" d="M14.2,3.8C12.9,1.4,10.4,0,7.7,0l0,0c-2.6,0-5,1.3-6.4,3.4c0.3,0.3,0.4,0.8,0.1,1.1C1.2,4.8,0.9,4.9,0.6,4.8
                          C0.2,5.7,0,6.7,0,7.7c2.2,1.3,4.8,1.9,7.3,2c0.2,0,0.4,0,0.5,0"/>
                        <path class="st0" d="M14.2,3.8C12.9,1.4,10.4,0,7.7,0l0,0C4.1,0,1,2.4,0.2,5.9l5,0.5l-5-0.5C0.1,6.4,0,7,0,7.7
                          c2.2,1.3,4.8,1.9,7.3,2c0.2,0,0.4,0,0.5,0"/>
                        <path class="st0" d="M16.3,4"/>
                        <path class="st0" d="M23.3,9.7c2.6-0.1,5.1-0.7,7.3-2c0-0.6-0.1-1.2-0.2-1.8l-4.8,0.5l4.8-0.5c-0.1-0.4-0.2-0.7-0.3-1.1
                          c-0.4,0.1-0.9-0.1-1-0.5c-0.1-0.3,0-0.6,0.3-0.8C28,1.3,25.6,0,23,0l0,0"/>
                        <path class="st0" d="M16.4,3.8c3.2,0.4,5.7,2.8,6.4,5.9"/>
                        <path class="st0" d="M22.8,9.7c0.2,0,0.3,0,0.5,0c2.6-0.1,5.1-0.7,7.3-2C30.7,3.4,27.2,0,23,0l0,0l0,0c-2.7,0-5.2,1.4-6.6,3.8"/>
                        <path class="st0" d="M14.2,3.8C12.9,1.4,10.4,0,7.7,0l0,0C3.4,0,0,3.4,0,7.7c2.2,1.3,4.8,1.9,7.3,2c0.2,0,0.3,0,0.5,0
                          C8.6,6.6,11.1,4.2,14.2,3.8z"/>
                      </g>
                    </g>
                </svg>
                <span class="nav-text">Employees</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'account' ?>">
                <svg version="1.1" class="nav-icon" width="56" height="56" id="settings" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 33.9 22.2" style="enable-background:new 0 0 33.9 22.2;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:none;stroke:#FFFFFF;stroke-linecap:round;stroke-linejoin:round;}
                      .st1{fill:#FFFFFF;stroke:#FFFFFF;stroke-linecap:round;stroke-linejoin:round;}
                      .st2{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
                    </style>
                    <g transform="translate(-698.103 -475.596)">
                      <g transform="translate(716.981 484.798)">
                        <line class="st0" x1="4.9" y1="0.2" x2="4.9" y2="0.2"/>
                        <path class="st0" d="M4.9,0.2C3.3,0.8,1.6,0.8,0,0.2"/>
                        <path class="st0" d="M5,0C4.9,0,4.8,0.2,4.9,0.3c0,0.1,0.1,0.1,0.2,0.1"/>
                      </g>
                      <g transform="translate(698.603 476.128)">
                        <path class="st0" d="M32.9,10.5c0-4.1-3.3-7.3-7.3-7.3l0,0c-4.1,0-7.3,3.3-7.3,7.3C22.8,13.1,28.3,13.1,32.9,10.5L32.9,10.5z"/>
                        <circle class="st0" cx="23" cy="7.1" r="0.8"/>
                        <path class="st0" d="M25.8,12.4c-2.7,0-5.3-0.6-7.6-1.9c0,0.1,0,0.3,0,0.4v1.4c0,4.1,3.3,7.3,7.3,7.3c4.1,0,7.3-3.3,7.3-7.3v-1.5
                          c0-0.1,0-0.3,0-0.4C30.7,11.7,28.3,12.4,25.8,12.4z"/>
                        <path class="st0" d="M22.3,19.7c0,0.9,0,1.3,0,1.3s0-0.7,0-2.1"/>
                        <path class="st0" d="M11.4,19.7c0,0.9,0,1.3,0,1.3s0-0.7,0-2.1"/>
                        <path class="st0" d="M24.7,21.2v-4.9"/>
                        <path class="st0" d="M8.9,21.1v-4.8"/>
                        <path class="st0" d="M11.4,9L11,9.3c-0.2,0.2-0.2,0.4,0,0.6c0.1,0.1,0.2,0.1,0.3,0.1H12c0.2,0,0.4-0.2,0.4-0.4
                          c0-0.1,0-0.2-0.1-0.3L12,9C11.8,8.9,11.5,8.9,11.4,9L11.4,9z"/>
                        <path class="st0" d="M14.7,10.2V8.7c0-3.4-3.3-6.2-7.3-6.2l0,0C3.3,2.5,0,5.3,0,8.7v6.2c0,2.2,2.1,4,4.7,4H10c2.6,0,4.7-1.8,4.7-4
                          v-4.5C14.7,10.4,14.7,10.3,14.7,10.2z"/>
                        <circle class="st0" cx="8.6" cy="6.4" r="0.8"/>
                        <path class="st1" d="M11.4,7.5l-1,1c-0.2,0.2-0.2,0.4,0,0.6c0.1,0.1,0.2,0.1,0.3,0.1h2.1c0.2,0,0.4-0.2,0.4-0.4
                          c0-0.1,0-0.2-0.1-0.3l-1-1C11.8,7.3,11.5,7.3,11.4,7.5z"/>
                        <path class="st0" d="M9.1,0.7C8.9,0.9,8.7,1.2,8.7,1.5c-0.1,0.3-0.1,0.6,0,0.9c0.8,0.1,1.6,0.4,2.4,0.7l0,0c0.7,0.4,1.4,0.9,2,1.5
                          c0.3-0.1,0.5-0.3,0.7-0.5c0.2-0.2,0.3-0.5,0.4-0.8c0.1,0,0.2-0.1,0.2-0.1c0-0.1-0.1-0.2-0.1-0.2c-0.1,0-0.2,0.1-0.2,0.1s0,0,0,0.1
                          c-0.1,0.1-0.3,0.2-0.5,0.2c-0.7,0.1-1.3-0.5-1.6-0.5v-1c0.1,0,0.2-0.1,0.1-0.2c0-0.1-0.1-0.2-0.2-0.1c-0.1,0-0.2,0.1-0.1,0.2l0,0
                          L11,2.3c-0.2-0.3-1-0.4-1.3-1C9.3,1.1,9.3,0.9,9.3,0.8c0.1,0,0.1-0.1,0.1-0.2S9.3,0.5,9.2,0.5S9,0.6,9.1,0.7L9.1,0.7L9.1,0.7z"/>
                        <path class="st0" d="M18.7,7.8c0.2-0.4,0.4-0.9,0.6-1.3c-0.3-0.3-0.8-0.3-1.1,0c-0.3,0.3-0.3,0.8,0,1.1
                          C18.4,7.7,18.6,7.8,18.7,7.8z"/>
                        <path class="st2" d="M23.6,0c-0.1,0-0.1,0.1-0.1,0.2l0,0c0,0,0,0.1,0.1,0.1c-0.3,0.6-0.5,1.1-0.8,1.7c-0.2,0.4-0.4,0.8-0.6,1.2
                          l-1.9-1.4c0.1-0.1,0-0.2,0-0.2c-0.1-0.1-0.2,0-0.2,0c-0.1,0.1,0,0.2,0,0.2h0.1c0.1,0.8,0.1,1.6,0.2,2.4C19.9,4.1,19.5,4.1,19,4
                          c-0.6-0.1-1.3-0.1-1.9-0.2V3.7c0-0.1-0.1-0.1-0.2-0.1s-0.1,0.1-0.1,0.2c0,0.1,0.1,0.1,0.2,0.1l0,0c0,0,0,0,0.1-0.1
                          c0.4,0.2,0.7,0.4,1.1,0.6c0.5,0.3,1.1,0.6,1.6,1l1.3-1.2L21.9,4l1.8-0.6c0-0.6,0-1.2,0-1.9c0-0.4,0-0.9,0-1.3h0.1
                          c0.1,0,0.1-0.1,0-0.2C23.8,0,23.7,0,23.6,0L23.6,0z"/>
                        <path class="st0" d="M14.4,5.7c-0.2,0-0.4,0.1-0.5,0.2c0.3,0.4,0.5,0.8,0.6,1.3c0.4-0.1,0.7-0.4,0.7-0.8C15,6,14.7,5.7,14.4,5.7
                          L14.4,5.7z"/>
                        <path class="st0" d="M18.2,12.5c-0.3,0.2-0.7,0.1-1-0.1c-0.1-0.1-0.3-0.3-0.3-0.5"/>
                        <path class="st0" d="M4.8,11.5c-0.4,0.5-0.6,1.1-0.7,1.7c-0.1,1.2,0.3,2.4,1.1,3.3"/>
                        <path class="st0" d="M14.7,12.2c0.5,0.3,1,0.6,1.3,0.4c0.4-0.2,0.2-1.1,0.4-1.1c0.3-0.1,0.7,2.4,2,3c0.6,0.3,1.7,0.2,3.8-1.3"/>
                      </g>
                    </g>
                </svg>
                <span class="nav-text">Settings</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="animated fadeIn">
        <main class="dashboard-layout">
          <!-- Sidebar-->
          <div class="dashboard-header-layout-sidebar dashboard-header-layout-sidebar-nav">
            <a class="dashboard-header-sidebar-parent-item">
              Reports
            </a>
            <div class="dashboard-header-sidebar-parent-children" style="height: 320px;">
              <a href="<?php echo base_url(). 'reports_salessummary'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Sales Summary</a>
              <a href="<?php echo base_url(). 'reports_salestrends'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child dashboard-header-sidebar-link--active">Sales Trends</a>
              <a href="<?php echo base_url(). 'reports_paymentmethods'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Payment Methods</a>
              <a href="<?php echo base_url(). 'reports_productsales'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Product Sales</a>
              <a href="<?php echo base_url(). 'reports_categorysales'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Category Sales</a>
              <a href="<?php echo base_url(). 'reports_employeesales'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Employee Sales</a>
              <a href="<?php echo base_url(). 'reports_discountsales'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Discounts</a>
              <a href="<?php echo base_url(). 'reports_modifiersales'?>" class="dashboard-header-sidebar-link dashboard-header-sidebar-link-child">Modifier Sales</a>
            </div>
          </div>
          <!--End Sidebar-->
          <!--Container-->
          <div class="dashboard-header-layout-content">
            <div class="page-layout page-layout-flex">
              <div class="page-layout-content reports-main-viewport">
                <div class="reports-content">
                  <div class="filter-bar-border">
                    <div class="filter-bar">
                      <div class="filter-bar-filters">
                        <input type="text" id="konicalendar-start" class="form-control floating-label" placeholder="Starting Date">
                          <i class="fa fa-calendar"></i>
                        <input type="text" id="konicalendar-end" class="form-control floating-label" placeholder="Ending Date">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <div class="filter-bar-actions">
                        <div class="filter-bar-item">
                          <form class="" action="" method="post">
                            <button class="konibutton" type="button">Export</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-divide-s">
                    <h5 class="sales-chart-title strong sales-caps">Daily Gross Sales</h5>
                    <div class="sales-chart-header-area sales-chart-header-area-horizontal">
                      <div class="sales-chart-header">
                        <h3 class="sales-chart-comparison-subtitle">6 Feb. 2019 compared to</h3>
                        <div class="sales-chart-comparison-dropdown">
                          <div class="dropdown">
                            <button id="dailytrigger" class="dropdown-trigger-text arrow-down dropdown-trigger" type="button">Same Day Previous Week</button>
                            <div class="popover popover-list popover-fly-down" id="daily">
                              <div class="popover-list-item" id="samedayweek">Same Day Previous Week</div>
                              <div class="popover-list-item" id="samedayyear">Same Day Previous Year</div>
                              <div class="popover-list-item" id="specdate">Specific Date</div>
                            </div>
                          </div>
                        </div>
                        <p id="daily" class="sales-chart-subtitle">+Rp 3,311,361.66 more in sales than on 'tanggal'</p>
                      </div>
                        <div class="sales-chart-legend">
                          <div class="sales-chart-legend-item sales-chart-legend-item-vertical">
                            <div class="sales-chart-legend-item sales-trend-circle circle-blue"></div>
                            <span class="super-strong">3 Feb - 9 Feb</span>
                          </div>
                          <div class="sales-chart-legend-item sales-chart-legend-item-vertical">
                            <div class="sales-chart-legend-item sales-trend-circle"></div>
                            <span class="super-strong">4 Feb - 10 Feb</span>
                          </div>
                        </div>
                    </div>
                        <div class="sales-chart-container">
                          <div class="sales-trend-chart-graph">
                            <canvas id="daily-gross-sales-chart" width="100%" height="230" class="double-line-chart"></canvas>
                            <div id="chart-tooltip"></div>
                          </div>
                        </div>
                  </div>
                  <div class="box-divide-s">
                    <h5 class="sales-chart-title strong sales-caps">Weekly Gross Sales</h5>
                    <div class="sales-chart-header-area sales-chart-header-area-horizontal">
                      <div class="sales-chart-header">
                        <h3 class="sales-chart-comparison-subtitle">6 Feb. 2019 compared to</h3>
                        <div class="sales-chart-comparison-dropdown">
                          <div class="dropdown">
                            <button id="weeklytrigger" class="dropdown-trigger-text arrow-down dropdown-trigger super-strong" type="button">Same Day Previous Week</button>
                            <div class="popover popover-list popover-fly-down" id="weekly">
                              <div class="popover-list-item" id="prevweek">Previous Week</div>
                              <div class="popover-list-item" id="sameweek-prevyear">Same Week Previous Year</div>
                            </div>
                          </div>
                        </div>
                        <p class="sales-chart-subtitle">+Rp 3,311,361.66 more in sales than on 'tanggal'</p>
                      </div>
                        <div class="sales-chart-legend">
                          <div class="sales-chart-legend-item sales-chart-legend-item-vertical">
                            <div class="sales-chart-legend-item sales-trend-circle circle-blue"></div>
                            <span class="super-strong">3 Feb - 9 Feb</span> (Duit)
                          </div>
                          <div class="sales-chart-legend-item sales-chart-legend-item-vertical">
                            <div class="sales-chart-legend-item sales-trend-circle"></div>
                            <span class="super-strong">4 Feb - 10 Feb</span> (Duit)
                          </div>
                        </div>
                    </div>
                        <div class="sales-chart-container">
                          <canvas id="weekly-gross-sales-chart" class="sales-trend-chart-graph"></canvas>
                        </div>
                  </div>
                  <div class="box-divide-s">
                    <h5 class="sales-chart-title strong sales-caps">Yearly Gross Sales</h5>
                    <div class="sales-chart-header-area sales-chart-header-area-horizontal">
                      <div class="sales-chart-header">
                        <h3 class="sales-chart-comparison-subtitle">2019 compared to previous year</h3>
                        <p class="sales-chart-subtitle">+Rp 3,311,361.66 more in sales so far than in 'previous year'</p>
                      </div>
                        <div class="sales-chart-legend">
                          <div class="sales-chart-legend-item sales-chart-legend-item-vertical">
                            <div class="sales-chart-legend-item sales-trend-circle circle-blue"></div>
                            <span class="strong">2019</span> (Duit)
                          </div>
                          <div class="sales-chart-legend-item sales-chart-legend-item-vertical">
                            <div class="sales-chart-legend-item sales-trend-circle"></div>
                            <span class="strong">2018</span> (Rp 0.00)
                          </div>
                        </div>
                    </div>
                        <div class="sales-chart-container">
                          <canvas id="yearly-gross-sales-chart" class="sales-trend-chart-graph"></canvas>
                        </div>
                  </div>

                <!--Overlay Layout jika memilih specific date, overlay-layout-inactive jika gk ada-->
                <!--<div class="overlay-layout">
                  <div class="selectbox selectbox-modal selectbox-modal-divide">
                    <header class="selectbox-header selectbox-modal-header">
                      <div class="selectbox-header-content">
                        <div class="selectbox-header-container">
                          <button class="selectbox-header-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.21 79.43" height="18" width="18" class="svg-icon"><defs><style>.cls-1{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title>Asset 15</title><g id="Layer_2" data-name="Layer 2"><g id="Olav"><path class="cls-1" d="M19.57,4.14a10.66,10.66,0,1,0-15.11,15l20.29,20.4L4.14,60.06a10.66,10.66,0,1,0,15,15.11L40,54.42,60.79,75.28a10.66,10.66,0,0,0,15.12-15L55.55,39.78,76.07,19.37A10.66,10.66,0,0,0,61,4.25L40.25,24.93,29.88,14.5"/></g></g>
                            </svg>
                          </button>
                        </div>
                        <h2 class="selectbox-header-title selectbox-modal-header-title">Select a Date</h2>
                      </div>
                    </header>
                    <div class="selectbox-body selectbox-modal-body">
                      <div class="selectbox-modal-content">
                        <div class="single-date-calendar calendar-input grid-row">
                          <div class="calendar grid-col grid-col-24-24">
                            <div class="calendar-header">
                              <div class="calendar-title-nav" data-role="calendar-back"><</div>
                              <div class="calendar-title">February</div>
                              <div class="calendar-title-nav" data-role="calendar-forward">></div>
                            </div>
                            <div class="calendar-month">
                              <div class="calendar-weekdays">
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">S</div>
                                </div>
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">M</div>
                                </div>
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">T</div>
                                </div>
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">W</div>
                                </div>
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">T</div>
                                </div>
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">F</div>
                                </div>
                                <div class="calendar-weekday">
                                  <div class="calendar-day-number">S</div>
                                </div>
                              </div>
                              <div class="calendar-week">
                                <div class="calendar-day">
                                  <div class="calendar-day-number">27</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">28</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">29</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">30</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">31</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">2</div>
                                </div>
                              </div>
                              <div class="calendar-week">
                                <div class="calendar-day">
                                  <div class="calendar-day-number">27</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">28</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">29</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">30</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">31</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">2</div>
                                </div>
                              </div>
                              <div class="calendar-week">
                                <div class="calendar-day">
                                  <div class="calendar-day-number">27</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">28</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">29</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">30</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">31</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">2</div>
                                </div>
                              </div>
                              <div class="calendar-week">
                                <div class="calendar-day">
                                  <div class="calendar-day-number">27</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">28</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">29</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">30</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">31</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">2</div>
                                </div>
                              </div>
                              <div class="calendar-week">
                                <div class="calendar-day">
                                  <div class="calendar-day-number">27</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">28</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">29</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">30</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">31</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">2</div>
                                </div>
                              </div>
                              <div class="calendar-week">
                                <div class="calendar-day">
                                  <div class="calendar-day-number">27</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">28</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">29</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">30</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">31</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                  <div class="calendar-day-number">2</div>
                                </div>
                              </div>
                            </div>
                            <div class="date-filter-input fill">
                              <input class="date-input input" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="selectbox-footer selectbox-modal-footer selectbox">
                      <button class="konibutton selectbox-modal-button-primary selectbox-modal-button button-primary" type="submit">
                        <span class="button-label">Done</span>
                      </button>
                    </div>
                  </div>
                </div> -->
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
  </body>
</html>

<script src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
<script type="text/javascript">
window.onload = function(){

const dailyChart = document.getElementById('daily-gross-sales-chart');
const weeklyChart = document.getElementById('weekly-gross-sales-chart');
const yearlyChart = document.getElementById('yearly-gross-sales-chart');

let dataArray1 = [0.00, 0.00, 50000.00, 10000.00, 165000.00, 0.00, 200000.00, 250000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 500000.00, 350000.00, 0.00, 400000.00, 0.00, 0.00, 0.00, 100000.00, 0.00, 0.00];
let dataArray2 = [0.00, 0.00, 50000.00, 10000.00, 165000.00, 0.00, 200000.00, 250000.00, 100000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 300000.00, 350000.00, 0.00, 200000.00, 0.00, 0.00, 0.00, 50000.00, 0.00, 0.00];
let dataArray3 = [0.00, 400000.00, 300000.00, 250000.00, 750000.00, 650000.00, 600000.00];
let dataArray4 = [0.00, 200000.00, 100000.00, 150000.00, 450000.00, 850000.00, 300000.00];
let dataArray5 = [1000000.00, 1200000.00, 1350000.00, 1000000.00, 750000.00, 800000.00, 1500000.00, 1000000.00, 1200000.00, 550000.00, 1250000.00, 800000.00];
let dataArray6 = [900000.00, 1400000.00, 1850000.00, 500000.00, 950000.00, 600000.00, 1450000.00, 1100000.00, 1000000.00, 350000.00, 1350000.00, 750000.00];

let maxArray1 = Math.max.apply(null, dataArray1);
let maxArray2 = Math.max.apply(null, dataArray2);
let maxArray3 = Math.max.apply(null, dataArray3);
let maxArray4 = Math.max.apply(null, dataArray4);

let grossYearlyChart = new Chart(yearlyChart, {
  type: 'bar', //Could be bar, horizontal bar, pie, line, doughnut, radar, polar area, etx
  data: {
    labels: ["Jan.", "Feb.", "Mar.", "Apr.", "May", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."],
    datasets: [{
      label: '24 Feb 2019',
      backgroundColor: 'rgb(59 ,131, 140)',
      borderColor: 'transparent',
      pointBackgroundColor: 'rgb(255, 255, 255)',
      data: dataArray5
    },
    {
      label: "25 Feb 2018",
      backgroundColor: 'rgb(113, 118, 123)',
      borderColor: 'transparent',
      pointBackgroundColor: 'rgb(255, 255, 255)',
      data: dataArray6
    }]
  },
  options: {
    barValueSpacing: 20,
    responsive: true,
    showTooltips: true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        stacked: false,
        gridLines: {
          display: false,
          color: 'rgb(60, 60, 60)'
        },
        ticks: {
          precision: 0,
          fontColor: 'rgb(0, 0, 0)'
        }
      }],
      yAxes: [{
        /*afterBuildTicks: function(scale) {
        scale.ticks = updateChartTicks(scale);
          return;
        },
        beforeUpdate: function(oScale) {
          return;
        },*/
        stacked: false,
        gridLines: {
          display: true,
          color: 'rgb(60, 60, 60)'
        },
        ticks: {
          beginAtZero: true,
          callback: function(value, index, values) {
                      return 'Rp ' + value;
                    },
          scaleLabel: {
            display: true,
            scaleOverride : true
          },
          /*max: Math.max.apply(dataArray1, dataArray2) + 100000,*/
          maxTicksLimit: 4,
          fontColor: 'rgb(0, 0, 0)'
        }
      }]
    },
    tooltips: {
      enabled: false,
      callbacks: {
          label: function(tooltipItem, data) {
                  return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                  }
          }
    },
    plugins: {
      filler: {
        propagate: true
      }
    }
  }
  });

let grossWeeklyChart = new Chart(weeklyChart, {
  type: 'bar', //Could be bar, horizontal bar, pie, line, doughnut, radar, polar area, etx
  data: {
    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    datasets: [{
      label: '24 Feb 2019',
      backgroundColor: 'rgb(59 ,131, 140)',
      borderColor: 'transparent',
      pointBackgroundColor: 'rgb(255, 255, 255)',
      data: dataArray3
    },
    {
      label: "25 Feb 2018",
      backgroundColor: 'rgb(113, 118, 123)',
      borderColor: 'transparent',
      pointBackgroundColor: 'rgb(255, 255, 255)',
      data: dataArray4
    }]
  },
  options: {
    barValueSpacing: 20,
    responsive: true,
    showTooltips: true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        stacked: false,
        gridLines: {
          display: false,
          color: 'rgb(60, 60, 60)'
        },
        ticks: {
          precision: 0,
          fontColor: 'rgb(0, 0, 0)'
        }
      }],
      yAxes: [{
        /*afterBuildTicks: function(scale) {
        scale.ticks = updateChartTicks(scale);
          return;
        },
        beforeUpdate: function(oScale) {
          return;
        },*/
        stacked: false,
        gridLines: {
          display: true,
          color: 'rgb(60, 60, 60)'
        },
        ticks: {
          beginAtZero: true,
          callback: function(value, index, values) {
                      return 'Rp ' + value;
                    },
          scaleLabel: {
            display: true,
            scaleOverride : true
          },
          /*max: Math.max.apply(dataArray1, dataArray2) + 100000,*/
          maxTicksLimit: 4,
          fontColor: 'rgb(0, 0, 0)'
        }
      }]
    },
    tooltips: {
      enabled: false,
      callbacks: {
          label: function(tooltipItem, data) {
                  return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                  }
          }
    },
    plugins: {
      filler: {
        propagate: true
      }
    }
  }
  });


let grossDailyChart = new Chart(dailyChart, {
  type: 'line', //Could be bar, horizontal bar, pie, line, doughnut, radar, polar area, etx
  data: {
    labels: ["12 am", "1 am", "2 am", "3 am", "4 am", "5 am", "6 am", "7 am", "8 am", "9 am", "10 am", "11 am", "12 pm", "1 pm", "2 pm", "3 pm", "4 pm", "5 pm", "6 pm", "7 pm", "8 pm", "9 pm", "10 pm", "11 pm"],
    datasets: [{
      label: '24 Feb 2019',
      lineTension: 0,
      backgroundColor: 'transparent',
      borderColor: 'rgb(59 ,131, 140)',
      borderWidth: 2,
      pointBackgroundColor: 'rgb(255, 255, 255)',
      data: dataArray1,
    },
    {
      label: "25 Feb 2018",
      lineTension: 0,
      backgroundColor: 'transparent',
      borderColor: 'rgb(113, 118, 123)',
      borderWidth: 2,
      pointBackgroundColor: 'rgb(255, 255, 255)',
      data: dataArray2,
    }]
  },
  options: {

    responsive: true,
    showTooltips: true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        stacked: true,
        gridLines: {
          display: true,
          color: 'rgb(60, 60, 60)'
        },
        ticks: {
          precision: 0,
          fontColor: 'rgb(0, 0, 0)'
        }
      }],
      yAxes: [{
        type: 'linear',
        /*afterBuildTicks: function(scale) {
        scale.ticks = updateChartTicks(scale);
          return;
        },
        beforeUpdate: function(oScale) {
          return;
        },*/
        stacked: true,
        gridLines: {
          display: true,
          color: 'rgb(60, 60, 60)'
        },
        ticks: {
          beginAtZero: true,
          callback: function(value, index, values) {
                      return 'Rp ' + value;
                    },
          scaleLabel: {
            display: true,
            scaleOverride : true
          },
          /*max: Math.max.apply(dataArray1, dataArray2) + 100000,*/
          maxTicksLimit: 4,
          precision: 0,
          fontColor: 'rgb(0, 0, 0)'
        }
      }]
    },
    tooltips: {
      enabled: false,
      callbacks: {
          label: function(tooltipItem, data) {
                  return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                  }
          }
    },
    plugins: {
      filler: {
        propagate: true
      }
    }
  }
  });
}




</script>
