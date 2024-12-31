```php
class MyClass {
    public $property;
}

$object = new MyClass();

// Solution using null coalescing
echo ($object->property ?? [])['anotherProperty'] ?? 'Default Value';
```

This improved code first checks if `$object->property` is null. If it is, the expression defaults to an empty array (`[]`).  This ensures that attempting to access `anotherProperty` won't result in an error.  A further check with `??` assigns a 'Default Value' if `anotherProperty` is also null, which handles the case completely and avoids the fatal error.