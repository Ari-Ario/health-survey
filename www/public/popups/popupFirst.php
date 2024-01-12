<section id="form1" class="popup" >
  <section class="popup-content" role="document">
      
    <section class="form-section-one">
        <section class=""><span class="close" onclick="closePopUp()">&times;</span></section>
    </section>

    <section class="form-section-one">
      <form action="/popups/popupDoing.php" method="POST">
        <input type="text" placeholder="first input">
        <input type="text" placeholder="second input">
        <input type="text" placeholder="third input">
        <input type="text" placeholder="fourth input">
        <input type="text" placeholder="fifth input">
        <input type="submit" value="Next" onclick="switchForm('form2')">
      </form>
    </section>

  </section>
</section>