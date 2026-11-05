# O atributo SensitiveParameter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sensitiveparameter.php

---

# O atributo SensitiveParameter

(PHP 8 >= 8.2.0)

## Introdução

Esse atributo é usado para marcar um parâmetro que é confidencial e deve
ter seu valor ocultado se estiver presente em um stack trace.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****SensitiveParameter****
{

/\* Métodos \*/

public function [\_\_construct](sensitiveparameter.construct.md)()

}

## Examples

```
<?php

function defaultBehavior(
    string $secret,
    string $normal
) {
    throw new Exception('Error!');
}

function sensitiveParametersWithAttribute(
    #[\SensitiveParameter]
    string $secret,
    string $normal
) {
    throw new Exception('Error!');
}

try {
    defaultBehavior('password', 'normal');
} catch (Exception $e) {
    echo $e, PHP_EOL, PHP_EOL;
}

try {
    sensitiveParametersWithAttribute('password', 'normal');
} catch (Exception $e) {
    echo $e, PHP_EOL, PHP_EOL;
}

?>
```

A saída do exemplo acima no PHP 8.2 é semelhante a:

```
Exception: Error! in example.php:7
Stack trace:
#0 example.php(19): defaultBehavior('password', 'normal')
#1 {main}

Exception: Error! in example.php:15
Stack trace:
#0 example.php(25): sensitiveParametersWithAttribute(Object(SensitiveParameterValue), 'normal')
#1 {main}
```

## Veja também

- [Visão geral dos atributos](language.attributes.md)
- [SensitiveParameterValue](class.sensitiveparametervalue.md)

## Índice

- [SensitiveParameter::\_\_construct](sensitiveparameter.construct.md) — Constrói uma nova instância do atributo SensitiveParameter

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
