<template>
    <UserLayoutEn v-if="lang.EN"></UserLayoutEn>
    <UserLayoutAR v-if="lang.AR"></UserLayoutAR>
    <AdminLayout v-if="Admin"></AdminLayout>
</template>

<script>
import UserLayoutEn from "./Layouts/User/UserLayoutEn.vue";
import UserLayoutAR from "./Layouts/User/UserLayoutAr.vue";
import AdminLayout from "./Layouts/Admin/AdminLayout.vue";

export default {
    components: {
        UserLayoutEn,   
        UserLayoutAR,
        AdminLayout
    },
    data() {
        return {
            lang: {
                AR: false,
                EN: false
            },
            Admin: false
        };
    },
    mounted() {
        this.getLang();
        this.CheckAdmin();
    },
    methods: {
        containsSegmentAfterFirstSlash(url, segment) {
            const parts = url.split('/');
            return parts.length > 3 && parts[3] === segment;
        },
        getLang() {
            const url = window.location.href;
            const result = this.containsSegmentAfterFirstSlash(url, 'ar');
            if (result) {
                this.lang.AR = true;
                this.lang.EN = false;
            } else {
                this.lang.AR = false;
                this.lang.EN = true;
            }
        },
        CheckAdmin() {
            const url = window.location.href;
            const result = this.containsSegmentAfterFirstSlash(url, 'admin');
            if (result) {
                this.Admin = true;
                this.lang.AR = false;
                this.lang.EN = false;
            } else {
                this.Admin = false;
                this.getLang();
            }
        }
    }
}
</script>

<style lang="scss" scoped>
/* Your styles here */
</style>