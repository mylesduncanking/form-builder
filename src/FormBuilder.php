<?php

namespace mylesduncanking\FormBuilder;

/**
 * Form builder helper class
 *
 * @author  Myles Duncan-King <myles@southcoastweb.co.uk>
 */

class FormBuilder
{
    // Output opening form tag
    public function open($method = 'POST', $action = null, $files = false, $options = [])
    {
        $attributes[] = 'method="'.$method.'"';
        $attributes[] = $action != null ? 'action="'.$action.'"' : '';
        $attributes[] = $files == true ? 'enctype="multipart/form-data"' : '';

        $attributes[] = isset($options['class']) ? 'class="'.$options['class'].'"' : '';

        $attributes = implode(' ', $attributes);
        echo '<form '.$attributes.'>';
    }
    
    // Output closing form tag
    public function close()
    {
        echo '</form>';
    }
}
