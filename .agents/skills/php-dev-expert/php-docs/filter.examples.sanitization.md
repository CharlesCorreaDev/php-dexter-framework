# Sanitização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filter.examples.sanitization.php

---

## Sanitização

**Exemplo #1 Sanitização e validação de endereços de e-mail**

```
<?php
$a = 'joe@example.org';
$b = 'bogus - at - example dot org';
$c = '(bogus@example.org)';

$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
    echo "Este endereço de e-mail (a) sanitizado é considerado válido.\n";
}

$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
    echo "Este endereço de e-mail sanitizado é considerado válido.";
} else {
    echo "Este endereço de e-mail (b) sanitizado é considerado inválido.\n";
}

$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
    echo "Este endereço de e-mail (c) sanitizado é considerado válido.\n";
    echo "Antes: $c\n";
    echo "Depois:  $sanitized_c\n";
}
?>
```

O exemplo acima produzirá:

```
Este endereço de e-mail (a) sanitizado é considerado válido.
Este endereço de e-mail (b) sanitizado é considerado inválido.
Este endereço de e-mail (c) sanitizado é considerado válido.
Antes: (bogus@example.org)
Depois: bogus@example.org
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
