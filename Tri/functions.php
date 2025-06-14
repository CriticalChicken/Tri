<?php

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

// Add extra pages to the admin dashboard
require_once(TEMPLATEPATH . '/admin/alert-editor.php');
require_once(TEMPLATEPATH . '/admin/slugtag-help.php');

// Style the post slug field in the WordPress post editor
function tri_acf_admin_styles() {
    echo '
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Extra+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <style type="text/css">
        input[placeholder="Switch 2 launch"] {
            font-family: "Sofia Sans Extra Condensed", sans-serif !important;
            font-weight: 900 !important;
            text-transform: uppercase !important;
            display: block !important;
            outline: 0 !important;
            border: 0 !important;
            background-color: #d20202 !important;
            border-radius: 12px !important;
            padding: 2px 10px 0 10px !important;
            font-size: 30px !important;
            line-height: 40px !important;
            color: white !important;
            width: 280px !important;
            overflow-x: hidden !important;
            white-space: nowrap !important;
            font-optical-sizing: auto !important;
            text-shadow: 0 1px 0 black !important;
        }
        input[placeholder="Switch 2 launch"]:focus {
            box-shadow: unset !important;
        }
        input[placeholder="Switch 2 launch"]::placeholder {
            opacity: 0.48 !important;
            color: white !important;
        }
        input[placeholder="switch-2-launch"]::placeholder {
            opacity: 0.48 !important;
            color: #2c3338 !important;
        }
    </style>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            // Replace below Id with the actual ID of the ACF field
            const input = document.getElementById("acf-field_684dbd0ca81db");
            const preview = document.getElementById("tri_slug_preview");

            function updatePreview() {
                if (input.value.trim() === "") {
                    preview.textContent = "None";
                } else {
                    preview.textContent = input.value;
                }
            }

            // Initial population
            updatePreview();

            // Update in real-time
            input.addEventListener("input", updatePreview);
        });
    </script>';
}
add_action('acf/input/admin_head', 'tri_acf_admin_styles');
