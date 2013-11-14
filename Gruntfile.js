module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    compass: {
      dev: {
        options: {
          sassDir: 'scss',
          cssDir: 'css',
          outputStyle: 'compressed',
          noLineComments: true
        }
      }
    },

    watch: {
      options: {
        livereload: true
      },
      sass: {
        files: ['scss/*.scss'],
        tasks: ['compass:dev']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['compass']);

};
