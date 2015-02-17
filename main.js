/**
 *
 * Created by fiifiappiah on 2/5/15.
 *
 */

function reverseString(sReverse){
    sReverse = document.getElementById("reverseInput").value;
    if(!sReverse){
        alert("Please Enter a string");
    }else{
        alert(sReverse.split("").reverse().join(""));
    }
}


function reverseSentence(sReverse){
    sReverse = document.getElementById("reverseSentenceInput").value;
    if(!sReverse){
        alert("Please Enter a valid sentence");
    }else{
        alert(sReverse.split(" ").reverse().join(" "));
    }
}



function InternalMultiWordSort(sTextArea){

    sTextArea = document.getElementById('internalMultiSortText').value.split('\n');
    var sorted = [], sortedInternally = [];

    function internalSort(word){
        if(word){
            sortedInternally.push(word.split('').sort().join(''));
        }
    }


    sTextArea.forEach(internalSort);

    sorted = sortedInternally.sort();
    alert(sorted);
    console.log(sorted);

}


function getRemainder(numerator, denominator) {

    numerator = document.getElementById('numerator').value;
    denominator = document.getElementById('denominator').value;

    if(numerator && denominator){
        alert(numerator % denominator);
    }
    else{
        alert("You need to enter both a numerator and a denominator");
    }

}


function getFactorial(factor) {

    function factorial(factor){

        if (factor< 2) {
            return 1;
        } else {
            return(factor* factorial(factor-1));
        }
    }
    alert(factorial(factor));
}


function calculateExp(exp){
    var answer = 0;

    function calculate(varNum){

        switch(varNum){
            case 'a':
                answer +=1
                break;
            case 'b':
                answer +=7
                break;
            case 'c':
                answer +=3
                break;
            case 'd':
                answer +=14
                break;
            case '-':
                answer *=-1
                break;
        }
    }

    if(exp){
        expChars = exp.split('').reverse();
        expChars.forEach(calculate);
    }
    alert(answer);
}




$( document ).ready(function() {
        $('#qtn1Btn').click(function(){
            $('#qtn1Code').toggle();
        });
});

