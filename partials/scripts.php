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

        function initHeroCarousel(root) {
            if (root && root.hasAttribute('data-hero-marquee')) return;
            const track = root.querySelector('[data-hero-track]');
            const items = Array.from(root.querySelectorAll('[data-hero-item]'));
            if (!track || items.length <= 1) return;

            let index = 0;
            const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const intervalMs = prefersReduced ? 9000 : 4200;
            let timer = null;

            function norm(i) {
                return (i + items.length) % items.length;
            }

            function render() {
                items.forEach((it, idx) => it.classList.toggle('is-active', idx === index));
            }

            function scrollToIndex(i) {
                const it = items[i];
                if (!it) return;
                const left = it.offsetLeft - (track.clientWidth - it.clientWidth) / 2;
                track.scrollTo({ left, behavior: prefersReduced ? 'auto' : 'smooth' });
            }

            function goTo(i) {
                index = norm(i);
                render();
                scrollToIndex(index);
            }

            function next() {
                goTo(index + 1);
            }

            function prev() {
                goTo(index - 1);
            }

            function start() {
                if (timer) return;
                timer = window.setInterval(next, intervalMs);
            }

            function stop() {
                if (!timer) return;
                window.clearInterval(timer);
                timer = null;
            }

            items.forEach((it, idx) => {
                it.addEventListener('click', () => {
                    stop();
                    goTo(idx);
                    start();
                });
            });

            let raf = null;
            function updateActiveFromScroll() {
                if (raf) return;
                raf = requestAnimationFrame(() => {
                    raf = null;
                    const center = track.scrollLeft + track.clientWidth / 2;
                    let best = 0;
                    let bestDist = Infinity;
                    items.forEach((it, idx) => {
                        const itCenter = it.offsetLeft + it.clientWidth / 2;
                        const dist = Math.abs(center - itCenter);
                        if (dist < bestDist) {
                            bestDist = dist;
                            best = idx;
                        }
                    });
                    if (best !== index) {
                        index = best;
                        render();
                    }
                });
            }

            track.addEventListener('scroll', updateActiveFromScroll, { passive: true });

            root.addEventListener('mouseenter', stop);
            root.addEventListener('mouseleave', start);

            render();
            start();
        }

        document.querySelectorAll('[data-hero-carousel]').forEach((root) => initHeroCarousel(root));
</script>
