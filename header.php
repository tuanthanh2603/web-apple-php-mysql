<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
    
    <style id='page-skin-1' type='text/css'>
        

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block
        }

        a,
        abbr,
        acronym,
        address,
        applet,
        big,
        blockquote,
        body,
        caption,
        cite,
        code,
        dd,
        del,
        dfn,
        div,
        dl,
        dt,
        em,
        fieldset,
        figure,
        font,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        html,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        object,
        ol,
        p,
        pre,
        q,
        s,
        samp,
        small,
        span,
        strike,
        strong,
        sub,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr,
        tt,
        ul,
        var {
            margin: 0;
            padding: 0
        }

        ol,
        ol ol,
        ul,
        ul ul {
            padding: 0
        }

        a img {
            border: none
        }

        a {
            outline: 0;
            text-decoration: none;
            color: #3c4043
        }

        a:hover {
            text-decoration: none;
            color: #0070c9
        }

        button,
        input,
        textarea,
        pre {
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            outline: none;
            color: #3c4043
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            text-rendering: geometricPrecision
        }

        body {
            background-color: #e6ecf0;
            color: #3c4043;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            min-height: 100vh;
            padding: 59px 0 0 0;
            word-wrap: break-word;
            word-break: break-word;
            overflow: hidden;
            overflow-y: auto
        }

        body.overflow {
            overflow-y: hidden
        }

        .clearfix:before,
        .clearfix:after {
            content: '';
            display: block;
            height: 0;
            overflow: hidden
        }

        .error_page {
            text-align: center
        }

        .error_page .message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            line-height: 40px;
            display: block;
            float: left;
            width: 100%;
            padding: 0 15px
        }

        .error_page .message h1 {
            font-size: 32px;
            line-height: 40px;
            margin: 0 0 8px
        }

        .error_page .message span a {
            margin-top: 15px;
            background-color: #448aff;
            border-radius: 3px;
            color: #fafafa;
            display: inline-block;
            font-size: 14px;
            letter-spacing: 0.5px;
            line-height: 36px;
            min-width: 54px;
            padding: 0 15px;
            text-align: center;
            white-space: nowrap;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26)
        }

        svg {
            height: 24px;
            width: 24px;
            min-width: 24px;
            vertical-align: text-bottom
        }

        svg {
            fill: hsl(0, 0%, 53.3%)
        }

        .overlay-dialog,
        .overlay,
        .dialog {
            background-color: rgba(0, 0, 0, .85);
            height: 100vh;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 8
        }

        .overlay {
            z-index: 8
        }

        .overlay-dialog,
        .dialog {
            z-index: 10
        }

        .hidden {
            display: none
        }

        .modal-dialog {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, 0.302), 0 4px 8px 3px rgba(60, 64, 67, 0.149);
            -webkit-font-smoothing: antialiased;
            letter-spacing: .2px;
            -webkit-align-items: center;
            align-items: center;
            background-color: #202124;
            border: none;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            bottom: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            left: 0;
            margin: 20px;
            max-width: 640px;
            min-height: 50px;
            padding: 8px 15px;
            position: fixed;
            right: auto;
            text-align: left;
            top: auto;
            white-space: normal;
            z-index: 10
        }

        .modal-dialog-content {
            font-size: 15px;
            font-weight: 400;
            color: #ffffff
        }

        .modal-dialog-buttons {
            height: 20px;
            width: 20px;
            min-height: 20px;
            min-width: 20px;
            fill: #ffffff;
            vertical-align: middle;
            margin-left: 15px;
            cursor: pointer
        }

        .MD-StoTop {
            background: hsla(0, 0%, 6.7%, .4);
            bottom: 20px;
            right: 15px;
            cursor: pointer;
            position: fixed;
            z-index: 7;
            opacity: .7;
            border: 0;
            outline: none;
            padding: 5px;
            cursor: pointer;
            box-sizing: content-box;
            display: inline-block;
            border-radius: 50%
        }

        .MD-StoTop:before {
            font-family: Material Icons;
            content: '\e5d8';
            font-size: 24px;
            font-weight: normal;
            font-style: normal;
            color: #ffffff;
            vertical-align: bottom
        }

        .visuallyhidden {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(0px 0 99.9% 99.9%);
            clip-path: inset(0px 0 99.9% 99.9%);
            overflow: hidden;
            height: 1px;
            width: 1px;
            padding: 0;
            border: 0
        }

        @-webkit-keyframes ac-gn-header-slideup-searchshow {
            0% {
                -webkit-transform: none;
                transform: none
            }
            100% {
                -webkit-transform: translateY(-32px);
                transform: translateY(-32px)
            }
        }

        @keyframes ac-gn-header-slideup-searchshow {
            0% {
                -webkit-transform: none;
                transform: none
            }
            100% {
                -webkit-transform: translateY(-32px);
                transform: translateY(-32px)
            }
        }

        #ac-globalnav {
            font-weight: normal;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%
        }

        #ac-globalnav,
        #ac-globalnav:before,
        #ac-globalnav:after,
        #ac-globalnav *,
        #ac-globalnav *:before,
        #ac-globalnav *:after {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            margin: 0;
            padding: 0;
            pointer-events: auto;
            letter-spacing: normal
        }

        #ac-globalnav *,
        #ac-globalnav *:before,
        #ac-globalnav *:after {
            font-size: 1em;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
            text-align: inherit
        }

        #ac-globalnav article,
        #ac-globalnav aside,
        #ac-globalnav details,
        #ac-globalnav figcaption,
        #ac-globalnav figure,
        #ac-globalnav footer,
        #ac-globalnav header,
        #ac-globalnav nav,
        #ac-globalnav section {
            display: block
        }

        #ac-globalnav img {
            border: 0;
            vertical-align: middle
        }

        #ac-globalnav ul {
            list-style: none
        }

        #ac-globalnav,
        #ac-globalnav input,
        #ac-globalnav textarea,
        #ac-globalnav select,
        #ac-globalnav button {
            font-synthesis: none;
            -moz-font-feature-settings: 'kern';
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            direction: ltr;
            text-align: left
        }

        #ac-globalnav,
        #ac-globalnav select,
        #ac-globalnav button {
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }

        #ac-globalnav input,
        #ac-globalnav textarea {
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }

        #ac-globalnav:focus[data-focus-method="mouse"]:not(input):not(textarea):not(select),
        #ac-globalnav:focus[data-focus-method="touch"]:not(input):not(textarea):not(select),
        #ac-globalnav *:focus[data-focus-method="mouse"]:not(input):not(textarea):not(select),
        #ac-globalnav *:focus[data-focus-method="touch"]:not(input):not(textarea):not(select) {
            outline: none
        }

        #ac-globalnav {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 9;
            display: block;
            margin: 0;
            width: 100%;
            min-width: 1024px;
            height: 48px;
            max-height: 44px;
            background: rgba(45, 45, 45, 0.98);
            font-size: 17px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        @supports ((-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px))) {
            #ac-globalnav {
                background: rgba(0, 0, 0, 0.8);
                -webkit-backdrop-filter: saturate(180%) blur(20px);
                backdrop-filter: saturate(180%) blur(20px)
            }
        }

        .ac-theme-dark #ac-globalnav,
        #ac-globalnav.ac-globalnav-dark {
            background: rgba(40, 40, 40, 0.8)
        }

        #ac-globalnav.blocktransitions,
        #ac-globalnav.blocktransitions:before,
        #ac-globalnav.blocktransitions:after,
        #ac-globalnav.blocktransitions *,
        #ac-globalnav.blocktransitions *:before,
        #ac-globalnav.blocktransitions *:after {
            -webkit-animation: none !important;
            animation: none !important;
            -webkit-transition: none !important;
            transition: none !important
        }

        @media only screen and (max-width:1044px) {
            #ac-globalnav {
                min-width: 320px
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav {
                overflow-y: hidden;
                max-height: none;
                -webkit-backdrop-filter: none;
                backdrop-filter: none;
                -webkit-transition: background .44s .2s cubic-bezier(0.52, 0.16, 0.24, 1), height .56s cubic-bezier(0.52, 0.16, 0.24, 1);
                transition: background .44s .2s cubic-bezier(0.52, 0.16, 0.24, 1), height .56s cubic-bezier(0.52, 0.16, 0.24, 1)
            }
            #ac-globalnav.with-bagview {
                overflow-y: visible
            }
            #ac-gn-menustate:checked~#ac-globalnav,
            #ac-gn-menustate:target~#ac-globalnav {
                height: 100%;
                background: #000;
                -webkit-transition: background .36s cubic-bezier(0.32, 0.08, 0.24, 1), height .56s cubic-bezier(0.52, 0.16, 0.24, 1);
                transition: background .36s cubic-bezier(0.32, 0.08, 0.24, 1), height .56s cubic-bezier(0.52, 0.16, 0.24, 1)
            }
            #ac-globalnav.searchshow,
            #ac-globalnav.searchopen,
            #ac-globalnav.searchhide {
                position: fixed
            }
        }

        html #ac-globalnav,
        html #ac-globalnav~.ac-gn-blur {
            position: fixed;
        }

        .ac-gn-blur {
            display: none
        }

        @media only screen and (max-width:767px) {
            .ac-gn-blur {
                display: block;
                position: absolute;
                top: 0;
                right: 0;
                left: 0;
                z-index: 8;
                margin: 0;
                width: 100%;
                height: 48px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none
            }
            @supports ((-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px))) {
                .ac-gn-blur {
                    -webkit-backdrop-filter: saturate(180%) blur(20px);
                    backdrop-filter: saturate(180%) blur(20px)
                }
            }
        }

        #ac-gn-menustate {
            display: none
        }

        #ac-gn-placeholder {
            height: 44px
        }

        @media only screen and (max-width:767px) {
            #ac-gn-placeholder {
                height: 48px
            }
        }

        .ac-nav-overlap #ac-gn-placeholder {
            display: none
        }

        @-webkit-keyframes ac-gn-curtain-show {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1
            }
        }

        @keyframes ac-gn-curtain-show {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1
            }
        }

        #ac-gn-curtain {
            background: rgba(0, 0, 0, 0.4);
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9998
        }

        @media only screen and (max-width:419px) {
            #ac-globalnav.with-bagview~#ac-gn-curtain {
                display: block;
                -webkit-animation: ac-gn-curtain-show .2s both;
                animation: ac-gn-curtain-show .2s both
            }
        }

        #ac-globalnav.searchshow~#ac-gn-curtain,
        #ac-globalnav.searchopen~#ac-gn-curtain,
        #ac-globalnav.searchhide~#ac-gn-curtain {
            display: block
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav.searchshow~#ac-gn-curtain,
            #ac-globalnav.searchopen~#ac-gn-curtain,
            #ac-globalnav.searchhide~#ac-gn-curtain {
                display: none
            }
        }

        #ac-globalnav.searchshow~#ac-gn-curtain {
            -webkit-animation: ac-gn-curtain-show .2s both;
            animation: ac-gn-curtain-show .2s both
        }

        #ac-globalnav.searchhide~#ac-gn-curtain {
            animation: ac-gn-curtain-show .2s reverse both
        }

        #ac-globalnav .ac-gn-content {
            margin: 0 auto;
            max-width: 980px;
            padding: 0 22px;
            position: relative;
            z-index: 2;
            padding-left: calc(22px + constant(safe-area-inset-left));
            padding-right: calc(22px + constant(safe-area-inset-right))
        }

        @supports (padding:calc(max(0px))) {
            #ac-globalnav .ac-gn-content {
                padding-left: calc(max(22px, env(safe-area-inset-left)));
                padding-right: calc(max(22px, env(safe-area-inset-right)))
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-content {
                padding: 0;
                position: absolute;
                top: 0;
                width: 100%;
                height: 100%
            }
        }

        #ac-globalnav .ac-gn-header {
            display: none;
            position: absolute;
            z-index: 5;
            top: 0;
            left: 0;
            width: 100%;
            height: 48px;
            overflow: hidden
        }

        #ac-globalnav .ac-gn-header .ac-gn-item,
        #ac-globalnav .ac-gn-header .ac-gn-link {
            height: 48px
        }

        #ac-globalnav .ac-gn-header .ac-gn-link {
            line-height: 2.82353em
        }

        #ac-globalnav .ac-gn-header .ac-gn-apple {
            position: absolute;
            width: 48px;
            top: 0;
            left: 50%;
            margin-left: -24px;
            text-align: center;
            z-index: 1
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-header {
                display: block
            }
            #ac-globalnav.searchshow .ac-gn-header {
                -webkit-animation: ac-gn-header-slideup-searchshow .36s cubic-bezier(0.32, 0.08, 0.24, 1) both;
                animation: ac-gn-header-slideup-searchshow .36s cubic-bezier(0.32, 0.08, 0.24, 1) both
            }
            #ac-globalnav.searchopen .ac-gn-header {
                display: none
            }
            #ac-globalnav.searchhide .ac-gn-header {
                animation: ac-gn-header-slideup-searchshow .36s cubic-bezier(0.8, 0, 0.68, 0.92) reverse both
            }
            #ac-globalnav .ac-gn-header .ac-gn-apple {
                display: block
            }
            #ac-globalnav .ac-gn-header .ac-gn-bag-small {
                display: block;
                visibility: visible;
                -webkit-transition: opacity 0.28s 0.36s cubic-bezier(0.52, 0.16, 0.24, 1), -webkit-transform 0.44s 0.2s cubic-bezier(0.04, 0.04, 0.12, 0.96);
                transition: opacity 0.28s 0.36s cubic-bezier(0.52, 0.16, 0.24, 1), -webkit-transform 0.44s 0.2s cubic-bezier(0.04, 0.04, 0.12, 0.96);
                transition: transform 0.44s 0.2s cubic-bezier(0.04, 0.04, 0.12, 0.96), opacity 0.28s 0.36s cubic-bezier(0.52, 0.16, 0.24, 1);
                transition: transform 0.44s 0.2s cubic-bezier(0.04, 0.04, 0.12, 0.96), opacity 0.28s 0.36s cubic-bezier(0.52, 0.16, 0.24, 1), -webkit-transform 0.44s 0.2s cubic-bezier(0.04, 0.04, 0.12, 0.96)
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-header .ac-gn-bag-small,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-header .ac-gn-bag-small {
                -webkit-transform: translateY(8px);
                transform: translateY(8px);
                opacity: 0;
                visibility: hidden;
                -webkit-transition: opacity 0.3s cubic-bezier(0.32, 0.08, 0.24, 1), visibility 0s linear .64s, -webkit-transform 0.36s cubic-bezier(0.54, 0.12, 0.88, 0.64);
                transition: opacity 0.3s cubic-bezier(0.32, 0.08, 0.24, 1), visibility 0s linear .64s, -webkit-transform 0.36s cubic-bezier(0.54, 0.12, 0.88, 0.64);
                transition: transform 0.36s cubic-bezier(0.54, 0.12, 0.88, 0.64), opacity 0.3s cubic-bezier(0.32, 0.08, 0.24, 1), visibility 0s linear .64s;
                transition: transform 0.36s cubic-bezier(0.54, 0.12, 0.88, 0.64), opacity 0.3s cubic-bezier(0.32, 0.08, 0.24, 1), visibility 0s linear .64s, -webkit-transform 0.36s cubic-bezier(0.54, 0.12, 0.88, 0.64)
            }
        }

        @-webkit-keyframes ac-gn-list-searchshow {
            0% {
                -webkit-transform: none;
                transform: none;
                opacity: 1
            }
            100% {
                -webkit-transform: translateY(44px);
                transform: translateY(44px);
                opacity: 0
            }
        }

        @keyframes ac-gn-list-searchshow {
            0% {
                -webkit-transform: none;
                transform: none;
                opacity: 1
            }
            100% {
                -webkit-transform: translateY(44px);
                transform: translateY(44px);
                opacity: 0
            }
        }

        #ac-globalnav .ac-gn-header+.ac-gn-list {
            top: 48px
        }

        #ac-globalnav .ac-gn-list {
            cursor: default;
            margin: 0 -10px;
            width: auto;
            height: 44px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-list {
                display: block;
                position: absolute;
                z-index: 1;
                top: 3.52941em;
                right: 0;
                bottom: 0;
                left: 0;
                max-width: 664px;
                margin: 0 auto;
                padding: 45px 40px 8px;
                height: auto;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                visibility: hidden;
                -webkit-transition: visibility 0s linear 1s;
                transition: visibility 0s linear 1s
            }
            #ac-globalnav.menu-opening .ac-gn-list,
            #ac-globalnav.menu-closing .ac-gn-list {
                overflow: hidden
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-list,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-list {
                visibility: visible;
                -webkit-transition-delay: 0s;
                transition-delay: 0s
            }
            #ac-gn-menustate:checked~#ac-globalnav.searchshow .ac-gn-list,
            #ac-gn-menustate:target~#ac-globalnav.searchshow .ac-gn-list {
                -webkit-animation: ac-gn-list-searchshow .36s cubic-bezier(0.32, 0.08, 0.24, 1) both;
                animation: ac-gn-list-searchshow .36s cubic-bezier(0.32, 0.08, 0.24, 1) both
            }
            #ac-gn-menustate:checked~#ac-globalnav.searchopen .ac-gn-list,
            #ac-gn-menustate:target~#ac-globalnav.searchopen .ac-gn-list {
                visibility: hidden;
                -webkit-transform: translateY(44px);
                transform: translateY(44px);
                opacity: 0
            }
            #ac-gn-menustate:checked~#ac-globalnav.searchhide .ac-gn-list,
            #ac-gn-menustate:target~#ac-globalnav.searchhide .ac-gn-list {
                animation: ac-gn-list-searchshow .36s cubic-bezier(0.8, 0, 0.68, 0.92) reverse both
            }
        }

        @-webkit-keyframes ac-gn-item-searchshow {
            0% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1);
                animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1)
            }
            40% {
                opacity: 1
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.7);
                transform: scale(0.7)
            }
        }

        @keyframes ac-gn-item-searchshow {
            0% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1);
                animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1)
            }
            40% {
                opacity: 1
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.7);
                transform: scale(0.7)
            }
        }

        @-webkit-keyframes ac-gn-item-searchhide {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.7);
                transform: scale(0.7)
            }
            60% {
                opacity: 1
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1);
                animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1)
            }
        }

        @keyframes ac-gn-item-searchhide {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.7);
                transform: scale(0.7)
            }
            60% {
                opacity: 1
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1);
                animation-timing-function: cubic-bezier(0.2727, 0.0986, 0.8333, 1)
            }
        }

        @-webkit-keyframes ac-gn-search-placeholder-searchshow {
            0% {
                opacity: 1;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0.4
            }
        }

        @keyframes ac-gn-search-placeholder-searchshow {
            0% {
                opacity: 1;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0.4
            }
        }

        @-webkit-keyframes ac-gn-bag-searchshow {
            0% {
                opacity: 1;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0
            }
        }

        @keyframes ac-gn-bag-searchshow {
            0% {
                opacity: 1;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0
            }
        }

        #ac-globalnav .ac-gn-item {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            position: relative;
            height: 44px;
            z-index: 1;
            vertical-align: top
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-item {
                width: 100%;
                height: 44px
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-apple {
                display: none
            }
        }

        #ac-globalnav.searchshow .ac-gn-bag {
            -webkit-animation: ac-gn-bag-searchshow .3s both;
            animation: ac-gn-bag-searchshow .3s both;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        #ac-globalnav.searchopen .ac-gn-bag {
            visibility: hidden
        }

        #ac-globalnav.searchhide .ac-gn-bag {
            animation: ac-gn-bag-searchshow .3s reverse both;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-bag {
                right: 0;
                display: none;
                position: absolute;
                top: 0;
                width: auto;
                z-index: 1
            }
        }

        #ac-globalnav.searchshow .ac-gn-item-menu,
        #ac-globalnav.searchopen .ac-gn-item-menu,
        #ac-globalnav.searchhide .ac-gn-item-menu {
            pointer-events: none
        }

        #ac-globalnav.searchshow .ac-gn-item-menu {
            -webkit-animation: ac-gn-item-searchshow .4s both;
            animation: ac-gn-item-searchshow .4s both
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(2) {
            -webkit-animation-delay: .28s;
            animation-delay: .28s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(3) {
            -webkit-animation-delay: .245s;
            animation-delay: .245s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(4) {
            -webkit-animation-delay: .21s;
            animation-delay: .21s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(5) {
            -webkit-animation-delay: .175s;
            animation-delay: .175s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(6) {
            -webkit-animation-delay: .14s;
            animation-delay: .14s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(7) {
            -webkit-animation-delay: .105s;
            animation-delay: .105s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(8) {
            -webkit-animation-delay: .07s;
            animation-delay: .07s
        }

        #ac-globalnav.searchshow .ac-gn-item-menu:nth-child(9) {
            -webkit-animation-delay: .035s;
            animation-delay: .035s
        }

        #ac-globalnav.searchopen .ac-gn-item-menu {
            visibility: hidden
        }

        #ac-globalnav.searchhide .ac-gn-item-menu {
            -webkit-animation: ac-gn-item-searchhide .4s both;
            animation: ac-gn-item-searchhide .4s both
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(2) {
            -webkit-animation-delay: 0s;
            animation-delay: 0s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(3) {
            -webkit-animation-delay: .035s;
            animation-delay: .035s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(4) {
            -webkit-animation-delay: .07s;
            animation-delay: .07s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(5) {
            -webkit-animation-delay: .105s;
            animation-delay: .105s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(6) {
            -webkit-animation-delay: .14s;
            animation-delay: .14s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(7) {
            -webkit-animation-delay: .175s;
            animation-delay: .175s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(8) {
            -webkit-animation-delay: .21s;
            animation-delay: .21s
        }

        #ac-globalnav.searchhide .ac-gn-item-menu:nth-child(9) {
            -webkit-animation-delay: .245s;
            animation-delay: .245s
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-item-menu {
                opacity: 0;
                pointer-events: none
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(2) {
                -webkit-transform: translateY(-44px);
                transform: translateY(-44px);
                -webkit-transition: opacity .3345s cubic-bezier(0.52, 0.16, 0.52, 0.84) .15s, -webkit-transform .4669s cubic-bezier(0.52, 0.16, 0.52, 0.84) .108s;
                transition: opacity .3345s cubic-bezier(0.52, 0.16, 0.52, 0.84) .15s, -webkit-transform .4669s cubic-bezier(0.52, 0.16, 0.52, 0.84) .108s;
                transition: opacity .3345s cubic-bezier(0.52, 0.16, 0.52, 0.84) .15s, transform .4669s cubic-bezier(0.52, 0.16, 0.52, 0.84) .108s;
                transition: opacity .3345s cubic-bezier(0.52, 0.16, 0.52, 0.84) .15s, transform .4669s cubic-bezier(0.52, 0.16, 0.52, 0.84) .108s, -webkit-transform .4669s cubic-bezier(0.52, 0.16, 0.52, 0.84) .108s;
                padding-top: 1px
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(3) {
                -webkit-transform: translateY(-40px);
                transform: translateY(-40px);
                -webkit-transition: opacity .29294s cubic-bezier(0.52, 0.16, 0.52, 0.84) .13s, -webkit-transform .45043s cubic-bezier(0.52, 0.16, 0.52, 0.84) .095s;
                transition: opacity .29294s cubic-bezier(0.52, 0.16, 0.52, 0.84) .13s, -webkit-transform .45043s cubic-bezier(0.52, 0.16, 0.52, 0.84) .095s;
                transition: opacity .29294s cubic-bezier(0.52, 0.16, 0.52, 0.84) .13s, transform .45043s cubic-bezier(0.52, 0.16, 0.52, 0.84) .095s;
                transition: opacity .29294s cubic-bezier(0.52, 0.16, 0.52, 0.84) .13s, transform .45043s cubic-bezier(0.52, 0.16, 0.52, 0.84) .095s, -webkit-transform .45043s cubic-bezier(0.52, 0.16, 0.52, 0.84) .095s
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(3)::before {
                content: '';
                display: block;
                width: 100%;
                height: 1px;
                background: #282828
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(4) {
                -webkit-transform: translateY(-36px);
                transform: translateY(-36px);
                -webkit-transition: opacity .26098s cubic-bezier(0.52, 0.16, 0.52, 0.84) .11s, -webkit-transform .43756s cubic-bezier(0.52, 0.16, 0.52, 0.84) .082s;
                transition: opacity .26098s cubic-bezier(0.52, 0.16, 0.52, 0.84) .11s, -webkit-transform .43756s cubic-bezier(0.52, 0.16, 0.52, 0.84) .082s;
                transition: opacity .26098s cubic-bezier(0.52, 0.16, 0.52, 0.84) .11s, transform .43756s cubic-bezier(0.52, 0.16, 0.52, 0.84) .082s;
                transition: opacity .26098s cubic-bezier(0.52, 0.16, 0.52, 0.84) .11s, transform .43756s cubic-bezier(0.52, 0.16, 0.52, 0.84) .082s, -webkit-transform .43756s cubic-bezier(0.52, 0.16, 0.52, 0.84) .082s
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(4)::before {
                content: '';
                display: block;
                width: 100%;
                height: 1px;
                background: #282828
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(5) {
                -webkit-transform: translateY(-32px);
                transform: translateY(-32px);
                -webkit-transition: opacity .2386s cubic-bezier(0.52, 0.16, 0.52, 0.84) .09s, -webkit-transform .42827s cubic-bezier(0.52, 0.16, 0.52, 0.84) .069s;
                transition: opacity .2386s cubic-bezier(0.52, 0.16, 0.52, 0.84) .09s, -webkit-transform .42827s cubic-bezier(0.52, 0.16, 0.52, 0.84) .069s;
                transition: opacity .2386s cubic-bezier(0.52, 0.16, 0.52, 0.84) .09s, transform .42827s cubic-bezier(0.52, 0.16, 0.52, 0.84) .069s;
                transition: opacity .2386s cubic-bezier(0.52, 0.16, 0.52, 0.84) .09s, transform .42827s cubic-bezier(0.52, 0.16, 0.52, 0.84) .069s, -webkit-transform .42827s cubic-bezier(0.52, 0.16, 0.52, 0.84) .069s
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(5)::before {
                content: '';
                display: block;
                width: 100%;
                height: 1px;
                background: #282828
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(6) {
                -webkit-transform: translateY(-28px);
                transform: translateY(-28px);
                -webkit-transition: opacity .22581s cubic-bezier(0.52, 0.16, 0.52, 0.84) .07s, -webkit-transform .42259s cubic-bezier(0.52, 0.16, 0.52, 0.84) .056s;
                transition: opacity .22581s cubic-bezier(0.52, 0.16, 0.52, 0.84) .07s, -webkit-transform .42259s cubic-bezier(0.52, 0.16, 0.52, 0.84) .056s;
                transition: opacity .22581s cubic-bezier(0.52, 0.16, 0.52, 0.84) .07s, transform .42259s cubic-bezier(0.52, 0.16, 0.52, 0.84) .056s;
                transition: opacity .22581s cubic-bezier(0.52, 0.16, 0.52, 0.84) .07s, transform .42259s cubic-bezier(0.52, 0.16, 0.52, 0.84) .056s, -webkit-transform .42259s cubic-bezier(0.52, 0.16, 0.52, 0.84) .056s
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(6)::before {
                content: '';
                display: block;
                width: 100%;
                height: 1px;
                background: #282828
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(7) {
                -webkit-transform: translateY(-24px);
                transform: translateY(-24px);
                -webkit-transition: opacity .22261s cubic-bezier(0.52, 0.16, 0.52, 0.84) .05s, -webkit-transform .4205s cubic-bezier(0.52, 0.16, 0.52, 0.84) .043s;
                transition: opacity .22261s cubic-bezier(0.52, 0.16, 0.52, 0.84) .05s, -webkit-transform .4205s cubic-bezier(0.52, 0.16, 0.52, 0.84) .043s;
                transition: opacity .22261s cubic-bezier(0.52, 0.16, 0.52, 0.84) .05s, transform .4205s cubic-bezier(0.52, 0.16, 0.52, 0.84) .043s;
                transition: opacity .22261s cubic-bezier(0.52, 0.16, 0.52, 0.84) .05s, transform .4205s cubic-bezier(0.52, 0.16, 0.52, 0.84) .043s, -webkit-transform .4205s cubic-bezier(0.52, 0.16, 0.52, 0.84) .043s
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(7)::before {
                content: '';
                display: block;
                width: 100%;
                height: 1px;
                background: #282828
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(8) {
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px);
                -webkit-transition: opacity .229s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s, -webkit-transform .422s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s;
                transition: opacity .229s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s, -webkit-transform .422s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s;
                transition: opacity .229s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s, transform .422s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s;
                transition: opacity .229s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s, transform .422s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s, -webkit-transform .422s cubic-bezier(0.52, 0.16, 0.52, 0.84) .03s
            }
            #ac-globalnav .ac-gn-item-menu:nth-child(8)::before {
                content: '';
                display: block;
                width: 100%;
                height: 1px;
                background: #282828
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu {
                opacity: 1;
                pointer-events: auto;
                -webkit-transform: none;
                transform: none
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(2),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(2) {
                -webkit-transition: opacity .3091s cubic-bezier(0.32, 0.08, 0.24, 1) .03s, -webkit-transform .3455s cubic-bezier(0.32, 0.08, 0.24, 1) .02s;
                transition: opacity .3091s cubic-bezier(0.32, 0.08, 0.24, 1) .03s, -webkit-transform .3455s cubic-bezier(0.32, 0.08, 0.24, 1) .02s;
                transition: opacity .3091s cubic-bezier(0.32, 0.08, 0.24, 1) .03s, transform .3455s cubic-bezier(0.32, 0.08, 0.24, 1) .02s;
                transition: opacity .3091s cubic-bezier(0.32, 0.08, 0.24, 1) .03s, transform .3455s cubic-bezier(0.32, 0.08, 0.24, 1) .02s, -webkit-transform .3455s cubic-bezier(0.32, 0.08, 0.24, 1) .02s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(3),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(3) {
                -webkit-transition: opacity .32244s cubic-bezier(0.32, 0.08, 0.24, 1) .05s, -webkit-transform .35825s cubic-bezier(0.32, 0.08, 0.24, 1) .04s;
                transition: opacity .32244s cubic-bezier(0.32, 0.08, 0.24, 1) .05s, -webkit-transform .35825s cubic-bezier(0.32, 0.08, 0.24, 1) .04s;
                transition: opacity .32244s cubic-bezier(0.32, 0.08, 0.24, 1) .05s, transform .35825s cubic-bezier(0.32, 0.08, 0.24, 1) .04s;
                transition: opacity .32244s cubic-bezier(0.32, 0.08, 0.24, 1) .05s, transform .35825s cubic-bezier(0.32, 0.08, 0.24, 1) .04s, -webkit-transform .35825s cubic-bezier(0.32, 0.08, 0.24, 1) .04s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(4),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(4) {
                -webkit-transition: opacity .33467s cubic-bezier(0.32, 0.08, 0.24, 1) .07s, -webkit-transform .37539s cubic-bezier(0.32, 0.08, 0.24, 1) .06s;
                transition: opacity .33467s cubic-bezier(0.32, 0.08, 0.24, 1) .07s, -webkit-transform .37539s cubic-bezier(0.32, 0.08, 0.24, 1) .06s;
                transition: opacity .33467s cubic-bezier(0.32, 0.08, 0.24, 1) .07s, transform .37539s cubic-bezier(0.32, 0.08, 0.24, 1) .06s;
                transition: opacity .33467s cubic-bezier(0.32, 0.08, 0.24, 1) .07s, transform .37539s cubic-bezier(0.32, 0.08, 0.24, 1) .06s, -webkit-transform .37539s cubic-bezier(0.32, 0.08, 0.24, 1) .06s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(5),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(5) {
                -webkit-transition: opacity .34577s cubic-bezier(0.32, 0.08, 0.24, 1) .09s, -webkit-transform .39692s cubic-bezier(0.32, 0.08, 0.24, 1) .08s;
                transition: opacity .34577s cubic-bezier(0.32, 0.08, 0.24, 1) .09s, -webkit-transform .39692s cubic-bezier(0.32, 0.08, 0.24, 1) .08s;
                transition: opacity .34577s cubic-bezier(0.32, 0.08, 0.24, 1) .09s, transform .39692s cubic-bezier(0.32, 0.08, 0.24, 1) .08s;
                transition: opacity .34577s cubic-bezier(0.32, 0.08, 0.24, 1) .09s, transform .39692s cubic-bezier(0.32, 0.08, 0.24, 1) .08s, -webkit-transform .39692s cubic-bezier(0.32, 0.08, 0.24, 1) .08s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(6),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(6) {
                -webkit-transition: opacity .35577s cubic-bezier(0.32, 0.08, 0.24, 1) .11s, -webkit-transform .42286s cubic-bezier(0.32, 0.08, 0.24, 1) .1s;
                transition: opacity .35577s cubic-bezier(0.32, 0.08, 0.24, 1) .11s, -webkit-transform .42286s cubic-bezier(0.32, 0.08, 0.24, 1) .1s;
                transition: opacity .35577s cubic-bezier(0.32, 0.08, 0.24, 1) .11s, transform .42286s cubic-bezier(0.32, 0.08, 0.24, 1) .1s;
                transition: opacity .35577s cubic-bezier(0.32, 0.08, 0.24, 1) .11s, transform .42286s cubic-bezier(0.32, 0.08, 0.24, 1) .1s, -webkit-transform .42286s cubic-bezier(0.32, 0.08, 0.24, 1) .1s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(7),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(7) {
                -webkit-transition: opacity .36464s cubic-bezier(0.32, 0.08, 0.24, 1) .13s, -webkit-transform .45318s cubic-bezier(0.32, 0.08, 0.24, 1) .12s;
                transition: opacity .36464s cubic-bezier(0.32, 0.08, 0.24, 1) .13s, -webkit-transform .45318s cubic-bezier(0.32, 0.08, 0.24, 1) .12s;
                transition: opacity .36464s cubic-bezier(0.32, 0.08, 0.24, 1) .13s, transform .45318s cubic-bezier(0.32, 0.08, 0.24, 1) .12s;
                transition: opacity .36464s cubic-bezier(0.32, 0.08, 0.24, 1) .13s, transform .45318s cubic-bezier(0.32, 0.08, 0.24, 1) .12s, -webkit-transform .45318s cubic-bezier(0.32, 0.08, 0.24, 1) .12s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-item-menu:nth-child(8),
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-item-menu:nth-child(8) {
                -webkit-transition: opacity .3724s cubic-bezier(0.32, 0.08, 0.24, 1) .15s, -webkit-transform .4879s cubic-bezier(0.32, 0.08, 0.24, 1) .14s;
                transition: opacity .3724s cubic-bezier(0.32, 0.08, 0.24, 1) .15s, -webkit-transform .4879s cubic-bezier(0.32, 0.08, 0.24, 1) .14s;
                transition: opacity .3724s cubic-bezier(0.32, 0.08, 0.24, 1) .15s, transform .4879s cubic-bezier(0.32, 0.08, 0.24, 1) .14s;
                transition: opacity .3724s cubic-bezier(0.32, 0.08, 0.24, 1) .15s, transform .4879s cubic-bezier(0.32, 0.08, 0.24, 1) .14s, -webkit-transform .4879s cubic-bezier(0.32, 0.08, 0.24, 1) .14s
            }
            #ac-globalnav.searchshow .ac-gn-item-menu,
            #ac-globalnav.searchopen .ac-gn-item-menu,
            #ac-globalnav.searchhide .ac-gn-item-menu {
                -webkit-animation: none;
                animation: none
            }
        }

        #ac-globalnav .ac-gn-search-small {
            display: none
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-search {
                display: none
            }
            #ac-globalnav.searchshow .ac-gn-search,
            #ac-globalnav.searchopen .ac-gn-search,
            #ac-globalnav.searchhide .ac-gn-search {
                -webkit-animation: none;
                animation: none
            }
            #ac-globalnav .ac-gn-search-small {
                display: block
            }
        }

        #ac-globalnav .ac-gn-link {
            font-size: 14px;
            line-height: 3.14286;
            font-weight: 400;
            letter-spacing: -.01em;
            color: #fff;
            position: relative;
            z-index: 1;
            display: inline-block;
            padding: 0 10px;
            height: 44px;
            opacity: 1;
            background: no-repeat;
            outline: none;
            text-decoration: none;
            white-space: nowrap;
            -webkit-transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            -webkit-tap-highlight-color: transparent;
            outline-offset: -7px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-link {
                font-size: 17px;
                letter-spacing: -.022em;
                font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
            }
        }

        #ac-globalnav .ac-gn-link:hover {
            opacity: .65
        }

        #ac-globalnav .ac-gn-link-text {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(0px 0 99.9% 99.9%);
            clip-path: inset(0px 0 99.9% 99.9%);
            overflow: hidden;
            height: 1px;
            width: 1px;
            padding: 0;
            border: 0;
            top: 50%
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-link-bag {
                padding: 0 16px;
                opacity: 1
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-item-menu .ac-gn-link {
                background-position: left center;
                display: block;
                outline-offset: 0;
                padding: 0;
                width: auto;
                max-width: none
            }
        }

        #ac-globalnav .ac-gn-link-apple {
            background-repeat: no-repeat;
            background-image: url("img/logo-apple.svg");
            background-position: center center;
            width: 18px
        }

        #ac-globalnav.no-svg .ac-gn-link-apple {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/apple/image_large.png")
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-link-apple {
                background-repeat: no-repeat;
                background-image: url("./img/logo-apple.svg")
            }
            #ac-globalnav.no-svg .ac-gn-link-apple {
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/apple/image_small.png")
            }
        }

        .ac-gn-current-apple #ac-globalnav .ac-gn-link-apple {
            opacity: .65
        }

        #ac-globalnav .ac-gn-link-mac {
            background-size: 26px 44px;
            background-repeat: no-repeat;
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/links/mac/image_large.svg");
            background-position: center center;
            background-origin: content-box;
            background-size: cover;
            width: 1.85714em;
            max-width: 44.2px
        }

        #ac-globalnav .ac-gn-link-search {
            background-size: 16px 44px;
            background-repeat: no-repeat;
            background-image: url(https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_large.svg);
            background-position: center center;
            width: 16px
        }

        #ac-globalnav.no-svg .ac-gn-link-search {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_large.png")
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-link-search {
                background-size: 16px 16px;
                background-repeat: no-repeat;
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_small.svg")
            }
            #ac-globalnav.no-svg .ac-gn-link-search {
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_small.png")
            }
        }

        .ac-gn-current-search #ac-globalnav .ac-gn-link-search {
            opacity: .65
        }

        #ac-globalnav .ac-gn-link-bag {
            background-size: 14px 44px;
            background-repeat: no-repeat;
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/bag/image_large.svg");
            background-position: center center;
            width: 14px
        }

        #ac-globalnav.no-svg .ac-gn-link-bag {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/bag/image_large.png")
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-link-bag {
                background-size: 16px 48px;
                background-repeat: no-repeat;
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/bag/image_small.svg")
            }
            #ac-globalnav.no-svg .ac-gn-link-bag {
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/bag/image_small.png")
            }
        }

        .ac-gn-current-bag #ac-globalnav .ac-gn-link-bag {
            opacity: .65
        }

        #ac-globalnav .ac-gn-link.current {
            opacity: .65
        }

        #ac-globalnav .ac-gn-menuicon {
            left: 0;
            position: absolute;
            z-index: 2;
            top: 0;
            width: 48px;
            border-bottom: none
        }

        #ac-globalnav .ac-gn-menuicon-label {
            display: block;
            position: absolute;
            z-index: 3;
            top: 0;
            width: 48px;
            height: 48px;
            cursor: pointer;
            -webkit-transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            -webkit-tap-highlight-color: transparent
        }

        #ac-globalnav .ac-gn-menuicon-label:hover,
        #ac-globalnav .ac-gn-menuicon-label:focus,
        #ac-globalnav .ac-gn-menuicon-label:active {
            opacity: .65
        }

        #ac-globalnav.touch .ac-gn-menuicon-label {
            opacity: 1;
            -webkit-transition: none;
            transition: none
        }

        #ac-globalnav .ac-gn-menuicon-bread {
            position: absolute;
            z-index: 3;
            top: 9px;
            left: 9px;
            width: 30px;
            height: 30px;
            -webkit-transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1)
        }

        #ac-globalnav .ac-gn-menuicon-bread-top {
            -webkit-transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96), -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            -webkit-transform: none;
            transform: none;
            z-index: 4
        }

        #ac-gn-menustate:checked~#ac-globalnav .ac-gn-menuicon-bread-top,
        #ac-gn-menustate:target~#ac-globalnav .ac-gn-menuicon-bread-top {
            -webkit-transition: -webkit-transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            transition: -webkit-transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            transition: transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            transition: transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s, -webkit-transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        #ac-globalnav .ac-gn-menuicon-bread-bottom {
            -webkit-transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96), -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            -webkit-transform: none;
            transform: none
        }

        #ac-gn-menustate:checked~#ac-globalnav .ac-gn-menuicon-bread-bottom,
        #ac-gn-menustate:target~#ac-globalnav .ac-gn-menuicon-bread-bottom {
            -webkit-transition: -webkit-transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            transition: -webkit-transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            transition: transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            transition: transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s, -webkit-transform .3192s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1008s;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        #ac-globalnav.searchopen .ac-gn-menuicon-bread {
            visibility: hidden
        }

        #ac-globalnav .ac-gn-menuicon-bread-crust {
            display: block;
            width: 17px;
            height: 1px;
            background: #fff;
            position: absolute;
            left: 7px;
            z-index: 1
        }

        #ac-globalnav .ac-gn-menuicon-bread-crust-top {
            top: 14px;
            -webkit-transform: translateY(-3px);
            transform: translateY(-3px);
            -webkit-transition: -webkit-transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s;
            transition: -webkit-transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s;
            transition: transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s;
            transition: transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s, -webkit-transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s
        }

        #ac-gn-menustate:checked~#ac-globalnav .ac-gn-menuicon-bread-crust-top,
        #ac-gn-menustate:target~#ac-globalnav .ac-gn-menuicon-bread-crust-top {
            -webkit-transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96), -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            -webkit-transform: none;
            transform: none
        }

        #ac-globalnav .ac-gn-menuicon-bread-crust-bottom {
            bottom: 14px;
            -webkit-transform: translateY(3px);
            transform: translateY(3px);
            -webkit-transition: -webkit-transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s;
            transition: -webkit-transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s;
            transition: transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s;
            transition: transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s, -webkit-transform .1596s cubic-bezier(0.52, 0.16, 0.52, 0.84) .1008s
        }

        #ac-gn-menustate:checked~#ac-globalnav .ac-gn-menuicon-bread-crust-bottom,
        #ac-gn-menustate:target~#ac-globalnav .ac-gn-menuicon-bread-crust-bottom {
            -webkit-transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            transition: transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96), -webkit-transform .1806s cubic-bezier(0.04, 0.04, 0.12, 0.96);
            -webkit-transform: none;
            transform: none
        }

        #ac-globalnav .ac-gn-menuanchor {
            left: 0;
            color: #fff;
            position: absolute;
            top: 0;
            width: 1px;
            height: 1px;
            z-index: 10
        }

        #ac-globalnav .ac-gn-menuanchor:focus {
            outline-offset: -8px;
            width: 48px;
            height: 48px
        }

        #ac-globalnav .ac-gn-menuanchor-close {
            display: none
        }

        #ac-globalnav .ac-gn-menuanchor-label {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(0px 0 99.9% 99.9%);
            clip-path: inset(0px 0 99.9% 99.9%);
            overflow: hidden;
            height: 1px;
            width: 1px;
            padding: 0;
            border: 0
        }

        #ac-gn-menustate:checked~#ac-globalnav .ac-gn-menuanchor-open,
        #ac-gn-menustate:target~#ac-globalnav .ac-gn-menuanchor-open {
            display: none
        }

        #ac-gn-menustate:checked~#ac-globalnav .ac-gn-menuanchor-close,
        #ac-gn-menustate:target~#ac-globalnav .ac-gn-menuanchor-close {
            display: block
        }

        #ac-globalnav .ac-gn-bag-badge {
            border-radius: 6px;
            margin-top: -3px;
            margin-left: -3px;
            width: 6px;
            height: 6px;
            background: #6bf;
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1
        }

        #ac-globalnav .ac-gn-bag.with-badge .ac-gn-bag-badge {
            display: block
        }

        #ac-globalnav .ac-gn-bagview,
        #ac-globalnav .ac-gn-notification {
            margin-right: -116px;
            right: 0;
            position: absolute;
            top: 48px;
            z-index: 1
        }

        @media only screen and (max-width:1268px) {
            #ac-globalnav .ac-gn-bagview,
            #ac-globalnav .ac-gn-notification {
                margin-right: calc(512px - 50vw);
                right: 5px
            }
            @supports (right:calc(max(0px))) {
                #ac-globalnav .ac-gn-bagview,
                #ac-globalnav .ac-gn-notification {
                    right: calc(max(5px, calc(env(safe-area-inset-right) - 4px)))
                }
            }
        }

        @media only screen and (max-width:1024px) {
            #ac-globalnav .ac-gn-bagview,
            #ac-globalnav .ac-gn-notification {
                margin-right: 0
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-bagview,
            #ac-globalnav .ac-gn-notification {
                margin-right: 0;
                right: 5px;
                top: 52px
            }
        }

        #ac-globalnav .ac-gn-bagview-caret,
        #ac-globalnav .ac-gn-notification-caret {
            overflow: hidden;
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 10px;
            z-index: 1
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-bagview-caret,
            #ac-globalnav .ac-gn-notification-caret {
                bottom: 100%
            }
        }

        @media only screen and (max-width:419px) {
            #ac-globalnav .ac-gn-bagview-caret,
            #ac-globalnav .ac-gn-notification-caret {
                height: 9px;
                margin-bottom: 0
            }
        }

        #ac-globalnav .ac-gn-bagview-caret:after,
        #ac-globalnav .ac-gn-notification-caret:after {
            left: 50%;
            border: 1px solid;
            content: "";
            display: block;
            position: absolute;
            top: 0;
            width: 12px;
            height: 12px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transform-origin: 0% 0;
            transform-origin: 0% 0;
            z-index: 1
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-bagview-caret:after,
            #ac-globalnav .ac-gn-notification-caret:after {
                left: auto;
                right: 3px
            }
        }

        #ac-globalnav .ac-gn-bagview {
            font-size: 14px;
            line-height: 1.35722;
            font-weight: 400;
            letter-spacing: -.01em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            background: #fff;
            border: 1px solid #d6d6d6;
            border-radius: 2px;
            display: none;
            width: 288px
        }

        #ac-globalnav.with-bagview .ac-gn-bagview {
            display: block
        }

        @media only screen and (max-width:419px) {
            #ac-globalnav .ac-gn-bagview {
                border-radius: 0;
                border-width: 0 0 1px 0;
                top: 48px;
                left: 0;
                right: 0;
                width: 100%
            }
        }

        #ac-globalnav .ac-gn-bagview-content {
            margin: 0 auto;
            min-height: 90px;
            padding: 0 20px;
            position: relative;
            z-index: 2
        }

        @media only screen and (max-width:419px) {
            #ac-globalnav .ac-gn-bagview-content {
                padding: 0 48px
            }
        }

        #ac-globalnav .ac-gn-bagview-caret {
            display: none
        }

        #ac-globalnav.with-bagview .ac-gn-bagview-caret {
            display: block
        }

        #ac-globalnav.with-bagview .ac-gn-bagview-caret-small {
            display: none
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav.with-bagview .ac-gn-bagview-caret-small {
                display: block
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav.with-bagview .ac-gn-bagview-caret-large {
                display: none
            }
        }

        #ac-globalnav .ac-gn-bagview-caret:after {
            background: #fff;
            border-color: #d6d6d6
        }

        @media only screen and (max-width:419px) {
            #ac-globalnav .ac-gn-bagview-caret:after {
                right: 9px;
                border-color: #fff
            }
        }

        #ac-globalnav .ac-gn-bag {
            z-index: 2
        }

        #ac-globalnav .ac-gn-bagview {
            font-size: 15px;
            line-height: 1.16667;
            font-weight: 400;
            letter-spacing: -.014em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            background: #fff
        }

        #ac-globalnav .ac-gn-bagview-message {
            color: #888;
            padding: 35px 0;
            margin: 0;
            text-align: center
        }

        #ac-globalnav .ac-gn-bagview-linemessage {
            margin: -9px 0 0 0;
            color: #888;
            font-size: 12px;
            line-height: 1.33341;
            font-weight: 400;
            letter-spacing: .036em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            text-align: center
        }

        #ac-globalnav .ac-gn-bagview-linemessage-text {
            padding: 0 6px 0 6px;
            background: #fff
        }

        #ac-globalnav .ac-gn-bagview-linemessage:before {
            display: block;
            position: relative;
            top: 9px;
            margin-top: -1px;
            z-index: -10;
            border-bottom: 1px solid #e3e3e3;
            content: ""
        }

        @-webkit-keyframes loader {
            from {
                -webkit-transform: rotate(0deg) translateZ(0);
                transform: rotate(0deg) translateZ(0)
            }
            to {
                -webkit-transform: rotate(360deg) translateZ(0);
                transform: rotate(360deg) translateZ(0)
            }
        }

        @keyframes loader {
            from {
                -webkit-transform: rotate(0deg) translateZ(0);
                transform: rotate(0deg) translateZ(0)
            }
            to {
                -webkit-transform: rotate(360deg) translateZ(0);
                transform: rotate(360deg) translateZ(0)
            }
        }

        #ac-globalnav .ac-gn-bagview-loader {
            background: no-repeat center/40px url("../assets/ac-store/spinner.svg");
            margin-top: -20px;
            margin-left: -20px;
            width: 40px;
            height: 40px;
            background: url("../assets/ac-store/spinner.gif") no-repeat\0;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            -webkit-animation: loader 1s linear infinite;
            animation: loader 1s linear infinite
        }

        #ac-globalnav .ac-gn-bagview _:-ms-input-placeholder,
        :root #ac-globalnav .ac-gn-bagview-loader {
            background: none, no-repeat center/40px url("../assets/ac-store/spinner.svg")
        }

        #ac-globalnav .ac-gn-bagview-bag {
            list-style: none
        }

        #ac-globalnav .ac-gn-bagview-bagitem {
            border-bottom: 1px solid #e3e3e3
        }

        #ac-globalnav .ac-gn-bagview-bagitem-last {
            border-bottom-style: none
        }

        #ac-globalnav .ac-gn-bagview-bagitem-link {
            margin: 0;
            padding: 0;
            display: table;
            min-height: 92px;
            width: 100%;
            color: #333;
            text-decoration: none
        }

        #ac-globalnav .ac-gn-bagview-bagitem-column1,
        #ac-globalnav .ac-gn-bagview-bagitem-column2 {
            display: table-cell;
            vertical-align: middle;
            min-height: 70px
        }

        #ac-globalnav .ac-gn-bagview-bagitem-column1 {
            padding: 0 5px 0 0;
            width: 25%
        }

        #ac-globalnav .ac-gn-bagview-bagitem-column2 {
            padding: 19px 0;
            width: 75%
        }

        #ac-globalnav .ac-gn-bagview-bagitem-picture {
            max-width: 70px;
            height: auto
        }

        #ac-globalnav .ac-gn-bagview-bagitem-qty {
            font-size: 12px;
            line-height: 1.33341;
            font-weight: 400;
            letter-spacing: .036em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color: #888
        }

        #ac-globalnav .ac-gn-bagview-bagitem-qty:before {
            content: "\2715";
            font-size: 0.75em
        }

        #ac-globalnav .ac-gn-bagview-nav {
            margin-bottom: 2px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-bagview-nav {
                margin-bottom: 8px
            }
        }

        #ac-globalnav .ac-gn-bagview-nav-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        #ac-globalnav .ac-gn-bagview-nav-item {
            margin: 0;
            padding: 0;
            border-top: 1px solid #e3e3e3
        }

        #ac-globalnav .ac-gn-bagview-nav-item:first-child {
            border-top-style: none
        }

        #ac-globalnav .ac-gn-bagview-nav-nobtn {
            border-top: 1px solid #e3e3e3
        }

        #ac-globalnav .ac-gn-bagview-nav-link {
            color: #0070c9;
            display: block;
            line-height: 43px;
            padding: 0 30px;
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        #ac-globalnav .ac-gn-bagview-nav-link:hover {
            text-decoration: underline
        }

        #ac-globalnav.touch .ac-gn-bagview-nav-link:hover {
            text-decoration: none
        }

        #ac-globalnav .ac-gn-bagview-nav-link-bag {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/bag.png");
            background-image: none, url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/bag.svg");
            background-position: 1px center;
            background-repeat: no-repeat
        }

        #ac-globalnav .ac-gn-bagview-nav-link-favorites {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/favorites.png");
            background-image: none, url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/favorites.svg");
            background-position: 1px center;
            background-repeat: no-repeat
        }

        #ac-globalnav .ac-gn-bagview-nav-link-orders {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/orders.png");
            background-image: none, url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/orders.svg");
            background-position: 1px center;
            background-repeat: no-repeat
        }

        #ac-globalnav .ac-gn-bagview-nav-link-account {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/account.png");
            background-image: none, url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/account.svg");
            background-position: 1px center;
            background-repeat: no-repeat
        }

        #ac-globalnav .ac-gn-bagview-nav-link-signIn {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/signIn.png");
            background-image: none, url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/signIn.svg");
            background-position: 1px center;
            background-repeat: no-repeat
        }

        #ac-globalnav .ac-gn-bagview-nav-link-signOut {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/signIn.png");
            background-image: none, url("https://www.apple.com/ac/globalnav/4/en_US/assets/ac-store/signIn.svg");
            background-position: 1px center;
            background-repeat: no-repeat
        }

        #ac-globalnav .ac-gn-bagview-nav-link-bag {
            background-position: 3px 45%
        }

        #ac-globalnav .ac-gn-bagview-nav-link-orders {
            background-position: 2px center
        }

        #ac-globalnav .ac-gn-bagview-nav-link-favorites {
            background-position: 1px center
        }

        #ac-globalnav .ac-gn-bagview-button {
            font-size: 17px;
            line-height: 1.47059;
            font-weight: 400;
            letter-spacing: -.022em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            background-color: #0070c9;
            background: -webkit-gradient(linear, left top, left bottom, from(#42a1ec), to(#0070c9));
            background: -webkit-linear-gradient(#42a1ec, #0070c9);
            background: linear-gradient(#42a1ec, #0070c9);
            border-color: #07c;
            border-width: 1px;
            border-style: solid;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            min-width: 30px;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 4px;
            padding-bottom: 4px;
            text-align: center;
            white-space: nowrap
        }

        #ac-globalnav .ac-gn-bagview-button:hover {
            background-color: #147bcd;
            background: -webkit-gradient(linear, left top, left bottom, from(#51a9ee), to(#147bcd));
            background: -webkit-linear-gradient(#51a9ee, #147bcd);
            background: linear-gradient(#51a9ee, #147bcd);
            border-color: #1482d0;
            text-decoration: none
        }

        #ac-globalnav .ac-gn-bagview-button:focus {
            -webkit-box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
            box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
            outline: none
        }

        #ac-globalnav .ac-gn-bagview-button:focus[data-focus-method="mouse"]:not(input):not(textarea):not(select),
        #ac-globalnav .ac-gn-bagview-button:focus[data-focus-method="touch"]:not(input):not(textarea):not(select) {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        #ac-globalnav .ac-gn-bagview-button:active {
            background-color: #0067b9;
            background: -webkit-gradient(linear, left top, left bottom, from(#3d94d9), to(#0067b9));
            background: -webkit-linear-gradient(#3d94d9, #0067b9);
            background: linear-gradient(#3d94d9, #0067b9);
            border-color: #006dbc;
            outline: none
        }

        #ac-globalnav .ac-gn-bagview-button:disabled,
        #ac-globalnav .ac-gn-bagview-button.disabled {
            background-color: #0070c9;
            background: -webkit-gradient(linear, left top, left bottom, from(#42a1ec), to(#0070c9));
            background: -webkit-linear-gradient(#42a1ec, #0070c9);
            background: linear-gradient(#42a1ec, #0070c9);
            border-color: #07c;
            color: #fff;
            cursor: default;
            opacity: .3
        }

        #ac-globalnav .ac-gn-bagview-button-compact {
            font-size: 12px;
            line-height: 1.33341;
            font-weight: 400;
            letter-spacing: -.01em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            min-width: 20px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 2px;
            padding-bottom: 2px
        }

        #ac-globalnav .ac-gn-bagview-button-block {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            width: 100%
        }

        #ac-globalnav .ac-gn-bagview-button-secondary {
            background-color: #e3e3e3;
            background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#e3e3e3));
            background: -webkit-linear-gradient(#fff, #e3e3e3);
            background: linear-gradient(#fff, #e3e3e3);
            border-color: #d6d6d6;
            color: #0070c9
        }

        #ac-globalnav .ac-gn-bagview-button-secondary:hover {
            background-color: #eee;
            background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));
            background: -webkit-linear-gradient(#fff, #eee);
            background: linear-gradient(#fff, #eee);
            border-color: #d9d9d9
        }

        #ac-globalnav .ac-gn-bagview-button-secondary:active {
            background-color: #dcdcdc;
            background: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#dcdcdc));
            background: -webkit-linear-gradient(#f7f7f7, #dcdcdc);
            background: linear-gradient(#f7f7f7, #dcdcdc);
            border-color: #d0d0d0
        }

        #ac-globalnav .ac-gn-bagview-button-secondary:disabled,
        #ac-globalnav .ac-gn-bagview-button-secondary.disabled {
            background-color: #e3e3e3;
            background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#e3e3e3));
            background: -webkit-linear-gradient(#fff, #e3e3e3);
            background: linear-gradient(#fff, #e3e3e3);
            border-color: #d6d6d6;
            color: #0070c9
        }

        #ac-globalnav .ac-gn-bagview-button-applemusic {
            background-color: #da0f47;
            background: -webkit-gradient(linear, left top, left bottom, from(#f82752), to(#da0f47));
            background: -webkit-linear-gradient(#f82752, #da0f47);
            background: linear-gradient(#f82752, #da0f47);
            border-color: #da0f47;
            color: #fff
        }

        #ac-globalnav .ac-gn-bagview-button-applemusic:hover {
            background-color: #dd2256;
            background: -webkit-gradient(linear, left top, left bottom, from(#f93860), to(#dd2256));
            background: -webkit-linear-gradient(#f93860, #dd2256);
            background: linear-gradient(#f93860, #dd2256);
            border-color: #dd2256
        }

        #ac-globalnav .ac-gn-bagview-button-applemusic:active {
            background-color: #cf0e43;
            background: -webkit-gradient(linear, left top, left bottom, from(#ec254e), to(#cf0e43));
            background: -webkit-linear-gradient(#ec254e, #cf0e43);
            background: linear-gradient(#ec254e, #cf0e43);
            border-color: #cf0e43
        }

        #ac-globalnav .ac-gn-bagview-button-applemusic:disabled,
        #ac-globalnav .ac-gn-bagview-button-applemusic.disabled {
            background-color: #da0f47;
            background: -webkit-gradient(linear, left top, left bottom, from(#f82752), to(#da0f47));
            background: -webkit-linear-gradient(#f82752, #da0f47);
            background: linear-gradient(#f82752, #da0f47);
            border-color: #da0f47;
            color: #fff
        }

        #ac-globalnav .ac-gn-bagview-button {
            display: block;
            margin: 17px 0;
            text-decoration: none
        }

        #ac-globalnav .ac-gn-bagview-bag-one+.ac-gn-bagview-button {
            margin: 7px 0 17px 0
        }

        #ac-globalnav #ac-gn-bagview-content .ac-gn-bagview-button.ac-gn-bagview-button-checkout {
            display: block
        }

        #ac-globalnav .ac-gn-bagview-nav-item-preregistration {
            padding: 10px 0 !important;
            border-bottom: 1px solid #e3e3e3 !important;
            text-align: center !important
        }

        #ac-globalnav .ac-gn-bagview-nav-link-preregistration {
            padding: 0 12px !important
        }

        #ac-globalnav li.prereg-promo-links-list {
            display: inline-block
        }

        @-webkit-keyframes ac-gn-search-placeholder-cancel-show {
            0% {
                -webkit-transform: translateX(8px);
                transform: translateX(8px);
                opacity: 0
            }
            100% {
                -webkit-transform: none;
                transform: none;
                opacity: 1
            }
        }

        @keyframes ac-gn-search-placeholder-cancel-show {
            0% {
                -webkit-transform: translateX(8px);
                transform: translateX(8px);
                opacity: 0
            }
            100% {
                -webkit-transform: none;
                transform: none;
                opacity: 1
            }
        }

        @-webkit-keyframes ac-gn-search-placeholder-mask-searchshow-transform {
            0% {
                -webkit-transform: none;
                transform: none
            }
            100% {
                -webkit-transform: translateX(calc(-100% + 4px));
                transform: translateX(calc(-100% + 4px))
            }
        }

        @keyframes ac-gn-search-placeholder-mask-searchshow-transform {
            0% {
                -webkit-transform: none;
                transform: none
            }
            100% {
                -webkit-transform: translateX(calc(-100% + 4px));
                transform: translateX(calc(-100% + 4px))
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-search-placeholder-container {
                display: block;
                position: absolute;
                z-index: 4;
                top: 48px;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 0 10px 0 10px;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                height: 3.11765em;
                background: transparent;
                visibility: hidden;
                -webkit-transition: background .44s cubic-bezier(0.52, 0.16, 0.24, 1) .1s, visibility 0s linear .5s;
                transition: background .44s cubic-bezier(0.52, 0.16, 0.24, 1) .1s, visibility 0s linear .5s
            }
            #ac-globalnav .ac-gn-search-placeholder-container:after {
                content: '';
                display: block;
                height: 1px;
                background: #282828;
                position: absolute;
                z-index: 2;
                right: 0;
                bottom: 0;
                left: 0;
                opacity: 0;
                -webkit-transform: translateY(-46px);
                transform: translateY(-46px);
                -webkit-transition: opacity .2s cubic-bezier(0.52, 0.16, 0.52, 0.84) .3s, -webkit-transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s;
                transition: opacity .2s cubic-bezier(0.52, 0.16, 0.52, 0.84) .3s, -webkit-transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s;
                transition: opacity .2s cubic-bezier(0.52, 0.16, 0.52, 0.84) .3s, transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s;
                transition: opacity .2s cubic-bezier(0.52, 0.16, 0.52, 0.84) .3s, transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s, -webkit-transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-search-placeholder-container,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-search-placeholder-container {
                background: #000;
                visibility: visible;
                -webkit-transition: background .18s cubic-bezier(0.32, 0.08, 0.24, 1) .18s, visibility 0s linear 0s;
                transition: background .18s cubic-bezier(0.32, 0.08, 0.24, 1) .18s, visibility 0s linear 0s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-search-placeholder-container:after,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-search-placeholder-container:after {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                -webkit-transition: opacity 0.31s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.03s, -webkit-transform 0.34s cubic-bezier(0.32, 0.08, 0.24, 1) 0.02s;
                transition: opacity 0.31s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.03s, -webkit-transform 0.34s cubic-bezier(0.32, 0.08, 0.24, 1) 0.02s;
                transition: opacity 0.31s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.03s, transform 0.34s cubic-bezier(0.32, 0.08, 0.24, 1) 0.02s;
                transition: opacity 0.31s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.03s, transform 0.34s cubic-bezier(0.32, 0.08, 0.24, 1) 0.02s, -webkit-transform 0.34s cubic-bezier(0.32, 0.08, 0.24, 1) 0.02s
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-container {
                -webkit-animation: ac-gn-header-slideup-searchshow .36s cubic-bezier(0.32, 0.08, 0.24, 1) both;
                animation: ac-gn-header-slideup-searchshow .36s cubic-bezier(0.32, 0.08, 0.24, 1) both
            }
            #ac-globalnav.searchopen .ac-gn-search-placeholder-container {
                display: none
            }
            #ac-globalnav.searchhide .ac-gn-search-placeholder-container {
                animation: ac-gn-header-slideup-searchshow .36s cubic-bezier(0.8, 0, 0.68, 0.92) reverse both
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-search-small {
                margin: 0;
                padding: 0;
                height: 2.11765em
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-search-small .ac-gn-link {
                display: block;
                height: 2.11765em;
                max-width: 584px;
                margin: 0 auto;
                padding: 0;
                outline-offset: 0;
                opacity: 1
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-search-small .ac-gn-link:focus {
                -webkit-box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                outline: none;
                border-radius: 4px
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-search-small .ac-gn-link:focus[data-focus-method="mouse"]:not(input):not(textarea):not(select),
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-search-small .ac-gn-link:focus[data-focus-method="touch"]:not(input):not(textarea):not(select) {
                -webkit-box-shadow: none;
                box-shadow: none
            }
            #ac-globalnav.searchhide .ac-gn-search-placeholder-container .ac-gn-search-small .ac-gn-link {
                -webkit-box-shadow: none;
                box-shadow: none
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-search-small .ac-gn-link-search {
                left: 0;
                position: absolute;
                width: 32px;
                height: 2.11765em;
                background-position: left 8px center
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-searchview-close {
                z-index: 2;
                height: 2.11765em;
                line-height: 2.11765em
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-searchview-close:hover,
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-searchview-close:active {
                opacity: 1;
                cursor: text
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-searchview-close:before {
                right: 0;
                content: '';
                display: block;
                position: absolute;
                z-index: 1;
                top: 0;
                width: calc(100% + 18px);
                height: 100%;
                border-radius: 0 4px 4px 0
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-container .ac-gn-searchview-close:before,
            #ac-globalnav.searchopen .ac-gn-search-placeholder-container .ac-gn-searchview-close:before,
            #ac-globalnav.searchhide .ac-gn-search-placeholder-container .ac-gn-searchview-close:before {
                background-color: #282828
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-container .ac-gn-searchview-close:before {
                -webkit-animation: ac-gn-search-placeholder-mask-searchshow-transform .36s cubic-bezier(0.32, 0.08, 0.24, 1) both;
                animation: ac-gn-search-placeholder-mask-searchshow-transform .36s cubic-bezier(0.32, 0.08, 0.24, 1) both
            }
            #ac-globalnav.searchhide .ac-gn-search-placeholder-container .ac-gn-searchview-close:before {
                animation: ac-gn-search-placeholder-mask-searchshow-transform .36s cubic-bezier(0.8, 0, 0.68, 0.92) reverse both
            }
            #ac-globalnav .ac-gn-search-placeholder-container .ac-gn-searchview-close-cancel {
                opacity: 0
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-container .ac-gn-searchview-close-cancel,
            #ac-globalnav.searchopen .ac-gn-search-placeholder-container .ac-gn-searchview-close-cancel,
            #ac-globalnav.searchhide .ac-gn-search-placeholder-container .ac-gn-searchview-close-cancel {
                display: inline-block
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-container .ac-gn-searchview-close-cancel {
                -webkit-animation: ac-gn-search-placeholder-cancel-show .36s cubic-bezier(0.32, 0.08, 0.24, 1) both;
                animation: ac-gn-search-placeholder-cancel-show .36s cubic-bezier(0.32, 0.08, 0.24, 1) both
            }
            #ac-globalnav.searchhide .ac-gn-search-placeholder-container .ac-gn-searchview-close-cancel {
                animation: ac-gn-search-placeholder-cancel-show .36s cubic-bezier(0.8, 0, 0.68, 0.92) reverse both
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-search-placeholder-bar {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                position: relative;
                z-index: 1;
                max-width: 584px;
                margin: 0 auto
            }
            #ac-globalnav .ac-gn-search-placeholder-bar:after {
                left: 0;
                content: '';
                display: block;
                position: absolute;
                z-index: 1;
                top: 0;
                width: 100%;
                height: 2.11765em;
                background-color: #282828;
                border-radius: 4px;
                -webkit-transform-origin: 0 0;
                transform-origin: 0 0;
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0;
                -webkit-transition: opacity 0.1s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.42s, -webkit-transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s;
                transition: opacity 0.1s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.42s, -webkit-transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s;
                transition: transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s, opacity 0.1s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.42s;
                transition: transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s, opacity 0.1s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.42s, -webkit-transform 0.38s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.15s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-search-placeholder-bar:after,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-search-placeholder-bar:after {
                -webkit-transform: none;
                transform: none;
                opacity: 1;
                -webkit-transition: opacity 0.06s cubic-bezier(0.32, 0.08, 0.24, 1) 0.04s, -webkit-transform 0.36s cubic-bezier(0.32, 0.08, 0.24, 1);
                transition: opacity 0.06s cubic-bezier(0.32, 0.08, 0.24, 1) 0.04s, -webkit-transform 0.36s cubic-bezier(0.32, 0.08, 0.24, 1);
                transition: transform 0.36s cubic-bezier(0.32, 0.08, 0.24, 1), opacity 0.06s cubic-bezier(0.32, 0.08, 0.24, 1) 0.04s;
                transition: transform 0.36s cubic-bezier(0.32, 0.08, 0.24, 1), opacity 0.06s cubic-bezier(0.32, 0.08, 0.24, 1) 0.04s, -webkit-transform 0.36s cubic-bezier(0.32, 0.08, 0.24, 1)
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-bar:after,
            #ac-globalnav.searchopen .ac-gn-search-placeholder-bar:after,
            #ac-globalnav.searchhide .ac-gn-search-placeholder-bar:after {
                background-color: transparent
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-search-placeholder-input {
                position: relative;
                z-index: 3;
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                line-height: 2.11765em;
                padding: 0;
                overflow: hidden;
                border-radius: 4px
            }
            #ac-globalnav.searchshow .ac-gn-search-placeholder-input,
            #ac-globalnav.searchopen .ac-gn-search-placeholder-input,
            #ac-globalnav.searchhide .ac-gn-search-placeholder-input {
                background-color: #282828
            }
        }

        #ac-globalnav .ac-gn-search-placeholder,
        #ac-globalnav .ac-gn-search-placeholder-input-text {
            font-size: 14px;
            line-height: 3.14286;
            font-weight: 400;
            letter-spacing: -.01em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-search-placeholder,
            #ac-globalnav .ac-gn-search-placeholder-input-text {
                font-size: 17px;
                line-height: 1.23543;
                font-weight: 400;
                letter-spacing: -.022em;
                font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
            }
        }

        #ac-globalnav .ac-gn-search-placeholder-input-text {
            display: none;
            border-bottom: none;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            height: 2.11765em;
            color: #999;
            cursor: text
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-search-placeholder-input-text {
                padding-left: 30px;
                display: block;
                line-height: 2.11765em;
                -webkit-transform: translateY(-8px);
                transform: translateY(-8px);
                opacity: 0;
                -webkit-transition: opacity 0.2s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.16s, -webkit-transform .49s cubic-bezier(0.32, 0.08, 0.24, 1) 0.15s;
                transition: opacity 0.2s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.16s, -webkit-transform .49s cubic-bezier(0.32, 0.08, 0.24, 1) 0.15s;
                transition: transform .49s cubic-bezier(0.32, 0.08, 0.24, 1) 0.15s, opacity 0.2s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.16s;
                transition: transform .49s cubic-bezier(0.32, 0.08, 0.24, 1) 0.15s, opacity 0.2s cubic-bezier(0.52, 0.16, 0.52, 0.84) 0.16s, -webkit-transform .49s cubic-bezier(0.32, 0.08, 0.24, 1) 0.15s
            }
            #ac-gn-menustate:checked~#ac-globalnav .ac-gn-search-placeholder-input-text,
            #ac-gn-menustate:target~#ac-globalnav .ac-gn-search-placeholder-input-text {
                -webkit-transform: none;
                transform: none;
                opacity: 1;
                -webkit-transition: opacity 0.26s cubic-bezier(0.32, 0.08, 0.24, 1) 0.1s, -webkit-transform 0.28s cubic-bezier(0.32, 0.08, 0.24, 1) 0.08s;
                transition: opacity 0.26s cubic-bezier(0.32, 0.08, 0.24, 1) 0.1s, -webkit-transform 0.28s cubic-bezier(0.32, 0.08, 0.24, 1) 0.08s;
                transition: transform 0.28s cubic-bezier(0.32, 0.08, 0.24, 1) 0.08s, opacity 0.26s cubic-bezier(0.32, 0.08, 0.24, 1) 0.1s;
                transition: transform 0.28s cubic-bezier(0.32, 0.08, 0.24, 1) 0.08s, opacity 0.26s cubic-bezier(0.32, 0.08, 0.24, 1) 0.1s, -webkit-transform 0.28s cubic-bezier(0.32, 0.08, 0.24, 1) 0.08s
            }
        }

        @-webkit-keyframes ac-gn-searchview-searchhide {
            0% {
                opacity: 1;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0
            }
        }

        @keyframes ac-gn-searchview-searchhide {
            0% {
                opacity: 1;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes ac-gn-searchview-close-left-searchshow {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
        }

        @keyframes ac-gn-searchview-close-left-searchshow {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
        }

        @-webkit-keyframes ac-gn-searchview-close-left-searchhide {
            0% {
                opacity: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1)
            }
        }

        @keyframes ac-gn-searchview-close-left-searchhide {
            0% {
                opacity: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1)
            }
        }

        @-webkit-keyframes ac-gn-searchview-close-right-searchshow {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg)
            }
        }

        @keyframes ac-gn-searchview-close-right-searchshow {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg)
            }
        }

        @-webkit-keyframes ac-gn-searchview-close-right-searchhide {
            0% {
                opacity: 1;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1)
            }
        }

        @keyframes ac-gn-searchview-close-right-searchhide {
            0% {
                opacity: 1;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 0;
                -webkit-transform: scale3d(1, 0.65, 1);
                transform: scale3d(1, 0.65, 1)
            }
        }

        #ac-globalnav .ac-gn-searchview {
            display: none
        }

        #ac-globalnav.searchshow .ac-gn-searchview,
        #ac-globalnav.searchopen .ac-gn-searchview,
        #ac-globalnav.searchhide .ac-gn-searchview {
            display: block
        }

        #ac-globalnav .ac-gn-searchview-content {
            position: absolute;
            top: 0;
            left: 16.66667%;
            width: 66.66667%;
            height: 100vh;
            z-index: 3;
            pointer-events: none
        }

        #ac-globalnav.searchhide .ac-gn-searchview-content {
            -webkit-animation: ac-gn-searchview-searchhide .2s both;
            animation: ac-gn-searchview-searchhide .2s both
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchview-content {
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: auto
            }
            #ac-globalnav.searchshow .ac-gn-searchview-content,
            #ac-globalnav.searchopen .ac-gn-searchview-content,
            #ac-globalnav.searchhide .ac-gn-searchview-content {
                -webkit-animation: none;
                animation: none
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchview-bar {
                background: #000;
                border-bottom: 1px solid #282828;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                width: 100%;
                height: auto;
                padding: .94118em 10px;
                position: relative;
                z-index: 2;
                opacity: 0
            }
            #ac-globalnav.searchopen .ac-gn-searchview-bar {
                opacity: 1
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchview-bar-wrapper {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                max-width: 584px;
                margin: 0 auto
            }
        }

        #ac-globalnav .ac-gn-searchview-close {
            right: 9px;
            right: calc(9px + constant(safe-area-inset-right));
            position: absolute;
            z-index: 3;
            width: 38px;
            height: 44px;
            top: 0;
            opacity: 1;
            color: #fff;
            cursor: pointer;
            -webkit-transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            -webkit-tap-highlight-color: transparent
        }

        @supports (right:calc(max(0px))) {
            #ac-globalnav .ac-gn-searchview-close {
                right: calc(max(9px, calc((env(safe-area-inset-right) - 9px) - ((env(safe-area-inset-right) - 38px) / 2))))
            }
        }

        #ac-globalnav .ac-gn-searchview-close:hover,
        #ac-globalnav .ac-gn-searchview-close:active {
            opacity: .65
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchview-close:hover,
            #ac-globalnav .ac-gn-searchview-close:active {
                opacity: .8
            }
        }

        #ac-globalnav.touch .ac-gn-searchview-close:hover,
        #ac-globalnav.touch .ac-gn-searchview-close:active {
            opacity: 1
        }

        #ac-globalnav .ac-gn-searchview-close:focus {
            outline-offset: -7px
        }

        #ac-globalnav .ac-gn-searchview-close:focus:active {
            outline: none
        }

        #ac-globalnav.searchshow .ac-gn-searchview-close {
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        #ac-globalnav.searchhide .ac-gn-searchview-close {
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchview-close {
                display: none
            }
        }

        #ac-globalnav .ac-gn-searchview-close-small {
            display: none
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchview-close-small {
                display: block;
                right: auto;
                position: relative;
                width: auto;
                height: 36px;
                padding: 0 8px;
                margin-left: 10px
            }
            #ac-globalnav .ac-gn-searchview-close-small:focus {
                -webkit-box-shadow: inset 0 0 0 3px rgba(131, 192, 253, 0.5);
                box-shadow: inset 0 0 0 3px rgba(131, 192, 253, 0.5);
                outline: none;
                border-radius: 5px
            }
            #ac-globalnav .ac-gn-searchview-close-small:focus[data-focus-method="mouse"]:not(input):not(textarea):not(select),
            #ac-globalnav .ac-gn-searchview-close-small:focus[data-focus-method="touch"]:not(input):not(textarea):not(select) {
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        #ac-globalnav .ac-gn-searchview-close-cancel {
            font-size: 17px;
            line-height: 1.23543;
            font-weight: 400;
            letter-spacing: -.022em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color: #6bf
        }

        #ac-globalnav .ac-gn-searchview-close-wrapper {
            display: block;
            width: 100%;
            height: 100%
        }

        #ac-globalnav .ac-gn-searchview-close-left,
        #ac-globalnav .ac-gn-searchview-close-right {
            height: 18px;
            width: 1px;
            background: #fff;
            position: absolute;
            display: block;
            top: 11px;
            z-index: 1
        }

        #ac-globalnav .ac-gn-searchview-close-left {
            right: 12px;
            -webkit-transform: scale3d(1, 0.65, 1);
            transform: scale3d(1, 0.65, 1);
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%
        }

        #ac-globalnav.searchshow .ac-gn-searchview-close-left {
            -webkit-animation: ac-gn-searchview-close-left-searchshow .3s both;
            animation: ac-gn-searchview-close-left-searchshow .3s both
        }

        #ac-globalnav.searchopen .ac-gn-searchview-close-left {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        #ac-globalnav.searchhide .ac-gn-searchview-close-left {
            -webkit-animation: ac-gn-searchview-close-left-searchhide .3s both;
            animation: ac-gn-searchview-close-left-searchhide .3s both
        }

        #ac-globalnav .ac-gn-searchview-close-right {
            left: 12px;
            -webkit-transform: scale3d(1, 0.65, 1);
            transform: scale3d(1, 0.65, 1);
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%
        }

        #ac-globalnav.searchshow .ac-gn-searchview-close-right {
            -webkit-animation: ac-gn-searchview-close-right-searchshow .3s both;
            animation: ac-gn-searchview-close-right-searchshow .3s both
        }

        #ac-globalnav.searchopen .ac-gn-searchview-close-right {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        #ac-globalnav.searchhide .ac-gn-searchview-close-right {
            -webkit-animation: ac-gn-searchview-close-right-searchhide .3s both;
            animation: ac-gn-searchview-close-right-searchhide .3s both
        }

        @-webkit-keyframes ac-gn-searchform-slide {
            0% {
                -webkit-transform: translate3d(100px, 0, 0);
                transform: translate3d(100px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.12, 0.87, 0.15, 1);
                animation-timing-function: cubic-bezier(0.12, 0.87, 0.15, 1)
            }
            100% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes ac-gn-searchform-slide {
            0% {
                -webkit-transform: translate3d(100px, 0, 0);
                transform: translate3d(100px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.12, 0.87, 0.15, 1);
                animation-timing-function: cubic-bezier(0.12, 0.87, 0.15, 1)
            }
            100% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @-webkit-keyframes ac-gn-searchform-fade {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: cubic-bezier(0.67, 0, 0.33, 1);
                animation-timing-function: cubic-bezier(0.67, 0, 0.33, 1)
            }
            100% {
                opacity: 1
            }
        }

        @keyframes ac-gn-searchform-fade {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: cubic-bezier(0.67, 0, 0.33, 1);
                animation-timing-function: cubic-bezier(0.67, 0, 0.33, 1)
            }
            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes ac-gn-searchinput-fade {
            0% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        @keyframes ac-gn-searchinput-fade {
            0% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        #ac-globalnav input,
        #ac-globalnav button {
            outline: none;
            border: none;
            background-color: transparent
        }

        #ac-globalnav .ac-gn-searchform {
            height: 44px;
            line-height: 44px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform {
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                height: 2.11765em;
                line-height: 2.11765em;
                padding: 0
            }
        }

        #ac-globalnav.searchshow .ac-gn-searchform {
            -webkit-animation: ac-gn-searchform-fade 0.4s 0.4s both;
            animation: ac-gn-searchform-fade 0.4s 0.4s both
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav.searchshow .ac-gn-searchform {
                -webkit-animation: none;
                animation: none
            }
        }

        #ac-globalnav .ac-gn-searchform-wrapper {
            position: relative;
            z-index: 2
        }

        #ac-globalnav.searchshow .ac-gn-searchform-wrapper {
            -webkit-animation: ac-gn-searchform-slide 1s 0.4s both;
            animation: ac-gn-searchform-slide 1s 0.4s both
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav.searchshow .ac-gn-searchform-wrapper {
                -webkit-animation: none;
                animation: none
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-wrapper {
                right: 200%;
                background: #282828;
                border-radius: 4px;
                padding: 0;
                height: 2.11765em
            }
            #ac-globalnav.searchopen .ac-gn-searchform-wrapper {
                right: auto
            }
        }

        #ac-globalnav .ac-gn-searchform-input {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-size: 17px;
            line-height: 1.29412;
            letter-spacing: -.021em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color: #fff;
            outline: none;
            width: calc(100% - 42px - 16px);
            height: 44px;
            position: absolute;
            padding: 0 17px 0 42px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-input {
                font-size: 17px;
                line-height: 1.23543;
                font-weight: 400;
                letter-spacing: -.022em;
                font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
            }
        }

        #ac-globalnav .ac-gn-searchform-input:focus[data-focus-method="key"] {
            -webkit-box-shadow: inset 0 0 0 3px rgba(131, 192, 253, 0.5);
            box-shadow: inset 0 0 0 3px rgba(131, 192, 253, 0.5);
            outline: none;
            border-radius: 4px
        }

        #ac-globalnav .ac-gn-searchform-input:focus[data-focus-method="key"][data-focus-method="mouse"]:not(input):not(textarea):not(select),
        #ac-globalnav .ac-gn-searchform-input:focus[data-focus-method="key"][data-focus-method="touch"]:not(input):not(textarea):not(select) {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .touch#ac-globalnav.searchshow .ac-gn-searchform-input {
            -webkit-transform: translateY(-200px);
            transform: translateY(-200px)
        }

        .touch#ac-globalnav.searchopen .ac-gn-searchform-input {
            -webkit-animation: ac-gn-searchinput-fade 0.2s both;
            animation: ac-gn-searchinput-fade 0.2s both
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-input {
                height: 1.71409em;
                padding: 3px 30px 4px;
                width: calc(100% - (30px * 2));
                position: relative
            }
            #ac-globalnav .ac-gn-searchform-input:focus[data-focus-method="key"] {
                -webkit-box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                outline: none;
                border-radius: 4px
            }
            #ac-globalnav .ac-gn-searchform-input:focus[data-focus-method="key"][data-focus-method="mouse"]:not(input):not(textarea):not(select),
            #ac-globalnav .ac-gn-searchform-input:focus[data-focus-method="key"][data-focus-method="touch"]:not(input):not(textarea):not(select) {
                -webkit-box-shadow: none;
                box-shadow: none
            }
            .touch#ac-globalnav.searchshow .ac-gn-searchform-input {
                -webkit-transform: none;
                transform: none
            }
            .touch#ac-globalnav.searchopen .ac-gn-searchform-input {
                -webkit-animation: none;
                animation: none
            }
        }

        #ac-globalnav .ac-gn-searchform-input::-webkit-input-placeholder {
            color: #888;
            opacity: 1
        }

        #ac-globalnav .ac-gn-searchform-input:-ms-input-placeholder {
            color: #888;
            opacity: 1
        }

        #ac-globalnav .ac-gn-searchform-input::-ms-input-placeholder {
            color: #888;
            opacity: 1
        }

        #ac-globalnav .ac-gn-searchform-input::placeholder {
            color: #888;
            opacity: 1
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-input::-webkit-input-placeholder {
                color: #999
            }
            #ac-globalnav .ac-gn-searchform-input:-ms-input-placeholder {
                color: #999
            }
            #ac-globalnav .ac-gn-searchform-input::-ms-input-placeholder {
                color: #999
            }
            #ac-globalnav .ac-gn-searchform-input::placeholder {
                color: #999
            }
        }

        #ac-globalnav .ac-gn-searchform-input::-ms-clear {
            display: none;
            width: 0;
            height: 0
        }

        #ac-globalnav .ac-gn-searchform-submit {
            left: 0;
            position: absolute;
            z-index: 1;
            top: 0;
            width: 40px;
            height: 44px;
            cursor: pointer;
            background-repeat: no-repeat;
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_large.svg");
            background-position: 50% 50%;
            background-repeat: no-repeat;
            -webkit-transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1)
        }

        #ac-globalnav.no-svg .ac-gn-searchform-submit {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_large.png")
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-submit {
                background-repeat: no-repeat;
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_small.svg")
            }
            #ac-globalnav.no-svg .ac-gn-searchform-submit {
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/image_small.png")
            }
        }

        #ac-globalnav .ac-gn-searchform-submit:hover,
        #ac-globalnav .ac-gn-searchform-submit:active {
            opacity: .65
        }

        #ac-globalnav.touch .ac-gn-searchform-submit:hover,
        #ac-globalnav.touch .ac-gn-searchform-submit:active {
            opacity: 1
        }

        #ac-globalnav .ac-gn-searchform-submit:focus {
            outline-offset: -7px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-submit:focus {
                -webkit-box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                outline: none;
                border-radius: 4px
            }
            #ac-globalnav .ac-gn-searchform-submit:focus[data-focus-method="mouse"]:not(input):not(textarea):not(select),
            #ac-globalnav .ac-gn-searchform-submit:focus[data-focus-method="touch"]:not(input):not(textarea):not(select) {
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        #ac-globalnav .ac-gn-searchform-submit[disabled] {
            opacity: 1;
            cursor: default
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-submit {
                width: 26px;
                height: 2.11765em;
                background-position: left 8px center
            }
        }

        #ac-globalnav .ac-gn-searchform-reset {
            display: none;
            position: absolute;
            z-index: 1;
            top: 0;
            cursor: pointer
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-reset {
                right: 0;
                cursor: default;
                display: block;
                opacity: 0;
                height: 2.11765em;
                width: 30px;
                height: 100%;
                pointer-events: none;
                -webkit-transition: opacity 0.3s ease;
                transition: opacity 0.3s ease
            }
            #ac-globalnav .ac-gn-searchform-reset:focus {
                outline: none
            }
            #ac-globalnav .ac-gn-searchform-reset:focus .ac-gn-searchform-reset-background {
                -webkit-box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                box-shadow: 0 0 0 3px rgba(131, 192, 253, 0.5);
                outline: none;
                border-radius: 50%
            }
            #ac-globalnav .ac-gn-searchform-reset:focus .ac-gn-searchform-reset-background[data-focus-method="mouse"]:not(input):not(textarea):not(select),
            #ac-globalnav .ac-gn-searchform-reset:focus .ac-gn-searchform-reset-background[data-focus-method="touch"]:not(input):not(textarea):not(select) {
                -webkit-box-shadow: none;
                box-shadow: none
            }
            #ac-globalnav .ac-gn-searchform-reset:focus:active .ac-gn-searchform-reset-background {
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-reset-background {
                right: 8px;
                display: block;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                position: absolute
            }
        }

        @media only screen and (max-width:767px) and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform-reset-background {
                width: 15px;
                height: 16px;
                background-size: 15px 16px;
                background-repeat: no-repeat;
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/reset_small.svg")
            }
            #ac-globalnav.no-svg .ac-gn-searchform-reset-background {
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/reset_small.png")
            }
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchform.with-reset .ac-gn-searchform-reset {
                cursor: pointer;
                opacity: 1;
                pointer-events: auto
            }
        }

        @-webkit-keyframes ac-gn-searchresults-show {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1
            }
        }

        @keyframes ac-gn-searchresults-show {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes ac-gn-searchresults-show-small {
            0% {
                -webkit-transform: translateY(-44px);
                transform: translateY(-44px);
                opacity: 0
            }
            100% {
                -webkit-transform: none;
                transform: none;
                opacity: 1
            }
        }

        @keyframes ac-gn-searchresults-show-small {
            0% {
                -webkit-transform: translateY(-44px);
                transform: translateY(-44px);
                opacity: 0
            }
            100% {
                -webkit-transform: none;
                transform: none;
                opacity: 1
            }
        }

        @-webkit-keyframes ac-gn-searchresults-items-show {
            0% {
                opacity: 0;
                -webkit-transform: translateX(100px);
                transform: translateX(100px);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        @keyframes ac-gn-searchresults-items-show {
            0% {
                opacity: 0;
                -webkit-transform: translateX(100px);
                transform: translateX(100px);
                -webkit-animation-timing-function: ease;
                animation-timing-function: ease
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        #ac-globalnav .ac-gn-searchresults {
            font-size: 14px;
            line-height: 2;
            font-weight: 400;
            letter-spacing: -.01em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            display: none;
            background: #fff;
            border-top: none;
            color: #888;
            max-height: calc(100% - 44px);
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults {
                font-size: 14px;
                line-height: 3.07143;
                letter-spacing: -.016em;
                font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
            }
        }

        #ac-globalnav.searchshow .ac-gn-searchresults,
        #ac-globalnav.searchopen .ac-gn-searchresults,
        #ac-globalnav.searchhide .ac-gn-searchresults {
            display: block
        }

        #ac-globalnav.searchshow .ac-gn-searchresults {
            -webkit-animation: ac-gn-searchresults-show .2s .2s both;
            animation: ac-gn-searchresults-show .2s .2s both
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults {
                background: transparent;
                border: none;
                color: #999;
                max-height: none;
                padding-bottom: 0;
                position: absolute;
                top: 4.85714em;
                left: 0;
                bottom: 0;
                right: 0;
                z-index: 1
            }
            #ac-globalnav.searchshow .ac-gn-searchresults {
                -webkit-animation: ac-gn-searchresults-show-small .36s cubic-bezier(0.32, 0.08, 0.24, 1) both;
                animation: ac-gn-searchresults-show-small .36s cubic-bezier(0.32, 0.08, 0.24, 1) both
            }
            #ac-globalnav.searchopen .ac-gn-searchresults {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
            #ac-globalnav.searchhide .ac-gn-searchresults {
                animation: ac-gn-searchresults-show-small .36s cubic-bezier(0.8, 0, 0.68, 0.92) reverse both
            }
        }

        #ac-globalnav .ac-gn-searchresults-section {
            border-top: 1px solid #d6d6d6;
            margin: 0 40px;
            padding: 24px 0 18px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-section {
                border-color: #282828;
                margin: 0;
                padding: 19px 0 15px
            }
        }

        #ac-globalnav .ac-gn-searchresults-section:first-child {
            border-top: none
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-section-wrapper {
                padding: 0 40px;
                max-width: 584px;
                margin: 0 auto
            }
        }

        #ac-globalnav .ac-gn-searchresults-header {
            font-size: 11px;
            line-height: 1;
            letter-spacing: -.008em;
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            text-transform: uppercase;
            color: #888
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-header {
                color: #999
            }
        }

        #ac-globalnav .ac-gn-searchresults-list {
            list-style: none;
            padding-top: 5px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-list {
                padding-top: 8px
            }
        }

        #ac-globalnav .ac-gn-searchresults-item {
            margin: 6px -32px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-item {
                margin: 0;
                border-top: 1px solid #282828
            }
            #ac-globalnav .ac-gn-searchresults-item:first-child {
                border-top: none
            }
        }

        #ac-globalnav .ac-gn-searchresults-link {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: #888;
            display: block;
            padding: 0 48px;
            text-decoration: none
        }

        #ac-globalnav .ac-gn-searchresults-link b {
            color: #333
        }

        #ac-globalnav .ac-gn-searchresults-link.current {
            background-color: #f2f2f2
        }

        #ac-globalnav .ac-gn-searchresults-link.current,
        #ac-globalnav .ac-gn-searchresults-link.current b {
            color: #0070c9
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-link {
                color: #999;
                padding: 0
            }
            #ac-globalnav .ac-gn-searchresults-link b {
                color: #fff
            }
            #ac-globalnav .ac-gn-searchresults-link.current {
                background-color: transparent
            }
            #ac-globalnav .ac-gn-searchresults-link.current,
            #ac-globalnav .ac-gn-searchresults-link.current b {
                color: #6bf
            }
        }

        #ac-globalnav .ac-gn-searchresults-link-suggestions {
            background-repeat: no-repeat;
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/suggestions_large.svg");
            padding-left: 70px;
            background-position: 48px -1px
        }

        #ac-globalnav.no-svg .ac-gn-searchresults-link-suggestions {
            background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/suggestions_large.png")
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-link-suggestions {
                background-repeat: no-repeat;
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/suggestions_small.svg")
            }
            #ac-globalnav.no-svg .ac-gn-searchresults-link-suggestions {
                background-image: url("https://www.apple.com/ac/globalnav/4/en_US/images/globalnav/search/suggestions_small.png")
            }
        }

        #ac-globalnav .ac-gn-searchresults-link-suggestions.current {
            background-position: 48px -33px
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-link-suggestions {
                background-position: left -1px;
                padding-left: 18px
            }
            #ac-globalnav .ac-gn-searchresults-link-suggestions.current {
                background-position: left -44px
            }
        }

        #ac-globalnav .ac-gn-searchresults-link-defaultlinks {
            color: #3c4043
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-link-defaultlinks {
                color: #fff
            }
        }

        #ac-globalnav .ac-gn-searchresults-animated {
            -webkit-animation: ac-gn-searchresults-items-show 0.4s both;
            animation: ac-gn-searchresults-items-show 0.4s both
        }

        #ac-globalnav.searchhide .ac-gn-searchresults-animated {
            -webkit-animation: none;
            animation: none
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-animated {
                -webkit-animation: none;
                animation: none
            }
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(1) {
            -webkit-animation-delay: .22s;
            animation-delay: .22s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(2) {
            -webkit-animation-delay: .24s;
            animation-delay: .24s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(3) {
            -webkit-animation-delay: .26s;
            animation-delay: .26s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(4) {
            -webkit-animation-delay: .28s;
            animation-delay: .28s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(5) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(6) {
            -webkit-animation-delay: .32s;
            animation-delay: .32s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(7) {
            -webkit-animation-delay: .34s;
            animation-delay: .34s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(8) {
            -webkit-animation-delay: .36s;
            animation-delay: .36s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(9) {
            -webkit-animation-delay: .38s;
            animation-delay: .38s
        }

        #ac-globalnav .ac-gn-searchresults-animated:nth-child(10) {
            -webkit-animation-delay: .4s;
            animation-delay: .4s
        }

        #ac-globalnav .ac-gn-searchresults-animated.ac-gn-searchresults-header {
            -webkit-animation-delay: .2s;
            animation-delay: .2s
        }

        #ac-globalnav .ac-gn-searchresults-noresults {
            display: block;
            padding: 0 32px;
            color: #888;
            line-height: 1.25;
            white-space: normal
        }

        @media only screen and (max-width:767px) {
            #ac-globalnav .ac-gn-searchresults-noresults {
                color: #ccc;
                padding: 0
            }
        }

        #ac-globalnav .ac-gn-searchresults-count {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(0px 0 99.9% 99.9%);
            clip-path: inset(0px 0 99.9% 99.9%);
            overflow: hidden;
            height: 1px;
            width: 1px;
            padding: 0;
            border: 0
        }

        .main-container {
            min-width: 1024px;
            width: 100%;
            position: relative;
            display: block;
        }

        .recent-comments {
            position: relative
        }

        .recent-comments .loading.load {
            position: relative;
            height: 100px
        }

        .recent-comments .loading.spinner:before {
            top: 40%;
            left: 45%
        }

        .recent-comments ul.load {
            height: 400px;
            position: relative
        }

        .recent-comments ul.spinner:before {
            top: 48%;
            left: 46%
        }

        .recent-comments ul li {
            list-style-type: none;
            position: relative;
            padding: 0 0 10px 0
        }

        .recent-comments ul li:last-child {
            padding: 0
        }

        .recent-comments .rc_avatar {
            position: absolute;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            overflow: hidden
        }

        .recent-comments .rc_avatar img {
            width: 100%;
            height: 100%
        }

        .recent-comments .rc_block {
            margin: 0 0 0 50px;
            display: block;
            font-size: 15px;
            line-height: 1.5
        }

        .recent-comments .rc_header {
            overflow: hidden;
            white-space: nowrap
        }

        .recent-comments .rc_content {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 15px;
            font-weight: normal;
            line-height: 1.4
        }

        .recent-comments .rc_more a {
            color: #3c4043
        }

        .recent-comments .rc_content a {
            color: #0070c9
        }

        .recent-comments .rc_user {
            font-size: 15px
        }

        .recent-comments .rc_user a {
            color: #212121
        }

        .recent-comments .rc_date {
            font-size: 13px;
            padding-left: 7px
        }

        .recent-comments .rc_date a {
            color: #777
        }

        .tb .rc_page {
            background: #f5f5f5;
            border-top: 1px solid #ccc;
            border-color: rgba(0, 0, 0, .2);
            padding: 10px 0;
            text-align: center
        }

        .tb .rc_page button {
            cursor: pointer;
            outline: none;
            background: #f5f5f5;
            border: 1px solid rgba(0, 0, 0, .2);
            padding: 7px 10px;
            border-radius: 2px
        }

        .tb .rc_page button:hover {
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            border-color: #c6c6c6;
            background-color: #ffffff
        }

        .ad-top,
        .ad-footer,
        .main-wrapper {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 22px;
            position: relative
        }

        .ad-top .widget,
        .ad-footer .widget {
            float: left;
            width: 100%;
            margin-bottom: 15px;
            position: relative
        }

        .ad-top .widget a,
        .ad-footer .widget a {
            display: flex
        }

        .ad-top .widget img,
        .ad-footer .widget img {
            width: 100%;
            height: auto
        }

        #ad-middle {
            float: left;
            width: 100%;
            margin-bottom: 15px
        }

        .main-wrapper .widget {
            float: left;
            width: 100%;
            position: relative;
            margin-bottom: 15px
        }

        .main-wrapper .Blog {
            margin-bottom: 0
        }

        .main {
            float: left;
            width: 100%;
            position: relative
        }

        .breadcrumbs {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .breadcrumbs.homepage {
            border-bottom: 3px solid rgba(0, 0, 0, 0.12);
            padding-bottom: 10px;
            margin-bottom: 15px
        }

        .breadcrumbs ul,
        .breadcrumbs .search-label {
            font-size: 16px;
            color: #3c4043;
            text-align: left;
            padding: 0 0 10px 0;
            margin: 0 0 15px 0;
            border-bottom: 3px solid rgba(0, 0, 0, 0.12);
            position: relative;
            display: block
        }

        .breadcrumbs ul span.name {
            padding-bottom: 10px;
            border-bottom: 3px solid #0070c9
        }

        .breadcrumbs .last-item,
        .breadcrumbs .search-label a,
        .breadcrumbs .search-label span {
            border-bottom: 3px solid #0070c9;
            padding: 0 0 10px 0
        }

        .breadcrumbs ul li:before,
        .breadcrumbs .search-label a:after {
            font-family: Material Icons;
            content: '\e409';
            font-size: 18px;
            font-style: normal;
            font-weight: normal;
            vertical-align: bottom
        }

        .breadcrumbs ul li:first-child:before,
        .breadcrumbs .tg-menu ul li:before {
            content: unset
        }

        .breadcrumbs .title {
            border-bottom: 3px solid #0070c9;
            padding-bottom: 9px;
            position: absolute
        }

        .breadcrumbs h1,
        .breadcrumbs h3 {
            margin-bottom: 15px;
            font-size: larger;
            font-weight: normal;
            text-transform: uppercase;
            position: relative
        }

        .breadcrumbs h1:before,
        .breadcrumbs h3:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 7px;
            bottom: 9px;
            background-image: -moz-linear-gradient(left, #0799ff #21d4fd);
            background-image: -webkit-gradient(linear, left top, right top, from(#0799ff), to(#21d4fd));
            background-image: -webkit-linear-gradient(left, #0799ff, #21d4fd);
            background-image: -o-linear-gradient(left, #0799ff, #21d4fd)
        }

        .breadcrumbs h1 span,
        .breadcrumbs h3 span {
            background: #e6ecf0;
            position: relative;
            padding-right: 15px
        }

        .breadcrumbs .search-label h1.search-query {
            color: #0070c9
        }

        .breadcrumbs ul li {
            display: inline-block;
            position: relative
        }

        .breadcrumbs a {
            color: #3c4043
        }

        .breadcrumbs ul li a:hover {
            border-bottom: 3px solid #0070c9;
            padding-bottom: 10px
        }

        .featured {
            float: left;
            width: 100%
        }

        .featured .widget {
            margin-bottom: 20px
        }

        .featured_post .item {
            position: relative;
            display: block;
            float: left;
            width: 100%
        }

        .featured_post .item .post_thumb {
            float: left;
            display: block;
            width: 100%;
            height: auto;
            max-height: 400px;
            overflow: hidden
        }

        .featured_post .item .post_thumb:before {
            display: block;
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            height: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
            content: '';
            z-index: 1
        }

        .featured_post .item .post_thumb img {
            height: 100%;
            width: 100%;
            object-fit: cover
        }

        .featured_post .item .post_content {
            position: absolute;
            bottom: 20px;
            left: 5%;
            max-width: 50%;
            z-index: 1
        }

        .featured_post .item .post_content,
        .featured_post .item .post_content a {
            color: #ffffff
        }

        .featured_post .item .post_content a.post_jump_link {
            background-color: rgba(0, 0, 0, .85);
            padding: 0 15px;
            margin-top: 20px;
            text-transform: uppercase;
            font-weight: normal;
            font-size: 12px;
            line-height: 38px;
            display: inline-block;
            vertical-align: middle;
            position: relative
        }

        .featured_post .item .post_content a.post_jump_link:after {
            font-family: Material Icons;
            content: '\e5c8';
            font-size: 20px;
            color: #ffffff;
            vertical-align: middle;
            padding-left: 5px
        }

        .featured_post .item .post_title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 22px;
            font-weight: normal;
            line-height: 26px
        }

        .featured_post .item .post_title:hover {
            color: #0070c9
        }

        .featured_post .item .post_meta {
            font-size: 14px;
            font-weight: normal;
            padding-top: 10px
        }

        .featured_post .item .post_meta .post_date {
            padding-right: 8px;
            line-height: 1.5
        }

        .featured_post .item .post_meta .post_date:before {
            font-family: Material Icons;
            content: '\e192';
            font-size: 13px;
            color: #ffffff;
            vertical-align: text-bottom;
            padding-right: 3px
        }

        .featured_post .item .post_meta .post_label:before {
            font-family: Material Icons;
            content: '\e54e';
            font-size: 13px;
            color: #ffffff;
            vertical-align: middle;
            padding-right: 3px
        }

        .featured_post .item .post_snippet {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 15px;
            font-weight: normal;
            line-height: 1.4;
            padding-top: 10px
        }

        .all_posts .row {
            margin: 0 -7.5px;
            display: inline-table
        }

        .col-md-4 {
            padding: 0 7.5px 15px 7.5px;
            width: 33.33%;
            display: inline-block;
            vertical-align: top;
            position: relative;
            box-sizing: border-box
        }

        .card {
            background-color: #ffffff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            height: 435px;
            overflow: hidden;
            position: relative;
            border: 1px solid #e6ecf0;
        }

        .card.post-wrap {
            padding: 10px
        }

        .card .card-header .author {
            position: absolute;
            top: 0;
            left: 0;
            padding: 21px 28px;
            width: 100%;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0.6)), color-stop(1, rgba(0, 0, 0, 0)));
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0));
            background: -moz-linear-gradient(center top, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='rgba(0,0,0,0)', endColorstr='rgba(0,0,0,0.6)')
        }

        .all_posts .card .card-header .author a .avatar {
            width: 40px;
            height: 40px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            padding: 2px;
            background: #ffffff;
            vertical-align: middle
        }

        .card .card-header .author a .name {
            color: #ffffff;
            margin-left: 5px
        }

        .card .content {
            padding: 15px
        }

        .card .content .title {
            font-size: 20px;
            font-weight: normal;
            line-height: normal;
            margin-bottom: 10px
        }

        .card .content .title a {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card .content .title a:visited {
            color: #707070
        }

        .card .content .meta {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding-bottom: 10px;
            font-size: 15px;
            font-weight: normal
        }

        .card .content .meta .date {
            font-size: 14px
        }

        .card .content .meta .cmt-num:before {
            content: '-';
            padding: 0 5px 0 3px
        }

        .card .content .post-entry {
            font-size: 14px;
            font-weight: normal;
            line-height: 1.5
        }

        .card .card-footer {
            border-top: 1px solid #e6e6e6;
            padding-left: 15px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #ffffff
        }

        .card .card-footer .parmalink {
            text-transform: uppercase;
            font-weight: normal;
            font-size: 12px;
            line-height: 42px;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            padding-right: 30px
        }

        .card .card-footer .parmalink:hover {
            color: #3c4043
        }

        .card .card-footer .parmalink:after {
            font-family: Material Icons;
            content: '\e5c8';
            font-size: 20px;
            color: hsl(0, 0%, 53.3%);
            position: absolute;
            right: 5px
        }

        .card .card-footer .share-wrap {
            border-left: 1px solid #e6e6e6;
            text-align: center;
            cursor: pointer;
            position: relative
        }

        .card .card-footer .pull-right {
            float: right
        }

        .card .card-footer .share-wrap .share-button {
            line-height: 42px;
            width: 42px;
            height: 42px;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            display: block
        }

        .card .card-footer .share-wrap .share-button:before {
            font-family: Material Icons;
            content: '\e80d';
            font-size: 18px;
            color: hsl(0, 0%, 53.3%)
        }

        .card .card-footer .share-wrap .share-link-wrap {
            position: absolute;
            bottom: 100%;
            right: 15px;
            margin-bottom: 5px;
            background: #ffffff;
            -webkit-border-radius: 2px 2px 0 2px;
            -moz-border-radius: 2px 2px 0 2px;
            border-radius: 2px 2px 0 2px;
            box-shadow: 0 -1px 4px 0 rgba(0, 0, 0, 0.1), 0 2px 3px -2px rgba(0, 0, 0, 0.2), 0 0 7px 0 rgba(0, 0, 0, 0.12);
            -webkit-transform: scale(0, 0);
            -moz-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            -o-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition: all 0.25s;
            -moz-transition: all 0.25s;
            -ms-transition: all 0.25s;
            -o-transition: all 0.25s;
            transition: all 0.25s;
            transform-origin: 100% 100%
        }

        .all_posts .card .card-footer .share-wrap .share-link-wrap.opened {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1)
        }

        .card .card-footer .share-wrap .share-link-wrap span {
            display: block;
            text-align: left;
            padding: 8px 15px;
            font-size: 15px;
            white-space: nowrap;
        }

        .card .card-footer .share-wrap .share-link-wrap span:hover {
            background-color: rgb(230, 230, 230)
        }

        .card-header {
            position: relative;
        }

        .card-header .featured-image {
            display: flex;
            position: relative;
            padding-bottom: 56.25%
        }

        .featured-image-container {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center;
            object-fit: cover
        }

        .card-header .tag-list {
            display: block;
            position: absolute;
            z-index: 2;
            left: 10px;
            bottom: 10px;
            padding: 0 7px;
            opacity: .8;
            border-radius: 3px;
            background: #000;
            line-height: 24px;
            font-size: 13px
        }

        .card-header .tag-list a {
            padding: 0;
            color: #fff
        }

        #article {
            background-color: #ffffff;
            float: left;
            width: 100%;
            margin: auto;
            margin-bottom: 15px;
            display: block;
            position: relative;
            padding: 15px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            border: 1px solid #e6ecf0;
        }

        .article-body {
            float: left;
            width: 100%
        }

        .post-item {
            float: left;
            width: 100%;
            margin: auto;
            position: relative;
            display: block
        }

        .post-item .post-header {
            padding-bottom: 20px
        }

        .post-item .post-header .nread {
            display: block;
            position: relative;
            font-size: 15px;
            font-style: italic;
            margin-top: 20px
        }

        .post-item .post-header .post-title {
            font-size: x-large;
            font-weight: normal;
            line-height: normal
        }

        .post-item .post-header .post-description {
            padding-top: 18px
        }

        .post-item .post-header .post-description p {
            font-size: 15px;
            font-weight: bold;
            line-height: 1.5em
        }

        #related-article {
            position: relative;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.12)
        }

        #related-article ul {
            margin: 15px 0 15px 15px
        }

        #related-article ul li {
            list-style-type: disc;
            font-weight: normal;
            font-size: 15px;
            line-height: 1.5em
        }

        #related-article ul li a:after {
            content: unset
        }

        .post-body {
            display: block;
            font-size: 15px;
            font-weight: normal;
            line-height: 1.5em
        }

        .post-body a {
            color: #0070c9
        }

        .post-body ol,
        .post-body ul {
            margin: 15px 0 15px 30px
        }

        .post-body ul>ul {
            margin: 15px 0 15px 15px
        }

        .post-body ul li {
            list-style-type: disc
        }

        .post-body ol li {
            list-style-type: decimal
        }

        .post-body img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            opacity: 1;
            transition: .5s ease
        }

        .post-body .tr-caption-container,
        .post-body .separator {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            clear: both !important;
            text-align: center !important
        }

        .post-body .share-fb,
        .post-body .share-gg {
            display: inline-block;
            width: 70px;
            height: 20px;
            cursor: pointer
        }

        .post-body .share-fb {
            background: url(https://3.bp.blogspot.com/-L4UvEgK3YK4/W9moHbMg9QI/AAAAAAAANLE/FsQ-5cVjTCgJlPbUa5JSXvff15VhFR8uQCLcBGAs/s000/share-fb.gif) no-repeat
        }

        .post-body .share-gg {
            background: url(https://4.bp.blogspot.com/-Guvngyj6kiQ/W9m15u1tboI/AAAAAAAANLQ/ocBuSixCdbwp9MyhBXwkMI93juRCdZvUACLcBGAs/s000/share-gg.gif) no-repeat
        }

        .post-body .shareBtn {
            transition: all 0.5s ease 0s;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
        }

        .post-body .tr-caption-container:hover .shareBtn,
        .post-body .separator:hover .shareBtn {
            opacity: 1
        }

        .post-body .tr-caption-container:hover img,
        .post-body .separator:hover img {
            opacity: 0.3
        }

        .post-body .tr-caption-container a,
        .post-body .separator a {
            display: inline-block;
            cursor: default
        }

        .post-body .video-container {
            position: relative;
            padding-bottom: 56.25%
        }

        .post-body .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .post-body .tr-caption {
            font-size: 15px;
            color: #777;
            line-height: 1.6;
            padding: 10px 0;
            border-bottom: 1px solid #e7e8ea
        }

        .post-body blockquote {
            color: #666;
            border-left: 3px solid #0070c9;
            padding-left: 15px
        }

        .box_tin {
            background-color: #f5f8fa;
            padding: 15px;
            border: 1px solid #f5f8fa;
            transition: border-color .3s;
            border-radius: 3px;
            font-size: 15px
        }

        .box_tin:hover {
            border-color: #0af;
            transition: border-color .3s
        }

        .box_tin p {
            font-size: 16px;
            font-weight: normal;
            line-height: 1.6em;
        }

        .post-body .category {
            margin-top: 25px;
            background-color: #E4F0F6;
            color: #3c4043;
            padding: 10px;
            border: 1px solid #E4F0F6;
            transition: border-color .3s;
            border-radius: 3px
        }

        .post-body .category:hover {
            border-color: #0af;
            transition: border-color .3s
        }

        .post-body .category span.title {
            display: block;
            padding-bottom: 10px;
            text-align: center;
            font-size: large;
            font-weight: normal
        }

        .post-body ul#chapter {
            margin: 0 0 0 20px
        }

        .post-body .popup {
            color: #0070c9;
            cursor: pointer
        }

        .post-body table {
            width: 100%
        }

        .post-body a.down {
            background: #4285f4;
            border-radius: 3px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26);
            color: #ffffff;
            display: inline-block;
            line-height: 36px;
            min-width: 54px;
            padding: 0 16px;
            text-align: center;
            white-space: nowrap;
            font-size: 15px
        }

        .post-body a.down:hover {
            background-color: #4285f4;
            color: #ffffff
        }

        .inline-ad {
            margin-top: 20px
        }

        .post-button-container {
            float: left;
            width: 100%;
            position: relative;
            margin: 20px 0 15px 0;
            text-align: center
        }

        .post-button-container .post-button {
            background-color: #ffffff;
            display: inline-flex;
            position: relative;
            padding: 5px;
            border-radius: 3px;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26)
        }

        .post-button-container .post-button:hover {
            -webkit-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12)
        }

        .post-button-container .post-button a {
            display: inline-flex;
            margin-right: 20px
        }

        .post-button-container span.left,
        .post-button-container span.right,
        .post-button-container span.share,
        .post-button-container span.share-button {
            display: inline-flex
        }

        .post-button-container span.share-button {
            padding: 2px 0;
            cursor: pointer
        }

        .post-button-container span.left {
            margin-right: 20px
        }

        .post-button-container a.home:before,
        .post-button-container a.left:before,
        .post-button-container span.left:before,
        .post-button-container a.right:after,
        .post-button-container span.right:after,
        .post-button-container .share-button:before {
            font-family: Material Icons;
            font-size: 24px;
            font-style: normal;
            font-weight: normal
        }

        .post-button-container a.home:before {
            content: '\e88a';
            color: hsl(0, 0%, 53.3%)
        }

        .post-button-container a.left:before {
            content: '\e5c4';
            color: hsl(0, 0%, 53.3%)
        }

        .post-button-container span.left:before {
            content: '\e5c4';
            color: #aaa
        }

        .post-button-container a.right:after {
            content: '\e5c8';
            color: hsl(0, 0%, 53.3%)
        }

        .post-button-container span.right:after {
            content: '\e5c8';
            color: #aaa
        }

        .post-button-container span.share-button:before {
            content: '\e80d';
            color: hsl(0, 0%, 53.3%);
            font-size: 21px
        }

        .post-button-container .share-menu {
            background: #ffffff;
            position: absolute;
            top: 35px;
            left: 0;
            width: 200px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            text-align: left;
            list-style-type: none;
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12);
            z-index: 8;
            -webkit-transform: scale(0, 0);
            -moz-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            -o-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition: all 0.25s;
            -moz-transition: all 0.25s;
            -ms-transition: all 0.25s;
            -o-transition: all 0.25s;
            transition: all 0.25s;
            transform-origin: center center
        }

        .post-button-container .share-menu.opened {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1)
        }

        .post-button-container .share-menu li {
            padding: 0 20px;
            line-height: 35px;
            font-size: 15px;
            cursor: pointer
        }

        .post-footer {
            float: left;
            position: relative;
            width: 100%;
            margin: 15px 0 20px 0
        }

        .post-footer .social-sharing-widgets {
            display: block;
            position: relative
        }

        .post-footer .ma-share {
            cursor: pointer
        }

        .post-footer .ma-share:before {
            font-family: Material Icons;
            content: '\e0be';
            background: #3c4043;
            margin-right: 5px;
            vertical-align: text-bottom;
            text-align: center;
            color: #ffffff;
            height: 20px;
            line-height: 20px;
            width: 27px;
            float: left;
            font-size: 14px;
            border-radius: 2px
        }

        .post-footer .print-email {
            float: right;
            display: inline-block
        }

        .post-footer .printBtn:before {
            font-family: Material Icons;
            content: '\e555';
            float: left;
            background: #005A89;
            width: 27px;
            vertical-align: text-bottom;
            text-align: center;
            color: #ffffff;
            height: 20px;
            line-height: 20px;
            font-size: 14px;
            border-radius: 3px
        }

        .post-footer .printBtn {
            float: right;
            cursor: pointer
        }

        .post-footer .keywords span::before {
            font-family: Material Icons;
            content: '\e54e';
            font-size: 16px;
            color: hsl(0, 0%, 53.3%);
            vertical-align: text-bottom;
            padding-right: 3px
        }

        .post-footer .keywords {
            display: block;
            float: left;
            width: 100%;
            margin-top: 20px
        }

        .post-footer .keywords span {
            line-height: 18px;
        }

        .post-footer .keywords a {
            background: #f0f1f5;
            border: solid 1px #f0f1f5;
            font-size: 14px;
            color: #3c4043;
            display: inline-block;
            padding: 4px 7px;
            margin: 0 0 10px 5px;
            border-radius: 3px;
            transition: border-color .3s
        }

        .post-footer .keywords a:hover {
            background: #448aff;
            border-color: #448aff;
            transition: border-color .3s;
            color: #ffffff
        }

        .about-author {
            margin-top: 20px;
            padding-bottom: 14px;
            font-size: 16px;
            text-align: center;
            clear: both;
            border-radius: 4px;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 2px 0 -2px rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 2px 0 -2px rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 2px 0 -2px rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            -webkit-transition: box-shadow 0.25s;
            -moz-transition: box-shadow 0.25s;
            -ms-transition: box-shadow 0.25s;
            -o-transition: box-shadow 0.25s;
            transition: box-shadow 0.25s
        }

        .about-author:hover {
            -webkit-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12)
        }

        .about-author img {
            margin-top: 15px;
            width: 72px;
            height: 72px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            border: 2px solid rgba(0, 0, 0, 0.12)
        }

        .about-author p.name {
            font-size: 16px;
            font-weight: bold;
            line-height: 0;
            margin: 10px 0
        }

        .about-author p.aboutme {
            text-align: left;
            line-height: 1.5em;
            max-width: 414px;
            margin: auto
        }

        .about-author p.name svg {
            vertical-align: middle;
            max-width: 16px;
            min-width: 16px;
            height: 16px;
            width: 16px
        }

        .about-author p.name svg path {
            fill: #4285F4;
            paint-order: stroke;
            stroke-width: 3px;
            stroke: #ffffff
        }

        .about-author p.social {
            padding-top: 10px;
            line-height: 0
        }

        .about-author a {
            display: inline-block;
        }

        .social-icon {
            height: 32px;
            width: 32px;
            display: inline-block;
            transform: scale(.75)
        }

        .google-plus-icon {
            background: no-repeat url(//i.imgur.com/5PAwXhg.png)
        }

        .twitter-icon {
            background: no-repeat url(//i.imgur.com/PNFln8C.png)
        }

        .facebook-icon {
            background: no-repeat url(//i.imgur.com/2zSBCg9.png)
        }

        .linkedin-icon {
            background: no-repeat url(//i.imgur.com/Du1IUyz.png)
        }

        .reactions {
            float: left;
            width: 100%;
            margin: 15px 0
        }

        .reactions .reactions-label {
            float: left;
            line-height: 36px;
            font-weight: bold
        }

        .reactions .reactions-iframe {
            height: 36px;
            width: 166px;
            background: transparent;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26);
            display: inline-block;
            margin-left: 20px;
            padding: 7px 0;
            border-radius: 3px
        }

        form[name=contact-form] input[type=text],
        form[name=contact-form] input[type=email],
        form[name=contact-form] textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid rgba(0, 0, 0, 0.12);
            transition: border-color .3s;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            font-size: 15px;
        }

        form[name=contact-form] textarea {
            height: 200px
        }

        form[name=contact-form] input[type=text]:hover,
        form[name=contact-form] input[type=email]:hover,
        form[name=contact-form] textarea:hover,
        form[name=contact-form] input[type=button]:hover {
            border-color: #0af;
            transition: border-color .3s
        }

        form[name=contact-form] input[type=button] {
            background: transparent;
            min-width: 80px;
            border: 1px solid rgba(0, 170, 255, .2);
            border-radius: 4px;
            color: #00aaff;
            padding: 8px 10px 8px 5px;
            letter-spacing: .007px;
            white-space: nowrap;
            transition: border-color .3s;
            font-size: 15px;
            outline: none;
            cursor: pointer
        }

        #ContactForm1 {
            display: none !important
        }

        .btn-popup {
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, .85);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
            -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
            transition: opacity 0.3s 0s, visibility 0s 0.3s
        }

        .btn-popup.is-visible {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
            -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
            transition: opacity 0.3s 0s, visibility 0s 0s
        }

        .btn-popup-container {
            position: fixed;
            z-index: 10;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            text-align: left;
            padding: 20px
        }

        .btn-popup-container p {
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
        }

        .btn-popup-container .btn-popup-close {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 30px;
            height: 30px;
            cursor: pointer
        }

        .btn-popup-container .btn-popup-close::before,
        .btn-popup-container .btn-popup-close::after {
            content: '';
            position: absolute;
            top: 12px;
            width: 14px;
            height: 2px;
            background-color: #3c4043
        }

        .btn-popup-container .btn-popup-close::before {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 8px
        }

        .btn-popup-container .btn-popup-close::after {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 8px
        }

        #related-posts {
            background-color: #ffffff;
            float: left;
            width: 100%;
            display: block;
            position: relative;
            margin-bottom: 15px;
            padding: 15px 15px 0 15px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            border: 1px solid #e6ecf0;
        }

        #related-posts h3 {
            padding-bottom: 10px;
            margin-bottom: 15px;
            border-bottom: 3px solid rgba(0, 0, 0, 0.12);
            font-size: 16px;
            font-weight: normal;
        }

        #related-posts h3 a {
            border-bottom: 3px solid #0070c9;
            padding-bottom: 10px;
        }

        #related-posts .post {
            width: 100%;
            float: left;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.12)
        }

        #related-posts .post:last-child {
            padding: 0;
            margin: 0;
            border: 0
        }

        #related-posts .post_thumb {
            float: left;
            width: 40%;
            position: relative
        }

        #related-posts .post_thumb a {
            display: flex;
            position: relative;
            padding-bottom: 56.25%
        }

        #related-posts .post_thumb img {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover
        }

        #related-posts .post_title {
            display: table;
            padding-left: 15px;
            font-size: 22px;
            font-weight: normal
        }

        #related-posts .post_title a {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #related-posts .post_title a:visited {
            color: #707070
        }

        #related-posts .post_meta {
            display: table;
            padding: 8px 0 0 15px
        }

        #related-posts .post_summary {
            display: table;
            padding: 10px 0 0 15px
        }

        #related-posts .post_meta span {
            font-size: 14px
        }

        #related-posts .post_meta .post_published:before {
            content: '-';
            padding: 0 5px
        }

        #related-posts .post_summary p {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 15px
        }

        .sidebar {
            width: 30%;
            float: left;
            display: block;
            position: relative;
            margin: 0 auto;
            padding: 0
        }

        .sidebar .widget {
            float: left;
            width: 100%;
            padding: 15px;
            background-color: #ffffff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            border: 1px solid #e6ecf0;
        }

        .sidebar #HTML101 {
            padding: 0;
            border: 0
        }

        .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative
        }

        .sidebar h3 {
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            padding-bottom: 10px;
            margin-bottom: 13px;
            border-bottom: 3px solid rgba(0, 0, 0, 0.12);
            position: relative
        }

        .sidebar h3 span {
            border-bottom: 3px solid #0070c9;
            padding: 15px 0 10px 0
        }

        .PopularPosts ul li {
            display: block;
            float: left;
            width: 100%;
            position: relative;
            padding-bottom: 13px
        }

        .PopularPosts ul li:last-child {
            padding: 0
        }

        .PopularPosts .item-thumbnail {
            float: left;
            width: 45%;
            margin-right: 12px
        }

        .PopularPosts .item-thumbnail a {
            display: flex;
            padding-bottom: 56.25%;
            position: relative
        }

        .PopularPosts .item-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .PopularPosts .item-title {
            display: table;
            font-size: 15px
        }

        .PopularPosts .item-title a {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-weight: normal;
        }

        .PopularPosts ul li a.current {
            color: #707070
        }

        .PopularPosts .item-title a:hover {
            color: #0070c9
        }

        .PopularPosts .item-title a:visited {
            color: #707070
        }

        .PopularPosts .item-meta {
            display: table;
            font-size: 14px;
            padding-top: 8px;
            line-height: 10px
        }

        .PopularPosts .item-published {
            display: none
        }

        .PopularPosts .item-published:before {
            content: '-';
            padding: 0 5px
        }

        .PopularPosts .item-snippet {
            padding-top: 10px;
            display: none;
        }

        .PopularPosts .item-snippet p {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 15px
        }

        pre.code {
            display: block;
            font-size: 15px;
            text-align: left;
            overflow: auto;
            border: 1px solid rgba(0, 0, 0, 0.12);
            margin: auto;
            padding: 16px;
            line-height: 1.6em;
            white-space: nowrap
        }

        .dds button.dropdwn,
        .tb button.dropsss {
            background: transparent;
            border: none;
            cursor: pointer;
            margin: 5px 5px 5px 0;
            padding: 8px;
            outline: none
        }

        .dds button.dropdwn:before {
            font-family: Material Icons;
            content: '\e5c3';
            font-size: 24px;
            color: hsl(0, 0%, 53.3%)
        }

        .dds-menu {
            position: absolute;
            top: 50px;
            font-size: 15px;
            background: #fafafa;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.4);
            display: none;
            z-index: 9;
            min-width: 160px
        }

        .dds-menu ul li {
            list-style: none
        }

        .dds-menu ul li a {
            display: block;
            padding: 10px 16px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .dds-menu ul li a:hover {
            background: rgb(230, 230, 230)
        }

        .dd {
            display: inline-block;
            text-align: center
        }

        .dd .drops {
            display: inline-block;
            padding: 0 5px;
            background: #365899;
            color: #ffffff;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 11px;
            font-weight: bold;
            border-radius: 3px;
            cursor: pointer;
            height: 20px;
            line-height: 20px;
            vertical-align: bottom
        }

        .dd-menu {
            background: #ffffff;
            display: none;
            z-index: 10;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
            max-width: 230px;
            width: 100%;
            text-align: left
        }

        .dd-menu {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .dd-menu li {
            display: block;
            padding: 10px 15px;
            cursor: pointer
        }

        .dd-menu li span {
            display: block;
            font-size: 15px
        }

        .dd-menu li:hover {
            background-color: rgb(230, 230, 230)
        }

        .dd-menu svg {
            margin-right: 25px;
            height: 24px;
            width: 24px;
            vertical-align: middle
        }

        [data-tooltip] {
            position: relative;
            z-index: 5;
            cursor: pointer
        }

        [data-tooltip]:before,
        [data-tooltip]:after {
            visibility: hidden;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
            opacity: 0;
            pointer-events: none
        }

        [data-tooltip]:before {
            position: absolute;
            bottom: 120%;
            left: 50%;
            margin-bottom: 5px;
            margin-left: -45px;
            padding: 7px;
            width: 80px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background-color: #000;
            color: #ffffff;
            content: attr(data-tooltip);
            text-align: center;
            font-size: 13px;
            line-height: 1.2
        }

        [data-tooltip]:after {
            position: absolute;
            bottom: 120%;
            left: 50%;
            margin-left: -5px;
            width: 0;
            border-top: 5px solid #000;
            border-right: 5px solid transparent;
            border-left: 5px solid transparent;
            content: " ";
            font-size: 0;
            line-height: 0
        }

        [data-tooltip]:hover:before,
        [data-tooltip]:hover:after {
            visibility: visible;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
            opacity: 1
        }

        .fbcomments {
            float: left;
            width: 100%;
            max-width: 800px;
            position: relative
        }

        #comments .title {
            clear: both;
            padding-bottom: 15px
        }

        #comments .backlinks-container:before {
            content: "-";
            padding: 0 5px
        }

        #comments .backlinks-container a:hover {
            color: #0070c9
        }

        #comments .commentForm {
            margin-top: 13px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.12)
        }

        #comment-editor {
            min-height: 93px
        }

        #comments .comment-action {
            background: transparent;
            cursor: pointer;
            border: 0;
            outline: 0;
            padding: 0;
            font-size: 16px;
            letter-spacing: .007px
        }

        #comments .comments-content {
            padding-top: 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.12)
        }

        #comments .comment-footer {
            font-size: 13px
        }

        #comments .comment-thread .comment-replies,
        #comments .comment .comment-replybox-single {
            margin: 15px 0 0 50px
        }

        #comments .comment-thread .thread-count {
            display: none
        }

        #comments .comment {
            list-style-type: none;
            position: relative;
            margin-bottom: 15px
        }

        #comments .comment:last-child {
            margin-bottom: 0
        }

        #comments .comment .comment-replies .comment {
            margin: 0
        }

        .comment .avatar-image-container {
            position: absolute;
            height: 40px;
            width: 40px
        }

        .comment .avatar-image-container img {
            border-radius: 50%;
            height: 100%;
            width: 100%
        }

        .comment .comment-replies .avatar-image-container {
            height: 35px;
            width: 35px
        }

        .comment .comment-replies .avatar-image-container img {
            border-radius: 50%;
            height: 100%;
            width: 100%
        }

        .avatar-image-container img {
            background: url(//4.bp.blogspot.com/-9TaHwQSt4ps/WfdMSWzDpAI/AAAAAAAAQgE/lwRBOH-oCWQVR-UDuoXZGFHUc4A1B99cQCLcBGAs/s1600/no-image.png) no-repeat center
        }

        .avatar-image-container svg,
        .comment .avatar-image-container .avatar-icon {
            border-radius: 50%;
            border: solid 1px #1a73e8;
            box-sizing: border-box;
            fill: hsl(0, 0%, 53.3%);
            height: 40px;
            margin: 0;
            padding: 7px;
            width: 40px
        }

        .comments .comments-content .icon.blog-author:before {
            font-family: Material Icons;
            content: '\e5ca';
            background: rgb(136, 136, 136);
            display: inline-block;
            color: #ffffff;
            border-radius: 50%;
            margin-left: 5px;
            font-size: 10px;
            height: 13px;
            line-height: 13px;
            overflow: hidden;
            text-align: center;
            width: 13px;
            vertical-align: middle
        }

        #comments .comment .comment-block {
            background: #ffffff;
            border-radius: 3px;
            margin: 0 0 0 50px;
            padding: 8px 15px;
            display: inline-block;
            font-size: medium;
            font-weight: normal;
            line-height: 1.5;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 2px 0 -2px rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 2px 0 -2px rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 2px 0 -2px rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.12);
            -webkit-transition: box-shadow 0.25s;
            -moz-transition: box-shadow 0.25s;
            -ms-transition: box-shadow 0.25s;
            -o-transition: box-shadow 0.25s;
            transition: box-shadow 0.25s
        }

        #comments .comment .comment-block:hover {
            webkit-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 1px 12px 0 rgba(0, 0, 0, 0.12)
        }

        #comments .comment .comment-block:before {
            content: "";
            border-left: 5px solid transparent;
            border-right: 20px solid #f4f4f4;
            border-bottom: 20px solid transparent;
            position: absolute;
            top: 25px;
            left: 25px
        }

        #comments .comment-author-header-wrapper {
            margin-left: 40px
        }

        #comments .comment .comment-header .user,
        #comments .comment .comment-header .user a {
            font-style: normal;
            font-weight: normal;
            font-size: 15px
        }

        #comments .comment .comment-actions {
            font-size: 12px;
            font-weight: normal;
            text-transform: uppercase
        }

        #comments .continue,
        #comments .comment .continue {
            display: none
        }

        #comments .comment .continue a.comment-reply {
            font-size: 13px;
            text-transform: uppercase
        }

        #comments .comment .comment-actions .item-control.blog-admin {
            display: none
        }

        #comments .comment .comment-header .datetime {
            bottom: 0;
            display: inline-block;
            font-size: 13px;
            font-weight: normal
        }

        #comments .comment .comment-header .datetime {
            margin-left: 5px
        }

        #comments .comment-form {
            border-bottom: 1px solid rgba(0, 0, 0, 0.12)
        }

        .comments .comments-content .loadmore.loaded {
            max-height: 0;
            opacity: 0;
            overflow: hidden
        }

        .spinner:before {
            content: '';
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 3px solid #448aff;
            border-right-color: transparent;
            animation: spinner .9s linear infinite;
            -webkit-animation: spinner .9s ease-in-out infinite
        }

        .box_category.spinner:before {
            top: 48%;
            left: 48%
        }

        .box_category.load {
            height: 400px;
            position: relative
        }

        .loadposts.load {
            position: relative;
            height: 50px
        }

        .loadposts.spinner:before {
            left: 48%;
            top: 20%
        }

        @keyframes spinner {
            to {
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes spinner {
            to {
                -webkit-transform: rotate(360deg)
            }
        }

        .breadcrumb {
            position: relative;
            float: left;
            width: 100%;
            margin: 0 0 15px 0;
            padding: 0 0 10px 0;
            border-bottom: 3px solid rgba(0, 0, 0, 0.12);
            line-height: normal
        }

        .breadcrumb button {
            float: left;
            position: relative;
            background-color: transparent;
            display: inline-block;
            border: none;
            padding: 0 30px 0 0;
            cursor: pointer;
            font-size: 15px;
            outline: none
        }

        .breadcrumb .num_posts span,
        .breadcrumb .all_num_posts span {
            float: right;
            position: relative;
            display: inline-block;
            padding: 0;
            cursor: default;
            font-size: 15px
        }

        .breadcrumb button:after {
            font-family: Material Icons;
            content: '\e5cf';
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            vertical-align: middle
        }

        .breadcrumb ul {
            position: absolute;
            left: 0;
            top: 30px;
            background: #ffffff;
            border: 1px solid #ddd;
            z-index: 9;
            box-shadow: 0 1px 15px rgba(27, 31, 35, .15);
            border-radius: 3px;
            max-height: 396px;
            max-width: 200px;
            width: 100%;
            overflow-y: auto;
            margin: 0
        }

        .breadcrumb ul li {
            cursor: pointer;
            padding: 8px 13px;
            display: block;
            list-style-type: none;
            font-size: 16px;
            font-weight: normal;
            line-height: normal
        }

        .breadcrumb ul li:hover {
            background-color: #E4F0F6
        }

        .blog-posts.load,
        .row.load {
            height: 400px;
            position: relative
        }

        .blog-posts.spinner:before,
        .row.spinner:before {
            top: 47%;
            left: 47%
        }

        .show-posts {
            float: left;
            width: 100%;
            margin-bottom: 20px;
            text-align: center
        }

        .show-posts.more {
            padding: 15px 0;
            margin: 15px 0 0 0;
            border-top: 1px solid rgba(0, 0, 0, 0.12)
        }

        .show-posts .load-posts,
        #blog-pager .loadposts .button {
            position: relative;
            background: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 3px;
            outline: 0;
            padding: 0 30px 0 10px;
            font-size: 15px;
            line-height: 34px;
            cursor: pointer;
            white-space: nowrap;
        }

        .show-posts .load-posts:after,
        #blog-pager .loadposts .button:after {
            font-family: Material Icons;
            content: '\e5cf';
            font-size: 24px;
            position: absolute;
            right: 5px
        }

        .recent-posts ul.load {
            height: 400px
        }

        .recent-posts ul.spinner:before {
            left: 48%;
            top: 46%
        }

        .show-more {
            float: left;
            width: 100%;
            margin-top: 13px;
            padding-top: 13px;
            border-top: 1px dashed rgba(0, 0, 0, 0.12)
        }

        .show-more .show-wore-messages {
            display: inline-flex;
            text-transform: uppercase;
            cursor: pointer;
            font-size: 14px;
            font-weight: normal
        }

        .show-more .messages-loading {
            font-size: 15px;
            font-weight: normal
        }

        #blog-pager {
            float: left;
            width: 100%;
            margin-bottom: 15px;
            text-align: center
        }

        #blog-pager span {
            display: inline-flex;
            vertical-align: bottom
        }

        #blog-pager span.pagecurrent,
        #blog-pager span a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
            color: #3c4043;
            font-size: 16px;
            margin-right: 5px;
            background: #ffffff;
            border-radius: 4px;
            border: 1px solid #e6ecf0;
        }

        #blog-pager span:last-child a {
            margin: 0
        }

        #blog-pager span a:hover {
            color: #ffffff;
            background: #168fd6;
            border: 1px solid #168fd6;
        }

        #blog-pager span.pagecurrent {
            color: #ffffff;
            background: #168fd6
        }

        #blog-pager span:after {
            font-family: Material Icons;
            font-size: 21px;
            height: 40px;
            width: 40px;
            color: hsl(0, 0%, 53.3%)
        }

        #blog-pager span:hover:after {
            color: #ffffff
        }

        #blog-pager span.prevText:after {
            content: '\e5c4'
        }

        #blog-pager span.nextText:after {
            content: '\e5c8'
        }

        #ac-globalfooter {
            font-size: 12px;
            line-height: 1.36364;
            font-weight: 400;
            letter-spacing: -.008em;
            background-color: #f2f2f2;
            color: #333;
            min-width: 1024px;
            overflow: hidden;
            position: relative;
            z-index: 1
        }

        #ac-globalfooter .ac-gf-content {
            margin: 0 auto;
            max-width: 980px;
            padding: 0 22px
        }

        #ac-globalfooter,
        #ac-globalfooter:before,
        #ac-globalfooter:after,
        #ac-globalfooter *,
        #ac-globalfooter *:before,
        #ac-globalfooter *:after {
            box-sizing: content-box;
            margin: 0;
            padding: 0;
            pointer-events: auto;
            letter-spacing: normal
        }

        #ac-globalfooter *,
        #ac-globalfooter *:before,
        #ac-globalfooter *:after {
            font-size: 1em;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
            text-align: inherit
        }

        #ac-globalfooter .ac-gf-label {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(0px 0 99.9% 99.9%);
            clip-path: inset(0px 0 99.9% 99.9%);
            overflow: hidden;
            height: 1px;
            width: 1px;
            padding: 0;
            border: 0
        }

        #ac-globalfooter .ac-gf-sosumi {
            border-bottom: 1px solid #d6d6d6;
            color: #888;
            padding: 17px 0 11px
        }

        #ac-globalfooter .ac-gf-sosumi ul {
            list-style: none;
            margin: 0
        }

        #ac-globalfooter article,
        #ac-globalfooter aside,
        #ac-globalfooter details,
        #ac-globalfooter figcaption,
        #ac-globalfooter figure,
        #ac-globalfooter footer,
        #ac-globalfooter header,
        #ac-globalfooter nav,
        #ac-globalfooter section {
            display: block
        }

        #ac-globalfooter .ac-gf-sosumi p,
        #ac-globalfooter .ac-gf-sosumi li {
            font-size: 12px;
            line-height: 1.36364;
            font-weight: normal;
            letter-spacing: -.008em
        }

        #ac-globalfooter .ac-gf-sosumi li {
            padding-bottom: 0.8em
        }

        #ac-globalfooter a {
            color: #555;
            text-decoration: none
        }

        #ac-globalfooter .ac-gf-directory {
            float: left;
            font-size: 12px;
            line-height: 1.36364;
            font-weight: normal;
            letter-spacing: -.008em;
            position: relative;
            z-index: 1;
            padding-top: 20px
        }

        #ac-globalfooter .ac-gf-directory::before,
        #ac-globalfooter .ac-gf-directory::after {
            content: ' ';
            display: table
        }

        #ac-globalfooter .ac-gf-directory.with-5-columns .ac-gf-directory-column {
            width: 20%
        }

        #ac-globalfooter .ac-gf-directory-column {
            float: left;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            margin: 0;
            padding: 0;
            float: left;
            min-height: 2px;
            width: 25%
        }

        #ac-globalfooter .ac-gf-directory-column-section-state {
            display: none
        }

        #ac-globalfooter input,
        #ac-globalfooter textarea {
            font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Apple Legacy Chevron", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }

        #ac-globalfooter,
        #ac-globalfooter input,
        #ac-globalfooter textarea,
        #ac-globalfooter select,
        #ac-globalfooter button {
            font-synthesis: none;
            -moz-font-feature-settings: 'kern';
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            direction: ltr;
            text-align: left
        }

        #ac-globalfooter .ac-gf-directory-column-section {
            width: 100%;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            margin: 0;
            padding: 0;
            float: left;
            min-height: 2px;
            pointer-events: none
        }

        #ac-globalfooter .ac-gf-directory-column-section-title {
            font-size: 12px;
            line-height: 1.36364;
            font-weight: 600;
            letter-spacing: -.008em;
            margin: 0;
            margin-bottom: .8em
        }

        #ac-globalfooter .ac-gf-directory-column-section-anchor {
            right: 0;
            cursor: default;
            display: none;
            position: absolute;
            top: 0;
            width: 1px;
            height: 1px;
            z-index: 10
        }

        #ac-globalfooter .ac-gf-directory-column-section-anchor-label {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(0px 0 99.9% 99.9%);
            clip-path: inset(0px 0 99.9% 99.9%);
            overflow: hidden;
            height: 1px;
            width: 1px;
            padding: 0;
            border: 0
        }

        #ac-globalfooter .ac-gf-directory-column-section-anchor-close {
            display: none
        }

        #ac-globalfooter .ac-gf-directory-column-section-list {
            margin-right: 20px;
            list-style: none;
            padding: 0
        }

        #ac-globalfooter .ac-gf-directory-column-section-item {
            display: block;
            pointer-events: auto;
            margin-bottom: .8em
        }

        #ac-globalfooter .ac-gf-directory+.ac-gf-footer {
            padding-top: 34px;
            border-top: none
        }

        #ac-globalfooter .ac-gf-footer {
            float: left;
            width: 100%;
            border-top: 1px solid #d6d6d6;
            color: #888;
            padding: 17px 0 21px
        }

        #ac-globalfooter .ac-gf-directory+.ac-gf-footer .ac-gf-footer-shop {
            margin-bottom: 7px;
            padding-bottom: 8px;
            border-bottom: 1px solid #d6d6d6
        }

        #ac-globalfooter .ac-gf-footer-shop {
            max-height: 9999px;
            padding-bottom: 3px
        }

        #ac-globalfooter .ac-gf-footer-shop a {
            color: #0070c9
        }

        #ac-globalfooter .nowrap {
            white-space: nowrap
        }

        #ac-globalfooter .ac-gf-footer-locale {
            float: right;
            margin-top: 5px;
            position: relative;
            top: -3px;
            z-index: 2;
            white-space: nowrap
        }

        #ac-globalfooter .ac-gf-footer-locale-link:first-child {
            border-left: none;
            margin-left: 0;
            padding-left: 0
        }

        #ac-globalfooter .ac-gf-footer-locale-link {
            border-left: 1px solid #d6d6d6;
            margin-left: 7px;
            padding-left: 11px;
            display: inline
        }

        #ac-globalfooter .ac-gf-footer-locale-flag {
            background-repeat: no-repeat;
            background-size: 16px 16px;
            display: inline-block;
            width: 16px;
            height: 16px;
            background-image: url(/ac/flags/1/images/us/16.png);
            padding-right: 5px;
            background-position: left center;
            cursor: pointer;
            float: left;
            margin-top: -1px
        }

        #ac-globalfooter .ac-gf-footer-locale-flag {
            background-repeat: no-repeat;
            background-size: 16px 16px;
            display: inline-block;
            width: 16px;
            height: 16px;
            background-image: url(https://www.apple.com/ac/flags/1/images/vn/16.png);
            padding-right: 5px;
            background-position: left center;
            cursor: pointer;
            float: left;
            margin-top: -1px
        }

        #ac-globalfooter .ac-gf-footer-legal {
            position: relative;
            top: -3px;
            z-index: 1
        }

        #ac-globalfooter .ac-gf-footer-legal-copyright {
            max-height: 9999px
        }

        #ac-globalfooter .ac-gf-footer-legal-copyright,
        #ac-globalfooter .ac-gf-footer-legal-links {
            margin-right: 30px;
            float: left;
            margin-top: 5px
        }

        #ac-globalfooter .ac-gf-footer-legal-links {
            position: relative;
            top: -5px;
            z-index: 1
        }

        #ac-globalfooter .ac-gf-footer-legal-copyright,
        #ac-globalfooter .ac-gf-footer-legal-links {
            margin-right: 30px;
            float: left;
            margin-top: 5px
        }

        #ac-globalfooter .ac-gf-footer-legal-link {
            border-right: 1px solid #d6d6d6;
            margin-right: 7px;
            padding-right: 10px;
            display: inline-block;
            margin-top: 5px;
            white-space: nowrap
        }

        @media screen and (max-width:1044px) {
            .main-container,
            #ac-globalfooter {
                min-width: 320px
            }
        }

        @media screen and (max-width:960px) {
            #backer .header {
                width: 55%
            }
        }

        @media screen and (max-width:860px) {
            #backer .header {
                width: 85%
            }
            #backer .pc-menu {
                display: none !important
            }
            #backer .mobile-menu {
                display: inline-block;
                padding-right: 20px
            }
            #backer .backer-right {
                display: flex
            }
        }

        @media screen and (max-width:800px) {
            .sidebar {
                width: 100%
            }
            .sidebar #HTML101 {
                display: none !important
            }
            .PopularPosts ul li {
                padding-bottom: 15px
            }
            .PopularPosts .item-thumbnail {
                width: 40%;
                margin-right: 15px
            }
            .PopularPosts .item-title {
                font-size: 22px
            }
            .PopularPosts .item-meta {
                line-height: normal
            }
            .PopularPosts .item-published {
                display: inline-block
            }
            .PopularPosts .item-snippet {
                display: table
            }
            .PopularPosts .item-title a {
                -webkit-line-clamp: 2
            }
            #footer {
                border: 0
            }
            .col-md-4 {
                width: 50%
            }
            .main-wrapper .main {
                float: none;
                width: 100%;
                padding-right: 0
            }
            #article,
            #related-posts,
            .sidebar .widget {
                border: unset;
                -webkit-border-radius: unset;
                -moz-border-radius: unset;
                border-radius: unset
            }
            .featured_post .item .post_content {
                max-width: 65%
            }
        }

        @media screen and (max-width:767px) {
            .ad-top,
            .ad-footer,
            .main-wrapper {
                padding: 0 16px
            }
            #ac-globalfooter .ac-gf-content {
                padding: 0 15px
            }
            #ac-globalfooter .ac-gf-directory.with-5-columns .ac-gf-directory-column {
                width: 100%
            }
            #ac-globalfooter .ac-gf-directory-column {
                width: 100%
            }
            #ac-globalfooter .ac-gf-directory-column-section {
                border-bottom: 1px solid #d6d6d6;
                overflow: hidden;
                pointer-events: auto
            }
            #ac-globalfooter .ac-gf-directory-column-section-title {
                margin-bottom: 0;
                padding-top: 10px;
                padding-bottom: 10px;
                background: #f2f2f2;
                cursor: pointer;
                position: relative;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                z-index: 2
            }
            #ac-globalfooter .ac-gf-directory-column-section-title {
                font-size: 12px;
                line-height: 1.33341;
                font-weight: 400;
                letter-spacing: -.01em;
                font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Apple Legacy Chevron", "Helvetica Neue", "Helvetica", "Arial", sans-serif
            }
            #ac-globalfooter .ac-gf-directory-column-section-title:after {
                content: '+';
                float: right;
                font-size: 14px;
                font-weight: normal;
                margin-top: -2px;
                margin-right: 8px;
                -webkit-transition: -webkit-transform .3s ease;
                transition: -webkit-transform .3s ease;
                transition: transform .3s ease;
                transition: transform .3s ease, -webkit-transform .3s ease
            }
            #ac-globalfooter .ac-gf-directory-column-section-state:target+.ac-gf-directory-column-section .ac-gf-directory-column-section-title,
            #ac-globalfooter .ac-gf-directory-column-section-state:checked+.ac-gf-directory-column-section .ac-gf-directory-column-section-title {
                color: #000
            }
            #ac-globalfooter .ac-gf-directory-column-section-state:target+.ac-gf-directory-column-section .ac-gf-directory-column-section-title:after,
            #ac-globalfooter .ac-gf-directory-column-section-state:checked+.ac-gf-directory-column-section .ac-gf-directory-column-section-title:after {
                -webkit-transform: rotate(45deg) scale(1.08);
                -ms-transform: rotate(45deg) scale(1.08);
                transform: rotate(45deg) scale(1.08)
            }
            #ac-globalfooter .ac-gf-directory-column-section-anchor {
                display: block
            }
            #ac-globalfooter .ac-gf-directory-column-section-state:target+.ac-gf-directory-column-section .ac-gf-directory-column-section-anchor-open,
            #ac-globalfooter .ac-gf-directory-column-section-state:checked+.ac-gf-directory-column-section .ac-gf-directory-column-section-anchor-open {
                display: none
            }
            #ac-globalfooter .ac-gf-directory-column-section-state:target+.ac-gf-directory-column-section .ac-gf-directory-column-section-anchor-close,
            #ac-globalfooter .ac-gf-directory-column-section-state:checked+.ac-gf-directory-column-section .ac-gf-directory-column-section-anchor-close {
                display: block
            }
            #ac-globalfooter .ac-gf-directory-column-section-state:target+.ac-gf-directory-column-section .ac-gf-directory-column-section-list,
            #ac-globalfooter .ac-gf-directory-column-section-state:checked+.ac-gf-directory-column-section .ac-gf-directory-column-section-list {
                position: static;
                visibility: visible;
                z-index: 1;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
                -webkit-transition: -webkit-transform 300ms ease;
                transition: -webkit-transform 300ms ease;
                transition: transform 300ms ease;
                transition: transform 300ms ease, -webkit-transform 300ms ease
            }
            #ac-globalfooter .ac-gf-directory-column-section-list {
                margin: 0;
                overflow: hidden;
                padding-top: 5px;
                padding-bottom: 16px;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                visibility: hidden;
                z-index: -1;
                -webkit-transform: translateY(-100px);
                -ms-transform: translateY(-100px);
                transform: translateY(-100px)
            }
            #ac-globalfooter .ac-gf-directory-column-section-item {
                margin-bottom: 0
            }
            #ac-globalfooter .ac-gf-directory-column-section-link {
                padding: 6px 14px;
                display: block
            }
            #ac-globalfooter .ac-gf-directory+.ac-gf-footer {
                padding-top: 17px
            }
            #ac-globalfooter .ac-gf-directory+.ac-gf-footer .ac-gf-footer-shop {
                border-bottom: none
            }
            #ac-globalfooter .ac-gf-footer-locale {
                left: -1px;
                padding-top: 5px;
                float: none
            }
            #ac-globalfooter .ac-gf-footer-legal {
                padding-top: 12px
            }
            #ac-globalfooter .ac-gf-footer-legal-copyright,
            #ac-globalfooter .ac-gf-footer-legal-links {
                margin-right: 0;
                float: none
            }
        }

        @media screen and (max-width:667px) {
            .PopularPosts .item-snippet p {
                -webkit-line-clamp: 2
            }
        }

        @media screen and (max-width:640px) {
            #backer {
                text-align: center
            }
            #backer .header {
                width: unset
            }
            #Header1 {
                width: auto
            }
            #backer .mobile-menu {
                padding: 0
            }
            #backer .header .BlogSearch {
                display: none
            }
            .PopularPosts .item-snippet p,
            #related-posts .post_summary p {
                -webkit-line-clamp: 2
            }
        }

        @media screen and (max-width:550px) {
            .card .content .title {
                display: block;
                font-size: larger
            }
            .PopularPosts .item-title,
            #related-posts .post_title {
                font-size: larger
            }
            .PopularPosts .item-title a,
            #related-posts .post_title a {
                -webkit-line-clamp: 3
            }
        }

        @media screen and (max-width:500px) {
            .PopularPosts .item-thumbnail,
            #related-posts .post_thumb {
                width: 45%
            }
            .PopularPosts .item-snippet,
            #related-posts .post_summary {
                display: none
            }
            #related-posts .post {
                margin: 0;
                border: 0
            }
        }

        @media screen and (max-width:414px) {
            .ad-top,
            .ad-footer,
            .main-wrapper {
                padding: 0
            }
            .col-md-4 {
                float: left;
                width: 100%;
                padding: 0 0 15px 0;
                display: block;
            }
            .card {
                height: unset;
                border: unset;
                border-radius: unset;
            }
            .card .content .title a {
                display: block;
                -webkit-line-clamp: unset;
                -webkit-box-orient: unset;
                text-overflow: unset
            }
            .card .content .post-entry {
                line-height: 1.4
            }
            .card .card-footer {
                position: relative
            }
            .featured_post .item .post_content {
                left: 15px;
                right: 15px;
                bottom: 15px;
                max-width: 100%
            }
            .featured_post .item .post_title {
                display: block;
                font-size: larger
            }
            .featured_post .item .post_content a.post_jump_link {
                margin-top: 15px;
                line-height: 34px
            }
            .featured_post .item .post_snippet {
                display: none
            }
            .all_posts .row {
                margin: 0
            }
            .show-posts {
                padding-top: 20px
            }
            .show-posts.more {
                text-align: left;
                border-top: 1px dashed rgba(0, 0, 0, 0.12);
                padding: 13px 0 15px 0;
                margin: 13px 0 0 0
            }
            .show-posts.more .load-posts {
                background: transparent;
                padding: 0;
                border: 0;
                border-radius: unset;
                font-size: 14px;
                text-transform: uppercase;
                line-height: normal
            }
            .show-posts.more .load-posts:after {
                content: unset
            }
            .PopularPosts .item-title,
            #related-posts .post_title {
                font-size: medium
            }
            .post-item .post-header .post-title {
                font-size: larger
            }
            .comment-form.spinner:before {
                left: 45%;
                top: 46%
            }
            .post-button-container {
                position: fixed;
                left: 0;
                bottom: 0;
                margin: 0;
                z-index: 8
            }
            .post-button-container .post-button {
                float: left;
                width: 100%;
                display: block;
                padding: 0 15px;
                line-height: 40px;
                height: 40px;
                border-radius: unset;
                -webkit-box-shadow: unset;
                box-shadow: unset
            }
            .post-button-container .post-button a,
            .post-button-container span.left {
                margin: 0
            }
            .post-button-container .post-button a,
            .post-button-container span.left,
            .post-button-container span.right {
                margin-right: 21%
            }
            .post-button-container span.share-button {
                padding: 0
            }
            .post-button-container .share-menu {
                top: unset;
                left: unset;
                bottom: 40px;
                right: 15px
            }
            .box_category.spinner:before,
            .loadposts.spinner:before {
                left: 46%
            }
            .bottom_fixed {
                height: 40px !important
            }
        }

        @media screen and (max-width:384px) {
            .modal-dialog {
                margin: 15px
            }
            .PopularPosts .item-title,
            #related-posts .post_title {
                font-size: medium
            }
            #related-posts .post_published,
            .PopularPosts .item-published {
                display: none
            }
        }

        @media screen and (max-width:375px) {
            .cd-popup-container {
                max-width: 320px
            }
            #footer .widget {
                width: 100%
            }
        }

        @media screen and (max-width:360px) {
            .featured_post .item .post_content a.post_jump_link {
                display: none
            }
        }

        @media print {
            body {
                width: 90%;
                height: 100%;
                overflow: hidden;
                margin: 0 auto;
                padding: 0;
                display: block
            }
            .main-wrapper .main {
                float: none;
                width: 100%;
                padding-right: 0
            }
            #article {
                width: 100%;
                border: 0;
                border-radius: unset
            }
            .post-title {
                margin-bottom: 30px
            }
            #ac-globalnav,
            #ac-globalfooter,
            .ad-top,
            .ad-footer,
            .post-body .video-container,
            .post-footer,
            .sidebar,
            .MD-StoTop,
            .box_tin,
            .post-button-container,
            #comments,
            .breadcrumbs,
            #related-article,
            .inline-ad,
            #ad-middle,
            .keywords,
            #related-posts {
                display: none
            }
        }

        
    </style>

