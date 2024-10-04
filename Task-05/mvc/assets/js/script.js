// Modal confirmation for delete action
function confirmDelete(itemId) {
    return confirm("Apakah Anda yakin ingin menghapus barang dengan ID " + itemId + "?");
}

// Smooth scrolling (optional enhancement)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.querySelector('.btn').addEventListener('click', function() {
    this.innerHTML = 'Loading...';
    this.style.pointerEvents = 'none'; // Disable button interaction
});