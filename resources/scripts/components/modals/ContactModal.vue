<template>
  <b-modal
    no-body
    id="contact-modal"
    body-bg-variant="blue"
    header-bg-variant="blue"
    footer-class="d-none "
    header-class="mb-0 pb-0"
    body-class="mt-0 pt-0 px-4"
    centered
  >
    <template #modal-header="{ close }" class="border-0">
      <h3></h3>
      <button @click="close()" class="btn btn-link p-0" style="z-index: 100;">
        <svg-vue icon="common-icons.close-light" height="40px"></svg-vue>
      </button>
    </template>

    <template #default>
      <h2 class="mb-3 ml-3 text-pink" style="margin-top: -30px;">
        {{ contactLabel }}
      </h2>
      <div class="text-light px-3 pb-3">
        <h5 class="py-2">{{ questionLabel }}</h5>
        <p class="font-secondary"><a :href="'mailto:'+questionEmail" class="text-light btn-link">{{questionEmail}}</a></p>
        <p>{{questionPhone}}</p>

        <h5 class="py-2">{{ partnerLabel }}</h5>
        <p><a :href="'mailto:'+partnerEmail" class="text-light btn-link">{{partnerEmail}}</a></p>
        <p>{{partnerPhone}}</p>

        <h5 class="py-2">{{ addressLabel }}</h5>
        <div class="address" v-html="address"></div>
      </div>
    </template>
  </b-modal>
</template>
<script>
export default {
  props:[
    "contactLabel",
    "questionLabel",
    "questionEmail",
    "questionPhone",
    "partnerLabel",
    "partnerEmail",
    "partnerPhone",
    "addressLabel",
    "address"
  ]
};
</script>
