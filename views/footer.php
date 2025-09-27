<footer class="text-white mt-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-top: 3px solid rgba(255,255,255,0.1);">
    <div class="container py-3 d-flex flex-column flex-md-row justify-content-center align-items-center">
        <div class="d-flex align-items-center">
            <i class="fas fa-users-cog me-2" style="color:#ffd700"></i>
            <span class="fw-semibold">Crud Proveedores</span>
        </div>
    </div>

</footer>
</body>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="../node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.body.addEventListener('click', function(e) {
            const link = e.target.closest('a[href*="deleteController.php"]');
            if (!link) return;
            e.preventDefault();
            const url = link.getAttribute('href');

            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción eliminará el registro.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        });
    });
</script>

</html>