const { defineConfig } = require("cypress");

module.exports = defineConfig({
  projectId: '6ujmtp',
  e2e: {
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
