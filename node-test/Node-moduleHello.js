// Node-moduleHello.js
function moduleHello() {
    var name;
    this.setName = function (thyName) {
        name = thyName;
    };
    this.sayHello = function () {
        console.log('Hello ' + name);
    };
};
module.exports = moduleHello;