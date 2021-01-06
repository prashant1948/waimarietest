<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($about->title, 47) }}</td>
    <td>{!! str_limit($about->content,47) !!}</td>
    <td>{!! str_limit($about->experience,47) !!}</td>
    <td>{!! str_limit($about->volunteer,47) !!}</td>
    <td>{!! str_limit($about->work,47) !!}</td>
    <td>
        <span class="badge">{{ $about->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('about.edit', $about->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('about.destroy', $about->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
