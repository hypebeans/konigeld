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

    <div class="konilay konilay-popover konilay-visual"></div>
    <div class="konilay konilay-popover"></div>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
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
              <a class="nav-link" href="#">
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
              <a class="nav-link" href="#">
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
              <a class="nav-link" href="#">
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
              <a class="nav-link" href="#">
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
            <a href="#" class="dashboard-header-sidebar-link">Product Library</a>
            <a href="#" class="dashboard-header-sidebar-link">Modifiers</a>
            <a href="#" class="dashboard-header-sidebar-link">Categories</a>
            <a href="#" class="dashboard-header-sidebar-link">Discounts</a>
          </div>
          <!--End Sidebar-->
          <!--Container-->
          <form id="update-product" action="<?php echo base_url().'products_library_edit/update' ?>" method="post">
          <div class="dashboard-header-layout-content">
            <div class="page-layout product-library-parent">
              <div class="crud-layout-active dialog">
                <header class="dialog-header">
                  <div class="dialog-header-content">
                    <div class="dialog-header-part">
                      <button type="button" data-href="<?php echo base_url() . 'products_library'?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.21 79.43" width="30" height="30" class="svg-icon svg-icon-close">
                          <defs>
                            <style>.cls-1{fill:none;stroke:#42838D; stroke-linecap:round; stroke-linejoin:round; stroke-width:5px; }</style>
                          </defs><title>Close Button</title><g id="close" data-name="close"><g id="Olav"><path class="cls-1" d="M19.57,4.14a10.66,10.66,0,1,0-15.11,15l20.29,20.4L4.14,60.06a10.66,10.66,0,1,0,15,15.11L40,54.42,60.79,75.28a10.66,10.66,0,0,0,15.12-15L55.55,39.78,76.07,19.37A10.66,10.66,0,0,0,61,4.25L40.25,24.93,29.88,14.5"/></g></g>
                        </svg>
                      </button>
                    </div>
                    <h2 class="dialog-header-title">Edit Product</h2>
                    <div class="dialog-primary-actions">
                      <div class="dialog-primary-actions-primary">
                          <?php foreach($produk as $list) { ?>
                        <button class="konibutton button-secondary-desct" onclick="location.href='<?php echo base_url(). 'products_library/delete/'.$list->id_produk ?>'">
                          <span class="button-label">Delete</span>
                        </button>
                      </div>
                      <div class="dialog-primary-actions-primary">
                        <button class="konibutton button-primary" type="submit">
                          <span class="button-label">Save</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </header>
                <div class="dialog-body">
                  <div class="dialog-content">
                    <fieldset class="form-fieldset">
                      <legend class="form-legend">Details</legend>
                      <div class="grid-row">
                        <div class="grid-col grid-col-24-24">
                          <div class="form-table">
                            <div class="form-row">
                              <div class="form-field">
                                <label class="form-field-label" for="name">Name</label>
                                <div class="form-field-content">
                                  <input class="form-field-input" id="name" name="name" value="<?php echo $list->nama_produk ?>" type="text">
                                </div>
                              </div>
                            </div>
                            <div class="error-text" data-error="error1">
                              <span id="error1"></span>
                            </div>
                            <div class="form-row">
                              <div class="form-field">
                                <label class="form-field-label">Category</label>
                                <div class="form-field-content">
                                  <div class="form-field-arrow-container">
                                    <select class="form-field-select" name="cate">
                                      <?php foreach($cat as $list2){ ?>
                                        <option value="<?php echo $list2->id_jenis_p ?>">
                                        <?php echo $list2->nama_jenis ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <div class="form-row">
                              <div class="form-field">
                                <label class="form-field-label">Outlet</label>
                                <div class="form-field-content">
                                  <div class="form-field-arrow-container">
                                    <select class=" form-field-select" name="outlet">
                                      <?php foreach($out as $list3){ ?>
                                        <option value="<?php echo $list3->id_outlet ?>">
                                        <?php echo $list3->alamat_outlet ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset class="form-fieldset">
                      <legend class="form-legend">Price and Inventory</legend>
                      <div class="grid-row">
                        <div class="grid-col grid-col-24-24">
                          <div class="form-table">
                            <div class="form-row">
                              <div class="form-field">
                                <label class="form-field-label" for="price">Price</label>
                                <div class="form-field-content">
                                  <input class="form-field-input" id="price" name="price" type="text" value="<?php echo $list->harga ?>">
                                </div>
                              </div>
                            </div>
                            <div class="error-text" data-error="error2">
                              <span id="error2"></span>
                            </div>
                            <div class="form-row">
                              <div class="form-field">
                                <label class="form-field-label" for="stock">Stock</label>
                                <div class="form-field-content">
                                  <input class="form-field-input" id="stock" name="stock" type="text" placeholder="Enter Stock" value="<?php echo $list->stok ?>">
                                </div>
                              </div>
                            </div>
                            <div class="error-text" data-error="error3">
                              <span id="error3"></span>
                            </div>
                        </div>
                            <?php } ?>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </main>
      </div>
  </body>
</html>
<script type="text/javascript">
$.validator.setDefaults({
  submitHandler: function() {
    form.submit();
  }
});

var updateproduct =$('#update-product');
updateproduct.validate({

  rules: {
    name: {
      required: true
    },
    price: {
      required: true,
      number: true
    },
    stock: {
      required: true,
      number: true
    }
  },
  messages: {
    name: {
      required: 'Please enter your product name'
    },
    price: {
      required: 'Please enter your product price',
      number: 'Please enter a valid price'
    },
    stock: {
      required: 'Please enter your product stock',
      number: 'Please enter a valid number'
    }
  },

  errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }

});

</script>
