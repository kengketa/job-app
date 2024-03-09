<template>
    <Layout>
        <div>sjkdfhkd</div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">ประกาศ</th>
                    <th class="px-6 py-3">ตำแหน่งที่รับสมัคร (หน่วยงาน/คณะวิชา)</th>
                    <th class="px-6 py-3">คุณวุฒิ</th>
                    <th class="px-6 py-3">ประเภทพนักงาน</th>
                    <th class="px-6 py-3">จำนวนอัตรา</th>
                    <th class="px-6 py-3">วันที่รับสมัคร</th>
                    <th class="px-6 py-3">รายละเอียดคุณสมบัติ</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
                </thead>
                <tbody v-if="announcementsData!=null" >
                <tr v-for="(announcement,index) in announcementsData" :key="index"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <!-- <th>{{ index + 1 }}</th> -->
                    <th>{{ announcement.id }}</th>
                    <td class="px-6 py-4">{{ announcement.title }}</td>
                    <td class="px-6 py-4">{{ announcement.position }}</td>
                    <td class="px-6 py-4">{{ announcement.degree }}</td>
                    <td class="px-6 py-4"></td>
                    <td class="px-6 py-4">{{ announcement.open_position }}</td>
                    <td class="px-6 py-4">{{ announcement.start_date }} - {{ announcement.end_date }}</td>
                    <td class="px-6 py-4">
                        pdf
                    </td>
                    <td class="px-6 py-4">
                        lsdhf
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </Layout>

</template>
<script>
import Layout from "@/Pages/Dashboard/Layout/Layout.vue";

export default {
    name: "AnnouncementIndex",
    components: {Layout},
    props: {
        announcements: {
            type: Object,
            required: true
        }
    },
    mounted() {

        this.announcementsData = this.announcements.data;
       

    },
    data() {
        return {
            announcementsData: null,
            pagination: null

        };
    }
};
</script>
