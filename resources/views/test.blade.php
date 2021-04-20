@include('layouts.admin.scripts')
<script>
    window.onload = function() {
        $.ajaxSetup( {
            header:{
                'X-CSRF-TOKEN':{{csrf_token()}}
            }
        })
        $.ajax({
            type: 'post',
            url: '{{route('login')}}',
            data: {},
            /*processData: false,
            contentType: false,*/
            success: function (data) {
                console.log(data);
            },
            error: function (reject) {

            }
        })
    }
</script>
