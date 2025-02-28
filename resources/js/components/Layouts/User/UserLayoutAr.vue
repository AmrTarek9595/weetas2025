<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        Arabic
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Arabic Layout For User");
        this.setLocalStorage();
    },
    methods: {
        setLocalStorage() {
            localStorage.clear();
            localStorage.setItem('lang', 'AR');
        }
    }
}
</script>

<style scoped>
/* Your styles here */
</style>