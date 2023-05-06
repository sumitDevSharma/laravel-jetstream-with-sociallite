import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// const el = document.getElementById('messages')
// el.scrollTop = el.scrollHeight

