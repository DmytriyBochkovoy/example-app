<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal-custom"
                 role="dialog"
                 aria-labelledby="modalTitle"
                 aria-describedby="modalDescription"
            >
                <div class="d-flex justify-content-end">
                    <button
                        type="button"
                        class="btn-close"
                        @click="close"
                        aria-label="Close modal"
                    >
                        x
                    </button>
                </div>
                <header
                    class="d-flex justify-content-center my-2 "
                    id="modalTitle"
                >
                    <slot name="header"></slot>
                </header>
                <section
                    class="modal-body"
                    id="modalDescription"
                >
                    <slot name="body">
                        I'm the default body!
                    </slot>
                </section>
                <footer class="modal-footer">
                    <slot name="footer"></slot>
                    <button
                        type="button"
                        class="btn btn-danger"
                        @click="close"
                        aria-label="Close modal"
                    >
                        Закрыть
                    </button>
                </footer>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: "modal",

    methods: {
        close() {
            this.$emit('close');
        },
    },
}
</script>

<style scoped>
.modal-custom {
    padding: 10px;
    overflow-x: hidden;
    overflow-y: auto;
    background-color: #ffffff;
    border-radius: 10px;
    outline: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-header,
.modal-footer {
    padding: 15px;
    display: flex;
    align-items: center;
}

.modal-header {
    border-bottom: 1px solid #eeeeee;
    color: #4AAE9B;
    justify-content: space-between;
}

.modal-footer {
    border-top: 1px solid #eeeeee;
    justify-content: space-between;
}

.modal-body {
    position: relative;
    padding: 20px 10px;
}

.btn-close {
    border: none;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
    color: #b24848;
    background: transparent;
}

.btn-green {
    color: white;
    background: #4AAE9B;
    border: 1px solid #4AAE9B;
    border-radius: 2px;
}
</style>
