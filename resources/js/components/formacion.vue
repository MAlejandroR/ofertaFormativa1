<!--<template class="bg-fondo_feria ">-->


<template>
  <div class="flex flex-row  w-screen justify-between items-center h-75v items-center  bg-fondo2 ">
    <div class="z-10 md:z-50 invisible md:visible flex flex-col justify-between pl-8 pr-8 w-1/3  content-end items-end">

      <a target="_blank"  href="http://www.cpilosenlaces.com/ciclos-formativos/informatica-y-comunicaciones/" class="  botonFamilia flex-grow justify-end w-3/5"
         :class="{active: isActiveInformatica} ">
        <img id="informatica" class="self-end w-100"
             src="images/familias/si_informatica.png" alt="Comercio">
      </a>
      <a target="_blank"  href="http://www.cpilosenlaces.com/ciclos-formativos/imagen-y-sonido/" class="botonFamilia justify-end w-3/5" :class="{active: isActiveImagen}">
        <img id="imagen" class=" max-w-full object-fill items-end"
             src="images/familias/ii_imagen.png" alt="Imagen">
      </a>
    </div>
    <div class="flex flex-col justify-center items-center w-screen md:w-1/3">

      <video  @timeupdate="onTimeUpdate" ref="videoRef" id='video' class=""
              :autoplay="true"  autoplay controls  playsinline >
        title="Presentación jornadas"
        poster='images/logo_calidad.png' id=video>
        <source :src='src_video' type="video/mp4"/>


        <track id="subtitulo" src='videos/presentacion.vtt' kind="subtitles" srclang="es"
               label="Español" default>
        Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
        La versión descargable está disponible en <a href="URL">Enlace</a>.
      </video>
    </div>
    <div class="invisible md:visible z-10 md:z-50  flex flex-col justify-between pl-8 pr-8 w-1/3  content-start">
      <a target="_blank" href="http://www.cpilosenlaces.com/ciclos-formativos/comercio-marketing/" class="botonFamilia  w-3/5" :class="{active: isActiveComercio}">
        <img id="comercio" class=" object-fill "
             src="images/familias/sd_comercio.png" alt="Imagen">
      </a>
      <a :href='route_jornadas' class="botonFamilia   w-3/5" :class="{active: isActiveJornadas}">
        <img id="jorandas" class="ml-12 mt-10 object-fill"
             src="images/familias/id_jornadas.png" alt="Imagen">
      </a>
    </div>
  </div>

</template>
<script>
// import FamiliaSI from "./feria-main/familia-si.vue";
// import FamiliaSD from "./feria-main/familia-sd.vue";
// import FamiliaID from "./feria-main/familia-id.vue";
// import FamiliaII from "./feria-main/familia-ii.vue";
// import VideoFeria from "./feria-main/video-feria";


export default {

  name: 'formacion',
  props: [
    'src_video',
    'route_jornadas'
  ],
  data() {
    return {
      imagen: "ponencias?familia=Imagen y Sonio",
      informatica: "ponencias?familia=Informática y Comunicaciones",
      comercio: "ponencias?familia=Comercio y Marketing",
      jornadas: "ponencias?familia=jornadas",
      isActiveImagen: false,
      isActiveInformatica: false,
      isActiveComercio: false,
      isActiveJornadas: false,

    }
  },
  methods: {
    onTimeUpdate: function (event) {
      let tiempo = video.currentTime;

      if ((tiempo > 12.60) && (tiempo < 14.20)) {
        //informática
        this.isActiveInformatica = true;
      }

      if ((tiempo > 15) && (tiempo < 16.20)) {
        this.isActiveInformatica = false;
        this.isActiveImagen = true;

        //imagen

      }
      if ((tiempo > 16.50) && (tiempo < 17.20)) {
        this.isActiveImagen = false;
        this.isActiveComercio = true;

      }
      if ((tiempo > 18.00) && (tiempo < 22)) {
        //jornadas
        this.isActiveComercio = false;
        this.isActiveJornadas = true;
      }
      if (tiempo > 22) {
        this.isActiveJornadas = false;
      }
    }
  },


// components: {VideoFeria, FamiliaSi, FamiliaId, FamiliaSd, FamiliaIi}
// components: {FamiliaSI, FamiliaSD, FamiliaID, FamiliaII}

  // data(): {
  //     return: [route_form]
  // },
  mounted() {
    video.volume = 0.4;
    // this.$refs.videoRef.play();
    console.log("valor pasado " + this.imagen);
  },


}

</script>

