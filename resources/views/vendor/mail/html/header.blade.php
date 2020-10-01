<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{url('logo.png')}}" style="height: 5em;" class="logo" alt="Rental Exotics Beasts">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
