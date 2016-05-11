<?php
  require 'include/header.php';
?>

<h1>Extracting Information About Your Computer</h1>


<form>
  <fieldset>
    <legend>Computer Experience</legend>
    <p>Please indicate the level of experience you consider yourself to have with computers and the Internet.</p>
    <label for="very_low_experience">Very low</label>
    <input type="radio" name="very_low_experience" id="experience" />
    <label for="low_experience">Low</label>
    <input type="radio" name="experience" id="low_experience" />
    <label for="medium_experience">Medium</label>
    <input type="radio" name="experience" id="medium_experience" />
    <label for="high_experience">High</label>
    <input type="radio" name="experience" id="high_experience" />
    <label for="very_high_experience">Very High</label>
    <input type="radio" name="experience" id="very_high_experience" />
  </fieldset>
  <fieldset>
    <legend>Social Media</legend>
    <p>Do you spend any time on social media?</p>
    <label for="social_media_yes">Yes</label>
    <input type="radio" name="social_media" id="social_media_yes" />
    <label for="social_media_no">No</label>
    <input type="radio" name="social_media" id="social_media_no" />
  </fieldset>
  <p><strong>TODO: More Questions here...</strong></p>  
  <p>Is this the computer you would ordinarily use for social media stuff?</p>
  <label for="usual_computer_yes">Yes</label>
  <input type="radio" name="usual_computer" id="usual_computer_yes" />
  <label for="social_media_no">No</label>
  <input type="radio" name="usual_computer" id="usual_computer_no" />
</fieldset>
</form>

<?php
  require 'include/footer.php';
?>
