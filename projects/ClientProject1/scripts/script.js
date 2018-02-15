// global variables
var defaultOptionEle;
var selectedValue1;
var selectedValue2;
var selectedValue3;
var heroesArray;
var imageSection;
var lastName = document.getElementById("lName");

// array options
var initialOptions = ["role", "difficulty"];
var role = ["offense", "defense", "tank", "support"];
var difficulty = ["easy", "medium", "hard"];

// If the browser cannot do document.getElementById or window.addEventListener redirect it to the badBrowser page
function browserCheck(){
    if (!document.getElementById || !window.addEventListener){
        window.location.assign("badBrowser.html");
    }
}

// JSON ('exceptional' part)
var xmlhttp = new XMLHttpRequest();
var url = "scripts/heroes.json";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        heroesArray = JSON.parse(xmlhttp.responseText);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

// Make default option for dropdowns
function makeDefaultOption(text){
    defaultOptionEle = document.createElement("option");
    defaultOptionEle.setAttribute("value", "default");
    // Makes this option unclickable and selected by default
    defaultOptionEle.setAttribute("disabled", "disabled");
    defaultOptionEle.setAttribute("selected", "selected");
    defaultOptionEle.text = text;
    return defaultOptionEle;
}

// load in each image from the json file and animate each one in
function loadImages(myArray, i){
    imageSection = document.getElementById("imageLocation");
    // Function that loads in the appropriate character image with appropriate title and alt tag (the character name)
    // Each image is within a link to the hero's link page and is appended in the image div and fades in
        var imageLoaded = document.createElement("img");
        var characterPage = document.createElement("a");
        characterPage.setAttribute("href", myArray[i].link);
        characterPage.setAttribute("target", "_blank");
        characterPage.setAttribute("id", myArray[i].name + "Link");
        imageLoaded.setAttribute("id", myArray[i].name);
        imageLoaded.setAttribute("alt", myArray[i].name);
        imageLoaded.setAttribute("title", myArray[i].name);
        imageSection.appendChild(characterPage);
        characterPage.appendChild(imageLoaded);
        imageLoaded.src = myArray[i].picture;
        fadeIn(myArray[i].name);
}


// Initial loading of all images
function loadAllImages(myArray){
    for (var i = 0; i < myArray.length; i++) {
        loadImages(myArray, i);
    };
}

// Remove all images before the new images that match what the user selected come in
function removeAllImages(myArray)
{
    // Make sure all images are there to remove
    loadAllImages(myArray);

    var allImages = document.getElementsByTagName("img");
    while (allImages.length > 0){
        allImages[0].parentNode.removeChild(allImages[0]);
    }
}

// Used to add the images that match what the user selected
function addImages(myArray, input1, input2, input3)
{
    // Calls removeAllImages to make sure there are all viable options before outputting the new ones
    removeAllImages(myArray);

    // Check each hero to see if they are the selected role (if roll is selected) or difficulty (if difficulty is selected) and load it in
    for(var i = 0; i < myArray.length; i++){
        if(input1 == "role" && myArray[i].role == input2){
            loadImages(myArray, i);
        }
        else if(input1 == "difficulty" && myArray[i].difficulty == input2){
            loadImages(myArray, i);
        }
    }
    // For the single image
    for(var j = 0; j < myArray.length; j++)
    if(myArray[j].name == input3){
            removeAllImages(myArray);
            loadImages(myArray, j);
        }
}

// If the node has a first node (which means it has any nodes), remove them
function clearChildNodes(myNode){
    if(typeof(myNode) != "undefined" && myNode.hasChildNodes()){
        while(myNode.firstChild){
            myNode.removeChild(myNode.firstChild);
        }
    }
}

// Create the form and initial dropdown
function makeFirstDropdown(){
    // Create the "select" element
    var selectEle = document.createElement("select");
    selectEle.setAttribute("id", "firstSelect");

    var myDiv = document.getElementById("firstDropdown");
    myDiv.appendChild(selectEle);
    makeDefaultOption("-- Select Hero Sorting Method --");
    selectEle.appendChild(defaultOptionEle);
    for (var i = 0; i < initialOptions.length; i++) {
        var optionsEle = document.createElement("option");
        optionsEle.setAttribute("value", initialOptions[i]);
        // Separate the first character and uppercase it, then add the rest of the text
        optionsEle.text = initialOptions[i].charAt(0).toUpperCase() + initialOptions[i].slice(1);
        selectEle.appendChild(optionsEle);
    }
}

