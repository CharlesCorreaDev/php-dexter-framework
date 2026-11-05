# Obtém a posição do parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.getposition.php

---

# ReflectionParameter::getPosition

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

ReflectionParameter::getPosition — Obtém a posição do parâmetro

### Descrição

public function **ReflectionParameter::getPosition**(): [int](language.types.integer.md)

Obtém a posição do parâmetro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A posição do parâmetro, da esquerda para a direita, começando na posição #0.

### Veja também

- [ReflectionParameter::getName()](reflectionparameter.getname.md) - Obtém o nome do parâmetro

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
