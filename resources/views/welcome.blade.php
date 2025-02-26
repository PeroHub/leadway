<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
	<title>Legal Pathway Immigration Law Firm</title>
	<meta content="Legal Pathway Immigration Law Firm" property="og:title" />
	<meta content="Legal Pathway Immigration Law Firm" property="twitter:title" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />

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
		! function(o, c) {
			var n = c.documentElement,
				t = " w-mod-";
			n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
		}(window, document);
	</script>
	<link href="./images/icon.png" rel="shortcut icon" type="image/x-icon" />
	<link href="./images/icon.png" rel="apple-touch-icon" />
	

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
			.whatsapp-btn {
			position: fixed;
			bottom: 20px;
			left: 20px;
			background-color: #25D366;
			width: 60px;
			height: 60px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 2px 10px rgba(0,0,0,0.2);
			transition: all 0.3s ease;
			z-index: 1000;
		}

		.whatsapp-btn:hover {
			transform: scale(1.1);
			box-shadow: 0 4px 15px rgba(0,0,0,0.2);
		}

		.whatsapp-icon {
			width: 35px;
			height: 35px;
			fill: white;
		}

		.centerr {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 20px;
		
			font-family: Arial, sans-serif;
			
		}
		.carousel-container {
			position: relative;
			width: 90%;
			max-width: 600px;
			overflow: hidden;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		}

		.carousel-slide {
			display: flex;
			width: 500%; /* 5 images, so 100% width per image */
			transition: transform 0.5s ease-in-out;
		}

		.carousel-slide img {
			width: 20%; /* Each image takes up 20% of the carousel width (1/5) */
			flex-shrink: 0; /* Prevent images from shrinking */
		}

		button {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			background-color: rgba(0, 0, 0, 0.5);
			color: white;
			border: none;
			padding: 10px;
			font-size: 18px;
			cursor: pointer;
			border-radius: 50%;
		}

		button:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}

		.prev {
			left: 10px;
		}

		.next {
			right: 10px;
		}

				* {
					margin: 0;
					padding: 0;
					box-sizing: border-box;
					font-family: Arial, sans-serif;
				}

				.chat-widget {
					position: fixed;
					bottom: 20px;
					right: 20px;
					width: 320px;
					background: white;
					border-radius: 10px;
					box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
					display: none;
					overflow: hidden;
					z-index: 1000;
				}

				.chat-widget.open {
					display: flex;
					flex-direction: column;
				}

				.chat-header {
					background: #2563eb;
					color: white;
					padding: 15px;
					display: flex;
					justify-content: space-between;
					align-items: center;
				}

				.chat-header h3 {
					font-size: 16px;
				}

				.header-buttons {
					display: flex;
					gap: 8px;
				}

				.header-button {
					background: none;
					border: none;
					color: white;
					cursor: pointer;
					padding: 4px;
					border-radius: 4px;
				}

				.header-button:hover {
					background: rgba(255, 255, 255, 0.1);
				}

				.chat-messages {
					height: 400px;
					overflow-y: auto;
					padding: 15px;
					display: flex;
					flex-direction: column;
					gap: 10px;
				}

				.message {
					max-width: 80%;
					padding: 10px;
					border-radius: 8px;
					margin: 2px 0;
				}

				.message.user {
					background: #2563eb;
					color: white;
					align-self: flex-end;
				}

				.message.admin {
					background: #f3f4f6;
					color: #1f2937;
					align-self: flex-start;
				}

				.message .time {
					font-size: 12px;
					opacity: 0.8;
					margin-top: 4px;
				}

				.chat-input {
					padding: 15px;
					border-top: 1px solid #e5e7eb;
				}

				.input-container {
					display: flex;
					gap: 8px;
				}

				.message-input {
					flex: 1;
					padding: 8px 12px;
					border: 1px solid #e5e7eb;
					border-radius: 6px;
					outline: none;
				}

				.message-input:focus {
					border-color: #2563eb;
					box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
				}

				.send-button {
					background: #2563eb;
					color: white;
					border: none;
					padding: 8px 16px;
					border-radius: 6px;
					cursor: pointer;
					transition: background-color 0.2s;
				}

				.send-button:hover {
					background: #1d4ed8;
				}

				.chat-toggle {
					position: fixed;
					bottom: 20px;
					right: 20px;
					background: #2563eb;
					color: white;
					width: 50px;
					height: 50px;
					border-radius: 50%;
					border: none;
					cursor: pointer;
					display: flex;
					align-items: center;
					justify-content: center;
					box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
					transition: background-color 0.2s;
				}

				.chat-toggle:hover {
					background: #1d4ed8;
				}

				.minimized {
					height: auto;
				}

				.minimized .chat-messages,
				.minimized .chat-input {
					display: none;
				}
		</style>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body>

  
	<div class="chat-widget">
		<div class="chat-header">
			<h3>Chat with us</h3>
			<div class="header-buttons">
				<button class="header-button minimize-btn">
					<svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
					</svg>
				</button>
				<button class="header-button close-btn">
					<svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
					</svg>
				</button>
			</div>
		</div>
		<div class="chat-messages"></div>
		<div class="chat-input">
			<div class="input-container">
				<input type="text" class="message-input" placeholder="Type your message...">
				<button class="send-button">
					<svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
					</svg>
				</button>
			</div>
		</div>
	</div>
	<button class="chat-toggle">
		<svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
		</svg>
	</button>

	<script>
		class ChatWidget {
			constructor() {
				this.widget = document.querySelector('.chat-widget');
				this.toggleBtn = document.querySelector('.chat-toggle');
				this.closeBtn = document.querySelector('.close-btn');
				this.minimizeBtn = document.querySelector('.minimize-btn');
				this.sendBtn = document.querySelector('.send-button');
				this.messageInput = document.querySelector('.message-input');
				this.messagesContainer = document.querySelector('.chat-messages');
				
				this.isMinimized = false;
				this.sessionId = this.getOrCreateSessionId();
				
				// Load chat history from localStorage
				this.loadChatHistory();
				this.initializeEventListeners();
				
				// Poll for new messages every 3 seconds
				setInterval(() => this.checkNewMessages(), 3000);
			}

			getOrCreateSessionId() {
				let sessionId = localStorage.getItem('currentChatSession');
				if (!sessionId) {
					sessionId = 'chat_' + Date.now();
					localStorage.setItem('currentChatSession', sessionId);
					localStorage.setItem(sessionId, JSON.stringify({
						messages: [],
						lastChecked: new Date().toISOString()
					}));
				}
				return sessionId;
			}

			initializeEventListeners() {
				this.toggleBtn.addEventListener('click', () => this.toggleChat());
				this.closeBtn.addEventListener('click', () => this.closeChat());
				this.minimizeBtn.addEventListener('click', () => this.minimizeChat());
				this.sendBtn.addEventListener('click', () => this.sendMessage());
				this.messageInput.addEventListener('keypress', (e) => {
					if (e.key === 'Enter') this.sendMessage();
				});

				window.addEventListener('storage', (e) => {
					if (e.key === this.sessionId) {
						this.loadChatHistory();
					}
				});
			}

			toggleChat() {
				this.widget.classList.toggle('open');
				if (this.widget.classList.contains('open')) {
					this.toggleBtn.style.display = 'none';
					this.messageInput.focus();
				} else {
					this.toggleBtn.style.display = 'flex';
				}
			}

			closeChat() {
				this.widget.classList.remove('open');
				this.toggleBtn.style.display = 'flex';
				this.widget.classList.remove('minimized');
				this.isMinimized = false;
			}

			minimizeChat() {
				this.isMinimized = !this.isMinimized;
				this.widget.classList.toggle('minimized');
				this.minimizeBtn.innerHTML = this.isMinimized ? 
					'<svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/></svg>' :
					'<svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/></svg>';
			}

			sendMessage() {
				const text = this.messageInput.value.trim();
				if (!text) return;

				const message = {
					text,
					sender: 'user',
					timestamp: new Date().toISOString()
				};

				const chatData = JSON.parse(localStorage.getItem(this.sessionId));
				chatData.messages.push(message);
				localStorage.setItem(this.sessionId, JSON.stringify(chatData));

				this.messageInput.value = '';
				this.loadChatHistory();
			}

			checkNewMessages() {
				const chatData = JSON.parse(localStorage.getItem(this.sessionId));
				if (chatData) {
					this.loadChatHistory();
				}
			}

			loadChatHistory() {
				const chatData = JSON.parse(localStorage.getItem(this.sessionId));
				if (!chatData) return;

				this.messagesContainer.innerHTML = '';
				chatData.messages.forEach(message => {
					const messageEl = document.createElement('div');
					messageEl.className = `message ${message.sender}`;
					messageEl.innerHTML = `
						${message.text}
						<div class="time">${new Date(message.timestamp).toLocaleTimeString()}</div>
					`;
					this.messagesContainer.appendChild(messageEl);
				});

				this.scrollToBottom();
			}

			scrollToBottom() {
				this.messagesContainer.scrollTop = this.messagesContainer.scrollHeight;
			}
		}

		// Initialize the chat widget
		const chatWidget = new ChatWidget();
	</script>




