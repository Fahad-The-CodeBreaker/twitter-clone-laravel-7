<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="mb-2">
        <div class="flex items-center text-sm">
            <img src="https://i.pravatar.cc/40?u={{$user->email}}"
                 class="rounded-full mr-2"
                 alt="avatar">
            {{$user->name}}
        </div>
    </li>
    @endforeach

</ul>
