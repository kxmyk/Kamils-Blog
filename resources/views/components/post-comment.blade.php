@props(['comment'])

<article {{ $attributes->class(['flex bg-gray-100 p-6 border border-gray-200 rounded-xl mb-4']) }}>
  {{--user avatar--}}
  <div class="flex-shrink-0">
    <img src="https://i.pravatar.cc/100?id={{ $comment->id }}" alt="user avatar" class="rounded"/>
  </div>
  {{--user name and time posted--}}
  <div class="ml-8">
    <header class="mb-4">
      <h3 class="font-bold text-xl">{{ $comment->author->username }}</h3>
      <p class="text-xs my-1">Posted
        <time>{{ $comment->created_at }}</time>
      </p>
    </header>
    {{--user comment--}}
    <p> {{ $comment->body }} </p>
  </div>
</article>