// Takes in selectedValue1 and creates next dropdown based on that value
function makeSecondDropdown(value1){
    var selectEle = document.createElement("select");
    selectEle.setAttribute("id", "secondSelect");

    // store the location of the secondDropdown div to latter append all child nodes there
    var myDiv = document.getElementById("secondDropdown");

    // Store location of thirdDropdown for clearing purposes
    var nextDiv = document.getElementById("thirdDropdown");

    // Clear childNodes if there are any before making new ones
    clearChildNodes(myDiv);
    clearChildNodes(nextDiv);

    myDiv.appendChild(selectEle);

    if(value1 == "difficulty"){
        makeDefaultOption("-- Sort by Difficulty --");
        selectEle.appendChild(defaultOptionEle);
        // Loop through all difficulty options and append them to the select element
        for (var i = 0; i < difficulty.length; i++) {
        var optionsEle = document.createElement("option");
        optionsEle.setAttribute("value", difficulty[i]);
        // Separate the first character and uppercase it, then add the rest of the text
        optionsEle.text = difficulty[i].charAt(0).toUpperCase() + difficulty[i].slice(1);
        selectEle.appendChild(optionsEle);
        }
    }
    else if(value1 == "role"){
        makeDefaultOption("-- Sort by Role --");
        selectEle.appendChild(defaultOptionEle);
        // Loop through all role options and append them to the select element
        for (var i = 0; i < role.length; i++) {
        var optionsEle = document.createElement("option");
        optionsEle.setAttribute("value", role[i]);
        // Separate the first character and uppercase it, then add the rest of the text
        optionsEle.text = role[i].charAt(0).toUpperCase() + role[i].slice(1);
        selectEle.appendChild(optionsEle);
        }
    }
}

// Takes in selectedValue1 and selectedValue2 and generates characters that meet that criteria from the JSON file
function makeThirdDropdown(value1, value2, myArray){
    var selectEle = document.createElement("select");
    selectEle.setAttribute("id", "thirdSelect");

    // Store the div location and append the select element
    var myDiv = document.getElementById("thirdDropdown");

    // Clear childNodes if there are any before making new ones
    clearChildNodes(myDiv);

    // Give default option for third dropdown
    makeDefaultOption("-- Select Your Hero --");

    myDiv.appendChild(selectEle);
    selectEle.appendChild(defaultOptionEle);

    for (var i = 0; i < myArray.length; i++) {
        // If the user selected role, get all the characters that have the role of the value selected and append them to the dropdown

        var characterOption = document.createElement("option");

        if(value1 == "role" && myArray[i].role == value2){
            characterOption.setAttribute("value", myArray[i].name);
            characterOption.text = myArray[i].name;
            selectEle.appendChild(characterOption);
        }
        // If the user selected difficulty, get all the characters that have the difficulty of the value selected and append them to the dropdown
        else if(value1 == "difficulty" && myArray[i].difficulty == value2){
            characterOption.setAttribute("value", myArray[i].name);
            characterOption.text = myArray[i].name;
            selectEle.appendChild(characterOption);
        }
    }
}

// Takes all the input and returns the result to the user
function returnResult(value1, value2, value3){
    var h1 = document.createElement("h1");

    // Create all the text to return as text nodes
    var line1 = document.createTextNode("\r\nYou chose to select by " + value1 + ".");
    var line2 = document.createTextNode("\r\nYou narrowed the options down by selecting " + value2 + ".");
    var line3 = document.createTextNode("\r\nYour final result was " + value3 + ".");

    var resultDiv = document.getElementById("result");
    clearChildNodes(resultDiv);
    // Append all the textNode results
    if (value3 != null){
        resultDiv.appendChild(h1);
        h1.appendChild(line1);
        h1.appendChild(line2);
        h1.appendChild(line3);
    }
}

