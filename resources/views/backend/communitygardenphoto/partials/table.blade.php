<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($communitygardenphoto->title, 47) }}</td>
    <td>
        <span class="badge">{{ $communitygardenphoto->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('communitygardenphoto.edit', $communitygardenphoto->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('communitygardenphoto.destroy', $communitygardenphoto->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
