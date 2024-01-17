

class healthSurvey{

    constructor(){}

    open(){
        console.log("opened")
        location.href = "form-one.php";
    }

    close(){
        let closeForm = document.getElementById("close")
        location.href = "/index.php";
    }

    firstForm(){
        let closeForm = document.getElementById("close")
        location.href = "/form-one.php";
    }

    resetBoxes(){
        const checkedBoxes = document.querySelectorAll('#checkboxes input[type="checkbox"]')
        console.log(checkedBoxes)
        checkedBoxes.forEach(element => {
            element.checked= false;
        });
    }

    validate(){
        
        const answer1= document.getElementsByName('q1').value;
        const answer2= document.getElementsByTagName('input[name="hobbies"]:checked');
        const answer3= document.getElementsByTagName("q3");
        const answer4= document.getElementsByTagName("q4");
        breakme: 
            if (answer1 < 1){
                return breakme;
            }
            return breakme;
        console.log(answer1)
        alert("to next")
    }

}

const survey = new healthSurvey();

// Function to open the Form after calling the method inside the class
function openForm() {
    survey.open()
}

function closeForm(){
    survey.close()
}

function backToFirstForm(){
    survey.firstForm()
}

function resetCheckboxs() {
    survey.resetBoxes()
}

function validateForm(){
    const answer1= document.getElementsByName('q1').value;
    const answer2= document.getElementsByTagName('input[name="hobbies"]:checked');
    const answer3= document.getElementsByTagName("q3");
    const answer4= document.getElementsByTagName("q4");
    if (answer1 === 0){
        isValid = false;
        console.log(answer1)
        return;
    }
}