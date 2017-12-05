var spotselect= [];
var price=0;
function myFunction1() {
    document.getElementById("button1").disabled = true;
    spotselect.push("Spot 1 Reserved ");
}
function myFunction2() {
    document.getElementById("button2").disabled = true;
    spotselect.push("Spot 2 Reserved ");
}
function myFunction3() {
    document.getElementById("button3").disabled = true;
    spotselect.push("Spot 3 Reserved ");
}
function myFunction4() {
    document.getElementById("button4").disabled = true;
    spotselect.push("Spot 4 Reserved ");
}
function myFunction5() {
    document.getElementById("button5").disabled = true;
    spotselect.push("Spot 5 Reserved ");
}
function myFunction6() {
    document.getElementById("button6").disabled = true;
    spotselect.push("Spot 6 Reserved ");
}
function myFunction7() {
    document.getElementById("button7").disabled = true;
    spotselect.push("Spot 7 Reserved ");
}
function myFunction8() {
    document.getElementById("button8").disabled = true;
    spotselect.push("Spot 8 Reserved ");
}
function myFunction9() {
    document.getElementById("button9").disabled = true;
    spotselect.push("Spot 9 Reserved ");
}
function myFunction10() {
    document.getElementById("button10").disabled = true;
    spotselect.push("Spot 10 Reserved ");
}
function myFunction11() {
    document.getElementById("button11").disabled = true;
    spotselect.push("Spot 11 Reserved ");
}
function myFunction12() {
    document.getElementById("button12").disabled = true;
    spotselect.push("Spot 12 Reserved ");
}
function myFunction13() {
    document.getElementById("button13").disabled = true;
    spotselect.push("Spot 13 Reserved ");
}
function myFunction14() {
    document.getElementById("button14").disabled = true;
    spotselect.push("Spot 14 Reserved ");
}
function myFunction15() {
    document.getElementById("button15").disabled = true;
    spotselect.push("Spot 15 Reserved ");
}
function myFunction16() {
    document.getElementById("button16").disabled = true;
    spotselect.push("Spot 16 Reserved ");
}
function myFunction17() {
    document.getElementById("button17").disabled = true;
    spotselect.push("Spot 17 Reserved ");
}
function myFunction18() {
    document.getElementById("button18").disabled = true;
    spotselect.push("Spot 18 Reserved ");
}
function myFunction19() {
    document.getElementById("button19").disabled = true;
    spotselect.push("Spot 19 Reserved ");
}
function myFunction20() {
    document.getElementById("button20").disabled = true;
    spotselect.push("Spot 20 Reserved ");
}
function myFunction21() {
    document.getElementById("button21").disabled = true;
    spotselect.push("Spot 21 Reserved ");
}
function myFunction22() {
    document.getElementById("button22").disabled = true;
    spotselect.push("Spot 22 Reserved ");
}
function myFunction23() {
    document.getElementById("button23").disabled = true;
    spotselect.push("Spot 23 Reserved ");
}
function myFunction24() {
    document.getElementById("button24").disabled = true;
    spotselect.push("Spot 24 Reserved ");
}
function myFunction25() {
    document.getElementById("button25").disabled = true;
    spotselect.push("Spot 25 Reserved ");
}
function myFunction26() {
    document.getElementById("button26").disabled = true;
    spotselect.push("Spot 26 Reserved ");
}
function myFunction27() {
    document.getElementById("button27").disabled = true;
    spotselect.push("Spot 27 Reserved ");
}
function myFunction28() {
    document.getElementById("button28").disabled = true;
    spotselect.push("Spot 28 Reserved ");
}
function myFunction29() {
    document.getElementById("button29").disabled = true;
    spotselect.push("Spot 29 Reserved ");
}
function myFunction30() {
    document.getElementById("button30").disabled = true;
    spotselect.push("Spot 30 Reserved ");
}
function myFunction31() {
    document.getElementById("button31").disabled = true;
    spotselect.push("Spot 31 Reserved ");
}
function myFunction32() {
    document.getElementById("button32").disabled = true;
    spotselect.push("Spot 32 Reserved ");
}
function myFunction33() {
    document.getElementById("button33").disabled = true;
    spotselect.push("Spot 33 Reserved ");
}
function myFunction34() {
    document.getElementById("button34").disabled = true;
    spotselect.push("Spot 34 Reserved ");
}
function myFunction35() {
    document.getElementById("button35").disabled = true;
    spotselect.push("Spot 35 Reserved ");
}
function myFunction36() {
    document.getElementById("button36").disabled = true;
    spotselect.push("Spot 36 Reserved ");
}
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function pricepoint(month){
    if (month >= 1 && month <5){
        document.getElementById("demo").innerHTML = " Price Per Spot: $10";
         price=10;
    }
    else if (month >= 5 && month <9){
        document.getElementById("demo").innerHTML = " Price Per Spot: $12";
        price=12;
    }
    else if (month == 12){
        document.getElementById("demo").innerHTML = " Price $13";
        document.getElementById("button6").disabled = true;
        document.getElementById("button16").disabled = true;
        document.getElementById("button3").disabled = true;
        document.getElementById("button32").disabled = true;
        document.getElementById("button24").disabled = true;
        document.getElementById("button20").disabled = true;
        document.getElementById("button12").disabled = true;
        document.getElementById("button1").disabled = true;
        price=13;
    }
    else if( month >= 9 && month < 12 ){
        document.getElementById("demo").innerHTML = "Price Per Spot: $13";
        price=13;
    }
}
function printArray(){
    var a= spotselect.length;
    var c= price *a;
    document.getElementById("demo2").innerHTML = "Spots Reserved: "+ spotselect  +  "Total Price: $" + c;

}
