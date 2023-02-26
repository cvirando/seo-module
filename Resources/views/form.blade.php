@if(Schema::hasTable('seos'))
    <hr class="mt-5">
    <div class="row py-3 border rounded shadow-sm">
        <div class="col-md-12">
            <h4>SEO</h4>
            <h5 class="text-muted">You can add SEO values to your item here.</h5>
        </div>
        <div class="col-md-12 mt-4">
            <label for="seo_name">SEO Name</label>
            @if(isset($seo))
            <input type="text" name="seo_name" id="seo_name" value="{{$seo->name}}" class="form-control">
            @else
            <input type="text" name="seo_name" id="seo_name" class="form-control">
            @endif
        </div>
        <div class="col-md-6 mt-4">
            <label for="seo_tags">SEO Tags <small>(separate with comma)</small></label>
            <input type="text" name="seo_tags" id="seo_tags" class="form-control">
        </div>
        <div class="col-md-6 mt-4">
            <label for="seo_photo">SEO Photo</label>
            <input type="file" name="seo_photo" id="seo_photo" class="form-control">
        </div>
        <div class="col-md-12 mt-4">
            <label for="seo_description">SEO Description</label>
            <textarea name="seo_description" id="seo_description" class="form-control" cols="15" rows="5"></textarea>
        </div>
    </div>
@endif
