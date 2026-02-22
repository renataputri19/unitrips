import './bootstrap';
import '../css/app.css';

/* ============================================================
   UNITRIPS — Interactive Animations & UI Logic
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
    initScrollAnimations();
    initNavbar();
    initMobileMenu();
    initItineraryTabs();
    initParallax();
    initCounterAnimations();
    initSmoothScroll();
    initCursorGlow();
    initFAQAccordion();
});

/* ----- Scroll-triggered fade/slide animations ----- */
function initScrollAnimations() {
    const elements = document.querySelectorAll(
        '.animate-on-scroll, .animate-slide-left, .animate-slide-right, .animate-scale-in'
    );

    if (!elements.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    elements.forEach((el) => observer.observe(el));
}

/* ----- Navbar scroll behaviour ----- */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    const handleScroll = () => {
        if (window.scrollY > 60) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
}

/* ----- Mobile menu toggle ----- */
function initMobileMenu() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-overlay');
    const closeBtn = document.getElementById('mobile-menu-close');

    if (!btn || !menu) return;

    const toggle = () => {
        menu.classList.toggle('open');
        if (overlay) overlay.classList.toggle('open');
        document.body.classList.toggle('overflow-hidden');
    };

    btn.addEventListener('click', toggle);
    if (closeBtn) closeBtn.addEventListener('click', toggle);
    if (overlay) overlay.addEventListener('click', toggle);

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.remove('open');
            if (overlay) overlay.classList.remove('open');
            document.body.classList.remove('overflow-hidden');
        });
    });
}

/* ----- Itinerary day tabs ----- */
function initItineraryTabs() {
    const tabs = document.querySelectorAll('.itinerary-tab');
    const panels = document.querySelectorAll('.itinerary-panel');

    if (!tabs.length || !panels.length) return;

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.day;

            tabs.forEach((t) => t.classList.remove('active'));
            tab.classList.add('active');

            panels.forEach((p) => {
                p.classList.remove('active');
                if (p.dataset.day === target) {
                    p.classList.add('active');
                }
            });
        });
    });
}

/* ----- Parallax on hero section ----- */
function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax-bg');
    if (!parallaxElements.length) return;

    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scrollY = window.scrollY;
                parallaxElements.forEach((el) => {
                    const speed = parseFloat(el.dataset.speed) || 0.3;
                    el.style.transform = `translateY(${scrollY * speed}px)`;
                });
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
}

/* ----- Counter animations ----- */
function initCounterAnimations() {
    const counters = document.querySelectorAll('.counter-value');
    if (!counters.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    counters.forEach((c) => observer.observe(c));
}

function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);          // ease-out cubic
        const current = Math.round(eased * target);
        el.textContent = current + suffix;

        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }

    requestAnimationFrame(update);
}

/* ----- Smooth anchor scrolling ----- */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (href === '#') return;

            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const offset = 80;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });
}

/* ----- Cursor glow effect ----- */
function initCursorGlow() {
    const glow = document.getElementById('cursor-glow');
    if (!glow) return;

    // Only show on non-touch devices
    if ('ontouchstart' in window) {
        glow.style.display = 'none';
        return;
    }

    document.addEventListener('mousemove', (e) => {
        requestAnimationFrame(() => {
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        });
    });
}

/* ----- FAQ Accordion ----- */
function initFAQAccordion() {
    const items = document.querySelectorAll('[data-accordion-item]');
    if (!items.length) return;

    items.forEach((item) => {
        const toggle = item.querySelector('[data-accordion-toggle]');
        const panel = item.querySelector('[data-accordion-panel]');
        const icon = item.querySelector('[data-accordion-icon]');

        if (!toggle || !panel) return;

        // Initialize state
        toggle.setAttribute('aria-expanded', 'false');
        panel.style.maxHeight = '0px';
        panel.style.opacity = '0';

        toggle.addEventListener('click', () => {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';

            if (isOpen) {
                toggle.setAttribute('aria-expanded', 'false');
                panel.style.maxHeight = '0px';
                panel.style.opacity = '0';
                if (icon) icon.classList.remove('rotate-45');
                item.classList.remove('bg-ocean-50', 'border-ocean-200');
            } else {
                toggle.setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
                panel.style.opacity = '1';
                if (icon) icon.classList.add('rotate-45');
                item.classList.add('bg-ocean-50', 'border-ocean-200');
            }
        });

        panel.addEventListener('transitionend', () => {
            // Allow content to grow naturally after opening
            if (toggle.getAttribute('aria-expanded') === 'true') {
                panel.style.maxHeight = 'none';
            }
        });
    });
}
