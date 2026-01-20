<?php
?>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
        if (window.lucide) window.lucide.createIcons();

        const mobileToggle = document.getElementById('mobileToggle');
        const mobilePanel = document.getElementById('mobilePanel');
        function closeMobile(){
            if (!mobilePanel) return;
            mobilePanel.style.display = 'none';
            mobilePanel.setAttribute('aria-hidden', 'true');
            if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
        }
        function toggleMobile(){
            if (!mobilePanel) return;
            const open = mobilePanel.style.display === 'block';
            if (open) closeMobile();
            else {
                mobilePanel.style.display = 'block';
                mobilePanel.setAttribute('aria-hidden', 'false');
                if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
            }
        }
        if (mobileToggle) mobileToggle.addEventListener('click', toggleMobile);
        document.querySelectorAll('[data-close-mobile]').forEach((a) => a.addEventListener('click', closeMobile));
        window.addEventListener('resize', () => { if (window.innerWidth > 760) closeMobile(); });

        function setFaqItemHeight(item) {
            const answer = item.querySelector('.faq-a');
            if (!answer) return;
            if (item.getAttribute('data-open') === '1') {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
                answer.style.maxHeight = '0px';
            }
        }

        document.querySelectorAll('.faq-item').forEach((item) => setFaqItemHeight(item));

        document.querySelectorAll('.faq-item .faq-q').forEach((btn) => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.faq-item');
                if (!item) return;

                const isOpen = item.getAttribute('data-open') === '1';
                item.setAttribute('data-open', isOpen ? '0' : '1');

                requestAnimationFrame(() => setFaqItemHeight(item));
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach((a) => {
            a.addEventListener('click', (e) => {
                const href = a.getAttribute('href');
                if (!href || href === '#') return;
                const el = document.querySelector(href);
                if (!el) return;
                e.preventDefault();
                const top = el.getBoundingClientRect().top + window.pageYOffset - 86;
                window.scrollTo({ top, behavior: 'smooth' });
            });
        });
</script>
