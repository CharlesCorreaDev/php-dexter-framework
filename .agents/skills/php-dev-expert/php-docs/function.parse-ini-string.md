# Interpreta uma string de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.parse-ini-string.php

---

# parse\_ini\_string

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

parse\_ini\_string — Interpreta uma string de configuração

### Descrição

function **parse\_ini\_string**([string](language.types.string.md) `$ini_string`, [bool](language.types.boolean.md) `$process_sections` = **`false`**, [int](language.types.integer.md) `$scanner_mode` = **`INI_SCANNER_NORMAL`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**parse\_ini\_string()** retorna as configurações da string
`ini_string` em um array associativo.

A estrutura da string INI é a mesma dos php.ini's.

**Aviso**

Esta função não deve ser usada com entradas não confiáveis a menos que
`scanner_mode` seja igual a **`INI_SCANNER_RAW`**,
já que a saída analisada pode conter valores de constantes
sensíveis como as que contêm senhas de banco de dados.

### Parâmetros

`ini_string`
:   O conteúdo do arquivo ini sendo interpretado.

`process_sections`
:   Definindo o último parâmetro `process_sections`
    como **`true`**, você recupera um array multidimensional com o nome
    das seções e configurações inclusas. O padrão para
    `process_sections` é **`false`**

`scanner_mode`
:   O parâmetro pode ser **`INI_SCANNER_NORMAL`** (default) ou
    **`INI_SCANNER_RAW`**. Se **`INI_SCANNER_RAW`**
    for fornecido, então os valores das opçoes não serão analisados.

    A partir do PHP 5.6.1, também pode ser especificado como **`INI_SCANNER_TYPED`**.
    Nesse modo, os tipos boolean, null e integer são preservados quando possível.
    Os valores string `"true"`, `"on"` e `"yes"`
    são convertidos em **`true`**. `"false"`, `"off"`, `"no"`
    e `"none"` são considerados **`false`**. `"null"` é convertido para **`null`**
    no modo tipado. Além disso, todas as strings numéricas são convertidas para o tipo inteiro, se possível.

### Valor Retornado

As configurações são retornadas como um [array](language.types.array.md) associativo, se sucesso
e **`false`** caso falhe.

### Notas

> **Nota**:
>
> Existem algumas palavras reservadas que não podem ser usadas como
> chaves em arquivos INI. Elas incluem: `null`, `yes`,
> `no`, `true` e `false`,
> `on`, `off`, `none`.
> Valores `null`, `off`, `no` e
> `false` retornam como `""`, e valores
> `on`, `yes` e `true` resultam
> em `"1"`, a menos que o modo **`INI_SCANNER_TYPED`** seja usado.
> Os caracteres `?{}|&~![()^"` não podem ser usados em
> lugar algum na chave e têm significado especial no valor.

### Veja também

- [parse\_ini\_file()](function.parse-ini-file.md) - Interpreta um arquivo de configuração

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
