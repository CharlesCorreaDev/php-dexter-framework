# Obtém o valor de uma opção de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ini-get.php

---

# ini\_get

(PHP 4, PHP 5, PHP 7, PHP 8)

ini\_get — Obtém o valor de uma opção de configuração

### Descrição

function **ini\_get**([string](language.types.string.md) `$option`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o valor da opção de configuração em caso de sucesso.

### Parâmetros

`option`
:   O nome da opção de configuração.

### Valor Retornado

Retorna o valor da opção de configuração como uma string em caso de sucesso ou uma
string vazia para valores **`null`**. Retorna **`false`** se a
opção de configuração não existir.

### Examples

**Exemplo #1 Alguns exemplos de **ini\_get()****

```
<?php

/*
Considere o php.ini com as seguintes configurações:

display_errors = On
opcache.enable_cli = Off
post_max_size = 8M
*/

echo 'display_errors = ' . ini_get('display_errors') . "\n";
echo 'opcache.enable_cli = ' . (int) ini_get('opcache.enable_cli') . "\n";
echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
echo 'post_max_size + 1 = ' . (rtrim(ini_get('post_max_size'), 'KMG') + 1) . "\n";
echo 'post_max_size in bytes = ' . ini_parse_quantity(ini_get('post_max_size'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
display_errors = 1
opcache.enable_cli = 0
post_max_size = 8M
post_max_size+1 = 9
post_max_size em bytes = 8388608
```

### Notas

> **Nota**:
> **Ao consultar valores booleanos**  
>
> Um valor booleano ini `off` será retornado como uma
> string vazia ou "0", enquanto um valor booleano ini `on` será
> retornado como "1".
> A função também pode retornar a string literal do valor INI.

> **Nota**:
> **Ao consultar valores de tamanho de memória**  
>
> Muitos valores de tamanho de memória ini, como
> [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize), são
> armazenados no arquivo php.ini em notação abreviada.
> **ini\_get()** retornará a string exata armazenada no
> arquivo php.ini e *NÃO* o seu equivalente [int](language.types.integer.md).
> Tentar funções aritméticas normais com esses valores
> não trará os resultados esperados. A
> função [ini\_parse\_quantity()](function.ini-parse-quantity.md) pode ser usada para converter
> a notação abreviada em bytes.

> **Nota**:
>
> **ini\_get()** não consegue ler opções ini de "array" como, por exemplo,
> `pdo.dsn.*`, e retorna **`false`** neste caso.

### Veja também

- [get\_cfg\_var()](function.get-cfg-var.md) - Obtém o valor de uma opção de configuração do PHP
- [ini\_get\_all()](function.ini-get-all.md) - Obtém todas as opções de configuração
- [ini\_parse\_quantity()](function.ini-parse-quantity.md) - Obtém o tamanho interpretado da sintaxe abreviada do ini
- [ini\_restore()](function.ini-restore.md) - Restaura o valor de uma opção de configuração
- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração

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
