# PHP Practice

## Currently done:

### PHP Tags

PHP files must start with `<?php`. Without it, code is rendered as plain text.

### Output

`echo` prints strings and scalar values.

`PHP_EOL` outputs a platform-correct newline character.

`var_dump()` prints complete debug details.

### Variables

Always start with a dollar sign `$`:

example:

```php
$name = "Ado";
```

### Data Types

There are `string`, `int`, `float`, `bool`, `null`.

With `echo`, `true` prints as `1`, while `false` and `null` print as an empty string. Always check them with `var_dump()`.

### Arrays

PHP uses arrays for both indexed lists and key-value maps.

example:

```php
$list = ['ha', 'chan'];
$map = ['first' => 'chan', 'second' => 'akuruhi'];
```

Arrays cannot be printed with `echo`. Use `var_dump()` instead.

### Type Casting

Prefix the variable with the target type in parentheses: `int`, `string`, `float`, `bool`.

Casting a float to an int removes the decimals without rounding meaning `2.22` will become `2`.

### Strings

`.` is used for concatenation instead of `+` like javascript.

Double quotes `""` support variable interpolation just like backticks do in javascript.

Interpolation only accepts variables which makes it different from javascript.

### Operators

`+`, `-`, `*`, `/`, `%`, `**`.

Division `/` automatically converts the result to a `float` if fractional.

`+=`, `-=`, `*=`, `/=` update numeric values in place.

`.=` appends a string to an existing variable.

### Comparison

`==` checks for loose equality with automatic type coercion.

`===` checks for strict equality it is better to use it than `==`.

### Spaceship Operator (`<=>`)

Performs a three-way comparison which returns:

`-1` if left is smaller.
`0` if both sides are equal.
`1` if left is greater.

### Dates

`date()` formats a timestamp as a string using format characters.

`strtotime` converts a date string into a timestamp, which `date()` can then reformat.

### String Functions

`strlen()` returns the length of a string.

`strtolower()`/ `strtoupper()` convert a string's case.

`trim()` removes whitespace from both ends of a string.

`explode()` splits a string into an array u sing a seperarator, while `implode()` does the reverse.

`str_replace()` substitues all occurrences of a substring with another.

`sprintf()` formats a string using placeholders.

### Conditionals

`if`, `elseif`, `else` and `switch` work the same way as in JavaScript.

`switch` compares with `==`, not `===`, so `"1"` matches `case 1`.

### Loops

`for`, `while` and `foreach`. `foreach goes through arrays and can give you the key too.

```php
foreach ($map as $key => $value) {
    echo $key . ": ' . $value . PHP_EOL;
}
```

### Functions

Parameters and return values can have types:

```php
function add(int $a, int $b): int {
    return $a + $b;
}
```

`?string` means a string or `null`, and `void` means nothing is returned.

`declare(strict_types=1);` makes a wrong type throw a `TypeError` instead of being quietly converted.

### Array Functions

`array_push()` adds an element to the end of an array.

`array_key_exists()` checks if a key exists in an array.

`array_map()` applies a function to every element and returns a new array.

`array_filter()` keeps only elements that pass a test. It keeps original keys.

`usort()` sorts an array in place using your own comparison function.

### Forms GET, POST

`$_GET` and `$_POST` hold the data a form submits they are keyed by each input's `name` attribute.

GET puts the data in the URL and is used for retrieving things while POST sends it in the request body and is for changing things.

### Missing Keys

A key only exists if it was submitted. Reading it directly gives a warning, so use null operator `??` for a fallback.

```php
$name = $_POST['name'] ?? '';
```

### Escaping Output (XSS)

`htmlspecialchars()` converts special HTML characters so user input is displayed as text instead of running as code.

```php
echo htmlspecialchars($name);
```

### $\_SERVER

`$_SERVER` holds information about the request and the server,

It is only filled when running through a web server, not from the CLI.

### File Uploads

The form needs `method="post"` and `enctype="multipart/form-data"`, otherwise `$_FILES` stays empty.

`$_FILES['field']` contains `name`, `type`, `tmp_name`, `error` and `size`. An `error` of `0` means the upload was succesfull

Everything except `tmp_name` comes from the client and cannot be trusted.

### filter_var()

Validates a value with a filter. It returns the value if it passes and `false` if it does not pass.

```php
filter_var($email, FILTER_VALIDATE_EMAIL);
```

Always check the result with `=== false` because valid values like `0` are falsy.

### Integer Range

`FILTER_VALIDATE_INT` takes range limits in a nested options array.

```phpilter_var($email, FILTER_VALIDATE_EMAIL)
filter_var($value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 10]]);
```

It will reject decimals like `5.5` and leading zeros like `007` it also trims the surrounding whitespace.
