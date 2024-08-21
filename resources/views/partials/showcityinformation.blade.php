 
     <div class="border border-success rounded p-3">
         
        @if($cityInformation && $cityInformation->count())
            <div class="row">
                @foreach($cityInformation as $info)
                   
                                <h5 class="card-title pb-2">{{__('messages.city_information')}}</h5>
                                <p><strong>{{__('messages.area')}}:</strong> {{ $info->area }}</p>
                                <p><strong>{{__('messages.population')}}:</strong> {{ $info->population }}</p>
                                <p><strong>{{__('messages.male')}}:</strong> {{ $info->male }}</p>
                                <p><strong>{{__('messages.female')}}:</strong> {{ $info->female }}</p>
                                <p><strong>{{__('messages.language')}}:</strong> {{ $info->language }}</p>
                                <p><strong>{{__('messages.villages')}}:</strong> {{ $info->villages }}</p>
                            
                @endforeach
            </div>
        @else
            <div class="alert alert-info" role="alert">
                No city information available.
            </div>
        @endif
     </div>
 
