<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand d-flex align-items-center m-0" href="{{ route('home') }}" >
        <span class="font-weight-bold text-lg">Carraa.com</span>
      </a>
    </div>
    <div class="collapse navbar-collapse px-4  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home*') ? 'active' : '' }}" href="{{ route('home') }}">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="32px" height="32px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>dashboard</title>
                <g id="dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="template" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path class="color-foreground" d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z" id="Path"></path>
                    <path class="color-background" d="M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z" id="Path"></path>
                    <path class="color-background" d="M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z" id="Path"></path>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('settings*') ? 'active' : '' }}" href="{{ route('settings.index') }}">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="20px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(304.000000, 151.000000)">
                        <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                        <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                        <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>
       <li class="nav-item">
          <a class="nav-link  {{ Request::is('socials*') ? 'active' : '' }}" href="{{ route('socials.index') }}">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="32px" height="32px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>social</title>
                <g id="social" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="credit-card" transform="translate(12.000000, 15.000000)" fill="#FFFFFF">
                    <path class="color-background" d="M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z" id="Path" fill-rule="nonzero"></path>
                    <path class="color-foreground" d="M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z M10.5,12 C9.67158,12 9,12.67155 9,13.5 C9,14.32845 9.67158,15 10.5,15 L12,15 C12.82845,15 13.5,14.32845 13.5,13.5 C13.5,12.67155 12.82845,12 12,12 L10.5,12 Z" id="Shape"></path>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Social</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('staticpages*') ? 'active' : '' }}" href="{{ route('staticpages.index') }}">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="32px" height="32px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>static pages</title>
                <g id="rtl" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="menu-alt-3" transform="translate(12.000000, 14.000000)" fill="#FFFFFF">
                    <path class="color-foreground" d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 C24,2.66105143 23.2325143,3.42857143 22.2857143,3.42857143 L1.71428571,3.42857143 C0.76752,3.42857143 0,2.66105143 0,1.71428571 Z" id="Path"></path>
                    <path class="color-background" d="M0,10.2857143 C0,9.33894857 0.76752,8.57142857 1.71428571,8.57142857 L22.2857143,8.57142857 C23.2325143,8.57142857 24,9.33894857 24,10.2857143 C24,11.2325143 23.2325143,12 22.2857143,12 L1.71428571,12 C0.76752,12 0,11.2325143 0,10.2857143 Z" id="Path"></path>
                    <path class="color-background" d="M10.2857143,18.8571429 C10.2857143,17.9103429 11.0532343,17.1428571 12,17.1428571 L22.2857143,17.1428571 C23.2325143,17.1428571 24,17.9103429 24,18.8571429 C24,19.8039429 23.2325143,20.5714286 22.2857143,20.5714286 L12,20.5714286 C11.0532343,20.5714286 10.2857143,19.8039429 10.2857143,18.8571429 Z" id="Path"></path>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Static Pages</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('sliders*') ? 'active' : '' }}" href="{{ route('sliders.index') }}">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-sliders"></i>
              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" class="ms-2" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <title>sliders</title>
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
              </svg> --}}
            </div>
            <span class="nav-link-text ms-1">Sliders</span>
          </a>
        </li>


        {{-- <li class="nav-item">
            <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white active opacity-10" aria-controls="applicationsExamples" role="button" aria-expanded="true">
              <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                <svg width="32px" height="32px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>settings</title>
                  <g id="table" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="view-grid" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <path class="color-foreground" d="M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z" id="Path"></path>
                      <path class="color-background" d="M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z" id="Path"></path>
                      <path class="color-background" d="M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z" id="Path"></path>
                      <path class="color-foreground" d="M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z" id="Path"></path>
                    </g>
                  </g>
                </svg>
              </div>
            <span class="nav-link-text ms-2">Applications</span>
            </a>
          <div class="collapse  show " id="applicationsExamples">
            <ul class="nav border-start ms-4">


              <li class="nav-item ">
                <a class="nav-link text-white opacity-9 " href="../../pages/applications/wallet.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal"> Wallet </span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-white active opacity-10 " href="../../pages/applications/datatables.html">
                  <span class="sidenav-mini-icon"> D </span>
                  <span class="sidenav-normal"> DataTables </span>
                </a>
              </li>

            </ul>
          </div>
        </li> --}}



        {{-- <li class="nav-item mt-2">
          <div class="d-flex align-items-center nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ms-2" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
            </svg>
            <span class="font-weight-normal text-md ms-2">Account Pages</span>
          </div>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 " href="../pages/profile.html">
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 " href="../pages/sign-in.html">
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 " href="../pages/sign-up.html">
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li> --}}
      </ul>
    </div>
    {{-- <div class="sidenav-footer mx-4 ">
      <div class="card border-radius-md" id="sidenavCard">
        <div class="card-body  text-start  p-3 w-100">
          <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-primary" viewBox="0 0 24 24" fill="currentColor" id="sidenavCardIcon">
              <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z" />
              <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
            </svg>
          </div>
          <div class="docs-info">
            <h6 class="font-weight-bold up mb-2">Need help?</h6>
            <p class="text-sm font-weight-normal">Please check our docs.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard" target="_blank" class="font-weight-bold text-sm mb-0 icon-move-right mt-auto w-100 mb-0">
              Documentation
              <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div> --}}
  </aside>