<a href="https://wa.me/+14302485763" class="whatsapp-btn" target="_blank">
    <svg class="whatsapp-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
    </svg>
</a>

	<div class="banner-section-photo">
		<div data-w-id="cc582f0b-75ba-d7bd-9fe3-5b2888ed64e5" style="opacity:0" class="banner-content-container">
			<h1 data-w-id="cc582f0b-75ba-d7bd-9fe3-5b2888ed64e6" style="opacity:0" class="home-title">Your Gateway to a Seamless Immigration</h1>
			<p data-w-id="cc582f0b-75ba-d7bd-9fe3-5b2888ed64e8" style="opacity:0" class="home-main-banner-discription">We're here to guide you every step of the way. Our experienced team of experts is dedicated to making your journey to a new country as smooth and stress-free as possible.</p>
			<div data-w-id="cc582f0b-75ba-d7bd-9fe3-5b2888ed64ea" style="opacity:0" class="buttons-wrapper"><a href="/apply" class="primary-button w-button">Start Application</a></div>
		</div>
		<div class="banner-numbers-wrapper">
			<div data-w-id="26438732-168a-0ab6-1fa0-8136b2be6fd3" style="opacity:0" class="w-layout-grid working-numbers">
				<div id="w-node-_26438732-168a-0ab6-1fa0-8136b2be6fd4-296c1808" class="working-wrap">
					<div class="numbers">15+</div>
					<div class="numbers-text">Years of experience</div>
				</div>
				<div id="w-node-_26438732-168a-0ab6-1fa0-8136b2be6fd9-296c1808" class="working-wrap">
					<div class="numbers">84k</div>
					<div class="numbers-text">Clients worldwide</div>
					<div class="line home-left"></div>
				</div>
				<div id="w-node-_48eac35b-e7e0-1de8-62b8-5955fbdf00a1-296c1808" class="working-wrap">
					<div class="numbers">98%</div>
					<div class="numbers-text">Success rate</div>
					<div class="line home-left"></div>
				</div>
				<div id="w-node-_26438732-168a-0ab6-1fa0-8136b2be6fe0-296c1808" class="working-wrap">
					<div class="numbers">28k</div>
					<div class="numbers-text">Visa issued</div>
					<div class="line home-left"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="base-container w-container">



			<div data-w-id="79dde125-9563-15e5-e4b5-3cc61529d4ee" style="opacity:0" class="two-column-wrapper">


				<div data-w-id="79dde125-9563-15e5-e4b5-3cc61529d4ef" style="opacity:0" class="column-two">



					<div data-w-id="d7fad506-dc1b-9a2d-881c-c66be3dfdf24" style="opacity:0" class="subtitle-text">Visa Solutions</div>
					<h2 class="in-section-title">Citizenship By Investment</h2>
					<p class="no-margin">Citizenship by investment (CBI) is a program offered by certain countries that allows foreign individuals to acquire citizenship in exchange for a significant investment in the host country. These programs are designed to attract foreign capital, stimulate economic development, and enhance international relations.</p>
					<div class="button-wrapper"><a href="/investment" class="primary-button dark w-button">Explore more</a>
						<div class="clients-pics-wrapp">
							<div class="avatars-wrapper"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18b0_Member-Photo-Close-up-10.jpg" loading="lazy" alt="avatars image" class="avatars-image" /><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18bd_Member-Photo-Close-up-6.jpg" loading="lazy" alt="avatars image" class="avatars-image" /><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18a9_Member-Photo-Close-up-3.jpg" loading="lazy" alt="avatars image" class="avatars-image" /><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/651f2c08c5bd81eb296c18a7_Member-Photo-Close-up-14.jpg" loading="lazy" alt="avatars image" class="avatars-image last-item" /></div>
							<div class="clients-subtitle">Trusted by 86k+ clients</div>
						</div>
					</div>
				</div>
				<div data-w-id="79dde125-9563-15e5-e4b5-3cc61529d4fc" style="opacity:0" class="column-one"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/652844c535ce8f641b2876fb_pexels-andrea-piacquadio-3764021.webp" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1279px) 45vw, (max-width: 1919px) 535px, 635px" srcset="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/652844c535ce8f641b2876fb_pexels-andrea-piacquadio-3764021-p-500.webp 500w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/652844c535ce8f641b2876fb_pexels-andrea-piacquadio-3764021.webp 640w" alt="Photo" class="about-block-image" /></div>
			</div>
		</div>
	</div>
	<div class="section dark-bg-with-elements">
		<div data-w-id="d03afa7b-178b-130c-5474-5296fe619760" style="opacity:0" class="base-container w-container">
			<div class="span-quote-wrapper">
				<div data-w-id="7169aa2b-55fc-4524-9433-39e5d34a5bd6" style="opacity:0" class="subtitle-text">Are you eligible? Check now.</div>
				<h2 data-w-id="bc3d9571-f863-4bdb-631d-2c62440fb61f" style="opacity:0" class="span-quote">Our experienced team of immigration experts is dedicated to making your journey to a new country as smooth and stress-free as possible.</h2>
			</div>
			<div data-w-id="16fe514a-4a9c-44f4-3823-0768316358ec" style="opacity:0" class="buttons-wrapper"><a href="/about" class="primary-button w-button">Check Eligibility</a></div>
		</div>
	</div>
	<div class="section without-bottom-spacing"><div class="base-container w-container"><div class="w-layout-grid work-coach"><div id="w-node-e423d1b1-02c4-b0d6-9039-82433fcc6667-296c1808" data-w-id="e423d1b1-02c4-b0d6-9039-82433fcc6667" style="opacity: 0;"><h2 data-w-id="e423d1b1-02c4-b0d6-9039-82433fcc6669" style="opacity: 0;" class="in-section-title">Core Services</h2><p data-w-id="e423d1b1-02c4-b0d6-9039-82433fcc666b" style="opacity: 0;" class="services-description">Contact us to schedule a consultation and take the first step toward making your dream of living in a new country a reality.</p><div data-w-id="9b9dd8e4-aa48-b210-245b-5519631af685" style="opacity: 0;" class="button-wrapper"><a href="/services" class="primary-button dark">Explore all</a></div></div><div id="w-node-_65a662c7-04b5-15a4-72a0-b5b3fdf07eaf-296c1808" class="collection-list-wrapper-services w-dyn-list"><div role="list" class="collection-list-services w-dyn-items"><div role="listitem" class="collection-item-services w-dyn-item"><div data-w-id="65a662c7-04b5-15a4-72a0-b5b3fdf07eb2" style="background-image: url(&quot;https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652ea6d6583f67a8de3fa46e_pexels-keira-burton-6146978.jpg&quot;); opacity: 0;" class="work-wrapper"><img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652db2fc45a71830e136ff99_fi_3022243.svg" alt="" class="icon-work"><a href="/visa/temporary-visa" class="w-inline-block"><h5 class="services-titles">Temporary Visa</h5></a><p class="service-item-description">From filling out application forms to gathering supporting documents, we assist you in completing the visa application accurately</p><div class="button-wrapper smaller-spacing"><a href="/visa/temporary-visa" class="link-with-arrow-underline white-style">Learn more</a></div><div class="dark-overlay"></div></div></div></div></div><div id="w-node-_5d7f81dd-3082-2010-06ea-60427df78cf2-296c1808" class="collection-list-wrapper-services w-dyn-list"><div role="list" class="collection-list-services w-dyn-items"><div role="listitem" class="collection-item-services w-dyn-item"><div data-w-id="5d7f81dd-3082-2010-06ea-60427df78cf5" style="background-image: url(&quot;https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65286fb263f107046ea7900e_nicole-geri-gMJ3tFOLvnA-unsplash.jpg&quot;); opacity: 0;" class="work-wrapper"><img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/6528915357f15ad2b94de740_visa.svg" alt="" class="icon-work"><a href="/visa/study-visa" class="w-inline-block"><h5 class="services-titles">Study Visa Application</h5></a><p class="service-item-description">From filling out application forms to gathering supporting documents, we assist you in completing the visa application accurately</p><div class="button-wrapper smaller-spacing"><a href="/visa/study-visa" class="link-with-arrow-underline white-style">Learn more</a></div><div class="dark-overlay"></div></div></div></div></div><div id="w-node-_7c5488ea-0d30-2f2e-a337-1d3df6b31c42-296c1808" class="collection-list-wrapper-services w-dyn-list"><div role="list" class="collection-list-services w-dyn-items"><div role="listitem" class="collection-item-services w-dyn-item"><div data-w-id="7c5488ea-0d30-2f2e-a337-1d3df6b31c45" style="background-image: url(&quot;https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652891bd3236320ae1f0b84c_pexels-oleksandr-p-1008155.jpg&quot;); opacity: 0;" class="work-wrapper"><img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/6528916057f15ad2b94df35b_relocation.svg" alt="" class="icon-work"><a href="/visa/investment-visa" class="w-inline-block"><h5 class="services-titles">Citizenship through Investment</h5></a><p class="service-item-description">Investing in a second citizenship can offer various benefits, including better global mobility, a Plan B for the family, better quality of life and businesses opportunities among many more.</p><div class="button-wrapper smaller-spacing"><a href="/visa/investment-visa" class="link-with-arrow-underline white-style">Learn more</a></div><div class="dark-overlay"></div></div></div></div></div>
	
	
	<div id="w-node-fb7b6a25-057e-7357-a393-8453d9c0ef32-296c1808" class="collection-list-wrapper-services w-dyn-list"><div role="list" class="collection-list-services w-dyn-items"><div role="listitem" class="collection-item-services w-dyn-item"><div data-w-id="fb7b6a25-057e-7357-a393-8453d9c0ef35" style="background-image: url(&quot;https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652891e0a6170d2717dd7e55_pexels-vlada-karpovich-7368310.jpg&quot;); opacity: 0;" class="work-wrapper"><img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652891689ec9911fdd305464_immigration.svg" alt="" class="icon-work"><a href="/visa/work-visa" class="w-inline-block"><h5 class="services-titles">Work Visa</h5></a><p class="service-item-description">We create personalized immigration strategies that align with your long-term objectives, considering different factors</p><div class="button-wrapper smaller-spacing"><a href="/visa/work-visa" class="link-with-arrow-underline white-style">Learn more</a></div><div class="dark-overlay"></div></div></div></div></div>


