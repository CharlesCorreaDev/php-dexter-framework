# Mcrypt Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.mcrypt.php

---

# Mcrypt Funções

## Índice

- [mcrypt\_create\_iv](function.mcrypt-create-iv.md) — Cria um vetor de inicialização (IV) a partir de uma fonte aleatória
- [mcrypt\_decrypt](function.mcrypt-decrypt.md) — Descriptografa texto criptografado com parâmetros fornecidos
- [mcrypt\_enc\_get\_algorithms\_name](function.mcrypt-enc-get-algorithms-name.md) — Retorna o nome do algoritmo aberto
- [mcrypt\_enc\_get\_block\_size](function.mcrypt-enc-get-block-size.md) — Retorna o tamanho do bloco do algoritmo aberto
- [mcrypt\_enc\_get\_iv\_size](function.mcrypt-enc-get-iv-size.md) — Retorna o tamanho do IV do algoritmo aberto
- [mcrypt\_enc\_get\_key\_size](function.mcrypt-enc-get-key-size.md) — Retorna o tamanho máximo de chave suportado do modo aberto
- [mcrypt\_enc\_get\_modes\_name](function.mcrypt-enc-get-modes-name.md) — Retorna o nome do modo aberto
- [mcrypt\_enc\_get\_supported\_key\_sizes](function.mcrypt-enc-get-supported-key-sizes.md) — Retorna um array com os tamanhos de chaves suportados do algoritmo aberto
- [mcrypt\_enc\_is\_block\_algorithm](function.mcrypt-enc-is-block-algorithm.md) — Verifica se o algoritmo do modo aberto é um algoritmo de bloco
- [mcrypt\_enc\_is\_block\_algorithm\_mode](function.mcrypt-enc-is-block-algorithm-mode.md) — Verifica se a criptografia do modo aberto funciona em blocos
- [mcrypt\_enc\_is\_block\_mode](function.mcrypt-enc-is-block-mode.md) — Verifica se o modo aberto produz blocos
- [mcrypt\_enc\_self\_test](function.mcrypt-enc-self-test.md) — Executa um autoteste no módulo aberto
- [mcrypt\_encrypt](function.mcrypt-encrypt.md) — Criptografa texto simples com parâmetros fornecidos
- [mcrypt\_generic](function.mcrypt-generic.md) — Esta função criptografa dados
- [mcrypt\_generic\_deinit](function.mcrypt-generic-deinit.md) — Esta função desinicializa um módulo de criptografia
- [mcrypt\_generic\_init](function.mcrypt-generic-init.md) — Esta função inicializa todos os buffers necessários para criptografia
- [mcrypt\_get\_block\_size](function.mcrypt-get-block-size.md) — Obtém o tamanho do bloco da cifra especificada
- [mcrypt\_get\_cipher\_name](function.mcrypt-get-cipher-name.md) — Obtém o nome da cifra especificada
- [mcrypt\_get\_iv\_size](function.mcrypt-get-iv-size.md) — Retorna o tamanho do IV pertencente a uma combinação específica de cifra/modo
- [mcrypt\_get\_key\_size](function.mcrypt-get-key-size.md) — Obtém o tamanho da chave da cifra especificada
- [mcrypt\_list\_algorithms](function.mcrypt-list-algorithms.md) — Obtém um array de todas as cifras suportadas
- [mcrypt\_list\_modes](function.mcrypt-list-modes.md) — Obtém um array de todos os modos suportados
- [mcrypt\_module\_close](function.mcrypt-module-close.md) — Fecha o módulo mcrypt
- [mcrypt\_module\_get\_algo\_block\_size](function.mcrypt-module-get-algo-block-size.md) — Retorna o tamanho do bloco do algoritmo especificado
- [mcrypt\_module\_get\_algo\_key\_size](function.mcrypt-module-get-algo-key-size.md) — Retorna o tamanho máximo de chave suportado do modo aberto
- [mcrypt\_module\_get\_supported\_key\_sizes](function.mcrypt-module-get-supported-key-sizes.md) — Retorna um array com os tamanhos de chaves suportados do algoritmo aberto
- [mcrypt\_module\_is\_block\_algorithm](function.mcrypt-module-is-block-algorithm.md) — Esta função verifica se o algoritmo especificado é um algoritmo de bloco
- [mcrypt\_module\_is\_block\_algorithm\_mode](function.mcrypt-module-is-block-algorithm-mode.md) — Retorna se o módulo especificado é um algoritmo de bloco ou não
- [mcrypt\_module\_is\_block\_mode](function.mcrypt-module-is-block-mode.md) — Retorna se o modo especificado produz blocos ou não
- [mcrypt\_module\_open](function.mcrypt-module-open.md) — Abre o módulo do algoritmo e o modo a ser utilizado
- [mcrypt\_module\_self\_test](function.mcrypt-module-self-test.md) — Executa um autoteste no módulo especificado
- [mdecrypt\_generic](function.mdecrypt-generic.md) — Descriptografa dados

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
