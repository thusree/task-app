@extends('layouts.app')

@section('content')
{{-- <style>
    .card {
  width: 350px;
  padding: 10px;
  border-radius: 20px;
  background: #fff;
  border: none;
  height: 350px;
  position: relative;
}

.container {
  height: 100vh;
}

body {
  background: #eee;
}

.mobile-text {
  color: #989696b8;
  font-size: 15px;
}

.form-control {
  margin-right: 12px;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #ff8880;
  outline: 0;
  box-shadow: none;
}

.cursor {
  cursor: pointer;
}
</style> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            <section class="vh-100" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="d-flex justify-content-center align-items-center container">
                            <form action="{{ route('send.verified') }}" method="POST">
                                @csrf
                                <div class="card py-5 px-3">
                                    <h5 class="m-0">Email verification</h5><span class="mobile-text">Enter the code we just send on your mobile phone <b class="text-danger">+91 {{$user->number}}</b></span>
                                    <div class="d-flex flex-row mt-5"><input type="number" class="form-control" name="otp_verified" autofocus="" required></div>
                                    <button class="font-weight-bold text-danger cursor">Verify</button></div>
                                </div>
                            </form>
                            <form action="{{ route('send.resend') }}" method="POST">
                                @csrf
                                {{-- <div id="timer">00:00</div> --}}
                                 <div class="text-center mt-5"><span class="d-block mobile-text">Don't receive the code?</span><button id="resend-btn" class="font-weight-bold text-danger cursor" disabled>Resend</button></div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>
@endsection

{{-- <script>

    setTimeout(() => {
        var timerDuration = 20;
        var timerInterval;
        function startTimer() {
            var timer = timerDuration;
            timerInterval = setInterval(function() {
                var minutes = Math.floor(timer / 60);
                var seconds = timer % 60;
                var timeString = ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
                document.querySelector('#timer').text = timeString ;
                timer--;

                if (timer < 0) {
                    clearInterval(timerInterval);
                    document.querySelector('#resend-btn').disabled  = false;
                }
            }, 1000);
        }

        document.querySelector('#resend-btn').addEventListener('click',() => {
            document.querySelector('#resend-btn').disabled =  true;
            startTimer();
        });
        startTimer();
    }, 1000);
</script> --}}
