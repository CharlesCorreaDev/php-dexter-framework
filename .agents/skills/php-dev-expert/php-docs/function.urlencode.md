# Codifica uma string no formato URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.urlencode.php

---

# urlencode

(PHP 4, PHP 5, PHP 7, PHP 8)

urlencode — Codifica uma string no formato URL

### Descrição

function **urlencode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Esta função é conveniente ao codificar uma string a ser usada em uma parte de
consulta de uma URL, como uma maneira conveniente de passar variáveis ​​para a próxima página.

### Parâmetros

`string`
:   A string a ser codificada.

### Valor Retornado

Retorna uma string na qual todos os caracteres não alfanuméricos, exceto
`-_.`, foram substituídos por um sinal de porcentagem
(`%`) seguido por dois dígitos hexadecimais e espaços codificados
como sinais de adição (`+`). Ela é codificada da mesma forma que
os dados enviados por um formulário WWW são codificados, ou seja, da mesma forma que no
tipo de mídia `application/x-www-form-urlencoded`. Isso
difere da codificação [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986) (consulte
[rawurlencode()](function.rawurlencode.md)) porque, por razões históricas, os espaços
são codificados como sinais de adição (+).

### Examples

**Exemplo #1 Exemplo de **urlencode()****

```
<?php
$userinput = 'Dados123!@-_ +';
echo "Entrada do usuário: $userinput\n";
echo '<a href="mycgi?foo=', urlencode($userinput), '">';
?>
```

O exemplo acima produzirá:

```
Entrada do usuário: Dados123!@-_ +
<a href="mycgi?foo=Dados123%21%40-_+%2B">
```

**Exemplo #2 Exemplo de **urlencode()** e [htmlentities()](function.htmlentities.md)**

```
<?php
$foo = 'Dados123!@-_ +';
$bar = "Diferente de $foo";
echo "foo: $foo\n";
echo "bar: $bar\n";
$query_string = 'foo=' . urlencode($foo) . '&bar=' . urlencode($bar);
echo '<a href="mycgi?' . htmlentities($query_string) . '">';
?>
```

O exemplo acima produzirá:

```
foo: Dados123!@-_ +
bar: Diferente de Dados123!@-_ +
<a href="mycgi?foo=Dados123%21%40-_+%2B&amp;bar=Diferente+de+Dados123%21%40-_+%2B">
```

### Notas

> **Nota**:
>
> Deve-se ter cuidado com variáveis ​​que possam corresponder a entidades HTML. Coisas como
> &amp, &copy e &pound são analisadas pelo navegador e a
> entidade real é usada no lugar do nome da variável desejada. Este é um
> incômodo óbvio sobre o qual o W3C vem falando às pessoas há anos.
> A referência está aqui: [» https://www.w3.org/TR/html4/appendix/notes.html#h-B.2.2](https://www.w3.org/TR/html4/appendix/notes.html#h-B.2.2).
>
> O PHP suporta a alteração do separador de argumentos para o ponto e vírgula
> sugerido pelo W3C por meio da diretiva INI arg\_separator. Infelizmente, a maioria
> dos agentes de usuário não envia dados de formulário neste formato separado por ponto e vírgula.
> Uma maneira mais portável de contornar isso é usar &amp; em vez de & como
> separador. Não é necessário alterar o arg\_separator do PHP para isso.
> Deve ser mantido como &, mas as URLs devem simplesmente ser codificadas usando
> [htmlentities()](function.htmlentities.md) ou
> [htmlspecialchars()](function.htmlspecialchars.md).

### Veja também

- [urldecode()](function.urldecode.md) - Decodifica uma URL codificada
- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [rawurlencode()](function.rawurlencode.md) - Codifica uma URL de acordo com RFC 3986
- [rawurldecode()](function.rawurldecode.md) - Decodifica uma URL
- [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)

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
