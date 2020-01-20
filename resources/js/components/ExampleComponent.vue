<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <div class="form-group">
                            <form class="input-group">
                                <input class="form-control" v-model="alumno.nombre" type="text" name="nombre"
                                       id="nombre">
                                <input class="form-control" v-model="alumno.ap_paterno" type="text" name="ap_paterno"
                                       id="ap_paterno">
                                <input class="form-control" v-model="alumno.ap_materno" type="text" name="ap_materno"
                                       id="ap_materno">
                                <input class="form-control" v-model="alumno.sexo" type="text" name="sexo" id="sexo">
                                <input class="form-control" v-model="alumno.edad" type="text" name="edad" id="edad">
                            </form>
                            <input class="form-control" type="button" value="Enviar" v-on:click="Evento">
                            <input class="form-control" type="button" value="Update" v-on:click="update">
                        </div>
                        <div class="col">
                            <ul class="list-group" v-for="alumno in lista_alumnos" :key="alumno.id">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{alumno.nombre}} {{alumno.ap_paterno}} {{alumno.ap_materno}}: {{alumno.sexo}}
                                    <span class="badge badge-primary badge-pill">{{alumno.edad}}</span>
                                    <input type="button" value="Delete" v-on:click="Delete">
                                </li>
                            </ul>
                        </div>
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
                lista_alumnos: null,
                alumno: {
                    nombre: "",
                    ap_paterno: "",
                    ap_materno: "",
                    edad: "",
                    sexo: "",
                }
            }
        },
        methods: {
            update: function () {
                alumno = {
                    nombre: this.state.nombre,
                    ap_paterno: this.state.ap_paterno,
                    ap_materno: this.state.ap_materno,
                }
                axios.put('info', alumno).then(function (response) {
                    console.log(response.data());
                    self.push(response.data());
                }).catch(info, function (error) {
                    console.log(error);
                })
            },
            Delete: function () {
                let self = this;
                    axios.delete("info",)
                        .then(function(reponse){

                    console.log(response.data());
                    // self.push(response.data());
                }).catch(info, function (error) {
                    console.log(error);
                })
            }
            ,
            Evento: function () {
                let self = this;
                axios.post("info", this.alumno).then(function (response) {
                    console.log(response.data());
                    self.push(response.data());
                }).catch(info, function (error) {
                    console.log(error);
                })
            }
        }
    }
</script>
