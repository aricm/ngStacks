module.exports = function(grunt) {
    var themeName = "ngstacks";

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> */\n',

        sass: {
            dist: {
                files: [{
                    expand: true,
                    cwd: 'themes/' + themeName + '/src/scss',
                    src: ['**/*.scss'],
                    dest: 'themes/' + themeName,
                    ext: '.css'
                }]
            }
        },
        clean: {
          css: ['wp-content/themes/schober-farms/src/css/*.css']
        },
        concat: {
            options: {
                banner: '<%= banner %>',
                stripBanners: true
            },
            app: {
                src: [
                    'themes/' + themeName + '/src/css/*.css'
                ],
                dest: 'themes/' + themeName + '/css/style.css'
            }
        },
        watch: {
            css: {
                files: 'themes/' + themeName + '/src/scss/*.scss',
                tasks: ['sass']
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');


    grunt.registerTask('default',['watch']);
    grunt.registerTask('build',['sass']);
};
