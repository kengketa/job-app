<template>
    <Layout>
        <p>
            Hello {{ user.name }}, How are you doing?
        </p>
    </Layout>

</template>
<script>
import Layout from "@/Pages/Dashboard/Layout/Layout.vue";

export default {
    name: "DashboardIndex",
    components: {Layout},
    props: {
        user: {
            type: Object,
            required: true
        },
        number: {
            type: Number,
            default: 0
        }
    },
    mounted() {
    },
    data() {
        return {};
    }
};
</script>
