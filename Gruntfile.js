module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        mangle: false,
        banner: '/*\nConcordia University, Project Management \n<%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        files: {
          'build/js/all.js': ['js/libs/zepto.js', 'js/main.js']
        }
      }
    },
    less: {
      options: {
        cleancss: true,
        report: 'min',
        banner: '/*! Concordia University, Project Management |\n <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        files: {
          "build/css/all.css": ["less/all.less"]
        }
      }
    },
    favicons: {
      options: {
        html: 'favicons.html',
        HTMLPrefix: 'build/images/favicons/',
        appleTouchBackgroundColor: "#ffffff",
        trueColor: true,
        precomposed: true,
      },
      icons: {
        src: 'images/blue-cross-mark.png',
        dest: 'build/images/favicons'
      }
    },
    watch: {
      scripts: {
        files: ['js/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false
        }
      },
      styles: {
        files: ['less/*.less', 'less/*/*.less'],
        tasks: ['less'],
        options: {
          spawn: false
        }
      },
      icons: {
        files: ['images/blue-cross-mark.png'],
        tasks: ['favicons'],
        options: {
          spawn: false
        }
      }
    }
  });

  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-favicons');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'less', 'favicons', 'watch']);

};