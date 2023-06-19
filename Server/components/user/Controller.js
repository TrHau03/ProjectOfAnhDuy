const userService = require('./Service');
const getAllUser = async () => {
    try {
        return await userService.getAllUser();
    } catch (error) {
        console.log(error);
    }
}
const deleteUsersByID = async (id) => {
    try {
        return await userService.deleteUsersByID(id);
    } catch (error) {
        console.log(error);
    }
}

const loginApp = async (email, password) => {
    
    try {
        return await userService.loginApp(email, password);
    } catch (error) {
        console.log("User Controller error:", error);
    }
    return false;
}

const registerApp = async (email, name, password) => {
    try {
        return await userService.registerApp(email, name, password);
    } catch (error) {
        console.log("User Controller error:", error);
    }
    return false;
}
module.exports = { loginApp, registerApp, getAllUser, deleteUsersByID };