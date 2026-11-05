# Obtém as chaves armazenadas em todos os servidores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getallkeys.php

---

# Memcached::getAllKeys

(PECL memcached >= 2.0.0)

Memcached::getAllKeys — Obtém as chaves armazenadas em todos os servidores

### Descrição

public function **Memcached::getAllKeys**(): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::getAllKeys()** consulta cada servidor
memcache e recupera um array com todas as chaves armazenadas neles naquele momento.
Esta não é uma operação atômica, portanto, não é um instantâneo verdadeiramente consistente
das chaves no momento. Como o memcache não garante o retorno de todas as chaves,
você também não pode presumir que todas as chaves foram retornadas.

> **Nota**:
>
> Este método destina-se a fins de depuração e não deve ser usado em escala!

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as chaves armazenadas em todos os servidores em caso de sucesso ou **`false`** em caso de falha.

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
