<template>
    <div>
        <div
            class="w-full h-20 bg-blue-800 fixed top-0 text-white py-4 px-4 flex justify-evenly gap-4 text-xl items-center">
            <div class="flex gap-2">
                <div>logo</div>
                <div>name</div>
            </div>
            <div class="flex gap-4">
                <div>skdfgdjsgfd</div>
                <div>dfdsfdsfdsfdsf</div>
                <div>sdfdsfdsfdsfdsfd</div>
                <div>4dfsdfdsfdsfds</div>
            </div>
            <div>
                <button class="px-6 py-1.5 bg-white text-blue-800 rounded-md flex gap-2 items-center font-bold">
                    <div>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p>sdgfjhdsgh</p>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            greeting: 'Hello',
            message: 'Welcome to my Vue component!'
        };
    }
};
</script>

<style scoped>
</style>
