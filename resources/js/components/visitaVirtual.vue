<template>
  <video @timeupdate="onTimeUpdate" ref="videoRef" id='video'
         autoplay controls playsinline>
    title="Presentación puertas abiertas"
    poster='images/logo_calidad.png' id=video>
    <source :src='src_video' type="video/mp4"/>


    <!--        <track id="subtitulo" src='videos/puertas_abiertas.vtt' kind="subtitles" srclang="es"-->
    <!--               label="Español" default>-->
    Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
    La versión descargable está disponible en <a href="URL">Enlace</a>.
  </video>

</template>
<script>
export default {
  name: 'jornadas',
  props:[
    'src_video',
  ],
  methods: {
    onTimeUpdate: function (event) {
      let tiempo = video.currentTime;
      console.log("Valor de tiempo "+tiempo);
      if (tiempo >=117) {
        window.location.href = "http://localhost:8000";
      }
    }
  }
}
</script>
