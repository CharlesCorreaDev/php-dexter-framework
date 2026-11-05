# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enchant.examples.php

---

# Examples

**Exemplo #1 Exemplo de uso de Enchant**

```
<?php
$tag = 'en_US';
$r = enchant_broker_init();
$bprovides = enchant_broker_describe($r);
echo "O broker atual fornece os seguintes backend(s):\n";
print_r($bprovides);

$dicts = enchant_broker_list_dicts($r);
print_r($dicts);
if (enchant_broker_dict_exists($r,$tag)) {
    $d = enchant_broker_request_dict($r, $tag);
    $dprovides = enchant_dict_describe($d);
    echo "dicionário $tag fornece:\n";
    $wordcorrect = enchant_dict_check($d, "soong");
    print_r($dprovides);
    if (!$wordcorrect) {
        $suggs = enchant_dict_suggest($d, "soong");
        echo "Sugestões para 'soong':";
        print_r($suggs);
    }
    enchant_broker_free_dict($d);
} else {
}
enchant_broker_free($r);
?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
