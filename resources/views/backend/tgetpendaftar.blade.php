@foreach($pendaftar as $column)
<tr>
    <td class="text-center">{{ $loop->index+1 }}</td>
    <td>{{ $column->xs1 }}</td>
    <td>{{ $column->xs9 }}</td>
    <td>{{ $column->xs3 }}</td>
    <td>{{ $column->xs2 }}</td>
    <td>{{ $column->xn3 }}</td>
    <td>{{ $column->name }}</td>

    <td class="td-actions text-right">
        <button type="button" rel="tooltip" class="btn btn-info btn-round btn-lookup" data-toggle="modal" data-target="#lookUp"  value="{{ $column->xn1 }}">
            <i class="material-icons">visibility</i>
        </button>
        <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-toggle="modal" data-target="#remarkModal"  value="{{ $column->xn1 }}">
            <i class="material-icons">delete</i>
        </button>
    </td>
</tr>
@endforeach