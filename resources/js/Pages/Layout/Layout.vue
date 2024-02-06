<template>
    <div class="bg-white min-h-screen">
        <Nav/>
        <section id="content" class="mt-20 text-gray-800 z-0">
            <main>
                <slot></slot>
            </main>
            <footer>
                <div class="bg-gray-100 h-60 flex justify-evenly px-10 py-4 items-center">
                    <div>กองทรัพยากรมนุษย์
                        มหาวิทยาลัยศิลปากร
                    </div>
                    <div>เบอร์โทรศัพท์
                        กองทรัพยากรมนุษย์ และหน่วยงานภายใน
                        งานพัฒนาทรัพยากรมนุษย์
                        โทร. 02-849-7567, 02-849-7544
                        งานบริหารทรัพยากรมนุษย์
                        โทร. 02-849-7546, 02-849-7547
                    </div>
                    <div>กองทรัพยากรมนุษย์
                        ตึกสำนักงานอธิการบดี (ตลิ่งชัน)
                    </div>
                </div>
                <div class="w-full h-10 bg-blue-800 text-white flex items-center px-20">
                    <p>2023 Copyright มหาวิทยาลัยศิลปากร</p>
                </div>
            </footer>
        </section>
    </div>
</template>

<script>
import Nav from "@/Pages/Layout/Nav.vue";

export default {
    name: "Layout",
    components: {Nav},
    data() {
        return {};
    },
};
</script>

<style scoped>
</style>
