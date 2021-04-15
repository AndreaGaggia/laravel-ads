<template>
    <div ref="modal" class="modal" :class="visited ? 'is-active' : ''">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button
                    class="delete"
                    aria-label="close"
                    @click="closeModal"
                ></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
                <button class="button">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            visited: true
        };
    },
    methods: {
        closeModal() {
            this.$refs.modal.classList.remove("is-active");
        }
    },
    mounted() {
        if (
            !document.cookie.split("; ").find(row => row.startsWith("visited"))
        ) {
            document.cookie = "visited=true";
            console.log("cookie impostato");
            console.log(document.cookie);
        } else {
            this.visited = false;
        }
    }
};
</script>

<style></style>
