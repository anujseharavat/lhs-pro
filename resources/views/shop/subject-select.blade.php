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

    <div class="st-content" style="margin-top: 30px;">
        <input type="hidden" id="course_id" value={{$course_id}} />
        <input type="hidden" id="order_detail_id" value={{$order_detail_id}} />
        <!-- extra div for emulating position:fixed of the menu -->
        <form method="post" id="framework_form">
            <div class="form-group">
                <div class="panel panel-default">
                    <div class="row select_row">
                        <div class="col-md-3 sub_row1">Languages</div>
                        <div class="col-md-4">
                            <select id="language" name="language" multiple="multiple"
                                    class="multiselect-ui form-control">
                                <option selected value="1">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="row select_row">
                        <div class="col-md-3 sub_row1">Humanities and Social Sciences</div>
                        <div class="col-md-4">
                            <select id="humanssc" name="framework" multiple="multiple"
                                    class="multiselect-ui form-control">
                                <option selected value="2">Economy</option>
                            </select>
                        </div>
                    </div>
                    <div class="row select_row">
                        <div class="col-md-3 sub_row1">Sciences</div>
                        <div class="col-md-4">
                            <select id="science" name="framework" multiple="multiple"
                                    class="multiselect-ui form-control">
                                <option selected value="3">Physics</option>
                                <option value="4">Chemsitry</option>
                                <option value="5">Biology</option>
                            </select>
                        </div>
                    </div>
                    <div class="row select_row">
                        <div class="col-md-3 sub_row1">Mathematics</div>
                        <div class="col-md-4">
                            <select id="maths" name="framework" multiple="multiple"
                                    class="multiselect-ui form-control">
                                <div class="col-md-4">
                                    <option selected value="6">Add Maths</option>
                                    <option value="7">Mathamatics</option>
                                </div>
                            </select>
                        </div>
                    </div>
                    <div class="row select_row">
                        <div class="col-md-3 sub_row1">Professional and Creative</div>
                        <div class="col-md-4">
                            <select id="profcreative" name="framework" multiple="multiple"
                                    class="multiselect-ui form-control">
                                <div class="col-md-4">
                                    <option selected value="7">ICT</option>
                                </div>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <input type="submit" name="submit" value="Submit" class="btn btn-info"/>
                <a  href="{{ route('order-history')}}" class="btn btn-info">Back</a>
            </div>
        </form>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#language').multiselect({
            nonSelectedText: "Select Framework",
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px',
            onChange: function (option, checked) {
                // Get selected options.
                var selectedOptions = $('#language option:selected');
                if (selectedOptions.length >= 1) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = $('#language option').filter(function () {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    $('#language option').each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            }
        });
        $('#humanssc').multiselect({
            nonSelectedText: "Select Framework",
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px',
            onChange: function (option, checked) {
                // Get selected options.
                var selectedOptions = $('#humanssc option:selected');
                if (selectedOptions.length >= 1) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = $('#humanssc option').filter(function () {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    $('#humanssc option').each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            }
        });
        $('#science').multiselect({
            nonSelectedText: "Select Framework",
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px',
            onChange: function (option, checked) {
                // Get selected options.
                var selectedOptions = $('#science option:selected');
                if (selectedOptions.length >= 3) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = $('#science option').filter(function () {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    $('#science option').each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            }
        });
        $('#maths').multiselect({
            nonSelectedText: "Select Framework",
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px',
            onChange: function (option, checked) {
                // Get selected options.
                var selectedOptions = $('#maths option:selected');
                if (selectedOptions.length >= 2) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = $('#maths option').filter(function () {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    $('#maths option').each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            }
        });
        $('#profcreative').multiselect({
            nonSelectedText: "Select Framework",
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px',
            onChange: function (option, checked) {
                // Get selected options.
                var selectedOptions = $('#profcreative option:selected');
                if (selectedOptions.length >= 1) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = $('#profcreative option').filter(function () {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    $('#profcreative option').each(function () {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            }
        });

        $('#framework_form').on('submit', function (event) {
            var form_data = $(this).serialize();
            var course_id = document.getElementById("course_id").value;
            var order_detail_id = document.getElementById("order_detail_id").value;
            var selected = [];
            var selectedOptions = $('#language option:selected');
            $(selectedOptions).each(function(index, brand) {
                selected.push($(this).val());
                selected.push(parseInt($(this).val())+10);
            });
            selectedOptions = $('#humanssc option:selected');
            $(selectedOptions).each(function(index, brand) {
                selected.push($(this).val());
                selected.push(parseInt($(this).val())+10);
            });
            selectedOptions = $('#science option:selected');
            $(selectedOptions).each(function(index, brand) {
                selected.push([$(this).val()]);
                selected.push(parseInt($(this).val())+10);
            });
            selectedOptions = $('#maths option:selected');
            $(selectedOptions).each(function(index, brand) {
                selected.push([$(this).val()]);
                selected.push(parseInt($(this).val())+10);
            });
            selectedOptions = $('#profcreative option:selected');
            $(selectedOptions).each(function(index, brand) {
                selected.push([$(this).val()]);
                selected.push(parseInt($(this).val())+10);
            });
            alert (selected);
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('post_subject_select')}}", // This is what I have updated
                data: {'_token': "{{csrf_token()}}", 'selected': selected, 'course_id':course_id, 'order_detail_id':order_detail_id}
            }).done(function (data) {
                alert(data);
            });

        });

    });
</script>

</body>
</html>

{{--var selectedOptions = $('#framework option:selected');--}}
{{--var selected = [];--}}
{{--$(selectedOptions).each(function(index, brand){--}}
{{--selected.push([$(this).val()]);--}}
{{--});--}}
{{--alert(selected);--}}
{{--console.log(selected);--}}