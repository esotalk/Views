<?php
// Made on August 1, 2015 by yathish
// Built on settings page of attachments plugin

if (!defined("IN_ESOTALK")) exit;

/**
 * Displays the settings form for the Views plugin.
 *
 * @package esoTalk
 */

$form = $data["viewsSettingsForm"];
?>
<?php echo $form->open(); ?>

<div class='section'>

<ul class='form'>

<li>
<!-- Show checkbox for admin to enable/disable showing view count in search results (home page as well) 
-->
<?php echo $form->checkbox("allowSearchViews"); ?>
<label>Conversation Views</label>
<small><?php echo T("Show view count on home page conversations list. <br>View count wil also be shown in search results."); ?></small>
</li>

</ul>

</div>

<div class='buttons'>
<?php echo $form->saveButton("viewsSave"); ?>
</div>

<?php echo $form->close(); ?>
