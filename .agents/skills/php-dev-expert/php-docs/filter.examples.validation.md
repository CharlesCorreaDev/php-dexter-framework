# Validação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filter.examples.validation.php

---

## Validação

**Exemplo #1 Validando um endereço de e-mail com [filter\_var()](function.filter-var.md)**

```
<?php
$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "O endereço de e-mail '$email_a' é considerado válido.\n";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "O endereço de e-mail '$email_b' é considerado válido.\n";
} else {
    echo "O endereço de e-mail '$email_b' é considerado inválido.\n";
}
?>
```

O exemplo acima produzirá:

```
O endereço de e-mail 'joe@example.com' é considerado válido.
O endereço de e-mail 'bogus' é considerado inválido.
```

**Exemplo #2 Validando endereço IP com [filter\_var()](function.filter-var.md)**

```
<?php
$ip_a = '127.0.0.1';
$ip_b = '42.42';

if (filter_var($ip_a, FILTER_VALIDATE_IP)) {
    echo "O endereço IP '$ip_a' é considerado válido.";
}
if (filter_var($ip_b, FILTER_VALIDATE_IP)) {
    echo "O endereço IP '$ip_b' é considerado inválido.";
}
?>
```

O exemplo acima produzirá:

```
O endereço IP '127.0.0.1' é considerado válido.
```

**Exemplo #3 Passando opções para [filter\_var()](function.filter-var.md)**

```
<?php
$int_a = '1';
$int_b = '-1';
$int_c = '4';
$options = array(
    'options' => array(
        'min_range' => 0,
        'max_range' => 3,
    )
);
if (filter_var($int_a, FILTER_VALIDATE_INT, $options) !== FALSE) {
    echo "O inteiro A '$int_a' é considerado válido (entre 0 e 3).\n";
}
if (filter_var($int_b, FILTER_VALIDATE_INT, $options) !== FALSE) {
    echo "O inteiro B '$int_b' é considerado válido (entre 0 e 3).\n";
}
if (filter_var($int_c, FILTER_VALIDATE_INT, $options) !== FALSE) {
    echo "O inteiro C '$int_c' é considerado válido (entre 0 e 3).\n";
}

$options['options']['default'] = 1;
if (($int_c = filter_var($int_c, FILTER_VALIDATE_INT, $options)) !== FALSE) {
    echo "O inteiro C '$int_c' é considerado válido (entre 0 e 3).";
}
?>
```

O exemplo acima produzirá:

```
O inteiro A '1' é considerado válido (entre 0 e 3).
O inteiro C '1' é considerado válido (entre 0 e 3).
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
