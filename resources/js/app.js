require('./bootstrap');

require('jquery');

import $ from 'jquery'
window.jquery=$;
window.$ = $;
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
