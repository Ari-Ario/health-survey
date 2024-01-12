let counter = 0;
function openPopUp(){
    counter ++;
    let popup = document.getElementById("form1");
    popup.style.display= "block";
}

function closePopUp(){
    let popup = document.getElementById("popup");
    popup.style.display= "none";
}

function switchForm(formId) {
    // Hide the current form
    document.getElementById(document.activeElement.form.id).style.display = 'none';
    // Display the target form
    document.getElementById(formId).style.display = 'block';
}