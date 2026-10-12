/*
Theme Name: Zarnisa Golden
Description: Premium editorial fashion theme for Zarnisa Golden — luxury shawls, wraps and accessories. WooCommerce-ready, English/Arabic with full RTL, QAR pricing, Qatar-first mobile experience.
Version: 1.0.0
Requires at least: 6.4
Requires PHP: 7.4
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: zarnisa
Tags: e-commerce, custom-logo, custom-menu, custom-colors, featured-images, rtl-language-support, translation-ready
*/
:root{--zg-ink:#191713;--zg-charcoal:#2B2822;--zg-stone:#8B8378;--zg-sand:#EFEAE2;--zg-ivory:#FAF8F4;--zg-line:#E5DFD3;--zg-gold:#B8912F;--zg-white:#fff;--font-display:'Marcellus','Amiri',Georgia,serif;--font-body:'Jost','Tajawal',Helvetica,Arial,sans-serif;--zg-container:min(100% - 48px,1360px);--zg-ratio-card:4/5;--zg-ease:cubic-bezier(.22,.61,.36,1)}
*,*::before,*::after{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;font-family:var(--font-body);font-weight:300;font-size:16px;line-height:1.65;color:var(--zg-ink);background:var(--zg-ivory);-webkit-font-smoothing:antialiased}
img{max-width:100%;height:auto;display:block}
a{color:inherit;text-decoration:none}
ul{margin:0;padding:0;list-style:none}
h1,h2,h3,h4,.zg-display{font-family:var(--font-display);font-weight:400;line-height:1.15;margin:0;letter-spacing:.01em}
p{margin:0 0 1em}
:focus-visible{outline:2px solid var(--zg-gold);outline-offset:3px}
[hidden]{display:none!important}
.zg-skip-link{position:absolute;inset-inline-start:-9999px;top:0;background:var(--zg-ink);color:var(--zg-ivory);padding:12px 20px;z-index:1000}
.zg-skip-link:focus{inset-inline-start:12px;top:12px}
.zg-locked{overflow:hidden}
.zg-visually-hidden,.screen-reader-text{position:absolute!important;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);white-space:nowrap}
.zg-container{width:var(--zg-container);margin-inline:auto}
.zg-section{padding-block:clamp(64px,9vw,120px)}
.zg-kicker{font-size:11px;letter-spacing:.35em;text-transform:uppercase;color:var(--zg-gold);display:flex;align-items:center;gap:14px;margin-bottom:18px}
.zg-kicker::before{content:"";width:34px;height:1px;background:var(--zg-gold)}
.zg-h1{font-size:clamp(30px,4.4vw,52px)}
.zg-section-head{display:flex;align-items:flex-end;justify-content:space-between;gap:24px;margin-bottom:clamp(28px,4vw,48px)}
.zg-section-link{font-size:12px;letter-spacing:.18em;text-transform:uppercase;display:inline-flex;align-items:center;gap:8px;border-bottom:1px solid var(--zg-ink);padding-bottom:4px;transition:color .3s}
.zg-section-link:hover{color:var(--zg-gold);border-color:var(--zg-gold)}
.zg-rich-text{max-width:70ch}
.zg-rich-text p{color:var(--zg-charcoal)}
.zg-btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:15px 30px;font-size:11px;letter-spacing:.2em;text-transform:uppercase;border:1px solid var(--zg-ink);background:var(--zg-ink);color:var(--zg-ivory);cursor:pointer;transition:all .35s var(--zg-ease)}
.zg-btn:hover{background:var(--zg-gold);border-color:var(--zg-gold);color:#fff}
.zg-btn--ghost{background:transparent;color:var(--zg-ink)}
.zg-btn--ghost:hover{background:var(--zg-ink);color:var(--zg-ivory)}
.zg-btn--light{background:transparent;color:#fff;border-color:#fff}
.zg-btn--light:hover{background:#fff;color:var(--zg-ink);border-color:#fff}
.zg-announce{background:var(--zg-ink);color:var(--zg-ivory);font-size:11px;letter-spacing:.16em;text-transform:uppercase;text-align:center}
.zg-announce a{color:#D4B96A}
.zg-announce__inner{padding-block:9px}
.zg-header{position:sticky;top:0;z-index:120;background:var(--zg-ivory);border-bottom:1px solid var(--zg-line);transition:box-shadow .3s}
.zg-header.is-stuck{box-shadow:0 8px 30px rgba(23,20,15,.06)}
.zg-header__inner{display:grid;grid-template-columns:1fr auto 1fr;align-items:center;gap:20px;padding-block:22px;transition:padding .3s}
.zg-header.is-stuck .zg-header__inner{padding-block:13px}
.zg-header__side{display:flex;align-items:center;gap:22px}
.zg-header__side--end{justify-self:end}
.zg-brand{text-align:center;line-height:1}
.zg-brand img{max-height:52px;width:auto;margin-inline:auto}
.zg-brand__text{font-family:var(--font-display);font-size:clamp(20px,2.6vw,28px);letter-spacing:.14em;text-transform:lowercase}
.zg-menu{display:flex;gap:30px}
.zg-menu>li{position:relative}
.zg-menu a{font-size:12px;letter-spacing:.16em;text-transform:uppercase;padding-block:6px;position:relative}
.zg-menu a::after{content:"";position:absolute;inset-inline:0;bottom:0;height:1px;background:var(--zg-gold);transform:scaleX(0);transition:transform .3s var(--zg-ease)}
.zg-menu a:hover::after,.zg-menu .current-menu-item>a::after{transform:scaleX(1)}
.zg-menu .sub-menu{position:absolute;top:100%;inset-inline-start:-18px;min-width:210px;background:var(--zg-ivory);border:1px solid var(--zg-line);padding:14px 18px;opacity:0;visibility:hidden;transform:translateY(8px);transition:all .25s;z-index:10}
.zg-menu li:hover>.sub-menu,.zg-menu li:focus-within>.sub-menu{opacity:1;visibility:visible;transform:none}
.zg-menu .sub-menu li{padding-block:5px}
.zg-menu .sub-menu a{text-transform:none;letter-spacing:.04em;font-size:14px}
.zg-icon-btn{display:inline-flex;align-items:center;justify-content:center;background:none;border:0;cursor:pointer;color:var(--zg-ink);padding:4px;position:relative;transition:color .3s}
.zg-icon-btn:hover{color:var(--zg-gold)}
.zg-icon-btn svg{width:21px;height:21px}
.zg-burger{display:none}
.zg-cart-count{position:absolute;top:-4px;inset-inline-end:-7px;min-width:17px;height:17px;border-radius:50%;background:var(--zg-gold);color:#fff;font-size:10px;display:flex;align-items:center;justify-content:center;padding-inline:4px}
.zg-search-panel{position:absolute;inset-inline:0;top:100%;background:var(--zg-ivory);border-bottom:1px solid var(--zg-line);padding-block:26px;opacity:0;visibility:hidden;transition:all .25s}
.zg-search-panel.is-open{opacity:1;visibility:visible}
.zg-search-form{display:flex;border-bottom:1px solid var(--zg-ink)}
.zg-search-form input{flex:1;border:0;background:none;padding:12px 0;font:inherit}
.zg-search-form input:focus{outline:none}
.zg-search-form button{background:none;border:0;cursor:pointer;padding:8px;color:var(--zg-ink)}
.zg-drawer-backdrop{position:fixed;inset:0;background:rgba(23,20,15,.45);opacity:0;visibility:hidden;transition:opacity .3s;z-index:200}
body.zg-has-open .zg-drawer-backdrop{opacity:1;visibility:visible}
.zg-drawer{position:fixed;inset-block:0;inset-inline-start:0;z-index:210;width:min(86vw,380px);background:var(--zg-ivory);display:flex;flex-direction:column;transform:translateX(-102%);visibility:hidden;transition:transform .35s var(--zg-ease),visibility .35s}
.zg-drawer--filters{inset-inline-start:auto;inset-inline-end:0;transform:translateX(102%)}
.zg-drawer.is-open{transform:none;visibility:visible}
.zg-drawer__head{display:flex;align-items:center;justify-content:space-between;padding:22px 26px;border-bottom:1px solid var(--zg-line)}
.zg-drawer__title{font-family:var(--font-display);font-size:20px}
.zg-drawer__menu{padding:18px 26px;overflow-y:auto;flex:1}
.zg-drawer__menu li{border-bottom:1px solid var(--zg-line)}
.zg-drawer__menu li a{display:block;padding-block:15px;font-size:13px;letter-spacing:.14em;text-transform:uppercase}
.zg-drawer__menu .sub-menu{padding-inline-start:16px}
.zg-drawer__menu .sub-menu li{border:0}
.zg-drawer__menu .sub-menu a{font-size:13px;text-transform:none;letter-spacing:.02em;color:var(--zg-charcoal);padding-block:9px}
.zg-drawer__foot{padding:22px 26px;border-top:1px solid var(--zg-line)}
.zg-drawer__body{padding:26px;overflow-y:auto;flex:1}
.zg-hero{position:relative;min-height:min(88vh,860px);display:flex;align-items:flex-end;overflow:hidden;background:var(--zg-charcoal)}
.zg-hero__media,.zg-hero__media img,.zg-hero__media video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.zg-hero__overlay{position:absolute;inset:0;background:linear-gradient(180deg,rgba(20,17,12,.05),rgba(20,17,12,.6))}
.zg-hero__content{position:relative;color:#fff;padding-block:clamp(48px,7vw,96px);max-width:640px}
.zg-hero .zg-kicker{color:#fff}
.zg-hero .zg-kicker::before{background:#fff}
.zg-hero__content .zg-display{font-size:clamp(38px,6vw,76px);margin-bottom:16px}
.zg-hero__content>p{max-width:46ch;font-size:17px;color:rgba(255,255,255,.88)}
.zg-hero__actions{display:flex;gap:14px;flex-wrap:wrap;margin-top:30px}
.zg-tiles{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(16px,2.2vw,28
