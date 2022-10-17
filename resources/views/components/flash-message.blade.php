@if (session()->has('message'))
  <div x-data="{show:true}"x-init="setTimeout(()=>show=false,6000)" x-show="show" class="fixed top-5 rounded-2xl left-1/2 transform -translate-x-1/2 bg-sky-100 text-black px-48 py-3">
  <p>
    {{ session('message') }}
  </p>
  </div>
@endif