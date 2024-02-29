<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<?php
$version = rand();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://password-generator.test/">

    <title>Password Generator</title>
    <meta name="description" content="Generate strong and secure passwords effortlessly.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Password Generator">
    <meta property="og:description" content="Generate strong and secure passwords effortlessly.">
    <meta property="og:image" content="assets/project/img/og-image.png">

    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon-192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="favicon-512.png">

    <link rel="mask-icon" href="favicon-192.png" color="#ffffff">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/project/css/style.css">
</head>

<body>

    <section class="bg-body-tertiary p-3 vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <a class="text-reset text-decoration-none" href="/">
                        <h1 class="fs-4 text-center text-md-start fw-bold mb-3">
                            <img src="assets/project/img/logo.webp" alt="Logo" width="32px" height="32px">
                            Password Generator
                        </h1>
                    </a>
                    <div class="row">
                        <div class="col-12 col-md-8 order-0 order-md-1 mb-3 mb-md-0">
                            <label for="password" class="form-label visually-hidden">Generated password</label>
                            <input type="text" class="form-control form-control-lg text-center monospace rounded-0 border-0 border-bottom bg-body-tertiary" id="password" readonly>
                        </div>
                        <div class="col-6 col-md-2 order-2 order-md-2 mb-3">
                            <button class="btn btn-lg w-100" id="copy" title="Copy to clipboard">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-6 col-md-2 order-1 order-md-0 mb-3">
                            <button class="btn btn-lg w-100" id="regenerate" title="Regenerate password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 order-md-2">
                            <div>
                                <div class="d-flex align-items-start justify-content-between">
                                    <label for="length" class="form-label">Length</label>
                                    <span class="badge rounded-pill text-bg-secondary" id="length-display" style="width: 4rem;">8</span>
                                </div>
                                <input type="range" class="form-range" id="length" min="8" max="16" value="8">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 order-md-0">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="uppercase" checked>
                                <label class="form-check-label" for="uppercase">Uppercase</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="lowercase" checked>
                                <label class="form-check-label" for="lowercase">Lowecase</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 order-md-1">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="numbers" checked>
                                <label class="form-check-label" for="numbers">Numbers</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="symbols" checked>
                                <label class="form-check-label" for="symbols">Symbols</label>
                            </div>
                        </div>
                        <div class="col-12 order-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="theme" title="Toggle between light/dark mode">
                                        <label class="form-check-label visually-hidden" for="theme">Switch to dark mode</label>
                                        <span id="theme-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
                                                <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill d-none" viewBox="0 0 16 16">
                                                <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="nav small justify-content-md-end mt-3 mt-md-0">
                                        <li class="nav-item"><button class="nav-link text-reset p-0 me-3 me-md-5 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#modal-shortcuts">Shortcuts</button></li>
                                        <li class="nav-item"><button class="nav-link text-reset p-0 me-3 me-md-5" data-bs-toggle="modal" data-bs-target="#modal-about">About</button></li>
                                        <li class="nav-item"><button class="nav-link text-reset p-0 me-3 me-md-5" data-bs-toggle="modal" data-bs-target="#modal-terms">Terms of use</button></li>
                                        <li class="nav-item"><button class="nav-link text-reset p-0" data-bs-toggle="modal" data-bs-target="#modal-privacy">Privacy policy</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-cookie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="mb-0">We use cookies to enhance your browsing experience and provide personalized content. By clicking "Accept All Cookies," you agree to the storing of cookies on your device.</p>
                </div>
                <div class="modal-footer justify-content-end justify-content-md-start border-0 pt-0">
                    <button class="btn link-primary" data-bs-toggle="modal" data-bs-target="#modal-privacy">Privacy Policy</button>
                    <button class="btn btn-primary px-4" id="accept-cookies" data-bs-dismiss="modal">Accept All Cookies</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-shortcuts" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Shortcuts</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" title="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2"><kbd>U</kbd> - Toggle uppercase option</p>
                    <p class="mb-2"><kbd>L</kbd> - Toggle lowercase option</p>
                    <p class="mb-2"><kbd>N</kbd> - Toggle numbers option</p>
                    <p class="mb-2"><kbd>S</kbd> - Toggle symbols option</p>
                    <p class="mb-2"><kbd>←</kbd> or <kbd>→</kbd> - Adjust password length</p>
                    <p class="mb-2"><kbd>Spacebar</kbd> or <kbd>R</kbd> - Regenerate password</p>
                    <p class="mb-2"><kbd>C</kbd> - Copy to clipboard</p>
                    <p class="mb-0"><kbd>M</kbd> - Toggle between light and dark mode</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-about" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title visually-hidden">About</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" title="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3"><img src="assets/project/img/logo.webp" alt="Password Generator" width="48px" height="48px"></div>
                    <h3 class="fw-bold">Password Generator</h3>
                    <p>Created by Rudrian Riener D. Pariñas<br>
                        Version 1.0.0<br>
                        Published February 15, 2023</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-terms" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Terms of use</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" title="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Welcome to Password Generator! By accessing or using Password Generator, you agree to be bound by the following terms of use. Please read these terms carefully before accessing or using the service.</p>
                    <h6 class="fw-bold">Acceptance of Terms</h6>
                    <p>By using our Password Generator, you agree to be bound by these Terms of Use. If you do not agree to these terms, please do not use the Password Generator.</p>
                    <h6 class="fw-bold">Use of the Password Generator</h6>
                    <p>Our Password Generator is provided for your personal, non-commercial use only. You may not use the Password Generator for any illegal or unauthorized purpose.</p>
                    <h6 class="fw-bold">Security</h6>
                    <p>While we strive to provide secure and reliable services, we cannot guarantee the security of any information transmitted through the Password Generator. You are responsible for maintaining the security of your passwords and account information.</p>
                    <h6 class="fw-bold">No Warranty</h6>
                    <p>The Password Generator is provided "as is" without any warranty of any kind. We make no guarantees regarding the accuracy, reliability, or availability of the Password Generator.</p>
                    <h6 class="fw-bold">Limitation of Liability</h6>
                    <p>In no event shall we be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of the Password Generator.</p>
                    <h6 class="fw-bold">Changes to Terms</h6>
                    <p>We reserve the right to modify these Terms of Use at any time. Any changes will be effective immediately upon posting. Your continued use of the Password Generator after the posting of changes constitutes your acceptance of such changes.</p>
                    <h6 class="fw-bold">Termination of Service</h6>
                    <p>We reserve the right to terminate or suspend access to the Password Generator at any time without prior notice or liability.</p>
                    <h6 class="fw-bold">Governing Law</h6>
                    <p>These Terms of Use shall be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law provisions.</p>
                    <h6 class="fw-bold">Contact Us</h6>
                    <p>If you have any questions or concerns about these Terms of Use, please contact us at [Contact Information].</p>
                    <p>By using our Password Generator, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use. If you do not agree to these terms, please refrain from using the Password Generator.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-privacy" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Privacy policy</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" title="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your privacy is important to us. This Privacy Policy outlines the types of personal information we collect and how we use, disclose, and protect that information in relation to our Password Generator service. By accessing or using our Password Generator, you consent to the collection, use, and disclosure of your personal information in accordance with this Privacy Policy.</p>
                    <h6 class="fw-bold">Information Collection</h6>
                    <p>We may collect certain personal information when you use our Password Generator, including but not limited to:</p>
                    <ul>
                        <li>Information provided by you (such as inputting preferences for password generation).</li>
                        <li>Automatically collected information (such as device information, IP address, and usage data).</li>
                    </ul>
                    <h6 class="fw-bold">Use of Information</h6>
                    <p>We may use the personal information we collect for various purposes, including:</p>
                    <ul>
                        <li>Generating passwords based on your preferences.</li>
                        <li>Improving and optimizing the performance and functionality of the Password Generator.</li>
                        <li>Analyzing usage trends and preferences.</li>
                        <li>Responding to user inquiries and providing customer support.</li>
                    </ul>
                    <h6 class="fw-bold">Information Sharing</h6>
                    <p>We may share your personal information with third-party service providers or partners who assist us in operating our Password Generator or providing related services. We may also disclose your information if required by law or to protect our rights or the rights of others.</p>
                    <h6 class="fw-bold">Data Security</h6>
                    <p>We take reasonable measures to protect the personal information we collect against unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>
                    <h6 class="fw-bold">Retention of Information</h6>
                    <p>We will retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.</p>
                    <h6 class="fw-bold">Third-Party Links</h6>
                    <p>Our Password Generator may contain links to third-party websites or services. We are not responsible for the privacy practices or content of such third-party sites, and we encourage you to review the privacy policies of those sites before providing any personal information.</p>
                    <h6 class="fw-bold">Children’s Privacy</h6>
                    <p>Our Password Generator is not directed to individuals under the age of 13, and we do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13, we will take steps to delete that information.</p>
                    <h6 class="fw-bold">Changes to Privacy Policy</h6>
                    <p>We reserve the right to update or modify this Privacy Policy at any time. Any changes will be effective immediately upon posting. Your continued use of the Password Generator after the posting of changes constitutes your acceptance of such changes.</p>
                    <h6 class="fw-bold">Contact Us</h6>
                    <p>If you have any questions or concerns about this Privacy Policy, please contact us at [Contact Information].</p>
                    <p>By using our Password Generator, you acknowledge that you have read, understood, and agree to be bound by this Privacy Policy. If you do not agree to this Privacy Policy, please refrain from using the Password Generator.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/project/js/script.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (!document.cookie.split(';').some((item) => item.trim().startsWith('consent='))) new bootstrap.Modal('#modal-cookie').show();
        });
        $('#accept-cookies').addEventListener('click', () => {
            document.cookie = "consent=true; expires=" + new Date(new Date().getTime() + 14 * 24 * 60 * 60 * 1000).toUTCString() + "; path=/";
        });
    </script>
</body>

</html>