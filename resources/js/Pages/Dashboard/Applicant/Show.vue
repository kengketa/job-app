<template>
    <Layout>
        <!-- <div class="w-full flex justify-end">
            <Link :href="route('dashboard.announcements.edit',announcement.id)" class="btn btn-primary">EDIT</Link>
        </div>
        <AnnouncementForm :all-categories="allCategories" :all-types="allTypes" :announcement="announcement"
                          mode="show"/> -->
        
        <!-- 1.ข้อมูลส่วนตัว -->
        <div>
            <h6 class="text-lg">1.ข้อมูลส่วนตัว</h6>
        </div>
       
        <div class="border-b border-gray-900/10 pb-12">
            <div for applicant in applicants class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">ชื่อและนามสกุล</label>
                <div class="mt-2">
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.prefix+applicant.first_name+ ' ' +applicant.last_name" />
                </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">สมัครตำแหน่ง</label>
                    <div class="mt-2">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.last_name"  />
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">ที่อยู่ที่ติดต่อได้</label>
                    <div class="mt-2">
                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.address" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">หมายเลขโทรศัพท์</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.phone"/>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.email"/>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">วัน/เดือน/ปีเกิด</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.birth_date"/>
                    </div>
                </div>

                <div class="sm:col-span-1">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">อายุ</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.age"/>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">สถานที่เกิด</label>
                    <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.birth_place"/>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">เชื้อชาติ</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.race"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">สัญชาติ</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.nationality"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">สถานภาพสมรส</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.marital_status"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">หมายเลขบัตรประจำตัวประชาชน</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.citizen_id"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ออกให้ที่อำเภอ/เขต</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.district"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">จังหวัด</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.province"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">วันเดือนปีที่ออกบัตร</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.card_issued_date"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">วันเดือนปีที่บัตรหมดอายุ</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.card_expiration_date"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ศาสนา</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.religion"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">การรับราชการทหาร</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.military_service"/>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ศาสนา</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.religion"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">

            <div for applicant in applicants class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"> 
                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">อาชีพปัจจุบัน</label>
                    <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.current_occupation"/>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">เหตุผลที่ (อยาก) ออกจากงาน</label>
                    <div class="mt-2">
                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.address" />
                    </div>
                </div>   
            </div>
        </div>

        <!-- 2. ข้อมูลการศึกษาและฝึกอบรม -->
        <div class="mt-4">
            <h6 class="text-lg">2. ข้อมูลการศึกษาและฝึกอบรม</h6>
        </div>
       
        <section class="container mx-auto p-6 font-mono">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full border-collapse border border-slate-400">
                        <thead class="border-b border-gray-600">
                        <!-- แถวที่ 1 -->
                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-collapse border border-slate-400">
                            <!-- ปี พ.ศ. -->
                            <th class="px-4 py-3 border-collapse border border-slate-400" colspan="2">ปี พ.ศ.</th>
                            <th class="px-4 py-3 border-collapse border border-slate-400" rowspan="2">สถานศึกษา</th>
                            <th class="px-4 py-3 border-collapse border border-slate-400" rowspan="2">ประกาศนียบัตร/ปริญญาบัตร/วิชาเอก</th>
                            <th class="px-4 py-3 border-collapse border border-slate-400" rowspan="2">เกรดเฉลี่ย</th>
                        </tr>
                        <!-- แถวที่ 2 -->
                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-collapse border border-slate-400">
                            <th class="px-4 py-3 border-collapse border border-slate-400">จาก</th>
                            <th class="px-4 py-3 border-collapse border border-slate-400">ถึง</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-ms border">6/4/2000</td>
                            <td class="px-4 py-3 text-ms border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>                         
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>                         
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
     
        <!-- หลักสูตรเพิ่มเติม -->
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-4">
                <h6 class="text-lg text-center">หลักสูตรเพิ่มเติม</h6>
                <div>
                    <textarea class="w-full h-24 px-3 py-2 text-base text-gray-700 placeholder-gray-400 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="แสดงข้อความข้อความของคุณที่นี่..."></textarea>
                </div>
                
            </div>

            <div class="mt-4">
                <h6 class="text-lg text-center">การฝึกอบรม</h6>
                <div>
                    <textarea class="w-full h-24 px-3 py-2 text-base text-gray-700 placeholder-gray-400 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="แสดงข้อความข้อความของคุณที่นี่..."></textarea>
                </div>
            </div>
        </div>


        <!-- 3. ข้อมูลการทำงานและประสบการณ์ทำงาน (โปรดให้รายละเอียดของงานที่ทำในช่วง 3 ปีหลัง) -->
        <div class="mt-4">
            <h6 class="text-lg">3. ข้อมูลการทำงานและประสบการณ์ทำงาน (โปรดให้รายละเอียดของงานที่ทำในช่วง 3 ปีหลัง)</h6>
        </div>
        <section class="container mx-auto p-6 font-mono">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full border-collapse border border-slate-400">
                        <thead class="border-b border-gray-600">
                        <!-- แถวที่ 1 -->
                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-collapse border border-slate-400">
                            <!-- ปี พ.ศ. -->
                            <th class="px-4 py-3 border-collapse border border-slate-400" colspan="2">ปี พ.ศ.</th>
                            <th class="px-4 py-3 border-collapse border border-slate-400" rowspan="2"></th>
                            <th class="px-4 py-3 border-collapse border border-slate-400" rowspan="2"></th>
                            <th class="px-4 py-3 border-collapse border border-slate-400" rowspan="2"></th>
                        </tr>
                        <!-- แถวที่ 2 -->
                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-collapse border border-slate-400">
                            <th class="px-4 py-3 border-collapse border border-slate-400">จาก</th>
                            <th class="px-4 py-3 border-collapse border border-slate-400">ถึง</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-ms border">6/4/2000</td>
                            <td class="px-4 py-3 text-ms border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>                         
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>                         
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </Layout>

</template>
<script>
import Layout from "@/Pages/Dashboard/Layout/Layout.vue";
import {Inertia} from "@inertiajs/inertia";
import {Link} from "@inertiajs/vue3";
import {useForm} from '@inertiajs/inertia-vue3';
//import AnnouncementForm from "@/Pages/Dashboard/Announcement/AnnouncementForm.vue";

export default {
    name: "ApplicantShow",
    components: {Layout},
    props: {
        applicant: {
            type: Object,
            required: true
    }

    },
    mounted() {

    },
    data() {
        return {};
    },
    methods: {},
    watch: {}
};
</script>