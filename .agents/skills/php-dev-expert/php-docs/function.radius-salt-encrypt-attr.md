# Criptografa um valor com salt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-salt-encrypt-attr.php

---

# radius\_salt\_encrypt\_attr

(PECL radius >= 1.3.0)

radius\_salt\_encrypt\_attr — Criptografa um valor com salt

### Descrição

function **radius\_salt\_encrypt\_attr**([resource](language.types.resource.md) `$radius_handle`, [string](language.types.string.md) `$data`): [string](language.types.string.md)|[false](language.types.singleton.md)

Aplica o algoritmo RADIUS de criptografia com salt ao valor fornecido.

Em geral, isso é conseguido automaticamente ao fornecer a opção
**`RADIUS_OPTION_SALT`** a uma função definidora de atributos,
mas essa função pode ser usada se a construção de uma solicitação de baixo nível
for necessária.

### Parâmetros

`data`
:   Os dados a serem criptografados com salt.

### Valor Retornado

Retorna os dados criptografados com salt ou **`false`** em caso de falha.

### Veja também

- [radius\_put\_addr()](function.radius-put-addr.md) - Anexa um atributo de endereço IP
- [radius\_put\_attr()](function.radius-put-attr.md) - Anexa um atributo binário
- [radius\_put\_int()](function.radius-put-int.md) - Anexa um atributo de número inteiro
- [radius\_put\_string()](function.radius-put-string.md) - Anexa um atributo de string

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
