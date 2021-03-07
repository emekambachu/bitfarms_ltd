
<img src="{{ asset('bitfarms_logo.png') }}" width="100">

<h3>Hello {{ $name }}</h3>

<p>
    @if($is_approved)
    Your Crypto Mining of ${{ $amount }} has been Approved.<br>
    @else
    Your Crypto Mining of ${{ $amount }} has been Cancelled.
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>support@bit-farms.ltd</strong>.</p>
