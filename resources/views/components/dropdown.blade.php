@props(['trigger'])

<div x-data="{ show: false}">

  {{--  Trigger--}}

  <div @click="show = !show" @click.away="show=false">
    {{ $trigger }}
  </div>

  {{--  Links--}}
  <div x-show="show" class="max-h-52 overflow-auto py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50"
       style="display:none">

    {{ $slot }}

  </div>
</div>
