/**
 * DexterAnalytics - Camada Unificada de Telemetria e Medição de Tráfego
 * Integração: Google Analytics 4, Umami, Matomo, Plausible, PostHog e Mixpanel
 */
const DexterAnalytics = {
  track(eventName, params = {}) {
    // 1. Google Analytics 4 (gtag.js)
    if (typeof window.gtag === 'function') {
      window.gtag('event', eventName, params);
    }

    // 2. Umami Analytics
    if (typeof window.umami === 'object' && typeof window.umami.track === 'function') {
      window.umami.track(eventName, params);
    }

    // 3. Matomo Analytics
    if (Array.isArray(window._paq)) {
      window._paq.push(['trackEvent', params.category || 'Geral', eventName, params.label || '', params.value || 0]);
    }

    // 4. Plausible Analytics
    if (typeof window.plausible === 'function') {
      window.plausible(eventName, { props: params });
    }

    // 5. PostHog
    if (typeof window.posthog === 'object' && typeof window.posthog.capture === 'function') {
      window.posthog.capture(eventName, params);
    }

    // 6. Mixpanel
    if (typeof window.mixpanel === 'object' && typeof window.mixpanel.track === 'function') {
      window.mixpanel.track(eventName, params);
    }
  },

  initAutoTracking() {
    document.addEventListener('click', (event) => {
      const target = event.target.closest('[data-dx-event="click"]');
      if (!target) return;

      const action = target.getAttribute('data-dx-action') || 'click';
      const category = target.getAttribute('data-dx-category') || 'ui';
      const label = target.getAttribute('data-dx-label') || target.innerText.trim();
      const value = target.getAttribute('data-dx-value') || null;

      DexterAnalytics.track(action, { category, label, value });
    });
  }
};

document.addEventListener('DOMContentLoaded', () => {
  DexterAnalytics.initAutoTracking();
});

window.DexterAnalytics = DexterAnalytics;

