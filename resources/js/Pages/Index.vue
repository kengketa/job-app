<template>
    <div class="bg-white min-h-screen">
        <section id="nav"
                 class="w-full h-20 bg-blue-800 fixed top-0 text-white py-4 px-4 flex justify-evenly gap-4 text-xl items-center z-30">
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
                <a :href="route('login')"
                   class="px-6 py-1.5 bg-white text-blue-800 rounded-md flex gap-2 items-center font-bold">
                    <div>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p>เข้าสู่ระบบ</p>
                </a>
            </div>
        </section>
        <section id="content" class="mt-20 text-gray-800 z-0">
            <div class="w-full bg-gray-100 h-96 grid grid-cols-2 gap-20">
                <div class="flex justify-end items-center">
                    <div class="w-8/12 h-80 bg-blue-800 rounded-xl"></div>
                </div>
                <div class="flex flex-col justify-center items-center w-8/12">
                    <h1 class="text-4xl font-bold text-center text-blue-800">
                        ร่วมเป็นส่วนหนึ่งกับเราและพัฒนาองค์กรไปด้วยกัน</h1>
                    <p class="mt-4">สวัสดิการและสิทธิประโยชน์ พนักงานมหาวิทยาลัยศิลปากร</p>
                    <p>ประกันชีวิตและสุขภาพกลุ่ม สิทธิประโยชน์และสวัสดิการ </p>
                    <button
                        class="bg-blue-800 px-4 py-2 text-white rounded-md font-semibold flex items-center gap-2 mt-4">
                        <div>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p>คู่มือการใช้งาน</p>
                    </button>
                </div>
            </div>
            <div class="px-20 py-4">
                <div id="tab" class="w-full">
                    <div class="w-1/4">
                        <div class="tabs tabs-bordered tabs-lg" role="tablist">
                            <input v-model="typeTap" :checked="typeTap==='academic'"
                                   :class="typeTap==='academic' ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   aria-label="สายวิชาการ"
                                   class="tab font-bold rounded-md"
                                   name="type_tab"
                                   role="tab"
                                   type="radio" value="academic"/>
                            <input v-model="typeTap" :checked="typeTap==='support'"
                                   :class="typeTap==='support' ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   aria-label="สายสนับสนุน"
                                   class="tab font-bold rounded-md" name="type_tab"
                                   role="tab"
                                   type="radio" value="support"/>
                        </div>
                    </div>
                    <div class="w-8/12 mt-4">
                        <div class="tabs tabs-bordered" role="tablist">
                            <input v-model="stateTap" :checked="stateTap==='apply'"
                                   :class="stateTap==='apply' ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   aria-label="รับสมัครงาน"
                                   class="tab font-bold rounded-md"
                                   name="state_tab"
                                   role="tab"
                                   type="radio" value="apply"/>
                            <input v-model="stateTap" :checked="stateTap==='exam'"
                                   :class="stateTap==='exam' ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   aria-label="รายชื่อผู้มีสิทธิ์สอบข้อเขียน"
                                   class="tab font-bold rounded-md" name="state_tab"
                                   role="tab"
                                   type="radio" value="exam"/>
                            <input v-model="stateTap" :checked="stateTap==='interview'"
                                   :class="stateTap==='interview' ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   aria-label="รายชื่อผู้มีสิทธิ์สอบสัมภาษณ์"
                                   class="tab font-bold rounded-md" name="state_tab"
                                   role="tab"
                                   type="radio" value="interview"/>
                            <input v-model="stateTap" :checked="stateTap==='pass'"
                                   :class="stateTap==='pass' ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   aria-label="รายชื่อผู้ที่ผ่านการสอบคัดเลือก"
                                   class="tab font-bold rounded-md" name="state_tab"
                                   role="tab"
                                   type="radio" value="pass"/>
                        </div>
                    </div>
                </div>
                <div id="table" class="mt-4">
                    <table class="table table-zebra">
                        <!-- head -->
                        <thead>
                        <tr class="bg-blue-800 font-bold text-lg text-white">
                            <th>#</th>
                            <th>ประกาศ</th>
                            <th>ตำแหน่งที่รับสมัคร (หน่วยงาน/คณะวิชา)</th>
                            <th>คุณวุฒิ</th>
                            <th>ประเภทพนักงาน</th>
                            <th>จำนวนอัตรา</th>
                            <th>วันที่รับสมัคร</th>
                            <th>รายละเอียดคุณสมบัติ</th>
                            <th>สมัครงาน</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="number in 10" :key="number">
                            <th>{{ number }}</th>
                            <td>
                                ขยายเวลารับสมัครสอบคัดเลือกบุคคล เพื่อบรรจุเป็นพนักงานมหาวิทยาลัย ตำแหน่งอาจารย์
                                (สาขาวิชาการศึกษาปฐมวัย)
                            </td>
                            <td>อาจารย์ (คณะศึกษาศาสตร์)</td>
                            <td>ปริญญาเอก</td>
                            <td>พนักงานประจำ</td>
                            <td>1</td>
                            <td>15 ม.ค. 2567 - 31 มี.ค. 2567</td>
                            <td>pdf</td>
                            <td>
                                <button
                                    class="bg-blue-800 px-4 py-2 text-white text-sm rounded-md font-semibold flex items-center whitespace-nowrap">
                                    สมัครงาน
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="pagination" class="mt-2 flex justify-between items-center">
                    <div>แสดง 1 ถึง 10 จาก 33 แถว</div>
                    <div class="join">
                        <button class="join-item btn btn-md">1</button>
                        <button class="join-item btn btn-md btn-active">2</button>
                        <button class="join-item btn btn-md">3</button>
                        <button class="join-item btn btn-md">4</button>
                    </div>
                </div>
            </div>
            <div class="px-20 py-4">
                <div class="w-full h-80">
                    <img class="object-cover w-full h-full" src="https://picsum.photos/800/300">
                </div>
            </div>
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
        </section>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            typeTap: 'academic',
            stateTap: 'apply'
        };
    },
    watch: {}
};
</script>

<style scoped>
</style>
