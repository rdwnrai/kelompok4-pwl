document.addEventListener('DOMContentLoaded', function () {
    function addRow() {
        const container = document.getElementById('produk-container');
        const newRow = document.createElement('div');
        newRow.className = 'produk-row';
        newRow.innerHTML = window.produkOptionsHTML;
        container.appendChild(newRow);
    }

    function removeRow(buttonElement) {
        if (document.querySelectorAll('.produk-row').length > 1) {
            buttonElement.closest('.produk-row').remove();
        } else {
            alert('Minimal harus ada satu produk dalam transaksi.');
        }
    }

    // Tambahkan event listener ke tombol tambah produk
    const btnTambah = document.querySelector('.btn-tambah-produk');
    if (btnTambah) {
        btnTambah.addEventListener('click', addRow);
    }

    // Tambahkan handler untuk tombol hapus di baris pertama 
    if (document.querySelectorAll('.produk-row').length > 0) {
        const firstRowRemoveBtn = document.querySelector('.produk-row button');
        if (firstRowRemoveBtn) {
            firstRowRemoveBtn.onclick = function () {
                removeRow(this);
            };
        }
    }

    
    window.addRow = addRow;
    window.removeRow = removeRow;
});
