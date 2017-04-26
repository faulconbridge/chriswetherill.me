<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <title>Chris Wetherill</title>
  <meta charset="utf-8">
  <meta name="author" content="Chris Wetherill">
  <meta name="description" content="Trivia, nonsense, and other goings on by Chris Wetherill.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <script src="js/alternative_facts.js" charset="utf-8"></script>
  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>

  <style>
  p, li {
    font-size: 1.75rem;
    line-height: 1.5;
  }

  .normal {
    font-size: 14px;
    line-height: 1.428;
  }

  @media(max-width: 768px) {
    .resizeable {
      font-size: 16px;
    }
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button
          type="button"
          class="navbar-toggle collapsed"
          data-toggle="collapse"
          data-target="#navbar-collapse"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand resizeable">Chris <span id="bespoke-fact"></span></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./">Home</a></li>
          <li><a href="./posts">Posts</a></li>
          <li><a href="./cv">Resume</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
