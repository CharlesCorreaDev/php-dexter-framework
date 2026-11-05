# Esta função criptografa dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-generic.php

---

# mcrypt\_generic

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_generic — Esta função criptografa dados

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_generic**([resource](language.types.resource.md) `$td`, [string](language.types.string.md) `$data`): [string](language.types.string.md)

Esta função criptografa dados. Os dados são preenchidos com "`\0`"
para garantir que o comprimento dos dados seja n \* tamanho\_do\_bloco. Esta
função retorna os dados criptografados. Observe que o comprimento
da string retornada pode, de fato, ser maior que a entrada,
devido ao preenchimento dos dados.

Se houver necessidade de armazenar os dados criptografados em um banco de dados, certifique-se de armazenar
a string inteira conforme retornada por mcrypt\_generic, ou a string não
será totalmente descriptografada corretamente. Se a string original tiver 10 caracteres
e o tamanho do bloco for 8 (use
[mcrypt\_enc\_get\_block\_size()](function.mcrypt-enc-get-block-size.md) para determinar o
tamanho do bloco), seriam necessários pelo menos 16 caracteres no campo do banco de dados.
Observe que a string retornada por [mdecrypt\_generic()](function.mdecrypt-generic.md) terá
16 caracteres também... use rtrim($str, "\0") para remover o preenchimento.

Se os dados forem, por exemplo, armazenados em um banco de dados MySQL, lembre-se de que
campos "varchar" automaticamente têm espaços finais removidos durante a
inserção. Como dados criptografados podem terminar em um espaço (ASCII 32), os dados serão
corrompidos por essa remoção. Em vez disso, armazene os dados em um campo tinyblob/tinytext (ou
maior).

### Parâmetros

`td`
:   O descritor de criptografia.

    O identificador de criptografia deve sempre ser inicializado com
    [mcrypt\_generic\_init()](function.mcrypt-generic-init.md) com uma chave e um IV antes
    de chamar esta função. Onde a criptografia é feita, devem ser liberados os
    buffers de criptografia chamando [mcrypt\_generic\_deinit()](function.mcrypt-generic-deinit.md).
    Veja [mcrypt\_module\_open()](function.mcrypt-module-open.md) para um exemplo.

`data`
:   Os dados a serem criptografados.

### Valor Retornado

Retorna os dados criptografados.

### Veja também

- [mdecrypt\_generic()](function.mdecrypt-generic.md) - Descriptografa dados
- [mcrypt\_generic\_init()](function.mcrypt-generic-init.md) - Esta função inicializa todos os buffers necessários para criptografia
- [mcrypt\_generic\_deinit()](function.mcrypt-generic-deinit.md) - Esta função desinicializa um módulo de criptografia

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
