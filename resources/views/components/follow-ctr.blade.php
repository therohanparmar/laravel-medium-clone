@props(['user'])

<div {{ $attributes }} x-data="{
    following: {{ $user->isFollowedBy(auth()->user()) ? 'true' : 'false' }},
    followersCount: {{ $user->followers()->count() }},
    follow() {
        let shouldProceed = true;

        if (this.following) {
            shouldProceed = confirm('Are you sure you want to unfollow this user?');
        }

        if (shouldProceed) {
            this.following = !this.following;
            axios.post('/follow/{{ $user->id }}')
                .then(res => {
                    this.followersCount = res.data.followersCount;
                })
                .catch(err => {
                    console.log(err);
                });
        }
    }
}" class="w-[320px] border-l px-8">
 {{ $slot }}
</div>
