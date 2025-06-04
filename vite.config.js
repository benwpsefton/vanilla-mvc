/**
 * Vite Configuration File
 *
 * Filename:        vite.config.js
 * Location:        /
 * Project:         vanilla-mvc
 * Date Created:    01/05/2025
 *
 * Author:          ben sefton <20127535@tafe.wa.edu.au>
 */

import {defineConfig} from 'vite'
import tailwindcss from '@tailwindcss/vite'
import usePHP from 'vite-plugin-php';
import liveReload from 'vite-plugin-live-reload'

export default defineConfig({
    plugins: [
        tailwindcss(),
        usePHP({
            entry: [
                'index.php',
                'public/index.{html,php,js}',
                'App/views/**/*.{html,php,js}'
            ],
        }),
        liveReload([
                'index.php',
                'public/index.{html,php,js}',
                'App/views/**/*.{html,php,js}'
            ],
            {
                alwaysReload: true
            }
        ),
    ],
})