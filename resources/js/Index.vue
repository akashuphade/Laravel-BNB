<template>

    <div>
        <nav class="navbar navbar-light bg-light">
            <router-link class="navbar-brand" :to="{name:'home'}">LaravelBNB</router-link>
        </nav>

        <div class="container mt-4 mb-4 px-5">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

export default {
    mounted(){
        console.log("Index Component Mounted")
    }
}
