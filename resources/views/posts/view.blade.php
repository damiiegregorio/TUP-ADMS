 @if(count($files)>0)
	@foreach($files as $file)

		 @if($file->file_type == 'pdf')
     		<iframe src="/storage/uploads/{{ $file->name }}" frameborder="0" style="width:100%; height:97%;"></iframe>
   		{{-- @elseif($file->file_type == 'docx')
     		<iframe src="https://view.officeapps.live.com/op/view.aspx?src={{urlendoe(adms.dev/storage/uploads/$file->name)}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
  --}}
     	@endif
	@endforeach

@endif
