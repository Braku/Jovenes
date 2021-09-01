<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <header>
      <div class="container" style="margin-bottom: 2%;">
        <?php include_once 'includes/nav.php' ?>
      </div>
    </header>
    <div class="container">
      <section class="card">
        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#scrollspyHeading1">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading2">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading3">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#scrollspyHeading4" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="card-body" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0">
          <h4 id="scrollspyHeading1">First heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading2">Second heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading3">Third heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading4">Fourth heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading5">Fifth heading</h4>
          <p>...</p>
        </div>
      </section>
    </div>
  </body>
</html>
