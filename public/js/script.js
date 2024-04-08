document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.accordion-btn');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const contentId = this.getAttribute('id').replace('accordion-btn-', '');
            const content = document.getElementById(`accordion-content-${contentId}`);

            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);

            content.style.maxHeight = expanded ? '0px' : content.scrollHeight + 'px';
        });
    });
});
