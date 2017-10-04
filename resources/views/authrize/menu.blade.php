@extends('layouts.app')
picture
@section('title', '管理者功能頁')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>


  <!-- One -->
      <section id="one" class="wrapper special">
        <div class="inner">
          <header class="major">
            <h2>管理者功能頁</h2>
          </header>
          <div class="features">
            <div class="feature">
              <a href="{{ url('/authrize/menu/addClient') }}">
              <i class="glyphicon glyphicon-user"></i>
              <h3>開課單位帳號管理</h3>
              </a>
              <p>在此對開課單位的帳號進行新增修改刪除的操作。</p>
            </div>
            <div class="feature">
              <a href="{{ url('/authrize/menu/uploadAchievement') }}">
              <i class="glyphicon glyphicon-cloud-upload"></i>
              <h3>優異成果上傳</h3>
              </a>
              <p>能夠把優異的成果上傳到網站伺服器中儲存。</p>
            </div>
            <div class="feature">
              <a href="{{ url('/authrize/menu/introduce') }}">
                <i class="glyphicon glyphicon-hourglass"></i>
                <h3>簡介內容管理</h3>
              </a>
              <p>在此新增編輯簡介內容</p>
            </div>
            <div class="feature">
              <a href="{{ url('/authrize/menu/news') }}">
                <i class="glyphicon glyphicon-hourglass"></i>
                <h3>最新公告管理</h3>
              </a>
              <p>在此新增最新公告</p>
            </div>
            <div class="feature">
              <i class="glyphicon glyphicon-hourglass"></i>
              <h3>功能未定</h3>
              <p>額外功能擴充預留空間</p>
            </div>
          </div>
        </div>
      </section>
</div>




@endsection

@section('css')

<style type="text/css">

@import url(font-awesome.min.css);
@import url("http://fonts.googleapis.com/css?family=Raleway:300,700");

/*
  Typify by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

/* Reset */

  html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }

  article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
  }

  body {
    line-height: 1;
  }



  blockquote, q {
    quotes: none;
  }

  blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
  }

  body {
    -webkit-text-size-adjust: none;
  }

/* Box Model */

  *, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

/* Containers */

  .container {
    margin-left: auto;
    margin-right: auto;
  }

  .container.\31 25\25 {
    width: 100%;
    max-width: 100em;
    min-width: 80em;
  }

  .container.\37 5\25 {
    width: 60em;
  }

  .container.\35 0\25 {
    width: 40em;
  }

  .container.\32 5\25 {
    width: 20em;
  }

  .container {
    width: 80em;
  }

  @media screen and (max-width: 1680px) {

    .container.\31 25\25 {
      width: 100%;
      max-width: 100em;
      min-width: 80em;
    }

    .container.\37 5\25 {
      width: 60em;
    }

    .container.\35 0\25 {
      width: 40em;
    }

    .container.\32 5\25 {
      width: 20em;
    }

    .container {
      width: 80em;
    }

  }

  @media screen and (max-width: 1280px) {

    .container.\31 25\25 {
      width: 100%;
      max-width: 81.25em;
      min-width: 65em;
    }

    .container.\37 5\25 {
      width: 48.75em;
    }

    .container.\35 0\25 {
      width: 32.5em;
    }

    .container.\32 5\25 {
      width: 16.25em;
    }

    .container {
      width: 65em;
    }

  }

  @media screen and (max-width: 980px) {

    .container.\31 25\25 {
      width: 100%;
      max-width: 112.5%;
      min-width: 90%;
    }

    .container.\37 5\25 {
      width: 67.5%;
    }

    .container.\35 0\25 {
      width: 45%;
    }

    .container.\32 5\25 {
      width: 22.5%;
    }

    .container {
      width: 90%;
    }

  }

  @media screen and (max-width: 736px) {

    .container.\31 25\25 {
      width: 100%;
      max-width: 112.5%;
      min-width: 90%;
    }

    .container.\37 5\25 {
      width: 67.5%;
    }

    .container.\35 0\25 {
      width: 45%;
    }

    .container.\32 5\25 {
      width: 22.5%;
    }

    .container {
      width: 90%;
    }

  }

  @media screen and (max-width: 480px) {

    .container.\31 25\25 {
      width: 100%;
      max-width: 112.5%;
      min-width: 90%;
    }

    .container.\37 5\25 {
      width: 67.5%;
    }

    .container.\35 0\25 {
      width: 45%;
    }

    .container.\32 5\25 {
      width: 22.5%;
    }

    .container {
      width: 90%;
    }

  }

