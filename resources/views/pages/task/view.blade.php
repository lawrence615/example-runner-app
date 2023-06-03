@extends('layouts.app')
@section('title', 'Task Items')

@section('content')
<h1>{{ $task->title }}</h1>
<p class="fs-5 col-md-8">These items belongs to this task. They can be reordered according to priority.</p>

<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
    <div class="col-md-6">
        <h2>Items</h2>
        <ul id="sortable" class="pl-0 menu_list js-sortable-group js-drop-target bg-light p-3">
            @foreach ($task->items as $item)
            <li id="{{ $item->id}}" class="list-group-item d-flex align-items-center" style="cursor: pointer;">
                <div class="p-1 course d-block">
                    <i class="fas fa-grip-vertical"></i> {{ $item->description }}
                </div>
            </li>

            <!-- <li id="{{ $item->id}}" class="ui-state-default" style="list-style-type: none;cursor: pointer;">
                <div id="{{ 'r_'.$item->id}}" class="p-2 alert alert-secondary fade show alert_box course d-block" optiondata="contact2">
                    <i class="fas fa-grip-vertical"></i> {{ $item->description }}
                </div>
            </li> -->
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>Guides</h2>
        <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
        <ul class="icon-list">
            <li><a href="https://getbootstrap.com/docs/5.0/examples/starter-template/">Starter template</a></li>
            <li><a href="https://jqueryui.com/sortable/">Sortable</a></li>
            <li><a href="https://stackoverflow.com/a/6726940/2365006">Keep track of the positions of all elements in a jQuery sortable</a></li>
            <li><a href="https://bootstrapfriendly.com/blog/how-to-create-draggable-droppable-and-sortable-menu-using-jquery-ui">How to create draggable, droppable and sortable menu using jQuery UI</a></li>
            <li><a href="https://www.itsolutionstuff.com/post/laravel-8-ajax-post-request-exampleexample.html">Laravel 8 Ajax Post Request Example</a></li>
            <li><a href="https://dev.to/dcblog/laravel-update-factory-after-creation-3j38">Laravel update factory after creation</a></li>
            <li><a href="https://dev.to/dalelantowork/laravel-8-eloquent-relationships-tutorial-one-to-many-relationship-58j2">Laravel 8- Eloquent Relationships Tutorial - One to Many Relationship</a></li>
            <li><a href="https://laravel.com/docs/8.x/eloquent-relationships#querying-relations">Querying Relations</a></li>
            <li><a href="https://fontawesome.com/v5/docs/web/setup/host-font-awesome-yourself#using-web-fonts-with-css">Using Web Fonts with CSS</a></li>
            <li><a href="https://stackoverflow.com/a/57801395/2365006">CSS class for pointer cursor</a></li>
        </ul>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>

<script type="text/javascript">
    $(function() {
        $("#sortable").sortable({
            stop: function(event, ui) {

                let newOrder = $.map($(this).find('li'), function(el) {
                    return {
                        id: parseInt(el.id),
                        position: $(el).index()
                    }
                })

                console.log('newOrder', newOrder)

                $.ajax({
                    type: 'POST',
                    url: "{{ route('items.update.position') }}",
                    data: JSON.stringify(newOrder),
                    beforeSend: function(xhr, type) {
                        if (!type.crossDomain) {
                            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                        }
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });

            }
        });
    });
</script>

@endsection
