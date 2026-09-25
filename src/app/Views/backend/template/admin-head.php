
<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_standard" name="shell-type"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@600;700&amp;family=Rubik:wght@400;500;700&amp;family=Space+Mono:wght@700&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
          rel="stylesheet"/>
    <style>@layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .scanlines {
            background: linear-gradient(rgba(18, 17, 35, 0) 50%, rgba(0, 0, 0, 0.35) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.01), rgba(0, 0, 255, 0.03));
            background-size: 100% 4px, 6px 100%;
            pointer-events: none;
        }

        @keyframes blink {
            0%, 49% {
                opacity: 1;
            }
            50%, 100% {
                opacity: 0;
            }
        }

        .animate-cursor {
            animation: blink 1s infinite;
        }</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">tailwind.config = {
            darkMode: "class", theme: {
                extend: {
                    "colors": {
                        "secondary-container": "#ff4a8d",
                        "error-container": "#93000a",
                        "primary": "#dbfcff",
                        "surface-container-lowest": "#0d0c1d",
                        "tertiary": "#fff5e2",
                        "surface-tint": "#00dbe9",
                        "error": "#ffb4ab",
                        "surface-variant": "#343346",
                        "on-tertiary-fixed-variant": "#584400",
                        "on-surface-variant": "#b9cacb",
                        "inverse-on-surface": "#302e41",
                        "on-background": "#e4e0f8",
                        "primary-fixed": "#7df4ff",
                        "surface-container-low": "#1b1a2b",
                        "surface-container-highest": "#343346",
                        "on-primary": "#00363a",
                        "on-secondary": "#65002e",
                        "on-tertiary-container": "#745c00",
                        "on-primary-fixed": "#002022",
                        "on-primary-fixed-variant": "#004f54",
                        "surface": "#121123",
                        "on-secondary-fixed": "#3f001a",
                        "tertiary-fixed-dim": "#f1c100",
                        "tertiary-container": "#ffd556",
                        "primary-fixed-dim": "#00dbe9",
                        "on-tertiary-fixed": "#241a00",
                        "secondary": "#ffb1c4",
                        "surface-bright": "#39374a",
                        "surface-container-high": "#29283a",
                        "outline-variant": "#3b494b",
                        "primary-container": "#00f0ff",
                        "on-secondary-container": "#590028",
                        "tertiary-fixed": "#ffe08b",
                        "inverse-surface": "#e4e0f8",
                        "inverse-primary": "#006970",
                        "on-error-container": "#ffdad6",
                        "background": "#121123",
                        "secondary-fixed": "#ffd9e1",
                        "on-tertiary": "#3d2f00",
                        "on-error": "#690005",
                        "on-surface": "#e4e0f8",
                        "on-secondary-fixed-variant": "#8f0044",
                        "outline": "#849495",
                        "on-primary-container": "#006970",
                        "surface-dim": "#121123",
                        "surface-container": "#1f1e2f",
                        "secondary-fixed-dim": "#ffb1c4"
                    },
                    "borderRadius": {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                    "spacing": {
                        "space-sm": "0.5rem",
                        "gutter-lg": "1.5rem",
                        "space-lg": "1.5rem",
                        "margin": "1rem",
                        "margin-md": "2rem",
                        "gutter": "1rem",
                        "space-xl": "2.5rem",
                        "space-md": "1rem",
                        "space-xs": "0.25rem",
                        "margin-lg": "3rem"
                    },
                    "fontFamily": {
                        "headline-xl-mobile": ["Space Mono"],
                        "headline-md": ["Space Mono"],
                        "headline-xl": ["Space Mono"],
                        "body-lg": ["Rubik"],
                        "headline-lg": ["Space Mono"],
                        "headline-sm": ["Space Mono"],
                        "label-md": ["JetBrains Mono"],
                        "label-sm": ["JetBrains Mono"],
                        "body-md": ["Rubik"],
                        "body-sm": ["Rubik"],
                        "label-lg": ["JetBrains Mono"],
                        "headline-lg-mobile": ["Space Mono"]
                    },
                    "fontSize": {
                        "headline-xl-mobile": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "0em", "fontWeight": "700"}],
                        "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-sm": ["18px", {"lineHeight": "26px", "letterSpacing": "0.02em", "fontWeight": "700"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.08em", "fontWeight": "600"}],
                        "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.1em", "fontWeight": "700"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "18px", "letterSpacing": "0.06em", "fontWeight": "700"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "0em", "fontWeight": "700"}]
                    }
                }
            }
        };</script>
</head>