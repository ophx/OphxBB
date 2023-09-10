<?php
    $config = include_once("./server/s.config.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config->appName; ?></title>
    <link rel="shortcut icon" href="https://cdn3.emoji.gg/emojis/5058-stonedyay.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0f0f0f]" style="font-family: 'Poppins', sans-serif !important;">
    <!-- Main Hero -->
    <main class="text-center sm:container sm:px-32 sm:mx-auto flex w-full h-screen">
        <div class="m-auto">
            <p class="text-white text-4xl">Login</p>
            <p class="text-gray-400 mb-4">Welcome Back!</p>
            <form action="login" method="post" class="space-y-4">
                <input type="text" name="username" id="username" placeholder="Username" class="transition-all duriation-150 px-4 py-2 rounded text-white placeholder-gray-400 font-medium w-full flex outline-none border-none shadow-lg bg-[#1f1f1f]">
                <div class="flex">
                    <input type="password" name="password" id="password" placeholder="Password" class="transition-all duriation-150 px-4 py-2 rounded-l text-white placeholder-gray-400 font-medium w-full flex outline-none border-none shadow-lg bg-[#1f1f1f]">
                    <div onclick="showHidePassword()" id="showhide" class="select-none text-sm cursor-pointer transition-all duriation-150 px-4 py-2 rounded-r text-white placeholder-gray-400 font-medium flex items-center outline-none border-none shadow-lg bg-[#2f2f2f]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1">
                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                            <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                        </svg>
                        Show
                    </div>
                </div>
                <div class="g-recaptcha" data-theme="dark" data-sitekey="<?php echo htmlspecialchars($config->recaptcha_sitekey); ?>" data-action="LOGIN"></div>
                <button type="submit" class="transition-all duriation-150 px-4 py-2 rounded text-white font-medium text-center w-full flex items-center justify-center bg-purple-600 hover:bg-purple-700">
                    Login
                </button>
                <p class="text-gray-400">Don't have an account? <a href="/register" class="transition-all duriation-150 hover:text-white font-medium">Register</a></p>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once("./components/footer.php"); ?>
</body>
<script src="https://cdn.tailwindcss.com/"></script>
<script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
<script>
    function showHidePassword() {
        var input = document.getElementById("password");
        var showHideText = document.getElementById("showhide");
        if (input.type === "password") {
            input.type = "text";
            showHideText.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
            </svg>
            Hide
            `;
        } else {
            input.type = "password";
            showHideText.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
            </svg>
            Show
            `;
        }
    }
</script>
</html>