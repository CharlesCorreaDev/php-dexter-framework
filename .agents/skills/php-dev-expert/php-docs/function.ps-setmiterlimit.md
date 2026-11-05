# Define o limite de esquadria

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setmiterlimit.php

---

# ps\_setmiterlimit

(PECL ps >= 1.1.0)

ps\_setmiterlimit — Define o limite de esquadria

### Descrição

function **ps\_setmiterlimit**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

Se duas linhas se unirem em um ângulo pequeno e a junção da linha for definida como
`PS_LINEJOIN_MITER`, então
a ponta resultante será muito longa. O limite de esquadria é a proporção máxima
entre o comprimento da esquadria (o comprimento da ponta) e a largura da linha.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`value`
:   A proporção máxima entre o comprimento da esquadria e a largura da linha. Valores
    maiores (> 10) resultarão em pontas muito longas quando duas linhas se encontram
    em um ângulo pequeno. O padrão deve ser mantido, a menos que se saiba o que está sendo feito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_setlinecap()](function.ps-setlinecap.md) - Define a aparência das extremidades da linha
- [ps\_setlinejoin()](function.ps-setlinejoin.md) - Define como as linhas conectadas são unidas
- [ps\_setlinewidth()](function.ps-setlinewidth.md) - Define a largura de uma linha

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
