
@push('js')
<script>
    // Auto-submit when pressing Enter in date inputs
    document.querySelectorAll('#date-filter-form input[type="date"]').forEach(input => {
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('date-filter-form').submit();
            }
        });
    });
</script>
@endpush