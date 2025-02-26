<!DOCTYPE html>
<!-- This site was created in Webflow. https://webflow.com -->
<!-- Last Published: Wed Aug 07 2024 12:51:04 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="immigration-128.webflow.io" data-wf-page="651f2c08c5bd81eb296c1813" data-wf-site="651f2c08c5bd81eb296c17aa" lang="en">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="utf-8" />
        <title>Application - Kelen Immigration Services</title>
        <meta content="Application - Kelen Immigration Services" property="og:title" />
        <meta content="Application - Kelen Immigration Services" property="twitter:title" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Webflow" name="generator" />
        <link href="https://kelenservicesca.com/css/webflow.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
                }
            });
        </script>
        <script type="text/javascript">
            !function(o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
            }(window, document);
        </script>
        <link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
        <link href="/images/favicon.png" rel="apple-touch-icon" />
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XCVQHS447H"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('set', 'developer_id.dZGVlNj', true);
            gtag('config', 'G-XCVQHS447H');
        </script>
        <style>
            svg {
                display: block;
                height: 40vw;
                width: 40vw;
                color: #ff5500; /* SVG path use currentColor to inherit this */
            }
            .hidden {
                display: none;
            }
            .circle {
                stroke-dasharray: 76;
                stroke-dashoffset: 76;
                animation: draw 1s forwards;
            }
            .tick {
                stroke-dasharray: 18;
                stroke-dashoffset: 18;
                animation: draw 1s forwards 1s;
            }
            @keyframes draw { 
                to { stroke-dashoffset: 0 } 
            }
        </style>
        <style>
            .hidden-file-input {
                display: none;
            }
            .custom-file-upload {
                display: inline-block;
                padding: 6px 12px;
                cursor: pointer;
                background-color: #007bff;
                color: white;
                border-radius: 4px;
                margin-bottom: 10px;
            }
            .image-preview {
                overflow: hidden;
            }
            .image-preview img {
                /* Add styles if needed */
            }
        </style>
    </head>
    <body>
        <x-navigation-menu></x-navigation-menu>
        <div class="banner-section-photo-two">
            <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99867" style="opacity:1" class="banner-content-container-two">
                <h1 data-w-id="221627f6-3a31-260f-8a97-6ec174e99868" style="opacity:1" class="home-title">Check Your Eligibility.</h1>
                <p data-w-id="221627f6-3a31-260f-8a97-6ec174e9986a" style="opacity:1" class="home-main-banner-discription">We're here to guide you every step of the way. Our experienced team of experts is dedicated to making your journey to a new country as smooth and stress-free as possible.</p>
                <div class="collection-list-wrapper-visa hidden w-dyn-list">
                    <div role="list" class="visa-buttons-wrapper w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                            <a onclick="toggleDiv(1)" class="visa-link-block w-inline-block">
                                <img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652db339678183c890509e1e_fi_4508618.svg" alt="" class="image-icon-visa" />
                                <div> Temporary Visa</div>
                            </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <a onclick="toggleDiv(2)" class="visa-link-block w-inline-block">
                                <img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652db2fc45a71830e136ff99_fi_3022243.svg" alt="" class="image-icon-visa" />
                                <div> Study Visa</div>
                            </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <a onclick="toggleDiv(3)" class="visa-link-block w-inline-block">
                                <img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652916be950271066614b15c_fi_6964169.svg" alt="" class="image-icon-visa" />
                                <div>Work Visa</div>
                            </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <a onclick="toggleDiv(4)" class="visa-link-block w-inline-block">
                                <img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/6529171dfec11464e727fa94_fi_4772520.svg" alt="" class="image-icon-visa" />
                                <div>Permanenent Resident</div>
                            </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <a onclick="toggleDiv(5)" class="visa-link-block w-inline-block">
                                <img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/6529171dfec11464e727fa94_fi_4772520.svg" alt="" class="image-icon-visa" />
                                <div>Investment Citizenship</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="numbers-wrapper">
            <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" style="opacity:1" class="w-layout-grid working-numbers">
                <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
                    <div class="numbers">15+</div>
                    <div class="numbers-text white-style">Years of experience</div>
                </div>
                <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
                    <div class="numbers">84k</div>
                    <div class="numbers-text white-style">Clients worldwide</div>
                    <div class="line home-white-left"></div>
                </div>
                <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
                    <div class="numbers">98%</div>
                    <div class="numbers-text white-style">Success rate</div>
                    <div class="line home-white-left"></div>
                </div>
                <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
                    <div class="numbers">28k</div>
                    <div class="numbers-text white-style">Visa issued</div>
                    <div class="line home-white-left"></div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="base-container w-container">
                <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56d" style="opacity:1" class="two-column-wrapper">
                    <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56e" style="opacity:1" class="column-two">
                        <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56f" class="hidden" id="div1" class="subtitle-text">Temporary Visa</div>
                        <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56f" id="div2" class="hidden subtitle-text">Study Visa</div>
                        <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56f" id="div3" class="subtitle-text hidden">Work Visa</div>
                        <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56f" id="div4" class="hidden subtitle-text">Permanenent Resident</div>
                        <div data-w-id="701e0156-db8c-6bef-7938-de4e2493f56f" id="div5" class="hidden subtitle-text">Citizenship through Investment</div>
                        <section id="formsec">
                            <h2 class="in-section-title">Seamless Visa Solutions with Expert Guidance</h2>
                            <p class="no-margin">Ready to embark on your immigration journey? Contact us to schedule a consultation and take the first step toward making your dream of living in a new country a reality.</p>
                            <div class="mt-4">
                                <form id="docs">
                                    <div>
                                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose Visa</option>
                                            <option value="US">Temporary Visa</option>
                                            <option value="CA">Permanent Visa</option>
                                            <option value="FR">Study Visa</option>
                                            <option value="DE">Permanent Resident</option>
                                            <option value="DE">Citizenship by Investment</option>
                                            <option value="DE">Family Visa</option>
                                            <option value="DE">Work Permit Visa</option>
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <input type="text" name="first" id="first" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Name" required />
                                    </div>
                                    <div class="mt-4">
                                        <input type="text" name="last" id="last" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Last Name" required />
                                    </div>
                                    <div class="max-w-sm mt-4 mx-auto">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                                </svg>
                                            </div>
                                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@address.com">
                                        </div>
                                    </div>
                                    <div class="flex mt-4 relative items-center justify-center w-full">
                                        <label for="passport" class="flex flex-col items-center justify-center w-full h-24 border relative border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your international passport</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-passport"></div>
                                            </div>
                                            <input id="passport" name="passport" type="file" class="absolute hidden-file-input" />
                                        </label>
                                    </div>
                                    <div class="flex mt-4 relative items-center justify-center w-full">
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-24 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your international passport</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-dropzone-file"></div>
                                            </div>
                                            <input id="dropzone-file" name="dropzone-file" type="file" class="mr-auto hidden-file-input" />
                                        </label>
                                    </div>
                                    <div class="flex mt-4 items-center justify-center w-full">
                                        <label for="cv" class="flex flex-col items-center justify-center w-full h-24 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your work experience (CV)</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-cv"></div>
                                            </div>
                                            <input id="cv" name="cv" type="file" class="hidden" />
                                        </label>
                                    </div>
                                    <div class="flex mt-4 -mb-1.5 items-center justify-center w-full">
                                        <label for="birth" class="flex flex-col items-center justify-center w-full h-24 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your birth certificate</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-birth"></div>
                                            </div>
                                            <input id="birth" name="birth" type="file" class="hidden" />
                                        </label>
                                    </div>
                                    <div class="flex mt-4 -mb-1.5 items-center justify-center w-full">
                                        <label for="marriage" class="flex flex-col items-center justify-center w-full h-24 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your marriage certificate</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-marriage"></div>
                                            </div>
                                            <input id="marriage" name="marriage" type="file" class="hidden" />
                                        </label>
                                    </div>
                                    <div class="flex mt-4 -mb-1.5 items-center justify-center w-full">
                                        <label for="fdocuments" class="flex flex-col items-center justify-center w-full h-24 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your financial documents</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-fdocuments"></div>
                                            </div>
                                            <input id="fdocuments" name="fdocuments" type="file" class="hidden-file-input" />
                                        </label>
                                    </div>
                                    <div class="flex my-4 -mb-1.5 items-center justify-center w-full">
                                        <label for="medical" class="flex flex-col items-center justify-center w-full h-24 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center text-center justify-center p-4">
                                                <svg class="w-4 h-4 mb-0 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop your medical examination reports</p>
                                                <div class="fixed ml-2 left-0 w-10 image-preview" id="image-preview-medical"></div>
                                            </div>
                                            <input id="medical" name="medical" type="file" class="hidden-file-input" />
                                        </label>
                                    </div>
                                    <div class="button-wrapper mb-4">
                                        <button id="submitbutton" class="primary-button dark w-button">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <div class="my-4 clients-pics-wrapp">
                            <div class="avatars-wrapper">
                                <img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18b0_Member-Photo-Close-up-10.jpg" loading="lazy" alt="avatars image" class="avatars-image" />
                                <img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18bd_Member-Photo-Close-up-6.jpg" loading="lazy" alt="avatars image" class="avatars-image" />
                                <img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18a9_Member-Photo-Close-up-3.jpg" loading="lazy" alt="avatars image" class="avatars-image" />
                                <img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18a7_Member-Photo-Close-up-14.jpg" loading="lazy" alt="avatars image" class="avatars-image last-item" />
                            </div>
                            <div class="clients-subtitle">Trusted by 86k+ clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="submitted" style="display:none;" class="mx-4">
            <div style="margin-top: 20vh;margin-bottom: 20vh;">
                <div class="mb-40">
                    <svg class="mb-24 mx-auto" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                        <g stroke="currentColor" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                            <path class="circle" d="M13 1C6.372583 1 1 6.372583 1 13s5.372583 12 12 12 12-5.372583 12-12S19.627417 1 13 1z"/>
                            <path class="tick" d="M6.5 13.5L10 17 l8.808621-8.308621"/>
                        </g>
                    </svg>
                </div>
                <p class="text-center -mt-24">Your application has been recieved successfully and it's being processed.</p>
                <div class="button-wrapper mt-24 mb-4">
                    <button class="primary-button dark w-button">Track Application</button>
                </div>
            </div>
        </section>
        <x-footer-section></x-footer-section>
        <script>
            function toggleDiv(divNumber) {
                // Hide all divs
                for (let i = 1; i <= 5; i++) {
                    const div = document.getElementById(`div${i}`);
                    div.classList.add('hidden');
                }

                // Show the selected div
                const selectedDiv = document.getElementById(`div${divNumber}`);
                selectedDiv.classList.remove('hidden');
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#docs").on('submit', function (e) {
                    e.preventDefault();
                    var formData = new FormData(this);

                    $.ajax({
                        url: "/upload.php",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            $("#formsec").hide();
                            $("#submitted").show();
                        },
                        error: function () {
                            alert("Error uploading files.");
                        }
                    });
                });
            });
        </script>
        <script>
            function handleFileSelect(event, previewId) {
                const files = event.target.files;
                const preview = document.getElementById(previewId);
                preview.innerHTML = '';

                for (const file of files) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        preview.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            }

            document.getElementById('passport').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-passport');
            });

            document.getElementById('dropzone-file').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-dropzone-file');
            });

            document.getElementById('cv').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-cv');
            });

            document.getElementById('birth').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-birth');
            });

            document.getElementById('marriage').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-marriage');
            });

            document.getElementById('fdocuments').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-fdocuments');
            });

            document.getElementById('medical').addEventListener('change', function(event) {
                handleFileSelect(event, 'image-preview-medical');
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=651f2c08c5bd81eb296c17aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://kelenservicesca.com/js/webflow.js" type="text/javascript"></script>
    </body>
</html>