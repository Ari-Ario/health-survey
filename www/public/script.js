
function closeForm(){
    let closeForm = document.getElementById("close")
        location.href = "/index.php";
    
    // if (closeForm){ section.scrollIntoView({ behavior: 'smooth' });}
}

function backToFirstForm(){
    let closeForm = document.getElementById("close")
        location.href = "/form-one.php";
    
    // if (closeForm){ section.scrollIntoView({ behavior: 'smooth' });}
}

// Function to open the Form
function openForm() {
    console.log("opened")
    // Load content into the popup
    location.href = "form-one.php";
}
