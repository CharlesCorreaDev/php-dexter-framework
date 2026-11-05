# ISO | Fat-Free Framework for PHP

> **Fonte / Source:** https://fatfreeframework.com/3.9/iso

---

[edit](https://fatfreeframework.com/3.9/edit/iso/main)

# ISO

The ISO class provides a list of ISO codes.

Namespace: `\`   
File location: `lib/base.php`

---

## Languages

The `languages()` method provides a list of languages indexed by ISO 639-1 language code:

```
$languages=\ISO::instance()->languages();
// direct search:
echo $languages['pl']; // Polish
echo $languages['km']; // Khmer
echo $languages['br']; // Breton
// reverse search:
echo array_search('Greek',$languages); // el
```

## Countries

The `countries()` method provides a list of countries indexed by ISO 3166-1 country code:

```
$countries=\ISO::instance()->countries();
// direct search:
echo $countries['ch']; // Switzerland
echo $countries['sg']; // Singapore
echo $countries['vu']; // Vanuatu
// reverse search:
echo array_search('Peru',$countries); // pe
```
