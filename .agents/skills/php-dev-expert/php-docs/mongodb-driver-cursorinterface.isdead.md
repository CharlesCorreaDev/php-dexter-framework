# Verifica se o cursor pode ter resultados adicionais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorinterface.isdead.php

---

# MongoDB\Driver\CursorInterface::isDead

(mongodb >=1.6.0)

MongoDB\Driver\CursorInterface::isDead — Verifica se o cursor pode ter resultados adicionais

### Descrição

abstract public function **MongoDB\Driver\CursorInterface::isDead**(): [bool](language.types.boolean.md)

Verifica se o cursor pode ter resultados adicionais disponíveis para leitura. Um
cursor está inicialmente "vivo", mas pode ficar "morto" por qualquer um dos
seguintes motivos:

- O avanço de um cursor não-adaptável não retornou um documento
- O cursor encontrou um erro
- O cursor leu seu último lote até a conclusão
- O cursor atingiu seu limite configurado

Isso é útil principalmente com cursores adaptáveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se não houver resultados adicionais disponíveis ou **`false`**
caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Cursor::isDead()](mongodb-driver-cursor.isdead.md) - Verifica se o cursor está esgotado ou pode ter resultados adicionais

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
