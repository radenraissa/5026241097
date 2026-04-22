<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Always On Point">
    <meta property="og:title" content="Point Coffee Indonesia | Instagram, Facebook, TikTok | Linktree">
    <meta property="og:description" content="Always On Point">
    <meta property="og:url" content="https://linktr.ee/pointcoffeeid">
    <meta property="og:image" content="https://linktr.ee/og/image/pointcoffeeid.jpg">
    <title>Point Coffee Indonesia | Instagram, Facebook, TikTok | Linktree</title>
    <link rel="icon" type="image/png" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        :root {
            --button-style-text: #ffffff;
            --button-style-background: transparent;
            --button-style-border-color: #ffffff;
            --button-style-radius: 0;
            /* ROUNDED_NONE */
            --link-gap: 0.875rem;
            --profileBackground: #00833e;
            --profileFontFamilyPrimary: Karla;
            --profileFontWeightNormal: 500;
            --profileFontWeightBold: 700;
            --header-font-weight: 600;
            --header-text-color: #ffffff;
            --bodyText: #ffffff;
            --socialLinkFill: #ffffff;
        }


        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            font-family: var(--profileFontFamilyPrimary), sans-serif;
            background-color: var(--profileBackground);
        }

        @media (max-width: 35.9375rem) {
            body {
                background-color: #00833e !important;
            }

            .profile-wrap {
                margin-top: 0;
                margin-bottom: 0;
                border-radius: 0;
                box-shadow: none;
            }
        }

        body {
            background-color: #006530 !important;
            min-height: 100lvh;
            margin: 0;
            padding: 0;
        }

        /* sr-only  */
        .sr-only {
            position: absolute;
            width: 0.0625rem;
            height: 0.0625rem;
            padding: 0;
            margin: -0.0625rem;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        /* ===== TOP BAR ===== */
        #TopBar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 200;
            width: 100%;
        }

        .topbar-inner {
            max-width: 36.25rem;
            /* --profile-container-desktop-width */
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.5rem;
            padding: var(--link-gap);
        }

        /* Tombol kaca — backdrop-blur + rgba white dari source */
        .glass-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2.5rem;
            min-width: 2.5rem;
            border: 0.0625rem solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.7);
            color: #000;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.15s;
            -webkit-backdrop-filter: blur(0.25rem);
            backdrop-filter: blur(0.25rem);
        }

        .glass-btn:hover {
            background: rgba(255, 255, 255, 1);
            color: #000;
        }

        .glass-btn.round {
            border-radius: 50%;
            width: 2.5rem;
        }

        .glass-btn.pill {
            border-radius: 10rem;
            padding: 0 0.5625rem;
            gap: 0.375rem;
            font-family: var(--profileFontFamilyPrimary), sans-serif;
            font-size: 0.875rem;
            font-weight: 500;
        }

        #topbar-buttons {
            display: flex;
            gap: 0.5rem;
        }

        /* ===== PROFILE CONTAINER ===== */
        #profile-container-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100lvh;
        }

        .profile-wrap {
            width: 100%;
            max-width: 36.25rem;
            display: flex;
            flex-direction: column;
            background-color: var(--profileBackground) !important;
            border-radius: 1.5rem;
            box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.15);
            margin-top: 3.5rem;
            margin-bottom: 3.5rem;
            overflow: hidden;
        }

        /* ===== HEADER: foto, nama, deskripsi ===== */
        #profile-header {
            padding-top: 6rem;
            position: relative;
        }

        .header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Foto profil  */
        #profile-picture {
            margin-bottom: 1rem;
        }

        #profile-picture img {
            width: 6rem;
            height: 6rem;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }

        #profile-title {
            position: relative;
            margin: 0 1.5rem;
            max-width: 100%;
        }

        #profile-title h1 {
            font-family: var(--profileFontFamilyPrimary), sans-serif;
            font-weight: var(--header-font-weight);
            font-size: 1.5rem;
            color: var(--header-text-color);
            text-align: center;
            margin: 0;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        /* Deskripsi */
        #profile-description {
            margin-top: 0.25rem;
            padding: 0 calc(var(--link-gap) * 3);
        }

        #profile-description h2 {
            font-family: var(--profileFontFamilyPrimary), sans-serif;
            font-size: 1rem;
            font-weight: var(--profileFontWeightNormal);
            color: var(--bodyText);
            text-align: center;
            line-height: 1.5;
            margin: 0;
            text-wrap: balance;
        }

        /* ===== PROFILE CONTENT ===== */
        #profile-content {
            position: relative;
            padding: 0 var(--link-gap) 1rem;
        }

        /* ===== SOCIAL ICONS  ===== */
        .social-icons-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 0.5rem;
        }

        .social-icon-btn {
            background: transparent;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            color: var(--socialLinkFill);
            text-decoration: none;
            display: inline-flex;
            transition: transform 0.15s;
        }

        .social-icon-btn:hover {
            transform: scale(1.075);
        }

        .social-icon-btn svg {
            pointer-events: none;
        }

        /* ===== LINK BUTTONS  ===== */
        #links-container {
            display: flex;
            flex-direction: column;
            gap: var(--link-gap);
            /* --link-gap = 0.875rem */
            margin-top: 1.5rem;
        }

        .link-item {
            position: relative;
            display: grid;
        }

        .link-btn {
            display: grid;
            width: 100%;
            text-decoration: none;
            outline: none;
        }

        /* .link-chin — class dari source(NewLinkChin) */
        .link-chin {
            position: relative;
            display: flex;
            min-height: 4rem;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0.0625rem;
            padding: 0.75rem 2rem;
            border: 0.0625rem solid var(--button-style-border-color);
            background-color: var(--button-style-background);
            border-radius: var(--button-style-radius);
            transition: background-color 0.2s;
        }

        .link-chin:hover {
            /* color-mix(srgb, transparent 93%, white 7%) dari source asli */
            background-color: rgba(255, 255, 255, 0.07);
        }

        .link-text {
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: center;
            font-family: var(--profileFontFamilyPrimary), sans-serif;
            font-size: 0.875rem;

            font-weight: var(--profileFontWeightNormal);
            line-height: 1.2;
            color: var(--button-style-text);
            letter-spacing: -0.0125rem;
            display: -webkit-box;
            line-clamp: 2;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        /* ===== FOOTER ===== */
        #profile-footer {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
            padding-bottom: 4rem;
            padding-top: 3rem;
            width: 100%;
        }

        .footer-join-row {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bodyText);
        }

        /* Footer links  */
        .footer-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            font-size: 0.625rem;
            line-height: 1.5;
            color: var(--bodyText);
            gap: 0;
        }

        .footer-links a,
        .footer-links button {
            font-size: 0.625rem;
            line-height: 1.5;
            color: var(--bodyText);
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            font-family: var(--profileFontFamilyPrimary), sans-serif;
        }

        .footer-links a:hover,
        .footer-links button:hover {
            text-decoration: underline;
        }

        .footer-links .dot {
            padding: 0 0.25rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (min-width: 36rem) {
            #profile-content {
                padding-left: calc(var(--link-gap) * 2);
                padding-right: calc(var(--link-gap) * 2);
            }

            .link-text {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- TOP BAR -->
    <div id="TopBar" data-testid="TopBar">
        <div class="topbar-inner">


            <a href="https://linktr.ee" target="_blank" class="glass-btn round" aria-label="Linktree">
                <svg fill="none" height="18" width="18" viewBox="0 0 28 28">
                    <path
                        d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                        fill="currentColor" />
                </svg>
            </a>

            <div id="topbar-buttons">
                <!-- Subscribe -->
                <div class="glass-btn pill" aria-label="Subscribe">
                    <svg viewBox="0 0 256 256" width="16" height="16" fill="currentColor">
                        <path
                            d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z" />
                    </svg>
                </div>

                <!-- Share  -->
                <button class="glass-btn round" aria-label="Share profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                    </svg>
                </button>
            </div>

        </div>
    </div>


    <!-- =====================================================
       PROFILE CONTAINER
       ===================================================== -->
    <div id="profile-container-inner">
        <div class="profile-wrap">

            <!-- HEADER -->
            <div id="profile-header">
                <div class="header-content">

                    <!-- Foto profil -->
                    <div id="profile-picture" aria-label="Profile avatar">
                        <img src="https://ugc.production.linktr.ee/jzqvdWwyT8OPge0PEh5S_a1fba08d25bd178fe4ec617576f379be?io=true&size=avatar-v3_096x96.jpg"
                            alt="" crossorigin="anonymous" role="presentation" data-testid="ProfileImage"
                            onerror="this.src='https://placehold.co/96x96/005c2b/ffffff?text=PC'">
                    </div>

                    <!-- Nama -->
                    <div id="profile-title" aria-label="Profile title">
                        <div style="text-align:center">
                            <h1>Point Coffee Indonesia<span></span></h1>
                        </div>
                    </div>

                    <!-- Deskripsi-->
                    <div tabindex="0" aria-label="Profile description">
                        <div id="profile-description">
                            <h2>Always On Point</h2>
                        </div>
                    </div>

                </div>
            </div>


            <!-- CONTENT -->
            <div id="profile-content">

                <!-- SOCIAL ICONS  -->
                <div style="margin-top:0.5rem">
                    <div class="social-icons-row">

                        <a href="https://instagram.com/PointCoffeeID" target="_blank" class="social-icon-btn"
                            role="link" title="Instagram" aria-label="Instagram">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>Instagram</title>
                                <path
                                    d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C17.1815 5.46501 17.0259 5.49596 16.8808 5.55608C16.7356 5.6162 16.6037 5.70433 16.4926 5.81542C16.3815 5.92652 16.2934 6.05841 16.2333 6.20356C16.1732 6.34871 16.1422 6.50429 16.1422 6.6614C16.1422 6.81851 16.1732 6.97408 16.2333 7.11924C16.2934 7.26439 16.3815 7.39628 16.4926 7.50737C16.6037 7.61847 16.7356 7.70659 16.8808 7.76672C17.0259 7.82684 17.1815 7.85779 17.3386 7.85779C17.6559 7.85779 17.9602 7.73174 18.1846 7.50737C18.4089 7.28301 18.535 6.9787 18.535 6.6614C18.535 6.3441 18.4089 6.03979 18.1846 5.81542C17.9602 5.59106 17.6559 5.46501 17.3386 5.46501ZM12 6.86456C11.3256 6.86456 10.6578 6.99739 10.0348 7.25547C9.41169 7.51355 8.84556 7.89182 8.36869 8.36869C7.89182 8.84556 7.51355 9.41169 7.25547 10.0348C6.99739 10.6578 6.86456 11.3256 6.86456 12C6.86456 12.6744 6.99739 13.3422 7.25547 13.9652C7.51355 14.5883 7.89182 15.1544 8.36869 15.6313C8.84556 16.1082 9.41169 16.4864 10.0348 16.7445C10.6578 17.0026 11.3256 17.1354 12 17.1354C13.362 17.1354 14.6682 16.5944 15.6313 15.6313C16.5944 14.6682 17.1354 13.362 17.1354 12C17.1354 10.638 16.5944 9.33178 15.6313 8.36869C14.6682 7.40561 13.362 6.86456 12 6.86456ZM12 8.67043C12.4372 8.67043 12.8702 8.75655 13.2742 8.92388C13.6781 9.0912 14.0452 9.33646 14.3544 9.64564C14.6635 9.95482 14.9088 10.3219 15.0761 10.7258C15.2434 11.1298 15.3296 11.5628 15.3296 12C15.3296 12.4372 15.2434 12.8702 15.0761 13.2742C14.9088 13.6781 14.6635 14.0452 14.3544 14.3544C14.0452 14.6635 13.6781 14.9088 13.2742 15.0761C12.8702 15.2434 12.4372 15.3296 12 15.3296C11.1169 15.3296 10.2701 14.9788 9.64564 14.3544C9.02122 13.7299 8.67043 12.8831 8.67043 12C8.67043 11.1169 9.02122 10.2701 9.64564 9.64564C10.2701 9.02122 11.1169 8.67043 12 8.67043Z" />
                            </svg>
                            <span class="sr-only">Instagram</span>
                        </a>

                        <a href="https://tiktok.com/@pointcoffeeid" target="_blank" class="social-icon-btn" role="link"
                            title="TikTok" aria-label="TikTok">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>TikTok</title>
                                <path
                                    d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z" />
                            </svg>
                            <span class="sr-only">TikTok</span>
                        </a>

                        <a href="https://www.facebook.com/pointcoffeeid" target="_blank" class="social-icon-btn"
                            role="link" title="Facebook" aria-label="Facebook">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>Facebook</title>
                                <path
                                    d="M23 12C23 5.92487 18.0751 0.999996 12 0.999996C5.92488 0.999996 1 5.92487 1 12C1 17.1588 4.55146 21.4874 9.34266 22.6761V15.3614H7.07438V12H9.34266V10.5516C9.34266 6.80751 11.037 5.07215 14.7128 5.07215C15.4096 5.07215 16.6121 5.20877 17.104 5.34544V8.39261C16.8444 8.36529 16.3935 8.3516 15.8332 8.3516C14.0295 8.3516 13.3326 9.03484 13.3326 10.8112V12H16.9256L16.3084 15.3614H13.3326V22.9194C18.7792 22.2616 23 17.624 23 12Z" />
                            </svg>
                            <span class="sr-only">Facebook</span>
                        </a>

                        <a href="https://x.com/PointCoffeeID" target="_blank" class="social-icon-btn" role="link"
                            title="X" aria-label="X">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>X</title>
                                <path
                                    d="M17.8048 2.96973H20.8705L14.1394 10.6338L22.0034 21.0304H15.8321L11.0004 14.7125L5.46893 21.0304H2.40328L9.53424 12.8331L2.00342 2.96973H8.32798L12.6932 8.74114L17.8048 2.96973ZM16.7318 19.231H18.4313L7.43494 4.70248H5.60888L16.7318 19.231Z" />
                            </svg>
                            <span class="sr-only">X</span>
                        </a>

                        <a href="https://www.threads.com/@pointcoffeeid" target="_blank" class="social-icon-btn"
                            role="link" title="Threads" aria-label="Threads">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>Threads</title>
                                <path
                                    d="M17.2631 11.1966C17.1684 11.1512 17.0721 11.1074 16.9746 11.0656C16.8048 7.93667 15.0951 6.14536 12.2243 6.12703C12.2113 6.12695 12.1984 6.12695 12.1853 6.12695C10.4682 6.12695 9.04016 6.85989 8.16118 8.19362L9.74003 9.27668C10.3967 8.28043 11.4272 8.06805 12.1861 8.06805C12.1949 8.06805 12.2037 8.06805 12.2123 8.06813C13.1576 8.07416 13.8709 8.34899 14.3325 8.88494C14.6685 9.27513 14.8932 9.81432 15.0044 10.4948C14.1664 10.3524 13.26 10.3086 12.2911 10.3641C9.5617 10.5213 7.80702 12.1132 7.92487 14.3251C7.98467 15.4471 8.54363 16.4124 9.49871 17.0429C10.3062 17.576 11.3463 17.8366 12.4272 17.7776C13.8546 17.6994 14.9744 17.1548 15.7557 16.1589C16.349 15.4027 16.7242 14.4226 16.8899 13.1878C17.5702 13.5983 18.0744 14.1386 18.3528 14.788C18.8263 15.8921 18.8539 17.7062 17.3736 19.1853C16.0766 20.481 14.5176 21.0415 12.1615 21.0588C9.54789 21.0395 7.57128 20.2013 6.28615 18.5676C5.08273 17.0378 4.46079 14.8281 4.43759 12C4.46079 9.17183 5.08273 6.96218 6.28615 5.43239C7.57128 3.79869 9.54786 2.96052 12.1614 2.9411C14.794 2.96067 16.805 3.80287 18.1393 5.44446C18.7936 6.24948 19.2869 7.26184 19.6121 8.44222L21.4622 7.94859C21.0681 6.49567 20.4478 5.24367 19.6038 4.20535C17.8932 2.10077 15.3914 1.02236 12.1679 1H12.155C8.93801 1.02228 6.46422 2.10479 4.80232 4.21742C3.32346 6.0974 2.56062 8.71326 2.53499 11.9923L2.53491 12L2.53499 12.0077C2.56062 15.2867 3.32346 17.9026 4.80232 19.7826C6.46422 21.8952 8.93801 22.9778 12.155 23H12.1679C15.0279 22.9802 17.0439 22.2314 18.7047 20.5721C20.8775 18.4013 20.8121 15.6803 20.096 14.0099C19.5822 12.8121 18.6026 11.8391 17.2631 11.1966ZM12.325 15.8393C11.1287 15.9067 9.88594 15.3698 9.82466 14.2197C9.77924 13.367 10.4315 12.4155 12.3984 12.3021C12.6236 12.2891 12.8447 12.2828 13.0618 12.2828C13.7762 12.2828 14.4446 12.3522 15.0522 12.485C14.8256 15.3155 13.4962 15.7751 12.325 15.8393Z" />
                            </svg>
                            <span class="sr-only">Threads</span>
                        </a>

                        <a href="https://www.youtube.com/@pointcoffeeid" target="_blank" class="social-icon-btn"
                            role="link" title="YouTube" aria-label="YouTube">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>YouTube</title>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.8142 5.41679C20.6763 5.64906 21.3541 6.32675 21.5832 7.18581C22 8.74483 22 11.9997 22 11.9997C22 11.9997 22 15.2545 21.5832 16.8136C21.3509 17.6757 20.6733 18.3535 19.8142 18.5825C18.2551 18.9993 12 18.9993 12 18.9993C12 18.9993 5.74801 18.9993 4.18581 18.5825C3.32358 18.3502 2.64588 17.6726 2.4168 16.8136C2 15.2545 2 11.9997 2 11.9997C2 11.9997 2 8.74483 2.4168 7.18581C2.64907 6.32358 3.32676 5.64588 4.18581 5.41679C5.74801 5 12 5 12 5C12 5 18.2551 5 19.8142 5.41679ZM15.1961 11.9992L10.0004 14.9994V8.99883L15.1961 11.9992Z" />
                            </svg>
                            <span class="sr-only">YouTube</span>
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=628115484222" target="_blank"
                            class="social-icon-btn" role="link" title="WhatsApp" aria-label="WhatsApp">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>WhatsApp</title>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.7945 4.21258C17.7267 2.14211 14.9765 1.00129 12.0462 1.00024C6.00812 1.00024 1.09402 5.91382 1.09192 11.9535C1.09087 13.8842 1.59562 15.7688 2.55417 17.4296L1 23.1063L6.807 21.5831C8.40685 22.4561 10.2084 22.9157 12.0415 22.9162H12.0462C18.0832 22.9162 22.9979 18.0021 23 11.9624C23.001 9.03532 21.8628 6.28359 19.7945 4.21311V4.21258ZM12.0462 21.0663H12.0425C10.409 21.0658 8.80658 20.6267 7.40842 19.7973L7.07592 19.5999L3.62986 20.5038L4.54954 17.1438L4.33314 16.7993C3.42186 15.3497 2.94022 13.6741 2.94127 11.954C2.94337 6.93435 7.0276 2.85012 12.0499 2.85012C14.4817 2.85117 16.7676 3.79922 18.4866 5.52042C20.2058 7.24109 21.1517 9.52903 21.1507 11.9614C21.1485 16.9816 17.0643 21.0658 12.0462 21.0658V21.0663ZM17.0401 14.2477C16.7665 14.1107 15.4209 13.4488 15.1698 13.3575C14.9187 13.266 14.7365 13.2204 14.5542 13.4945C14.372 13.7687 13.8473 14.3854 13.6876 14.5676C13.5279 14.7504 13.3682 14.773 13.0946 14.6358C12.821 14.4988 11.9391 14.2099 10.8933 13.2776C10.0798 12.5517 9.53032 11.6557 9.3707 11.3815C9.21101 11.1073 9.35389 10.9592 9.49041 10.8232C9.61331 10.7003 9.76407 10.5033 9.90114 10.3436C10.0383 10.184 10.0834 10.0695 10.1748 9.88721C10.2662 9.70442 10.2205 9.5448 10.1522 9.40767C10.0839 9.27059 9.53667 7.92334 9.30818 7.37554C9.08598 6.84191 8.86017 6.91439 8.69261 6.90547C8.53292 6.89758 8.35069 6.89601 8.16791 6.89601C7.98512 6.89601 7.68886 6.96429 7.43781 7.23847C7.18677 7.51261 6.47978 8.17493 6.47978 9.52164C6.47978 10.8683 7.46042 12.1704 7.59749 12.3532C7.73457 12.536 9.52769 15.3003 12.2731 16.4863C12.926 16.7683 13.436 16.9369 13.8336 17.063C14.4891 17.2715 15.0857 17.2421 15.5574 17.1717C16.0832 17.0929 17.1767 16.5094 17.4047 15.8702C17.6326 15.2309 17.6326 14.6826 17.5644 14.5686C17.4961 14.4546 17.3133 14.3858 17.0396 14.2488L17.0401 14.2477Z" />
                            </svg>
                            <span class="sr-only">WhatsApp</span>
                        </a>

                        <a href="mailto:Customercare@PointCoffee.id" class="social-icon-btn" role="link" title="Email"
                            aria-label="Email">
                            <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                <title>Email</title>
                                <path
                                    d="M4.30606 7.28017C4.14002 7.62375 4.06901 7.99473 4.03469 8.4148C3.99999 8.83953 3.99999 9.36401 4 10.0143V13.9857C3.99999 14.6359 3.99999 15.1604 4.03469 15.5852C4.07042 16.0225 4.14591 16.4066 4.32698 16.7619C4.6146 17.3264 5.07354 17.7854 5.63803 18.073C5.9934 18.2541 6.37752 18.3296 6.81483 18.3653C7.23955 18.4 7.76404 18.4 8.4143 18.4H15.5857C16.236 18.4 16.7605 18.4 17.1852 18.3653C17.6225 18.3296 18.0066 18.2541 18.362 18.073C18.9265 17.7854 19.3854 17.3264 19.673 16.7619C19.8541 16.4066 19.9296 16.0225 19.9653 15.5852C20 15.1604 20 14.6359 20 13.9857V10.0143C20 9.36401 20 8.83953 19.9653 8.4148C19.931 7.99473 19.86 7.62375 19.6939 7.28017L13.8997 12.0209C12.7946 12.9251 11.2054 12.9251 10.1003 12.0209L4.30606 7.28017Z" />
                                <path
                                    d="M18.9609 6.3295C18.7792 6.17262 18.5783 6.0372 18.362 5.92696C18.0066 5.74588 17.6225 5.6704 17.1852 5.63467C16.7605 5.59997 16.236 5.59997 15.5857 5.59998H8.41432C7.76406 5.59997 7.23955 5.59997 6.81483 5.63467C6.37752 5.6704 5.9934 5.74588 5.63803 5.92696C5.42166 6.0372 5.2208 6.17262 5.03915 6.3295L10.8602 11.0922C11.5232 11.6347 12.4768 11.6347 13.1398 11.0922L18.9609 6.3295Z" />
                            </svg>
                            <span class="sr-only">Email</span>
                        </a>

                    </div>
                </div>

                <!-- LINK BUTTONS  -->
                <div id="links-container">

                    <div class="link-item" data-testid="Link">
                        <a href="https://wa.me/6282229000880" target="_blank" class="link-btn" rel="noopener noreferrer"
                            data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Point Coffee Catering</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="https://pointcoffee.id/" target="_blank" class="link-btn" rel="noopener noreferrer"
                            data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Website Point Coffee</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="https://www.google.com/maps/search/point+coffee/" target="_blank" class="link-btn"
                            rel="noopener noreferrer" data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Cek Lokasi Point Coffee</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="https://food.klikindomaret.com/" target="_blank" class="link-btn"
                            rel="noopener noreferrer" data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Order via KlikIndomaret</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="https://tinyurl.com/jw3adpwa" target="_blank" class="link-btn"
                            rel="noopener noreferrer" data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Order via Grab Food</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="https://shopee.co.id/universal-link/now-food/storeListing/44543" target="_blank"
                            class="link-btn" rel="noopener noreferrer" data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Order via Shopee Food</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="https://gofood.link/a/GEXFEfd" target="_blank" class="link-btn"
                            rel="noopener noreferrer" data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">Order via GoFood</div>
                            </div>
                        </a>
                    </div>

                    <div class="link-item" data-testid="Link">
                        <a href="http://sticker.ly/s/XBK2Y1" target="_blank" class="link-btn" rel="noopener noreferrer"
                            data-testid="LinkClickTriggerLink">
                            <div class="link-chin" data-testid="NewLinkChin">
                                <div class="link-text">WhatsApp (WA) Stickers Point Coffee</div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- /links-container -->

            </div>
            <!-- /profile-content -->


            <!-- FOOTER  -->
            <div id="profile-footer" data-testid="profile-footer">

                <!-- Join Linktree -->
                <div class="footer-join-row">
                    <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=pointcoffeeid"
                        target="_blank" rel="noopener noreferrer"
                        style="display: flex; justify-content: center; align-items: center; width: 100%; padding: 0.75rem 1rem; background-color: #ffffff; color: #000000; border: none; border-radius: 2rem; text-decoration: none; font-weight: 600; font-size: 1.125rem; transition: background-color 0.2s; box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.2);"
                        onmouseover="this.style.backgroundColor='#f5f5f5'"
                        onmouseout="this.style.backgroundColor='#ffffff'">
                        Join pointcoffeeid on Linktree
                    </a>
                </div>

                <!-- Footer links  -->
                <div class="footer-links" data-testid="footer">
                    <div style="display:flex;align-items:center;justify-content:center">
                        <button class="footer-links">Cookie Preferences</button>
                        <span class="dot">•</span>
                        <a href="https://linktr.ee/s/about/trust-center/report/?field86145911=https%3A%2F%2Flinktr.ee%2Fpointcoffeeid"
                            target="_blank" rel="noopener noreferrer">Report</a>
                        <span class="dot">•</span>
                        <a href="https://linktr.ee/privacy" target="_blank" rel="noopener noreferrer">Privacy</a>
                        <span class="dot">•</span>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:center">
                        <button class="footer-links">Explore</button>
                    </div>
                </div>

            </div>
            <!-- /profile-footer -->

        </div>
        <!-- /profile-wrap -->
    </div>
    <!-- /profile-container-inner -->


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
