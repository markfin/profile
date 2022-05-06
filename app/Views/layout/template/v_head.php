<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setup/css/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="template/setup/font-awesome/css/all.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

    :root {
        /* main theme color */
        --first-color: #8e2431;
        --second-color: #6a59d1;
        --third-color: #777;
        /* hover color */
        --hover-color: #614fd0;
        /* background colors */
        --body-bg-color: #fefefe;
        --card-bg-color: #fff;
        --modal-bg-color: #fff;
        --bg-transparent-color: rgba(0, 0, 0, 0.1);
        --transparent-color-01: rgba(255, 255, 255, 0.1);
        --transparent-color-02: rgba(255, 255, 255, 0.1);
        --line-color: #d7d7d7;
        /* color filter */
        --color-filter: invert(1);
        --box-shadow: 0px 0px 20px rgb(0 0 0 / 10%);
        /* font-size */
        --small-font-size: .9em;
        --normal-font-size: 1em;
        /* /scrool bar  */
        --scroll-bar-color: #c5cadf;
        --scroll-thumb-color: #70768a;
        --scroll-thumb-hover-color: #454f6b;
    }

    .dark-theme {
        /* main theme color */
        --first-color: #fff;
        --second-color: #6a59d1;
        --third-color: #a9afc3;
        /* hover color */
        /* --hover-color: #614fd0; */
        /* background colors */
        --body-bg-color: #0e1b31;
        --card-bg-color: #132347;
        --modal-bg-color: #102048;
        --bg-transparent-color: rgba(255, 255, 255, 0.1);
        /* --transparent-color-01: rgba(255, 255, 255, 0.1); */
        --transparent-color-02: rgba(255, 255, 255, 0.1);
        --line-color: #454f6b;
        /* color filter */
        --color-filter: invert(0);
        /* font-size */
        /* --small-font-size: .9em;
    --normal-font-size: 1em; */
        /* /scrool bar  */
        --scroll-bar-color: #c1ceff;
        --scroll-thumb-color: #282f4e;
        --scroll-thumb-hover-color: #454f6b;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        color: var(--first-color);
        background-color: var(--body-bg-color);
        margin: 2rem 0 0 0;
        transition: .5s ease;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }


    /* scroll To Top  */

    .scrollToTop-btn {
        z-index: 999999;
        position: fixed;
        right: 0;
        bottom: 20px;
        width: 45px;
        height: 45px;
        background: var(--second-color);
        color: #fff;
        font-size: var(--small-font-size);
        border-radius: 3px;
        cursor: pointer;
        opacity: 1;
        transition: .5s ease;
    }

    .scrollToTop-btn.active {
        right: 20px;
        pointer-events: all;
        opacity: 1;
    }


    /* light dark theme button */

    .theme-btn {
        z-index: 999999;
        position: fixed;
        right: 0;
        top: 100px;
        background: var(--transparent-color-01);
        backdrop-filter: blur(20px);
        width: 50px;
        height: 50px;
        font-size: 1.2em;
        border-radius: 5px 0 0 5px;
        box-shadow: var(--box-shadow);
        cursor: pointer;
    }

    .theme-btn .fa-sun,
    .theme-bn-sun .fa-moon {
        display: none;
        /* background: #fff; */
    }

    .theme-btn.sun .fa-sun {
        display: block;
        /* background: #000; */
    }


    /* scroll bar */

    ::-webkit-scrollbar {
        width: 10px;
        background-color: var(--scroll-bar-color)
            /* ada yang belum dipahami */
    }

    ::-webkit-scrollbar-thumb {
        background: var(--scroll-thumb-color);
        /* ada yang belum dipahami  */
        border-radius: 2em;
    }

    ::webkit-scrollbar-thumb:hover {
        background: var(--scroll-thumb-hover-color);
        /* ada yang belum dipahami */
    }


    /* header */

    header {
        z-index: 99999;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        backdrop-filter: blur(20px);
        transition: .6s ease;
    }

    header.sticky {
        background: rgba(255, 255, 255, 0.1);
        box-shadow: var(--box-shadow);
    }

    .nav-bar {
        position: relative;
        height: calc(4rem + 1rem);
        max-width: 1250px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        padding: 0 20px;
        transition: .6s ease
    }

    header.sticky .nav-bar {
        height: calc(2.5rem + 1rem);
    }


    /* end header */

    .nav-bar .logo {
        color: var(--first-color);
        font-size: 1.3em;
        font-weight: 600px;
    }

    .nav-items a.active {
        color: var(--second-color);
    }

    .nav-items a {
        color: var(--first-color);
        font-size: var(--normal-font-size);
        font-weight: 500px;
    }

    .nav-items a:not(:last-child) {
        margin-right: 50px;
    }

    .nav-items a:hover {
        color: var(--second-color);
        font-size: 1.5em;
        margin: 10px 0;
    }

    .nav-menu-btn {
        display: none;
    }


    /* home section */

    .home {
        position: relative;
        max-width: 1250px;
        min-height: 100vh;
        margin-left: auto;
        margin-right: auto;
        padding: 4rem 2rem;
        flex-direction: column;
    }

    .home .home-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .home-container .media-icons {
        display: flex;
        flex-direction: column;
        margin-right: 40px;
    }

    .home-container .media-icons a {
        color: var(--second-color);
    }

    .home-container .media-icons a:hover {
        color: var(--hover-color);
    }

    .home-container .info h2 {
        font-size: 4em;
        font-weight: 600;
        line-height: 70px;
    }

    .home-container .info h3 {
        color: var(--third-color);
        font-feature-settings: 1.3em;
        font-weight: 600;
        line-height: 50px;
    }

    .home-container .info p {
        color: var(--third-color);
        font-size: var(--normal-font-size);
        max-width: 350px;
    }

    .btn {
        background: var(--second-color);
        color: #fff;
        font-size: var(--normal-font-size);
        font-weight: 500;
        display: inline-block;
        margin-top: 25px;
        padding: 20px 30px;
        letter-spacing: 1px;
        border-radius: 10px;
    }

    .btn:hover {
        background-color: var(--hover-color);
    }

    .home-container .home-img {
        position: relative;
    }

    .home-container .home-img img {
        width: 90%;
        transform: translate(0, 0);
    }

    .home .scroll-down {
        color: var(--first-color);
        font-size: var(--normal-font-size);
        font-weight: 500;
        margin-top: 20px;
    }

    .home .scroll-down i {
        color: var(--second-color);
        font-size: 1.2em;
        animation: arrow-down ease 2s infinite;
    }

    @keyframes arrow-down {
        0% {
            transform: translateY(0);
        }

        30% {
            transform: translateY(10px);
        }
    }


    /* common styles for all sections  */

    .flex-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .section {
        position: relative;
        /* width: 1150px; */
        max-width: 1150px;
        margin-left: auto;
        margin-right: auto;
        padding: 6rem 2rem 2rem;
    }

    .sub-section {
        position: relative;
        /* width: 1150px; */
        max-width: 1150px;
        margin-left: auto;
        margin-right: auto;
        padding: 6rem 0;
    }

    .section-title-01 {
        font-size: 4.5em;
        font-weight: 800;
        margin-bottom: 2em;
        background: linear-gradient(to top, transparent 0%, var(--first-color) 70%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        opacity: 1;
    }

    .section-title-02 {
        font-size: 2.5em;
        font-weight: 700;
        transform: translateY(-80px);
    }

    .section-title-02::before {
        content: '';
        position: absolute;
        width: 70px;
        height: 5px;
        right: 0;
        bottom: 0;
        background: var(--second-color);
    }

    .container {
        position: relative;
        flex-direction: column;
    }


    /* about section */

    .about .container .content {
        column-gap: 40px;
        width: 100%;
    }

    .about-img {
        position: relative;
    }

    .about-img img {
        max-width: 100%;
        min-width: 500px;
        border-radius: 10px;
    }

    .about-info .description h3 {
        font-size: 2em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .about-info .description h4 {
        font-size: 1.3em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .about-info .description h4 span {
        color: var(--second-color);
    }

    .about-info .description p {
        color: var(--third-color);
        font-size: var(--normal-font-size);
        margin-bottom: 15px;
        padding-bottom: 25px;
        border-bottom: 2px solid var(--line-color);
    }

    .about-info .professional-list {
        display: flex;
        column-gap: 30px;
    }

    .about-info .professional-list .list-item {
        display: flex;
        justify-content: center;
        align-items: center;
        column-gap: 15px;
        margin-bottom: 20px;
    }

    .about-info .professional-list .list-item h3 {
        font-size: 2.5em;
        font-weight: 700;
    }

    .about-info .professional-list .list-item span {
        color: var(--third-color);
        font-size: var(--small-font-size);
    }

    .skills .container .section {
        width: 100%;
    }

    .skills-description {
        max-width: 700px;
        margin-bottom: 50px;
    }

    .skills-description h3 {
        font-size: 2em;
        margin-bottom: 5px;
    }

    .skills-info {
        max-width: 100%;
        display: grid;
        /* display: flex; */
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin: 0 auto;
    }

    .skills-info h4 {
        margin-bottom: 20px;
    }

    .skills-info h4 label {
        background: var(--second-color);
        color: #fff;
        font-size: var(--normal-font-size);
        font-weight: 400;
        padding: 5px 15px;
        border-radius: 5px;
    }

    .education-all {
        margin-bottom: 80px;
    }



    .edu-list .item {
        background: var(--card-bg-color);
        box-shadow: var(--box-shadow);
        border-bottom: 3px solid var(--second-color);
        padding: 20px;
        margin-top: 15px;
        border-radius: 6px;
        transition: .3s ease;
    }

    .edu-list .item .year {
        font-size: var(--small-font-size);
        margin-bottom: 5px;
    }

    .edu-list .item p {
        color: var(--third-color);
        font-size: var(--small-font-size);
    }

    .edu-list .item p span {
        color: var(--first-color);
        font-size: var(--normal-font-size);
        font-weight: 500;
    }

    .bar {
        background: var(--card-bg-color);
        box-shadow: var(--box-shadow);
        margin-bottom: 10px;
        padding: 20px;
        border-radius: 6px;
        transition: .3 ease;
    }

    .bar .info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px;
        font-size: var(--small-font-size);
    }

    .bar .info span {
        font-weight: 500;
    }

    .bar .line {
        position: relative;
        width: 100%;
        height: 7px;
        background: #c5cadf;
        border-radius: 2px;
    }

    .bar .line::before {
        content: '';
        position: absolute;
        height: 100%;
        top: 0;
        left: 0;
        background: var(--second-color);
        border-radius: 2px;
        width: 95%;
    }

    /* .bar .html:before {
        width: 95%;
    }

    .bar .css:before {
        width: 85%;
    }

    .bar .javascript:before {
        width: 75%;
    }

    .bar .jquery:before {
        width: 70%;
    }

    .bar .php:before {
        width: 65%;
    } */

    .experrince-card {
        background-color: var(--card-bg-color);
        border-bottom: 3px solid var(--second-color);
        padding: 35px;
        border-radius: 6px;
        box-shadow: var(--box-shadow);
        transition: .3s ease;
    }

    .experience-card .upper {
        line-height: 30px;
    }

    .experience-card h3 {
        font-size: 1.3em;
        font-weight: 700;
    }

    .experience-card h5 {
        font-size: var(--small-font-size);
        font-weight: 500;
        font-style: italic;
    }

    .experience-card span {
        color: var(--third-color);
    }

    .experience-card hr {
        width: 100%;
        height: 2px;
        background: var(--line-color);
        margin: 10px 0 22px;
    }

    .edu-list .item:hover,
    .bar:hover,
    .experience-card:hover {
        transform: scale(1.035);
    }


    /* services section */

    .services .container .content {
        width: 100%;
    }

    .services-description h3 {
        font-size: 2em;
        margin-bottom: 50px;
    }

    .service-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(225px, 1fr));
        max-width: 100%;
        margin: 0 auto;
        gap: 20px;
    }

    .service-card {
        background: var(--card-bg-color);
        border-bottom: 3px solid var(--second-color);
        padding: 50px;
        border-radius: 6px;
        box-shadow: var(--box-shadow);
    }

    .service-card>i {
        color: var(--second-color);
        font-size: 3em;
        margin-bottom: 30px;
    }

    .service-card h3 {
        font-size: 1.5em;
        font-weight: 700;
        line-height: 30px;
        margin-bottom: 20px;
    }

    .service-card .learn-more-btn {
        color: var(--third-color);
        cursor: pointer;
        transition: .3s ease;
    }

    .service-card .learn-more-btn i {
        transition: .3s ease;
    }

    .service-card:hover .learn-more-btn i {
        transform: translateX(10px);
    }

    .service-modal {
        z-index: 99999;
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        background: var(--bg-transparent-color);
        backdrop-filter: blur(10px);
        visibility: hidden;
        opacity: 0;
        transition: .3s ease;
    }

    .service-modal.active {
        visibility: visible;
        opacity: 1;
    }

    .service-modal-body {
        position: relative;
        background: var(--modal-bg-color);
        max-width: 600px;
        margin: 20px;
        padding: 40px;
        border-radius: 10px;
        box-shadow: var(--box-shadow);
        transform: translateY(-50px);
        transition: .5s ease;
    }

    .service-modal.active .service-modal-body {
        transform: translateY(0)
    }

    .service-modal-body .modal-close-btn {
        position: absolute;
        top: 0;
        right: 0;
        margin: 20px;
        cursor: pointer;
    }

    .service-modal-body h3 {
        font-size: 2em;
    }

    .service-modal-body h4 {
        font-size: 1.3em;
        font-weight: 600;
        margin: 15px 0 10px;
    }

    .service-modal-body ul li {
        margin-top: 15px;
    }

    .service-modal-body ul li i {
        color: var(--second-color);
        /* color: var(--hover-color); */
    }


    /* portofolio list */

    .portofolio .container .content {
        width: 100%;
    }

    .portofolio-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        max-width: 100%;
        gap: 35px;
        margin: 0 auto;
    }

    .portofolio-list .img-card {
        position: relative;
        max-width: 100%;
        height: 360px;
        border-radius: 1px;
        box-shadow: var(--box-shadow);
        overflow: hidden;
        cursor: pointer;
    }

    .portofolio-list .img-card:hover .overlay {
        z-index: 777;
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
    }

    .portofolio-list .img-card .info {
        z-index: 777;
        position: absolute;
        bottom: 0;
        left: 0;
        margin: 20px;
        color: #fff;
        transform: translateY(20px);
        opacity: 0;
        transition: .5s ease;
    }

    .portofolio-list .img-card:hover .info {
        transform: translateY(0);
        opacity: 1;
    }

    .portofolio-list .img-card .info h3 {
        font-size: 1.5em;
    }

    .portofolio-list .img-card .info span {
        font-size: 1.2em;
    }

    .portofolio-list .img-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .portofolio-model {
        z-index: 9999999;
        position: fixed;
        width: 100%;
        height: 100vh;
        /* top: 0; */
        top: 50px;
        left: 0;
        background: var(--transparent-color-01);
        backdrop-filter: blur(20px);
        visibility: hidden;
        opacity: 1;
        transition: .3s ease;
    }

    .portofolio-model.active {
        visibility: visible;
        opacity: 1;
    }

    .portofolio-model-body {
        position: relative;
        background: var(--modal-bg-color);
        max-width: 600px;
        margin: 20px;
        padding: 40px;
        border-radius: 10px;
        box-shadow: var(--box-shadow);
        transform: translateY(-50px);
        transition: .5s ease;
    }

    .portotfolio-model.active .portofolio-model-body {
        transform: translateY(0);
    }

    .portofolio-close-btn {
        position: absolute;
        top: 0;
        right: 0;
        margin: 20px;
        cursor: pointer;
    }

    .portofolio-model-body h3 {
        font-size: 1.3em;
    }

    .portofolio-model-body img {
        width: 100%;
        margin: 20px 0;
        border-radius: 10px;
    }

    .get-in-touch {
        margin-top: 70px;
    }

    .get-in-touch .container .content {
        width: 100%;
    }

    .get-in-touch .contact-card {
        position: relative;
        width: 90%;
        background: var(--card-bg-color);
        box-shadow: var(--box-shadow);
        padding: 50px;
        border-radius: 10px;
        column-gap: 50px;
    }

    .contact-card .title {
        text-transform: uppercase;
        line-height: 60px;
    }

    .contact-card .title h4 {
        font-size: 1.2em;
        font-weight: 300;
        line-height: 20px;
    }

    .contact-card .title h3 {
        font-size: 2.3em;
        font-weight: 400;
    }

    .contact-card .title h2 {
        font-size: 4.2em;
        font-weight: 700;
        background: linear-gradient(to top, transparent 0%, var(--first-color) 30%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        opacity: .9;
    }

    .our-client .container {
        flex-direction: column;
    }

    .our-client .container .content {
        width: 100%;
    }

    .client-swiper .swiper-wrapper {
        margin-bottom: 30px;
    }

    .client-swiper .swiper-slide {
        gap: 50px;
        margin: 20px 0;
    }

    .client-img {
        width: 250px;
        height: 250px;
        overflow: hidden;
        border-radius: 10px;
    }

    .client-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .client-details {
        max-width: 500px;
    }

    .client-details p {
        font-size: 1.2em;
        color: var(--third-color);
        padding-bottom: 15px;
        margin-bottom: 10px;
        border-bottom: 2px solid var(--line-color);
    }

    .client-details h3 {
        color: var(--first-color);
        font-size: 1.5em;
    }

    .client-details span {
        color: var(--third-color);
        font-size: 1.1em;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        content: '';
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: var(--second-color);
        font-size: 3em;
    }

    .swiper-pagination-bullet,
    .swiper-pagination-bullet-active {
        background: var(--second-color);
    }


    /* contact section */

    .contact .container .content {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .contact-left h2 {
        font-size: 2.1em;
        font-weight: 800;
        margin-bottom: 40px;
    }

    .contact-list li h3 {
        font-size: 1.3em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .contact-list li h3 i {
        color: var(--third-color);
        font-size: 1.3em;
        margin-right: 10px;
    }

    .contact-list li span {
        color: var(--third-color);
        margin-left: 40px;
    }

    .contact-list li span a {
        color: var(--third-color);
    }

    .contact-right p {
        color: var(--third-color);
        font-size: 1.6em;
        margin-bottom: 30px;
    }

    .contact-right p span {
        color: var(--first-color);
        font-weight: 700;
    }

    .contact-form input,
    .contact-form textarea {
        border: none;
        color: var(--first-color);
        background: var(--transparent-color-01);
        font-size: var(--normal-font-size);
        margin-bottom: 20px;
        padding: 15px 40px 40px 20px;
        border-radius: 5px;
    }

    .contact-form textarea {
        width: 100%;
        resize: none;
    }

    ::placeholder {
        color: var(--first-color);
    }

    .contact-form .first-row input {
        width: 100%;
    }

    .contact-form .second-row {
        display: flex;
        justify-content: space-between;
    }

    .contact-form .second-row input {
        width: 48%;
    }

    .contact-form .btn {
        border: none;
        margin-top: 0;
        border-radius: 5px;
        cursor: pointer;
    }

    footer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: var(--second-color);
        width: 100%;
        margin-top: 50px;
        padding: 3rem 2rem;
        color: #fff;
    }

    footer a {
        color: #fff;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        max-width: 1150px;
    }

    .footer-container .about h2 {
        font-size: 3em;
        font-weight: 600;
        background: linear-gradient(to top, transparent 0%, #fff 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        opacity: .8;
    }

    .footer-container .about p {
        font-size: var(--small-font-size);
        font-weight: 300;
        margin-bottom: 30px;
    }

    .footer-container .info,
    .footer-container .follow {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .footer-container .info h3,
    .footer-container .follow h3 {
        font-size: 1.1em;
        font-weight: 500;
        margin-bottom: 30px;
    }

    .footer-container .info ul,
    .footer-container .follow ul {
        display: flex;
    }

    .footer-container .info a {
        margin: 20px;
    }

    .footer-container .follow a {
        font-size: 1.5em;
        margin: 20px;
    }

    .footer-copyright p {
        font-size: var(--normal-font-size);
        font-weight: 300;
        margin-top: 50px;
    }

    @media screen and (max-width:1070px) {

        /*header navigation menu  */
        .navigation {
            position: fixed;
            width: 100%;
            height: 100vh;
            /* backdrop-filter: blur(20px); */
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--transparent-color-01);
            visibility: hidden;
            opacity: 0;
            transition: .3 ease;
        }

        .navigation.active {
            visibility: visible;
            opacity: 1;
        }

        .nav-items {
            position: relative;
            background: var(--modal-bg-color);
            width: 600px;
            max-width: 600px;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 20px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--box-shadow);
            transform: translateY(-50px);
            transition: .3 ease;
        }

        .navigation.active .nav-items {
            transform: translateY(0);
        }

        .nav-items a {
            margin: 15px 50px;
        }

        .nav-close-btn {
            position: absolute;
            background: url(template/setup/images/close-btn.png) no-repeat;
            filter: var(--color-filter);
            background-size: 12px;
            background-position: center;
            width: 40px;
            height: 40px;
            top: 0;
            right: 0;
            margin: 10px;
            cursor: pointer;
        }

        .nav-menu-btn {
            background: url(setup/images/menu-btn.png) no-repeat;
            filter: var(--color-filter);
            background-size: 30px;
            background-position: center;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: block;
        }

        /* home container */
        .home .home-container .info {
            font-size: 0.85rem;
        }

        /* about section  */
        .about .container .content {
            display: grid;
            width: 100%;
            row-gap: 20px;
        }

        .about-img img {
            min-width: 0;
            width: 100%;
        }

        .about-info {
            min-width: 0;
            width: 100%;
        }

        .about-info .professional-list {
            flex-direction: column;
        }

        .about-info .professional-list .list-item {
            justify-content: start;
        }

        /* get in touch  */
        .get-in-touch .contact-card {
            display: grid;
            width: 100%;
        }

        .contact-card .title {
            font-size: .8rem;
            line-height: 50px;
        }

        /* our clients */
        .client-swiper .swiper-slide {
            flex-direction: column;
        }

        .client-details {
            text-align: center;
        }

        /* contact section */
        .contact .content {
            flex-direction: column;
            font-size: .9rem;
        }

        .contact .contact-left {
            margin-bottom: 40px;
        }

        .contact-form .second-row {
            flex-direction: column;
        }

        .contact-form .second-row input {
            width: 100%;
        }

        footer .footer-container {
            flex-direction: column;
        }

        .footer-container .about,
        .footer-container .info {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 50px;
        }

        .footer-container .info ul {
            align-items: center;
            flex-direction: column;
        }

        .footer-container .info ul li {
            margin: 5px 0;
        }

        .footer-container .hr {
            width: 100%;
            height: 2px;
            background: rgba(255, 255, 255, .1);
            margin: 10px 0 22px;
        }

        @media screen and (max-width: 730px) {
            body {
                margin: 5rem 0 0;
            }

            .section-title-01 {
                font-size: 3em;
            }

            .section-title-02 {
                font: size 2em;
                transform: translateY(-65px);
            }

            /* home section */
            .home .home-container {
                display: grid;
            }

            .home-container .home-img {
                position: absolute;
            }

            .home-container .home-img img {
                width: 65%;
                transform: translate(80px, -180px)
            }

            .home .home-container .info {
                font-size: .8rem;
            }

            .media-icons {
                margin-bottom: 80px;
            }

            .get-in-touch .contact-card {
                display: grid;
            }

            .contact-card .title {
                font-size: .6rem;
                line-height: 40px;
            }

            .contact-card .contact-btn .btn {
                font-size: .8rem;
            }
        }
    }
    </style>

    <!-- end javas -->
    <link rel="stylesheet" href="template/setup/font-awesome/css/all.css"> -->
    <title>Document</title>
</head>

<body>
    <!-- scroll-to top button -->
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- light dark theme button -->
    <div class="theme-btn flex-center">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun "></i>
    </div>