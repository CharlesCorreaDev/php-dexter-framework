# Destaque de sintaxe de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.highlight-string.php

---

# highlight\_string

(PHP 4, PHP 5, PHP 7, PHP 8)

highlight\_string — Destaque de sintaxe de uma string

### Descrição

function **highlight\_string**([string](language.types.string.md) `$string`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)|[true](language.types.singleton.md)

Mostra ou retorna uma marcação html para uma versão destacada do código PHP fornecido
usando as cores definidas no marcador de sintaxe integrado do PHP.

### Parâmetros

`string`
:   O código PHP a ser destacado. Isso deve incluir a etiqueta de abertura.

`return`
:   Defina este parâmetro como **`true`** para fazer esta função
    retornar o código destacado.

### Valor Retornado

Se `return` estiver definido para **`true`**, retorna o código destacado
como uma string ao invés de exibi-lo.
Caso contrário, retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O tipo de retorno foi alterado de [string](language.types.string.md)|[bool](language.types.boolean.md) para [string](language.types.string.md)|[true](language.types.singleton.md). |
| 8.3.0 | O HTML resultante foi alterado. |

### Examples

**Exemplo #1 Exemplo de **highlight\_string()****

```
<?php
highlight_string('<?php phpinfo(); ?>');
?>
```

O exemplo acima produzirá:

```
<code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span>
</span>
</code>
```

Saída do exemplo acima no PHP 8.3:

```
<pre><code style="color: #000000"><span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span></code></pre>
```

### Notas

> **Nota**:
>
> Quando o parâmetro `return`
> é usado, esta função usa um buffer de saída interno, portanto não pode ser usada em uma função
> callback da função [ob\_start()](function.ob-start.md).

A marcação HTML gerada está sujeita a alterações.

### Veja também

- [highlight\_file()](function.highlight-file.md) - Destaca a sintaxe de um arquivo
- [Diretivas INI para destaque](misc.configuration.md#ini.syntax-highlighting)

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
