# Calcula um segredo compartilhado, dada a chave secreta de um usuário e a chave pública de outro usuário.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-scalarmult.php

---

# sodium\_crypto\_scalarmult

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_scalarmult — Calcula um segredo compartilhado, dada a chave secreta de um usuário e a chave pública de outro usuário.

### Descrição

function **sodium\_crypto\_scalarmult**([string](language.types.string.md) `$n`, [string](language.types.string.md) `$p`): [string](language.types.string.md)

Curva Elíptica Diffie-Hellman. Calcula o escalar n vezes o ponto p, em uma curva elíptica.

### Parâmetros

`n`
:   Escalar, que normalmente é uma chave secreta

`p`
:   Ponto (coordenada x), que normalmente é uma chave pública

### Valor Retornado

Uma string aleatória de 32 bytes.

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
