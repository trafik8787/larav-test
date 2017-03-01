<div class="form-group">
    <label for="inputName1">Name</label>
    <input type="text" name="title" class="form-control" id="inputName1" value="{{isset($article->title) ? $article->title : ''}}" placeholder="Enter name">
</div>
<div class="form-group">
    <label for="inputDesc1"></label>
    <textarea class="form-control" name="description" rows="5" id="inputDesc1">{{isset($article->description) ? $article->description : ''}}</textarea>
</div>
<div class="form-group">
    <input type="file" name="image" id="">
</div>
<button type="submit" class="btn btn-default">{{$nameSubmit}}</button>