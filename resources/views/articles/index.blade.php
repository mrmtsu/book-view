@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
<!-- Card -->
<div class="container" style="width:500px; height:500px;">
  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Social buttons -->
  <div class="card-share">

    <div class="social-reveal">

      <!-- Facebook -->
      <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="fab fa-facebook-f"></i></a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i class="fab fa-twitter"></i></a>
      <!-- Google -->
      <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i class="fab fa-google-plus-g"></i></a>

    </div>

    <!-- Button action -->
    <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i class="fas fa-share-alt"></i></a>

  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Card title</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <button class="btn btn-indigo btn-rounded btn-md">Read more</button>

  </div>
</div>
<!-- Card -->
<div class="container" style="width:500px; height:500px;">
    @foreach($articles as $article) {{--この行を追加--}} 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $article->user->name }} {{--この行を変更--}}
            </div> 
            <div class="font-weight-lighter">
              {{ $article->created_at->format('Y/m/d H:i') }} {{--この行を変更--}}
            </div>
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            {{ $article->title }} {{--この行を変更--}}
          </h3>
          <hr>
          <div class="card-text">
            {!! nl2br(e( $article->body )) !!} {{--この行を変更--}}
          </div>
        </div>
      </div>
    @endforeach {{--この行を追加--}}
  </div>

<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

    <div class="carousel-item active">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>


<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

    <div class="carousel-item active">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection