import './bootstrap';
import 'preline'
import { createApp } from 'vue';
import App from './components/App.vue';
import Opening from './components/opening.vue';
import Hello from './components/hello.vue';
import DelayButton from './components/delayButton.vue';

createApp(DelayButton).mount('#delayButton');
createApp(App).mount('#app');
createApp(Opening).mount('#opening');
createApp(Hello).mount('#hello');