// Animate element function
function moveIn(id){
    fadeIn(id);
    var ele = document.getElementById(id);
    // Store the left margin then add 1 pixel until it reaches 40 px
    var curLeft = parseInt(getComputedStyle(ele).marginLeft);
    var newLeft = curLeft + 1;
    ele.style.marginLeft = newLeft + "px";
    if(curLeft < 39){
        setTimeout(function(){
            moveIn(id);
        }, 30);
    }
}
function fadeIn(id){
    var ele = document.getElementById(id);
    // Ensure the opacity is 0 incase the user is choosing something new
    if (typeof(ele) != "undefined" && ele.value != null)
    ele.style.opacity = "0";
    // Have the element "fade" in
    ele.style.opacity = "1";
    ele.style.transition = "opacity 4s";
}

// Functions to store the input values in local storage and use for other dropdowns
function getValue1(){
    // Store the option the user selected and return it
    var selectOption1 = document.getElementById("firstSelect");
    var optionValue1 = selectOption1.options[selectOption1.selectedIndex].value;
    selectedValue1 = optionValue1;
    localStorage.setItem("firstValue", selectedValue1);

    return selectedValue1;
}
function getValue2(){

    var selectOption2 = document.getElementById("secondSelect");
    var optionValue2 = selectOption2.options[selectOption2.selectedIndex].value;
    selectedValue2 = optionValue2;
    localStorage.setItem("secondValue", selectedValue2);

    return selectedValue2;
}
function getValue3(){
    var selectOption3 = document.getElementById("thirdSelect");
    var optionValue3 = selectOption3.options[selectOption3.selectedIndex].value;
    selectedValue3 = optionValue3;

    localStorage.setItem("thirdValue", selectedValue3);

    return selectedValue3;
}
// Force reset the third value for
function resetValue3(){
    selectedValue3 = null;
    localStorage.setItem("thirdValue", selectedValue3);
}

// Set localStorage items to initial value of "null" and remove
// the stored first and last name and then refresh the page
function resetStoredValues(){
    localStorage.setItem("firstValue", null);
    localStorage.setItem("secondValue", null);
    localStorage.setItem("thirdValue", null);
    localStorage.removeItem("fName");
    localStorage.removeItem("lName");
    SetCookie("fn", null);
    SetCookie("ln", null);
    location.reload();
}

// Bonus feature
function sendEmail(value3){
    if(value3 != null){
        window.open("mailto:friend@friends.com?subject=Hey Buddy, it's me " + localStorage.getItem("fName") + "&body=I sorted through all of the Overwatch heroes and picked " + value3 + "!");
    }
    else{
        window.alert("You haven't picked a hero yet!");
    }
}

// Get the first name if there is none and greet them once/if there is one
function useStoredData(){
    var welcomeLoc = document.getElementById("welcome");
    var h1Ele = document.createElement("h1");
    var greeting;
    var firstName = "";
    // If the browser uses local storage, get the first name
    if(window.localStorage){
       if(localStorage.getItem("fName")){
            firstName = localStorage.getItem("fName")
            greeting = document.createTextNode("Welcome back " + firstName + "!");
            welcomeLoc.appendChild(h1Ele);
            h1Ele.appendChild(greeting);
        }
        // if it uses local storage, but the first name cannot be found,
        // prompt the user until they put in a value
        else{
            while( firstName.length == 0){
                firstName = prompt("Please enter your first name", "");
                if(firstName == null){
                    firstName = "";
                }
            }
            localStorage.setItem("fName", firstName);
            greeting = document.createTextNode("Welcome " + firstName + "! Enjoy browsing the Overwatch heroes!");
            welcomeLoc.appendChild(h1Ele);
            h1Ele.appendChild(greeting);
        }
    }
    // Do the same thing but with cookies
    if(GetCookie("fn") == null && !window.localStorage){
        var welcomeLoc = document.getElementById("welcome");
        var h1Ele = document.createElement("h1");
        var firstName = prompt("Please enter your first name", "");
        var greeting = document.createTextNode("Welcome " + firstName + "! Enjoy browsing the Overwatch heroes!");
        SetCookie("fn", firstName);
        welcomeLoc.appendChild(h1Ele);
        h1Ele.appendChild(cookieGreeting);
    }
    else if(GetCookie("fn") != null && !window.localStorage){
        var welcomeLoc = document.getElementById("welcome");
        var h1Ele = document.createElement("h1");
        var firstName = GetCookie("fn");
        var greeting = document.createTextNode("Welcome back " + firstName + "!");
        welcomeLoc.appendChild(h1Ele);
        h1Ele.appendChild(greeting);
    }
}