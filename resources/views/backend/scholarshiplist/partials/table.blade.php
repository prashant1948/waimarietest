<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($scholarshiplist->title, 47) }}</td>
    <td>{{ Str::limit($scholarshiplist->scholarship_type, 47) }}</td>
    <td>
        <span class="badge">{{ $scholarshiplist->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('scholarshiplist.edit', $scholarshiplist->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('scholarshiplist.destroy', $scholarshiplist->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
