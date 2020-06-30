<template>

    <div class="card card-body mb-4">
        <router-link :to="{ name: 'bookable', params:{ id } }">
            <h5 class="card-title">{{ title }}</h5>
        </router-link>
        <p class="card-text">{{ description }}</p>

    </div>

</template>

<script>
export default {
    props: {
            title:String,
            description:String,
            id:Number
            }
}
</script>
