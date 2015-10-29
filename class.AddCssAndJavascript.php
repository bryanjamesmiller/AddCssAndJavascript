<?php if (!defined('APPLICATION')) exit();

/**
 * Provides Javascript/JQuery and CSS customization to the forum's content without changing the Vanilla Core.
 * Simply add your own code to the css/custom.css and js/custom.js files that are already included
 * within this plugin's directory
 */

$PluginInfo['AddCssAndJavascript'] = array(
    'Name' => 'AddCssAndJavascript',
    'Description' => 'Allows for safe forum customization using CSS, Javascript and JQuery.',
    'Version' => '1.0',
    'MobileFriendly' => TRUE,
    'RequiredApplications' => array('Vanilla' => '2.1.11'),
    'RequiredTheme' => FALSE,
    'RequiredPlugins' => FALSE,
);

class AddCssAndJavascriptPlugin extends Gdn_Plugin {
    public function Base_Render_Before($Sender) {
        $Sender->AddJsFile('plugins/AddCssAndJavascript/js/custom.js');
        $Sender->AddCssFile('plugins/AddCssAndJavascript/css/custom.css');
        $Sender->Head->AddString("
        //If you would like to include another item within the <head>, such as
        //Google Analytics with <script></script> tags, enter it here as a string (leave the quotes intact).
        ");
    }
}