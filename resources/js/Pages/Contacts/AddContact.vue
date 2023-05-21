<script setup>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import {useForm, Head} from '@inertiajs/vue3';

const form = useForm({
    first_name: '',
    last_name: '',
    title: '',
    company: '',
    job_title: '',
    phone_number: '',
    work_number: '',
})

</script>

<template>

    <Head title="Contacts" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('contacts.store'), {onSuccess: () => form.reset()})">
                <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                            <div class="mt-2">
                                <input type="text" 
                                    v-model="form.first_name"
                                    placeholder="First name"
                                    class="lock w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                            <div class="mt-2">
                                <input type="text" 
                                    v-model="form.last_name"
                                    placeholder="Last name"
                                    class="lock w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <input type="text"
                                    v-model="form.title"
                                    placeholder="Title"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Date of birth</label>
                            <div class="mt-2">
                                <input type="date"
                                    v-model="form.date_of_birth"
                                    placeholder="Date of birth"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        
                        <div class="sm:col-span-3">
                            <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company</label>
                            <div class="mt-2">
                                <input type="text"
                                    v-model="form.company"
                                    placeholder="Company name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="job_title" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                            <div class="mt-2">
                                <input type="text"
                                    v-model="form.job_title"
                                    placeholder="Job Title"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone number</label>
                            <div class="mt-2">
                                <input type="number"
                                    v-model="form.phone_number"
                                    placeholder="Phone number"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="work_number" class="block text-sm font-medium leading-6 text-gray-900">Work number</label>
                            <div class="mt-2">
                                <input type="number"
                                    v-model="form.work_number"
                                    placeholder="Work number"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="home_address" class="block text-sm font-medium leading-6 text-gray-900">Home address</label>
                            <div class="mt-2">
                                <input type="text"
                                    v-model="form.home_address"
                                    placeholder="Home address"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="company_address" class="block text-sm font-medium leading-6 text-gray-900">Company address</label>
                            <div class="mt-2">
                                <input type="text"
                                    v-model="form.company_address"
                                    placeholder="Company address"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                            <div class="mt-2">
                                <textarea
                                    v-model="form.note"
                                    placeholder=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </textarea>
                            </div>
                        </div>
                        <PrimaryButton class="mt-4">Save</PrimaryButton>
                    </div>
                </div>
            </form>
        </div>
        

        <!-- --------------------- -->



    </AuthenticatedLayout>



</template>