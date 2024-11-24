import {
  ClassicEditor,
  Essentials,
  Paragraph,
  Bold,
  Italic,
  Font,
  Image,
  ImageInsert,
  MediaEmbed,
  Alignment, // Importando o plugin Alignment
} from 'ckeditor5';

ClassicEditor
  .create(document.querySelector('#editor'), {
    plugins: [
      Essentials,
      Paragraph,
      Bold,
      Italic,
      Font,
      Image,
      ImageInsert,
      MediaEmbed,
      Alignment, // Adicionando o plugin Alignment
    ],
    toolbar: [
      'undo', 'redo', '|', 'bold', 'italic', '|', 
      'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
      'selectAll', '|', 'uploadImage', 'mediaEmbed', '|',
      'imageInsert', '|', 
      'alignment:left', 'alignment:center', 'alignment:right', 'alignment:justify' // Adicionando alinhamento
    ],
    fontFamily: {
      options: [
        'default', 'Arial, Helvetica, sans-serif', 'Courier New, Courier, monospace',
        'Georgia, serif', 'Lucida Sans Unicode, Lucida Grande, sans-serif',
        'Tahoma, Geneva, sans-serif', 'Times New Roman, Times, serif',
        'Trebuchet MS, Helvetica, sans-serif', 'Verdana, Geneva, sans-serif'
      ],
      supportAllValues: true
    },
    fontSize: {
      options: [10, 12, 14, 'default', 18, 20, 22, 24, 26, 30],
      supportAllValues: true
    },
    alignment: {
      options: ['left', 'center', 'right', 'justify'] // Configurando as opções de alinhamento
    },
    shouldNotGroupWhenFull: true,
  })
  .then(editor => {
    window.editor = editor;
  })
  .catch(error => {
    console.error(error);
  });

window.onload = function() {
  if (window.location.protocol === "file:") {
    alert("This sample requires an HTTP server. Please serve this file with a web server.");
  }
};

