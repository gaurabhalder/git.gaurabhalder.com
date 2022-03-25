@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.blog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.blogs.update", [$blog->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="blog_image">{{ trans('cruds.blog.fields.blog_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('blog_image') ? 'is-invalid' : '' }}" id="blog_image-dropzone">
                </div>
                @if($errors->has('blog_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blog_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.blog_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="blog_title">{{ trans('cruds.blog.fields.blog_title') }}</label>
                <input class="form-control {{ $errors->has('blog_title') ? 'is-invalid' : '' }}" type="text" name="blog_title" id="blog_title" value="{{ old('blog_title', $blog->blog_title) }}" required>
                @if($errors->has('blog_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blog_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.blog_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blog_details">{{ trans('cruds.blog.fields.blog_details') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('blog_details') ? 'is-invalid' : '' }}" name="blog_details" id="blog_details">{!! old('blog_details', $blog->blog_details) !!}</textarea>
                @if($errors->has('blog_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blog_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.blog_details_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedBlogImageMap = {}
Dropzone.options.blogImageDropzone = {
    url: '{{ route('admin.blogs.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="blog_image[]" value="' + response.name + '">')
      uploadedBlogImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedBlogImageMap[file.name]
      }
      $('form').find('input[name="blog_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($blog) && $blog->blog_image)
      var files = {!! json_encode($blog->blog_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="blog_image[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.blogs.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $blog->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection