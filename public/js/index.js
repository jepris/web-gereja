// untuk menghitung umur jemaat
document.addEventListener('DOMContentLoaded', function() {
    // Ambil semua elemen input birth_date
    const birthDateInputs = document.querySelectorAll('[id^="birth_date_"]');

    birthDateInputs.forEach(birthDateInput => {
        birthDateInput.addEventListener('change', function() {
            const birthDate = new Date(this.value);
            const today = new Date();
            const yearDiff = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            const dayDiff = today.getDate() - birthDate.getDate();

            let age = '';
            if (yearDiff > 0 || (yearDiff === 0 && monthDiff >= 0)) {
                age = yearDiff + ' tahun';
                if (monthDiff > 0) {
                    age += ' ' + monthDiff + ' bulan';
                }
            } else if (monthDiff > 0 || (monthDiff === 0 && dayDiff >= 0)) {
                age = monthDiff + ' bulan';
            } else {
                age = 'Kurang dari 1 bulan';
            }

            // Update nilai input umur yang sesuai
            const umurInput = document.getElementById('umur_' + this.id.split('_')[2]);
            umurInput.value = age;
        });
    });
});
