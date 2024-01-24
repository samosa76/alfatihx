@extends('backend.layout.app')
@section('main-content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="card px-3">
                <form>
                    <div class="form-group row py-3">
                        <label for="title-news" class="col-4 col-form-label">Title</label>
                        <div class="col-12 input-group input-group-outline">
                            <input id="title-news" name="title-news" placeholder="title" type="text" required="required"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row py-3">
                        <label for="news-desc" class="col-4 col-form-label">Description</label>
                        <div class="col-12 input-group input-group-outline">
                            <input id="news-desc" name="news-desc" placeholder="desc" type="text" required="required"
                                class="form-control" maxlength="55">
                        </div>
                    </div>
                    <div class="form-group row py-3">
                        <label for="news-content" class="col-4 col-form-label">Content</label>
                        <div class="col-12 input-group input-group-outline">
                            <textarea id="news-content" name="news-content" cols="40" rows="5" required="required" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row py-3">
                        <div class="col-12">
                            <button name="submit" type="submit"
                                class="btn bg-gradient-success w-100 my-4 mb-2">Upload</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection

@push('custom-scripts')
@endpush
</main>

<!--   Core JS Files   -->
