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
                'index.{html,php}',
                'public/index.{html,php}',
                'App/views/**/*.{html,php}'
            ],
        }),
        liveReload([
                'index.{html,php}',
                'public/index.{html,php}',
                'App/views/**/*.{html,php}'
            ],
            {
                alwaysReload: true
            }
        ),
    ],
})