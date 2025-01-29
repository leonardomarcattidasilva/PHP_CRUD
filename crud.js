let del = document.querySelectorAll('#del');

del.forEach(element => {
    element.addEventListener('click', showConfirm);
});

function showConfirm(e) {
    if (!confirm('Deseja apagar o cliente?')) {
            e.preventDefault();
    } else {
        return true;
    };
};