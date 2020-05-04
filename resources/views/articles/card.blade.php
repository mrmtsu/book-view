<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <i class="fas fa-user-circle fa-3x mr-1"></i>
    <div>
      <div class="font-weight-bold">
        {{ $article->user->name }}
      </div> 
      <div class="font-weight-lighter">
        
      </div>
    </div>
    @if( Auth::id() === $article->user_id )
      <!-- dropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button type="button" class="btn btn-link text-muted m-0 p-2">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
              <i class="fas fa-pen mr-1"></i>記事を編集する
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
              <i class="fas fa-trash-alt mr-1"></i>記事を削除する
            </a>
          </div>
        </div>
      </div>
      <!-- dropdown -->

      <!-- modal -->
      <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $article->title }}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal -->
    @endif
  </div>
  <div class="card-body pt-0 pb-2">
    <div class='image-wrapper'><img class='book-image' src="{{ asset('storage/images/'.$article->image) }}" style="width:400px; height:400px;"></div>
    <h3 class="h4 card-title">
      <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
        {{ $article->title }}
      </a>
    </h3>
    <hr>
    <div class="card-text">
      {{ $article->body }}
    </div>
  </div>
</div>









<!-- Card -->
<div class="container" style="width:500px; height:500px;">
  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="{{ asset('storage/images/'.$article->image) }}" alt="Card image cap">
    <a href="{{ route('articles.show', ['article' => $article]) }}">
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
    <h4 class="card-title">{{ $article->title }}</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">{{ $article->body }}</p>
    <button class="btn btn-indigo btn-rounded btn-md">
      <a href="{{ route('articles.show', ['article' => $article]) }}" style="color:white;">Read more</a>
    </button>

  </div>
</div>
<!-- Card -->