<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($scholarshipdescription->title, 30) }}</td>
    <td>{!! str_limit($scholarshipdescription->meta_description,25) !!}</td>
    <td>{!! str_limit($scholarshipdescription->content,40) !!}</td>
    <td>
        <span class="badge">{{ $scholarshipdescription->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('scholarshipdescription.edit', $scholarshipdescription->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('scholarshipdescription.destroy', $scholarshipdescription->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
