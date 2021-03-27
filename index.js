'use strict'

module.exports = function (number) {
    if (isFinite(number)) {
        return number * 2;
    } else {
        return "Введите число";
    }

}