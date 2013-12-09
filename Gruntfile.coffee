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
					compress: true

		autoprefixer:
			single_file:
				src:  '<%= tmpDir %>css/*.css',
				dest: '<%= buildDir %>css/main.css'


		delta:
			options:
				livereload: true
			less:
				files: [ 'src/less/*.less' ]
				tasks: [ 'recess:build', 'autoprefixer' ]



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
	]
