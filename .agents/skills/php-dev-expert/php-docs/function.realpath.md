# Retorna o path absoluto canonizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.realpath.php

---

# realpath

(PHP 4, PHP 5, PHP 7, PHP 8)

realpath — Retorna o path absoluto canonizado

### Descrição

function **realpath**([string](language.types.string.md) `$path`): [string](language.types.string.md)|[false](language.types.singleton.md)

**realpath()** expande todas as ligações simbólicas
e resolve referências para `/./`, `/../` e caracteres `/`
extras no caminho `path`, e retorna o caminho
absoluto canonizado.

### Parâmetros

`path`
:   O caminho a ser verificado.
    > **Nota**:
    >
    > Ainda que caminho precise ser fornecido, o valor pode ser uma string vazia.
    > Neste caso, o valor é interpretado como o diretório atual.

### Valor Retornado

Retorna o caminho absouto canonizado em caso de sucesso. O caminho resultante
não conterá nenhuma ligação simbólica ou componentes `/./` e `/../`. Delimitadores
no final da string, como `\` e `/`, também são removidos.

**realpath()** retorna **`false`** em caso de falha,
por exemplo, se o caminho não existir.

> **Nota**:
>
> O script em execução deve ter permissões de executável em todos os diretórios
> na hierarquia, caso contrário **realpath()** retornará
> **`false`**.

> **Nota**:
>
> Para sistemas de arquivos insensíveis a maiúsculas/minúsculas, **realpath()** pode ou não
> normalizar a forma maiúscula/minúscula do caractere.

> **Nota**:
>
> A função **realpath()** não funcionará para um arquivo que
> estiver dentro de um Phar pois este caminho será virtual, e não real.

> **Nota**:
>
> No Windows, junções e ligações simbólicas a diretórios somente são expandidas
> em um nível.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal e muitas plataformas usam números inteiros de 32 bits,
> algumas funções do sistema de arquivos podem retornar resultados inesperados para arquivos
> maiores que 2GB.

### Examples

**Exemplo #1 Exemplo de **realpath()****

```
<?php
chdir('/var/www/');
echo realpath('./../../etc/passwd') . PHP_EOL;

echo realpath('/tmp/') . PHP_EOL;
?>
```

O exemplo acima produzirá:

```
/etc/passwd
```

**Exemplo #2 **realpath()** no Windows**

No Windows, **realpath()** modificará o estilo Unix de diretórios para
o estilo Windows.

```
<?php
echo realpath('/windows/system32'), PHP_EOL;

echo realpath('C:\Program Files\\'), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
C:\WINDOWS\System32
C:\Program Files
```

### Veja também

- [basename()](function.basename.md) - Retorna a última parte do caminho
- [dirname()](function.dirname.md) - Retorna o caminho para o diretório pai
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo

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