<div id="w-node-fb7b6a25-057e-7357-a393-8453d9c0ef32-296c1808" class="collection-list-wrapper-services w-dyn-list"><div role="list" class="collection-list-services w-dyn-items"><div role="listitem" class="collection-item-services w-dyn-item"><div data-w-id="fb7b6a25-057e-7357-a393-8453d9c0ef35" style="background-image: url(&quot;https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652d84ffc6c49e94d80bf51b_pexels-anaid-alca%CC%81ntara-mora%CC%81n-12334457.jpg&quot;); opacity: 0;" class="work-wrapper"><img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652891689ec9911fdd305464_immigration.svg" alt="" class="icon-work"><a href="/visa/family-visa" class="w-inline-block"><h5 class="services-titles">Family Visa</h5></a><p class="service-item-description">Ready to reunite with your family and create lasting memories? Contact our team of experts to assist you with the family visa application process and bring your family closer than ever.</p><div class="button-wrapper smaller-spacing"><a href="/visa/work-visa" class="link-with-arrow-underline white-style">Learn more</a></div><div class="dark-overlay"></div></div></div></div></div>


<div id="w-node-bf82eb32-4ca6-1452-57f4-b6426d6d6968-296c1808" class="collection-list-wrapper-services w-dyn-list"><div role="list" class="collection-list-services w-dyn-items"><div role="listitem" class="collection-item-services w-dyn-item"><div data-w-id="bf82eb32-4ca6-1452-57f4-b6426d6d696b" style="background-image: url(&quot;https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/652892299ec9911fdd311500_pexels-cytonn-photography-955389.jpg&quot;); opacity: 0;" class="work-wrapper"><img loading="lazy" src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65289172057200ddd4f42749_documents.svg" alt="" class="icon-work"><a href="/visa/permanent-visa" class="w-inline-block"><h5 class="services-titles">Permanent Resident</h5></a><p class="service-item-description">Our team meticulously reviews all your documents to ensure they meet the specific requirements of the immigration authorities</p><div class="button-wrapper smaller-spacing"><a href="/visa/permanent-visa" class="link-with-arrow-underline white-style">Learn more</a></div><div class="dark-overlay"></div></div></div></div></div></div></div></div>


	<div class="section">
		<div class="base-container w-container">
			<div class="w-layout-grid advantages-wrapper">
				<div id="w-node-c651ba22-4432-547d-7cd0-369831cf9fba-296c1808" class="left-advatages-content">
					<div data-w-id="c651ba22-4432-547d-7cd0-369831cf9fbb" style="opacity:0" class="advantages-wrap">
						<div class="heading-advantages">
							<h5>Initial Consultation and Assessment</h5>
							<div class="number">01</div>
						</div>
						<p class="small-paragraph _w-95">Our experienced team of immigration experts is dedicated to making your journey to a new country stress-free.<br /></p>
					</div>
					<div data-w-id="c651ba22-4432-547d-7cd0-369831cf9fc3" style="opacity:0" class="advantages-wrap center">
						<div class="heading-advantages">
							<h5 class="white-text">Personalized Guidance and Support</h5>
							<div class="number white-text">02</div>
						</div>
						<p class="small-paragraph white-w-95">Our experienced team of immigration experts is dedicated to making your journey to a new country stress-free.<br /></p>
					</div>
					<div data-w-id="c651ba22-4432-547d-7cd0-369831cf9fcb" style="opacity:0" class="advantages-wrap">
						<div class="heading-advantages">
							<h5>Ongoing Follow-Up and Assistance</h5>
							<div class="number">03</div>
						</div>
						<p class="small-paragraph _w-95">Our experienced team of immigration experts is dedicated to making your journey to a new country stress-free.<br /></p>
					</div>
				</div>
				<div id="w-node-c651ba22-4432-547d-7cd0-369831cf9fd3-296c1808" class="right-advantages-content">
					<div data-w-id="c651ba22-4432-547d-7cd0-369831cf9fd4" style="opacity:0" class="subtitle-text">Advantages</div>
					<h2 data-w-id="c651ba22-4432-547d-7cd0-369831cf9fd6" style="opacity:0" class="in-section-title">Ready to embark on your journey?</h2>
					<p data-w-id="c651ba22-4432-547d-7cd0-369831cf9fd8" style="opacity:0">We provide comprehensive consultations to help you determine the most suitable visa option based on your unique circumstances and goals. Our experts will assess your eligibility and guide you through the necessary requirements.<br /></p>
					<div data-w-id="c651ba22-4432-547d-7cd0-369831cf9fda" style="opacity:0" class="button-wrapper"><a href="/contact-us-1" class="primary-button dark">Get a Free Consultation</a></div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	<section><a href="#" data-w-id="c73a01a8-5d91-43b1-39f4-ccd8101f27e3" style="opacity:0" class="video-big w-inline-block w-lightbox">
			<div data-w-id="c73a01a8-5d91-43b1-39f4-ccd8101f27e4" style="opacity:0" class="video-content-wrapper">
				<div data-w-id="c73a01a8-5d91-43b1-39f4-ccd8101f27e5" style="opacity:0" class="video-content">
					<h2 class="in-section-title text-white">guiding your every step</h2>
					<p class="text-white">Our experienced team of immigration experts is dedicated to making your journey to a new country as smooth and stress-free as possible. Your trusted partner in this exciting venture.</p>
				</div>
				<div data-w-id="c73a01a8-5d91-43b1-39f4-ccd8101f27ea" style="opacity:0" class="video-button-wrapper">
					<div href="#" data-w-id="c73a01a8-5d91-43b1-39f4-ccd8101f27eb" class="btn-circle-big">
						<div class="clip">
							<div style="-webkit-transform:translate3d(0%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button-icon"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/6526bde578717103f92b5b9a_play-icon.svg" loading="lazy" alt="icon" class="icon-bottom big" /></div>
							<div class="button-icon button-icon-top"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/6526bde578717103f92b5b9a_play-icon.svg" loading="lazy" alt="icon" class="icon-bottom big" /></div>
						</div>
					</div>
				</div>
			</div>
			<script type="application/json" class="w-json">
				{
					"items": [{
						"url": "https://www.youtube.com/watch?v=KGg5cIjHQiw",
						"originalUrl": "https://www.youtube.com/watch?v=KGg5cIjHQiw",
						"width": 940,
						"height": 528,
						"thumbnailUrl": "https://i.ytimg.com/vi/KGg5cIjHQiw/hqdefault.jpg",
						"html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FKGg5cIjHQiw%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DKGg5cIjHQiw&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FKGg5cIjHQiw%2Fhqdefault.jpg&key=c4e54deccf4d4ec997a64902e9a30300&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
						"type": "video"
					}],
					"group": ""
				}
			</script>
		</a></section>
		
		
		
		
		<div class="section without-bottom-spacing"><div class="base-container w-container"><div data-w-id="614f7888-cf3e-ac83-11f4-d5dafffde3b1" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="section-title-wrapper"><h2 data-w-id="614f7888-cf3e-ac83-11f4-d5dafffde3b4" style="opacity: 1;" class="section-title">Free Immigration Tools</h2><p data-w-id="1dd03005-6239-6c9a-3e71-f8c234250373" style="opacity: 1;" class="section-title-description">Employ our free immigration AI powered tools to aid your decision making and all speed up the entire process.</p></div><div class="career-collection-list-wrapper w-dyn-list"><div data-w-id="14575070-ad1d-e0ec-9d2a-5a9130234613" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" role="list" class="collection-list w-dyn-items"><div data-w-id="14575070-ad1d-e0ec-9d2a-5a9130234614" style="opacity: 1;" role="listitem" class="career-list-item-wrapper w-dyn-item"><a href="/services/crs/" class="career-position-wrapper w-inline-block"><div class="career-title-mobile">Comprehensive Ranking System</div><h6 class="career-position">CRS Calculator</h6></a><div class="career-button-wrapper"><a href="/services/crs/" class="primary-button">Use now</a></div></div><div data-w-id="14575070-ad1d-e0ec-9d2a-5a9130234614" style="opacity: 1;" role="listitem" class="career-list-item-wrapper w-dyn-item"><a href="/services/processing-times/" class="career-position-wrapper w-inline-block"><div class="career-title-mobile">IRCC's Canadian Immigration Processing Times</div><h6 class="career-position">Processing Times</h6></a><div class="career-button-wrapper"><a href="/services/processing-times" class="primary-button">Use now</a></div></div><div data-w-id="14575070-ad1d-e0ec-9d2a-5a9130234614" style="opacity: 1;" role="listitem" class="career-list-item-wrapper w-dyn-item"><a href="/services/salary-calculator/" class="career-position-wrapper w-inline-block"><div class="career-title-mobile">Canadian Jobs Salary Calculator Tool</div><h6 class="career-position">Salary Calculator</h6><div class="career-button-wrapper"><a href="/services/salary-calculator/" class="primary-button">Apply now</a></div></div></div></div></div></div>




		
			<h2 data-w-id="c651ba22-4432-547d-7cd0-369831cf9fd6" style="margin-right: auto; margin-left: 30px;margin-top: 20px;opacity:0" class="in-section-title">Sponsors</h2>
		<div class="centerr">
		

		<div class="carousel-container">
			<div class="carousel">
				<div class="carousel-slide" id="carousel-slide">
					<img src="https://gatewayimmigrationlawfirm.ca/wp-content/uploads/2024/06/s11-300x300.jpg" alt="Image 1">
					<img src="https://gatewayimmigrationlawfirm.ca/wp-content/uploads/2024/06/s9-300x300.jpg" alt="Image 2">
					<img src="https://gatewayimmigrationlawfirm.ca/wp-content/uploads/2024/06/s7-300x300.jpg" alt="Image 3">
					<img src="https://gatewayimmigrationlawfirm.ca/wp-content/uploads/2024/06/s6-300x300.jpg" alt="Image 4">
					<img src="https://gatewayimmigrationlawfirm.ca/wp-content/uploads/2024/06/s5-300x300.jpg" alt="Image 5">
				</div>
			</div>
			<button class="prev" onclick="prevSlide()">❮</button>
			<button class="next" onclick="nextSlide()">❯</button>
		</div>

