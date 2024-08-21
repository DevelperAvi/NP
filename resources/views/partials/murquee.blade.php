<!-- resources/views/partial/marquee.blade.php -->

<div class="onoffswitch3">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked="">
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                @foreach ($murcynotifications as $notification)
                    <marquee id="notice" behavior="scroll" direction="left" scrolldelay="5" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                        <font size="2px" color="#3572ca"><strong>Description:</strong> {{ $notification->description }}</font>
                    </marquee>
                @endforeach
                <span class="onoffswitch3-switch"><i class="bi bi-volume-up-fill"></i></span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch"></span></span>
        </span>
    </label>
</div>
