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
