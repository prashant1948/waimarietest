<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($donationform->title, 47) }}</td>
    <td>{!! str_limit($donationform->content,47) !!}</td>
    <td>
        <span class="badge">{{ $donationform->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('donationform.edit', $donationform->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('donationform.destroy', $donationform->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
