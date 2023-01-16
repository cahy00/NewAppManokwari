@extends('admin-layouts.template')

@push('style')
<script src="https://cdn.tiny.cloud/1/3g1aj5c24xhtvj7gwhaf98xyvnsfpbc1yb12aqsobhszvrz1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#myeditablediv',
    inline: true
  });
  </script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/decoupled-document/ckeditor.js"></script>

@endpush

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Table Postingan</h1>
	<form method="post">
		{{-- <textarea id="myeditorinstance">Hello, World!</textarea> --}}
		<div id="editor">
			<p>This is the initial editor content.</p>
		</div>
	</form>
	
</div>
@endsection

@push('script')
{{-- <script src="https://cdn.tiny.cloud/1/3g1aj5c24xhtvj7gwhaf98xyvnsfpbc1yb12aqsobhszvrz1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists image link',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image media'
  });
</script> --}}

{{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script> --}}
{{-- <script>
	ClassicEditor
			.create( document.querySelector( '#editor' ) )
			.catch( error => {
					console.error( error );
			} );
</script> --}}
{{-- <script>
	DecoupledEditor
			.create( document.querySelector( '#editor' ) )
			.then( editor => {
					const toolbarContainer = document.querySelector( '#toolbar-container' );

					toolbarContainer.appendChild( editor.ui.view.toolbar.element );
			} )
			.catch( error => {
					console.error( error );
			} );
</script> --}}

@endpush