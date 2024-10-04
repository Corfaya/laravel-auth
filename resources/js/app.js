import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const del_buttons = document.querySelectorAll('.project-remove')

del_buttons.forEach((btn) => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();

        const modal = document.getElementById('project-delete-modal');
        let new_modal = new bootstrap.Modal(modal)
        new_modal.show()

        const data_proj = btn.getAttribute('data-proj-title')

        const alert = document.getElementById('modal-alert');
        alert.innerHTML = `Are you sure you want to delete ${data_proj} project from your portfolio? <strong>The action is irreversible</strong>.`

        const confirm = document.getElementById('confirm-del')
        confirm.addEventListener('click', function () {
        btn.parentElement.submit();
    })
    })
})