</head>
<body>
    
    <input class='ac-gn-menustate' id='ac-gn-menustate' type='checkbox' />
    <nav class='js touch' id='ac-globalnav' role='navigation'>
        <div class='ac-gn-content'>
            <ul class='ac-gn-header'>
                <li class='ac-gn-item ac-gn-menuicon'>
                    <label aria-hidden='true' class='ac-gn-menuicon-label' for='ac-gn-menustate'>
                        <span class='ac-gn-menuicon-bread ac-gn-menuicon-bread-top'>
                            <span class='ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-top'></span>
                        </span>
                        <span class='ac-gn-menuicon-bread ac-gn-menuicon-bread-bottom'>
                            <span class='ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-bottom'></span>
                        </span>
                    </label>
                    <a class='ac-gn-menuanchor ac-gn-menuanchor-open' href='javascript:void(0)' id='ac-gn-menuanchor-open' role='button'>
                        <span class='ac-gn-menuanchor-label'>Open Menu</span>
                    </a>
                    <a class='ac-gn-menuanchor ac-gn-menuanchor-close' href='javascript:void(0)' id='ac-gn-menuanchor-close' role='button'>
                        <span class='ac-gn-menuanchor-label'>Close Menu</span>
                    </a>
                </li>
                <li class='ac-gn-item ac-gn-apple'>
                    <a class='ac-gn-link ac-gn-link-apple' href='/' id='ac-gn-firstfocus-small' title='Trang chủ'>
                        <span class='ac-gn-link-text'>Apple</span>
                        </a>
                </li>
                <li class='ac-gn-item ac-gn-bag ac-gn-bag-small' id='ac-gn-bag-small'>
                    <a class='ac-gn-link ac-gn-link-bag' href='javascript:void(0)' title='Tiện ích'>
                        <span class='ac-gn-link-text'>Tiện ích</span>
                        <span class='ac-gn-bag-badge'></span>
                    </a>
                    <span class='ac-gn-bagview-caret ac-gn-bagview-caret-large'></span>
                </li>
            </ul>
            <div class='ac-gn-search-placeholder-container' role='search'>
                <div class='ac-gn-search ac-gn-search-small'>
                    <a href='javascript:void(0)' id='ac-gn-link-search-small'>
                        <div class='ac-gn-search-placeholder-bar'>
                            <div class='ac-gn-search-placeholder-input'>
                                <div class='ac-gn-search-placeholder-input-text'>
                                    <div class='ac-gn-link-search ac-gn-search-placeholder-input-icon'></div>
                                    <span class='ac-gn-search-placeholder'>Tìm kiếm</span>
                                </div>
                            </div>
                            <div class='ac-gn-searchview-close ac-gn-searchview-close-small ac-gn-search-placeholder-searchview-close'>
                                <span class='ac-gn-searchview-close-cancel'>Hủy</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <ul class='ac-gn-list'>
                <li class='ac-gn-item ac-gn-apple'>
                    <a class='ac-gn-link ac-gn-link-apple' href="index.php" id='ac-gn-firstfocus' title='Trang chủ'></a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="v1-store.php">Store</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="v1-mac.php">Mac</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">iPad</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">iPhone</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">Watch</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">AirPods</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">TV & Home</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">Only on Apple</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu'>
                    <a class='ac-gn-link' href="">Support</a>
                </li>
                <li class='ac-gn-item ac-gn-item-menu ac-gn-search'>
                    <a class='ac-gn-link ac-gn-link-search' href='javascript:void(0)' id='ac-gn-link-search' title='Tìm kiếm'></a>
                </li>
                <li class='ac-gn-item ac-gn-bag' id='ac-gn-bag'>
                    <a class='ac-gn-link ac-gn-link-bag' href='javascript:void(0)' title='Tiện ích'>
                        <span class='ac-gn-bag-badge'></span>
                    </a>
                    <span class='ac-gn-bagview-caret ac-gn-bagview-caret-large'></span>
                </li>
            </ul>
            <aside class='ac-gn-searchview' id='ac-gn-searchview' role='search'>
                <div class='ac-gn-searchview-content'>
                    <div class='ac-gn-searchview-bar'>
                        
                    </div>
                    <aside class='ac-gn-searchresults' id='ac-gn-searchresults'>
                        <section class='ac-gn-searchresults-section ac-gn-searchresults-section-defaultlinks'>
                            <div class='ac-gn-searchresults-section-wrapper'>
                                <h3 class='ac-gn-searchresults-header ac-gn-searchresults-animated'>Quick Links</h3>
                                <ul class='ac-gn-searchresults-list' id='defaultlinks'>
                                    <li class='ac-gn-searchresults-item ac-gn-searchresults-animated'>
                                        <a class='ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks' href="">MacBook</a>
                                    </li>
                                    <li class='ac-gn-searchresults-item ac-gn-searchresults-animated'>
                                        <a class='ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks' href="">iPad</a>
                                    </li>
                                    <li class='ac-gn-searchresults-item ac-gn-searchresults-animated'>
                                        <a class='ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks' href="">iPhone</a>
                                    </li>
                                    <li class='ac-gn-searchresults-item ac-gn-searchresults-animated'>
                                        <a class='ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks' href="">Apple</a>
                                    </li>
                                    
                                </ul>
                                <ul class='ac-gn-searchresults-list hidden' id='searchresults'></ul>
                            </div>
                            
                        </section>
                    </aside>
                </div>
                
                <button aria-label='Cancel Search' class='ac-gn-searchview-close' id='ac-gn-searchview-close'>
                    <span class='ac-gn-searchview-close-wrapper'>
                        <span class='ac-gn-searchview-close-left'></span>
                        <span class='ac-gn-searchview-close-right'></span>
                    </span>
                </button>
            </aside>
            <aside class='ac-gn-bagview'>
                <div class='ac-gn-bagview-scrim'>
                    <span class='ac-gn-bagview-caret ac-gn-bagview-caret-small'></span>
                </div>
                <div class='ac-gn-bagview-content' id='ac-gn-bagview-content'>
                    <p class='ac-gn-bagview-message ac-gn-bagview-message-empty'></p>
                    <nav class='ac-gn-bagview-nav'>
                        <ul class='ac-gn-bagview-nav-list ac-gn-bagview-nav-nobtn'>
                            <li class='ac-gn-bagview-nav-item ac-gn-bagview-nav-item-bag'>
                                <a class='ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag' href="giohang.php?quanly=giohang">Bag</a>
                            </li>
                            <li class='ac-gn-bagview-nav-item ac-gn-bagview-nav-item-account'>
                                <a class='ac-gn-bagview-nav-link ac-gn-bagview-nav-link-account' href='#'>Account</a>
                            </li>
                            
                            
                            
                            <li class='ac-gn-bagview-nav-item ac-gn-bagview-nav-item-orders'>
                                <a class='ac-gn-bagview-nav-link ac-gn-bagview-nav-link-orders' href=''>Sign up</a>
                            </li>
                            <li class='ac-gn-bagview-nav-item ac-gn-bagview-nav-item-signIn'>
                                <a class='ac-gn-bagview-nav-link ac-gn-bagview-nav-link-signIn' href="login.php">Sign in</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>
    </nav>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
        //<![CDATA[
        $(document).ready(function() {
            $(".dd").each(function() {
                var d = $(this)
                $(".drops", d).click(function(n) {
                    return n.preventDefault(), $div = $(".dd-menu", d), $div.toggle(), $(".dd-menu").not($div).hide(), !1
                })
            }), $("html,.ac-gn-link-search,.ac-gn-bag").click(function() {
                $(".dd-menu").hide()
            })
            $('.post-button-container span.share-button').click(function(e) {
                e.stopPropagation()
                $('.post-button-container .share-menu').toggleClass('opened')
            })
            $('html,.ac-gn-link-search,.ac-gn-bag').click(function() {
                $('.post-button-container .share-menu').removeClass('opened')
            })
            $('.ac-gn-link-search').click(function(e) {
                e.stopPropagation()
                $('#ac-globalnav').addClass('searchshow').delay(1000).queue(function() {
                    $(this).removeClass('searchshow').addClass('searchopen')
                    $('#ac-globalnav .ac-gn-searchform-input').focus()
                    $(this).dequeue()
                })
            })
            $('.ac-gn-searchform-input').click(function(e) {
                e.stopPropagation()
            })
            $('html,.ac-gn-searchview-close,.post-button-container span.share-button,.share-button').click(function() {
                if ($('#ac-globalnav').hasClass('searchopen')) {
                    $('#ac-globalnav').removeClass('searchopen')
                    $('#ac-globalnav').addClass('searchhide').delay(1000).queue(function() {
                        $(this).removeClass('searchhide')
                        $(this).dequeue()
                    })
                }
            })
            $('#ac-globalnav .ac-gn-bag').click(function(e) {
                e.stopPropagation()
                $('#ac-globalnav').toggleClass('with-bagview')
            });
            $('#ac-globalnav .ac-gn-bagview-content').click(function(e) {
                e.stopPropagation()
            });
            $('html,.post-button-container span.share-button,.share-button').click(function() {
                $('#ac-globalnav').removeClass('with-bagview')
            })
            $('.ac-gn-search-placeholder-container').click(function(e) {
                e.stopPropagation();
                $('#ac-globalnav').addClass('searchshow').delay(1000).queue(function() {
                    $(this).removeClass('searchshow').addClass('searchopen')
                    $('#ac-globalnav .ac-gn-searchform-input').focus()
                    $(this).dequeue()
                })
            })
            $('.ac-gn-searchview-close').click(function() {
                $('#ac-globalnav').removeClass('searchopen');
                $('#ac-globalnav').addClass('searchhide').delay(1000).queue(function() {
                    $(this).removeClass('searchhide')
                    $(this).dequeue()
                });
            });
            $('.ac-gn-searchform-input').on('keyup', function(e) {
                var textinput = $(this).val()
                if (textinput) {
                    $.ajax({
                        type: 'GET',
                        url: '/feeds/posts/summary',
                        data: {
                            'max-results': 25,
                            'alt': 'json',
                            'q': textinput
                        },
                        dataType: 'jsonp',
                        success: function(data) {
                            if (data.feed.entry) {
                                for (var i = 0; i < data.feed.entry.length; i++) {
                                    for (var j = 0; j < data.feed.entry[i].link.length; j++) {
                                        if (data.feed.entry[i].link[j].rel == 'alternate') {
                                            var postUrl = data.feed.entry[i].link[j].href;
                                            break;
                                        }
                                    }
                                    var total_posts = data.feed.openSearch$totalResults.$t
                                    var postTitle = data.feed.entry[i].title.$t;
                                    $('.ac-gn-searchresults-header').html('Bài viết liên quan');
                                    $('#defaultlinks').addClass('hidden');
                                    $('#searchresults').removeClass('hidden');
                                    $('#searchresults').append('<li class="ac-gn-searchresults-item ac-gn-searchresults-animated"><a class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" href=' + postUrl + ' title="' + postTitle + '">' + postTitle + '</a></li>')
                                }
                            }
                        }
                    })
                } else {
                    $('#searchresults').addClass('hidden');
                }
            })
            $('.ac-gn-searchview-close').click(function() {
                $('.ac-gn-searchform-input').val('');
                $('.ac-gn-searchresults-header').html('Đề xuất');
                $('#defaultlinks').removeClass('hidden');
                $('#searchresults').empty();
                $('#searchresults').addClass('hidden');
            })
            $.fn.scrollToTop = function() {
                $(this).hide().removeAttr("href"), "0" != $(window).scrollTop() && $(this).fadeIn("slow")
                var o = $(this);
                $(window).scroll(function() {
                    "0" == $(window).scrollTop() ? $(o).fadeOut("slow") : $(o).fadeIn("slow")
                }), $(this).click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow")
                })
            }
            $('.MD-StoTop').scrollToTop()
        })
        //]]>
    </script>
</body>
</html>