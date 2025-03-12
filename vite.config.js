import { defineConfig } from 'vite';  
import tailwindcss from '@tailwindcss/vite';  
  
export default defineConfig({  
    plugins: [  
        tailwindcss(),  
    ],  
    server: {  
        watch: {  
            usePolling: true,  
        },  
        hmr: true,  
        proxy: {  
            // Proxy PHP backend  
            '/': 'http://localhost:8000',  
        }  
    }  
});