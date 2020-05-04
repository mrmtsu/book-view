@csrf
<div class="md-form">
  <label>本のタイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label>レビュー本文</label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('title') }}</textarea>
</div>
<div class="form-group">
  <label for="file1">本のサムネイル</label>
  <input type="file" id="file1" name='image' class="form-control-file">
</div>