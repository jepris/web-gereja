document.addEventListener('DOMContentLoaded', function() {
    var alert = document.getElementById('success-alert');
    if (alert) {
        setTimeout(function() {
            alert.style.opacity = 0;
            setTimeout(function() {
                alert.style.display = 'none';
            }, 600); 
        }, 3000); //buat 3 detik
    }
});