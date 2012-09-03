<?php
/**
 * *******THIS FILE IS SPECIFICALLY USED FOR THE BLOBMS SYSTEM!!!!
 * NOT A STANDARD SMARTY PLUGINS
 **/
 


/*
 * ALL functions must be registered here in order to operate properly
 */
 $this->register_function('textbox', 'smarty_function_textbox');
 $this->register_function('eightball', 'smarty_function_eightball');
 
 
 
function smarty_function_textbox($params, &$smarty)
{
        new dBug($params);
        new dBug($smary);

}

function smarty_function_eightball($params, &$smarty)
{
    $answers = array('Yes',
                     'No',
                     'No way',
                     'Outlook not so good',
                     'Ask again soon',
                     'Maybe in your reality');

    $result = array_rand($answers);
    return $answers[$result];
}
