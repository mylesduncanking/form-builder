# Form Builder

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mylesduncanking/form-builder/badges/quality-score.png)](https://scrutinizer-ci.com/g/mylesduncanking/form-builder)
[![Build Status](https://scrutinizer-ci.com/g/mylesduncanking/form-builder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mylesduncanking/form-builder/build-status/master)

- [Installation](#installation)
- [Opening and closing a form](#open-and-close)
- [Usage](#usage)
    - [Usage breakdown](#usage-breakdown)
- [Licence](#licence)


## Installation
--  

## Open and close
```html
<!-- FormBuilder::open(); -->
<form method="POST">

<!-- FormBuilder::open('POST', 'foo/bar', true); -->
<form action="foo/bar" method="POST" enctype="multipart/form-data">

<!--
FormBuilder::open('POST', 'foo/bar', true, [
    'class' => 'form form-horizontal'
]);
-->
<form action="foo/bar" method="POST" enctype="multipart/form-data" class="form form-horizontal">

<!-- FormBuilder::close(); -->
</form>
```

### Open and close breakdown
`FormBuilder::open(`[Method](#method)`, `[Action](#action)`, `[Files](#files)`, `[Options](#open-options)`);`

---

#### Method
**Description:** Type of method to process form  
**Required:** No  
**Default:** `POST`  
**Type:** String  

#### Action
**Description:** URL to send submitted form to  
**Required:** No  
**Default:** `null`  
**Type:** String  

#### Files
**Description:** Does the form have a file upload within it?  
**Required:** No  
**Default:** `false`  
**Type:** Boolean  

#### Open options
**Description:** Additonal options which can be applied to the form tag  
**Required:** No  
**Default:** `array()`  
**Type:** Array  

Option | Details | Default
------ | ------- | -------
class  | Class to be applied | `null`

## Usage
```html
<!-- FormBuilder::outputText('first_name'); -->
<div class="col-md-6">
    <input type="text" name="first_name" class="form-control">
</div>

<!-- FormBuilder::outputText('first_name', 'First name'); -->
<div class="col-md-6">
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First name" class="form-control">
    </div>
</div>

<!-- FormBuilder::outputText('first_name', 'First name', 'Bill'); -->
<div class="col-md-6">
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First name" value="Bill" class="form-control">
    </div>
</div>

<!-- FormBuilder::outputText('first_name', 'First name', null, true); -->
<div class="col-md-6">
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First name" required="required" aria-required="required" class="form-control">
    </div>
</div>

<!--
FormBuilder::outputText('email', 'Email address', null, false, [
    'col'         => 'col-md-12',
    'addon-after' => '@domain.com',
    'placeholder' => 'Please enter your email address'
]);
-->
<div class="col-md-12">
    <div class="form-group">
        <label>Email address</label>
        <div class="input-group">
            <input type="text" name="email" placeholder="Please enter your email address" class="form-control">
            <span class="input-group-addon">@domain.com</span>
        </div>
    </div>
</div>
```

### Usage breakdown
`FormBuilder::`[response](#response)[Type](#type)`(`[Name](#name)`, `[Label](#label)`, `[Value](#value)`, `[Required](#required)`, `[Options](#options)`);`

---

#### Response
**Description:** Type of response the class will give  
**Required:** Yes  
**Type:** String  

Option | Details
------ | -------
output | Echo the content
build  | Return the HTML

---

#### Type
**Description:** Type of form field  
**Required:** Yes  
**Type:** String  

Option   | Details                   | Specific options
------   | -------                   | ----------------
Text     | `<input type="text">`     |
Number   | `<input type="number">`   | [Options](#number-specific-options)
Email    | `<input type="email">`    |
Checkbox | `<input type="checkbox">` | [Options](#checkbox-specific-options)
Radio    | `<input type="radio">`    | [Options](#radio-specific-options)
Hidden   | `<input type="hidden">`   |
File     | `<input type="file">`     | [Options](#file-specific-options)
Tel      | `<input type="tel">`      |
Button   | `<input type="button">`   |
Select   | `<select></select>`       | [Options](#select-specific-options)
Textarea | `<textarea></textarea>`   |

---

#### Name
**Description:** Name of form field  
**Required:** No  
**Default:** `null`  
**Type:** String  

---

#### Value
**Description:** Value of form field  
**Required:** No  
**Default:** `null`  
**Type:** String  

---

#### Label
**Description:** Label to accompany form field  
**Required:** No  
**Default:** `null`  
**Type:** String  

---

#### Required
**Description:** True or False if the form field is to be marked as required  
**Required:** No  
**Default:** `false`  
**Type:** Boolean  

---

#### Options
**Description:** Additonal options which can be applied to the form field  
**Required:** No  
**Default:** `array()`  
**Type:** Array  

#### Generic options
Option | Details | Default
------ | ------- | -------
addon-after  | Addon after content                     | `null`
addon-before | Addon before content                    | `null` 
col          | Class to be added to column wrapper     | `col-md-6`
disabled     | Is the field disabled?                  | `false`
field-class  | Class to be added to field              | `form-control` 
placeholder  | Placeholder for form field if available | Will match label

#### Checkbox specific options
Option | Details | Default
------ | ------- | -------
checked | Check box or not | `false`

#### Radio specific options
Option | Details | Default
------ | ------- | -------
checked | Check box or not | `false`

#### Number specific options
Option | Details | Default
------ | ------- | -------
max  | Max number to go to          | `null`
min  | Min number to go to          | `null`
step | Amount to increment value by | `null`

#### File specific options
Option | Details | Default
------ | ------- | -------
accept   | Extensions to allow | `null`
multiple | Allow multiple      | `false`

#### Select specific options
Option | Details | Default
------ | ------- | -------
multiple | Allow multiple               | `false`
options  | Options to display in select | `array()`

---

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
