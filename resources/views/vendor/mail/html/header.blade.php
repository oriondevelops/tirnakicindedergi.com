<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'tırnak içinde dergi')
<img src="{{asset('media/logo.webp')}}" class="logo" alt="tırnak içinde dergi">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
