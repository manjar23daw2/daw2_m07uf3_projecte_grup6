<div>
    <div class="flex flex-row justify-between">
        <div>
            <h5>{{ $user->id }}</h5>
        </div>
        <div>
            <h5>{{ $user->email }}</h5>
        </div>
        <div>
            <h5>{{ $user->name }}</h5>
        </div>
        <div>
            <h5>{{ $user->surname }}</h5>
        </div>
        <div>
            <p>{{ $user->type }}</p>
        </div>
        <div>
            <p>{{ $user->last_login}}</p>
        </div>
        <div>
            <p>{{ $user->last_logout}}</p>
        </div>
        <div>
            <p>{{ $user->created_at}}</p>
        </div>
        <div>
            <p>{{ $user->updated_at}}</p>
        </div>
    </div>
</div>