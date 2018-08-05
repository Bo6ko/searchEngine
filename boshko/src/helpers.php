<?php

function array_map_recursive($func, $array)
{
    return filter_var($array, \FILTER_CALLBACK, array(
        'options' => $func
    ));
}

function flash($message = null)
{
    if (!isset($_SESSION)) {
        return '';
    }

    if ($message === null) {
        if (isset($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);
            return $flash;
        }
    } else {
        $_SESSION['flash'] = $message;
    }

    return '';
}



function show_errors($key, $data)
{
    if (isset($data[$key])) {
        return '<span class="errors">' . $data[$key] . '</span>';
    }
}

function get_value($key, $data, $default = '')
{
    if (isset($data[$key])) {
        return $data[$key];
    }

    return $default;
}

function build_оptions($optionsInput, $value = 0, $emptyOption = '', $emptyOptionValue = "")
{
    $options = '';

    if (!is_array($value)) {
        $value = array($value);
    }

    if ($emptyOption) {
        $optionsInput = array($emptyOptionValue => $emptyOption) + $optionsInput;
    }

    foreach ($optionsInput as $optionGroup => $group) {
        if (is_array($group)) {
            $options .= '<optgroup label="' . $optionGroup . '">';
            $options .= build_оptions($group, $value, '', '');
            $options .= '</optgroup>';
        } else {
            $selected = (in_array($optionGroup, $value) ? ' selected="selected"' : '');
            $options .= '<option' . $selected . ' value="' . $optionGroup . '">' . $group . '</option>';
        }
    }

    return $options;
}