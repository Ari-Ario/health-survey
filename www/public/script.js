

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

    // Validation of Ranges
    validateFirstForm() {
      event.preventDefault();

      let q1Input = document.getElementById("q1");
      let q2Input = document.getElementById("q2");

      let q2Options = document.getElementsByName("q2");
      let q4Options = document.getElementsByName("q4");
      let q2Selected = false;
      let q4Selected = false;

      const minAllowedValue = 1;

      if (q1Input.value < minAllowedValue) {
        alert("Not at all cannot br accept as an answer");
      }

      if (q2Input.value < minAllowedValue) {
        alert("Not at all cannot br accept as an answer");
      }

      // question 2
      for (let i = 0; i < q2Options.length; i++) {
        if (q2Options[i].checked) {
          q2Selected = true;
          break;
        }
      }

      if (!q2Selected) {
        alert("Error: Please select an option for question 2.");
        return false;
      }

      // question 4

      for (let i = 1; i < q4Options.length; i++) {
        if (q4Options[i].checked) {
          q4Selected = true;
          break;
        }
      }

      if (!q4Selected) {
        alert("Error: Please select an option for question 4.");
        return false;
      } else {
        document.getElementById("formfirst").submit();
      }


      let q5Input = document.getElementById("q5");
    //   const minAllowedValue = 1;

      if (q5Input.value < minAllowedValue) {
        alert("A littel cannot be accept as an answer");
      } 
    }

    validateSecondForm() {
      event.preventDefault();

      let q6Input = document.getElementsByName("q6")[0].value;
      let q7Input = document.getElementsByName("q7")[0].value;
      let q8Input = document.getElementsByName("q8")[0].value;
      let q9Input = document.getElementsByName("q9")[0].value;
      let q10Input = document.getElementsByName("q10")[0].value;

      if (
        q6Input === "" ||
        q7Input === "" ||
        q8Input === "" ||
        q9Input === "" ||
        q10Input === ""
      ) {
        alert("Error: Please fill in all the required fields");
      } else {
        document.getElementById('formsecond').submit()
    }

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

function validateFirstForm() {
  survey.validateFirstForm() 
}

function validateSecondForm(){
  survey.validateSecondForm()
}

