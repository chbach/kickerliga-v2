'use strict'

module.exports = (grunt) ->
	require('matchdep').filterDev('grunt-*').forEach grunt.loadNpmTasks

	grunt.initConfig
		buildDir: 'assets/'
		tmpDir: '.tmp/'
		pkg: grunt.file.readJSON 'package.json'
		src:
			less: 'src/less/main.less'
		clean:
			tmp: [ '.tmp' ]

		recess:
			build:
				src: [ '<%= src.less %>' ],
				dest: '<%= tmpDir %>css/main.css',
				options:
					compile: true
					compress: false

		autoprefixer:
			options: 
				browsers: ['> 1%', 'last 2 versions', 'ff 17', 'opera 12.1', 'android 2.3']
			single_file:
				src:  '<%= tmpDir %>css/*.css',
				dest: '<%= buildDir %>css/main.css'

		cssmin:
			options: 
				keepSpecialComments: 0
				report: 'gzip'
			minify: 
				expand: true,
				cwd: '<%= buildDir %>/css',
				src: ['*.css', '!*.min.css'],
				dest: '<%= buildDir %>/css',
				ext: '.min.css'
				


		delta:
			options:
				livereload: true
			less:
				files: [ 'src/less/*.less' ]
				tasks: [ 'recess:build', 'autoprefixer', 'cssmin:build' ]



	grunt.renameTask 'watch', 'delta'
	grunt.registerTask 'watch', [
		'build'
		'delta'
	]

	# The default task is to build.
	grunt.registerTask 'default', [ 'build' ]
	grunt.registerTask 'build', [
		'clean'
		'recess:build'
		'autoprefixer'
		'cssmin:minify'
	]
