<template>
    <div>

        <div v-if="!loading" class="row">
            <div class="col-md-8 d-flex align-item-stretch pb-4">
                <div class="card w-100">
                    <div class="card-header font-weight-bold text-center">{{ bookable.title }}</div>
                    <div class="card-body">
                        {{ bookable.description }}
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-item-stretch pb-4">
                <availability></availability>
            </div>

        </div>
        <div v-else>
            Loading...
        </div>
    </div>
</template>>

<script>
import Availability from "./availability";

export default {
    components: {
        Availability,
    },

    data() {
        return {
            bookable: null,
            loading: true
        }
    },

    created() {
        axios
        .get(`/api/bookables/${this.$route.params.id}`)
        .then(response => {
            this.bookable = response.data.data;
            this.loading = false;
        })
        .catch(response => console.log(response));


    }
}
</script>>
