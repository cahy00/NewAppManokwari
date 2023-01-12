@extends('admin-layouts.template')

@push('style')
<script src="https://cdn.tiny.cloud/1/3g1aj5c24xhtvj7gwhaf98xyvnsfpbc1yb12aqsobhszvrz1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#myeditablediv',
    inline: true
  });
  </script>
@endpush

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Table Postingan</h1>
	<form method="post">
		<textarea id="myeditorinstance">Hello, World!</textarea>
	</form>
	
</div>
@endsection

@push('script')
<script src="https://cdn.tiny.cloud/1/3g1aj5c24xhtvj7gwhaf98xyvnsfpbc1yb12aqsobhszvrz1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists image link',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image media'
  });
</script>
@endpush