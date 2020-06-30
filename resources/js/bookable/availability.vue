<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="from" class="form-label">From</label>
                <input
                    type="text"
                    name="from"
                    class="form-control form-control-sm"
                    placeholder="Start date"
                />
            </div>
            <div class="col-md-6 form-group">
                <label for="to">To</label>
                <input
                    type="text"
                    name="to"
                    class="form-control form-control-sm"
                    placeholder="End date"
                />
            </div>
        </div>
        <button class="btn btn-sm btn-secondary btn-block">Check!</button>
    </div>
</template>

<style scoped>
    label {
       font-size : 0.7rem;
       color : grey;
       font-weight : bolder;
       text-transform: uppercase;
    }
</style>

<script>
export default {

}
</script>
