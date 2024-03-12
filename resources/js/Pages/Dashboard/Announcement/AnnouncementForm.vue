<template>
    <form @submit.prevent="submit">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Type</span>
                    </div>
                    <select v-model="form.type_id" class="select select-bordered w-full">
                        <option value="">Select Type</option>
                        <option v-for="type in allTypes" :key="type.id" :value="type.id">{{ type.name }}</option>
                    </select>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Category</span>
                    </div>
                    <select v-model="form.category_id" class="select select-bordered w-full">
                        <option value="">Select Category</option>
                        <option v-for="category in allCategories" :key="category.id" :value="category.id">
                            {{ category.name }}
                        </option>
                    </select>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                    <input v-model="form.title" class="input input-bordered w-full" placeholder="Type here"
                           type="text"/>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Position</span>
                    </div>
                    <input v-model="form.position" class="input input-bordered w-full" placeholder="Type here"
                           type="text"/>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Degree</span>
                    </div>
                    <input v-model="form.degree" class="input input-bordered w-full" placeholder="Type here"
                           type="text"/>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Open Position</span>
                    </div>
                    <input v-model="form.open_position" class="input input-bordered w-full" placeholder="Type here"
                           type="number"/>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Start Date</span>
                    </div>
                    <input v-model="form.start_date" class="input input-bordered w-full" type="date"/>
                </label>
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">End Date</span>
                    </div>
                    <input v-model="form.end_date" class="input input-bordered w-full" type="date"/>
                </label>
            </div>
        </div>
        <p class="mt-6">files</p>
        <div class="flex flex-wrap gap-2 mt-1 border border-1 border-gray-300 p-2 rounded-lg">
            <a v-for="(doc,index) in displayDocs" :key="index" :href="doc.url"
               target="_blank">
                <div class="flex flex-col items-center">
                    <div class="text-gray-500">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor"
                             stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="text-gray-500 truncate max-w-32">{{ doc.name }}</p>
                </div>
            </a>
            <button class="w-20 border border-dashed rounded-md" type="button" @click="$refs.documentInput.click()">+
            </button>
        </div>
        <div>
            <label class="form-control w-full">
                <input ref="documentInput" class="input hidden" multiple type="file" @change="handleFileUpload"/>
            </label>
        </div>
        <div class="w-full flex justify-end mt-4">
            <button class="btn btn-primary uppercase" type="submit">Submit</button>
        </div>
    </form>

</template>
<script>
import {Inertia} from "@inertiajs/inertia";
import {Link} from "@inertiajs/vue3";
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "AnnouncementForm",
    components: {Link},
    emits: ['submit'],

    props: {
        announcement: {
            type: Object,
            required: true
        },
        allTypes: {
            type: Array,
            required: true
        },
        allCategories: {
            type: Array,
            required: true
        }
    },
    mounted() {

    },
    data() {
        return {
            form: useForm({
                type_id: this.announcement.type_id,
                category_id: this.announcement.category_id,
                title: this.announcement.title,
                position: this.announcement.position,
                degree: this.announcement.degree,
                open_position: this.announcement.open_position,
                start_date: this.announcement.start_date,
                end_date: this.announcement.end_date,
                files: []
            })
        };
    },
    methods: {
        handleFileUpload(event) {
            this.form.files = event.target.files;
        },
        submit() {
            this.$emit('submit', this.form)
        },
    },
    watch: {},
    computed: {
        displayDocs() {
            let docs = [];
            if (this.announcement.documents.data.length > 0) {
                this.announcement.documents.data.forEach(doc => {
                    docs.push(doc);
                })
            }
            if (this.form.files.length > 0) {
                [...this.form.files].forEach(function (file) {
                    const newFile = {
                        id: 0,
                        name: file.name,
                        url: URL.createObjectURL(file)
                    }
                    docs.push(newFile)
                });

            }
            return docs;
        }
    }
};
</script>
