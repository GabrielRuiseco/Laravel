<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input v-model="alumnos.nombre" type="text" name="nombre" id="nombre">
                        <input v-model="alumnos.ap_paterno" type="text" name="ap_paterno" id="ap_paterno">
                        <input v-model="alumnos.ap_materno" type="text" name="ap_materno" id="ap_materno">
                        <input type="button" value="Enviar" v-on:click="Evento">
                        Componente Ejemplo de vue
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["alumnos"],
        // mounted() {
        //     console.log('Component mounted.')
        // },
        mounted() {
            this.lista_alumnos = JSON.parse(this.alumnos);
            console.log(this.lista_alumnos);
        },
        data() {
            return {
                lista_alumnos: null
            }
        },
        methods: {
            Evento: function () {
                alert();
            }
        }
    }
</script>
