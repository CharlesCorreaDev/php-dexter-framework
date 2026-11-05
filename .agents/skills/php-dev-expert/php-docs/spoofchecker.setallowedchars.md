# Define o conjunto de caracteres permitidos ao executar verificações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spoofchecker.setallowedchars.php

---

# Spoofchecker::setAllowedChars

(PHP 8 >= 8.4.0)

Spoofchecker::setAllowedChars — Define o conjunto de caracteres permitidos ao executar verificações

### Descrição

public function **Spoofchecker::setAllowedChars**([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$patternOptions` = 0): [void](language.types.void.md)

Restringe os caracteres considerados aceitáveis ​​por verificações subsequentes ao
conjunto descrito por `pattern`. Qualquer caractere fora deste conjunto
faz com que [Spoofchecker::isSuspicious()](spoofchecker.issuspicious.md) reporte um resultado.

### Parâmetros

`pattern`
:   Um conjunto de caracteres descrito como um padrão `UnicodeSet`, que é uma
    classe de caracteres no estilo de expressão regular. Deve começar com `[`
    e terminar com `]`, por exemplo, `[a-z0-9]`.

`patternOptions`
:   Uma máscara de bits que controla como `pattern` é interpretado. Deve ser
    `0`, ou **`Spoofchecker::IGNORE_SPACE`** sozinho
    ou combinado com exatamente um dos seguintes: **`Spoofchecker::CASE_INSENSITIVE`**,
    **`Spoofchecker::ADD_CASE_MAPPINGS`**, ou
    **`Spoofchecker::SIMPLE_CASE_INSENSITIVE`**.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `pattern` não for
um padrão de conjunto de caracteres válido ou se `patternOptions` não for
uma combinação válida de opções.

### Examples

**Exemplo #1 Exemplo de **Spoofchecker::setAllowedChars()****

```
<?php
$checker = new Spoofchecker();
$checker->setAllowedChars('[a-z0-9]');

var_dump($checker->isSuspicious('hello'));
var_dump($checker->isSuspicious('héllo'));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [Spoofchecker::setAllowedLocales()](spoofchecker.setallowedlocales.md) - Localidades a usar nas verificações executadas
- [Spoofchecker::isSuspicious()](spoofchecker.issuspicious.md) - Verifica se um texto fornecido contém algum caractere suspeito

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