/* Grid */

  .row {
    border-bottom: solid 1px transparent;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .row > * {
    float: left;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .row:after, .row:before {
    content: '';
    display: block;
    clear: both;
    height: 0;
  }

  .row.uniform > * > :first-child {
    margin-top: 0;
  }

  .row.uniform > * > :last-child {
    margin-bottom: 0;
  }

  .row.\30 \25 > * {
    padding: 0 0 0 0em;
  }

  .row.\30 \25 {
    margin: 0 0 -1px 0em;
  }

  .row.uniform.\30 \25 > * {
    padding: 0em 0 0 0em;
  }

  .row.uniform.\30 \25 {
    margin: 0em 0 -1px 0em;
  }

  .row > * {
    padding: 0 0 0 2em;
  }

  .row {
    margin: 0 0 -1px -2em;
  }

  .row.uniform > * {
    padding: 2em 0 0 2em;
  }

  .row.uniform {
    margin: -2em 0 -1px -2em;
  }

  .row.\32 00\25 > * {
    padding: 0 0 0 4em;
  }

  .row.\32 00\25 {
    margin: 0 0 -1px -4em;
  }

  .row.uniform.\32 00\25 > * {
    padding: 4em 0 0 4em;
  }

  .row.uniform.\32 00\25 {
    margin: -4em 0 -1px -4em;
  }

  .row.\31 50\25 > * {
    padding: 0 0 0 3em;
  }

  .row.\31 50\25 {
    margin: 0 0 -1px -3em;
  }

  .row.uniform.\31 50\25 > * {
    padding: 3em 0 0 3em;
  }

  .row.uniform.\31 50\25 {
    margin: -3em 0 -1px -3em;
  }

  .row.\35 0\25 > * {
    padding: 0 0 0 1em;
  }

  .row.\35 0\25 {
    margin: 0 0 -1px -1em;
  }

  .row.uniform.\35 0\25 > * {
    padding: 1em 0 0 1em;
  }

  .row.uniform.\35 0\25 {
    margin: -1em 0 -1px -1em;
  }

  .row.\32 5\25 > * {
    padding: 0 0 0 0.5em;
  }

  .row.\32 5\25 {
    margin: 0 0 -1px -0.5em;
  }

  .row.uniform.\32 5\25 > * {
    padding: 0.5em 0 0 0.5em;
  }

  .row.uniform.\32 5\25 {
    margin: -0.5em 0 -1px -0.5em;
  }

  .\31 2u, .\31 2u\24 {
    width: 100%;
    clear: none;
    margin-left: 0;
  }

  .\31 1u, .\31 1u\24 {
    width: 91.6666666667%;
    clear: none;
    margin-left: 0;
  }

  .\31 0u, .\31 0u\24 {
    width: 83.3333333333%;
    clear: none;
    margin-left: 0;
  }

  .\39 u, .\39 u\24 {
    width: 75%;
    clear: none;
    margin-left: 0;
  }

  .\38 u, .\38 u\24 {
    width: 66.6666666667%;
    clear: none;
    margin-left: 0;
  }

  .\37 u, .\37 u\24 {
    width: 58.3333333333%;
    clear: none;
    margin-left: 0;
  }

  .\36 u, .\36 u\24 {
    width: 50%;
    clear: none;
    margin-left: 0;
  }

  .\35 u, .\35 u\24 {
    width: 41.6666666667%;
    clear: none;
    margin-left: 0;
  }

  .\34 u, .\34 u\24 {
    width: 33.3333333333%;
    clear: none;
    margin-left: 0;
  }

  .\33 u, .\33 u\24 {
    width: 25%;
    clear: none;
    margin-left: 0;
  }

  .\32 u, .\32 u\24 {
    width: 16.6666666667%;
    clear: none;
    margin-left: 0;
  }

  .\31 u, .\31 u\24 {
    width: 8.3333333333%;
    clear: none;
    margin-left: 0;
  }

  .\31 2u\24 + *,
  .\31 1u\24 + *,
  .\31 0u\24 + *,
  .\39 u\24 + *,
  .\38 u\24 + *,
  .\37 u\24 + *,
  .\36 u\24 + *,
  .\35 u\24 + *,
  .\34 u\24 + *,
  .\33 u\24 + *,
  .\32 u\24 + *,
  .\31 u\24 + * {
    clear: left;
  }

  .\-11u {
    margin-left: 91.66667%;
  }

  .\-10u {
    margin-left: 83.33333%;
  }

  .\-9u {
    margin-left: 75%;
  }

  .\-8u {
    margin-left: 66.66667%;
  }

  .\-7u {
    margin-left: 58.33333%;
  }

  .\-6u {
    margin-left: 50%;
  }

  .\-5u {
    margin-left: 41.66667%;
  }

  .\-4u {
    margin-left: 33.33333%;
  }

  .\-3u {
    margin-left: 25%;
  }

  .\-2u {
    margin-left: 16.66667%;
  }

  .\-1u {
    margin-left: 8.33333%;
  }

  @media screen and (max-width: 1680px) {

    .row > * {
      padding: 0 0 0 2em;
    }

    .row {
      margin: 0 0 -1px -2em;
    }

    .row.uniform > * {
      padding: 2em 0 0 2em;
    }

    .row.uniform {
      margin: -2em 0 -1px -2em;
    }

    .row.\32 00\25 > * {
      padding: 0 0 0 4em;
    }

    .row.\32 00\25 {
      margin: 0 0 -1px -4em;
    }

    .row.uniform.\32 00\25 > * {
      padding: 4em 0 0 4em;
    }

    .row.uniform.\32 00\25 {
      margin: -4em 0 -1px -4em;
    }

    .row.\31 50\25 > * {
      padding: 0 0 0 3em;
    }

    .row.\31 50\25 {
      margin: 0 0 -1px -3em;
    }

    .row.uniform.\31 50\25 > * {
      padding: 3em 0 0 3em;
    }

    .row.uniform.\31 50\25 {
      margin: -3em 0 -1px -3em;
    }

    .row.\35 0\25 > * {
      padding: 0 0 0 1em;
    }

    .row.\35 0\25 {
      margin: 0 0 -1px -1em;
    }

    .row.uniform.\35 0\25 > * {
      padding: 1em 0 0 1em;
    }

    .row.uniform.\35 0\25 {
      margin: -1em 0 -1px -1em;
    }

    .row.\32 5\25 > * {
      padding: 0 0 0 0.5em;
    }

    .row.\32 5\25 {
      margin: 0 0 -1px -0.5em;
    }

    .row.uniform.\32 5\25 > * {
      padding: 0.5em 0 0 0.5em;
    }

    .row.uniform.\32 5\25 {
      margin: -0.5em 0 -1px -0.5em;
    }

    .\31 2u\28xlarge\29, .\31 2u\24\28xlarge\29 {
      width: 100%;
      clear: none;
      margin-left: 0;
    }

    .\31 1u\28xlarge\29, .\31 1u\24\28xlarge\29 {
      width: 91.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 0u\28xlarge\29, .\31 0u\24\28xlarge\29 {
      width: 83.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\39 u\28xlarge\29, .\39 u\24\28xlarge\29 {
      width: 75%;
      clear: none;
      margin-left: 0;
    }

    .\38 u\28xlarge\29, .\38 u\24\28xlarge\29 {
      width: 66.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\37 u\28xlarge\29, .\37 u\24\28xlarge\29 {
      width: 58.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\36 u\28xlarge\29, .\36 u\24\28xlarge\29 {
      width: 50%;
      clear: none;
      margin-left: 0;
    }

    .\35 u\28xlarge\29, .\35 u\24\28xlarge\29 {
      width: 41.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\34 u\28xlarge\29, .\34 u\24\28xlarge\29 {
      width: 33.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\33 u\28xlarge\29, .\33 u\24\28xlarge\29 {
      width: 25%;
      clear: none;
      margin-left: 0;
    }

    .\32 u\28xlarge\29, .\32 u\24\28xlarge\29 {
      width: 16.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 u\28xlarge\29, .\31 u\24\28xlarge\29 {
      width: 8.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\31 2u\24\28xlarge\29 + *,
    .\31 1u\24\28xlarge\29 + *,
    .\31 0u\24\28xlarge\29 + *,
    .\39 u\24\28xlarge\29 + *,
    .\38 u\24\28xlarge\29 + *,
    .\37 u\24\28xlarge\29 + *,
    .\36 u\24\28xlarge\29 + *,
    .\35 u\24\28xlarge\29 + *,
    .\34 u\24\28xlarge\29 + *,
    .\33 u\24\28xlarge\29 + *,
    .\32 u\24\28xlarge\29 + *,
    .\31 u\24\28xlarge\29 + * {
      clear: left;
    }

    .\-11u\28xlarge\29 {
      margin-left: 91.66667%;
    }

    .\-10u\28xlarge\29 {
      margin-left: 83.33333%;
    }

    .\-9u\28xlarge\29 {
      margin-left: 75%;
    }

    .\-8u\28xlarge\29 {
      margin-left: 66.66667%;
    }

    .\-7u\28xlarge\29 {
      margin-left: 58.33333%;
    }

    .\-6u\28xlarge\29 {
      margin-left: 50%;
    }

    .\-5u\28xlarge\29 {
      margin-left: 41.66667%;
    }

    .\-4u\28xlarge\29 {
      margin-left: 33.33333%;
    }

    .\-3u\28xlarge\29 {
      margin-left: 25%;
    }

    .\-2u\28xlarge\29 {
      margin-left: 16.66667%;
    }

    .\-1u\28xlarge\29 {
      margin-left: 8.33333%;
    }

  }

  @media screen and (max-width: 1280px) {

    .row > * {
      padding: 0 0 0 1.5em;
    }

    .row {
      margin: 0 0 -1px -1.5em;
    }

    .row.uniform > * {
      padding: 1.5em 0 0 1.5em;
    }

    .row.uniform {
      margin: -1.5em 0 -1px -1.5em;
    }

    .row.\32 00\25 > * {
      padding: 0 0 0 3em;
    }

    .row.\32 00\25 {
      margin: 0 0 -1px -3em;
    }

    .row.uniform.\32 00\25 > * {
      padding: 3em 0 0 3em;
    }

    .row.uniform.\32 00\25 {
      margin: -3em 0 -1px -3em;
    }

    .row.\31 50\25 > * {
      padding: 0 0 0 2.25em;
    }

    .row.\31 50\25 {
      margin: 0 0 -1px -2.25em;
    }

    .row.uniform.\31 50\25 > * {
      padding: 2.25em 0 0 2.25em;
    }

    .row.uniform.\31 50\25 {
      margin: -2.25em 0 -1px -2.25em;
    }

    .row.\35 0\25 > * {
      padding: 0 0 0 0.75em;
    }

    .row.\35 0\25 {
      margin: 0 0 -1px -0.75em;
    }

    .row.uniform.\35 0\25 > * {
      padding: 0.75em 0 0 0.75em;
    }

    .row.uniform.\35 0\25 {
      margin: -0.75em 0 -1px -0.75em;
    }

    .row.\32 5\25 > * {
      padding: 0 0 0 0.375em;
    }

    .row.\32 5\25 {
      margin: 0 0 -1px -0.375em;
    }

    .row.uniform.\32 5\25 > * {
      padding: 0.375em 0 0 0.375em;
    }

    .row.uniform.\32 5\25 {
      margin: -0.375em 0 -1px -0.375em;
    }

    .\31 2u\28large\29, .\31 2u\24\28large\29 {
      width: 100%;
      clear: none;
      margin-left: 0;
    }

    .\31 1u\28large\29, .\31 1u\24\28large\29 {
      width: 91.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 0u\28large\29, .\31 0u\24\28large\29 {
      width: 83.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\39 u\28large\29, .\39 u\24\28large\29 {
      width: 75%;
      clear: none;
      margin-left: 0;
    }

    .\38 u\28large\29, .\38 u\24\28large\29 {
      width: 66.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\37 u\28large\29, .\37 u\24\28large\29 {
      width: 58.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\36 u\28large\29, .\36 u\24\28large\29 {
      width: 50%;
      clear: none;
      margin-left: 0;
    }

    .\35 u\28large\29, .\35 u\24\28large\29 {
      width: 41.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\34 u\28large\29, .\34 u\24\28large\29 {
      width: 33.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\33 u\28large\29, .\33 u\24\28large\29 {
      width: 25%;
      clear: none;
      margin-left: 0;
    }

    .\32 u\28large\29, .\32 u\24\28large\29 {
      width: 16.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 u\28large\29, .\31 u\24\28large\29 {
      width: 8.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\31 2u\24\28large\29 + *,
    .\31 1u\24\28large\29 + *,
    .\31 0u\24\28large\29 + *,
    .\39 u\24\28large\29 + *,
    .\38 u\24\28large\29 + *,
    .\37 u\24\28large\29 + *,
    .\36 u\24\28large\29 + *,
    .\35 u\24\28large\29 + *,
    .\34 u\24\28large\29 + *,
    .\33 u\24\28large\29 + *,
    .\32 u\24\28large\29 + *,
    .\31 u\24\28large\29 + * {
      clear: left;
    }

    .\-11u\28large\29 {
      margin-left: 91.66667%;
    }

    .\-10u\28large\29 {
      margin-left: 83.33333%;
    }

    .\-9u\28large\29 {
      margin-left: 75%;
    }

    .\-8u\28large\29 {
      margin-left: 66.66667%;
    }

    .\-7u\28large\29 {
      margin-left: 58.33333%;
    }

    .\-6u\28large\29 {
      margin-left: 50%;
    }

    .\-5u\28large\29 {
      margin-left: 41.66667%;
    }

    .\-4u\28large\29 {
      margin-left: 33.33333%;
    }

    .\-3u\28large\29 {
      margin-left: 25%;
    }

    .\-2u\28large\29 {
      margin-left: 16.66667%;
    }

    .\-1u\28large\29 {
      margin-left: 8.33333%;
    }

  }

  @media screen and (max-width: 980px) {

    .row > * {
      padding: 0 0 0 1.5em;
    }

    .row {
      margin: 0 0 -1px -1.5em;
    }

    .row.uniform > * {
      padding: 1.5em 0 0 1.5em;
    }

    .row.uniform {
      margin: -1.5em 0 -1px -1.5em;
    }

    .row.\32 00\25 > * {
      padding: 0 0 0 3em;
    }

    .row.\32 00\25 {
      margin: 0 0 -1px -3em;
    }

    .row.uniform.\32 00\25 > * {
      padding: 3em 0 0 3em;
    }

    .row.uniform.\32 00\25 {
      margin: -3em 0 -1px -3em;
    }

    .row.\31 50\25 > * {
      padding: 0 0 0 2.25em;
    }

    .row.\31 50\25 {
      margin: 0 0 -1px -2.25em;
    }

    .row.uniform.\31 50\25 > * {
      padding: 2.25em 0 0 2.25em;
    }

    .row.uniform.\31 50\25 {
      margin: -2.25em 0 -1px -2.25em;
    }

    .row.\35 0\25 > * {
      padding: 0 0 0 0.75em;
    }

    .row.\35 0\25 {
      margin: 0 0 -1px -0.75em;
    }

    .row.uniform.\35 0\25 > * {
      padding: 0.75em 0 0 0.75em;
    }

    .row.uniform.\35 0\25 {
      margin: -0.75em 0 -1px -0.75em;
    }

    .row.\32 5\25 > * {
      padding: 0 0 0 0.375em;
    }

    .row.\32 5\25 {
      margin: 0 0 -1px -0.375em;
    }

    .row.uniform.\32 5\25 > * {
      padding: 0.375em 0 0 0.375em;
    }

    .row.uniform.\32 5\25 {
      margin: -0.375em 0 -1px -0.375em;
    }

    .\31 2u\28medium\29, .\31 2u\24\28medium\29 {
      width: 100%;
      clear: none;
      margin-left: 0;
    }

    .\31 1u\28medium\29, .\31 1u\24\28medium\29 {
      width: 91.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 0u\28medium\29, .\31 0u\24\28medium\29 {
      width: 83.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\39 u\28medium\29, .\39 u\24\28medium\29 {
      width: 75%;
      clear: none;
      margin-left: 0;
    }

    .\38 u\28medium\29, .\38 u\24\28medium\29 {
      width: 66.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\37 u\28medium\29, .\37 u\24\28medium\29 {
      width: 58.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\36 u\28medium\29, .\36 u\24\28medium\29 {
      width: 50%;
      clear: none;
      margin-left: 0;
    }

    .\35 u\28medium\29, .\35 u\24\28medium\29 {
      width: 41.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\34 u\28medium\29, .\34 u\24\28medium\29 {
      width: 33.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\33 u\28medium\29, .\33 u\24\28medium\29 {
      width: 25%;
      clear: none;
      margin-left: 0;
    }

    .\32 u\28medium\29, .\32 u\24\28medium\29 {
      width: 16.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 u\28medium\29, .\31 u\24\28medium\29 {
      width: 8.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\31 2u\24\28medium\29 + *,
    .\31 1u\24\28medium\29 + *,
    .\31 0u\24\28medium\29 + *,
    .\39 u\24\28medium\29 + *,
    .\38 u\24\28medium\29 + *,
    .\37 u\24\28medium\29 + *,
    .\36 u\24\28medium\29 + *,
    .\35 u\24\28medium\29 + *,
    .\34 u\24\28medium\29 + *,
    .\33 u\24\28medium\29 + *,
    .\32 u\24\28medium\29 + *,
    .\31 u\24\28medium\29 + * {
      clear: left;
    }

    .\-11u\28medium\29 {
      margin-left: 91.66667%;
    }

    .\-10u\28medium\29 {
      margin-left: 83.33333%;
    }

    .\-9u\28medium\29 {
      margin-left: 75%;
    }

    .\-8u\28medium\29 {
      margin-left: 66.66667%;
    }

    .\-7u\28medium\29 {
      margin-left: 58.33333%;
    }

    .\-6u\28medium\29 {
      margin-left: 50%;
    }

    .\-5u\28medium\29 {
      margin-left: 41.66667%;
    }

    .\-4u\28medium\29 {
      margin-left: 33.33333%;
    }

    .\-3u\28medium\29 {
      margin-left: 25%;
    }

    .\-2u\28medium\29 {
      margin-left: 16.66667%;
    }

    .\-1u\28medium\29 {
      margin-left: 8.33333%;
    }

  }

  @media screen and (max-width: 736px) {

    .row > * {
      padding: 0 0 0 1.25em;
    }

    .row {
      margin: 0 0 -1px -1.25em;
    }

    .row.uniform > * {
      padding: 1.25em 0 0 1.25em;
    }

    .row.uniform {
      margin: -1.25em 0 -1px -1.25em;
    }

    .row.\32 00\25 > * {
      padding: 0 0 0 2.5em;
    }

    .row.\32 00\25 {
      margin: 0 0 -1px -2.5em;
    }

    .row.uniform.\32 00\25 > * {
      padding: 2.5em 0 0 2.5em;
    }

    .row.uniform.\32 00\25 {
      margin: -2.5em 0 -1px -2.5em;
    }

    .row.\31 50\25 > * {
      padding: 0 0 0 1.875em;
    }

    .row.\31 50\25 {
      margin: 0 0 -1px -1.875em;
    }

    .row.uniform.\31 50\25 > * {
      padding: 1.875em 0 0 1.875em;
    }

    .row.uniform.\31 50\25 {
      margin: -1.875em 0 -1px -1.875em;
    }

    .row.\35 0\25 > * {
      padding: 0 0 0 0.625em;
    }

    .row.\35 0\25 {
      margin: 0 0 -1px -0.625em;
    }

    .row.uniform.\35 0\25 > * {
      padding: 0.625em 0 0 0.625em;
    }

    .row.uniform.\35 0\25 {
      margin: -0.625em 0 -1px -0.625em;
    }

    .row.\32 5\25 > * {
      padding: 0 0 0 0.3125em;
    }

    .row.\32 5\25 {
      margin: 0 0 -1px -0.3125em;
    }

    .row.uniform.\32 5\25 > * {
      padding: 0.3125em 0 0 0.3125em;
    }

    .row.uniform.\32 5\25 {
      margin: -0.3125em 0 -1px -0.3125em;
    }

    .\31 2u\28small\29, .\31 2u\24\28small\29 {
      width: 100%;
      clear: none;
      margin-left: 0;
    }

    .\31 1u\28small\29, .\31 1u\24\28small\29 {
      width: 91.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 0u\28small\29, .\31 0u\24\28small\29 {
      width: 83.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\39 u\28small\29, .\39 u\24\28small\29 {
      width: 75%;
      clear: none;
      margin-left: 0;
    }

    .\38 u\28small\29, .\38 u\24\28small\29 {
      width: 66.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\37 u\28small\29, .\37 u\24\28small\29 {
      width: 58.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\36 u\28small\29, .\36 u\24\28small\29 {
      width: 50%;
      clear: none;
      margin-left: 0;
    }

    .\35 u\28small\29, .\35 u\24\28small\29 {
      width: 41.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\34 u\28small\29, .\34 u\24\28small\29 {
      width: 33.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\33 u\28small\29, .\33 u\24\28small\29 {
      width: 25%;
      clear: none;
      margin-left: 0;
    }

    .\32 u\28small\29, .\32 u\24\28small\29 {
      width: 16.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 u\28small\29, .\31 u\24\28small\29 {
      width: 8.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\31 2u\24\28small\29 + *,
    .\31 1u\24\28small\29 + *,
    .\31 0u\24\28small\29 + *,
    .\39 u\24\28small\29 + *,
    .\38 u\24\28small\29 + *,
    .\37 u\24\28small\29 + *,
    .\36 u\24\28small\29 + *,
    .\35 u\24\28small\29 + *,
    .\34 u\24\28small\29 + *,
    .\33 u\24\28small\29 + *,
    .\32 u\24\28small\29 + *,
    .\31 u\24\28small\29 + * {
      clear: left;
    }

    .\-11u\28small\29 {
      margin-left: 91.66667%;
    }

    .\-10u\28small\29 {
      margin-left: 83.33333%;
    }

    .\-9u\28small\29 {
      margin-left: 75%;
    }

    .\-8u\28small\29 {
      margin-left: 66.66667%;
    }

    .\-7u\28small\29 {
      margin-left: 58.33333%;
    }

    .\-6u\28small\29 {
      margin-left: 50%;
    }

    .\-5u\28small\29 {
      margin-left: 41.66667%;
    }

    .\-4u\28small\29 {
      margin-left: 33.33333%;
    }

    .\-3u\28small\29 {
      margin-left: 25%;
    }

    .\-2u\28small\29 {
      margin-left: 16.66667%;
    }

    .\-1u\28small\29 {
      margin-left: 8.33333%;
    }

  }

  @media screen and (max-width: 480px) {

    .row > * {
      padding: 0 0 0 1.25em;
    }

    .row {
      margin: 0 0 -1px -1.25em;
    }

    .row.uniform > * {
      padding: 1.25em 0 0 1.25em;
    }

    .row.uniform {
      margin: -1.25em 0 -1px -1.25em;
    }

    .row.\32 00\25 > * {
      padding: 0 0 0 2.5em;
    }

    .row.\32 00\25 {
      margin: 0 0 -1px -2.5em;
    }

    .row.uniform.\32 00\25 > * {
      padding: 2.5em 0 0 2.5em;
    }

    .row.uniform.\32 00\25 {
      margin: -2.5em 0 -1px -2.5em;
    }

    .row.\31 50\25 > * {
      padding: 0 0 0 1.875em;
    }

    .row.\31 50\25 {
      margin: 0 0 -1px -1.875em;
    }

    .row.uniform.\31 50\25 > * {
      padding: 1.875em 0 0 1.875em;
    }

    .row.uniform.\31 50\25 {
      margin: -1.875em 0 -1px -1.875em;
    }

    .row.\35 0\25 > * {
      padding: 0 0 0 0.625em;
    }

    .row.\35 0\25 {
      margin: 0 0 -1px -0.625em;
    }

    .row.uniform.\35 0\25 > * {
      padding: 0.625em 0 0 0.625em;
    }

    .row.uniform.\35 0\25 {
      margin: -0.625em 0 -1px -0.625em;
    }

    .row.\32 5\25 > * {
      padding: 0 0 0 0.3125em;
    }

    .row.\32 5\25 {
      margin: 0 0 -1px -0.3125em;
    }

    .row.uniform.\32 5\25 > * {
      padding: 0.3125em 0 0 0.3125em;
    }

    .row.uniform.\32 5\25 {
      margin: -0.3125em 0 -1px -0.3125em;
    }

    .\31 2u\28xsmall\29, .\31 2u\24\28xsmall\29 {
      width: 100%;
      clear: none;
      margin-left: 0;
    }

    .\31 1u\28xsmall\29, .\31 1u\24\28xsmall\29 {
      width: 91.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 0u\28xsmall\29, .\31 0u\24\28xsmall\29 {
      width: 83.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\39 u\28xsmall\29, .\39 u\24\28xsmall\29 {
      width: 75%;
      clear: none;
      margin-left: 0;
    }

    .\38 u\28xsmall\29, .\38 u\24\28xsmall\29 {
      width: 66.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\37 u\28xsmall\29, .\37 u\24\28xsmall\29 {
      width: 58.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\36 u\28xsmall\29, .\36 u\24\28xsmall\29 {
      width: 50%;
      clear: none;
      margin-left: 0;
    }

    .\35 u\28xsmall\29, .\35 u\24\28xsmall\29 {
      width: 41.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\34 u\28xsmall\29, .\34 u\24\28xsmall\29 {
      width: 33.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\33 u\28xsmall\29, .\33 u\24\28xsmall\29 {
      width: 25%;
      clear: none;
      margin-left: 0;
    }

    .\32 u\28xsmall\29, .\32 u\24\28xsmall\29 {
      width: 16.6666666667%;
      clear: none;
      margin-left: 0;
    }

    .\31 u\28xsmall\29, .\31 u\24\28xsmall\29 {
      width: 8.3333333333%;
      clear: none;
      margin-left: 0;
    }

    .\31 2u\24\28xsmall\29 + *,
    .\31 1u\24\28xsmall\29 + *,
    .\31 0u\24\28xsmall\29 + *,
    .\39 u\24\28xsmall\29 + *,
    .\38 u\24\28xsmall\29 + *,
    .\37 u\24\28xsmall\29 + *,
    .\36 u\24\28xsmall\29 + *,
    .\35 u\24\28xsmall\29 + *,
    .\34 u\24\28xsmall\29 + *,
    .\33 u\24\28xsmall\29 + *,
    .\32 u\24\28xsmall\29 + *,
    .\31 u\24\28xsmall\29 + * {
      clear: left;
    }

    .\-11u\28xsmall\29 {
      margin-left: 91.66667%;
    }

    .\-10u\28xsmall\29 {
      margin-left: 83.33333%;
    }

    .\-9u\28xsmall\29 {
      margin-left: 75%;
    }

    .\-8u\28xsmall\29 {
      margin-left: 66.66667%;
    }

    .\-7u\28xsmall\29 {
      margin-left: 58.33333%;
    }

    .\-6u\28xsmall\29 {
      margin-left: 50%;
    }

    .\-5u\28xsmall\29 {
      margin-left: 41.66667%;
    }

    .\-4u\28xsmall\29 {
      margin-left: 33.33333%;
    }

    .\-3u\28xsmall\29 {
      margin-left: 25%;
    }

    .\-2u\28xsmall\29 {
      margin-left: 16.66667%;
    }

    .\-1u\28xsmall\29 {
      margin-left: 8.33333%;
    }

  }

/* Basic */

  @-ms-viewport {
    width: device-width;
  }

  body {
    -ms-overflow-style: scrollbar;
  }

  @media screen and (max-width: 480px) {

    html, body {
      min-width: 320px;
    }

  }

  body {
    background: #fff;
  }

    body.is-loading *, body.is-loading *:before, body.is-loading *:after {
      -moz-animation: none !important;
      -webkit-animation: none !important;
      -ms-animation: none !important;
      animation: none !important;
      -moz-transition: none !important;
      -webkit-transition: none !important;
      -ms-transition: none !important;
      transition: none !important;
    }

/* Type */

  body {
    background-color: #fff;
    color: #444;
  }

  body, input, select, textarea {
    font-family: "Raleway", Arial, Helvetica, sans-serif;
    font-size: 14pt;
    font-weight: 300;
    letter-spacing: 0.09em;
    line-height: 1.65em;
  }

    @media screen and (max-width: 1680px) {

      body, input, select, textarea {
        font-size: 12pt;
      }

    }

    @media screen and (max-width: 1280px) {

      body, input, select, textarea {
        font-size: 12pt;
      }

    }

    @media screen and (max-width: 980px) {

      body, input, select, textarea {
        font-size: 12pt;
      }

    }

    @media screen and (max-width: 736px) {

      body, input, select, textarea {
        font-size: 11pt;
      }

    }

    @media screen and (max-width: 480px) {

      body, input, select, textarea {
        font-size: 11pt;
      }

    }

  a {
  }

    a:hover {
      text-decoration: none;
    }

  strong, b {
    font-weight: 700;
  }

  em, i {
    font-style: italic;
  }

  p {
    margin: 0 0 2em 0;
  }

  h1, h2, h3, h4, h5, h6 {
    font-weight: 300;
    line-height: 1em;
    margin: 0 0 1em 0;
    text-transform: uppercase;
  }

    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
      color: inherit;
      text-decoration: none;
    }

  h2 {
    font-size: 1.6em;
    line-height: 1.5em;
  }

  h3 {
    font-size: 1.2em;
    line-height: 1.5em;
  }

  h4 {
    font-size: 1em;
    line-height: 1.5em;
  }

  h5 {
    font-size: 0.9em;
    line-height: 1.5em;
  }

  h6 {
    font-size: 0.7em;
    line-height: 1.5em;
  }

  sub {
    font-size: 0.8em;
    position: relative;
    top: 0.5em;
  }

  sup {
    font-size: 0.8em;
    position: relative;
    top: -0.5em;
  }

  blockquote {
    border-left: solid 4px;
    font-style: italic;
    margin: 0 0 2em 0;
    padding: 0.5em 0 0.5em 2em;
  }

  code {
    border-radius: 0;
    border: solid 1px;
    font-family: "Courier New", monospace;
    font-size: 0.9em;
    margin: 0 0.25em;
    padding: 0.25em 0.65em;
  }

  pre {
    -webkit-overflow-scrolling: touch;
    font-family: "Courier New", monospace;
    font-size: 0.9em;
    margin: 0 0 2em 0;
  }

    pre code {
      display: block;
      line-height: 1.75em;
      padding: 1em 1.5em;
      overflow-x: auto;
    }

  hr {
    border: 0;
    border-bottom: solid 1px;
    margin: 2em 0;
  }

    hr.major {
      margin: 3em 0;
    }

  .align-left {
    text-align: left;
  }

  .align-center {
    text-align: center;
  }

  .align-right {
    text-align: right;
  }

  input, select, textarea {
    color: #555;
  }

  a {
    color: #00cdcf;
  }

  strong, b {
    color: #555;
  }

  h1, h2, h3, h4, h5, h6 {
    color: #555;
  }

  blockquote {
    border-left-color: #e3e3e3;
  }

  code {
    background: rgba(144, 144, 144, 0.075);
    border-color: #e3e3e3;
  }

  hr {
    border-bottom-color: #e3e3e3;
  }

/* Box */

  .box {
    border-radius: 0;
    border: solid 1px;
    margin-bottom: 2em;
    padding: 1.5em;
  }

    .box > :last-child,
    .box > :last-child > :last-child,
    .box > :last-child > :last-child > :last-child {
      margin-bottom: 0;
    }

    .box.alt {
      border: 0;
      border-radius: 0;
      padding: 0;
    }

  .box {
    border-color: #e3e3e3;
  }

/* Button */

  input[type="submit"],
  input[type="reset"],
  input[type="button"],
  button,
  .button {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    border-radius: 0;
    border: 0;
    cursor: pointer;
    display: inline-block;
    height: 2.85em;
    line-height: 2.95em;
    padding: 0 1.5em;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
  }

    input[type="submit"].icon,
    input[type="reset"].icon,
    input[type="button"].icon,
    button.icon,
    .button.icon {
      padding-left: 1.35em;
    }

      input[type="submit"].icon:before,
      input[type="reset"].icon:before,
      input[type="button"].icon:before,
      button.icon:before,
      .button.icon:before {
        margin-right: 0.5em;
      }

    input[type="submit"].fit,
    input[type="reset"].fit,
    input[type="button"].fit,
    button.fit,
    .button.fit {
      display: block;
      margin: 0 0 1em 0;
      width: 100%;
    }

    input[type="submit"].small,
    input[type="reset"].small,
    input[type="button"].small,
    button.small,
    .button.small {
      font-size: 0.8em;
    }

    input[type="submit"].big,
    input[type="reset"].big,
    input[type="button"].big,
    button.big,
    .button.big {
      font-size: 1.35em;
    }

    input[type="submit"].disabled, input[type="submit"]:disabled,
    input[type="reset"].disabled,
    input[type="reset"]:disabled,
    input[type="button"].disabled,
    input[type="button"]:disabled,
    button.disabled,
    button:disabled,
    .button.disabled,
    .button:disabled {
      -moz-pointer-events: none;
      -webkit-pointer-events: none;
      -ms-pointer-events: none;
      pointer-events: none;
      opacity: 0.25;
    }

    @media screen and (max-width: 480px) {

      input[type="submit"],
      input[type="reset"],
      input[type="button"],
      button,
      .button {
        padding: 0;
      }

    }

  input[type="submit"],
  input[type="reset"],
  input[type="button"],
  button,
  .button {
    background-color: #f7f7f7;
    color: #555 !important;
  }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover,
    button:hover,
    .button:hover {
      background-color: white;
    }

    input[type="submit"]:active,
    input[type="reset"]:active,
    input[type="button"]:active,
    button:active,
    .button:active {
      background-color: #eaeaea;
    }

    input[type="submit"].alt,
    input[type="reset"].alt,
    input[type="button"].alt,
    button.alt,
    .button.alt {
      background-color: transparent;
      box-shadow: inset 0 0 0 2px #e3e3e3;
      color: #555 !important;
    }

      input[type="submit"].alt:hover,
      input[type="reset"].alt:hover,
      input[type="button"].alt:hover,
      button.alt:hover,
      .button.alt:hover {
        background-color: rgba(144, 144, 144, 0.075);
      }

      input[type="submit"].alt:active,
      input[type="reset"].alt:active,
      input[type="button"].alt:active,
      button.alt:active,
      .button.alt:active {
        background-color: rgba(144, 144, 144, 0.2);
      }

      input[type="submit"].alt.icon:before,
      input[type="reset"].alt.icon:before,
      input[type="button"].alt.icon:before,
      button.alt.icon:before,
      .button.alt.icon:before {
        color: #bbb;
      }

    input[type="submit"].special,
    input[type="reset"].special,
    input[type="button"].special,
    button.special,
    .button.special {
      background-color: #00cdcf;
      color: #ffffff !important;
    }

      input[type="submit"].special:hover,
      input[type="reset"].special:hover,
      input[type="button"].special:hover,
      button.special:hover,
      .button.special:hover {
        background-color: #00e6e9;
      }

      input[type="submit"].special:active,
      input[type="reset"].special:active,
      input[type="button"].special:active,
      button.special:active,
      .button.special:active {
        background-color: #00b4b5;
      }

/* Form */

  form {
    margin: 0 0 2em 0;
  }

  .grid-form {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-justify-content: space-between;
    -webkit-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    -moz-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

    .grid-form .form-control {
      width: 100%;
      margin-bottom: 2em;
    }

      .grid-form .form-control.narrow {
        width: 47%;
      }

    .grid-form .actions {
      margin-bottom: 0;
      width: 100%;
    }

    @media screen and (max-width: 736px) {

      .grid-form .form-control.narrow {
        margin-bottom: 1em;
        width: 100%;
      }

    }

  label {
    display: block;
    font-size: 0.9em;
    margin: 0 0 0.2em 0;
    text-transform: uppercase;
  }

  input[type="text"],
  input[type="password"],
  input[type="email"],
  select,
  textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    border-radius: 0;
    border: none;
    border: solid 1px;
    color: inherit;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
  }

    input[type="text"]:invalid,
    input[type="password"]:invalid,
    input[type="email"]:invalid,
    select:invalid,
    textarea:invalid {
      box-shadow: none;
    }

  .select-wrapper {
    text-decoration: none;
    display: block;
    position: relative;
  }

    .select-wrapper:before {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      font-family: FontAwesome;
      font-style: normal;
      font-weight: normal;
      text-transform: none !important;
    }

    .select-wrapper:before {
      content: '\f078';
      display: block;
      height: 2.75em;
      line-height: 2.75em;
      pointer-events: none;
      position: absolute;
      right: 0;
      text-align: center;
      top: 0;
      width: 2.75em;
    }

    .select-wrapper select::-ms-expand {
      display: none;
    }

  input[type="text"],
  input[type="password"],
  input[type="email"],
  select {
    height: 2.75em;
  }

  textarea {
    padding: 0.75em 1em;
  }

  input[type="checkbox"],
  input[type="radio"] {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    display: block;
    float: left;
    margin-right: -2em;
    opacity: 0;
    width: 1em;
    z-index: -1;
  }

    input[type="checkbox"] + label,
    input[type="radio"] + label {
      text-decoration: none;
      cursor: pointer;
      display: inline-block;
      font-size: 1em;
      font-weight: 300;
      padding-left: 2.4em;
      padding-right: 0.75em;
      position: relative;
    }

      input[type="checkbox"] + label:before,
      input[type="radio"] + label:before {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-transform: none !important;
      }

      input[type="checkbox"] + label:before,
      input[type="radio"] + label:before {
        border-radius: 0;
        border: solid 1px;
        content: '';
        display: inline-block;
        height: 1.65em;
        left: 0;
        line-height: 1.58125em;
        position: absolute;
        text-align: center;
        top: 0;
        width: 1.65em;
      }

    input[type="checkbox"]:checked + label:before,
    input[type="radio"]:checked + label:before {
      content: '\f00c';
    }

  input[type="checkbox"] + label:before {
    border-radius: 0;
  }

  input[type="radio"] + label:before {
    border-radius: 100%;
  }

  ::-webkit-input-placeholder {
    opacity: 1.0;
  }

  :-moz-placeholder {
    opacity: 1.0;
  }

  ::-moz-placeholder {
    opacity: 1.0;
  }

  :-ms-input-placeholder {
    opacity: 1.0;
  }

  .formerize-placeholder {
    opacity: 1.0;
  }

  label {
    color: #555;
  }

  input[type="text"],
  input[type="password"],
  input[type="email"],
  select,
  textarea {
    background: rgba(144, 144, 144, 0.075);
    border-color: #e3e3e3;
  }

    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="email"]:focus,
    select:focus,
    textarea:focus {
      border-color: #00cdcf;
      box-shadow: 0 0 0 1px #00cdcf;
    }

  .select-wrapper:before {
    color: #e3e3e3;
  }

  input[type="checkbox"] + label,
  input[type="radio"] + label {
    color: #444;
  }

    input[type="checkbox"] + label:before,
    input[type="radio"] + label:before {
      background: rgba(144, 144, 144, 0.075);
      border-color: #e3e3e3;
    }

  input[type="checkbox"]:checked + label:before,
  input[type="radio"]:checked + label:before {
    background-color: #00cdcf;
    border-color: #00cdcf;
    color: #ffffff;
  }

  input[type="checkbox"]:focus + label:before,
  input[type="radio"]:focus + label:before {
    border-color: #00cdcf;
    box-shadow: 0 0 0 1px #00cdcf;
  }

  ::-webkit-input-placeholder {
    color: #bbb !important;
  }

  :-moz-placeholder {
    color: #bbb !important;
  }

  ::-moz-placeholder {
    color: #bbb !important;
  }

  :-ms-input-placeholder {
    color: #bbb !important;
  }

  .formerize-placeholder {
    color: #bbb !important;
  }

/* Icon */

  .icon {
    text-decoration: none;
    border-bottom: none;
    position: relative;
  }

    .icon:before {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      font-family: FontAwesome;
      font-style: normal;
      font-weight: normal;
      text-transform: none !important;
    }

    .icon > .label {
      display: none;
    }

/* Image */

  .image {
    border-radius: 0;
    border: 0;
    display: inline-block;
    position: relative;
  }

    .image img {
      border-radius: 0;
      display: block;
    }

    .image.left, .image.right {
      max-width: 40%;
    }

      .image.left img, .image.right img {
        width: 100%;
      }

    .image.left {
      float: left;
      margin: 0 1.5em 1em 0;
      top: 0.25em;
    }

    .image.right {
      float: right;
      margin: 0 0 1em 1.5em;
      top: 0.25em;
    }

    .image.fit {
      display: block;
      margin: 0 0 2em 0;
      width: 100%;
    }

      .image.fit img {
        width: 100%;
      }

    .image.main {
      display: block;
      margin: 0 0 3em 0;
      width: 100%;
    }

      .image.main img {
        width: 100%;
      }


/* Section/Article */

  section.special, article.special, header.special {
    text-align: center;
  }

  header {
    margin-bottom: 1em;
  }

    header p {
      position: relative;
      margin: 0 0 1.5em 0;
      text-transform: uppercase;
    }

    header h2, header h3 {
      display: inline-block;
      padding-bottom: 0.4em;
      border-bottom-style: double;
      border-bottom-width: 4px;
    }

    header h2 + p {
      font-size: 1.25em;
      margin-top: -0.5em;
      line-height: 1.5em;
    }

    header h3 + p {
      font-size: 1.1em;
      line-height: 1.5em;
    }

    header h4 + p,
    header h5 + p,
    header h6 + p {
      font-size: 0.9em;
      line-height: 1.5em;
    }

    header.major {
      margin-bottom: 4em;
    }

    @media screen and (max-width: 1280px) {

      header.major {
        margin-bottom: 2em;
      }

    }

    @media screen and (max-width: 736px) {

      header.major {
        margin-bottom: 1.5em;
      }

    }

    @media screen and (max-width: 480px) {

      header.major {
        margin-bottom: 1em;
      }

    }

  header h2, header h3 {
    border-bottom-color: #e3e3e3;
  }

  header p {
    color: #bbb;
  }

/* Table */

  .table-wrapper {
    -webkit-overflow-scrolling: touch;
    overflow-x: auto;
  }

  table {
    margin: 0 0 2em 0;
    width: 100%;
  }

    table tbody tr {
      border: solid 1px;
      border-left: 0;
      border-right: 0;
    }

    table td {
      padding: 0.75em 0.75em;
    }

    table th {
      font-size: 0.9em;
      font-weight: 700;
      padding: 0 0.75em 0.75em 0.75em;
      text-align: left;
    }

    table thead {
      border-bottom: solid 2px;
    }

    table tfoot {
      border-top: solid 2px;
    }

    table.alt {
      border-collapse: separate;
    }

      table.alt tbody tr td {
        border: solid 1px;
        border-left-width: 0;
        border-top-width: 0;
      }

        table.alt tbody tr td:first-child {
          border-left-width: 1px;
        }

      table.alt tbody tr:first-child td {
        border-top-width: 1px;
      }

      table.alt thead {
        border-bottom: 0;
      }

      table.alt tfoot {
        border-top: 0;
      }

  table tbody tr {
    border-color: #e3e3e3;
  }

    table tbody tr:nth-child(2n + 1) {
      background-color: rgba(144, 144, 144, 0.075);
    }

  table th {
    color: #555;
  }

  table thead {
    border-bottom-color: #e3e3e3;
  }

  table tfoot {
    border-top-color: #e3e3e3;
  }

  table.alt tbody tr td {
    border-color: #e3e3e3;
  }

/* Feature */

  .features {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    margin-bottom: 2em;
  }

  .feature {
    padding: 2em 2em 0.1em 2em;
    border-style: solid;
    border-width: 1px;
    margin-left: -1px;
    margin-top: -1px;
    width: 33.33333%;
  }

    .feature .fa {
      font-size: 2.8em;
      margin-bottom: 0.7em;
    }

    @media screen and (max-width: 1280px) {

      .feature {
        padding: 2em 1.5em 0.1em 1.5em;
      }

    }

    @media screen and (max-width: 736px) {

      .feature {
        padding: 2em 1em 0.1em 1em;
        width: 50%;
      }

    }

    @media screen and (max-width: 480px) {

      .feature {
        padding: 2em 0.5em 0.1em 0.5em;
        width: 100%;
      }

    }

  .feature {
    border-color: #e3e3e3;
  }

    .feature .fa {
      color: #00cdcf;
    }

/* Wrapper */

  .wrapper {
    padding: 6em 0 4em 0;
    position: relative;
  }

    .wrapper > .inner {
      margin: 0 auto;
      width: 65em;
    }

      .wrapper > .inner.narrow {
        width: 35em;
      }

    .wrapper.style1 {
      background-color: #00cdcf;
      color: #ffffff;
    }

      .wrapper.style1 input, .wrapper.style1 select, .wrapper.style1 textarea {
        color: #ffffff;
      }

      .wrapper.style1 a {
        color: #00cdcf;
      }

      .wrapper.style1 strong, .wrapper.style1 b {
        color: #ffffff;
      }

      .wrapper.style1 h1, .wrapper.style1 h2, .wrapper.style1 h3, .wrapper.style1 h4, .wrapper.style1 h5, .wrapper.style1 h6 {
        color: #ffffff;
      }

      .wrapper.style1 blockquote {
        border-left-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 code {
        background: rgba(255, 255, 255, 0.075);
        border-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 hr {
        border-bottom-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 .box {
        border-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 input[type="submit"],
      .wrapper.style1 input[type="reset"],
      .wrapper.style1 input[type="button"],
      .wrapper.style1 button,
      .wrapper.style1 .button {
        background-color: #f7f7f7;
        color: #555 !important;
      }

        .wrapper.style1 input[type="submit"]:hover,
        .wrapper.style1 input[type="reset"]:hover,
        .wrapper.style1 input[type="button"]:hover,
        .wrapper.style1 button:hover,
        .wrapper.style1 .button:hover {
          background-color: white;
        }

        .wrapper.style1 input[type="submit"]:active,
        .wrapper.style1 input[type="reset"]:active,
        .wrapper.style1 input[type="button"]:active,
        .wrapper.style1 button:active,
        .wrapper.style1 .button:active {
          background-color: #eaeaea;
        }

        .wrapper.style1 input[type="submit"].alt,
        .wrapper.style1 input[type="reset"].alt,
        .wrapper.style1 input[type="button"].alt,
        .wrapper.style1 button.alt,
        .wrapper.style1 .button.alt {
          background-color: transparent;
          box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
          color: #ffffff !important;
        }

          .wrapper.style1 input[type="submit"].alt:hover,
          .wrapper.style1 input[type="reset"].alt:hover,
          .wrapper.style1 input[type="button"].alt:hover,
          .wrapper.style1 button.alt:hover,
          .wrapper.style1 .button.alt:hover {
            background-color: rgba(255, 255, 255, 0.075);
          }

          .wrapper.style1 input[type="submit"].alt:active,
          .wrapper.style1 input[type="reset"].alt:active,
          .wrapper.style1 input[type="button"].alt:active,
          .wrapper.style1 button.alt:active,
          .wrapper.style1 .button.alt:active {
            background-color: rgba(255, 255, 255, 0.2);
          }

          .wrapper.style1 input[type="submit"].alt.icon:before,
          .wrapper.style1 input[type="reset"].alt.icon:before,
          .wrapper.style1 input[type="button"].alt.icon:before,
          .wrapper.style1 button.alt.icon:before,
          .wrapper.style1 .button.alt.icon:before {
            color: #99ebeb;
          }

        .wrapper.style1 input[type="submit"].special,
        .wrapper.style1 input[type="reset"].special,
        .wrapper.style1 input[type="button"].special,
        .wrapper.style1 button.special,
        .wrapper.style1 .button.special {
          background-color: #009a9c;
          color: #fff !important;
        }

          .wrapper.style1 input[type="submit"].special:hover,
          .wrapper.style1 input[type="reset"].special:hover,
          .wrapper.style1 input[type="button"].special:hover,
          .wrapper.style1 button.special:hover,
          .wrapper.style1 .button.special:hover {
            background-color: #00b4b5;
          }

          .wrapper.style1 input[type="submit"].special:active,
          .wrapper.style1 input[type="reset"].special:active,
          .wrapper.style1 input[type="button"].special:active,
          .wrapper.style1 button.special:active,
          .wrapper.style1 .button.special:active {
            background-color: #008183;
          }

      .wrapper.style1 label {
        color: #ffffff;
      }

      .wrapper.style1 input[type="text"],
      .wrapper.style1 input[type="password"],
      .wrapper.style1 input[type="email"],
      .wrapper.style1 select,
      .wrapper.style1 textarea {
        background: rgba(255, 255, 255, 0.075);
        border-color: rgba(255, 255, 255, 0.25);
      }

        .wrapper.style1 input[type="text"]:focus,
        .wrapper.style1 input[type="password"]:focus,
        .wrapper.style1 input[type="email"]:focus,
        .wrapper.style1 select:focus,
        .wrapper.style1 textarea:focus {
          border-color: #00cdcf;
          box-shadow: 0 0 0 1px #00cdcf;
        }

      .wrapper.style1 .select-wrapper:before {
        color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 input[type="checkbox"] + label,
      .wrapper.style1 input[type="radio"] + label {
        color: #ffffff;
      }

        .wrapper.style1 input[type="checkbox"] + label:before,
        .wrapper.style1 input[type="radio"] + label:before {
          background: rgba(255, 255, 255, 0.075);
          border-color: rgba(255, 255, 255, 0.25);
        }

      .wrapper.style1 input[type="checkbox"]:checked + label:before,
      .wrapper.style1 input[type="radio"]:checked + label:before {
        background-color: #00cdcf;
        border-color: #00cdcf;
        color: #ffffff;
      }

      .wrapper.style1 input[type="checkbox"]:focus + label:before,
      .wrapper.style1 input[type="radio"]:focus + label:before {
        border-color: #00cdcf;
        box-shadow: 0 0 0 1px #00cdcf;
      }

      .wrapper.style1 ::-webkit-input-placeholder {
        color: #99ebeb !important;
      }

      .wrapper.style1 :-moz-placeholder {
        color: #99ebeb !important;
      }

      .wrapper.style1 ::-moz-placeholder {
        color: #99ebeb !important;
      }

      .wrapper.style1 :-ms-input-placeholder {
        color: #99ebeb !important;
      }

      .wrapper.style1 .formerize-placeholder {
        color: #99ebeb !important;
      }

      .wrapper.style1 ul.alt li {
        border-top-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 header h2, .wrapper.style1 header h3 {
        border-bottom-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 header p {
        color: #99ebeb;
      }

      .wrapper.style1 table tbody tr {
        border-color: rgba(255, 255, 255, 0.25);
      }

        .wrapper.style1 table tbody tr:nth-child(2n + 1) {
          background-color: rgba(255, 255, 255, 0.075);
        }

      .wrapper.style1 table th {
        color: #ffffff;
      }

      .wrapper.style1 table thead {
        border-bottom-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 table tfoot {
        border-top-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 table.alt tbody tr td {
        border-color: rgba(255, 255, 255, 0.25);
      }

      .wrapper.style1 .feature {
        border-color: rgba(255, 255, 255, 0.25);
      }

        .wrapper.style1 .feature .fa {
          color: #009a9c;
        }

    .wrapper.style2 {
      background-color: #f7f7f7;
      color: #444;
    }

      .wrapper.style2 input, .wrapper.style2 select, .wrapper.style2 textarea {
        color: #555;
      }

      .wrapper.style2 a {
        color: #00cdcf;
      }

      .wrapper.style2 strong, .wrapper.style2 b {
        color: #555;
      }

      .wrapper.style2 h1, .wrapper.style2 h2, .wrapper.style2 h3, .wrapper.style2 h4, .wrapper.style2 h5, .wrapper.style2 h6 {
        color: #555;
      }

      .wrapper.style2 blockquote {
        border-left-color: #ddd;
      }

      .wrapper.style2 code {
        background: #fff;
        border-color: #ddd;
      }

      .wrapper.style2 hr {
        border-bottom-color: #ddd;
      }

      .wrapper.style2 .box {
        border-color: #ddd;
      }

      .wrapper.style2 input[type="submit"],
      .wrapper.style2 input[type="reset"],
      .wrapper.style2 input[type="button"],
      .wrapper.style2 button,
      .wrapper.style2 .button {
        background-color: #555;
        color: #f7f7f7 !important;
      }

        .wrapper.style2 input[type="submit"].alt,
        .wrapper.style2 input[type="reset"].alt,
        .wrapper.style2 input[type="button"].alt,
        .wrapper.style2 button.alt,
        .wrapper.style2 .button.alt {
          background-color: transparent;
          box-shadow: inset 0 0 0 2px #ddd;
          color: #555 !important;
        }

          .wrapper.style2 input[type="submit"].alt:hover,
          .wrapper.style2 input[type="reset"].alt:hover,
          .wrapper.style2 input[type="button"].alt:hover,
          .wrapper.style2 button.alt:hover,
          .wrapper.style2 .button.alt:hover {
            background-color: #fff;
          }

          .wrapper.style2 input[type="submit"].alt:active,
          .wrapper.style2 input[type="reset"].alt:active,
          .wrapper.style2 input[type="button"].alt:active,
          .wrapper.style2 button.alt:active,
          .wrapper.style2 .button.alt:active {
            background-color: rgba(144, 144, 144, 0.2);
          }

          .wrapper.style2 input[type="submit"].alt.icon:before,
          .wrapper.style2 input[type="reset"].alt.icon:before,
          .wrapper.style2 input[type="button"].alt.icon:before,
          .wrapper.style2 button.alt.icon:before,
          .wrapper.style2 .button.alt.icon:before {
            color: #bbb;
          }

        .wrapper.style2 input[type="submit"].special,
        .wrapper.style2 input[type="reset"].special,
        .wrapper.style2 input[type="button"].special,
        .wrapper.style2 button.special,
        .wrapper.style2 .button.special {
          background-color: #00cdcf;
          color: #ffffff !important;
        }

          .wrapper.style2 input[type="submit"].special:hover,
          .wrapper.style2 input[type="reset"].special:hover,
          .wrapper.style2 input[type="button"].special:hover,
          .wrapper.style2 button.special:hover,
          .wrapper.style2 .button.special:hover {
            background-color: #00e6e9;
          }

          .wrapper.style2 input[type="submit"].special:active,
          .wrapper.style2 input[type="reset"].special:active,
          .wrapper.style2 input[type="button"].special:active,
          .wrapper.style2 button.special:active,
          .wrapper.style2 .button.special:active {
            background-color: #00b4b5;
          }

      .wrapper.style2 label {
        color: #555;
      }

      .wrapper.style2 input[type="text"],
      .wrapper.style2 input[type="password"],
      .wrapper.style2 input[type="email"],
      .wrapper.style2 select,
      .wrapper.style2 textarea {
        background: #fff;
        border-color: #ddd;
      }

        .wrapper.style2 input[type="text"]:focus,
        .wrapper.style2 input[type="password"]:focus,
        .wrapper.style2 input[type="email"]:focus,
        .wrapper.style2 select:focus,
        .wrapper.style2 textarea:focus {
          border-color: #00cdcf;
          box-shadow: 0 0 0 1px #00cdcf;
        }

      .wrapper.style2 .select-wrapper:before {
        color: #ddd;
      }

      .wrapper.style2 input[type="checkbox"] + label,
      .wrapper.style2 input[type="radio"] + label {
        color: #444;
      }

        .wrapper.style2 input[type="checkbox"] + label:before,
        .wrapper.style2 input[type="radio"] + label:before {
          background: #fff;
          border-color: #ddd;
        }

      .wrapper.style2 input[type="checkbox"]:checked + label:before,
      .wrapper.style2 input[type="radio"]:checked + label:before {
        background-color: #00cdcf;
        border-color: #00cdcf;
        color: #ffffff;
      }

      .wrapper.style2 input[type="checkbox"]:focus + label:before,
      .wrapper.style2 input[type="radio"]:focus + label:before {
        border-color: #00cdcf;
        box-shadow: 0 0 0 1px #00cdcf;
      }

      .wrapper.style2 ::-webkit-input-placeholder {
        color: #bbb !important;
      }

      .wrapper.style2 :-moz-placeholder {
        color: #bbb !important;
      }

      .wrapper.style2 ::-moz-placeholder {
        color: #bbb !important;
      }

      .wrapper.style2 :-ms-input-placeholder {
        color: #bbb !important;
      }

      .wrapper.style2 .formerize-placeholder {
        color: #bbb !important;
      }

      .wrapper.style2 ul.alt li {
        border-top-color: #ddd;
      }

      .wrapper.style2 header h2, .wrapper.style2 header h3 {
        border-bottom-color: #ddd;
      }

      .wrapper.style2 header p {
        color: #bbb;
      }

      .wrapper.style2 table tbody tr {
        border-color: #ddd;
      }

        .wrapper.style2 table tbody tr:nth-child(2n + 1) {
          background-color: #fff;
        }

      .wrapper.style2 table th {
        color: #555;
      }

      .wrapper.style2 table thead {
        border-bottom-color: #ddd;
      }

      .wrapper.style2 table tfoot {
        border-top-color: #ddd;
      }

      .wrapper.style2 table.alt tbody tr td {
        border-color: #ddd;
      }

      .wrapper.style2 .feature {
        border-color: #ddd;
      }

        .wrapper.style2 .feature .fa {
          color: #00cdcf;
        }

    .wrapper.style3 {
      background-color: #009a9c;
      color: #ddd;
    }

      .wrapper.style3 input, .wrapper.style3 select, .wrapper.style3 textarea {
        color: #fff;
      }

      .wrapper.style3 a {
        color: #00cdcf;
      }

      .wrapper.style3 strong, .wrapper.style3 b {
        color: #fff;
      }

      .wrapper.style3 h1, .wrapper.style3 h2, .wrapper.style3 h3, .wrapper.style3 h4, .wrapper.style3 h5, .wrapper.style3 h6 {
        color: #fff;
      }

      .wrapper.style3 blockquote {
        border-left-color: #ddd;
      }

      .wrapper.style3 code {
        background: #00b4b5;
        border-color: #ddd;
      }

      .wrapper.style3 hr {
        border-bottom-color: #ddd;
      }

      .wrapper.style3 .box {
        border-color: #ddd;
      }

      .wrapper.style3 input[type="submit"],
      .wrapper.style3 input[type="reset"],
      .wrapper.style3 input[type="button"],
      .wrapper.style3 button,
      .wrapper.style3 .button {
        background-color: #f7f7f7;
        color: #555 !important;
      }

        .wrapper.style3 input[type="submit"]:hover,
        .wrapper.style3 input[type="reset"]:hover,
        .wrapper.style3 input[type="button"]:hover,
        .wrapper.style3 button:hover,
        .wrapper.style3 .button:hover {
          background-color: white;
        }

        .wrapper.style3 input[type="submit"]:active,
        .wrapper.style3 input[type="reset"]:active,
        .wrapper.style3 input[type="button"]:active,
        .wrapper.style3 button:active,
        .wrapper.style3 .button:active {
          background-color: #eaeaea;
        }

        .wrapper.style3 input[type="submit"].alt,
        .wrapper.style3 input[type="reset"].alt,
        .wrapper.style3 input[type="button"].alt,
        .wrapper.style3 button.alt,
        .wrapper.style3 .button.alt {
          background-color: transparent;
          box-shadow: inset 0 0 0 2px #ddd;
          color: #fff !important;
        }

          .wrapper.style3 input[type="submit"].alt:hover,
          .wrapper.style3 input[type="reset"].alt:hover,
          .wrapper.style3 input[type="button"].alt:hover,
          .wrapper.style3 button.alt:hover,
          .wrapper.style3 .button.alt:hover {
            background-color: #00b4b5;
          }

          .wrapper.style3 input[type="submit"].alt:active,
          .wrapper.style3 input[type="reset"].alt:active,
          .wrapper.style3 input[type="button"].alt:active,
          .wrapper.style3 button.alt:active,
          .wrapper.style3 .button.alt:active {
            background-color: rgba(144, 144, 144, 0.2);
          }

          .wrapper.style3 input[type="submit"].alt.icon:before,
          .wrapper.style3 input[type="reset"].alt.icon:before,
          .wrapper.style3 input[type="button"].alt.icon:before,
          .wrapper.style3 button.alt.icon:before,
          .wrapper.style3 .button.alt.icon:before {
            color: #00cdcf;
          }

        .wrapper.style3 input[type="submit"].special,
        .wrapper.style3 input[type="reset"].special,
        .wrapper.style3 input[type="button"].special,
        .wrapper.style3 button.special,
        .wrapper.style3 .button.special {
          background-color: #00cdcf;
          color: #ffffff !important;
        }

          .wrapper.style3 input[type="submit"].special:hover,
          .wrapper.style3 input[type="reset"].special:hover,
          .wrapper.style3 input[type="button"].special:hover,
          .wrapper.style3 button.special:hover,
          .wrapper.style3 .button.special:hover {
            background-color: #00e6e9;
          }

          .wrapper.style3 input[type="submit"].special:active,
          .wrapper.style3 input[type="reset"].special:active,
          .wrapper.style3 input[type="button"].special:active,
          .wrapper.style3 button.special:active,
          .wrapper.style3 .button.special:active {
            background-color: #00b4b5;
          }

      .wrapper.style3 label {
        color: #fff;
      }

      .wrapper.style3 input[type="text"],
      .wrapper.style3 input[type="password"],
      .wrapper.style3 input[type="email"],
      .wrapper.style3 select,
      .wrapper.style3 textarea {
        background: #00b4b5;
        border-color: #ddd;
      }

        .wrapper.style3 input[type="text"]:focus,
        .wrapper.style3 input[type="password"]:focus,
        .wrapper.style3 input[type="email"]:focus,
        .wrapper.style3 select:focus,
        .wrapper.style3 textarea:focus {
          border-color: #00cdcf;
          box-shadow: 0 0 0 1px #00cdcf;
        }

      .wrapper.style3 .select-wrapper:before {
        color: #ddd;
      }

      .wrapper.style3 input[type="checkbox"] + label,
      .wrapper.style3 input[type="radio"] + label {
        color: #ddd;
      }

        .wrapper.style3 input[type="checkbox"] + label:before,
        .wrapper.style3 input[type="radio"] + label:before {
          background: #00b4b5;
          border-color: #ddd;
        }

      .wrapper.style3 input[type="checkbox"]:checked + label:before,
      .wrapper.style3 input[type="radio"]:checked + label:before {
        background-color: #00cdcf;
        border-color: #00cdcf;
        color: #ffffff;
      }

      .wrapper.style3 input[type="checkbox"]:focus + label:before,
      .wrapper.style3 input[type="radio"]:focus + label:before {
        border-color: #00cdcf;
        box-shadow: 0 0 0 1px #00cdcf;
      }

      .wrapper.style3 ::-webkit-input-placeholder {
        color: #00cdcf !important;
      }

      .wrapper.style3 :-moz-placeholder {
        color: #00cdcf !important;
      }

      .wrapper.style3 ::-moz-placeholder {
        color: #00cdcf !important;
      }

      .wrapper.style3 :-ms-input-placeholder {
        color: #00cdcf !important;
      }

      .wrapper.style3 .formerize-placeholder {
        color: #00cdcf !important;
      }

      .wrapper.style3 ul.alt li {
        border-top-color: #ddd;
      }

      .wrapper.style3 header h2, .wrapper.style3 header h3 {
        border-bottom-color: #ddd;
      }

      .wrapper.style3 header p {
        color: #00cdcf;
      }

      .wrapper.style3 table tbody tr {
        border-color: #ddd;
      }

        .wrapper.style3 table tbody tr:nth-child(2n + 1) {
          background-color: #00b4b5;
        }

      .wrapper.style3 table th {
        color: #fff;
      }

      .wrapper.style3 table thead {
        border-bottom-color: #ddd;
      }

      .wrapper.style3 table tfoot {
        border-top-color: #ddd;
      }

      .wrapper.style3 table.alt tbody tr td {
        border-color: #ddd;
      }

      .wrapper.style3 .feature {
        border-color: #ddd;
      }

        .wrapper.style3 .feature .fa {
          color: #00cdcf;
        }





/* Main */

  #main {
    padding: 4em 0 2em 0;
  }

    @media screen and (max-width: 736px) {

      #main {
        padding: 3em 0 1em 0;
      }

    }



</style>

<script>

</script>
@endsection

@section('js')
<script>

</script>
@endsection
