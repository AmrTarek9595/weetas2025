<template>
    <div>
        Admin Home Page
    </div>
</template>

<script>

    export default {


        mounted(){
            console.log("Admin Home Page");
            localStorage.setItem('lang', 'EN');
            localStorage.setItem('role', 'admin');
        }
    

}
</script>

<style lang="scss" scoped>


</style>