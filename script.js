const DELETE = document.getElementById('delete')
const modal = document.getElementById('modal')
modal.addEventListener("click", function () {
    DELETE.closest('div').remove();
});