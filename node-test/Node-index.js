var server = require("./Node-servers");
var router = require("./Node-routes");

server.start(router.route);