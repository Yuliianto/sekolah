@foreach($ls_content as $content)
<tr>
    <td>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" {{ $content->xn1 === 1 ? "checked" :"" }}>
                <span class="form-check-sign">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </td>
    <td>{{ $content->xs1 }}</td>
    <td class="td-actions text-right">
        <a rel="tooltip" href="/edit_fm/{{ $content->id }}" class="btn btn-primary btn-link btn-sm"  >
            <i class="material-icons">edit</i>
        </a>

        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" onclick="del_content({{ $content->id }})">
            <i class="material-icons">close</i>
        </button>
    </td>
</tr>
@endforeach