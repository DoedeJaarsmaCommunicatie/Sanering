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

    button.addEventListener('click', function () {
        document.querySelector('.navbar--wrapper').classList.add('active');
    })

    document.addEventListener('click', function (ev) {
        if (ev.target === button) {
            return;
        }

        document.querySelector('.navbar--wrapper').classList.remove('active');
    })
}
