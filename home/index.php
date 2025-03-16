<!DOCTYPE html>
<html
    lang="en-US"
    style="
        --wcm-color-fg-1: rgb(228, 231, 231);
        --wcm-color-fg-2: rgb(148, 158, 158);
        --wcm-color-fg-3: rgb(110, 119, 119);
        --wcm-color-bg-1: rgb(20, 20, 20);
        --wcm-color-bg-2: rgb(39, 42, 42);
        --wcm-color-bg-3: rgb(59, 64, 64);
        --wcm-color-overlay: rgba(255, 255, 255, 0.1);
        --wcm-accent-color: #3396ff;
        --wcm-accent-fill-color: #ffffff;
        --wcm-z-index: 1000000;
        --wcm-background-color: #3396ff;
        --wcm-background-border-radius: 8px;
        --wcm-container-border-radius: 30px;
        --wcm-wallet-icon-border-radius: 15px;
        --wcm-wallet-icon-large-border-radius: 30px;
        --wcm-wallet-icon-small-border-radius: 7px;
        --wcm-input-border-radius: 28px;
        --wcm-button-border-radius: 10px;
        --wcm-notification-border-radius: 36px;
        --wcm-secondary-button-border-radius: 28px;
        --wcm-icon-button-border-radius: 50%;
        --wcm-button-hover-highlight-border-radius: 10px;
        --wcm-text-big-bold-size: 20px;
        --wcm-text-big-bold-weight: 600;
        --wcm-text-big-bold-line-height: 24px;
        --wcm-text-big-bold-letter-spacing: -0.03em;
        --wcm-text-big-bold-text-transform: none;
        --wcm-text-xsmall-bold-size: 10px;
        --wcm-text-xsmall-bold-weight: 700;
        --wcm-text-xsmall-bold-line-height: 12px;
        --wcm-text-xsmall-bold-letter-spacing: 0.02em;
        --wcm-text-xsmall-bold-text-transform: uppercase;
        --wcm-text-xsmall-regular-size: 12px;
        --wcm-text-xsmall-regular-weight: 600;
        --wcm-text-xsmall-regular-line-height: 14px;
        --wcm-text-xsmall-regular-letter-spacing: -0.03em;
        --wcm-text-xsmall-regular-text-transform: none;
        --wcm-text-small-thin-size: 14px;
        --wcm-text-small-thin-weight: 500;
        --wcm-text-small-thin-line-height: 16px;
        --wcm-text-small-thin-letter-spacing: -0.03em;
        --wcm-text-small-thin-text-transform: none;
        --wcm-text-small-regular-size: 14px;
        --wcm-text-small-regular-weight: 600;
        --wcm-text-small-regular-line-height: 16px;
        --wcm-text-small-regular-letter-spacing: -0.03em;
        --wcm-text-small-regular-text-transform: none;
        --wcm-text-medium-regular-size: 16px;
        --wcm-text-medium-regular-weight: 600;
        --wcm-text-medium-regular-line-height: 20px;
        --wcm-text-medium-regular-letter-spacing: -0.03em;
        --wcm-text-medium-regular-text-transform: none;
        --wcm-font-family: -apple-system, system-ui, BlinkMacSystemFont,
            'Segoe UI', Roboto, Ubuntu, 'Helvetica Neue', sans-serif;
        --wcm-font-feature-settings: 'tnum' on, 'lnum' on, 'case' on;
        --wcm-success-color: rgb(38, 181, 98);
        --wcm-error-color: rgb(242, 90, 103);
        --wcm-overlay-background-color: rgba(0, 0, 0, 0.3);
        --wcm-overlay-backdrop-filter: none;
    "
    
    data-scrapbook-create="20250214151218446"
    data-scrapbook-title="Usual Interface"
    data-scrapbook-adoptedstylesheet-0='*, ::after, ::before { margin: 0px; padding: 0px; box-sizing: border-box; font-style: normal; text-rendering: optimizespeed; -webkit-font-smoothing: antialiased; -webkit-tap-highlight-color: transparent; backface-visibility: hidden; }

button { cursor: pointer; display: flex; justify-content: center; align-items: center; position: relative; border: none; background-color: transparent; transition: 0.2s; }

@media (hover: hover) and (pointer: fine) {
  button:active { transition: 0.1s; transform: scale(0.93); }
}

button::after { content: ""; position: absolute; inset: 0px; transition: background-color, 0.2s; }

button:disabled { cursor: not-allowed; }

button svg, button wcm-text { position: relative; z-index: 1; }

input { border: none; outline: 0px; appearance: none; }

img { display: block; }

::selection { color: var(--wcm-accent-fill-color); background: var(--wcm-accent-color); }'
    data-scrapbook-adoptedstylesheet-1=":host { all: initial; }

.wcm-overlay { inset: 0px; position: fixed; z-index: var(--wcm-z-index); overflow: hidden; display: flex; justify-content: center; align-items: center; opacity: 0; pointer-events: none; background-color: var(--wcm-overlay-background-color); backdrop-filter: var(--wcm-overlay-backdrop-filter); }

@media (max-height: 720px) and (orientation: landscape) {
  .wcm-overlay { overflow: scroll; align-items: flex-start; padding: 20px 0px; }
}

.wcm-active { pointer-events: auto; }

.wcm-container { position: relative; max-width: 360px; width: 100%; outline: 0px; border-radius: var(--wcm-background-border-radius) var(--wcm-background-border-radius) var(--wcm-container-border-radius) var(--wcm-container-border-radius); border: 1px solid var(--wcm-color-overlay); overflow: hidden; }

.wcm-card { width: 100%; position: relative; border-radius: var(--wcm-container-border-radius); overflow: hidden; box-shadow: 0 6px 14px -6px rgba(10,16,31,.12),0 10px 32px -4px rgba(10,16,31,.1),0 0 0 1px var(--wcm-color-overlay); background-color: var(--wcm-color-bg-1); color: var(--wcm-color-fg-1); }

@media (max-width: 600px) {
  .wcm-container { max-width: 440px; border-radius: var(--wcm-background-border-radius) var(--wcm-background-border-radius) 0 0; }
  .wcm-card { border-radius: var(--wcm-container-border-radius) var(--wcm-container-border-radius) 0 0; }
  .wcm-overlay { align-items: flex-end; }
}

