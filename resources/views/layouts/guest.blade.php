<!DOCTYPE html>
<html class="border-l" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

    </style>

</head>
<body>
<div class="h-screen bg-gray-50 flex flex-col justify-center items-center">
    <div class="bg-white border border-gray-300 w-80 py-8 flex items-center flex-col mb-3">
        <h1 class="bg-no-repeat instagram-logo"></h1>
        <div>
            <?xml version="1.0" encoding="UTF-8"?>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="143px" height="51px" viewBox="0 0 142 51" version="1.1">
            <g id="surface1">
            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(14.901961%,14.901961%,14.901961%);fill-opacity:1;" d="M 10.949219 8.347656 C 8.207031 9.5 5.195312 12.761719 4.242188 16.851562 C 3.039062 22.035156 8.050781 24.226562 8.464844 23.507812 C 8.949219 22.664062 7.566406 22.378906 7.28125 19.6875 C 6.914062 16.214844 8.519531 12.332031 10.539062 10.632812 C 10.914062 10.316406 10.898438 10.753906 10.898438 11.570312 C 10.898438 13.027344 10.816406 26.101562 10.816406 28.828125 C 10.816406 32.523438 10.664062 33.6875 10.394531 34.839844 C 10.117188 36.007812 9.671875 36.796875 10.007812 37.101562 C 10.386719 37.441406 11.988281 36.632812 12.917969 35.328125 C 14.03125 33.765625 14.421875 31.890625 14.492188 29.851562 C 14.574219 27.394531 14.570312 23.496094 14.574219 21.269531 C 14.578125 19.230469 14.609375 13.257812 14.539062 9.667969 C 14.523438 8.789062 12.09375 7.863281 10.949219 8.347656 M 108.253906 25.628906 C 108.167969 27.546875 107.746094 29.046875 107.21875 30.105469 C 106.207031 32.15625 104.097656 32.792969 103.203125 29.847656 C 102.71875 28.242188 102.695312 25.558594 103.042969 23.320312 C 103.402344 21.035156 104.398438 19.3125 106.046875 19.46875 C 107.671875 19.621094 108.433594 21.730469 108.253906 25.628906 Z M 80.832031 37.539062 C 80.808594 40.726562 80.308594 43.523438 79.238281 44.335938 C 77.71875 45.488281 75.679688 44.625 76.101562 42.296875 C 76.476562 40.238281 78.246094 38.132812 80.835938 35.5625 C 80.835938 35.5625 80.839844 36.148438 80.832031 37.539062 Z M 80.414062 25.609375 C 80.324219 27.359375 79.871094 29.113281 79.378906 30.105469 C 78.367188 32.15625 76.242188 32.796875 75.363281 29.847656 C 74.761719 27.832031 74.90625 25.222656 75.203125 23.578125 C 75.589844 21.449219 76.527344 19.46875 78.207031 19.46875 C 79.839844 19.46875 80.644531 21.273438 80.414062 25.609375 Z M 64.527344 25.582031 C 64.429688 27.433594 64.070312 28.984375 63.492188 30.105469 C 62.449219 32.140625 60.386719 32.785156 59.476562 29.847656 C 58.820312 27.726562 59.042969 24.835938 59.316406 23.273438 C 59.722656 20.957031 60.734375 19.3125 62.320312 19.46875 C 63.945312 19.628906 64.734375 21.730469 64.527344 25.582031 Z M 137.335938 27.746094 C 136.941406 27.746094 136.757812 28.15625 136.609375 28.851562 C 136.089844 31.261719 135.539062 31.808594 134.835938 31.808594 C 134.046875 31.808594 133.339844 30.613281 133.15625 28.222656 C 133.011719 26.34375 133.035156 22.882812 133.21875 19.441406 C 133.257812 18.734375 133.0625 18.035156 131.175781 17.34375 C 130.363281 17.046875 129.183594 16.609375 128.597656 18.039062 C 126.9375 22.066406 126.289062 25.265625 126.136719 26.566406 C 126.128906 26.632812 126.046875 26.644531 126.03125 26.488281 C 125.933594 25.449219 125.714844 23.554688 125.6875 19.582031 C 125.683594 18.808594 125.519531 18.148438 124.667969 17.605469 C 124.117188 17.257812 122.441406 16.636719 121.835938 17.375 C 121.3125 17.976562 120.707031 19.601562 120.078125 21.527344 C 119.566406 23.089844 119.210938 24.148438 119.210938 24.148438 C 119.210938 24.148438 119.21875 19.925781 119.222656 18.328125 C 119.226562 17.722656 118.8125 17.523438 118.691406 17.484375 C 118.128906 17.320312 117.03125 17.050781 116.5625 17.050781 C 115.984375 17.050781 115.84375 17.375 115.84375 17.847656 C 115.84375 17.90625 115.753906 23.402344 115.753906 27.246094 C 115.753906 27.410156 115.753906 27.59375 115.753906 27.789062 C 115.433594 29.554688 114.398438 31.949219 113.273438 31.949219 C 112.148438 31.949219 111.617188 30.949219 111.617188 26.367188 C 111.617188 23.695312 111.695312 22.535156 111.734375 20.601562 C 111.757812 19.488281 111.800781 18.632812 111.800781 18.4375 C 111.792969 17.84375 110.769531 17.542969 110.292969 17.433594 C 109.8125 17.320312 109.398438 17.277344 109.074219 17.296875 C 108.613281 17.324219 108.289062 17.625 108.289062 18.042969 C 108.289062 18.265625 108.292969 18.691406 108.292969 18.691406 C 107.699219 17.757812 106.75 17.105469 106.117188 16.917969 C 104.410156 16.40625 102.632812 16.859375 101.289062 18.746094 C 100.222656 20.25 99.582031 21.949219 99.328125 24.390625 C 99.144531 26.175781 99.203125 27.984375 99.53125 29.515625 C 99.132812 31.242188 98.398438 31.949219 97.589844 31.949219 C 96.417969 31.949219 95.566406 30.027344 95.664062 26.695312 C 95.730469 24.507812 96.167969 22.972656 96.640625 20.75 C 96.84375 19.800781 96.679688 19.304688 96.265625 18.828125 C 95.886719 18.394531 95.078125 18.171875 93.917969 18.445312 C 93.089844 18.640625 91.90625 18.851562 90.820312 19.011719 C 90.820312 19.011719 90.886719 18.75 90.941406 18.289062 C 91.222656 15.863281 88.601562 16.058594 87.765625 16.832031 C 87.269531 17.296875 86.929688 17.839844 86.800781 18.820312 C 86.59375 20.378906 87.855469 21.113281 87.855469 21.113281 C 87.441406 23.015625 86.429688 25.507812 85.378906 27.304688 C 84.820312 28.269531 84.390625 28.984375 83.835938 29.746094 C 83.832031 29.460938 83.832031 29.179688 83.832031 28.898438 C 83.820312 24.890625 83.871094 21.738281 83.894531 20.601562 C 83.917969 19.488281 83.960938 18.65625 83.960938 18.460938 C 83.953125 18.027344 83.699219 17.863281 83.175781 17.65625 C 82.710938 17.46875 82.160156 17.34375 81.589844 17.296875 C 80.871094 17.242188 80.4375 17.625 80.449219 18.078125 C 80.453125 18.164062 80.453125 18.691406 80.453125 18.691406 C 79.859375 17.757812 78.910156 17.105469 78.277344 16.917969 C 76.570312 16.410156 74.792969 16.859375 73.449219 18.746094 C 72.382812 20.25 71.683594 22.355469 71.488281 24.371094 C 71.300781 26.25 71.335938 27.847656 71.589844 29.195312 C 71.316406 30.542969 70.539062 31.949219 69.65625 31.949219 C 68.527344 31.949219 67.886719 30.949219 67.886719 26.367188 C 67.886719 23.695312 67.96875 22.535156 68.007812 20.601562 C 68.03125 19.488281 68.074219 18.632812 68.070312 18.4375 C 68.0625 17.84375 67.039062 17.542969 66.5625 17.433594 C 66.066406 17.316406 65.636719 17.273438 65.304688 17.300781 C 64.871094 17.332031 64.5625 17.726562 64.5625 18.015625 L 64.5625 18.691406 C 63.972656 17.757812 63.019531 17.105469 62.386719 16.917969 C 60.683594 16.410156 58.914062 16.867188 57.5625 18.746094 C 56.679688 19.972656 55.964844 21.335938 55.597656 24.34375 C 55.492188 25.214844 55.445312 26.027344 55.453125 26.789062 C 55.101562 28.953125 53.546875 31.445312 52.277344 31.445312 C 51.535156 31.445312 50.828125 29.992188 50.828125 26.90625 C 50.828125 22.789062 51.082031 16.929688 51.125 16.363281 C 51.125 16.363281 52.726562 16.335938 53.039062 16.332031 C 53.839844 16.324219 54.5625 16.34375 55.628906 16.289062 C 56.164062 16.261719 56.679688 14.332031 56.128906 14.09375 C 55.878906 13.984375 54.109375 13.890625 53.410156 13.875 C 52.820312 13.863281 51.179688 13.738281 51.179688 13.738281 C 51.179688 13.738281 51.328125 9.851562 51.359375 9.4375 C 51.390625 9.097656 50.949219 8.921875 50.695312 8.8125 C 50.082031 8.550781 49.53125 8.425781 48.882812 8.292969 C 47.980469 8.105469 47.574219 8.289062 47.492188 9.050781 C 47.375 10.210938 47.3125 13.605469 47.3125 13.605469 C 46.648438 13.605469 44.394531 13.476562 43.734375 13.476562 C 43.121094 13.476562 42.457031 16.132812 43.304688 16.164062 C 44.28125 16.203125 45.984375 16.234375 47.113281 16.269531 C 47.113281 16.269531 47.0625 22.226562 47.0625 24.066406 C 47.0625 24.261719 47.0625 24.449219 47.0625 24.632812 C 46.441406 27.886719 44.257812 29.644531 44.257812 29.644531 C 44.726562 27.492188 43.765625 25.875 42.039062 24.507812 C 41.402344 24 40.144531 23.046875 38.738281 22 C 38.738281 22 39.554688 21.191406 40.273438 19.570312 C 40.785156 18.417969 40.808594 17.101562 39.554688 16.8125 C 37.476562 16.332031 35.765625 17.863281 35.253906 19.5 C 34.859375 20.769531 35.070312 21.710938 35.847656 22.6875 C 35.902344 22.757812 35.964844 22.832031 36.027344 22.90625 C 35.558594 23.8125 34.914062 25.035156 34.371094 25.984375 C 32.855469 28.617188 31.714844 30.699219 30.851562 30.699219 C 30.160156 30.699219 30.167969 28.585938 30.167969 26.605469 C 30.167969 24.898438 30.292969 22.332031 30.394531 19.675781 C 30.425781 18.800781 29.992188 18.300781 29.257812 17.84375 C 28.8125 17.570312 27.863281 17.027344 27.3125 17.027344 C 26.492188 17.027344 24.117188 17.140625 21.875 23.667969 C 21.589844 24.492188 21.035156 25.988281 21.035156 25.988281 L 21.082031 18.140625 C 21.082031 17.957031 20.984375 17.777344 20.761719 17.65625 C 20.382812 17.449219 19.375 17.027344 18.476562 17.027344 C 18.046875 17.027344 17.835938 17.230469 17.835938 17.628906 L 17.757812 29.90625 C 17.757812 30.839844 17.78125 31.929688 17.871094 32.402344 C 17.964844 32.878906 18.113281 33.269531 18.296875 33.5 C 18.480469 33.730469 18.691406 33.90625 19.039062 33.976562 C 19.363281 34.042969 21.144531 34.273438 21.238281 33.589844 C 21.347656 32.769531 21.351562 31.882812 22.285156 28.578125 C 23.742188 23.429688 25.636719 20.917969 26.53125 20.027344 C 26.6875 19.871094 26.863281 19.863281 26.855469 20.117188 C 26.816406 21.246094 26.683594 24.066406 26.59375 26.460938 C 26.351562 32.871094 27.511719 34.0625 29.167969 34.0625 C 30.4375 34.0625 32.222656 32.792969 34.140625 29.585938 C 35.335938 27.589844 36.496094 25.628906 37.328125 24.214844 C 37.910156 24.757812 38.5625 25.339844 39.210938 25.960938 C 40.726562 27.402344 41.222656 28.777344 40.894531 30.078125 C 40.640625 31.074219 39.691406 32.101562 38 31.101562 C 37.507812 30.8125 37.296875 30.585938 36.804688 30.257812 C 36.535156 30.082031 36.128906 30.03125 35.886719 30.214844 C 35.253906 30.695312 34.890625 31.304688 34.683594 32.0625 C 34.484375 32.796875 35.214844 33.183594 35.976562 33.523438 C 36.628906 33.816406 38.035156 34.082031 38.929688 34.113281 C 42.417969 34.230469 45.214844 32.417969 47.160156 27.742188 C 47.511719 31.78125 48.992188 34.066406 51.570312 34.066406 C 53.292969 34.066406 55.019531 31.824219 55.773438 29.625 C 55.992188 30.519531 56.3125 31.300781 56.726562 31.960938 C 58.710938 35.125 62.5625 34.445312 64.496094 31.757812 C 65.09375 30.929688 65.1875 30.628906 65.1875 30.628906 C 65.46875 33.167969 67.5 34.050781 68.660156 34.050781 C 69.964844 34.050781 71.308594 33.433594 72.25 31.300781 C 72.363281 31.53125 72.480469 31.753906 72.613281 31.960938 C 74.597656 35.125 78.449219 34.445312 80.382812 31.757812 C 80.476562 31.632812 80.554688 31.519531 80.625 31.414062 L 80.679688 33.082031 C 80.679688 33.082031 79.578125 34.097656 78.898438 34.722656 C 75.917969 37.476562 73.652344 39.5625 73.484375 41.992188 C 73.269531 45.089844 75.769531 46.242188 77.660156 46.394531 C 79.667969 46.554688 81.386719 45.4375 82.445312 43.878906 C 83.375 42.503906 83.984375 39.546875 83.9375 36.625 C 83.921875 35.457031 83.890625 33.96875 83.867188 32.375 C 84.914062 31.152344 86.097656 29.605469 87.183594 27.792969 C 88.367188 25.820312 89.636719 23.171875 90.289062 21.109375 C 90.289062 21.109375 91.390625 21.117188 92.566406 21.039062 C 92.945312 21.015625 93.054688 21.09375 92.984375 21.371094 C 92.898438 21.707031 91.496094 27.148438 92.777344 30.777344 C 93.652344 33.257812 95.628906 34.054688 96.800781 34.054688 C 98.171875 34.054688 99.484375 33.015625 100.1875 31.46875 C 100.273438 31.640625 100.359375 31.808594 100.457031 31.960938 C 102.441406 35.125 106.28125 34.441406 108.226562 31.757812 C 108.667969 31.152344 108.917969 30.628906 108.917969 30.628906 C 109.335938 33.253906 111.363281 34.066406 112.527344 34.066406 C 113.738281 34.066406 114.886719 33.566406 115.820312 31.347656 C 115.859375 32.324219 115.921875 33.121094 116.019531 33.375 C 116.078125 33.527344 116.421875 33.722656 116.671875 33.816406 C 117.777344 34.230469 118.910156 34.035156 119.328125 33.949219 C 119.617188 33.890625 119.84375 33.65625 119.875 33.050781 C 119.953125 31.46875 119.90625 28.808594 120.382812 26.828125 C 121.183594 23.507812 121.929688 22.222656 122.285156 21.585938 C 122.484375 21.226562 122.707031 21.167969 122.71875 21.546875 C 122.734375 22.3125 122.769531 24.558594 123.082031 27.574219 C 123.308594 29.792969 123.613281 31.105469 123.847656 31.519531 C 124.515625 32.707031 125.34375 32.765625 126.015625 32.765625 C 126.441406 32.765625 127.335938 32.644531 127.253906 31.890625 C 127.21875 31.523438 127.285156 29.246094 128.074219 25.976562 C 128.589844 23.839844 129.453125 21.910156 129.761719 21.203125 C 129.875 20.945312 129.929688 21.148438 129.929688 21.191406 C 129.863281 22.660156 129.714844 27.472656 130.3125 30.101562 C 131.121094 33.667969 133.457031 34.066406 134.269531 34.066406 C 136.007812 34.066406 137.429688 32.734375 137.910156 29.238281 C 138.023438 28.394531 137.851562 27.746094 137.339844 27.746094 "/>
            </g>
            </svg>
            
        </div>

        @yield('auth-con')

        <div class="flex justify-evenly space-x-2 w-64 mt-4">
            <span class="bg-gray-300 h-px flex-grow t-2 relative top-2"></span>
            <span class="flex-none uppercase text-xs text-gray-400 font-semibold">or</span>
            <span class="bg-gray-300 h-px flex-grow t-2 relative top-2"></span>
        </div>
    </div>
    <div class="bg-white border border-gray-300 text-center w-80 py-4">
        <span class="text-sm">Don't have an account?</span>
        <a href="/register" class="text-blue-500 text-sm font-semibold">Sign up</a>
    </div>
    
</div>
</body>
</html>