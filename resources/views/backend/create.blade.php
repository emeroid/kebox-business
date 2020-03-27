@extends('backend.layout.main')
@section('title', 'Create New | KE Box Digital')
@section('css')
 <link rel="stylesheet" href="backend/assets/vendor/summernote-themes/unify-lite.css">

@endsection

@section('content')
  <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">
          <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28">Create Landing page</h1>
            <div class="col-lg-7">
            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
              <!-- heading -->
              <div class="form-group mb-0">
                <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Heading Image</h4>
                <input class="js-file-attachment" name="fileAttachment2[]" type="file">
              </div>
              <!-- end heading -->
            </div>

            <hr class="g-brd-gray-light-v7 g-mx-minus-20">
            
            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
              <!-- Poster 1 -->
              <div class="form-group mb-0">
                <h4 class="h6 g-font-weight-600 g-color-black g-mb-20"> Poster Image</h4>
                <input class="js-file-attachment" name="fileAttachment2[]" type="file">
              </div>
              <!-- End Poster 1 -->
            </div>

            <hr class="g-brd-gray-light-v7 g-mx-minus-20">
            
            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
              <h3 class="d-flex align-self-center g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Short Description</h3>

              <div class="js-text-editor" data-height="156" data-placeholder="start typing here"></div>
            </div>

            <hr class="g-brd-gray-light-v7 g-mx-minus-20">
            
            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
              <!-- End Poster 2 -->
              <div class="form-group mb-0">
                <h4 class="h6 g-font-weight-600 g-color-black g-mb-20"> Poster Image</h4>
                <input class="js-file-attachment" name="fileAttachment2[]" type="file">
              </div>
              <!-- End End Poster 2 -->
            </div>

             <hr class="g-brd-gray-light-v7 g-mx-minus-20">
            
            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
              <h3 class="d-flex align-self-center g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Short Description</h3>

              <div class="js-text-editor" data-height="156" data-placeholder="start typing here"></div>
            </div>
          </div>

        </div>


          @endsection
      
    @section('js')
      <!-- JS Plugins Init. -->
  <script src="../assets/vendor/appear.js"></script>
  <script src="backend/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="backend/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="backend/assets/vendor/bloodhound-js/js/bloodhound.min.js"></script>
  <script src="backend/assets/vendor/bloodhound-js/js/typeahead.jquery.min.js"></script>
  <script src="backend/assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
  <script src="backend/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

    <script src="backend/assets/js/components/hs.text-editor.js"></script>
    @endsection