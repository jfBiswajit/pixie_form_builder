Pixie Form Builder
=================

A minimalistic Laravel form builder package. Create and maintained by [Biswajit Biswas](https://github.com/jfBiswajit).

## Installation (Hassle-free Installation)

Pixie form builder requires PHP 7.4+. 

To get the latest version you need only require the package via Composer.
```
composer require jfbiswajit/pixie_form_builder
```

## Usage
**Input Type Text:**

```php
<!-- routes/web.php -->
Route::get('/form-builder-text', function () {

  $data = [
    'ids' => ['id1'],
    'classes' => ['class1', 'class2'],
    'type' => 'text',
    'name' => 'name',
    'values' => [
      'prev_value' => 'previous value',
    ],
    'required' => true
  ];

  return view('welcome', compact('data'));
});
```

```php
<!-- resource/view/welcome.blade.php -->
@include('form-builder::create', ['data' => $data])
```

**Input Type Select:**

```php
<!-- routes/web.php -->
Route::get('/form-builder-text', function () {

  $data = [
    'ids' => ['id1'],
    'classes' => ['class1', 'class2'],
    'type' => 'select',
    'name' => 'name',
    'values' => [
      'value1' => 'value1_name',
      'value2' => 'value2_name',
      'valueN' => 'valueN_name'
    ],
    'active' => 'value1',
    'required' => true
  ];

  return view('welcome', compact('data'));
});
```

```php
<!-- resource/view/welcome.blade.php -->
@include('form-builder::create', ['data' => $data])
```

**Input Type Radio:**

```php
<!-- routes/web.php -->
Route::get('/form-builder-text', function () {

  $data = [
    'ids' => ['id1'],
    'classes' => ['class1', 'class2'],
    'type' => 'select',
    'name' => 'name',
    'values' => [
      'value1' => 'value1_name',
      'value2' => 'value2_name',
      'valueN' => 'valueN_name'
    ],
    'active' => 'value1',
  ];

  return view('welcome', compact('data'));
});
```

```php
<!-- resource/view/welcome.blade.php -->
@include('form-builder::create', ['data' => $data])
```

**Input Type Checkbox:**

```php
<!-- routes/web.php -->
Route::get('/form-builder-text', function () {

  $data = [
    'ids' => ['id1'],
    'classes' => ['class1', 'class2'],
    'type' => 'select',
    'name' => 'name',
    'values' => [
      'value1' => 'value1_name',
      'value2' => 'value2_name',
      'valueN' => 'valueN_name'
    ],
    'active' => 'value1',
  ];

  return view('welcome', compact('data'));
});
```

```php
<!-- resource/view/welcome.blade.php -->
@include('form-builder::create', ['data' => $data])
```
