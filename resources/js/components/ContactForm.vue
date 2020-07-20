<template>
    <div class="col-md-6 col-sm-12" style="padding: 0 30px;" id="contact">
        <h3 class="text-center">Nous contacter</h3>
        <p style="font-size: .8em; padding: 10px; border: 1px solid #343a40 ; border-radius: 5px;">Afin de nous permettre une prompte prise en charge, nous vous invitons, lorsque cela est possible, à indiquer avec précision les faits concernés. Toutes les demandes sont traitées dans le respect le plus strict de la confidentialité et du secret professionnel.</p>
        <form method="POST" style="border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
            <div :class="'text-center alert alert-' + message.type " role="alert" v-if="showMessage">
                <strong>{{ message.title }}!</strong>
                <span>{{ message.text }}</span>
            </div>

            <div class="form-group">
                <label for="lastname">Votre nom</label>
                <input type="text" class="form-control" :class="{'is-invalid': errors.has('lastname') }" name="lastname" id="lastname" v-model="form.lastname" data-vv-as="nom" v-validate="'required|min:2|max:32'">
                <div v-show="errors.has('lastname')" class="invalid-feedback">{{ errors.first('lastname') }}</div>
            </div>

            <div class="form-group">
                <label for="firstname">Votre prénom</label>
                <input type="text" class="form-control" :class="{'is-invalid': errors.has('firstname') }" name="firstname" id="firstname" v-model="form.firstname" data-vv-as="prénom" v-validate="'required|min:2|max:32'">
                <div v-show="errors.has('firstname')" class="invalid-feedback">{{ errors.first('firstname') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Votre adresse électronique</label>
                <input type="email" class="form-control" :class="{'is-invalid': errors.has('email') }" name="email" id="email" v-model="form.email" data-vv-as="email" v-validate="'required|email'">
                <div v-show="errors.has('email')" class="invalid-feedback">{{ errors.first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea class="form-control" :class="{'is-invalid': errors.has('message') }" name="message" id="message" rows="5" v-model="form.message" data-vv-as="message" v-validate="'required|min:4|max:2048'"></textarea>
                <div v-show="errors.has('message')" class="invalid-feedback">{{ errors.first('message') }}</div>
                Nb. de caractères: {{ form.message.length }} (max: 2048)
            </div>
            
            <div class="text-center">
                <button class="btn btn-outline-dark" :disabled="this.errors.items.length > 0 || this.loading" type="submit" id="submitButton" :loading="loading" @click.prevent="sendContactForm">Envoyer message <font-awesome-icon icon="spinner" spin v-if="loading" /></button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data () {
            return {
                form: {
                    lastname: '',
                    firstname: '',
                    email: '',
                    message: ''
                },
                // errors: ''
                loading: false,
                showMessage: false,
                message: {
                    type: '',
                    title: '',
                    content: ''
                }
            }
        },
        methods: {
            sendContactForm () {
                // console.log(this.form);
                this.loading = true
                if (!this.form.lastname || !this.form.firstname || !this.form.email || !this.form.message) {
                    this.message = {
                        type: 'danger',
                        title: 'Erreur',
                        text: 'Veuillez remplir tous les champs'
                    }
                    this.showMessage = true
                    this.loading = false
                    return
                }
                axios.post('/api/send-contact-form', {
                    data: this.form
                }).then(response => {
                    console.log('response: ', response)
                    this.form = {
                        lastname: '',
                        firstname: '',
                        email: '',
                        message: ''
                    }
                    this.errors.items = []
                    this.loading = false
                    this.message = {
                        type: 'success',
                        title: 'Succès',
                        text: 'Votre message a bien été envoyé.'
                    }
                    this.showMessage = true
                }).catch(error => {
                    console.log('error: ', error)
                    this.loading = false
                    this.message = {
                        type: 'danger',
                        title: 'Erreur',
                        text: 'Votre n\'a pas pu être envoyé. Veuillez réessayer ou nous contacter directement par téléphone ou via notre adresse email etude@kb-avocats.ch'
                    }
                    this.showMessage = true
                })
            }
        }
    }
</script>
