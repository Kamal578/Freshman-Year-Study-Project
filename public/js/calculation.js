let inputs = document.getElementsByTagName("input"); //all of the inputs
let coeffs = document.querySelectorAll('#coeff'); //coefficients
console.log(coeffs);

function check(){
    let flag = true;
    var abort = false;
    let inputs_array = [];
    for (let a = 0; a < inputs.length; a++)
        inputs_array[a] = inputs[a].value;
    
    for (let b = 0; b < inputs_array.length && !abort; b++){
        let allowed = ["0","1","2","3","4","5","6","7","8","9",".",0,1,2,3,4,5,6,7,8,9]
        let temp = inputs_array[b].split(" ").join("");
        for (let c = 0; b<temp.length && !abort;b++){ 
            if (!(temp[c] in allowed))                 
            flag = false;
            abort = true;
        }
    }
    return flag;
}

function calculation(){
    if (check()){
        let values = [];
        for (let d = 0; d < inputs.length;d++)
            values.push(parseFloat(inputs[d].value.split(" ").join(" ")));
        let coefficients_array = [];
        for (let e = 0; e <inputs.length;e++){
            coefficients_array[e] = parseFloat(coeffs[e].innerText); 
        }
        let flag = true;
        for (let v = 0; v < values.length; v++){
            let item = values[v];
            if (item>20 || item < 0){
                flag = false;
                break;
            }
        }
        if (flag){
            let Score = 0;
            for (let g = 0; g < values.length; g++){
                if (Number.isNaN(values[g])){
                    values[g] = 0;
                    Score += values[g]/20*coefficients_array[g];
                }
                else {
                    Score += values[g]/20*coefficients_array[g];
                }
                let average_outputs = document.querySelectorAll('#subject-average');
                console.log(average_outputs);
                for (let i = 0; i < inputs.length;i+=3){
                    average_outputs[i/3].innerHTML = Math.floor((values[i]*coefficients_array[i]/20+values[i+1]*coefficients_array[i+1]/20+values[i+2]*coefficients_array[i+2]/20)/(coefficients_array[i]+coefficients_array[i+1]+coefficients_array[i+2])*20 * 1e3)/1e3+"/20";
                }  
            }
            let sumOfCoeffs = 0;
            for (let j = 0; j < coefficients_array.length; j++){
                sumOfCoeffs += coefficients_array[j];
            }
            let box = document.getElementById("score");
            if (sumOfCoeffs == 30){
                box.innerHTML = Math.floor(Score * 1e3)/1e3+"/30<br>or<br>"+Math.floor(Score/30*20 * 1e3)/1e3+"/20";
            }
            else{
                box.innerHTML = Math.floor(Score * 1e3)/1e3+"/20";
            }
            box.scrollIntoView();
        }
        else{
            alert("You have entered a wrong value in one of the fields");
        }
    }
    else{
        alert("You have entered a wrong value in one of the fields");
    }
}