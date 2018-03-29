<section class="activity_short_details">
    <p class="small_title">What we’ll do</p>
    <p>{{ $experience->description }}</p>
</section>
<hr>
<section class="host_input_short_details">
    <p class="small_title">What I’ll provide</p>
    <p>{{ $experience->what_we_provide }}</p>
</section>
<hr>
<section class="restriction_text">
    <p class="small_title">Who can come</p>
    <p>{{ $experience->who_can_come }}</p>
</section>
<hr>
<section class="restriction_text">
    <p class="small_title">Where we’ll be</p>
    <p>{{ $experience->where_we_be }}</p>


    @include('experience.elements.experience_map')
</section>