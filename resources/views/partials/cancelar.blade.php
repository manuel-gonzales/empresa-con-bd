<script>
    document.getElementById('cancelBtn').addEventListener('click', function() {
        window.location.href = "{{ route( $routeVar, $routePar ) }}"
    });
</script>