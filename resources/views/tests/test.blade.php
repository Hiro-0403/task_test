test

@foreach($values as $value)
<!-- 複数形と単数形が一般的 -->
{{$value->id}}<br>
{{$value->text}}<br>
@endforeach