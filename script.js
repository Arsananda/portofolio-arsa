document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Pesan berhasil dikirim!');
                contactForm.reset();
            } else {
                alert('Terjadi kesalahan. Silakan coba lagi.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan. Silakan coba lagi.');
        });
    });
});