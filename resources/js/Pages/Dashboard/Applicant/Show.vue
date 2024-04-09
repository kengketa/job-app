<template>
    <Layout>
        <!-- <div class="w-full flex justify-end">
            <Link :href="route('dashboard.announcements.edit',announcement.id)" class="btn btn-primary">EDIT</Link>
        </div>
        <AnnouncementForm :all-categories="allCategories" :all-types="allTypes" :announcement="announcement"
                          mode="show"/> -->
        <div>
            <h6 class="text-lg">1.ข้อมูลส่วนตัว</h6>
        </div>
        <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-gray-700 uppercase bg-gray-50">
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th class="px-6 py-3">หมายเลขใบสมัคร</th>
                    <th class="px-6 py-3">ชื่อ</th>
                    <th class="px-6 py-3">นามสกุล</th>
                </tr>
                </thead>
                <tbody>
                <tr  for applicant in applicants
                    class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ applicant.id }}</td>
                    <td class="px-6 py-4">{{ applicant.first_name }}</td>
                    <td class="px-6 py-4">{{ applicant.last_name }}</td>
                </tr>
                </tbody>
            </table>
        </div> -->

        <!-- <div class="bg-white shadow-md p-4 rounded-lg">
            <h2 class="text-lg font-semibold mb-2">{{ applicant.first_name }}</h2>
            <p class="text-gray-600">{{ applicant.last_name }}</p>
        </div> -->

        <div class="border-b border-gray-900/10 pb-12">

        <div for applicant in applicants class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
            <div class="mt-2">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4" :value="applicant.first_name" />
            </div>
            </div>

            <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
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



        </div>
      </div>

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
