<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($communitygarden->title, 47) }}</td>
    <td>{!! str_limit($communitygarden->content,47) !!}</td>
    <td>
        <span class="badge">{{ $communitygarden->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('communitygarden.edit', $communitygarden->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('communitygarden.destroy', $communitygarden->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
