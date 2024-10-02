import './bootstrap';

import { createApp } from 'vue'
import Contact from "./Components/Contact.vue";
const app = createApp({})

app.component('Contact', Contact)
app.mount('#app')
