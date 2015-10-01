@if(session()->has('success'))
    <script>
        toastr.info('Are you the 6 fingered man?')
    </script>
@endif

@if(session()->has('error'))
    <script>
        toastr.info('Are you the 6 fingered man?')
    </script>
@endif