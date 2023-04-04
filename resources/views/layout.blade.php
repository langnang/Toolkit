<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Toolkit</title>
  <link rel="stylesheet" href="/public/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/vendor/fontawesome/css/all.min.css">
  <style>
    a,
    a:hover,
    a:focus,
    a:active,
    a:visited {
      text-decoration: none;
    }

    a * {
      cursor: pointer;
    }

    li+li::before {
      border-left: 1px solid black;
    }
  </style>
</head>

<body>
  @section('header')
    <header class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Toolkit</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" style="display:none;">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" style="display:none;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa-brands fa-github"></i> GitHub</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </header>
  @show
  <main>
    <div class="container">
      @section('content')
        @isset($contents)
          @foreach ($contents as $panel)
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">{{ $panel['name'] }}</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  @foreach ($panel['contents'] as $content)
                    <div class="col-sm-4 col-md-3" style="padding: 0 5px;">
                      <a class="thumbnail" style="margin-bottom: 10px;"
                        @isset($content['slug'])
                       href="/{{ str_replace('_', '/', $content['slug']) }}"
                    @endisset>
                        <div class="caption">
                          <h4>{{ $content['title'] }}</h4>
                        </div>
                      </a>
                    </div>
                  @endforeach

                </div>
              </div>
            </div>
          @endforeach
        @endisset
      @show
      @isset($links)
        <div class="panel panel-default">
          <div class="panel-heading">友情链接</div>
          <div class="panel-body">
            <ul class="list-inline">
              @foreach ($links as $link)
                <li> <a target="_blank" href="{{ $link['url'] }}">{{ $link['title'] }}</a> </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    @endisset
    @isset($refs)
      <div class="panel panel-default">
        <div class="panel-heading">参考文献</div>
        <div class="panel-body">
          <ul class="list-inline">
            @foreach ($refs as $link)
              <li> <a target="_blank" href="{{ $link['url'] }}">{{ $link['title'] }}</a> </li>
            @endforeach
          </ul>
        </div>
      </div>
      </div>
    @endisset
  </main>
  @section('footer')
    <footer>

    </footer>
  @show
</body>

</html>
