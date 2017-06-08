
<section class="leftbar col-md-3">
    <div>
        <div>
            <form class="well form-horizontal">
                <fieldset style="align-content: center; padding-top: 12px;" >
                    <legend><h1 style="text-align: center;" class="small text-letterspacing">current date</h1></legend>
                    <div id="clock" style="padding-right: 12px"></div>
                </fieldset>
            </form>
        </div>
        <div>
            {{--side bar links--}}
            <ul class="nav nav-pills nav-stacked">
                <li><a class="small text-uppercase text-letterspacing" style="color: #ffffff;" href="{{route('home')}}"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li><br/>
                <li><a class="small text-uppercase text-letterspacing" style="color: #ffffff;" href="{{ route('create') }}"><i class="fa fa-file-text-o fa-fw"></i>&nbsp;Create Referral</a></li><br/>
                <li><a class="small text-uppercase text-letterspacing" style="color: #ffffff;" href="{{ route('non_referral_view') }}" ><i class="fa fa-street-view fa-fw"></i>&nbsp;View referrals</a><br/>
                <li><a class="small text-uppercase text-letterspacing" style="color: #ffffff;" href="{{route('nrp')}}"><i class="fa fa-hospital-o fa-fw"></i>&nbsp;HIS</a></li><br/>
            </ul>
        </div>
    </div>
</section>

<script>
    (function () {
        var clockElement = document.getElementById("clock");

        function  updateClock() {
            clock.innerHTML = new Date().toLocaleTimeString();
        }

        setInterval(function () {
            updateClock( clockElement );
        }, 1000);
    }());
</script>