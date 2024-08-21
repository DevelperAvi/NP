    <h5 class="text-danger">{{__('messages.important_notification')}}</h5>
<div class="marquee-container">
    <ul class="marquee">
        @foreach($topNotifications as $notification)
            <li>
                <a href="{{ $notification->notifcation_link }}" target="_blank">{{ $notification->notification_description }}</a>
            </li>
        @endforeach
    </ul>
</div>


<style>
    .marquee-container {
        height: 100px; /* Set a fixed height for the marquee container */
        overflow: hidden;
        position: relative;
    }
    
    .marquee {
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: absolute;
        top: 0;
        animation: marquee 20s linear infinite; /* Adjust the animation duration as needed */
    }
    
    .marquee li {
        margin-bottom: 5px; /* Adjust spacing between items */
    }
    
    .marquee li a {
        display: block;
        text-decoration: none;
        color: #333;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f0f0f0;
        transition: background-color 0.3s ease;
    }
    
    .marquee li a:hover {
        background-color: #e0e0e0;
    }
    
    @keyframes marquee {
        0% { top: 0; }
        100% { top: -100%; }
    }
    
    @media (max-width: 768px) {
        .marquee-container {
            height: auto;
        }
        
        .marquee {
            position: relative;
            animation: none;
        }
    }
</style>
