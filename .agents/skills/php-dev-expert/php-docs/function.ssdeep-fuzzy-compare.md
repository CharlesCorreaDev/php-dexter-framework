# Calcula a pontuação de correspondência entre duas assinaturas de hash difusas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssdeep-fuzzy-compare.php

---

# ssdeep\_fuzzy\_compare

(PECL ssdeep >= 1.0.0)

ssdeep\_fuzzy\_compare — Calcula a pontuação de correspondência entre duas assinaturas de hash difusas

### Descrição

function **ssdeep\_fuzzy\_compare**([string](language.types.string.md) `$signature1`, [string](language.types.string.md) `$signature2`): [int](language.types.integer.md)

Calcula a pontuação de correspondência entre `signature1`
e `signature2` usando [» 
hash por partes acionado por contexto](https://dfrws.org/2006/proceedings/12-Kornblum.pdf) e retorna a pontuação da
correspondência.

### Parâmetros

`signature1`
:   A primeira string de assinatura hash difusa.

`signature2`
:   A segunda string de assinatura hash difusa.

### Valor Retornado

Retorna um número inteiro de 0 a 100 em caso de sucesso, **`false`** em caso de falha.

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
