@props(['ingredientsCsv'])
<div class="flex flex-col">
<h1 class="text-center text-sky-400 p-1">INGREDIENTS</h1>
@php
  $ingredients=explode(',',$ingredientsCsv)
@endphp
<ul class="flex flex-col list-disc ">
  @foreach ($ingredients as $ingredient )

    <li>
      <a href="/?ingredient={{ $ingredient}}">{{ $ingredient }}</a>
    </li>
  @endforeach

</ul>
</div>