</div>







	<div class="section hidden without-bottom-spacing">
		<div class="base-container w-container">
			<div data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe5f" style="opacity:0" class="two-column-wrapper">
				<div data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe60" style="opacity:0" class="column-two team-info-block">
					<div data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe61" style="opacity:0" class="subtitle-text">Our Team</div>
					<h2 data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe63" style="opacity:0" class="in-section-title">Expert Guidance for Seamless Visa Solutions</h2>
					<p data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe65" style="opacity:0" class="no-margin">We understand that navigating the complex world of visas and immigration can be a daunting task. We're here to simplify the process and guide you every step of the way.</p>
					<ul data-w-id="be3bfaf1-b183-4032-cbf5-557e718db0e9" style="opacity:0" role="list" class="list-home">
						<li class="home-list-item"><span class="check-icon-in-list">o</span>Years of experience in the field</li>
						<li class="home-list-item"><span class="check-icon-in-list">o</span>Your needs are our priority</li>
						<li class="home-list-item"><span class="check-icon-in-list">o</span>We maintain transparent communication</li>
					</ul>
					<div data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe67" style="opacity:0" class="button-wrapper"><a href="/our-team" class="primary-button dark w-button">Show All Members</a></div>
				</div>
				<div data-w-id="47d52f3b-428a-c3be-0d96-1bc86862fe72" style="opacity:0" class="column-one">
					<div class="w-layout-grid team-grid-home">
						<div id="w-node-_697c8dcf-2b12-5bb5-badf-64e22c5789fd-296c1808" data-w-id="697c8dcf-2b12-5bb5-badf-64e22c5789fd" style="opacity:0" class="team-card"><img src="https://kelenservicesca.com/images/kerry.jpg" loading="lazy" sizes="(max-width: 479px) 41vw, (max-width: 1279px) 130px, (max-width: 1919px) 160px, 180px" srcset="https://kelenservicesca.com/images/kerry.jpg 500w, https://kelenservicesca.com/images/kerry.jpg 548w" alt="Photo" class="team-card-image" />
							<div class="team-card-content-wrapper">
								<h6>Kerry Molitor</h6>
								<p class="team-member-position">CEO</p>
							</div>
						</div>
						<div id="w-node-_697c8dcf-2b12-5bb5-badf-64e22c578a04-296c1808" data-w-id="697c8dcf-2b12-5bb5-badf-64e22c578a04" style="opacity:0" class="team-card"><img src="https://kelenservicesca.com/images/mary.jpg" loading="lazy" sizes="(max-width: 479px) 41vw, (max-width: 1279px) 130px, (max-width: 1919px) 160px, 180px" srcset="https://kelenservicesca.com/images/mary.jpg 500w, https://kelenservicesca.com/images/mary.jpg 600w" alt="photo" class="team-card-image" />
							<div class="team-card-content-wrapper">
								<h6>Mary Robinson</h6>
								<p class="team-member-position">Director</p>
							</div>
						</div>
						<div id="w-node-_697c8dcf-2b12-5bb5-badf-64e22c578a0b-296c1808" data-w-id="697c8dcf-2b12-5bb5-badf-64e22c578a0b" style="opacity:0" class="team-card"><img src="https://kelenservicesca.com/images/george.jpg" loading="lazy" alt="Photo" class="team-card-image" />
							<div class="team-card-content-wrapper">
								<h6>George Seamaan</h6>
								<p class="team-member-position">Member</p>
							</div>
						</div>
					<div id="w-node-_697c8dcf-2b12-5bb5-badf-64e22c578a0b-296c1808" data-w-id="697c8dcf-2b12-5bb5-badf-64e22c578a0b" style="opacity:0" class="team-card"><img src="https://kelenservicesca.com/images/patrick.jpg" loading="lazy" alt="Photo" class="team-card-image" />
							<div class="team-card-content-wrapper">
								<h6>Patrick Mandell</h6>
								<p class="team-member-position">Member</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section without-bottom-spacing">
		<div class="base-container w-container">
			<div data-w-id="7b89dfed-5942-06e2-a889-af99f8d53b8d" style="opacity:0" class="countries-block-wrapper">
				<div data-w-id="7b89dfed-5942-06e2-a889-af99f8d53ba5" style="opacity:0" class="countries-column-one"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/65285de130d7cf7ae7de9be8_pexels-andre-furtado-2916826.webp" loading="lazy" sizes="(max-width: 479px) 81vw, (max-width: 767px) 88vw, (max-width: 991px) 91vw, (max-width: 1279px) 36vw, (max-width: 1919px) 441px, 562.5px" srcset="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/65285de130d7cf7ae7de9be8_pexels-andre-furtado-2916826-p-500.webp 500w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/65285de130d7cf7ae7de9be8_pexels-andre-furtado-2916826-p-800.webp 800w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/65285de130d7cf7ae7de9be8_pexels-andre-furtado-2916826-p-1080.webp 1080w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/65285de130d7cf7ae7de9be8_pexels-andre-furtado-2916826.webp 1280w" alt="Photo" class="countries-block-image" /></div>
				<div data-w-id="7b89dfed-5942-06e2-a889-af99f8d53b8e" style="opacity:0" class="countries-column-two">
					<div class="subtitle-text">Countries</div>
					<h2 class="in-section-title text-white">See The countries supported for immigration<br /></h2>
					<p class="no-margin text-white">We create personalized immigration strategies that align with your long-term objectives, considering factors such as education, employment, family reunification, or business opportunities in your desired destination.</p>
					
					
					
					<div class="button-wrapper"><a href="/countries" class="primary-button w-button">Learn details</a></div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<div class="section without-bottom-spacing">
		<div class="base-container w-container">
			<div class="section-title-wrapper">
				<div data-w-id="7eda39f8-72e1-8587-ed07-51f72d479399" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="subtitle-text">FAQ</div>
				<h2 data-w-id="f8941fc1-dca9-9a98-a8e4-d81f5318ed5d" style="opacity: 1;" class="section-title">The most common questions</h2>
			</div>
			<div data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b28" class="accordion-wrapper" style="opacity: 1;">
				<div class="accordion-wrap">
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b2a" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-4" aria-controls="w-dropdown-list-4" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">What is a visa?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-4" aria-labelledby="w-dropdown-toggle-4" style="height: 0px;">
							<p class="accordion-list-content">A visa is an official document issued by a government that allows an individual to enter, exit, or stay in a specific country for a predetermined period and purpose.</p>
						</nav>
					</div>
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b33" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-5" aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">How do I know which type of visa I need?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-5" aria-labelledby="w-dropdown-toggle-5" style="height: 0px;">
							<p class="accordion-list-content">The type of visa you need depends on your purpose of travel—tourism, work, study, family reunion, etc. Our experts can assist you in determining the most suitable visa for your situation.</p>
						</nav>
					</div>
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b3c" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-6" aria-controls="w-dropdown-list-6" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">What are the common requirements for a visa application?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-6" aria-labelledby="w-dropdown-toggle-6" style="height: 0px;">
							<p class="accordion-list-content">Common requirements include a valid passport, completed application form, passport-sized photographs, flight itinerary, hotel reservations, financial statements, and purpose-specific documents (e.g., invitation letters, employment letters).</p>
						</nav>
					</div>
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b45" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-7" aria-controls="w-dropdown-list-7" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">How long does it take to process a visa application?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-7" aria-labelledby="w-dropdown-toggle-7" style="height: 0px;">
							<p class="accordion-list-content">Visa processing times vary by country and type of visa. It can range from a few days to several weeks. Applying well in advance of your planned travel dates is advisable.</p>
						</nav>
					</div>
				</div>
				<div class="accordion-wrap last-child">
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b4f" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-8" aria-controls="w-dropdown-list-8" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">Can I apply for a visa online?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-8" aria-labelledby="w-dropdown-toggle-8" style="height: 0px;">
							<p class="accordion-list-content">Some countries offer online visa application systems, while others require in-person or postal applications. We can guide you on the appropriate application method for your chosen destination.</p>
						</nav>
					</div>
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b58" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-9" aria-controls="w-dropdown-list-9" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">What should I do if my visa application is denied?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-9" aria-labelledby="w-dropdown-toggle-9" style="height: 0px;">
							<p class="accordion-list-content">If your application is denied, you may reapply with updated information or appeal the decision. Understanding the rejection reasons is crucial to rectify any issues before reapplying.</p>
						</nav>
					</div>
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b61" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-10" aria-controls="w-dropdown-list-10" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">Can I apply for a visa without confirmed travel plans?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-10" aria-labelledby="w-dropdown-toggle-10" style="height: 0px;">
							<p class="accordion-list-content">Yes, you can apply for a visa without confirmed travel plans. However, providing a tentative itinerary or explaining your travel intentions may enhance your application.</p>
						</nav>
					</div>
					<div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b6a" class="accordion-item w-dropdown">
						<div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-11" aria-controls="w-dropdown-list-11" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
							<h6 class="accordion-title" style="color: rgb(14, 14, 14);">Is it necessary to have travel insurance for a visa?</h6>
							<div class="accordion-icon" style="color: rgb(14, 14, 14); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
						</div>
						<nav class="accordion-list w-dropdown-list" id="w-dropdown-list-11" aria-labelledby="w-dropdown-toggle-11" style="height: 0px;">
							<p class="accordion-list-content">While it may not always be mandatory, having travel insurance is highly recommended to cover unexpected events during your trip, such as medical emergencies or trip cancellations.</p>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="section without-bottom-spacing">
		<div class="base-container w-container">
			<div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76010" style="opacity:0" class="section-title-wrapper">
				<h2 class="section-title">Latest news</h2>
				<p>We're here to guide you every step of the way. Our experienced team of experts is dedicated to making your journey to a new country as smooth and stress-free as possible.</p>
			</div>
			<div class="home-blog-collection w-dyn-list">
				<div role="list" class="home-blog-list w-dyn-items">
					<div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76017" style="opacity:0" role="listitem" class="home-blog-item w-dyn-item">
						<article class="home-blog-wrapper"><a href="/blog-posts/understanding-immigration-policies" class="home-blog-image w-inline-block"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285cd1be5ecd0018f1f401_pexels-ketut-subiyanto-4245905.jpg" loading="lazy" alt="photo" sizes="(max-width: 479px) 30vw, (max-width: 1279px) 31vw, (max-width: 1919px) 372.046875px, 435.65625px" srcset="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285cd1be5ecd0018f1f401_pexels-ketut-subiyanto-4245905-p-500.jpg 500w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285cd1be5ecd0018f1f401_pexels-ketut-subiyanto-4245905-p-800.jpg 800w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285cd1be5ecd0018f1f401_pexels-ketut-subiyanto-4245905-p-1080.jpg 1080w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285cd1be5ecd0018f1f401_pexels-ketut-subiyanto-4245905-p-1600.jpg 1600w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285cd1be5ecd0018f1f401_pexels-ketut-subiyanto-4245905.jpg 1920w" class="blog-grid-image" /></a>
							<div class="home-blog-content">
								<div><a href="/blog-posts/understanding-immigration-policies" class="w-inline-block">
										<h6 class="blog-post-title">Understanding Immigration Policies</h6>
									</a>
									<p class="no-margin">We debunk myths surrounding visas, providing accurate information to help you make informed decisions.</p>
								</div>
								<div class="button-wrapper smaller-spacing"><a href="/blog-posts/understanding-immigration-policies" class="link-with-arrow-underline">Read full post</a></div>
							</div><a href="/posts-categories/immigration" class="home-blog-category">Immigration</a>
						</article>
					</div>
					<div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76017" style="opacity:0" role="listitem" class="home-blog-item w-dyn-item">
						<article class="home-blog-wrapper"><a href="/blog-posts/smooth-visa-application-process" class="home-blog-image w-inline-block"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c8e35e6881190af2574_pexels-dominika-roseclay-1252500.jpg" loading="lazy" alt="photo" sizes="(max-width: 479px) 30vw, (max-width: 1279px) 31vw, (max-width: 1919px) 372.046875px, 435.65625px" srcset="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c8e35e6881190af2574_pexels-dominika-roseclay-1252500-p-500.jpg 500w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c8e35e6881190af2574_pexels-dominika-roseclay-1252500-p-800.jpg 800w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c8e35e6881190af2574_pexels-dominika-roseclay-1252500-p-1080.jpg 1080w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c8e35e6881190af2574_pexels-dominika-roseclay-1252500-p-1600.jpg 1600w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c8e35e6881190af2574_pexels-dominika-roseclay-1252500.jpg 1920w" class="blog-grid-image" /></a>
							<div class="home-blog-content">
								<div><a href="/blog-posts/smooth-visa-application-process" class="w-inline-block">
										<h6 class="blog-post-title">Smooth Visa Application Process</h6>
									</a>
									<p class="no-margin">We debunk myths surrounding visas, providing accurate information to help you make informed decisions.</p>
								</div>
								<div class="button-wrapper smaller-spacing"><a href="/blog-posts/smooth-visa-application-process" class="link-with-arrow-underline">Read full post</a></div>
							</div><a href="/posts-categories/visa" class="home-blog-category">Visa</a>
						</article>
					</div>
					<div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76017" style="opacity:0" role="listitem" class="home-blog-item w-dyn-item">
						<article class="home-blog-wrapper"><a href="/blog-posts/choose-right-visa-for-your-journey" class="home-blog-image w-inline-block"><img src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c7458160bda3b078c91_pexels-kampus-production-6181092.jpg" loading="lazy" alt="photo" sizes="(max-width: 479px) 30vw, (max-width: 1279px) 31vw, (max-width: 1919px) 372.046875px, 435.65625px" srcset="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c7458160bda3b078c91_pexels-kampus-production-6181092-p-500.jpg 500w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c7458160bda3b078c91_pexels-kampus-production-6181092-p-800.jpg 800w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c7458160bda3b078c91_pexels-kampus-production-6181092-p-1080.jpg 1080w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c7458160bda3b078c91_pexels-kampus-production-6181092-p-1600.jpg 1600w, https://cdn.prod.website-files.com/651f2c08c5bd81eb296c1823/65285c7458160bda3b078c91_pexels-kampus-production-6181092.jpg 1919w" class="blog-grid-image" /></a>
							<div class="home-blog-content">
								<div><a href="/blog-posts/choose-right-visa-for-your-journey" class="w-inline-block">
										<h6 class="blog-post-title">Choose Right Visa for Your Journey</h6>
									</a>
									<p class="no-margin">We debunk myths surrounding visas, providing accurate information to help you make informed decisions.</p>
								</div>
								<div class="button-wrapper smaller-spacing"><a href="/blog-posts/choose-right-visa-for-your-journey" class="link-with-arrow-underline">Read full post</a></div>
							</div><a href="/posts-categories/news" class="home-blog-category">News</a>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<script>
document.addEventListener('DOMContentLoaded', function () {
  let currentIndex = 0;
  const slides = document.querySelectorAll('.carousel-slide img');
  const totalSlides = slides.length;

  function updateCarousel() {
    const carouselSlide = document.getElementById('carousel-slide');
    if (carouselSlide) {
      carouselSlide.style.transform = `translateX(-${currentIndex * 100 / totalSlides}%)`;
    }
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  // Attach event listeners to buttons
  const prevButton = document.querySelector('.prev');
  const nextButton = document.querySelector('.next');
  if (prevButton && nextButton) {
    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);
  }
});
</script>
	<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=651f2c08c5bd81eb296c17aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="./js/webflow.js" type="text/javascript"></script>
</body>
</html>
