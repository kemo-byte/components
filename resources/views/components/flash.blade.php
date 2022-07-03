@props([
    'type'=>'success',
    'colors'=>[
        'success'=>'bg-success',
        'danger'=>'bg-danger',
        'warning'=>'bg-warning'
    ]
])
<section {{ $attributes->merge(['class'=>"
{ $colors[$type] }
algin-between  p-3 text-center text-white mb-2"]) }} >
    <div class="d-flex justify-content-between">
        <p>
            {{ $slot }}
        </p>

        <button class="btn ">&times</button>
    
    </div>
</section>
