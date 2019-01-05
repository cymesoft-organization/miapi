<html>
<body>
<table>
<?php// print_r($types);die; ?>

@foreach($types as $type)

<tr>
<td>{{ $type->std_name }}</td>
</tr>
@endforeach 
</table>
</body>
</html>
