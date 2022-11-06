<?php

return [

    /*
     * The Google Tag Manager id, should be a code that looks something like "gtm-xxxx".
     */
    'id' => ('GTM-TM9KKXM'),

    /*
     * Enable or disable script rendering. Useful for local development.
     */
    'enabled' => env('GOOGLE_TAG_MANAGER_ENABLED', true),

    /*
     * If you want to use some macro's you 'll probably store them
     * in a dedicated file. You can optionally define the path
     * to that file here and we will load it for you.
     */

    /*
     * The key under which data is saved to the session with flash.
     */
    'macroPath' => app_path('Services/GoogleTagManager/Macros.php'),

];
