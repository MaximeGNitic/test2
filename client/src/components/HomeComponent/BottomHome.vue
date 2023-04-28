<script setup lang="ts">
import { computed } from 'vue';

const mobile = computed(() => {
  return window.innerWidth < 600;
});
</script>

<template>
  <div v-if="mobile" class="q-py-xl">
    <div class="row">
      <div class="col-7 text-h4 text-white flex self-center q-pl-md">Faire carrière chez minopro</div>
      <div class="col-4">
        <q-img src="../../assets/card2.png" style="width: 150px; height: auto;" />
      </div>
    </div>
    <div class="q-py-md"></div>
    <div class="row text-white q-px-md">
      Lorem ipsum dolor sit amet consectetur. Varius euismod et arcu habitasse mauris id non augue metus.
      Molestie felis auctor nibh fringilla. Est tincidunt faucibus aliquet in felis integer egestas.
      Feugiat amet mattis vel consequat suspendisse vehicula. Dui egestas arcu morbi ultrices egestas pharetra. Netus auctor gravida netus tempus varius pretium.
      Feugiat amet mattis vel consequat suspendisse vehicula. Dui egestas arcu morbi ultrices egestas pharetra. Netus auctor gravida netus tempus varius pretium.
    </div>
    <div class="q-py-md"></div>
    <div class="row justify-center">
      <q-btn
          color="white"
          text-color="black"
          label="Postuler"
          class="q-px-xl"
      />
      </div>
      <div class="q-py-md"></div>
      <div class="row">
        <div class="col q-pl-md">
        <q-img src="../../assets/card2.png" style="width: 150px; height: auto;" />
      </div>
      <div class="col-7 text-h4 text-white flex self-center text-center q-pl-sm">Qui <br/> sommes-nous</div>
    </div>
    <div class="q-py-md"></div>
    <div class="row text-white q-px-md">
      Lorem ipsum dolor sit amet consectetur. Varius euismod et arcu habitasse mauris id non augue metus.
      Molestie felis auctor nibh fringilla. Est tincidunt faucibus aliquet in felis integer egestas.
      Feugiat amet mattis vel consequat suspendisse vehicula. Dui egestas arcu morbi ultrices egestas pharetra. Netus auctor gravida netus tempus varius pretium.
      Feugiat amet mattis vel consequat suspendisse vehicula. Dui egestas arcu morbi ultrices egestas pharetra. Netus auctor gravida netus tempus varius pretium.
    </div>
    <div class="q-py-md"></div>
    <div class="row justify-center">
      <q-btn
          color="white"
          text-color="black"
          label="Nous découvrir"
          class="q-px-xl"
      />
      </div>
  </div>

  

  <div v-else class="column flex-center text-white q-pt-xl">
    <div class="col self-center q-mb-xl">
      <div class="row justify-center">
        <div class="col-4 justify-center flex">
          <q-img src="../../assets/card2.png" style="width: 300px; height: auto;" />
        </div>
        <div class="col-8 justify-center flex">
          <div class="column text-center q-mx-xl">
            <div class="col-2 text-h3 justify-center text-right">Faire carrière chez minopro</div>
            <div class="col-6 flex justify-center self-center text-left q-my-lg" >
              Lorem ipsum dolor sit amet consectetur. Varius euismod et arcu habitasse mauris id non augue metus.
              Molestie felis auctor nibh fringilla. Est tincidunt faucibus aliquet in felis integer egestas.
              <br />
              <br />
              Feugiat amet mattis vel consequat suspendisse vehicula. Dui egestas arcu morbi ultrices egestas pharetra. Netus auctor gravida netus tempus varius pretium.
              <br />
              <br />
              Feugiat amet mattis vel consequat suspendisse vehicula. Dui egestas arcu morbi ultrices egestas pharetra. Netus auctor gravida netus tempus varius pretium.
            </div>
            <div class="col-2">
              <q-btn
                  color="white"
                  text-color="black"
                  label="Postuler"
                  class="q-px-xl"
              />
            </div>
          </div>  
        </div>

      </div>
    </div>  

    <div class="col self-center q-my-xl" >
      <div class="row justify-center">
        <div class="col-8 justify-center flex">
          <div class="column text-center">
            <div class="col-2 text-h3 justify-center text-left">Qui sommes-nous</div>
            <div class="col-6 text-left q-my-lg justify-center self-center" >
              Lorem ipsum dolor sit amet consectetur. Ornare id amet pellentesque at vitae metus amet. Placerat facilisis ac faucibus vitae nulla in augue nullam neque.
              <br />
              <br />
              Lorem ipsum dolor sit amet consectetur. Ornare id amet pellentesque at vitae metus amet. Placerat facilisis ac faucibus vitae nulla in augue nullam neque.
              <br />
              <br />
              Lorem ipsum dolor sit amet consectetur. Ornare id amet pellentesque at vitae metus amet. Placerat facilisis ac faucibus vitae nulla in augue nullam neque.
            </div>
            <div class="col-2">
              <q-btn
                  color="white"
                  text-color="black"
                  label="Nous découvrir"
                  class="q-px-xl"
              />
            </div>
          </div> 
        </div>
        <div class="col-4 justify-center flex">
          <q-img src="../../assets/card2.png" style="width: 300px; height: auto;" />
        </div>
      </div>
    </div>  
  </div>
</template>