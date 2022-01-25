<div class="emailBody">
    <h2>Hello {{ $data[0]['name'] }},</h2>

    <p>We got your enquire request regarding our
        <a style="color: #c309d2" target="_blank" href="{{ $data['propertyURL'] }}">{{ $data['propertyURL'] }}</a> property.</p>
    <p>We'll get back to you soon!</p>

    <p>Thanks <br><small>This is an automated email. You don't need to reply this email</small></p>



    <div class="demoContent">
        <h3 style="color: #555">Here is a copy of what we've got from you</h3>
        <p><strong>Name: </strong>{{ $data[0]['name'] }}</p>
        <p><strong>Phone: </strong>{{ $data[0]['phone'] }}</p>
        <p><strong>Email: </strong>{{ $data[0]['email'] }}</p>
        <p><strong>Message: </strong>{{ $data[0]['message'] }}</p>
    </div>

</div>

<style>
    .emailBody {
        background: #ebf1f6;
        background: -moz-linear-gradient(-45deg, #ebf1f6 0%, #abd3ee 39%, #89c3eb 68%, #d5ebfb 100%);
        background: -webkit-linear-gradient(-45deg, #ebf1f6 0%, #abd3ee 39%, #89c3eb 68%, #d5ebfb 100%);
        background: linear-gradient(135deg, #ebf1f6 0%, #abd3ee 39%, #89c3eb 68%, #d5ebfb 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ebf1f6', endColorstr='#d5ebfb', GradientType=1);
        padding: 5px 15px;
        padding-bottom: 50px
    }

    .demoContent {
        background: #ffffff7a;
        padding: 5px 15px;
        display: inline-block;
        border-radius: 15px;
        max-width: 50%
    }
</style>
