let otpField = document.getElementById('otp');


let minNum = 10000;
let maxNum = 99999;
let otpGenerate = (min, max) => {
    return Math.floor((Math.random()) * (max - min + 1)) + min;
}
let otpCode = otpGenerate(minNum, maxNum);
otpField.value = otpCode;