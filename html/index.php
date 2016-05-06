<?php
  require 'include/header.php';
?>
<h1>I'm Ron Burgundy?</h1>
<p>
  We're interested in the relationship between how a person's activities online influences their attitudes towards risk.
  We will ask some questions about your computer experience, and then we will seek to extract information about your computer.
</p>
<form>
    <fieldset>
      <h3>Computer Experience</h3>
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
      <h3>Social Media</h3>
      <p>Do you spend any time on social media?</p>
      <label for="social_media_yes">Yes</label>
      <input type="radio" name="social_media" id="social_media_yes" />
      <label for="social_media_no">No</label>
      <input type="radio" name="social_media" id="social_media_no" />
    </fieldset>
    <p><strong>TODO: More Questions here...</strong></p>
</form>
<p>
  Please click <a href="fingerprinting.php">Here</a> to continue.
</p>
      <?php
        require 'include/footer.php';
      ?>
