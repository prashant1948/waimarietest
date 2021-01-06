<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($donation->title, 47) }}</td>
    <td>{!! str_limit($donation->content,47) !!}</td>
       <td>
        <span class="badge">{{ $donation->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('donation.edit', $donation->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('donation.destroy', $donation->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
