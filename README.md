# Form Builder
- [Installation](#installation)
- [Usage](#usage)
    - [Usage breakdown](#usage-breakdown)
- [Licence](#licence)


## Installation
--  

## Usage
```php
FormBuilder::outputText('first_name');

FormBuilder::outputText('first_name', 'First name');

FormBuilder::outputText('first_name', 'First name', 'Bill');

FormBuilder::outputText('first_name', 'First name', null, true);

FormBuilder::outputText('email', 'Email address', null, false, [
    'col'         => 'col-md-12',
    'addon-after' => '@domain.com',
    'placeholder' => 'Please enter your email address'
]);
```
will output
```html
<div class="col-md-6">
    <input type="text" name="first_name">
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First name">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First name" value="Bill">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First name" required="required" aria-required="required">
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label>Email address</label>
        <div class="input-group">
            <input type="text" name="email" placeholder="Please enter your email address">
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

Option   | Details
------   | -------
Text     | `<input type="text">`
Number   | `<input type="number">`
Email    | `<input type="email">`
Checkbox | `<input type="checkbox">`
Radio    | `<input type="radio">`
Hidden   | `<input type="hidden">`
Select   | `<select></select>`
Textarea | `<textarea></textarea>`

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

Option | Details | Default
------ | ------- | -------
placeholder | Placeholder for form field if available | Will match label
col | Class to be added to column wrapper | `col-md-6`
addon-before | Addon before content | `null` 
addon-after | Addon after content | `null`

---

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
