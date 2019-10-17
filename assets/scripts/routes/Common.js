export default {
    init() {
        // Javascript that fires on all pages.
        documentLoaded();
        handleMenu();
    },

    finalize() {
        // Javascript that fires on all pages. after page specific JS is fires.
    }
}

const documentLoaded = () => {
    document.addEventListener('DOMContentLoaded', function () {
        document.body.classList.add('dl', 'doc-load');
    });
}

const handleMenu = () => {
    const button = document.querySelector('.js-menu-button');
    const wrapper = document.querySelector('.navbar--wrapper');

    button.addEventListener('click', function () {
        wrapper.classList.add('active');
    })

    document.addEventListener('click', function (ev) {
        if (ev.target === button || wrapper.contains(ev.target)) {
            return;
        }

        wrapper.classList.remove('active');
    })
}
