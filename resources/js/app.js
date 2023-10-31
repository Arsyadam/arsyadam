import './bootstrap';
import '../css/style.css';
import '../css/app.css';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);   

Alpine.start();
