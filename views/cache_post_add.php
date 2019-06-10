<!DOCTYPE html>
<html>
  <head>
    <title><?php echo(htmlentities($title)); ?></title>
    <link rel="shortcut icon" href="https://cdn.glitch.com/7635e9c3-2015-4ec8-967a-16ca37cc9e55%2Ffavicon.ico" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/static/style.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="/static/custom.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="https://cdn.glitch.com/7635e9c3-2015-4ec8-967a-16ca37cc9e55%2Ftodo.svg" width="30" height="30" class="d-inline-block align-top" alt="">To Do List</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://glitch.com/edit/#!/remix/<?php echo(htmlentities(getenv('PROJECT_DOMAIN'))); ?>">Remix</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" onclick="post('/reset');" style="cursor:pointer">Reset DB</a>
          </li>
        </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-1">
          <h1 class="display-4"><?php echo(htmlentities($title)); ?></h1>
          <p class="lead">A simple blogging engine.</p>
          <p><em>Author: <a href="https://www.franklin.edu/about-us/faculty-staff/faculty-profiles/whittakt">Todd Whittaker</a></em></p>
          <hr>
        </div>
      </div>

<div class="row">
  <div class="col-lg-12 offset-1">

    <form action="/post/add" method="post">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" min="1" id="title" name="title" class="form-control" placeholder="Enter title" value="<?php echo(htmlentities($post['title'])); ?>" />
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="12"><?php echo(htmlentities($post['content'])); ?></textarea>
      </div>
      <div class="form-group">
        <label for="tags">Tags</label>
        <input type="text" min="1" id="description" name="description" class="form-control" placeholder="Enter tags" value="<?php echo(htmlentities($post['tags'])); ?>" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary" onclick="return get('/index')">Cancel</button>
      </div>
    </form>
  </div>
</div>

    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">WEBD 236 examples copyright &copy; 2019 <a href="https://www.franklin.edu/">Franklin University</a>.</span>
      </div>
    </footer>
  </body>
</html>