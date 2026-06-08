<head> 
<meta charset="utf-8"/> 
<meta content="width=device-width, initial-scale=1.0" name="viewport"/> 
<title><?php echo $pageTitle ?? 'EventPlan Pro'; ?></title> 
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script> 
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/> 
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/> 
<script id="tailwind-config"> 
        tailwind.config = { 
            darkMode: "class", 
            theme: { 
                extend: { 
                    "colors": { 
                        "on-tertiary-fixed-variant": "#7d2d00", 
                        "on-secondary-fixed-variant": "#38485d", 
                        "on-background": "#191c1e", 
                        "outline-variant": "#c3c6d7", 
                        "on-primary-fixed": "#00174b", 
                        "secondary": "#505f76", 
                        "secondary-fixed-dim": "#b7c8e1", 
                        "primary-fixed": "#dbe1ff", 
                        "secondary-fixed": "#d3e4fe", 
                        "secondary-container": "#d0e1fb", 
                        "surface-container-low": "#f2f4f6", 
                        "surface-bright": "#f7f9fb", 
                        "on-tertiary-container": "#ffede6", 
                        "on-surface": "#191c1e", 
                        "on-primary": "#ffffff", 
                        "tertiary-fixed-dim": "#ffb596", 
                        "inverse-on-surface": "#eff1f3", 
                        "outline": "#737686", 
                        "inverse-primary": "#b4c5ff", 
                        "on-secondary-fixed": "#0b1c30", 
                        "on-error-container": "#93000a", 
                        "surface-container": "#eceef0", 
                        "surface-container-lowest": "#ffffff", 
                        "on-secondary": "#ffffff", 
                        "surface-variant": "#e0e3e5", 
                        "primary": "#004ac6", 
                        "surface-tint": "#0053db", 
                        "tertiary": "#943700", 
                        "on-error": "#ffffff", 
                        "surface": "#f7f9fb", 
                        "error": "#ba1a1a", 
                        "on-primary-container": "#eeefff", 
                        "surface-container-highest": "#e0e3e5", 
                        "background": "#f7f9fb", 
                        "on-secondary-container": "#54647a", 
                        "inverse-surface": "#2d3133", 
                        "on-surface-variant": "#434655", 
                        "tertiary-container": "#bc4800", 
                        "error-container": "#ffdad6", 
                        "primary-fixed-dim": "#b4c5ff", 
                        "tertiary-fixed": "#ffdbcd", 
                        "on-tertiary": "#ffffff", 
                        "on-primary-fixed-variant": "#003ea8", 
                        "on-tertiary-fixed": "#360f00", 
                        "surface-container-high": "#e6e8ea", 
                        "primary-container": "#2563eb", 
                        "surface-dim": "#d8dadc" 
                    }, 
                    "borderRadius": { 
                        "DEFAULT": "0.25rem", 
                        "lg": "0.5rem", 
                        "xl": "0.75rem", 
                        "full": "9999px" 
                    }, 
                    "spacing": { 
                        "gutter": "24px", 
                        "sm": "8px", 
                        "lg": "24px", 
                        "md": "16px", 
                        "margin-desktop": "32px", 
                        "base": "4px", 
                        "xs": "4px", 
                        "xl": "32px", 
                        "margin-mobile": "16px" 
                    }, 
                    "fontFamily": { 
                        "body-md": ["Inter"], 
                        "body-sm": ["Inter"], 
                        "headline-md": ["Inter"], 
                        "headline-lg-mobile": ["Inter"], 
                        "headline-sm": ["Inter"], 
                        "body-lg": ["Inter"], 
                        "headline-lg": ["Inter"], 
                        "label-sm": ["Inter"], 
                        "label-md": ["Inter"] 
                    }, 
                    "fontSize": { 
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}], 
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}], 
                        "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}], 
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}], 
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}], 
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}], 
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}], 
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}], 
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}] 
                    } 
                }, 
            }, 
        } 
    </script> 
<style> 
        .material-symbols-outlined { 
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; 
        } 
        body { 
            background-color: #f7f9fb; 
            font-family: 'Inter', sans-serif; 
        } 
    </style> 
</head> 
