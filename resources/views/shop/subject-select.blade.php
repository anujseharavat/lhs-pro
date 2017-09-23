<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jquery multiple select with checkboxes using bootstrap-multiselect.js</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="/user/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="/user/bootstrap-multiselect.css">
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">--}}
</head>
<body>

<div class="container">

    <strong>Select Language:</strong>
    <form method="post" id="framework_form">
        <div class="form-group">
            <select id="framework" name="framework" multiple="multiple" class="form-control">
                <option value="php">Select Framework</option>
                <option value="javascript">JavaScript</option>
                <option value="java">Java</option>
                <option value="sql">SQL</option>
                <option value="jquery">Jquery</option>
                <option value=".net">.Net</option>
            </select>
        </div>
        <div class="form-group">
            {{ csrf_field() }}
            <input type="submit" name="submit" value = "Submit" class="btn btn-info"/>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#framework').multiselect({
            nonSelectedText: "Select Framework",
            enableFiltering:true,
            enableCaseInsensitiveFiltering:true,
            buttonWidth: '400px'
        });
        $('#framework_form').on('submit', function (event) {
            var form_data = $(this).serialize();
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('SubjectSelect')}}", // This is what I have updated
                data: { '_token': "{{csrf_token()}}", form_data : form_data }
            }).done(function( msg ) {
                alert( msg );
            });

        });
    });
</script>

</body>
</html>