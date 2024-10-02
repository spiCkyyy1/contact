<template>
    <div class="p-4 mx-auto max-w-xl bg-white font-[sans-serif]">
        <h1 class="text-3xl text-gray-800 font-extrabold text-center">Contact us</h1>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mt-2" v-if="successMessage">
            <p> {{ successMessage}}</p>
        </div>
        <form class="mt-8 space-y-4">
            <input type='text' placeholder='Name'
                   class="w-full rounded-md py-3 px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm outline-blue-500" v-model="form.name"/>
            <span class="text-red-500" v-if="formErrors != null && formErrors.hasOwnProperty('name')"> {{ formErrors.name.toString() }}</span>
            <input type='email' placeholder='Email'
                   class="w-full rounded-md py-3 px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm outline-blue-500" v-model="form.email"/>
            <span class="text-red-500" v-if="formErrors != null && formErrors.hasOwnProperty('email')"> {{ formErrors.email.toString() }}</span>
            <textarea placeholder='Message' rows="6"
                      class="w-full rounded-md px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm pt-3 outline-blue-500" v-model="form.message"></textarea>
            <span class="text-red-500" v-if="formErrors != null && formErrors.hasOwnProperty('message')"> {{ formErrors.message.toString() }}</span>
            <button type='button' @click='submit'
                    class="text-white bg-blue-500 hover:bg-blue-600 tracking-wide rounded-md text-sm px-4 py-3 w-full">
                Send
            </button>
        </form>
    </div>
</template>
<script>
export default {
    watch: {
        successMessage: function(newVal, oldVal){
            if(newVal){
                setTimeout(() => {
                    this.successMessage = '';
                }, 3000);
            }
        }
    },
    data(){
        return {
            form: {
                name: '',
                email: '',
                message: ''
            },
            baseUrl: import.meta.env.VITE_APP_URL,
            formErrors: null,
            successMessage: '',
        }
    },
    methods: {
        submit(){
            axios.post(this.baseUrl+'/save-contact', this.form)
                .then(response => {
                    if(response.data.success){
                        this.resetData();
                        this.successMessage = response.data.success;
                    }
                    if(response.data.errors){
                        this.formErrors = response.data.errors;
                    }
                }).catch(errors => {
                    console.log(errors);
            })
        },
        resetData(){
            this.form = {
                name: '',
                email: '',
                message: ''
            };
            this.formErrors = null;
            this.successMessage = '';
        }
    }
}
</script>