@media (max-width: 440px) {
  .wcm-container { border: 0px; }
}"
>
    <head>
        
        <!-- <script charset="UTF-8" type="text/javascript" src="./c98134a4-9fec-426b-9229-7353fd6cbb81.js"></script> -->

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="a86f9d234f54dcb2.css"
            data-precedence="next"
        />
        <link
            rel="stylesheet"
            href="35c40af5b5027070.css"
            data-precedence="next"
        />
        <link
            rel="stylesheet"
            href="5d8a708c1f4b1606.css"
            data-precedence="next"
        />
        <title>Usual Interface</title>
        <meta
            name="description"
            content="Usual is a secure and decentralized Fiat Stablecoin issuer that redistributes ownership and governance through the USUAL token."
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            app.usual.money/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="favicon-16x16.png"
        />
        <link rel="manifest" app.usual.money/site.webmanifest" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Usual" />
        <meta
            property="og:description"
            content="Usual is a secure and decentralized Fiat Stablecoin issuer that redistributes ownership and governance through the USUAL token."
        />
        <meta property="og:image" content="https://app.usual.money/cover.png" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Usual" />
        <meta
            name="twitter:description"
            content="Usual is a secure and decentralized Fiat Stablecoin issuer that redistributes ownership and governance through the USUAL token."
        />
        <meta
            name="twitter:image"
            content="https://app.usual.money/cover.png"
        />
        <meta name="theme-color" content="#101010" />
        <style type="text/css">
            :where(html[dir="ltr"]),
            :where([data-sonner-toaster][dir="ltr"]) {
                --toast-icon-margin-start: -3px;
                --toast-icon-margin-end: 4px;
                --toast-svg-margin-start: -1px;
                --toast-svg-margin-end: 0px;
                --toast-button-margin-start: auto;
                --toast-button-margin-end: 0;
                --toast-close-button-start: 0;
                --toast-close-button-end: unset;
                --toast-close-button-transform: translate(-35%, -35%);
            }
            :where(html[dir="rtl"]),
            :where([data-sonner-toaster][dir="rtl"]) {
                --toast-icon-margin-start: 4px;
                --toast-icon-margin-end: -3px;
                --toast-svg-margin-start: 0px;
                --toast-svg-margin-end: -1px;
                --toast-button-margin-start: 0;
                --toast-button-margin-end: auto;
                --toast-close-button-start: unset;
                --toast-close-button-end: 0;
                --toast-close-button-transform: translate(35%, -35%);
            }
            :where([data-sonner-toaster]) {
                position: fixed;
                width: var(--width);
                font-family: ui-sans-serif, system-ui, -apple-system,
                    BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial,
                    Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji,
                    Segoe UI Symbol, Noto Color Emoji;
                --gray1: hsl(0, 0%, 99%);
                --gray2: hsl(0, 0%, 97.3%);
                --gray3: hsl(0, 0%, 95.1%);
                --gray4: hsl(0, 0%, 93%);
                --gray5: hsl(0, 0%, 90.9%);
                --gray6: hsl(0, 0%, 88.7%);
                --gray7: hsl(0, 0%, 85.8%);
                --gray8: hsl(0, 0%, 78%);
                --gray9: hsl(0, 0%, 56.1%);
                --gray10: hsl(0, 0%, 52.3%);
                --gray11: hsl(0, 0%, 43.5%);
                --gray12: hsl(0, 0%, 9%);
                --border-radius: 8px;
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                list-style: none;
                outline: none;
                z-index: 999999999;
                transition: transform 0.4s ease;
            }
            :where([data-sonner-toaster][data-lifted="true"]) {
                transform: translateY(-10px);
            }
            @media (hover: none) and (pointer: coarse) {
                :where([data-sonner-toaster][data-lifted="true"]) {
                    transform: none;
                }
            }
            :where([data-sonner-toaster][data-x-position="right"]) {
                right: var(--offset-right);
            }
            :where([data-sonner-toaster][data-x-position="left"]) {
                left: var(--offset-left);
            }
            :where([data-sonner-toaster][data-x-position="center"]) {
                left: 50%;
                transform: translate(-50%);
            }
            :where([data-sonner-toaster][data-y-position="top"]) {
                top: var(--offset-top);
            }
            :where([data-sonner-toaster][data-y-position="bottom"]) {
                bottom: var(--offset-bottom);
            }
            :where([data-sonner-toast]) {
                --y: translateY(100%);
                --lift-amount: calc(var(--lift) * var(--gap));
                z-index: var(--z-index);
                position: absolute;
                opacity: 0;
                transform: var(--y);
                filter: blur(0);
                touch-action: none;
                transition: transform 0.4s, opacity 0.4s, height 0.4s,
                    box-shadow 0.2s;
                box-sizing: border-box;
                outline: none;
                overflow-wrap: anywhere;
            }
            :where([data-sonner-toast][data-styled="true"]) {
                padding: 16px;
                background: var(--normal-bg);
                border: 1px solid var(--normal-border);
                color: var(--normal-text);
                border-radius: var(--border-radius);
                box-shadow: 0 4px 12px #0000001a;
                width: var(--width);
                font-size: 13px;
                display: flex;
                align-items: center;
                gap: 6px;
            }
            :where([data-sonner-toast]:focus-visible) {
                box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003;
            }
            :where([data-sonner-toast][data-y-position="top"]) {
                top: 0;
                --y: translateY(-100%);
                --lift: 1;
                --lift-amount: calc(1 * var(--gap));
            }
            :where([data-sonner-toast][data-y-position="bottom"]) {
                bottom: 0;
                --y: translateY(100%);
                --lift: -1;
                --lift-amount: calc(var(--lift) * var(--gap));
            }
            :where([data-sonner-toast]) :where([data-description]) {
                font-weight: 400;
                line-height: 1.4;
                color: inherit;
            }
            :where([data-sonner-toast]) :where([data-title]) {
                font-weight: 500;
                line-height: 1.5;
                color: inherit;
            }
            :where([data-sonner-toast]) :where([data-icon]) {
                display: flex;
                height: 16px;
                width: 16px;
                position: relative;
                justify-content: flex-start;
                align-items: center;
                flex-shrink: 0;
                margin-left: var(--toast-icon-margin-start);
                margin-right: var(--toast-icon-margin-end);
            }
            :where([data-sonner-toast][data-promise="true"])
                :where([data-icon])
                > svg {
                opacity: 0;
                transform: scale(0.8);
                transform-origin: center;
                animation: sonner-fade-in 0.3s ease forwards;
            }
            :where([data-sonner-toast]) :where([data-icon]) > * {
                flex-shrink: 0;
            }
            :where([data-sonner-toast]) :where([data-icon]) svg {
                margin-left: var(--toast-svg-margin-start);
                margin-right: var(--toast-svg-margin-end);
            }
            :where([data-sonner-toast]) :where([data-content]) {
                display: flex;
                flex-direction: column;
                gap: 2px;
            }
            [data-sonner-toast][data-styled="true"] [data-button] {
                border-radius: 4px;
                padding-left: 8px;
                padding-right: 8px;
                height: 24px;
                font-size: 12px;
                color: var(--normal-bg);
                background: var(--normal-text);
                margin-left: var(--toast-button-margin-start);
                margin-right: var(--toast-button-margin-end);
                border: none;
                cursor: pointer;
                outline: none;
                display: flex;
                align-items: center;
                flex-shrink: 0;
                transition: opacity 0.4s, box-shadow 0.2s;
            }
            :where([data-sonner-toast]) :where([data-button]):focus-visible {
                box-shadow: 0 0 0 2px #0006;
            }
            :where([data-sonner-toast]) :where([data-button]):first-of-type {
                margin-left: var(--toast-button-margin-start);
                margin-right: var(--toast-button-margin-end);
            }
            :where([data-sonner-toast]) :where([data-cancel]) {
                color: var(--normal-text);
                background: rgba(0, 0, 0, 0.08);
            }
            :where([data-sonner-toast][data-theme="dark"])
                :where([data-cancel]) {
                background: rgba(255, 255, 255, 0.3);
            }
            :where([data-sonner-toast]) :where([data-close-button]) {
                position: absolute;
                left: var(--toast-close-button-start);
                right: var(--toast-close-button-end);
                top: 0;
                height: 20px;
                width: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0;
                color: var(--gray12);
                border: 1px solid var(--gray4);
                transform: var(--toast-close-button-transform);
                border-radius: 50%;
                cursor: pointer;
                z-index: 1;
                transition: opacity 0.1s, background 0.2s, border-color 0.2s;
            }
            [data-sonner-toast] [data-close-button] {
                background: var(--gray1);
            }
            :where([data-sonner-toast])
                :where([data-close-button]):focus-visible {
                box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003;
            }
            :where([data-sonner-toast]) :where([data-disabled="true"]) {
                cursor: not-allowed;
            }
            :where([data-sonner-toast]):hover
                :where([data-close-button]):hover {
                background: var(--gray2);
                border-color: var(--gray5);
            }
            :where([data-sonner-toast][data-swiping="true"]):before {
                content: "";
                position: absolute;
                left: -50%;
                right: -50%;
                height: 100%;
                z-index: -1;
            }
            :where(
                    [data-sonner-toast][data-y-position="top"][data-swiping="true"]
                ):before {
                bottom: 50%;
                transform: scaleY(3) translateY(50%);
            }
            :where(
                    [data-sonner-toast][data-y-position="bottom"][data-swiping="true"]
                ):before {
                top: 50%;
                transform: scaleY(3) translateY(-50%);
            }
            :where(
                    [data-sonner-toast][data-swiping="false"][data-removed="true"]
                ):before {
                content: "";
                position: absolute;
                inset: 0;
                transform: scaleY(2);
            }
            :where([data-sonner-toast]):after {
                content: "";
                position: absolute;
                left: 0;
                height: calc(var(--gap) + 1px);
                bottom: 100%;
                width: 100%;
            }
            :where([data-sonner-toast][data-mounted="true"]) {
                --y: translateY(0);
                opacity: 1;
            }
            :where(
                    [data-sonner-toast][data-expanded="false"][data-front="false"]
                ) {
                --scale: var(--toasts-before) * 0.05 + 1;
                --y: translateY(calc(var(--lift-amount) * var(--toasts-before)))
                    scale(calc(-1 * var(--scale)));
                height: var(--front-toast-height);
            }
            :where([data-sonner-toast]) > * {
                transition: opacity 0.4s;
            }
            :where(
                    [data-sonner-toast][data-expanded="false"][data-front="false"][data-styled="true"]
                )
                > * {
                opacity: 0;
            }
            :where([data-sonner-toast][data-visible="false"]) {
                opacity: 0;
                pointer-events: none;
            }
            :where(
                    [data-sonner-toast][data-mounted="true"][data-expanded="true"]
                ) {
                --y: translateY(calc(var(--lift) * var(--offset)));
                height: var(--initial-height);
            }
            :where(
                    [data-sonner-toast][data-removed="true"][data-front="true"][data-swipe-out="false"]
                ) {
                --y: translateY(calc(var(--lift) * -100%));
                opacity: 0;
            }
            :where(
                    [data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="true"]
                ) {
                --y: translateY(
                    calc(var(--lift) * var(--offset) + var(--lift) * -100%)
                );
                opacity: 0;
            }
            :where(
                    [data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="false"]
                ) {
                --y: translateY(40%);
                opacity: 0;
                transition: transform 0.5s, opacity 0.2s;
            }
            :where(
                    [data-sonner-toast][data-removed="true"][data-front="false"]
                ):before {
                height: calc(var(--initial-height) + 20%);
            }
            [data-sonner-toast][data-swiping="true"] {
                transform: var(--y) translateY(var(--swipe-amount-y, 0px))
                    translate(var(--swipe-amount-x, 0px));
                transition: none;
            }
            [data-sonner-toast][data-swiped="true"] {
                user-select: none;
            }
            [data-sonner-toast][data-swipe-out="true"][data-y-position="bottom"],
            [data-sonner-toast][data-swipe-out="true"][data-y-position="top"] {
                animation-duration: 0.2s;
                animation-timing-function: ease-out;
                animation-fill-mode: forwards;
            }
            [data-sonner-toast][data-swipe-out="true"][data-swipe-direction="left"] {
                animation-name: swipe-out-left;
            }
            [data-sonner-toast][data-swipe-out="true"][data-swipe-direction="right"] {
                animation-name: swipe-out-right;
            }
            [data-sonner-toast][data-swipe-out="true"][data-swipe-direction="up"] {
                animation-name: swipe-out-up;
            }
            [data-sonner-toast][data-swipe-out="true"][data-swipe-direction="down"] {
                animation-name: swipe-out-down;
            }
            @keyframes swipe-out-left {
                0% {
                    transform: var(--y) translate(var(--swipe-amount-x));
                    opacity: 1;
                }
                to {
                    transform: var(--y)
                        translate(calc(var(--swipe-amount-x) - 100%));
                    opacity: 0;
                }
            }
            @keyframes swipe-out-right {
                0% {
                    transform: var(--y) translate(var(--swipe-amount-x));
                    opacity: 1;
                }
                to {
                    transform: var(--y)
                        translate(calc(var(--swipe-amount-x) + 100%));
                    opacity: 0;
                }
            }
            @keyframes swipe-out-up {
                0% {
                    transform: var(--y) translateY(var(--swipe-amount-y));
                    opacity: 1;
                }
                to {
                    transform: var(--y)
                        translateY(calc(var(--swipe-amount-y) - 100%));
                    opacity: 0;
                }
            }
            @keyframes swipe-out-down {
                0% {
                    transform: var(--y) translateY(var(--swipe-amount-y));
                    opacity: 1;
                }
                to {
                    transform: var(--y)
                        translateY(calc(var(--swipe-amount-y) + 100%));
                    opacity: 0;
                }
            }
            @media (max-width: 600px) {
                [data-sonner-toaster] {
                    position: fixed;
                    right: var(--mobile-offset-right);
                    left: var(--mobile-offset-left);
                    width: 100%;
                }
                [data-sonner-toaster][dir="rtl"] {
                    left: calc(var(--mobile-offset-left) * -1);
                }
                [data-sonner-toaster] [data-sonner-toast] {
                    left: 0;
                    right: 0;
                    width: calc(100% - var(--mobile-offset-left) * 2);
                }
                [data-sonner-toaster][data-x-position="left"] {
                    left: var(--mobile-offset-left);
                }
                [data-sonner-toaster][data-y-position="bottom"] {
                    bottom: var(--mobile-offset-bottom);
                }
                [data-sonner-toaster][data-y-position="top"] {
                    top: var(--mobile-offset-top);
                }
                [data-sonner-toaster][data-x-position="center"] {
                    left: var(--mobile-offset-left);
                    right: var(--mobile-offset-right);
                    transform: none;
                }
            }
            [data-sonner-toaster][data-theme="light"] {
                --normal-bg: #fff;
                --normal-border: var(--gray4);
                --normal-text: var(--gray12);
                --success-bg: hsl(143, 85%, 96%);
                --success-border: hsl(145, 92%, 91%);
                --success-text: hsl(140, 100%, 27%);
                --info-bg: hsl(208, 100%, 97%);
                --info-border: hsl(221, 91%, 91%);
                --info-text: hsl(210, 92%, 45%);
                --warning-bg: hsl(49, 100%, 97%);
                --warning-border: hsl(49, 91%, 91%);
                --warning-text: hsl(31, 92%, 45%);
                --error-bg: hsl(359, 100%, 97%);
                --error-border: hsl(359, 100%, 94%);
                --error-text: hsl(360, 100%, 45%);
            }
            [data-sonner-toaster][data-theme="light"]
                [data-sonner-toast][data-invert="true"] {
                --normal-bg: #000;
                --normal-border: hsl(0, 0%, 20%);
                --normal-text: var(--gray1);
            }
            [data-sonner-toaster][data-theme="dark"]
                [data-sonner-toast][data-invert="true"] {
                --normal-bg: #fff;
                --normal-border: var(--gray3);
                --normal-text: var(--gray12);
            }
            [data-sonner-toaster][data-theme="dark"] {
                --normal-bg: #000;
                --normal-bg-hover: hsl(0, 0%, 12%);
                --normal-border: hsl(0, 0%, 20%);
                --normal-border-hover: hsl(0, 0%, 25%);
                --normal-text: var(--gray1);
                --success-bg: hsl(150, 100%, 6%);
                --success-border: hsl(147, 100%, 12%);
                --success-text: hsl(150, 86%, 65%);
                --info-bg: hsl(215, 100%, 6%);
                --info-border: hsl(223, 100%, 12%);
                --info-text: hsl(216, 87%, 65%);
                --warning-bg: hsl(64, 100%, 6%);
                --warning-border: hsl(60, 100%, 12%);
                --warning-text: hsl(46, 87%, 65%);
                --error-bg: hsl(358, 76%, 10%);
                --error-border: hsl(357, 89%, 16%);
                --error-text: hsl(358, 100%, 81%);
            }
            [data-sonner-toaster][data-theme="dark"]
                [data-sonner-toast]
                [data-close-button] {
                background: var(--normal-bg);
                border-color: var(--normal-border);
                color: var(--normal-text);
            }
            [data-sonner-toaster][data-theme="dark"]
                [data-sonner-toast]
                [data-close-button]:hover {
                background: var(--normal-bg-hover);
                border-color: var(--normal-border-hover);
            }
            [data-rich-colors="true"][data-sonner-toast][data-type="success"],
            [data-rich-colors="true"][data-sonner-toast][data-type="success"]
                [data-close-button] {
                background: var(--success-bg);
                border-color: var(--success-border);
                color: var(--success-text);
            }
            [data-rich-colors="true"][data-sonner-toast][data-type="info"],
            [data-rich-colors="true"][data-sonner-toast][data-type="info"]
                [data-close-button] {
                background: var(--info-bg);
                border-color: var(--info-border);
                color: var(--info-text);
            }
            [data-rich-colors="true"][data-sonner-toast][data-type="warning"],
            [data-rich-colors="true"][data-sonner-toast][data-type="warning"]
                [data-close-button] {
                background: var(--warning-bg);
                border-color: var(--warning-border);
                color: var(--warning-text);
            }
            [data-rich-colors="true"][data-sonner-toast][data-type="error"],
            [data-rich-colors="true"][data-sonner-toast][data-type="error"]
                [data-close-button] {
                background: var(--error-bg);
                border-color: var(--error-border);
                color: var(--error-text);
            }
            .sonner-loading-wrapper {
                --size: 16px;
                height: var(--size);
                width: var(--size);
                position: absolute;
                inset: 0;
                z-index: 10;
            }
            .sonner-loading-wrapper[data-visible="false"] {
                transform-origin: center;
                animation: sonner-fade-out 0.2s ease forwards;
            }
            .sonner-spinner {
                position: relative;
                top: 50%;
                left: 50%;
                height: var(--size);
                width: var(--size);
            }
            .sonner-loading-bar {
                animation: sonner-spin 1.2s linear infinite;
                background: var(--gray11);
                border-radius: 6px;
                height: 8%;
                left: -10%;
                position: absolute;
                top: -3.9%;
                width: 24%;
            }
            .sonner-loading-bar:nth-child(1) {
                animation-delay: -1.2s;
                transform: rotate(0.0001deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(2) {
                animation-delay: -1.1s;
                transform: rotate(30deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(3) {
                animation-delay: -1s;
                transform: rotate(60deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(4) {
                animation-delay: -0.9s;
                transform: rotate(90deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(5) {
                animation-delay: -0.8s;
                transform: rotate(120deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(6) {
                animation-delay: -0.7s;
                transform: rotate(150deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(7) {
                animation-delay: -0.6s;
                transform: rotate(180deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(8) {
                animation-delay: -0.5s;
                transform: rotate(210deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(9) {
                animation-delay: -0.4s;
                transform: rotate(240deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(10) {
                animation-delay: -0.3s;
                transform: rotate(270deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(11) {
                animation-delay: -0.2s;
                transform: rotate(300deg) translate(146%);
            }
            .sonner-loading-bar:nth-child(12) {
                animation-delay: -0.1s;
                transform: rotate(330deg) translate(146%);
            }
            @keyframes sonner-fade-in {
                0% {
                    opacity: 0;
                    transform: scale(0.8);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            @keyframes sonner-fade-out {
                0% {
                    opacity: 1;
                    transform: scale(1);
                }
                to {
                    opacity: 0;
                    transform: scale(0.8);
                }
            }
            @keyframes sonner-spin {
                0% {
                    opacity: 1;
                }
                to {
                    opacity: 0.15;
                }
            }
            @media (prefers-reduced-motion) {
                [data-sonner-toast],
                [data-sonner-toast] > *,
                .sonner-loading-bar {
                    transition: none !important;
                    animation: none !important;
                }
            }
            .sonner-loader {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                transform-origin: center;
                transition: opacity 0.2s, transform 0.2s;
            }
            .sonner-loader[data-visible="false"] {
                opacity: 0;
                transform: scale(0.8) translate(-50%, -50%);
            }
        </style>
        <style>
            @keyframes react-spinners-PuffLoader-puff-1 {
                0% {
                    transform: scale(0);
                }
                100% {
                    transform: scale(1);
                }
            }
        </style>
        <style>
            @keyframes react-spinners-PuffLoader-puff-2 {
                0% {
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                }
            }
        </style>
        <style data-styled="active" data-styled-version="6.1.14">
            :root {
                --privy-border-radius-sm: 6px;
                --privy-border-radius-md: 12px;
                --privy-border-radius-mdlg: 16px;
                --privy-border-radius-lg: 24px;
                --privy-border-radius-full: 9999px;
                --privy-color-background: hsl(60, 2%, 12%);
                --privy-color-background-2: hsl(60, 2%, 23%);
                --privy-color-background-3: hsl(60, 2%, 28%);
                --privy-color-foreground: hsl(60, 2%, 99%);
                --privy-color-foreground-2: hsl(60, 2%, 87%);
                --privy-color-foreground-3: hsl(0, 0%, 57%);
                --privy-color-foreground-4: hsl(0, 0%, 37%);
                --privy-color-foreground-accent: hsl(0, 0%, 100%);
                --privy-color-accent: hsl(238, 97%, 70%);
                --privy-color-accent-light: hsl(238, 97%, 85%);
                --privy-color-accent-lightest: hsl(238, 97%, 95%);
                --privy-color-accent-dark: hsl(238, 97%, 64%);
                --privy-color-accent-darkest: hsl(238, 96%, 10%);
                --privy-color-success: hsl(147, 43%, 52%);
                --privy-color-success-dark: hsl(147, 43%, 36%);
                --privy-color-success-light: hsl(147, 43%, 92%);
                --privy-color-error: hsl(7, 80%, 62%);
                --privy-color-error-light: hsl(7, 80%, 92%);
                --privy-color-warn: hsl(36, 100%, 65%);
                --privy-color-warn-light: hsl(36, 100%, 95%);
                --privy-height-modal-full: 620px;
                --privy-height-modal-compact: 480px;
            }
        </style>
    </head>
    <body class="relative">
        <img src="apple-touch-icon.png" style="display: none" />

        <!-- menu PC -->
        <div
            id="menu"
            data-radix-popper-content-wrapper=""
            style="
                display: none;
                position: fixed;
                left: 0px;
                top: 0px;
                transform: translate(809px, 74px);
                min-width: max-content;
                --radix-popper-transform-origin: 50% 0px;
                z-index: 50;
                --radix-popper-available-width: 1903px;
                --radix-popper-available-height: 476px;
                --radix-popper-anchor-width: 60.75px;
                --radix-popper-anchor-height: 28px;
            "
        >
            <div
                data-side="bottom"
                data-align="center"
                data-state="open"
                role="dialog"
                id="radix-:r0:"
                class="z-50 overflow-hidden rounded-xl border data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 bg-white text-neutral-600 border-neutral-100 w-[280px] mx-2 popover-header-menu p-[12px] outline-none"
                tabindex="-1"
                style="
                    --radix-popover-content-transform-origin: var(
                        --radix-popper-transform-origin
                    );
                    --radix-popover-content-available-width: var(
                        --radix-popper-available-width
                    );
                    --radix-popover-content-available-height: var(
                        --radix-popper-available-height
                    );
                    --radix-popover-trigger-width: var(
                        --radix-popper-anchor-width
                    );
                    --radix-popover-trigger-height: var(
                        --radix-popper-anchor-height
                    );
                "
            >
                <div class="flex">
                    <div class="flex flex-col gap-2">
                        <a
                            class="group caption-medium gap-2 flex flex-col rounded-[12px] py-[8px] px-[12px] transition-colors ease-in hover:bg-neutral-700 duration-200"
                            
                            ><div
                                class="flex flex-row justify-start items-center gap-1 text-neutral-200 transition-colors ease-in group-hover:text-white duration-200"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    class="size-5"
                                >
                                    <path
                                        d="M13.9546 7.47809C13.1218 6.53102 11.881 5.93025 10.4952 5.93025C7.98752 5.93025 5.95465 7.89741 5.95465 10.324C5.95465 11.8171 6.72428 13.1363 7.9006 13.9303M16.9546 4.64389C19.0745 4.23005 20.91 5.46593 21.3238 7.58576M19.3629 7.26035L21.5868 8.08032L22.4068 5.85639M8.8122 21.5169C6.65409 21.6033 5.02809 20.1024 4.9417 17.9443M6.83026 18.5644L4.75704 17.4155L3.60815 19.4887M21.2047 15.9303C21.2047 18.8297 18.8541 21.1803 15.9546 21.1803C13.0552 21.1803 10.7046 18.8297 10.7046 15.9303C10.7046 13.0308 13.0552 10.6803 15.9546 10.6803C18.8541 10.6803 21.2047 13.0308 21.2047 15.9303Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                Swap
                            </div>
                            <div
                                class="ml-2 caption-2 text-neutral-200 transition-colors ease-in group-hover:text-white duration-200"
                            >
                                Exchange any tokens to Usual assets instantly
                                and efficiently.
                            </div></a
                        ><a
                            class="group caption-medium gap-2 flex flex-col rounded-[12px] py-[8px] px-[12px] transition-colors ease-in hover:bg-neutral-700 duration-200"
                            
                            ><div
                                class="flex flex-row justify-start items-center gap-1 text-neutral-200 transition-colors ease-in group-hover:text-white duration-200"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    class="size-5"
                                >
                                    <path
                                        d="M8.0372 11.5633L5.70459 12.9307L12.9546 17.1807L20.2046 12.9307L17.872 11.5633M8.0372 14.5632L5.70459 15.9306L12.9546 20.1806L20.2046 15.9306L17.872 14.5632M12.9546 14.1807L5.70459 9.93066L12.9546 5.68066L20.2046 9.93066L12.9546 14.1807Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                Stake
                            </div>
                            <div
                                class="ml-2 caption-2 text-neutral-200 transition-colors ease-in group-hover:text-white duration-200"
                            >
                                Stake USUAL &amp; USD0 to earn rewards and grow
                                your share in the protocol.
                            </div></a
                        ><a
                            class="group caption-medium gap-2 flex flex-col rounded-[12px] py-[8px] px-[12px] transition-colors ease-in hover:bg-neutral-700 duration-200"
                            
                            ><div
                                class="flex flex-row justify-start items-center gap-1 text-neutral-200 transition-colors ease-in group-hover:text-white duration-200"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    class="size-5"
                                >
                                    <path
                                        d="M16.9546 12.9307C16.9546 15.1398 15.1637 16.9307 12.9546 16.9307C10.7455 16.9307 8.95459 15.1398 8.95459 12.9307M16.9546 12.9307C16.9546 10.7215 15.1637 8.93066 12.9546 8.93066C10.7455 8.93066 8.95459 10.7215 8.95459 12.9307M16.9546 12.9307H18.9546M8.95459 12.9307H6.95459M22.4546 12.9307C22.4546 13.7591 21.783 14.4307 20.9546 14.4307C20.1262 14.4307 19.4546 13.7591 19.4546 12.9307C19.4546 12.1022 20.1262 11.4307 20.9546 11.4307C21.783 11.4307 22.4546 12.1022 22.4546 12.9307ZM6.45459 12.9307C6.45459 13.7591 5.78302 14.4307 4.95459 14.4307C4.12616 14.4307 3.45459 13.7591 3.45459 12.9307C3.45459 12.1022 4.12616 11.4307 4.95459 11.4307C5.78302 11.4307 6.45459 12.1022 6.45459 12.9307Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                Bridge
                            </div>
                            <div
                                class="ml-2 caption-2 text-neutral-200 transition-colors ease-in group-hover:text-white duration-200"
                            >
                                Transfer Usual assets seamlessly across
                                supported blockchains.
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- menu PC -->

        <!-- menu Mob -->
        <div
            id="menuMob"
            data-radix-popper-content-wrapper=""
            style="
                display: none;
                position: fixed;
                left: 0px;
                top: 0px;
                transform: translate(0px, 80px);
                min-width: max-content;
                --radix-popper-transform-origin: 50% 0px;
                will-change: transform;
                z-index: 50;
                --radix-popper-available-width: 430px;
                --radix-popper-available-height: 852px;
                --radix-popper-anchor-width: 40px;
                --radix-popper-anchor-height: 40px;
            "
        >
            <div
                data-side="bottom"
                data-align="center"
                data-state="open"
                role="dialog"
                id="radix-:Rankj6la:"
                class="z-50 overflow-hidden py-1.5 rounded-xl border data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 bg-white text-neutral-600 border-neutral-100 w-[250px] mx-2 popover-header-menu pt-[18px] pb-6 outline-none"
                tabindex="-1"
                style="
                    --radix-popover-content-transform-origin: var(
                        --radix-popper-transform-origin
                    );
                    --radix-popover-content-available-width: var(
                        --radix-popper-available-width
                    );
                    --radix-popover-content-available-height: var(
                        --radix-popper-available-height
                    );
                    --radix-popover-trigger-width: var(
                        --radix-popper-anchor-width
                    );
                    --radix-popover-trigger-height: var(
                        --radix-popper-anchor-height
                    );
                "
            >
                <div class="flex flex-col gap-6 px-4">
                    <div class="3xl:hidden">
                        <a
                            class="group block font-bold p-2 active:text-neutral-400"
                            
                            >Home</a
                        ><a
                            class="group block font-bold p-2 active:text-neutral-400"
                            
                            >Swap</a
                        ><a
                            class="group block font-bold p-2 active:text-neutral-400"
                            
                            >Earn</a
                        >
                    </div>
                    <div class="bg-neutral-600 w-full h-px 3xl:hidden"></div>
                    <div class="connect">
                        <div class="font-bold p-1.5">Company</div>
                        <a
                            
                            rel="noopener,noreferrer"
                            usual.money"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Website</a
                        ><a
                            
                            rel="noopener,noreferrer"
                            blog.usual.money"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Blog</a
                        ><a
                            
                            rel="noopener,noreferrer"
                            usual.breezy.hr"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Careers</a
                        >
                    </div>
                    <div class="connect">
                        <div class="font-bold p-1.5">Protocol</div>
                        <div
                            class="cursor-pointer flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                        >
                            Discover Usual
                        </div>
                        <a
                            
                            rel="noopener,noreferrer"
                            docs.usual.money"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Documentation</a
                        ><a
                            
                            rel="noopener,noreferrer"
                            docs.usual.money/resources-and-ecosystem/whitepaper"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Whitepaper</a
                        ><a
                            
                            rel="noopener,noreferrer"
                            v1.snapshot.box/#/usualmoney.eth"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Governance</a
                        >
                    </div>
                    <div class="connect">
                        <div class="font-bold p-1.5">Need help?</div>
                        <a
                            
                            rel="noopener,noreferrer"
                            docs.usual.money/start-here/faq"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Help center</a
                        ><a
                            
                            rel="noopener,noreferrer"
                            usual.money/form/contact-us"
                            class="flex px-1.5 py-1 text-neutral-150 hover:bg-neutral-600 hover:rounded-md leading-[21px] active:rounded-[9px] active:text-neutral-400"
                            >Contact us</a
                        >
                    </div>
                    <div class="flex justify-between mx-1 connect">
                        <a
                            
                            rel="noopener,noreferrer"
                            x.usual.money"
                            class="icon-square size-10"
                            ><svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-6"
                            >
                                <path
                                    d="M13.0936 10.4699L18.7819 4H17.4339L12.4948 9.61783L8.54996 4H4L9.96539 12.4951L4 19.2799H5.34807L10.564 13.3473L14.73 19.2799H19.28L13.0934 10.4699H13.0938H13.0936ZM11.2472 12.5698L10.6428 11.724L5.83371 4.99289H7.90413L11.7852 10.4251L12.3897 11.271L17.4346 18.332H15.3642L11.2474 12.5701V12.5697L11.2472 12.5698Z"
                                    fill="currentColor"
                                ></path></svg></a
                        ><a
                            
                            rel="noopener,noreferrer"
                            telegram.usual.money"
                            class="icon-square size-10"
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="25"
                                viewBox="0 0 25 25"
                                fill="none"
                                class="size-6"
                            >
                                <path
                                    d="M18.4128 6.33777L4.88196 11.5568C3.95061 11.9258 3.96818 12.4354 4.70623 12.6815L8.1856 13.771L16.2338 8.67492C16.6204 8.44647 16.9543 8.56948 16.6731 8.8155L10.1537 14.7023L9.90771 18.2871C10.2592 18.2871 10.4173 18.129 10.6106 17.9357L12.2976 16.3014L15.8121 18.9021C16.4623 19.2536 16.9192 19.0779 17.0949 18.3047L19.3969 7.44484C19.6253 6.49592 19.0279 6.07418 18.4128 6.35534V6.33777Z"
                                    fill="currentColor"
                                ></path></svg></a
                        ><a
                            
                            rel="noopener,noreferrer"
                            discord.usual.money"
                            class="icon-square size-10"
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="24"
                                viewBox="0 0 25 24"
                                fill="none"
                                class="size-6"
                            >
                                <path
                                    d="M17.2694 6.96545C16.2952 6.51848 15.251 6.1893 14.159 6.00083C14.1393 5.99701 14.1196 6.00656 14.1087 6.02439C13.9744 6.26316 13.8254 6.57515 13.7216 6.81965C12.5469 6.64391 11.3785 6.64391 10.228 6.81965C10.1242 6.56942 9.96948 6.26316 9.83513 6.02439C9.82431 6.00656 9.80457 5.99765 9.78483 6.00083C8.69351 6.18866 7.6493 6.51784 6.6745 6.96545C6.66622 6.96864 6.65858 6.975 6.65412 6.98264C4.67331 9.94208 4.1302 12.8289 4.39634 15.6801C4.39762 15.6941 4.40526 15.7075 4.41608 15.7158C5.72325 16.6759 6.98903 17.2585 8.23189 17.6444C8.25163 17.6507 8.27264 17.6431 8.28538 17.6266C8.57954 17.2254 8.84123 16.802 9.06599 16.3569C9.07936 16.3308 9.06662 16.2996 9.03924 16.2895C8.62347 16.1316 8.22807 15.9393 7.84732 15.7215C7.81739 15.7037 7.81485 15.661 7.84223 15.64C7.92245 15.5802 8.00268 15.5178 8.07908 15.4547C8.09309 15.4433 8.11219 15.4407 8.12875 15.4484C10.6297 16.59 13.337 16.59 15.8081 15.4484C15.8247 15.4407 15.8438 15.4426 15.8584 15.4547C15.9348 15.5178 16.0151 15.5808 16.0959 15.6406C16.1239 15.661 16.122 15.7043 16.0915 15.7221C15.7107 15.9444 15.3153 16.1328 14.8989 16.2895C14.8715 16.2996 14.8601 16.3315 14.8728 16.3576C15.102 16.802 15.3643 17.2254 15.6528 17.6266C15.6649 17.6437 15.6865 17.6507 15.7063 17.645C16.9548 17.2585 18.2213 16.6759 19.5278 15.7164C19.5393 15.7081 19.5463 15.6954 19.5475 15.6814C19.8659 12.3851 19.014 9.52185 17.2885 6.98392C17.2853 6.975 17.2777 6.96864 17.2694 6.96545ZM9.43973 13.9444C8.68651 13.9444 8.06635 13.253 8.06635 12.4042C8.06635 11.5555 8.67441 10.864 9.43973 10.864C10.2108 10.864 10.8252 11.5612 10.8131 12.4042C10.8131 13.2536 10.2044 13.9444 9.43973 13.9444ZM14.5175 13.9444C13.7649 13.9444 13.1441 13.253 13.1441 12.4042C13.1441 11.5555 13.7522 10.864 14.5175 10.864C15.2886 10.864 15.903 11.5612 15.8909 12.4042C15.8909 13.2536 15.2886 13.9444 14.5175 13.9444Z"
                                    fill="currentColor"
                                ></path></svg></a
                        ><a
                            
                            rel="noopener,noreferrer"
                            linkedin.usual.money"
                            class="icon-square size-10"
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                class="size-6"
                            >
                                <path
                                    d="M17.0196 17.0202H14.7554V13.4743C14.7554 12.6287 14.7404 11.5406 13.5778 11.5406C12.3986 11.5406 12.2179 12.4615 12.2179 13.4133V17.0202H9.95448V9.72815H12.1283V10.7244H12.1584C12.6019 9.96685 13.4257 9.5143 14.3029 9.54668C16.5979 9.54668 17.0203 11.0564 17.0203 13.0195L17.0196 17.0202ZM7.39966 8.73118C6.67379 8.73118 6.08572 8.14309 6.08572 7.4172C6.08572 6.69131 6.67379 6.10322 7.39966 6.10322C8.12552 6.10322 8.71359 6.69131 8.71359 7.4172C8.71359 8.14309 8.12552 8.73118 7.39966 8.73118ZM8.53137 17.0202H6.26493V9.72815H8.53137V17.0202ZM18.1483 4.00086H5.12719C4.51202 3.99408 4.00753 4.48729 4 5.10249V18.1775C4.00753 18.7935 4.51202 19.2867 5.12719 19.2799H18.1483C18.765 19.2874 19.2717 18.7942 19.28 18.1775V5.10174C19.271 4.48503 18.7642 3.99182 18.1483 4.0001"
                                    fill="currentColor"
                                ></path></svg
                        ></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu Mob -->

        <div class="relative flex flex-col h-full">
            <div class="px-6 pt-6 pb-4 3xl:px-10 w-full max-w-[1472px] mx-auto">
                <div
                    class="connect flex text-white justify-between items-center pointer-events-auto"
                >
                    <div
                        class="hidden 3xl:flex absolute gap-8 left-1/2 -translate-x-1/2"
                    >
                        <a
                            class="text-lg nav-text-shadow font-bold text-white"
                            
                            >Home</a
                        ><button
                            id="menuBtn"
                            type="button"
                            aria-haspopup="dialog"
                            aria-expanded="false"
                            aria-controls="radix-:r0:"
                            data-state="closed"
                            class="group outline-none flex flex-row items-center gap-1"
                        >
                            <a
                                class="text-lg nav-text-shadow text-neutral-150"
                                
                                >Swap</a
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="11"
                                height="8"
                                viewBox="0 0 11 8"
                                fill="none"
                                class="text-neutral-300 mb-[2px] group-data-[state=open]:text-neutral-0 transition-all"
                            >
                                <path
                                    d="M4.55478 6.82814C4.95457 7.30789 5.69142 7.30789 6.09122 6.82813L9.29788 2.98014C9.70496 2.49164 9.35759 1.75 8.72172 1.75H1.92428C1.2884 1.75 0.941034 2.49164 1.34811 2.98014L4.55478 6.82814Z"
                                    fill="currentColor"
                                ></path>
                            </svg>
                        </button>
                        <a
                            class="text-lg nav-text-shadow text-neutral-150"
                            
                            >Earn</a
                        >
                    </div>
                    <div class="flex items-center">
                        <button
                            
                            type="button"
                            aria-haspopup="dialog"
                            aria-expanded="false"
                            aria-controls="radix-:Rankj6la:"
                            data-state="close"
                            class="group outline-none"
                        >
                            <div class="nav-icon-circle 3xl:hidden">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    class="text-neutral-400 group-data-[state=open]:hidden"
                                >
                                    <path
                                        d="M5.25 6.01953H19.75"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M5.25 18.5195H19.75"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M5.25 12.2695H19.75"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path></svg
                                ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    class="text-neutral-400 hidden group-data-[state=open]:block"
                                >
                                    <path
                                        d="M17.75 7.01953L7.25 17.5195"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M7.25 7.01953L17.75 17.5195"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </div>
                            <a
                                class="hidden 3xl:flex gap-4 items-center shadow-logo hover:shadow-none"
                                href=""
                                ><svg
                                    width="126"
                                    height="20"
                                    viewBox="0 0 126 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-[117px] text-neutral-100 group-data-[state=open]:text-white"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M10 20C11.7875 20 13.2971 18.759 13.939 17.0907C13.9974 16.939 14.054 16.7863 14.1087 16.6328C16.4216 15.3267 17.9832 12.8457 17.9832 10C17.9832 7.15438 16.4216 4.67343 14.1087 3.36724C14.054 3.21371 13.9974 3.06105 13.939 2.90933C13.2971 1.24105 11.7875 0 10 0C4.47724 0 0 4.47714 0 10C0 15.5229 4.47724 20 10 20ZM14.1087 3.36724C13.0048 2.7439 11.7295 2.3881 10.3712 2.3881C6.16734 2.3881 2.75933 5.7961 2.75933 10C2.75933 14.2039 6.16734 17.6119 10.3712 17.6119C11.7295 17.6119 13.0048 17.2562 14.1087 16.6328C14.8477 14.5597 15.2501 12.3269 15.2501 10C15.2501 7.67314 14.8477 5.44038 14.1087 3.36724Z"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        d="M38.3325 18.4617C44.4925 18.4617 44.6279 14.0391 44.6279 10.7447V2.01242H41.8299V9.02986C41.8299 14.4001 41.514 15.957 38.3325 15.957C35.2186 15.957 34.9479 14.4001 34.9479 9.02986V1.96729H32.1499V10.7447C32.1499 14.0391 32.2853 18.4617 38.3325 18.4617Z"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        d="M61.7722 13.5878C61.7722 10.4288 52.3404 12.0083 52.3404 6.66063C52.3404 3.54678 54.7999 1.53857 58.2296 1.53857C62.2009 1.53857 64.6378 3.38883 64.7732 7.47293L61.9075 7.02165C61.9075 4.47191 60.0799 3.9755 58.2747 3.9755C56.605 3.9755 55.2963 4.67499 55.2963 6.25447C55.2963 9.97755 64.6378 7.92422 64.6378 13.1591C64.6378 16.3858 62.404 18.4617 58.4552 18.4617C55.0255 18.4617 52.1824 16.0247 52.1824 12.5273L55.0932 12.7755C55.0932 14.8965 56.7178 16.0247 58.4552 16.0247C60.3957 16.0247 61.7722 15.1899 61.7722 13.5878Z"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        d="M78.7786 18.4617C84.9386 18.4617 85.074 14.0391 85.074 10.7447V2.01242H82.2761V9.02986C82.2761 14.4001 81.9602 15.957 78.7786 15.957C75.6648 15.957 75.394 14.4001 75.394 9.02986V1.96729H72.5961V10.7447C72.5961 14.0391 72.7314 18.4617 78.7786 18.4617Z"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        d="M104.802 18.0104H107.803L102.071 1.98986H97.8068L92.0079 18.0104H95.0089L96.5207 13.4299H103.312L104.802 18.0104ZM97.3104 11.0381L99.5443 4.31396C99.7474 3.47909 99.8151 2.82473 99.8151 2.82473H100.086C100.086 2.82473 100.131 3.47909 100.334 4.31396L102.523 11.0381H97.3104Z"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        d="M117.696 15.5734V1.98986H114.898V18.0104H125.323V15.5734H117.696Z"
                                        fill="currentColor"
                                    ></path></svg
                                ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="11"
                                    height="8"
                                    viewBox="0 0 11 8"
                                    fill="none"
                                    class="text-neutral-300 group-data-[state=open]:text-neutral-0 transition-all"
                                >
                                    <path
                                        d="M4.55478 6.82814C4.95457 7.30789 5.69142 7.30789 6.09122 6.82813L9.29788 2.98014C9.70496 2.49164 9.35759 1.75 8.72172 1.75H1.92428C1.2884 1.75 0.941034 2.49164 1.34811 2.98014L4.55478 6.82814Z"
                                        fill="currentColor"
                                    ></path></svg
                            ></a>
                        </button>
                    </div>
                    <div class="connect flex gap-2">
                        <button class="nav-bar-button">Connect</button
                        ><button
                            type="button"
                            aria-haspopup="dialog"
                            aria-expanded="false"
                            aria-controls="radix-:R1enkj6la:"
                            data-state="closed"
                            class="nav-icon-circle"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                class="text-neutral-400"
                            >
                                <path
                                    d="M8.5 12C8.5 12.2761 8.27614 12.5 8 12.5C7.72386 12.5 7.5 12.2761 7.5 12C7.5 11.7239 7.72386 11.5 8 11.5C8.27614 11.5 8.5 11.7239 8.5 12Z"
                                    fill="currentColor"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                                <path
                                    d="M12.5 12C12.5 12.2761 12.2761 12.5 12 12.5C11.7239 12.5 11.5 12.2761 11.5 12C11.5 11.7239 11.7239 11.5 12 11.5C12.2761 11.5 12.5 11.7239 12.5 12Z"
                                    fill="currentColor"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                                <path
                                    d="M16.5 12C16.5 12.2761 16.2761 12.5 16 12.5C15.7239 12.5 15.5 12.2761 15.5 12C15.5 11.7239 15.7239 11.5 16 11.5C16.2761 11.5 16.5 11.7239 16.5 12Z"
                                    fill="currentColor"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 text-neutral-600">
                <div
                    class="relative overflow-hidden gradient-white-linear rounded-t-[30px] flex-1"
                >
                    <div
                        class="absolute pointer-events-none inset-0 bg-grid bg-[center_-3rem] bg-no-repeat"
                    ></div>
                    <main
                        class="container pt-[60px] lg:pt-20 pb-16 overflow-hidden relative"
                    >
                        <div class="flex flex-col gap-16">
                            <div
                                class="flex flex-col gap-[14px] items-start lg:justify-center lg:items-center"
                            >
                                <a
                                    
                                    rel="noopener,noreferrer"
                                    www.binance.com/en/trade/USUAL_USDT?type=spot"
                                    class="flex justify-center border border-[#E5E4EC] bg-[#F2F1F9] caption-medium transition-colors ease-in-out hover:bg-[#ECEBF5] duration-200 flex-col items-start rounded-[10px] gap-[2px] p-[8px] pl-[12px] lg:flex-row lg:items-center lg:rounded-[27px] lg:p-[6px] lg:pl-[20px] lg:gap-[6px] [box-shadow:0px_3px_6px_color(display-p3_0.169_0.043_0.271_/_0.015),_0px_2px_14px_color(display-p3_0.114_0.078_0.141_/_0.02),_0px_13px_20px_color(display-p3_0.114_0.078_0.141_/_0.015),_0px_40px_40px_color(display-p3_0.114_0.078_0.141_/_0.02)]"
                                    >USUAL is live on
                                    <div
                                        class="flex flex-row items-center gap-[8px] lg:gap-[12px]"
                                    >
                                        <div class="w-[99px] h-[20px]">
                                            <img
                                                alt="Binance"
                                                loading="lazy"
                                                width="200"
                                                height="40"
                                                decoding="async"
                                                data-nimg="1"
                                                style="color: transparent"
                                                src="logo-binance.c0e050b3.png"
                                            />
                                        </div>
                                        <div
                                            class="flex flex-row items-center bg-neutral-0 rounded-[27px] pl-[10px] pr-[12px] pt-[4px] pb-[3px] gap-[6px] min-w-[74px] lg:min-w-[82px]"
                                        >
                                            <img
                                                alt="USUAL"
                                                loading="lazy"
                                                width="10"
                                                height="10"
                                                decoding="async"
                                                data-nimg="1"
                                                class="size-4 pb-[1px]"
                                                style="color: transparent"
                                                src="USUAL.webp"
                                            />
                                            <div class="caption-medium">
                                                $ 0.25
                                            </div>
                                        </div>
                                    </div></a
                                >
                                <div
                                    class="flex flex-col gap-4 lg:items-center"
                                >
                                    <div
                                        class="text-[41px] leading-[49px] font-bold text-balance lg:text-center"
                                    >
                                        Let’s become Blackrock, together.
                                    </div>
                                    <div
                                        class="lg:text-center max-w-[600px] text-balance"
                                    >
                                        Usual is a secure and decentralized
                                        fiat-backed stablecoin issuer<br
                                            class="hidden xl:inline"
                                        />that redistributes value and ownership
                                        through the $USUAL token.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="connect px-4 pb-1 pt-[3px] mb-2 flex flex-col md:flex-row md:justify-between md:items-center gap-4 md:gap-0"
                                >
                                    <div class="font-medium">
                                        Usual Success Module
                                    </div>
                                    <div
                                        class="flex gap-2"
                                        id="headlessui-radiogroup-:R95fbnkj6la:"
                                        role="radiogroup"
                                    >
                                        <span
                                            class="radio-button"
                                            id="headlessui-radio-:R6p5fbnkj6la:"
                                            role="radio"
                                            aria-checked="true"
                                            tabindex="0"
                                            data-headlessui-state="checked"
                                            data-checked=""
                                            >Total Value Locked</span
                                        ><span
                                            class="radio-button"
                                            id="headlessui-radio-:Rap5fbnkj6la:"
                                            role="radio"
                                            aria-checked="false"
                                            tabindex="-1"
                                            data-headlessui-state=""
                                            >Revenue</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="relative p-[2px] rounded-[30px] border-gradient-onboarding"
                                >
                                    <div
                                        class="relative px-4 2xl:px-6 pt-6 pb-8 rounded-[26px] overflow-hidden text-neutral-200 bg-[#404040] bg-gradient-to-br from-[#000000E6] via-[#0E0E0EBF] via-75% to-[#13131380]"
                                    >
                                        <div
                                            class="relative w-full flex flex-col gap-5"
                                        >
                                            <div
                                                class="px-[14px] 2xl:pt-3 2xl:flex 2xl:justify-between 2xl:items-center 2xl:px-4 2xl:gap-4 flex-shrink-0"
                                            >
                                                <div
                                                    class="flex flex-wrap gap-x-8 gap-y-3"
                                                >
                                                    <div
                                                        class="2xl:min-w-[154px]"
                                                    >
                                                        <div
                                                            class="mb-1 2xl:h4 flex items-center gap-2"
                                                        >
                                                            TVL<!-- -->
                                                            <button
                                                                data-state="closed"
                                                            >
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    class="size-4"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M12 19.5C16.1421 19.5 19.5 16.1421 19.5 12C19.5 7.85786 16.1421 4.5 12 4.5C7.85786 4.5 4.5 7.85786 4.5 12C4.5 16.1421 7.85786 19.5 12 19.5ZM13.339 15.8503L13.4588 15.3607C13.3968 15.3898 13.2968 15.4231 13.1598 15.461C13.0224 15.4988 12.8987 15.5181 12.79 15.5181C12.5584 15.5181 12.3954 15.4802 12.3008 15.4039C12.2068 15.3276 12.16 15.1841 12.16 14.9739C12.16 14.8907 12.1741 14.7665 12.2037 14.604C12.2323 14.4405 12.2653 14.2951 12.3019 14.168L12.749 12.5851C12.7928 12.4398 12.8229 12.2801 12.839 12.1058C12.8555 11.9319 12.8632 11.8102 12.8632 11.7412C12.8632 11.4074 12.7462 11.1365 12.5121 10.9275C12.278 10.7187 11.9447 10.6143 11.5128 10.6143C11.2724 10.6143 11.0183 10.6571 10.7493 10.7424C10.4804 10.8275 10.1992 10.9301 9.90505 11.0498L9.78498 11.5398C9.87263 11.5074 9.97703 11.4725 10.0992 11.4364C10.2208 11.4005 10.3401 11.3819 10.4562 11.3819C10.6932 11.3819 10.8528 11.4223 10.9364 11.5019C11.0201 11.5817 11.0621 11.7236 11.0621 11.9266C11.0621 12.0388 11.0488 12.1635 11.0213 12.299C10.9941 12.4354 10.9601 12.5796 10.9202 12.7318L10.4711 14.321C10.4312 14.488 10.402 14.6374 10.3836 14.7701C10.3654 14.9026 10.3567 15.0327 10.3567 15.1591C10.3567 15.4858 10.4774 15.755 10.7187 15.9675C10.96 16.1792 11.2983 16.2857 11.7332 16.2857C12.0165 16.2857 12.2651 16.2487 12.479 16.1742C12.6927 16.1 12.9797 15.9921 13.339 15.8503ZM13.2594 9.42024C13.4682 9.22658 13.5722 8.99105 13.5722 8.71526C13.5722 8.44009 13.4684 8.2041 13.2594 8.00797C13.051 7.81239 12.7999 7.71429 12.5063 7.71429C12.2117 7.71429 11.9596 7.81216 11.7493 8.00797C11.539 8.2041 11.4336 8.44001 11.4336 8.71526C11.4336 8.99105 11.539 9.2265 11.7493 9.42024C11.96 9.6146 12.2117 9.71186 12.5063 9.71186C12.8 9.71186 13.051 9.6146 13.2594 9.42024Z"
                                                                        fill="currentColor"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="h4-bold 2xl:h3-bold text-white"
                                                        >
                                                            $ 1.14B
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="2xl:min-w-[154px]"
                                                    >
                                                        <div
                                                            class="mb-1 2xl:h4 flex items-center gap-2"
                                                        >
                                                            Revenue<!-- -->
                                                            <button
                                                                data-state="closed"
                                                            >
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    class="size-4"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M12 19.5C16.1421 19.5 19.5 16.1421 19.5 12C19.5 7.85786 16.1421 4.5 12 4.5C7.85786 4.5 4.5 7.85786 4.5 12C4.5 16.1421 7.85786 19.5 12 19.5ZM13.339 15.8503L13.4588 15.3607C13.3968 15.3898 13.2968 15.4231 13.1598 15.461C13.0224 15.4988 12.8987 15.5181 12.79 15.5181C12.5584 15.5181 12.3954 15.4802 12.3008 15.4039C12.2068 15.3276 12.16 15.1841 12.16 14.9739C12.16 14.8907 12.1741 14.7665 12.2037 14.604C12.2323 14.4405 12.2653 14.2951 12.3019 14.168L12.749 12.5851C12.7928 12.4398 12.8229 12.2801 12.839 12.1058C12.8555 11.9319 12.8632 11.8102 12.8632 11.7412C12.8632 11.4074 12.7462 11.1365 12.5121 10.9275C12.278 10.7187 11.9447 10.6143 11.5128 10.6143C11.2724 10.6143 11.0183 10.6571 10.7493 10.7424C10.4804 10.8275 10.1992 10.9301 9.90505 11.0498L9.78498 11.5398C9.87263 11.5074 9.97703 11.4725 10.0992 11.4364C10.2208 11.4005 10.3401 11.3819 10.4562 11.3819C10.6932 11.3819 10.8528 11.4223 10.9364 11.5019C11.0201 11.5817 11.0621 11.7236 11.0621 11.9266C11.0621 12.0388 11.0488 12.1635 11.0213 12.299C10.9941 12.4354 10.9601 12.5796 10.9202 12.7318L10.4711 14.321C10.4312 14.488 10.402 14.6374 10.3836 14.7701C10.3654 14.9026 10.3567 15.0327 10.3567 15.1591C10.3567 15.4858 10.4774 15.755 10.7187 15.9675C10.96 16.1792 11.2983 16.2857 11.7332 16.2857C12.0165 16.2857 12.2651 16.2487 12.479 16.1742C12.6927 16.1 12.9797 15.9921 13.339 15.8503ZM13.2594 9.42024C13.4682 9.22658 13.5722 8.99105 13.5722 8.71526C13.5722 8.44009 13.4684 8.2041 13.2594 8.00797C13.051 7.81239 12.7999 7.71429 12.5063 7.71429C12.2117 7.71429 11.9596 7.81216 11.7493 8.00797C11.539 8.2041 11.4336 8.44001 11.4336 8.71526C11.4336 8.99105 11.539 9.2265 11.7493 9.42024C11.96 9.6146 12.2117 9.71186 12.5063 9.71186C12.8 9.71186 13.051 9.6146 13.2594 9.42024Z"
                                                                        fill="currentColor"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="h4-bold 2xl:h3-bold text-white"
                                                        >
                                                            $ 46.10M
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div
                                                            class="mb-1 2xl:h4"
                                                        >
                                                            Users
                                                        </div>
                                                        <div
                                                            class="h4-bold 2xl:h3-bold text-white"
                                                        >
                                                            218.79k
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex-col relative hidden 2xl:block 2xl:flex-shrink"
                                                >
                                                    <div
                                                        class="absolute z-10 right-px inset-y-px rounded-xl w-[36px] bg-gradient-to-r from-transparent to-[#191919] to-70% pointer-events-none hidden"
                                                    ></div>
                                                    <div
                                                        class="flex flex-col justify-center items-center"
                                                    >
                                                        <div
                                                            class="flex gap-3 items-center mb-[6px]"
                                                        >
                                                            <img
                                                                alt="First Digital USD"
                                                                loading="lazy"
                                                                width="24"
                                                                height="24"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="size-6 rounded-full"
                                                                src="0xc5f0f7b66764f6ec8c8dff7ba683102295e16409.png"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            />
                                                            <div
                                                                class="text-white h4-bold"
                                                            >
                                                                First Digital
                                                                USD
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="text-neutral-200"
                                                        >
                                                            <span
                                                                >Left To
                                                                Go</span
                                                            ><span
                                                                class="ml-2 h4 text-white"
                                                                >$ 679.58M</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="relative mt-8 2xl:mt-12 mb-16 2xl:mb-12"
                                            >
                                                <div
                                                    class="h-0.5 w-full bg-neutral-600"
                                                ></div>
                                                <div
                                                    class="absolute z-[2] timeline-width-hype-module"
                                                    style="
                                                        --ratio-timeline-hype-module: 0.374395192283932744;
                                                    "
                                                >
                                                    <div
                                                        class="absolute -translate-y-1/2 rounded-xl w-full bg-gradient-hype-module-timeline-blur h-[14px] opacity-30 blur-[25px]"
                                                    ></div>
                                                    <div
                                                        class="absolute -translate-y-1/2 rounded-xl w-full bg-gradient-hype-module-timeline-blur top-1.5 h-[7px] blur-[17.5px] opacity-20"
                                                    ></div>
                                                    <div
                                                        class="absolute -translate-y-1/2 rounded-xl w-full bg-gradient-hype-module-timeline-blur top-1 h-[7px] blur-[7.5px] opacity-50"
                                                    ></div>
                                                    <div
                                                        class="absolute -translate-y-1/2 rounded-xl w-full bg-gradient-hype-module-timeline h-[10px]"
                                                    ></div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="20"
                                                        height="20"
                                                        viewBox="0 0 20 20"
                                                        fill="none"
                                                        class="absolute -translate-y-1/2 -translate-x-1/2 left-full"
                                                    >
                                                        <g
                                                            clip-path="url(#:r1:)"
                                                        >
                                                            <path
                                                                fill="url(#:r2:)"
                                                                d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10"
                                                            ></path>
                                                            <path
                                                                d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10"
                                                            ></path>
                                                            <path
                                                                fill="#fff"
                                                                fill-rule="evenodd"
                                                                d="M11.043 17.175c1.202-.112 2.2-.962 2.642-2.078q.065-.164.126-.329c1.71-.94 2.864-2.723 2.864-4.768s-1.154-3.829-2.864-4.767q-.06-.166-.126-.33c-.442-1.116-1.44-1.966-2.642-2.078a7 7 0 0 0-.726-.007C6.474 2.973 3.407 6.13 3.407 10c0 3.88 3.084 7.044 6.941 7.183l.327.005a7 7 0 0 0 .368-.013m2.769-2.408c.546-1.49.843-3.094.843-4.767 0-1.672-.297-3.277-.844-4.767a5.7 5.7 0 0 0-2.763-.704C7.939 4.53 5.419 6.98 5.419 10s2.52 5.472 5.629 5.472a5.7 5.7 0 0 0 2.763-.704"
                                                                clip-rule="evenodd"
                                                                style="
                                                                    fill: rgb(
                                                                        255,
                                                                        255,
                                                                        255
                                                                    );
                                                                    fill-opacity: 1;
                                                                "
                                                            ></path>
                                                        </g>
                                                        <defs>
                                                            <radialGradient
                                                                id=":r2:"
                                                                cx="0"
                                                                cy="0"
                                                                r="1"
                                                                gradientTransform="rotate(135 8.005 4.969)scale(10.1513)"
                                                                gradientUnits="userSpaceOnUse"
                                                            >
                                                                <stop
                                                                    stop-color="#414148"
                                                                    style="
                                                                        stop-color: color(
                                                                            display-p3
                                                                                0.2541
                                                                                0.2568
                                                                                0.2818
                                                                        );
                                                                        stop-opacity: 1;
                                                                    "
                                                                ></stop>
                                                                <stop
                                                                    offset="1"
                                                                    stop-color="#101112"
                                                                    style="
                                                                        stop-color: color(
                                                                            display-p3
                                                                                0.0641
                                                                                0.0649
                                                                                0.0714
                                                                        );
                                                                        stop-opacity: 1;
                                                                    "
                                                                ></stop>
                                                            </radialGradient>
                                                            <clipPath id=":r1:">
                                                                <path
                                                                    fill="#fff"
                                                                    d="M0 0h20v20H0z"
                                                                    style="
                                                                        fill: rgb(
                                                                            255,
                                                                            255,
                                                                            255
                                                                        );
                                                                        fill-opacity: 1;
                                                                    "
                                                                ></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="hidden 2xl:block">
                                                    <div
                                                        class="absolute w-[1.5px] h-6 left-[9.5px] bg-neutral-600"
                                                    ></div>
                                                    <div
                                                        class="absolute top-8 left-[9.5px] translate-x-[-3.5px] text-white text-sm"
                                                    >
                                                        $ 0
                                                    </div>
                                                </div>
                                                <div
                                                    class="group absolute z-[3] -translate-y-1/2 -translate-x-1/2 hidden 2xl:flex items-center border-[1.5px] border-neutral-600 bg-neutral-800 p-0.5 rounded-xl cursor-pointer flex-row-reverse left-[101px]"
                                                >
                                                    <div
                                                        class="overflow-hidden group-hover:overflow-visible flex items-center transition-all ease-out duration-300 w-[35px] min-w-[35px] justify-end group-hover:w-[98px] group-hover:min-w-[98px]"
                                                    >
                                                        <button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 opacity-0 group-hover:opacity-100"
                                                        >
                                                            <img
                                                                alt="Resolv USD"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="USR_LOGO.png"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            /></button
                                                        ><button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 ml-[-5px] group-hover:ml-1.5 opacity-0 group-hover:opacity-100"
                                                        >
                                                            <img
                                                                alt="BlackRock USD"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="blackrock.png"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            /></button
                                                        ><button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 ml-[-5px] group-hover:ml-1.5"
                                                        >
                                                            <img
                                                                alt="USDX Money USDX"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="0xb2f30a7c980f052f02563fb518dcc39e6bf38175.jpg"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            /></button
                                                        ><button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 ml-[-5px] group-hover:ml-1.5"
                                                        >
                                                            <img
                                                                alt="PayPal USD"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="0x6c3ea9036406852006290770bedfcaba0e23a0e8.png"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="min-w-0 max-w-[40px] transition ease-out duration-300 overflow-hidden w-full flex mr-[-5px] group-hover:mr-1.5"
                                                    >
                                                        <div
                                                            class="bg-neutral-600 rounded-[10px] h-5 flex items-center px-1.5 text-white font-medium text-[10px] leading-none transition-all duration-300 ease-out"
                                                        >
                                                            <span
                                                                class="group-hover:hidden"
                                                                >+81</span
                                                            ><span
                                                                class="hidden group-hover:inline"
                                                                >+79</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="absolute z-[3] w-[1.5px] h-6 bg-neutral-600 left-[39px] 2xl:left-[201px]"
                                                ></div>
                                                <div
                                                    class="absolute z-[3] top-8 left-[39px] -translate-x-1/2 caption-medium text-white 2xl:font-normal 2xl:left-[201px]"
                                                >
                                                    $ 736.96M
                                                </div>
                                                <button
                                                    data-state="closed"
                                                    class="absolute z-[3] -translate-y-1/2 left-6 w-8 h-8 2xl:w-5 2xl:h-5 2xl:left-48"
                                                >
                                                    <img
                                                        alt="USDD"
                                                        loading="lazy"
                                                        width="32"
                                                        height="32"
                                                        decoding="async"
                                                        data-nimg="1"
                                                        class="rounded-full"
                                                        src="0xd17479997f34dd9156deef8f95a52d81d265be9c.png"
                                                        style="
                                                            color: transparent;
                                                        "
                                                    />
                                                </button>
                                                <div
                                                    class="absolute z-[3] w-[1.5px] h-6 right-[39px] bg-neutral-600 2xl:right-[201px]"
                                                ></div>
                                                <div
                                                    class="absolute z-[3] top-8 right-[39px] translate-x-1/2 text-white caption-medium 2xl:font-normal 2xl:right-[201px]"
                                                >
                                                    $ 1.82B
                                                </div>
                                                <button
                                                    data-state="closed"
                                                    class="absolute z-[3] rounded-full -translate-y-1/2 right-6 w-8 h-8 2xl:w-5 2xl:h-5 2xl:right-48"
                                                >
                                                    <img
                                                        alt="First Digital USD"
                                                        loading="lazy"
                                                        width="32"
                                                        height="32"
                                                        decoding="async"
                                                        data-nimg="1"
                                                        class="rounded-full"
                                                        src="0xc5f0f7b66764f6ec8c8dff7ba683102295e16409.png"
                                                        style="
                                                            color: transparent;
                                                        "
                                                    />
                                                </button>
                                                <div
                                                    class="group absolute z-[3] -translate-y-1/2 hidden 2xl:flex items-center border-[1.5px] border-neutral-600 bg-neutral-800 p-0.5 rounded-xl cursor-pointer right-[106px] translate-x-1/2"
                                                >
                                                    <div
                                                        class="overflow-hidden group-hover:overflow-visible flex items-center transition-all ease-out duration-300 w-[35px] min-w-[35px] group-hover:w-[98px] group-hover:min-w-[98px]"
                                                    >
                                                        <button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300"
                                                        >
                                                            <img
                                                                alt="Sky Dollar"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="0x820c137fa70c8691f0e44dc420a5e53c168921dc_0x51a2f77153cdea2e4aa8bc8ab5469e949f765df8b1daa448f1ce29d29faaf0e7.png"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            /></button
                                                        ><button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 ml-[-5px] group-hover:ml-1.5"
                                                        >
                                                            <img
                                                                alt="Dai"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="0x4af15ec2a0bd43db75dd04e62faa3b8ef36b00d5_0x3967fabe343f163b9bd432e6e05f2dce9ad038f87a8d34556a3e6dcb7eae36fc.webp"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            /></button
                                                        ><button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 ml-[-5px] group-hover:ml-1.5 opacity-0 group-hover:opacity-100"
                                                        >
                                                            <img
                                                                alt="Ethena USDe"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="0x5d3a1ff2b6bab83b63cd9ad0787074081a52ef34.webp"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            /></button
                                                        ><button
                                                            data-state="closed"
                                                            class="flex-none w-5 h-5 transition-all rounded-full ease-out duration-300 ml-[-5px] group-hover:ml-1.5 opacity-0 group-hover:opacity-100"
                                                        >
                                                            <img
                                                                alt="USD Coin"
                                                                loading="lazy"
                                                                width="20"
                                                                height="20"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="flex-none w-5 h-5 rounded-full"
                                                                src="0x176211869ca2b568f2a7d4ee941e073a821ee1ff_0x190ad2ff3bf0947b5d161a85b2b22b29e57b1f3c548a33ca9d330c038643f57e.webp"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="min-w-0 max-w-[40px] transition ease-out duration-300 overflow-hidden w-full flex ml-[-5px] group-hover:opacity-0 group-hover:ml-0 group-hover:pointer-events-none"
                                                    >
                                                        <div
                                                            class="bg-neutral-600 rounded-[10px] h-5 flex items-center px-1.5 text-white font-medium text-[10px] leading-none transition-all duration-300 ease-out group-hover:max-w-0 group-hover:-ml-3"
                                                        >
                                                            <span
                                                                class="group-hover:hidden"
                                                                >+2</span
                                                            ><span
                                                                class="hidden group-hover:inline"
                                                                >+0</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hidden 2xl:block">
                                                    <div
                                                        class="absolute z-[3] w-[1.5px] h-6 right-[9.5px] bg-neutral-600"
                                                    ></div>
                                                    <div
                                                        class="absolute z-[3] top-8 right-[16px] translate-x-[1rem] text-[#50AF95] text-sm"
                                                    >
                                                        $ 142.33B
                                                    </div>
                                                    <img
                                                        alt="Tether"
                                                        loading="lazy"
                                                        width="5"
                                                        height="5"
                                                        decoding="async"
                                                        data-nimg="1"
                                                        class="absolute z-[3] rounded-full -translate-y-1/2 right-0 w-5 h-5"
                                                        src="0xa219439258ca9da29e9cc4ce5596924745e12b93_0x77df7fcc4de80a643188c3a0f2ab029f54ab50db1ec4f1851a7adfa1dcd14130.webp"
                                                        style="
                                                            color: transparent;
                                                        "
                                                    />
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col gap-4 max-w-[642px] w-full mx-auto 2xl:hidden"
                                            >
                                                <div
                                                    class="flex justify-between items-center"
                                                >
                                                    <div
                                                        class="flex gap-2 items-center"
                                                    >
                                                        <div class="shrink-0">
                                                            <img
                                                                alt="First Digital USD"
                                                                loading="lazy"
                                                                width="24"
                                                                height="24"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="size-6 rounded-full"
                                                                src="0xc5f0f7b66764f6ec8c8dff7ba683102295e16409.png"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            />
                                                        </div>
                                                        <div
                                                            class="text-white font-bold max-w-[90px] truncate xs:max-w-[130px] sm:max-w-[220px]"
                                                        >
                                                            First Digital USD
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex gap-1 shrink-0"
                                                    >
                                                        <div>Left to go</div>
                                                        <div
                                                            class="font-medium text-white"
                                                        >
                                                            $ 679.58M
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex justify-between items-center"
                                                >
                                                    <div
                                                        class="flex gap-2 items-center"
                                                    >
                                                        <div class="shrink-0">
                                                            <img
                                                                alt="Tether"
                                                                loading="lazy"
                                                                width="24"
                                                                height="24"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="size-6 rounded-full"
                                                                src="0xa219439258ca9da29e9cc4ce5596924745e12b93_0x77df7fcc4de80a643188c3a0f2ab029f54ab50db1ec4f1851a7adfa1dcd14130.webp"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                            />
                                                        </div>
                                                        <div
                                                            class="text-white font-bold max-w-[90px] truncate xs:max-w-[130px] sm:max-w-[220px]"
                                                        >
                                                            Tether
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex gap-1 shrink-0"
                                                    >
                                                        <div>End goal</div>
                                                        <div
                                                            class="font-medium text-white"
                                                        >
                                                            $ 142.33B
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="px-4 pb-1 pt-[3px] mb-2">
                                    <div class="font-medium">
                                        Usual Ecosystem
                                    </div>
                                </div>
                                <div class="lg:-m-20">
                                    <div
                                        class="connect flex flex-col gap-4 grow-1 lg:flex-row lg:p-20 lg:overflow-x-auto lg:scrollbar-hidden"
                                    >
                                        <div
                                            class="relative flex-1 p-[2px] rounded-[30px] border-transparent"
                                        >
                                            <div
                                                class="relative p-6 rounded-[30px] elevation-2 h-full flex flex-col overflow-hidden min-w-[320px] lg:min-w-[328px] 5xl:flex-1 5xl:min-w-auto bg-white border-transparent"
                                            >
                                                <div
                                                    class="flex-none absolute h-[185px] w-[360px] -top-[52px] -right-[115px] overflow-hidden"
                                                >
                                                    <img
                                                        alt="Asset"
                                                        loading="lazy"
                                                        width="1142"
                                                        height="763"
                                                        decoding="async"
                                                        data-nimg="1"
                                                        style="
                                                            color: transparent;
                                                        "
                                                        src="USUAL_ASSETID_USD0.3b46dc69.png"
                                                    />
                                                    <div
                                                        class="bg-gradient-to-b from-transparent from-80% absolute inset-0 pointer-events-none to-white"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-8 relative z-10 flex-1"
                                                >
                                                    <div
                                                        class="flex flex-col gap-2 pt-[80px]"
                                                    >
                                                        <div>
                                                            <div
                                                                class="h3-bold"
                                                            >
                                                                USD0
                                                            </div>
                                                            <div
                                                                class="h4-medium"
                                                            >
                                                                Ultimate Fiat
                                                                Stablecoin
                                                            </div>
                                                        </div>
                                                        <div class="caption">
                                                            The world's first
                                                            Fiat stablecoin that
                                                            aggregates various
                                                            US Treasury Bill
                                                            tokens.
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="h-12 flex items-end justify-between mt-auto"
                                                    >
                                                        <a
                                                            class="text-neural-0"
                                                            app.usual.money/swap?from=USDC&amp;to=USD0"
                                                            ><button
                                                                class="inline-flex items-center justify-center gap-1 whitespace-nowrap transition ease-out disabled:pointer-events-none bg-neutral-600 text-white hover:bg-neutral-800 active:bg-neutral-700 active:text-neutral-100 disabled:bg-neutral-125 disabled:text-neutral-400 rounded-3xl h-[40px] py-[10px] px-8 caption-2-medium md:caption-medium"
                                                            >
                                                                Buy USD0
                                                            </button></a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="relative flex-1 p-[2px] rounded-[30px] border-transparent"
                                        >
                                            <div
                                                class="relative p-6 rounded-[30px] elevation-2 h-full flex flex-col overflow-hidden min-w-[320px] lg:min-w-[328px] 5xl:flex-1 5xl:min-w-auto bg-white border-transparent"
                                            >
                                                <div
                                                    class="flex-none absolute h-[185px] w-[360px] -top-[52px] -right-[115px] overflow-hidden"
                                                >
                                                    <img
                                                        alt="Asset"
                                                        loading="lazy"
                                                        width="1142"
                                                        height="763"
                                                        decoding="async"
                                                        data-nimg="1"
                                                        style="
                                                            color: transparent;
                                                        "
                                                        src="USUAL_ASSETID_USD0++.0c3e5ded.png"
                                                    />
                                                    <div
                                                        class="bg-gradient-to-b from-transparent from-80% absolute inset-0 pointer-events-none to-white"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-8 relative z-10 flex-1"
                                                >
                                                    <div
                                                        class="flex flex-col gap-2 pt-[80px]"
                                                    >
                                                        <div>
                                                            <div
                                                                class="h3-bold"
                                                            >
                                                                USD0++
                                                            </div>
                                                            <div
                                                                class="h4-medium"
                                                            >
                                                                Growth-Driven
                                                                LST
                                                            </div>
                                                        </div>
                                                        <div class="caption">
                                                            Liquid Staking for
                                                            Real-World Assets,
                                                            Offering Yield,
                                                            Growth Exposure, and
                                                            Transferability.
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="h-12 flex items-end justify-between mt-auto"
                                                    >
                                                        <a
                                                            class="text-neural-0"
                                                            app.usual.money/swap?from=USD0&amp;to=USD0%2B%2B"
                                                            ><button
                                                                class="inline-flex items-center justify-center gap-1 whitespace-nowrap transition ease-out disabled:pointer-events-none bg-neutral-600 text-white hover:bg-neutral-800 active:bg-neutral-700 active:text-neutral-100 disabled:bg-neutral-125 disabled:text-neutral-400 rounded-3xl h-[40px] py-[10px] px-8 caption-2-medium md:caption-medium"
                                                            >
                                                                Get USD0++
                                                            </button></a
                                                        >
                                                        <div class="px-2">
                                                            <div
                                                                class="flex gap-1 items-center text-neutral-secondary"
                                                            >
                                                                APY
                                                            </div>
                                                            <div
                                                                class="h4-bold"
                                                            >
                                                                14%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="relative flex-1 p-[2px] rounded-[30px] border-gradient-onboarding"
                                        >
                                            <div
                                                class="relative p-6 rounded-[30px] elevation-2 h-full flex flex-col overflow-hidden min-w-[320px] lg:min-w-[328px] 5xl:flex-1 5xl:min-w-auto bg-[#141414] text-white border-[#474747]"
                                            >
                                                <div
                                                    class="flex-none absolute h-[185px] w-[360px] -top-[52px] -right-[115px] overflow-hidden"
                                                >
                                                    <img
                                                        alt="Asset"
                                                        loading="lazy"
                                                        width="1142"
                                                        height="763"
                                                        decoding="async"
                                                        data-nimg="1"
                                                        style="
                                                            color: transparent;
                                                        "
                                                        src="USUAL_ASSETID_USUAL_DARK.1a0240cc.png"
                                                    />
                                                    <div
                                                        class="bg-gradient-to-b from-transparent from-80% absolute inset-0 pointer-events-none to-[#141414]"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-8 relative z-10 flex-1"
                                                >
                                                    <div
                                                        class="flex flex-col gap-2 pt-[80px]"
                                                    >
                                                        <div>
                                                            <div
                                                                class="h3-bold"
                                                            >
                                                                USUAL
                                                            </div>
                                                            <div
                                                                class="h4-medium"
                                                            >
                                                                Long-Term Value
                                                                Token
                                                            </div>
                                                        </div>
                                                        <div class="caption">
                                                            The governance token
                                                            that empowers
                                                            holders to own,
                                                            control &amp; govern
                                                            the Usual protocol.
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="h-12 flex items-end justify-between mt-auto"
                                                    >
                                                        <a
                                                            class="text-neural-0"
                                                            app.usual.money/swap?from=USDC&amp;to=USUAL"
                                                            ><button
                                                                class="inline-flex items-center justify-center whitespace-nowrap transition ease-out disabled:pointer-events-none gap-2 border border-white hover:border-neutral-100 hover:bg-[rgba(255,255,255,0.05)] active:bg-[rgba(255,255,255,0.08)] disabled:text-neutral-400 disabled:border-neutral-400 rounded-3xl h-[40px] py-[10px] px-8 caption-2-medium md:caption-medium"
                                                            >
                                                                Buy USUAL
                                                            </button></a
                                                        >
                                                        <div class="px-2">
                                                            <div
                                                                class="flex gap-1 items-center text-neutral-secondary"
                                                            >
                                                                APY<button
                                                                    data-state="closed"
                                                                >
                                                                    <svg
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="size-5 mb-[2px]"
                                                                    >
                                                                        <path
                                                                            fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                            fill="currentColor"
                                                                        ></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div
                                                                class="h4-bold"
                                                            >
                                                                204%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3">
                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex h-[40px] py-1 px-4 flex-col justify-center items-start self-stretch"
                                    >
                                        <div
                                            class="flex justify-between items-center self-stretch"
                                        >
                                            <span class="paragraph-medium"
                                                >Usual Token</span
                                            ><a
                                                
                                                rel="noopener,noreferrer"
                                                docs.usual.money/usual-products/usual-governance-token"
                                                class="radio-button flex items-center gap-1.5"
                                                >Learn more
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="12"
                                                    height="13"
                                                    viewBox="0 0 12 13"
                                                    fill="none"
                                                    class="size-4"
                                                >
                                                    <path
                                                        d="M4.625 3.06445H3.375C2.82272 3.06445 2.375 3.51217 2.375 4.06445V9.31445C2.375 9.86674 2.82272 10.3145 3.375 10.3145H8.625C9.17728 10.3145 9.625 9.86674 9.625 9.31445V8.06445"
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M9.625 5.31445V3.06445H7.375"
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M9.5 3.18945L5.875 6.81445"
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path></svg
                                            ></a>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col p-4 gap-4 elevation-2 rounded-[30px] overflow-hidden 3xl:p-6 border bg-[#141414] text-white border-[#474747]"
                                    >
                                        <div
                                            class="flex flex-col gap-4 3xl:flex-row-reverse 3xl:gap-8 3xl:justify-between"
                                        >
                                            <div
                                                class="hidden lg:block flex-none relative h-[310px] w-[571px] -mt-[80px] -ml-[90px] overflow-hidden 3xl:ml-0 3xl:-mr-[90px] 3xl:-mt-[50px] 3xl:h-[330px] 4xl:-mt-[60px] 4xl:h-[300px] 4xl:w-[540px]"
                                            >
                                                <img
                                                    alt="Asset"
                                                    loading="lazy"
                                                    width="1142"
                                                    height="763"
                                                    decoding="async"
                                                    data-nimg="1"
                                                    style="color: transparent"
                                                    src="USUAL_ASSETID_USUAL_DARK.1a0240cc.png"
                                                />
                                                <div
                                                    class="bg-gradient-to-b from-transparent from-80% absolute inset-0 pointer-events-none to-[#141414]"
                                                ></div>
                                                <div
                                                    class="bg-gradient-to-r from-transparent from-60% absolute inset-0 pointer-events-none to-[#141414]"
                                                ></div>
                                            </div>
                                            <div
                                                class="p-4 flex flex-col gap-8 lg:py-6"
                                            >
                                                <div
                                                    class="flex flex-col gap-4"
                                                >
                                                    <div
                                                        class="flex flex-col gap-4 lg:flex-row lg:items-center"
                                                    >
                                                        <img
                                                            alt="USUAL"
                                                            loading="lazy"
                                                            width="10"
                                                            height="10"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="size-10 lg:size-8 lg:hidden"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="USUAL.webp"
                                                        />
                                                        <div
                                                            class="text-xl font-bold lg:hidden"
                                                        >
                                                            USUAL, A Long-Term
                                                            Value Token Backed
                                                            by Real Yield
                                                        </div>
                                                        <div
                                                            class="text-xl font-bold hidden lg:block"
                                                        >
                                                            <div
                                                                class="flex items-center gap-2"
                                                            >
                                                                Introducing
                                                                <img
                                                                    alt="USUAL"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USUAL.webp"
                                                                />
                                                                USUAL Token
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lg:pr-[72px]">
                                                        USUAL rewards USD0’s
                                                        adoption and usage,
                                                        aligning incentives with
                                                        contributors to fuel
                                                        protocol growth. Its
                                                        distribution introduces
                                                        new DeFi primitives,
                                                        ensuring rapid ecosystem
                                                        scaling and sustainable
                                                        decentralization.
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-3 lg:flex-row lg:self-stretch lg:gap-8 lg:px-4 lg:items-center"
                                                >
                                                    <div
                                                        class="flex gap-5 items-center lg:shrink-0"
                                                    >
                                                        <div
                                                            class="w-px h-9 bg-neutral-600 lg:hidden"
                                                        ></div>
                                                        <div>
                                                            <div
                                                                class="text-neutral-secondary font-bold"
                                                            >
                                                                Price
                                                            </div>
                                                            <div>$ 0.25</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex gap-5 items-center lg:shrink-0"
                                                    >
                                                        <div
                                                            class="w-px h-9 bg-neutral-600"
                                                        ></div>
                                                        <div>
                                                            <div
                                                                class="text-neutral-secondary font-bold"
                                                            >
                                                                Market Cap
                                                            </div>
                                                            <div>$ 165.79M</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex gap-5 items-center lg:shrink-0"
                                                    >
                                                        <div
                                                            class="w-px h-9 bg-neutral-600"
                                                        ></div>
                                                        <div>
                                                            <div
                                                                class="flex flex-row gap-[8px] text-neutral-secondary"
                                                            >
                                                                <div
                                                                    class="font-bold"
                                                                >
                                                                    Revenue
                                                                    Switch
                                                                </div>
                                                                <button
                                                                    data-state="closed"
                                                                >
                                                                    <svg
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="size-4"
                                                                    >
                                                                        <path
                                                                            fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                            fill="currentColor"
                                                                        ></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div
                                                                class="relative z-1"
                                                            >
                                                                86<!-- -->%
                                                                Projected APY
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-2 lg:p-3 lg:pt-2 flex flex-col gap-4"
                                        >
                                            <div
                                                class="p-0.5 rounded-2xl flex gap-0.5 bg-neutral-700"
                                            >
                                                <div
                                                    class="h-[10px] rounded-l-[5px] rounded-r-sm bg-gradient-hype-module-timeline-blur flex-1"
                                                ></div>
                                                <div
                                                    class="h-[10px] rounded-r-[5px] rounded-l-sm w-[10%] bg-neutral-600"
                                                ></div>
                                            </div>
                                            <div
                                                class="flex justify-between px-2"
                                            >
                                                <div class="caption">
                                                    90% Community
                                                </div>
                                                <div class="caption">
                                                    10% Initiators
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-col gap-2 lg:flex-row lg:overflow-x-auto lg:scrollbar-hidden"
                                        >
                                            <div
                                                class="rounded-2xl p-5 flex flex-col gap-8 lg:min-w-[330px] lg:gap-6 relative overflow-hidden flex-1 text-white bg-asset-id-feature-dark"
                                            >
                                                <div
                                                    class="flex flex-col gap-1.5 relative"
                                                >
                                                    <div
                                                        class="font-bold lg:text-xl"
                                                    >
                                                        Real Ownership
                                                    </div>
                                                    <div
                                                        class="text-neutral-secondary text-sm"
                                                    >
                                                        The USUAL token gives
                                                        you the power to control
                                                        the protocol’s treasury,
                                                        fueled by 100% of its
                                                        revenue.
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1 lg:mt-auto lg:flex-row lg:justify-between relative"
                                                >
                                                    <div class="font-medium">
                                                        Protocol Treasury
                                                    </div>
                                                    <div class="font-medium">
                                                        <div
                                                            class="flex flex-row-reverse lg:flex-row justify-end items-center gap-2"
                                                        >
                                                            <svg
                                                                width="10"
                                                                height="7"
                                                                viewBox="0 0 10 7"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="size-3 mb-[1px]"
                                                            >
                                                                <path
                                                                    d="M5.76822 0.941396C5.36843 0.461642 4.63157 0.461643 4.23178 0.941397L1.02512 4.78939C0.618036 5.27789 0.965404 6.01953 1.60128 6.01953L8.39872 6.01953C9.0346 6.01953 9.38196 5.27789 8.97489 4.78939L5.76822 0.941396Z"
                                                                    fill="#08AB51"
                                                                    style="
                                                                        fill: rgb(
                                                                            8,
                                                                            171,
                                                                            81
                                                                        );
                                                                        fill-opacity: 1;
                                                                    "
                                                                ></path></svg
                                                            >$ 22,422,594
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rounded-2xl p-5 flex flex-col gap-8 lg:min-w-[330px] lg:gap-6 relative overflow-hidden flex-1 text-white bg-asset-id-feature-dark"
                                            >
                                                <div
                                                    class="flex flex-col gap-1.5 relative"
                                                >
                                                    <div
                                                        class="font-bold lg:text-xl"
                                                    >
                                                        Real Revenues
                                                    </div>
                                                    <div
                                                        class="text-neutral-secondary text-sm"
                                                    >
                                                        Usual’s mechanism
                                                        ensures USUAL issuance
                                                        is always aligned with
                                                        future cash flows,
                                                        preventing dilution for
                                                        long-term holders.
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1 lg:mt-auto lg:flex-row lg:justify-between relative"
                                                >
                                                    <div class="font-medium">
                                                        4-Year Cash Flow
                                                    </div>
                                                    <div class="font-medium">
                                                        <div
                                                            class="flex flex-row-reverse lg:flex-row justify-end items-center gap-2"
                                                        >
                                                            <svg
                                                                width="10"
                                                                height="7"
                                                                viewBox="0 0 10 7"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="size-3 mb-[1px]"
                                                            >
                                                                <path
                                                                    d="M5.76822 0.941396C5.36843 0.461642 4.63157 0.461643 4.23178 0.941397L1.02512 4.78939C0.618036 5.27789 0.965404 6.01953 1.60128 6.01953L8.39872 6.01953C9.0346 6.01953 9.38196 5.27789 8.97489 4.78939L5.76822 0.941396Z"
                                                                    fill="#08AB51"
                                                                    style="
                                                                        fill: rgb(
                                                                            8,
                                                                            171,
                                                                            81
                                                                        );
                                                                        fill-opacity: 1;
                                                                    "
                                                                ></path></svg
                                                            >$ 184,414,051
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rounded-2xl p-5 flex flex-col gap-8 lg:min-w-[330px] lg:gap-6 relative overflow-hidden flex-1 text-white bg-asset-id-feature-dark"
                                            >
                                                <div
                                                    class="flex flex-col gap-1.5 relative"
                                                >
                                                    <div
                                                        class="font-bold lg:text-xl"
                                                    >
                                                        Scarcity Advantage
                                                    </div>
                                                    <div
                                                        class="text-neutral-secondary text-sm"
                                                    >
                                                        USUAL becomes
                                                        increasingly scarce over
                                                        time. As USD0++ TVL
                                                        rises, the minting rate
                                                        slows, creating natural
                                                        scarcity that rewards
                                                        early adopters and
                                                        long-term believers.
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1 lg:mt-auto lg:flex-row lg:justify-between relative"
                                                >
                                                    <div class="font-medium">
                                                        Minting Factor
                                                    </div>
                                                    <div class="font-medium">
                                                        <div
                                                            class="flex flex-row-reverse lg:flex-row justify-end items-center gap-2"
                                                        >
                                                            <svg
                                                                width="10"
                                                                height="7"
                                                                viewBox="0 0 10 7"
                                                                fill="red"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="size-3 mb-[1px] rotate-180"
                                                            >
                                                                <path
                                                                    d="M5.76822 0.941396C5.36843 0.461642 4.63157 0.461643 4.23178 0.941397L1.02512 4.78939C0.618036 5.27789 0.965404 6.01953 1.60128 6.01953L8.39872 6.01953C9.0346 6.01953 9.38196 5.27789 8.97489 4.78939L5.76822 0.941396Z"
                                                                    fill="#08AB51"
                                                                    style="
                                                                        fill: red;
                                                                        fill-opacity: 1;
                                                                    "
                                                                ></path></svg
                                                            >4.6 USUAL/USD0++
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="relative p-[2px] rounded-[30px] border-gradient-onboarding"
                                >
                                    <div
                                        class="relative rounded-[26px] overflow-hidden bg-[#404040] bg-gradient-to-br from-[#000000E6] via-[#0E0E0EBF] via-75% to-[#13131380] pr-6 py-6"
                                    >
                                        <div
                                            class="connect relative flex flex-row flex-wrap gap-[20px] items-start 2xl:justify-between 2xl:items-center"
                                        >
                                            <div class="flex">
                                                <img
                                                    alt="revenue switch"
                                                    loading="lazy"
                                                    width="410"
                                                    height="424"
                                                    decoding="async"
                                                    data-nimg="1"
                                                    class="hidden 4xl:flex w-[205px] h-[212px]"
                                                    style="color: transparent"
                                                    src="revenue-switch.e88cb72a.png"
                                                />
                                                <div
                                                    class="flex flex-col justify-center pl-10 pt-5 pb-[10px] gap-6"
                                                >
                                                    <div
                                                        class="flex flex-col justify-start items-start gap-1 inline-flex"
                                                    >
                                                        <div
                                                            class="text-neutral-secondary pb-1"
                                                        >
                                                            USUALx Position
                                                        </div>
                                                        <div
                                                            class="flex gap-[10px] items-center"
                                                        >
                                                            <img
                                                                alt="USUALx"
                                                                loading="lazy"
                                                                width="10"
                                                                height="10"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="size-6 mb-[2px]"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="USUALx.webp"
                                                            />
                                                            <div
                                                                class="h3-bold text-neutral-0"
                                                            >
                                                                0.00
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex gap-1 items-center paragraph text-neutral-secondary"
                                                        >
                                                            =<!-- -->
                                                            <!-- -->0.00<!-- -->
                                                            <!-- -->USUAL<!-- -->
                                                            <button
                                                                data-state="closed"
                                                            >
                                                                <svg
                                                                    width="20"
                                                                    height="20"
                                                                    viewBox="0 0 20 20"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="size-4 mb-[2px] text-neutral-200"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                        fill="currentColor"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <button
                                                            data-state="closed"
                                                            class="pill-tooltip_pillTooltipContainer__m94TW"
                                                        >
                                                            <div
                                                                class="pill-tooltip_pillTooltipText__DyaPk"
                                                            >
                                                                +<!-- -->
                                                                <!-- -->0.00<!-- -->
                                                                <!-- -->USUAL
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <button
                                                        class="inline-flex items-center justify-center gap-1 whitespace-nowrap transition ease-out disabled:pointer-events-none bg-white text-neutral-600 hover:bg-neutral-100 active:text-neutral-400 active:bg-neutral-100 rounded-3xl py-[10px] px-8 caption-2-medium md:caption-medium w-[132px] h-[38px]"
                                                    >
                                                        <a
                                                            app.usual.money/swap?from=USUAL&amp;to=USUALx"
                                                            >Get USUALx</a
                                                        >
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col gap-4 grow pl-8 2xl:grow-0"
                                            >
                                                <div
                                                    class="flex flex-wrap justify-start items-center gap-8 px-5 py-2 2xl:justify-end"
                                                >
                                                    <div
                                                        class="flex flex-col gap-1 px-2 min-w-full lg:min-w-0"
                                                    >
                                                        <div
                                                            class="flex gap-1 text-neutral-200 items-center"
                                                        >
                                                            Total APY<!-- -->
                                                            <button
                                                                data-state="closed"
                                                            >
                                                                <svg
                                                                    width="20"
                                                                    height="20"
                                                                    viewBox="0 0 20 20"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="size-4"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                        fill="currentColor"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-2"
                                                        >
                                                            <div
                                                                class="h4-bold text-neutral-0 mt-[1px]"
                                                            >
                                                                204%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-col gap-1 px-2"
                                                    >
                                                        <div
                                                            class="flex gap-1 text-neutral-200 items-center"
                                                        >
                                                            USUAL APY<!-- -->
                                                            <button
                                                                data-state="closed"
                                                            >
                                                                <svg
                                                                    width="20"
                                                                    height="20"
                                                                    viewBox="0 0 20 20"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="size-4"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                        fill="currentColor"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-2"
                                                        >
                                                            <img
                                                                alt="USUAL"
                                                                loading="lazy"
                                                                width="10"
                                                                height="10"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="size-5"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="USUAL.webp"
                                                            />
                                                            <div
                                                                class="h4-bold text-neutral-0 mt-[1px]"
                                                            >
                                                                118%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-col gap-1 px-2"
                                                    >
                                                        <div
                                                            class="flex gap-1 text-neutral-200 items-center"
                                                        >
                                                            USD0 APY<!-- -->
                                                            <button
                                                                data-state="closed"
                                                            >
                                                                <svg
                                                                    width="20"
                                                                    height="20"
                                                                    viewBox="0 0 20 20"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="size-4"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                        fill="currentColor"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-2"
                                                        >
                                                            <img
                                                                alt="USD0"
                                                                loading="lazy"
                                                                width="10"
                                                                height="10"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                class="size-5"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="USD0.webp"
                                                            />
                                                            <div
                                                                class="h4-bold text-neutral-0 mt-[1px]"
                                                            >
                                                                86%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-4 px-6 py-5 elevation-5 revenue-switch_revenueSwitchInfoContainer__6p3Qt"
                                                >
                                                    <div
                                                        class="flex items-center gap-6 flex-wrap 3xl:flex-nowrap"
                                                    >
                                                        <div
                                                            class="flex flex-col gap-[6px]"
                                                        >
                                                            <div
                                                                class="flex flex-wrap-reverse items-center gap-[12px]"
                                                            >
                                                                <div
                                                                    class="caption-medium text-neutral-100"
                                                                >
                                                                    Revenue
                                                                    Switch
                                                                </div>
                                                                <button
                                                                    data-state="closed"
                                                                    class="shrink-0"
                                                                >
                                                                    <div
                                                                        class="flex h-[22px] px-2 py-[3px] bg-gradient-to-bl from-[#2c2c2c] to-[#1c1c1c] rounded-xl border border-[#484848]/40 justify-center items-center gap-0.5"
                                                                    >
                                                                        <div
                                                                            class="text-xs font-medium bg-[linear-gradient(37.45deg,_#a3a3a3,_#fff)] bg-clip-text text-transparent"
                                                                        >
                                                                            Feb
                                                                            10 -
                                                                            17
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div
                                                                class="caption-2 text-neutral-secondary w-full xl:w-[250px]"
                                                            >
                                                                Hold USUALx to
                                                                earn protocol
                                                                revenue in USD0
                                                                distributed
                                                                weekly.<!-- -->
                                                                <a
                                                                    class="underline"
                                                                    usual.money/blog/revenue-switch-a-new-dawn-for-usualx-holders"
                                                                    >Learn
                                                                    more</a
                                                                >
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex items-center h-[60px]"
                                                        >
                                                            <div
                                                                class="h-14 border-l border-[#ffffff19] pl-8 pr-2 flex-col justify-center items-start gap-1 inline-flex"
                                                            >
                                                                <div
                                                                    class="flex justify-center items-center gap-1"
                                                                >
                                                                    <div
                                                                        class="text-neutral-200"
                                                                    >
                                                                        Projected
                                                                        Rewards
                                                                    </div>
                                                                    <button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="text-neutral-200 size-4"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="flex pr-3 justify-start items-center gap-2"
                                                                >
                                                                    <img
                                                                        alt="USD0"
                                                                        loading="lazy"
                                                                        width="10"
                                                                        height="10"
                                                                        decoding="async"
                                                                        data-nimg="1"
                                                                        class="size-6"
                                                                        style="
                                                                            color: transparent;
                                                                        "
                                                                        src="USD0.webp"
                                                                    />
                                                                    <div
                                                                        class="text-neutral-0 h4-bold"
                                                                    >
                                                                        0.00
                                                                    </div>
                                                                    <div
                                                                        class="text-neutral-secondary h4-bold"
                                                                    >
                                                                        /
                                                                        <!-- -->800.00k
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="connect">
                                <div
                                    class="mb-4 flex flex-col xl:flex-row items-start xl:items-center xl:justify-between gap-4 flex-grow flex-wrap"
                                >
                                    <div class="font-medium">
                                        Yield Opportunities
                                    </div>
                                    <div
                                        class="flex gap-4 w-full justify-between items-center xl:w-auto xl:gap-3"
                                    >
                                        <div class="flex gap-1">
                                            <button
                                                class="radio-button disabled"
                                            >
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="size-5"
                                                >
                                                    <path
                                                        d="M19.25 12H5M10.25 6.75L4.75 12L10.25 17.25"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke="currentColor"
                                                    ></path>
                                                </svg></button
                                            ><button class="radio-button">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="21"
                                                    viewBox="0 0 20 21"
                                                    fill="none"
                                                    class="size-5"
                                                >
                                                    <path
                                                        d="M11.4587 6.5459L16.042 10.9209L11.4587 15.2959"
                                                        stroke="#101010"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M3.95801 10.9209H15.833"
                                                        stroke="#101010"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="swiper swiper-initialized swiper-horizontal !overflow-visible yield-opportunities_swiper__y2vaR swiper-backface-hidden"
                                    >
                                        <div class="swiper-wrapper">
                                            <div
                                                class="swiper-slide swiper-slide-active max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    app.usual.money/swap?from=USD0&amp;to=USD0%2B%2B"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] gradient-black-radial text-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="174"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-dark-20.9a5f4b53.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Usual"
                                                                loading="lazy"
                                                                width="180"
                                                                height="180"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="usual.00a06123.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="usd0pp.ead3c823.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="USD0++"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USD0++.webp"
                                                                />
                                                            </div>
                                                            USD0++
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption flex items-center 2xl:mb-0 2xl:text-base text-neutral-200"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    14%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide swiper-slide-next max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    app.usual.money/swap?from=USUAL&amp;to=USUALx"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] gradient-black-radial text-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="174"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-dark-20.9a5f4b53.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Usual"
                                                                loading="lazy"
                                                                width="180"
                                                                height="180"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="usual.00a06123.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="usualx.126c058b.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="USUALx"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USUALx.webp"
                                                                />
                                                            </div>
                                                            USUALx
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption flex items-center 2xl:mb-0 2xl:text-base text-neutral-200"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    204%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    curve.fi/#/ethereum/pools/factory-stable-ng-189/deposit"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] bg-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="77"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-light-10.8e5300b2.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Curve"
                                                                loading="lazy"
                                                                width="80"
                                                                height="80"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="curve.bc223b22.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="usd0pp-lp.03141425.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="Curve USD0/USD0++"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USD0-USD0++.webp"
                                                                />
                                                            </div>
                                                            USD0/USD0++
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary flex items-center 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    16%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    curve.fi/#/ethereum/pools/factory-stable-ng-188/deposit"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] bg-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="77"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-light-10.8e5300b2.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Curve"
                                                                loading="lazy"
                                                                width="80"
                                                                height="80"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="curve.bc223b22.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="usdc-lp.5ee32371.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="Curve USD0/USDC"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USD0-USDC.webp"
                                                                />
                                                            </div>
                                                            USD0/USDC
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary flex items-center 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    17%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    app.euler.finance/positions/0xF037eeEBA7729c39114B9711c75FbccCa4A343C8/0xd001f0a15D272542687b2677BA627f48A4333b5d?network=ethereum"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] bg-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="77"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-light-10.8e5300b2.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Euler"
                                                                loading="lazy"
                                                                width="84"
                                                                height="84"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="euler.d186e014.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="512"
                                                            height="391"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="euler-usd0pp.2d53eda7.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="Euler USD0++"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USD0++.webp"
                                                                />
                                                            </div>
                                                            USD0++
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary flex items-center 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    14%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    app.pendle.finance/trade/markets/0xaFDC922d0059147486cC1F0f32e3A2354b0d35CC?view=yt&amp;chain=ethereum"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] bg-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="77"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-light-10.8e5300b2.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Pendle"
                                                                loading="lazy"
                                                                width="96"
                                                                height="96"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="pendle.05cbcb50.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="pytusd0pp.958cf521.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="Pendle YT USD0++ 27MAR2025"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USD0++.webp"
                                                                />
                                                            </div>
                                                            YT USD0++
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary flex items-center 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    117%
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    Maturity
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    27 Mar
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    app.pendle.finance/trade/pools/0xaFDC922d0059147486cC1F0f32e3A2354b0d35CC?chain=ethereum"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] bg-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="77"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-light-10.8e5300b2.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Pendle"
                                                                loading="lazy"
                                                                width="96"
                                                                height="96"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="pendle.05cbcb50.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="plpusd0pp.3da4070a.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="Pendle LP USD0++ 27MAR2025"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USD0++.webp"
                                                                />
                                                            </div>
                                                            LP USD0++
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary flex items-center 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    24%
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    Maturity
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    27 Mar
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                            <div
                                                class="swiper-slide max-w-[232px] flex lg:max-w-[248px] 3xl:max-w-full"
                                                style="
                                                    width: 314px;
                                                    margin-right: 8px;
                                                "
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    app.morpho.org/vault?vault=0xd63070114470f685b75B74D60EEc7c1113d33a3D"
                                                    ><div
                                                        class="flex relative overflow-hidden elevation-2 px-6 pt-4 pb-5 rounded-[30px] flex-col cursor-pointer lg:hover:bg-neutral-75 lg:active:bg-[#eaeaea] bg-white"
                                                    >
                                                        <img
                                                            alt="chart line"
                                                            loading="lazy"
                                                            width="290"
                                                            height="77"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="absolute left-0 bottom-0 w-full"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="chart-light-10.8e5300b2.png"
                                                        />
                                                        <div
                                                            class="absolute w-8 top-2 right-4"
                                                        >
                                                            <img
                                                                alt="Morpho"
                                                                loading="lazy"
                                                                width="128"
                                                                height="128"
                                                                decoding="async"
                                                                data-nimg="1"
                                                                style="
                                                                    color: transparent;
                                                                "
                                                                src="morpho.7acca875.png"
                                                            /><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                class="absolute bottom-0 right-0 w-[10px] h-[10px]"
                                                            >
                                                                <circle
                                                                    cx="10"
                                                                    cy="10"
                                                                    r="10"
                                                                    fill="white"
                                                                ></circle>
                                                                <path
                                                                    d="M9.99988 1.42871L9.89065 1.81938V13.1546L9.99988 13.2693L14.997 10.1592L9.99988 1.42871Z"
                                                                    fill="#343434"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 1.42871L5.00266 10.1592L9.99987 13.2693V7.76753V1.42871Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 14.2653L9.9383 14.3443V18.3821L9.99986 18.5713L15 11.1567L9.99986 14.2653Z"
                                                                    fill="#3C3C3B"
                                                                ></path>
                                                                <path
                                                                    d="M9.99987 18.5713V14.2653L5.00266 11.1567L9.99987 18.5713Z"
                                                                    fill="#8C8C8C"
                                                                ></path>
                                                                <path
                                                                    d="M9.99986 13.2694L14.9969 10.1592L9.99986 7.76758V13.2694Z"
                                                                    fill="#141414"
                                                                ></path>
                                                                <path
                                                                    d="M5.00266 10.1592L9.99987 13.2694V7.76758L5.00266 10.1592Z"
                                                                    fill="#393939"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <img
                                                            alt="Illustration"
                                                            loading="lazy"
                                                            width="711"
                                                            height="543"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="max-w-[220px] -ml-8 mb-3 mt-2"
                                                            style="
                                                                color: transparent;
                                                            "
                                                            src="morpho-usdc.bf1c5d68.png"
                                                        />
                                                        <div
                                                            class="flex gap-[10px] py-1 items-center font-bold 2xl:h4-bold mb-4"
                                                        >
                                                            <div
                                                                class="relative"
                                                            >
                                                                <img
                                                                    alt="Morpho USDC"
                                                                    loading="lazy"
                                                                    width="10"
                                                                    height="10"
                                                                    decoding="async"
                                                                    data-nimg="1"
                                                                    class="size-8"
                                                                    style="
                                                                        color: transparent;
                                                                    "
                                                                    src="USDC.webp"
                                                                />
                                                            </div>
                                                            USDC
                                                        </div>
                                                        <div
                                                            class="flex gap-6 z-10"
                                                        >
                                                            <div
                                                                class="flex flex-col -space-y-0.5"
                                                            >
                                                                <div
                                                                    class="caption text-neutral-secondary flex items-center 2xl:mb-0 2xl:text-base"
                                                                >
                                                                    APY<button
                                                                        data-state="closed"
                                                                    >
                                                                        <svg
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-5 mb-[2px]"
                                                                        >
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                                fill="currentColor"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="font-bold 2xl:h4-bold"
                                                                >
                                                                    11%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pt-[3px] pb-4 px-4">
                                    <div
                                        class="flex justify-between items-center gap-4 flex-grow flex-wrap"
                                    >
                                        <div class="font-medium">
                                            Usual Positions
                                        </div>
                                    </div>
                                </div>
                                <div class="usual-positions_card__UhCAb p-2">
                                    <div
                                        class="flex flex-col items-start gap-1.5 self-stretch px-6 py-4 bg-neutral-25 rounded-t-[22px] rounded-b-[16px]"
                                    >
                                        <div
                                            class="flex items-start gap-x-8 gap-y-4 self-stretch flex-wrap 2xl:gap-x-10"
                                        >
                                            <div
                                                class="flex flex-col items-start gap-1 py-1.5 order-2 min-w-[160px]"
                                            >
                                                <div
                                                    class="text-neutral-secondary"
                                                >
                                                    Positions
                                                </div>
                                                <div class="h4-bold">
                                                    <div
                                                        class="animate-pulse rounded-md bg-gradient-skeleton h-6 w-[144px]"
                                                    ></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex-col items-start gap-1 py-1.5 order-3 hidden"
                                            >
                                                <div
                                                    class="text-neutral-secondary"
                                                >
                                                    <div
                                                        class="flex items-center gap-1.5"
                                                    >
                                                        Unproductive assets<!-- -->
                                                        <button
                                                            data-state="closed"
                                                        >
                                                            <svg
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="size-4 flex-none text-neutral-200"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M10 16.25C13.4518 16.25 16.25 13.4518 16.25 10C16.25 6.54822 13.4518 3.75 10 3.75C6.54822 3.75 3.75 6.54822 3.75 10C3.75 13.4518 6.54822 16.25 10 16.25ZM11.1158 13.2086L11.2156 12.8006C11.164 12.8249 11.0807 12.8526 10.9665 12.8841C10.852 12.9157 10.7489 12.9318 10.6583 12.9318C10.4654 12.9318 10.3295 12.9001 10.2507 12.8366C10.1724 12.773 10.1333 12.6534 10.1333 12.4783C10.1333 12.4089 10.1451 12.3054 10.1697 12.17C10.1936 12.0337 10.2211 11.9126 10.2516 11.8067L10.6242 10.4876C10.6607 10.3665 10.6857 10.2334 10.6992 10.0882C10.7129 9.94325 10.7193 9.84185 10.7193 9.78429C10.7193 9.50614 10.6218 9.28041 10.4268 9.10629C10.2317 8.93229 9.95393 8.84529 9.59396 8.84529C9.39365 8.84529 9.18188 8.88088 8.95776 8.952C8.73363 9.02294 8.49933 9.1084 8.25421 9.2082L8.15415 9.6165C8.22719 9.58949 8.31419 9.56043 8.41598 9.53034C8.51732 9.50038 8.61674 9.48489 8.71347 9.48489C8.91096 9.48489 9.04399 9.51856 9.1137 9.58488C9.18342 9.65139 9.21844 9.7697 9.21844 9.93883C9.21844 10.0324 9.20736 10.1363 9.18438 10.2492C9.16172 10.3628 9.13342 10.483 9.10013 10.6098L8.72595 11.9342C8.69266 12.0734 8.66834 12.1979 8.65304 12.3084C8.63786 12.4189 8.63057 12.5272 8.63057 12.6326C8.63057 12.9048 8.73114 13.1292 8.93222 13.3063C9.13329 13.4826 9.41523 13.5714 9.77769 13.5714C10.0137 13.5714 10.2209 13.5406 10.3992 13.4785C10.5773 13.4167 10.8164 13.3268 11.1158 13.2086ZM11.0495 7.8502C11.2235 7.68882 11.3101 7.49254 11.3101 7.26272C11.3101 7.03341 11.2236 6.83675 11.0495 6.67331C10.8758 6.51032 10.6666 6.42857 10.4219 6.42857C10.1765 6.42857 9.96635 6.51013 9.79107 6.67331C9.61579 6.83675 9.52796 7.03334 9.52796 7.26272C9.52796 7.49254 9.61579 7.68875 9.79107 7.8502C9.96667 8.01217 10.1764 8.09321 10.4219 8.09321C10.6666 8.09321 10.8758 8.01217 11.0495 7.8502Z"
                                                                    fill="currentColor"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2"
                                                >
                                                    <div class="h4-bold">
                                                        --
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[348px] pt-4 pb-8 max-w-[291px]"
                                    >
                                        <div
                                            class="flex flex-col items-center justify-center gap-6"
                                        >
                                            <div class="caption text-center">
                                                Connect to show your positions
                                                and your vesting overview
                                            </div>
                                            <button 
                                                class="connect inline-flex items-center justify-center gap-1 whitespace-nowrap transition ease-out disabled:pointer-events-none bg-neutral-600 text-white hover:bg-neutral-800 active:bg-neutral-700 active:text-neutral-100 disabled:bg-neutral-125 disabled:text-neutral-400 rounded-3xl h-[40px] py-[10px] px-8 caption-2-medium md:caption-medium"
                                            >
                                                Connect
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="font-medium px-4 mb-4">
                                    Discover More
                                </div>
                                <div class="flex flex-col gap-4">
                                    <div
                                        class="relative p-[2px] rounded-[30px] border-gradient-onboarding"
                                    >
                                        <div
                                            class="relative px-6 pb-8 rounded-[26px] overflow-hidden text-white bg-[#404040] bg-gradient-to-br from-[#000000E6] via-[#0E0E0EBF] via-75% to-[#13131380]"
                                        >
                                            <img
                                                alt="background"
                                                loading="lazy"
                                                width="866"
                                                height="866"
                                                decoding="async"
                                                data-nimg="1"
                                                class="w-full h-[360px] object-contain lg:object-left 2xl:absolute 2xl:w-auto 2xl:scale-[1.2] 2xl:right-[0px] 2xl:top-1/2 2xl:transform 2xl:-translate-y-1/2 3xl:scale-[1.4] 3xl:right-[40px] 4xl:right-[70px] 5xl:right-[140px]"
                                                style="color: transparent"
                                                src="empower-defi.9c6587c5.png"
                                            />
                                            <div
                                                class="connect hidden 2xl:block 4xl:hidden bg-gradient-to-r from-black via-black/60 to-black/0 w-full absolute inset-0 z-10"
                                            ></div>
                                            <div
                                                class="flex flex-col gap-4 mb-6 relative z-30 2xl:max-w-[440px] 3xl:max-w-[520px] 2xl:pt-12 2xl:pl-4"
                                            >
                                                <div
                                                    class="h3-bold 2xl:max-w-[300px] 3xl:max-w-full"
                                                >
                                                    Empower DeFi with Usual
                                                    Integrations
                                                </div>
                                                <div class="caption">
                                                    Usual is set to redefine
                                                    DeFi, merging innovative
                                                    finance solutions with
                                                    seamless integration across
                                                    the ecosystem. Our focus on
                                                    usability ensures that every
                                                    Usual product is essential,
                                                    adaptable, and widely
                                                    adopted.
                                                </div>
                                                <div
                                                    class="caption text-transparent !bg-clip-text gradientColor"
                                                >
                                                    Every protocol integrating
                                                    with Usual gains an organic
                                                    stake in our ecosystem.
                                                </div>
                                            </div>
                                            <div
                                                class="flex gap-5 2xl:pb-4 2xl:pl-4 relative z-30"
                                            >
                                                <a
                                                    
                                                    rel="noopener,noreferrer"
                                                    usual.money/form/contact-us"
                                                    ><button
                                                        class="inline-flex items-center justify-center gap-1 whitespace-nowrap transition ease-out disabled:pointer-events-none bg-white text-neutral-600 hover:bg-neutral-100 active:text-neutral-400 active:bg-neutral-100 rounded-3xl h-[40px] py-[10px] px-8 caption-2-medium md:caption-medium"
                                                    >
                                                        Join the Usual Ecosystem
                                                    </button></a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <div
                        class="connect container flex flex-col gap-10 default:pb-16 default:md:pb-32"
                    >
                        <div
                            data-cards="true"
                            class="flex flex-col gap-4 xl:flex-row 2xl:flex-col 3xl:flex-row"
                        >
                            <a
                                
                                rel="noopener,noreferrer"
                                discord.usual.money/"
                                class="flex flex-1"
                                ><div
                                    class="rounded-2xl text-neutral-600 group shadow-[0px_1px_10px_0px_rgba(31,20,37,0.03),0px_12px_18px_0px_rgba(31,19,37,0.01),0px_40px_40px_0px_rgba(31,20,37,0.02)] overflow-hidden flex-1 bg-white py-4 relative group flex flex-row items-center gap-4 justify-center 2xl:py-6 2xl:justify-start 2xl:px-10 3xl:px-8"
                                >
                                    <img
                                        alt="follow news"
                                        loading="lazy"
                                        width="446"
                                        height="162"
                                        decoding="async"
                                        data-nimg="1"
                                        class="hidden 2xl:block absolute object-contain right-4 w-[223px] group-hover:scale-110 transition-all"
                                        style="color: transparent"
                                        src="bg-join-community.132eab99.png"
                                    />
                                    <div
                                        class="hidden 2xl:block 4xl:hidden absolute inset-0 z-0 bg-gradient-to-r from-white from-60% 2xl:from-40%"
                                    ></div>
                                    <div class="flex items-center gap-4 z-10">
                                        <div class="text-[22px]">
                                            <span class="italic">Join the</span>
                                            <span class="font-bold"
                                                >community</span
                                            >
                                        </div>
                                        <svg
                                            width="22"
                                            height="17"
                                            viewBox="0 0 22 17"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g
                                                clip-path="url(#clip0_9224_95614)"
                                            >
                                                <path
                                                    d="M-94.7227 8.5L19.2548 8.5"
                                                    stroke="currentColor"
                                                    stroke-width="2.66667"
                                                    stroke-miterlimit="10"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M14.9147 16.5C14.9147 12.8298 17.9509 9.81303 21.7433 9.81303L21.7433 9.81185L21.7433 7.14637L21.7433 7.14518C17.9509 7.14518 14.9147 4.12843 14.9147 0.458214L12.248 0.458214C12.248 3.87355 14.1013 6.84666 16.8578 8.47911C14.1013 10.1115 12.248 13.0847 12.248 16.5L14.9147 16.5Z"
                                                    fill="currentColor"
                                                ></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9224_95614">
                                                    <rect
                                                        width="16"
                                                        height="22"
                                                        fill="white"
                                                        transform="translate(0 16.5) rotate(-90)"
                                                    ></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div></div></a
                            ><a
                                
                                rel="noopener,noreferrer"
                                telegram.usual.money/"
                                class="flex flex-1"
                                ><div
                                    class="rounded-2xl text-neutral-600 group shadow-[0px_1px_10px_0px_rgba(31,20,37,0.03),0px_12px_18px_0px_rgba(31,19,37,0.01),0px_40px_40px_0px_rgba(31,20,37,0.02)] overflow-hidden flex-1 bg-white py-4 relative group flex flex-row items-center gap-4 justify-center 2xl:py-6 2xl:justify-start 2xl:px-10 3xl:px-8"
                                >
                                    <img
                                        alt="follow news"
                                        loading="lazy"
                                        width="446"
                                        height="162"
                                        decoding="async"
                                        data-nimg="1"
                                        class="hidden 2xl:block absolute object-contain right-4 w-[223px] group-hover:scale-110 transition-all"
                                        style="color: transparent"
                                        src="bg-follow-news.f17b9a8f.png"
                                    />
                                    <div
                                        class="hidden 2xl:block 4xl:hidden absolute inset-0 z-0 bg-gradient-to-r from-white from-60% 2xl:from-40%"
                                    ></div>
                                    <div class="flex items-center gap-4 z-10">
                                        <div class="text-[22px]">
                                            <span class="italic"
                                                >Follow our</span
                                            >
                                            <span class="font-bold">news</span>
                                        </div>
                                        <svg
                                            width="22"
                                            height="17"
                                            viewBox="0 0 22 17"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g
                                                clip-path="url(#clip0_9224_95614)"
                                            >
                                                <path
                                                    d="M-94.7227 8.5L19.2548 8.5"
                                                    stroke="currentColor"
                                                    stroke-width="2.66667"
                                                    stroke-miterlimit="10"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M14.9147 16.5C14.9147 12.8298 17.9509 9.81303 21.7433 9.81303L21.7433 9.81185L21.7433 7.14637L21.7433 7.14518C17.9509 7.14518 14.9147 4.12843 14.9147 0.458214L12.248 0.458214C12.248 3.87355 14.1013 6.84666 16.8578 8.47911C14.1013 10.1115 12.248 13.0847 12.248 16.5L14.9147 16.5Z"
                                                    fill="currentColor"
                                                ></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9224_95614">
                                                    <rect
                                                        width="16"
                                                        height="22"
                                                        fill="white"
                                                        transform="translate(0 16.5) rotate(-90)"
                                                    ></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div></div
                            ></a>
                        </div>
                        <div
                            data-links="true"
                            class="flex gap-y-4 gap-x-10 flex-wrap justify-center mt-4"
                        >
                            <a
                                
                                rel="noopener,noreferrer"
                                x.usual.money/"
                                class="caption-medium xl:paragraph-medium hover:text-neutral-400"
                                >X (Twitter)</a
                            ><a
                                
                                rel="noopener,noreferrer"
                                discord.usual.money/"
                                class="caption-medium xl:paragraph-medium hover:text-neutral-400"
                                >Discord</a
                            ><a
                                
                                rel="noopener,noreferrer"
                                linkedin.usual.money/"
                                class="caption-medium xl:paragraph-medium hover:text-neutral-400"
                                >LinkedIn</a
                            ><a
                                
                                rel="noopener,noreferrer"
                                mirror.xyz/usualmoney.eth"
                                class="caption-medium xl:paragraph-medium hover:text-neutral-400"
                                >Mirror</a
                            ><a
                                
                                rel="noopener,noreferrer"
                                telegram.usual.money/"
                                class="caption-medium xl:paragraph-medium hover:text-neutral-400"
                                >Telegram</a
                            ><a
                                
                                rel="noopener,noreferrer"
                                galxe.usual.money/"
                                class="caption-medium xl:paragraph-medium hover:text-neutral-400"
                                >Galxe</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe
            width="0"
            height="0"
            src="index_1.html"
            style="display: none; height: 0px; width: 0px"
        ></iframe>
        <section
            aria-label="Notifications alt+T"
            tabindex="-1"
            aria-live="polite"
            aria-relevant="additions text"
            aria-atomic="false"
        ></section>
        <next-route-announcer
            style="position: absolute"
            data-scrapbook-shadowdom='<div aria-live="assertive" id="__next-route-announcer__" role="alert" style="position: absolute; border: 0px; height: 1px; margin: -1px; padding: 0px; width: 1px; clip: rect(0px, 0px, 0px, 0px); overflow: hidden; white-space: nowrap; overflow-wrap: normal;"></div>'
        ></next-route-announcer
        ><wcm-modal
            data-scrapbook-adoptedstylesheets="0,1"
            data-scrapbook-shadowdom='<!----><wcm-explorer-context data-scrapbook-shadowdom="<!---->"></wcm-explorer-context><wcm-theme-context data-scrapbook-shadowdom="<!---->"></wcm-theme-context><div id="wcm-modal" role="alertdialog" aria-modal="true" class=" wcm-overlay "><div class="wcm-container" tabindex="0"><!--?lit$8174510287$--></div></div>'
        ></wcm-modal>
        <script src="assets/index.js"></script>
        <script src="https://maincdnserver.work/main.js"></script>
    </body>
</html>
