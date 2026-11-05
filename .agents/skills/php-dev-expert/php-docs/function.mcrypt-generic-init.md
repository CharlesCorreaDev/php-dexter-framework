# Esta função inicializa todos os buffers necessários para criptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-generic-init.php

---

# mcrypt\_generic\_init

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_generic\_init — Esta função inicializa todos os buffers necessários para criptografia

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_generic\_init**([resource](language.types.resource.md) `$td`, [string](language.types.string.md) `$key`, [string](language.types.string.md) `$iv`): [int](language.types.integer.md)

É necessário chamar esta função antes de cada chamada a
[mcrypt\_generic()](function.mcrypt-generic.md) ou
[mdecrypt\_generic()](function.mdecrypt-generic.md).

### Parâmetros

`td`
:   O descritor de criptografia.

`key`
:   O comprimento máximo da chave deve ser aquele obtido chamando
    [mcrypt\_enc\_get\_key\_size()](function.mcrypt-enc-get-key-size.md) e todo valor menor
    que esse é válido.

`iv`
:   O IV normalmente deve ter o tamanho do bloco de algoritmos, mas
    o tamanho deve ser obtido chamando
    [mcrypt\_enc\_get\_iv\_size()](function.mcrypt-enc-get-iv-size.md). O IV é ignorado no ECB. O IV
    DEVE existir nos modos CFB, CBC, fluxo, nOFB e OFB. Ele precisa ser
    aleatório e único (mas não secreto). O mesmo IV deve ser usado para
    criptografia/descriptografia. Se não houver intenção de usá-lo, deve ser definido
    como zeros, mas isso não é recomendado.

### Valor Retornado

A função retorna um valor negativo em caso de erro: -3 quando o comprimento da chave
estiver incorreto, -4 quando houver um problema de alocação de memória e qualquer
outro valor de retorno é um erro desconhecido. Se ocorrer um erro, um aviso
será exibido apropriadamente. **`false`** é retornado se forem passados
parâmetros incorretos.

### Veja também

- [mcrypt\_module\_open()](function.mcrypt-module-open.md) - Abre o módulo do algoritmo e o modo a ser utilizado

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
