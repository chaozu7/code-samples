module.exports = function(grunt) {
    const sass = require('node-sass');


    //Project configuration
    grunt.initConfig({
        sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    'css/main.css': 'sass/main.scss'
                }
            }
        },
        watch: {
            scripts: {
                files: ['sass/*.sass'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                },
            }
        },
        imagemin: {
            static: {
                options: {
                    optimizationLevel: 3,
                    svgoPlugins: [{ removeViewBox: false }],
                    //use: [mozjpeg()] // Example plugin usage
                },
                files: {
                    'img.png': 'img.png',
                    'img.jpg': 'img.jpg',
                    'img.gif': 'img.gif'
                }
            },
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'src/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'dist/'
                }]
            }
        }

    });

    //Load the plugin tasks
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    //Default

    grunt.registerTask('default', ['sass', 'imagemin', 'browser-sync', 'contrib-watch']);
};