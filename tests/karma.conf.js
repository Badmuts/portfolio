module.exports = function(config) {
  var configuration = {
    basePath: '../',
    frameworks: ['jasmine'],
    reporters: ['progress', 'junit'],
    // web server port
    port: 9876,

    // enable / disable colors in the output (reporters and logs)
    colors: true,

    // level of logging
    logLevel: config.LOG_INFO,

    // enable / disable watching file and executing tests whenever any file changes
    autoWatch: true,

    // start these browsers
    browsers: ['Chrome', 'Firefox'],

    // Continuous Integration mode
    singleRun: false,

    junitReporter: {
      outputDir: 'tests/reports/', // results will be saved as $outputDir/$browserName.xml
      suite: ''
    },

    files: [
        'assets/components/jquery/dist/jquery.js',
        'assets/components/velocity/velocity.js',
        'tests/**/*.js'
    ]
  };

  if (process.env.CIRCLE_TEST_REPORTS) {
    configuration.junitReporter.outputDir = process.env.CIRCLE_TEST_REPORTS + '/karma';
  }

  config.set(configuration);
};
