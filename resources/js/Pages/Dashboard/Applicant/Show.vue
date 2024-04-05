<template>
    <Layout>
        <!-- <div class="w-full flex justify-end">
            <Link :href="route('dashboard.announcements.edit',announcement.id)" class="btn btn-primary">EDIT</Link>
        </div>
        <AnnouncementForm :all-categories="allCategories" :all-types="allTypes" :announcement="announcement"
                          mode="show"/> -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-gray-700 uppercase bg-gray-50">
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th class="px-6 py-3">หมายเลขใบสมัคร</th>
                    <th class="px-6 py-3">ชื่อ</th>
                    <th class="px-6 py-3">Email</th>

                </tr>
                </thead>
                <tbody>
                <tr v-for="(applicant, index) in applicants" :key="index"
                    class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ applicant.announcement_id }}</td>
                    <td class="px-6 py-4">{{ applicant.first_name }}</td>
                    <td class="px-6 py-4">{{ applicant.first_name }}</td>


                </tr>
                </tbody>
            </table>
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
    components: {Layout, Link},
    props: {
        applicant: {
         type: Array,
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
