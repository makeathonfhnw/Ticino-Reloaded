<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            body {
                background-color: #dddddd;
            }
        </style>

        <title>ECG Abnormality Recogniser</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">ECG Abnormality Recogniser</h1>

            <form class="my-5" onsubmit="event.preventDefault(); submitForm();">
                @csrf
                <div class="form-group row">
                    <label class="col-md-3" for="ecgRecord">ECG Record (XML)</label>
                    <input type="file" class="form-control-file col-md-9" id="ecgRecord" name="ecgRecord">
                </div>
                <button type="submit" class="offset-md-3 btn btn-primary">Submit</button>
            </form>
            <span id="classification" class="mt-5 pt-5 offset-md-3 font-weight-bold"></span>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
        <script>
            function submitForm()
            {
                axios.post( '/classify-record' ).then( response => {
                    let span = document.querySelector( '#classification' );

                    if( response.data == 1 )
                    {
                        span.innerHTML = 'ECG Normal';
                    }
                    else
                    {
                        span.innerHTML = 'ECG Abnormal';
                    }
                });
            }
        </script>
    </body>
</html>
