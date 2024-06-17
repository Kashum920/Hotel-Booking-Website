 <!--- bootstrap js cdn ----->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

 <script>
    function alert(type,msg){
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
            <div class="alert  ${bs_class} custom-alert-3 alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        document.body.append(element);
        
    }
 </script>
 