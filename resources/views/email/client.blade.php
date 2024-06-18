<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meeting with client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header h4 pt-5 pb-2">
                    <span class="">{{env('APP_NAME')}}</span>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>
                            Dear {{$data['full_name']}},<br>
                            <br>
                            Thank you for providing your details and project information. We have received your submission and are excited to review it.
                        </p>
                        <div class="h5">Client Information:</div>
                        <hr>
                        <div><b>Full Name:</b>&nbsp;{{$data['full_name']}}</div>
                        <div><b>Email:</b>&nbsp;{{$data['mail']}}</div>
                        <div><b>Country:</b>&nbsp;{{$data['country']}}</div>
                        <div><b>Phone Number:</b>&nbsp;{{$data['phone_number']}}</div>
                        <div><b>Company Name:</b>&nbsp;{{$data['company_name']}}</div>
                        <div><b>Website URL:</b>&nbsp;{{$data['website_url']}}</div>
                        <br>
                        <br>
                        <div class="h5">Project Information:</div>
                        <hr>
                        <div><b>Project Brief:</b>&nbsp;{{$data['project_brief']}}</div>
                        @if (!empty($data['filename']))
                        <div><b>Attachment:</b>&nbsp;<a href="{{$data['file_path']}}" target="_blank">File</a></div>
                        @endif
                        <div><b>Budget:</b>&nbsp;{{$data['budget']}}</div>
                        <br>
                        <br>
                        <div class="h5">Meeting Schedule:</div>
                        <hr>
                        <div><b>Time Zone:</b>&nbsp;{{$data['time_zone']}}</div>
                        <div><b>Date:</b>&nbsp;{{$data['date']}}</div>
                        <div><b>Platform:</b>&nbsp;{{$data['meeting']}}</div>
                        <hr>
                        <p>
                            Our team will review the details you’ve provided and get back to you promptly. If you have any immediate questions or additional information to share, feel free to reply to this email.
                            <br><br>
                            We look forward to discussing your project and how we can assist you!
                            <br><br>
                            Best regards,<br>
                            {{env('APP_NAME')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
