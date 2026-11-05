# Representação em string de um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/serializable.serialize.php

---

# Serializable::serialize

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

Serializable::serialize — Representação em string de um objeto

### Descrição

public function **Serializable::serialize**(): [?](language.types.null.md)[string](language.types.string.md)

Deve retornar uma representação em string do objeto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma representação em string do objeto ou **`null`**.

### Erros/Exceções

Dispara uma [Exception](class.exception.md) quando retorna outros tipos diferentes de string ou
**`null`**.

### Veja também

- [\_\_sleep()](language.oop5.magic.md#object.sleep)
- [\_\_serialize()](language.oop5.magic.md#object.serialize)

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
