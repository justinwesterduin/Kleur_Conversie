<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="../../public/css/output.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Title</title>
    </head>
    <body>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl">Convert</h2>

                <form class="mx-auto max-w-lg rounded-lg border" action="/" method="get">
                    <div class="flex flex-col gap-4 p-4 md:p-8">
                        <div class="flex flex-row">
                            <span>
                                <label for="rgb" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Type</label>
                                <br>
                                <div>
                                    <input name="rgb" id="rgb"
                                           class="w-16 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
                                           readonly value="RGB"
                                           minlength="3" maxlength="4"/>
                                    <span>,</span>
                                </div>
                            </span>

                            <span>
                                <label for="red" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Red</label>
                                <div>
                                    <input id="rgb" name="red"
                                           class="w-14 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
                                           maxlength="3" placeholder="255"/>
                                    <span>,</span>
                                </div>
                            </span>

                            <span>
                                <label for="green" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Green</label>
                                <div>
                                    <input id="rgb" name="green"
                                           class="w-14 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
                                           maxlength="3" placeholder="255"/>
                                    <span>,</span>
                                </div>
                            </span>

                            <span>
                                <label for="blue" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Blue</label>
                                <div>
                                    <input id="rgb" name="blue"
                                           class="w-14 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
                                           maxlength="3" placeholder="255"/>
                                </div>
                            </span>
                        </div>

                        <div>
                            <label for="hex" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">hex</label>
                            <div id="hex"
                                 class="w-1/3 rounded border bg-gray-50 px-3 py-2 mb-2.5 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                <?= $hex ?>
                            </div>
                            <div id="hex">
                                <?= "<div class='w-1/3 rounded border px-3 py-2 mb-2.5 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring' style='background:$hex'></div>" ?>
                            </div>
                        </div>

                        <button type="submit" name="convert"
                                class="block rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">
                            Convert
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>